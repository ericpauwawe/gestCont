<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_2c372ceafd27e2963ace705b676326f080cc695f39144b43e674743d9aeb6571 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Compte";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    
          

        <div>
            ";
        // line 8
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 11
        echo "        </div>
    
";
    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 9
        echo "             
            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  53 => 8,  47 => 11,  45 => 8,  39 => 4,  36 => 3,  30 => 2,);
    }
}
