<?php

/* gestContContactBundle:Contact:lister.html.twig */
class __TwigTemplate_c9e0e57189884bde38ca10f0a96d5249066dd93d29dff231e3b01be6203913f8 extends Twig_Template
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
  <h2>Mes contacts</h2>           
  <table class=\"table\">
    <thead>
      <tr>
        <th>Nom d'utilisateur</th>
        <th>Email</th>
        <th>Adresse</th>
        <th>Telephone</th>
        <th>Site web</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["info"]) ? $context["info"] : $this->getContext($context, "info")));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 17
            echo "      <tr>
        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], 0, array()), "username", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], 0, array()), "email", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], 0, array()), "adresse", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], 0, array()), "telephone", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["i"], 0, array()), "site", array()), "html", null, true);
            echo "</td>
      </tr>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </tbody>
  </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "gestContContactBundle:Contact:lister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 25,  69 => 22,  65 => 21,  61 => 20,  57 => 19,  53 => 18,  50 => 17,  46 => 16,  31 => 3,  28 => 2,);
    }
}
