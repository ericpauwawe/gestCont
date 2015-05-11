<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_f571a76ca21c30667240697dcbd7e25700c7ecb34fb116c4c3ebf9a6fafa80b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"form-horizontal\">
    ";
        // line 5
        echo "    

    ";
        // line 8
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"form-group\">
 
      ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label")));
        echo "
      ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
      <div class=\"col-sm-4\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      </div>
    </div>
     <div class=\"form-group\">
      ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label")));
        echo "
      ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
        <div class=\"col-sm-4\">
          ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
     <div class=\"form-group\">
      ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label")));
        echo "
      ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
        <div class=\"col-sm-4\">
          ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
      <div class=\"form-group\">
      ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label")));
        echo "
      ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
        <div class=\"col-sm-4\">
          ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
      ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label")));
        echo "
      ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'errors');
        echo "
        <div class=\"col-sm-4\">
          ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
      ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label")));
        echo "
      ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo "
        <div class=\"col-sm-4\">
          ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
      ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "site", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label")));
        echo "
      ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "site", array()), 'errors');
        echo "
        <div class=\"col-sm-4\">
          ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "site", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
   <div class=\"form-group\">
       <div class=\"col-sm-offset-3 col-sm-5\">
        <button class=\"btn btn-primary\" type=\"submit\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "<span class=\"glyphicon glyphicon-ok\"></span></button>
       </div>
    </div>  
   
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 62,  150 => 59,  144 => 56,  139 => 54,  135 => 53,  128 => 49,  123 => 47,  119 => 46,  112 => 42,  107 => 40,  103 => 39,  96 => 35,  91 => 33,  87 => 32,  80 => 28,  75 => 26,  71 => 25,  64 => 21,  59 => 19,  55 => 18,  48 => 14,  43 => 12,  39 => 11,  32 => 8,  28 => 5,  22 => 3,  19 => 2,);
    }
}
