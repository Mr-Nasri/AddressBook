<?php

/* ::base.html.twig */
class __TwigTemplate_e3c929c58d7ad2b319bf47612a74c4000542cec944ed4ae7dbc97bb66bafee65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcc7cd9abe8089eb88911bac2606f62af9d0a5318a162364dd26dca50e2b4a28 = $this->env->getExtension("native_profiler");
        $__internal_dcc7cd9abe8089eb88911bac2606f62af9d0a5318a162364dd26dca50e2b4a28->enter($__internal_dcc7cd9abe8089eb88911bac2606f62af9d0a5318a162364dd26dca50e2b4a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
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
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\"/>
    <meta content=\"\" name=\"description\"/>
    <meta content=\"\" name=\"author\"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    <!-- END THEME STYLES -->
        <title>";
        // line 28
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 29
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 55
        echo "    </head>
    <body>
        ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 90
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 137
        echo "    </body>
</html>
";
        
        $__internal_dcc7cd9abe8089eb88911bac2606f62af9d0a5318a162364dd26dca50e2b4a28->leave($__internal_dcc7cd9abe8089eb88911bac2606f62af9d0a5318a162364dd26dca50e2b4a28_prof);

    }

    // line 28
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ee2735b56b3574ca848ad5bbe84b49a6fd5d00e68a30f2d95cc36604ce8b628 = $this->env->getExtension("native_profiler");
        $__internal_3ee2735b56b3574ca848ad5bbe84b49a6fd5d00e68a30f2d95cc36604ce8b628->enter($__internal_3ee2735b56b3574ca848ad5bbe84b49a6fd5d00e68a30f2d95cc36604ce8b628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue !";
        
        $__internal_3ee2735b56b3574ca848ad5bbe84b49a6fd5d00e68a30f2d95cc36604ce8b628->leave($__internal_3ee2735b56b3574ca848ad5bbe84b49a6fd5d00e68a30f2d95cc36604ce8b628_prof);

    }

    // line 29
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aaea337c5d8264d8dc975fd65f74fd35382131da66c095141b13c58b21c1101f = $this->env->getExtension("native_profiler");
        $__internal_aaea337c5d8264d8dc975fd65f74fd35382131da66c095141b13c58b21c1101f->enter($__internal_aaea337c5d8264d8dc975fd65f74fd35382131da66c095141b13c58b21c1101f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 30
        echo "            <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
            <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/simple-line-icons/simple-line-icons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/uniform/css/uniform.default.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <!-- END GLOBAL MANDATORY STYLES -->
            <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/select2/select2.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\"/>
            <!-- END PAGE LEVEL PLUGIN STYLES -->
            <!-- BEGIN PAGE STYLES -->
            <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/admin/pages/css/tasks.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            ";
        // line 46
        echo "            <!-- END PAGE STYLES -->
            <!-- BEGIN THEME STYLES -->
            <!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
            <link href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/css/components-rounded.css"), "html", null, true);
        echo "\" id=\"style_components\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/css/plugins.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <link href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/admin/layout5/css/layout.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            ";
        // line 53
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/admin/layout5/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        ";
        
        $__internal_aaea337c5d8264d8dc975fd65f74fd35382131da66c095141b13c58b21c1101f->leave($__internal_aaea337c5d8264d8dc975fd65f74fd35382131da66c095141b13c58b21c1101f_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b4457a828859d020ca9864ca0efe88727ca343078e446cc705ef6b9a7122e89 = $this->env->getExtension("native_profiler");
        $__internal_0b4457a828859d020ca9864ca0efe88727ca343078e446cc705ef6b9a7122e89->enter($__internal_0b4457a828859d020ca9864ca0efe88727ca343078e446cc705ef6b9a7122e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 58
        echo "            <div class=\"wrapper\">
                ";
        // line 59
        $this->displayBlock('header', $context, $blocks);
        // line 87
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 88
        echo "            </div>
        ";
        
        $__internal_0b4457a828859d020ca9864ca0efe88727ca343078e446cc705ef6b9a7122e89->leave($__internal_0b4457a828859d020ca9864ca0efe88727ca343078e446cc705ef6b9a7122e89_prof);

    }

    // line 59
    public function block_header($context, array $blocks = array())
    {
        $__internal_c7819c0d79f578f97aacdb0ac6cb3e447fc6763a48fe9da4d2cc8288ad092c99 = $this->env->getExtension("native_profiler");
        $__internal_c7819c0d79f578f97aacdb0ac6cb3e447fc6763a48fe9da4d2cc8288ad092c99->enter($__internal_c7819c0d79f578f97aacdb0ac6cb3e447fc6763a48fe9da4d2cc8288ad092c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 60
        echo "                    <!-- Header BEGIN -->
                    <header class=\"page-header\">
                        <nav class=\"navbar mega-menu\" role=\"navigation\">
                            <div class=\"container-fluid\">

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class=\"nav-collapse collapse navbar-collapse navbar-responsive-collapse\">
                                    <ul class=\"nav navbar-nav text-uppercase\">
                                        <li class=\"dropdown dropdown-fw open selected\">
                                            <a href=\"javascript:;\">
                                                AddressBook
                                            </a>
                                            <ul class=\"dropdown-menu dropdown-menu-fw\">
                                                <li><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("address_book_homepage");
        echo "\">Mon carnet d'addresses</a></li>
                                                <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Profil</a></li>
                                                <li><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">se déconnecter</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END NAVBAR COLLAPSE -->
                            </div>
                            <!--/container-->
                        </nav>
                    </header>
                    <!-- Header END -->
                ";
        
        $__internal_c7819c0d79f578f97aacdb0ac6cb3e447fc6763a48fe9da4d2cc8288ad092c99->leave($__internal_c7819c0d79f578f97aacdb0ac6cb3e447fc6763a48fe9da4d2cc8288ad092c99_prof);

    }

    // line 87
    public function block_content($context, array $blocks = array())
    {
        $__internal_d1d4d6c51e91ee8d5c3c03f1e9b4697caae142f4650f1536b47cac3d56cbdffc = $this->env->getExtension("native_profiler");
        $__internal_d1d4d6c51e91ee8d5c3c03f1e9b4697caae142f4650f1536b47cac3d56cbdffc->enter($__internal_d1d4d6c51e91ee8d5c3c03f1e9b4697caae142f4650f1536b47cac3d56cbdffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_d1d4d6c51e91ee8d5c3c03f1e9b4697caae142f4650f1536b47cac3d56cbdffc->leave($__internal_d1d4d6c51e91ee8d5c3c03f1e9b4697caae142f4650f1536b47cac3d56cbdffc_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d1f5f98b90546a7aa9aa81ca005afffd63c0de5b7f086301dda9f99ecf719db8 = $this->env->getExtension("native_profiler");
        $__internal_d1f5f98b90546a7aa9aa81ca005afffd63c0de5b7f086301dda9f99ecf719db8->enter($__internal_d1f5f98b90546a7aa9aa81ca005afffd63c0de5b7f086301dda9f99ecf719db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "            <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
            <!-- BEGIN CORE PLUGINS -->
            <!--[if lt IE 9]>
            <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/respond.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/excanvas.min.js"), "html", null, true);
        echo "\"></script>
            <![endif]-->
            <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/"), "html", null, true);
        echo "assets/global/plugins/jquery-migrate.min.js\" type=\"text/javascript\"></script>
            <!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
            <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/jquery.blockui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/jquery.cokie.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/uniform/jquery.uniform.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <!-- END CORE PLUGINS -->
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <script type=\"text/javascript\" src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/jquery-validation/js/additional-methods.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN PAGE LEVEL STYLES -->
            <script src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/global/scripts/metronic.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/admin/layout/scripts/layout.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/admin/pages/scripts/form-validation.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/admin/pages/scripts/table-editable.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/addressbook/assets/admin/pages/scripts/login.js"), "html", null, true);
        echo "\"></script>
            <!-- END PAGE LEVEL STYLES -->
            <script>
                jQuery(document).ready(function() {
                    // initiate layout and plugins
                    Metronic.init(); // init metronic core components
                    FormValidation.init();
                    TableEditable.init();
                    Login.init();
                });
            </script>
            <!-- END JAVASCRIPTS -->
        ";
        
        $__internal_d1f5f98b90546a7aa9aa81ca005afffd63c0de5b7f086301dda9f99ecf719db8->leave($__internal_d1f5f98b90546a7aa9aa81ca005afffd63c0de5b7f086301dda9f99ecf719db8_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  364 => 124,  360 => 123,  356 => 122,  352 => 121,  348 => 120,  344 => 119,  338 => 116,  334 => 115,  330 => 114,  326 => 113,  322 => 112,  318 => 111,  314 => 110,  308 => 107,  304 => 106,  300 => 105,  296 => 104,  292 => 103,  288 => 102,  284 => 101,  280 => 100,  275 => 98,  271 => 97,  266 => 95,  262 => 94,  257 => 91,  251 => 90,  240 => 87,  221 => 75,  217 => 74,  213 => 73,  198 => 60,  192 => 59,  184 => 88,  181 => 87,  179 => 59,  176 => 58,  170 => 57,  160 => 53,  156 => 51,  152 => 50,  148 => 49,  143 => 46,  139 => 44,  133 => 41,  129 => 40,  125 => 39,  121 => 38,  115 => 35,  111 => 34,  107 => 33,  103 => 32,  99 => 30,  93 => 29,  81 => 28,  72 => 137,  69 => 90,  67 => 57,  63 => 55,  61 => 29,  57 => 28,  28 => 1,);
    }
}
