<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_53173568ccb71510b7f89402c9570aac6e25b796e386df5a758bad429d02b229 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register_content.html.twig", 1);
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
        $__internal_cd8f181cda7cc53d8502dad172d7f0fc0790f875d1ef079072f87a0e91269a6a = $this->env->getExtension("native_profiler");
        $__internal_cd8f181cda7cc53d8502dad172d7f0fc0790f875d1ef079072f87a0e91269a6a->enter($__internal_cd8f181cda7cc53d8502dad172d7f0fc0790f875d1ef079072f87a0e91269a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd8f181cda7cc53d8502dad172d7f0fc0790f875d1ef079072f87a0e91269a6a->leave($__internal_cd8f181cda7cc53d8502dad172d7f0fc0790f875d1ef079072f87a0e91269a6a_prof);

    }

    // line 5
    public function block_class_body($context, array $blocks = array())
    {
        $__internal_aa36f96370355dd2a0de1e09d61bc112dedb0e32b2f66deeef23aadc603fe7e1 = $this->env->getExtension("native_profiler");
        $__internal_aa36f96370355dd2a0de1e09d61bc112dedb0e32b2f66deeef23aadc603fe7e1->enter($__internal_aa36f96370355dd2a0de1e09d61bc112dedb0e32b2f66deeef23aadc603fe7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class_body"));

        echo "class=\"login\"";
        
        $__internal_aa36f96370355dd2a0de1e09d61bc112dedb0e32b2f66deeef23aadc603fe7e1->leave($__internal_aa36f96370355dd2a0de1e09d61bc112dedb0e32b2f66deeef23aadc603fe7e1_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20b5b378d69e401752926495f66766bb75e32d8300657b2cd5af8e20d1b7a68e = $this->env->getExtension("native_profiler");
        $__internal_20b5b378d69e401752926495f66766bb75e32d8300657b2cd5af8e20d1b7a68e->enter($__internal_20b5b378d69e401752926495f66766bb75e32d8300657b2cd5af8e20d1b7a68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
    <!-- BEGIN LOGIN -->
    <div class=\"content\">
    <!-- BEGIN REGISTRATION FORM -->
    <form class=\"register-form\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"post\">
    <h3>S'enregister</h3>

    <p class=\"hint\">
        Saissez vos informations personnelles
    </p>
    <div class=\"form-group\">
        <label class=\"control-label visible-ie8 visible-ie9\">Nom</label>
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control placeholder-no-fix", "placeholder" => "Nom")));
        echo "
    </div>
    <div class=\"form-group\">
        <label class=\"control-label visible-ie8 visible-ie9\">Prenom</label>
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control placeholder-no-fix", "placeholder" => "Prenom")));
        echo "
    </div>
    <div class=\"form-group\">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class=\"control-label visible-ie8 visible-ie9\">Email</label>
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control placeholder-no-fix", "placeholder" => "Email")));
        echo "
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
    </div>
    <div class=\"form-group\">
        <label class=\"control-label visible-ie8 visible-ie9\">Addresse</label>
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "addresse", array()), 'widget', array("attr" => array("class" => "form-control placeholder-no-fix", "placeholder" => "Addresse")));
        echo "
    </div>
    <div class=\"form-group\">
        <label class=\"control-label visible-ie8 visible-ie9\">Téléphone</label>
        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control placeholder-no-fix", "placeholder" => "Telephone")));
        echo "
    </div>
    <div class=\"form-group\">
        <label class=\"control-label visible-ie8 visible-ie9\">Site Web</label>
        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siteweb", array()), 'widget', array("attr" => array("class" => "form-control placeholder-no-fix", "placeholder" => "Site web")));
        echo "
    </div>
    <p class=\"hint\">
        Saisissez les détails de votre compte
    </p>
    <div class=\"form-group\">
        <label class=\"control-label visible-ie8 visible-ie9\">Username</label>
        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control placeholder-no-fix", "placeholder" => "Username")));
        echo "
        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
    </div>
    <div class=\"form-group\">
        <label class=\"control-label visible-ie8 visible-ie9\">Password</label>
        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control placeholder-no-fix", "placeholder" => "Password", "id" => "register_password", "autocomplete" => "off")));
        echo "
        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
    </div>
    <div class=\"form-group\">
        <label class=\"control-label visible-ie8 visible-ie9\">Re-type Your Password</label>
        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control placeholder-no-fix", "placeholder" => "Re enter password")));
        echo "
        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
    </div>
        ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <div class=\"form-actions\">
        <a type=\"button\" href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\" class=\"btn btn-default\">Back</a>
        <button type=\"submit\" id=\"register-submit-btn\" class=\"btn btn-success uppercase pull-right\">Submit</button>
    </div>
    </form>
    <!-- END REGISTRATION FORM -->
    </div>
";
        
        $__internal_20b5b378d69e401752926495f66766bb75e32d8300657b2cd5af8e20d1b7a68e->leave($__internal_20b5b378d69e401752926495f66766bb75e32d8300657b2cd5af8e20d1b7a68e_prof);

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
        return array (  158 => 63,  153 => 61,  148 => 59,  144 => 58,  137 => 54,  133 => 53,  126 => 49,  122 => 48,  112 => 41,  105 => 37,  98 => 33,  91 => 29,  87 => 28,  79 => 23,  72 => 19,  59 => 11,  53 => 7,  47 => 6,  35 => 5,  11 => 1,);
    }
}
