<?php

namespace gestCont\ContactBundle\Controller;
use gestCont\ContactBundle\Entity\Contact;
use gestCont\ContactBundle\Entity\ContactRepository;
use gestCont\UserBundle\Entity\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller
{
    public function indexAction()
    {
        return $this->render('gestContContactBundle:Default:index.html.twig');
    }
    public function AjouterAction(Request $request)
    {
        $contact=new Contact();
        $me=$this->getUser();
        $contactRepo=$this->getDoctrine()->getManager()->getRepository('gestContContactBundle:Contact');
        $contacts=$contactRepo->getMyContactsName("".$me);

        $form = $this->get('form.factory')->createBuilder('form', $contact)
          ->add('user2', 'entity', array(
        'class'    => 'gestContUserBundle:User',
        'property' => 'username',
        'multiple' => false,
        'label' => 'Membres',
        'query_builder' => function(UserRepository $repo) use($contacts,$me){
           return $repo->getNotContacts($contacts,$me);
        }
        ))
        ->getForm();
         $form->handleRequest($request);
         if($form->isValid()){
             $contact->setDate(new \DateTime());
             $contact->setUser1($me);
             $em=$this->getDoctrine()->getManager();
             $em->persist($contact);
             
             $em->flush();
             $request->getSession()->getFlashBag()->add('notice', 'Contact enregistré.');
              return $this->redirect($this->generateUrl('gest_cont_contact_lister'));
         }
       
        return $this->render('gestContContactBundle:Contact:add.html.twig',array(
      'form' => $form->createView(),));
    }
     public function ListerAction()
    {
        $contactRepo=$this->getDoctrine()->getManager()->getRepository('gestContContactBundle:Contact');
        $contacts=$contactRepo->getMyContactsName("".$this->getUser());
        $info=array();
        foreach ($contacts as $c){
            $info[]=$this->getDoctrine()->getManager()->getRepository('gestContUserBundle:User')->getInfos($c);
        }
        return $this->render('gestContContactBundle:Contact:lister.html.twig',array('info'=>$info));
    }
     public function SupprimerAction(Request $request)
    {
         $contact=new Contact;
        $me="".$this->getUser();
        $form = $this->get('form.factory')->createBuilder('form', $contact)
          ->add('user2', 'entity', array(
        'class'    => 'gestContContactBundle:Contact',
        'property' => 'user2',
        'multiple' => false,
        'label' => 'Contacts',
        'query_builder' => function(ContactRepository $repo) use($me){
           return $repo->getMyContacts($me);
        }
           ))
        ->getForm();
         $form->handleRequest($request);
          if($form->isValid()){
             $em=$this->getDoctrine()->getManager();
             $em->remove($contact);
             $em->flush();
             $request->getSession()->getFlashBag()->add('notice', 'Contact supprimé.');
              return $this->redirect($this->generateUrl('gest_cont_contact_lister'));
         }
         return $this->render('gestContContactBundle:Contact:supp.html.twig', array(
      'form' => $form->createView(),));
    }
    
}
