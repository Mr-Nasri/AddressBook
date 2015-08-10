<?php

/* AddressBookBundle:addressbook:addressbook.html.twig */
class __TwigTemplate_73e8fa308982922afa5c2d4de377b161f2da3f5e2518c5b9e46efa40393bdaf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:addressbook:addressbook.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf882bfa0939d008f72c7a7f311e0f8f1e3d2483e5696a1339164752babc0638 = $this->env->getExtension("native_profiler");
        $__internal_bf882bfa0939d008f72c7a7f311e0f8f1e3d2483e5696a1339164752babc0638->enter($__internal_bf882bfa0939d008f72c7a7f311e0f8f1e3d2483e5696a1339164752babc0638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:addressbook:addressbook.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf882bfa0939d008f72c7a7f311e0f8f1e3d2483e5696a1339164752babc0638->leave($__internal_bf882bfa0939d008f72c7a7f311e0f8f1e3d2483e5696a1339164752babc0638_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_6c7610f9958eab690fb858db497ad57e1d1f5c697d8b80d4d61fcd28d196ce0e = $this->env->getExtension("native_profiler");
        $__internal_6c7610f9958eab690fb858db497ad57e1d1f5c697d8b80d4d61fcd28d196ce0e->enter($__internal_6c7610f9958eab690fb858db497ad57e1d1f5c697d8b80d4d61fcd28d196ce0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"container-fluid\">
    <div class=\"page-content\">
    <div class=\"row\">
    <div class=\"col-md-12\">
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
    <div class=\"portlet light\">
    <div class=\"portlet-title\">
        <div class=\"caption\">
            <i class=\"fa fa-cogs font-green-sharp\"></i>
            <span class=\"caption-subject font-green-sharp bold uppercase\">Liste des contacts</span>
        </div>
        <div class=\"tools\">
            <a href=\"javascript:;\" class=\"collapse\"></a>
        </div>
    </div>
    <div class=\"portlet-body\">
        <div class=\"table-toolbar\">
            <form role=\"form\" method=\"post\" action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("address_book_add");
        echo "\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 24
            echo "                            <div>
                                <span class=\"alert alert-danger\">";
            // line 25
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</span>
                            </div><br>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                        <div class=\"input-group input-medium\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Entez un username\" name=\"username\">
                            <span class=\"input-group-btn\">
                            <button class=\"btn blue\" type=\"submit\">Ajouter</button>
                            </span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <table class=\"table table-striped table-hover table-bordered\" id=\"sample_editable_1\">
            <thead>
            <tr>
                <th>
                    Username
                </th>
                <th>
                    Nom complet
                </th>
                <th>
                    email
                </th>
                <th>
                    addresse
                </th>
                <th>
                    telephone
                </th>
                <th>
                    site web
                </th>
                <th>
                    Supprimer
                </th>
            </tr>
            </thead>
            <tbody>
                ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 66
            echo "                    <tr>
                        <td data-path=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("address_book_delete");
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\">
                            ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "
                        </td>
                        <td class=\"center\">
                            ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "addresse", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "telephone", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "siteweb", array()), "html", null, true);
            echo "
                        </td>
                        <td>
                            <a class=\"delete\" href=\"javascript:;\">
                                Delete </a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "            </tbody>
        </table>
    </div>
    </div>
    <!-- END EXAMPLE TABLE PORTLET-->
    </div>
    </div>
    </div>
    <!-- Page Content END -->

    </div>
";
        
        $__internal_6c7610f9958eab690fb858db497ad57e1d1f5c697d8b80d4d61fcd28d196ce0e->leave($__internal_6c7610f9958eab690fb858db497ad57e1d1f5c697d8b80d4d61fcd28d196ce0e_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:addressbook:addressbook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 91,  165 => 83,  159 => 80,  153 => 77,  147 => 74,  139 => 71,  133 => 68,  127 => 67,  124 => 66,  120 => 65,  81 => 28,  72 => 25,  69 => 24,  65 => 23,  59 => 20,  40 => 3,  34 => 2,  11 => 1,);
    }
}
