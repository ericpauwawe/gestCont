<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_af2926f008ff49a6020c0f5443dda83474298216f6f2f8170a306bbf85f4aaa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "<form role=\"form\" class=\"form-horizontal\" action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    <div class=\"form-group\">
        <label class=\"control-label col-sm-3\" for=\"username\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"col-sm-5\">
            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
        </div>
    </div>
    <div class=\"form-group\">
        <label class=\"control-label col-sm-3\" for=\"password\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <div class=\"col-sm-5\">
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />
        </div>
    </div>
    <div class=\"form-group\"> 
        <div class=\"col-sm-offset-3 col-sm-5\">
            <div class=\"checkbox\">    
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            </div>
        </div>
    </div>
    <div class=\"form-group\"> 
        <div class=\"col-sm-offset-3 col-sm-5\">
            <button class=\"btn btn-default\" type=\"submit\" id=\"_submit\" name=\"_submit\" >";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">  Pas encore inscrit?</a>
        </div>
    </div>
</form>
        

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 34,  82 => 33,  73 => 27,  61 => 18,  54 => 14,  49 => 12,  44 => 10,  39 => 9,  33 => 7,  31 => 6,  28 => 5,);
    }
}
