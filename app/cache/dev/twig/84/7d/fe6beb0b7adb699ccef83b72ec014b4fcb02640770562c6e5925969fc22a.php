<?php

/* gestContContactBundle:Contact:add.html.twig */
class __TwigTemplate_847dfe6beb0b7adb699ccef83b72ec014b4fcb02640770562c6e5925969fc22a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("gestContContactBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "gestContContactBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "             
          
<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("gest_cont_contact_ajouter");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"form-horizontal\">

  ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
     <div class=\"form-group\">
      ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user2", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label")));
        echo "
      ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user2", array()), 'errors');
        echo "
        <div class=\"col-sm-4\">
          ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user2", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
     <div class=\"form-group\">
       <div class=\"col-sm-offset-3 col-sm-5\">
        <button class=\"btn btn-primary\" type=\"submit\">Ajouter aux contacts <span class=\"glyphicon glyphicon-plus\"></span></button>
       </div>
    </div>  
    
</form>
        
  ";
    }

    public function getTemplateName()
    {
        return "gestContContactBundle:Contact:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  56 => 12,  51 => 10,  47 => 9,  42 => 7,  35 => 5,  31 => 3,  28 => 2,);
    }
}
