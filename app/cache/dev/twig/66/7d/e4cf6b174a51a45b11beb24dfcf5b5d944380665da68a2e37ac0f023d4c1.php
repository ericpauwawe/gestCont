<?php

/* gestContContactBundle:Default:index.html.twig */
class __TwigTemplate_667de4cf6b174a51a45b11beb24dfcf5b5d944380665da68a2e37ac0f023d4c1 extends Twig_Template
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
        echo "    <p><h1>Bienvenue</h1>
    <p>Cette plate-forme vous permettra de faire de nouveaux contacts.</p> 
";
    }

    public function getTemplateName()
    {
        return "gestContContactBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
