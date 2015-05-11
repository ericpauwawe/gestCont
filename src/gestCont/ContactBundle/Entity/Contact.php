<?php

namespace gestCont\ContactBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *

 * @ORM\Entity(repositoryClass="gestCont\ContactBundle\Entity\ContactRepository")
 * @ORM\Table(name="contact")
 */
class Contact
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="user1", type="string", length=255)
     */
    private $user1;

    /**
     * @var string
     *
     * @ORM\Column(name="user2", type="string", length=255)
     */
    private $user2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user1
     *
     * @param string $user1
     * @return Contact
     */
    public function setUser1($user1)
    {
        $this->user1 = $user1;

        return $this;
    }

    /**
     * Get user1
     *
     * @return string 
     */
    public function getUser1()
    {
        return $this->user1;
    }

    /**
     * Set user2
     *
     * @param string $user2
     * @return Contact
     */
    public function setUser2($user2)
    {
        $this->user2 = $user2;

        return $this;
    }

    /**
     * Get user2
     *
     * @return string 
     */
    public function getUser2()
    {
        return $this->user2;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Contact
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
     public function __construct()
  {
   
    $this->date = new \Datetime();
  }
}
