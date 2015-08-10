<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_d79c812e9341d13bcbe0b0823b999c9df4a26a6c68e03ab8ae1e66cde409aed7 extends Twig_Template
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
        $__internal_1006a5eedc72ca116f3aca9c734dbe3b64bbf242893d8c41275d11a6e6c15824 = $this->env->getExtension("native_profiler");
        $__internal_1006a5eedc72ca116f3aca9c734dbe3b64bbf242893d8c41275d11a6e6c15824->enter($__internal_1006a5eedc72ca116f3aca9c734dbe3b64bbf242893d8c41275d11a6e6c15824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "
";
        // line 3
        echo "
    <div class=\"container-fluid\">
        <div class=\"page-content\">
            <div class=\"row\">
                <div class=\"col-md-6\">

                    <span class=\"input-group-btn\">
                        <a class=\"btn blue\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" type=\"submit\">Editer</a>
                    </span>

                </div>
            </div>
            <hr>
            <div class=\"row\">
                <div class=\"col-md-12\">
                <table id=\"user\" class=\"table table-bordered table-striped\">
                    <tbody>
                        <tr>
                            <td style=\"width:15%\">Username</td>
                            <td style=\"width:50%\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Nom Complet</td>
                            <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Adresse</td>
                            <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "addresse", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Téléphone</td>
                            <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "telephone", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <td>Site web</td>
                            <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "siteweb", array()), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <!-- Page Content END -->

    </div>";
        
        $__internal_1006a5eedc72ca116f3aca9c734dbe3b64bbf242893d8c41275d11a6e6c15824->leave($__internal_1006a5eedc72ca116f3aca9c734dbe3b64bbf242893d8c41275d11a6e6c15824_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 42,  79 => 38,  72 => 34,  65 => 30,  56 => 26,  49 => 22,  34 => 10,  25 => 3,  22 => 1,);
    }
}
