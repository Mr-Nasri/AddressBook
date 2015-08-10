<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_6b357ef97d9eb86aa4a0d9c61f81e9f29bac9faac5e8c6c443579fe1e1e52b9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'class_body' => array($this, 'block_class_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_856f5ecc098eb483ebd5ba84ef2a86e14db76b09856d4eae1292a2f1d4642331 = $this->env->getExtension("native_profiler");
        $__internal_856f5ecc098eb483ebd5ba84ef2a86e14db76b09856d4eae1292a2f1d4642331->enter($__internal_856f5ecc098eb483ebd5ba84ef2a86e14db76b09856d4eae1292a2f1d4642331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_856f5ecc098eb483ebd5ba84ef2a86e14db76b09856d4eae1292a2f1d4642331->leave($__internal_856f5ecc098eb483ebd5ba84ef2a86e14db76b09856d4eae1292a2f1d4642331_prof);

    }

    // line 5
    public function block_class_body($context, array $blocks = array())
    {
        $__internal_a4d9aa534cf391a1bff41b0dc487058e96968371622208213cca70d8e02f24c9 = $this->env->getExtension("native_profiler");
        $__internal_a4d9aa534cf391a1bff41b0dc487058e96968371622208213cca70d8e02f24c9->enter($__internal_a4d9aa534cf391a1bff41b0dc487058e96968371622208213cca70d8e02f24c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class_body"));

        echo "class=\"login\"";
        
        $__internal_a4d9aa534cf391a1bff41b0dc487058e96968371622208213cca70d8e02f24c9->leave($__internal_a4d9aa534cf391a1bff41b0dc487058e96968371622208213cca70d8e02f24c9_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_35ae75828804818cda4b93c1d141491207f921c4136f6c899ecdb4a5dc56052d = $this->env->getExtension("native_profiler");
        $__internal_35ae75828804818cda4b93c1d141491207f921c4136f6c899ecdb4a5dc56052d->enter($__internal_35ae75828804818cda4b93c1d141491207f921c4136f6c899ecdb4a5dc56052d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
        <!-- BEGIN LOGIN -->
        <div class=\"content\">
            <!-- BEGIN LOGIN FORM -->
            <form class=\"login-form\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                <h3 class=\"form-title\">Se connecter</h3>
                ";
        // line 13
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 14
            echo "                    <div class=\"alert alert-danger\"><span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</span></div>
                ";
        }
        // line 16
        echo "                <div class=\"alert alert-danger display-hide\">
                    <button class=\"close\" data-close=\"alert\"></button>
                <span>
                Enter any username and password. </span>
                </div>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                <div class=\"form-group\">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class=\"control-label visible-ie8 visible-ie9\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"text\" autocomplete=\"off\" placeholder=\"Username\" name=\"_username\"/>
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label visible-ie8 visible-ie9\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    <input class=\"form-control form-control-solid placeholder-no-fix\" type=\"password\" autocomplete=\"off\" placeholder=\"Password\" name=\"_password\"/>
                </div>
                <div class=\"form-actions\">
                    <button type=\"submit\" class=\"btn btn-success uppercase\" name=\"_submit\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                    <label class=\"rememberme check\">
                        <input type=\"checkbox\" name=\"_remember_me\" value=\"on\"/>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                </div>
                <div class=\"create-account\">
                    <p>
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"uppercase\">Créer un compte</a>
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->
        </div>
";
        
        $__internal_35ae75828804818cda4b93c1d141491207f921c4136f6c899ecdb4a5dc56052d->leave($__internal_35ae75828804818cda4b93c1d141491207f921c4136f6c899ecdb4a5dc56052d_prof);

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
        return array (  111 => 38,  104 => 34,  99 => 32,  92 => 28,  85 => 24,  79 => 21,  72 => 16,  66 => 14,  64 => 13,  59 => 11,  53 => 7,  47 => 6,  35 => 5,  11 => 1,);
    }
}
