<?php

/* ::layout.html.twig */
class __TwigTemplate_dfd541c6c3734af7272e1a5d51db01aae9dd3346d8a80d4023841cc046f17df9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "  <nav class=\"navbar navbar-default\">
      ";
        // line 16
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 17
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 22
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 24
        echo "        </div>

        ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 27
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 28
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</nav>
</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Mon carnet d'adresse</h1>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Menu</h3>
        <ul class=\"nav\">
                    <li class=\"dropdown\">
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">Mon compte <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Mon profil</a></li>
                            <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Modifier mon profil</a></li>
                            <li><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Changer mon mot de passe</a></li>
    
                        </ul>
                    </li>
                    <li class=\"divider-vertical\"></li>
                    <li class=\"dropdown\">
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Mes contacts <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                             <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("gest_cont_contact_lister");
        echo "\">Lister mes contacts</a></li>
                            <li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("gest_cont_contact_ajouter");
        echo "\">Ajouter un contact</a></li>
    
                            <li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("gest_cont_contact_supp");
        echo "\">Supprimer un contact</a></li>
    
                        </ul>
                    </li>
                   
                </ul>
        
      </div>
        
      <div id=\"content\" class=\"col-md-9\">
       
        ";
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "      </div>
    </div>

    <hr>

    <footer>
        <p>Eric Pauwawe © ";
        // line 82
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
    </footer>
  </div>

  ";
        // line 86
        $this->displayBlock('javascripts', $context, $blocks);
        // line 91
        echo "
</body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Mon Carnet d'adresse";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
    }

    // line 73
    public function block_body($context, array $blocks = array())
    {
        // line 74
        echo "           
        ";
    }

    // line 86
    public function block_javascripts($context, array $blocks = array())
    {
        // line 87
        echo "    ";
        // line 88
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 88,  216 => 87,  213 => 86,  208 => 74,  205 => 73,  200 => 13,  198 => 12,  195 => 11,  189 => 9,  182 => 91,  180 => 86,  173 => 82,  165 => 76,  163 => 73,  149 => 62,  144 => 60,  140 => 59,  135 => 57,  126 => 51,  122 => 50,  118 => 49,  100 => 33,  94 => 32,  85 => 29,  80 => 28,  75 => 27,  71 => 26,  67 => 24,  59 => 22,  53 => 19,  49 => 18,  44 => 17,  42 => 16,  39 => 15,  37 => 11,  32 => 9,  23 => 2,);
    }
}
