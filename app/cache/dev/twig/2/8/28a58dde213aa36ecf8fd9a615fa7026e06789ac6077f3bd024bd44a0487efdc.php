<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_28a58dde213aa36ecf8fd9a615fa7026e06789ac6077f3bd024bd44a0487efdc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'class_body' => array($this, 'block_class_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44bcba8f526078f87af1510df7d37cbaa674b5e22168ceb4a50862ea1cd1bf00 = $this->env->getExtension("native_profiler");
        $__internal_44bcba8f526078f87af1510df7d37cbaa674b5e22168ceb4a50862ea1cd1bf00->enter($__internal_44bcba8f526078f87af1510df7d37cbaa674b5e22168ceb4a50862ea1cd1bf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.4
Version: 4.0.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang=\"en\" class=\"ie8 no-js\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9 no-js\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\" class=\"no-js\">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset=\"utf-8\"/>
    <title>Bienvenue !</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"/>
    <meta content=\"\" name=\"description\"/>
    <meta content=\"\" name=\"author\"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
    <!-- END PAGE LEVEL PLUGIN STYLES -->
    <!-- BEGIN PAGE STYLES -->
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/admin/pages/css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
    <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/css/components-rounded.css"), "html", null, true);
        echo "\" id=\"style_components\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/css/plugins.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/admin/layout/css/layout.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/admin/layout/css/themes/default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/admin/layout/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END THEME STYLES -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply \"page-header-fixed-mobile\" and \"page-footer-fixed-mobile\" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply \"page-sidebar-closed\" class to the body and \"page-sidebar-menu-closed\" class to the sidebar menu element to hide the sidebar by default -->

<!-- Page Content BEGIN -->
<body ";
        // line 55
        $this->displayBlock('class_body', $context, $blocks);
        echo ">

    ";
        // line 57
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 58
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 59
                echo "            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 60
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 61
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "    ";
        }
        // line 66
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 68
        echo "

<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/respond.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/excanvas.min.js"), "html", null, true);
        echo "\"></script>
<![endif]-->
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/"), "html", null, true);
        echo "assets/global/plugins/jquery-migrate.min.js\" type=\"text/javascript\"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/jquery.cokie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>

<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL STYLES -->
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/scripts/metronic.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/admin/layout/scripts/layout.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/admin/pages/scripts/login.js"), "html", null, true);
        echo "\"></script>
<!-- END PAGE LEVEL STYLES -->
<script>
    jQuery(document).ready(function() {
        // initiate layout and plugins
        Metronic.init(); // init metronic core components
        Login.init();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>";
        
        $__internal_44bcba8f526078f87af1510df7d37cbaa674b5e22168ceb4a50862ea1cd1bf00->leave($__internal_44bcba8f526078f87af1510df7d37cbaa674b5e22168ceb4a50862ea1cd1bf00_prof);

    }

    // line 55
    public function block_class_body($context, array $blocks = array())
    {
        $__internal_7a664ad22aa2d6baab7c5d0b52f4c7d8f36f77148f7943888831fccd4e8b8811 = $this->env->getExtension("native_profiler");
        $__internal_7a664ad22aa2d6baab7c5d0b52f4c7d8f36f77148f7943888831fccd4e8b8811->enter($__internal_7a664ad22aa2d6baab7c5d0b52f4c7d8f36f77148f7943888831fccd4e8b8811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class_body"));

        
        $__internal_7a664ad22aa2d6baab7c5d0b52f4c7d8f36f77148f7943888831fccd4e8b8811->leave($__internal_7a664ad22aa2d6baab7c5d0b52f4c7d8f36f77148f7943888831fccd4e8b8811_prof);

    }

    // line 66
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9cc0b186e8e11b4abc4fff15a3022aed4d4eb29930baca68f67372b5829ca5e7 = $this->env->getExtension("native_profiler");
        $__internal_9cc0b186e8e11b4abc4fff15a3022aed4d4eb29930baca68f67372b5829ca5e7->enter($__internal_9cc0b186e8e11b4abc4fff15a3022aed4d4eb29930baca68f67372b5829ca5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 67
        echo "    ";
        
        $__internal_9cc0b186e8e11b4abc4fff15a3022aed4d4eb29930baca68f67372b5829ca5e7->leave($__internal_9cc0b186e8e11b4abc4fff15a3022aed4d4eb29930baca68f67372b5829ca5e7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 67,  243 => 66,  232 => 55,  212 => 92,  208 => 91,  204 => 90,  197 => 86,  191 => 83,  187 => 82,  183 => 81,  179 => 80,  174 => 78,  170 => 77,  165 => 75,  161 => 74,  153 => 68,  150 => 66,  147 => 65,  141 => 64,  132 => 61,  127 => 60,  122 => 59,  117 => 58,  115 => 57,  110 => 55,  98 => 46,  94 => 45,  90 => 44,  86 => 43,  82 => 42,  75 => 38,  67 => 33,  63 => 32,  59 => 31,  55 => 30,  24 => 1,);
    }
}
