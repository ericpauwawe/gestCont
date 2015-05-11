<?php

/* gestContContactBundle::layout.html.twig */
class __TwigTemplate_a9b093f26a8daa2daeb02c021f40d85c1f803cf05ed268d11109e1eb3b18eacb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Contats";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    
      
";
    }

    public function getTemplateName()
    {
        return "gestContContactBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
