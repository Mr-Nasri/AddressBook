<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_b27026f5df499a52f0779cefc28ffbdc0a1f50124b2dff367c5428849749b42a extends Twig_Template
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
        $__internal_2dca8aad9cbfc23e4dc1752a0111d55f19d0dcebb9511bf3ca678fcdbc8beb80 = $this->env->getExtension("native_profiler");
        $__internal_2dca8aad9cbfc23e4dc1752a0111d55f19d0dcebb9511bf3ca678fcdbc8beb80->enter($__internal_2dca8aad9cbfc23e4dc1752a0111d55f19d0dcebb9511bf3ca678fcdbc8beb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 2
        echo "<div class=\"container-fluid\">
    <div class=\"page-content\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <!-- BEGIN REGISTRATION FORM -->
            <form class=\"register-form\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"post\">
                <h3>Modification de votre profil</h3>

                <div class=\"form-group\">
                    <label class=\"control-label\">Nom</label>
                    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control placeholder-no-fix", "placeholder" => "Nom")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label\">Prenom</label>
                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control placeholder-no-fix", "placeholder" => "Prenom")));
        echo "
                </div>
                <div class=\"form-group\">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class=\"control-label\">Email</label>
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control placeholder-no-fix", "placeholder" => "Email")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label\">Addresse</label>
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "addresse", array()), 'widget', array("attr" => array("class" => "form-control placeholder-no-fix", "placeholder" => "Addresse")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label\">Téléphone</label>
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control placeholder-no-fix", "placeholder" => "Telephone")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label\">Site Web</label>
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "siteweb", array()), 'widget', array("attr" => array("class" => "form-control placeholder-no-fix", "placeholder" => "Site web")));
        echo "
                </div>
                <hr>
                <div class=\"form-group\">
                    <label class=\"control-label\">Username</label>
                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control placeholder-no-fix", "placeholder" => "Username")));
        echo "
                </div>
                <div class=\"form-group\">
                    <label class=\"control-label\">Votre password actuel</label>
                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'widget', array("attr" => array("class" => "form-control placeholder-no-fix", "placeholder" => "Current password")));
        echo "
                </div>
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                <div class=\"form-actions\">
                    <a type=\"button\" href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\" class=\"btn btn-default\">Back</a>
                    <button type=\"submit\" class=\"btn btn-success uppercase \">Submit</button>
                </div>
            </form>
            <!-- END REGISTRATION FORM -->
        </div>
    </div>
</div>
</div>";
        
        $__internal_2dca8aad9cbfc23e4dc1752a0111d55f19d0dcebb9511bf3ca678fcdbc8beb80->leave($__internal_2dca8aad9cbfc23e4dc1752a0111d55f19d0dcebb9511bf3ca678fcdbc8beb80_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 46,  95 => 44,  90 => 42,  83 => 38,  75 => 33,  68 => 29,  61 => 25,  54 => 21,  46 => 16,  39 => 12,  29 => 7,  22 => 2,);
    }
}
