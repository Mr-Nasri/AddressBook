<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_4ec2e0b0348ebac6eb70d7adf1ff3ac537e77761600d3fddd45c9b59d4a439e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_9380cfe8df675173353e3a1c7bb9089d53344b3c5e0372f91e31512c278682d8 = $this->env->getExtension("native_profiler");
        $__internal_9380cfe8df675173353e3a1c7bb9089d53344b3c5e0372f91e31512c278682d8->enter($__internal_9380cfe8df675173353e3a1c7bb9089d53344b3c5e0372f91e31512c278682d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9380cfe8df675173353e3a1c7bb9089d53344b3c5e0372f91e31512c278682d8->leave($__internal_9380cfe8df675173353e3a1c7bb9089d53344b3c5e0372f91e31512c278682d8_prof);

    }

    // line 5
    public function block_class_body($context, array $blocks = array())
    {
        $__internal_adc8fd9ff3e89487fe641f33a684ad1199f808dbf34ea1457e69e55ba0489b0c = $this->env->getExtension("native_profiler");
        $__internal_adc8fd9ff3e89487fe641f33a684ad1199f808dbf34ea1457e69e55ba0489b0c->enter($__internal_adc8fd9ff3e89487fe641f33a684ad1199f808dbf34ea1457e69e55ba0489b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "class_body"));

        echo "class=\"login\"";
        
        $__internal_adc8fd9ff3e89487fe641f33a684ad1199f808dbf34ea1457e69e55ba0489b0c->leave($__internal_adc8fd9ff3e89487fe641f33a684ad1199f808dbf34ea1457e69e55ba0489b0c_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ba34ed3ea987d0d267479236bd7dfb22cc36d1c46d54d792731e363318f38a05 = $this->env->getExtension("native_profiler");
        $__internal_ba34ed3ea987d0d267479236bd7dfb22cc36d1c46d54d792731e363318f38a05->enter($__internal_ba34ed3ea987d0d267479236bd7dfb22cc36d1c46d54d792731e363318f38a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        echo "
    <!-- BEGIN LOGIN -->
    <div class=\"content\">
        <h3>S'enregister</h3>
        <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
        ";
        // line 12
        if ( !twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()))) {
            // line 13
            echo "            ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()), "providerKey", array())) . ".target_path")), "method");
            // line 14
            echo "            ";
            if ( !twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 15
            echo "        ";
        }
        // line 16
        echo "    </div>
";
        
        $__internal_ba34ed3ea987d0d267479236bd7dfb22cc36d1c46d54d792731e363318f38a05->leave($__internal_ba34ed3ea987d0d267479236bd7dfb22cc36d1c46d54d792731e363318f38a05_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  77 => 15,  68 => 14,  65 => 13,  63 => 12,  59 => 11,  53 => 7,  47 => 6,  35 => 5,  11 => 1,);
    }
}
