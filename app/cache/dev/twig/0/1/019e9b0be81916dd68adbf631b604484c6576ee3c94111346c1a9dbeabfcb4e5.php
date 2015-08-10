<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_019e9b0be81916dd68adbf631b604484c6576ee3c94111346c1a9dbeabfcb4e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_718a86d0ee7a8cbebd3cc8d0e1bbd98965a3d9b5d51766d8b843ce8707ab4d5c = $this->env->getExtension("native_profiler");
        $__internal_718a86d0ee7a8cbebd3cc8d0e1bbd98965a3d9b5d51766d8b843ce8707ab4d5c->enter($__internal_718a86d0ee7a8cbebd3cc8d0e1bbd98965a3d9b5d51766d8b843ce8707ab4d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_718a86d0ee7a8cbebd3cc8d0e1bbd98965a3d9b5d51766d8b843ce8707ab4d5c->leave($__internal_718a86d0ee7a8cbebd3cc8d0e1bbd98965a3d9b5d51766d8b843ce8707ab4d5c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c18958a68b325cddf73aa5482eeffc6d7cd992933038e09ad39dcf9e382c5b33 = $this->env->getExtension("native_profiler");
        $__internal_c18958a68b325cddf73aa5482eeffc6d7cd992933038e09ad39dcf9e382c5b33->enter($__internal_c18958a68b325cddf73aa5482eeffc6d7cd992933038e09ad39dcf9e382c5b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_c18958a68b325cddf73aa5482eeffc6d7cd992933038e09ad39dcf9e382c5b33->leave($__internal_c18958a68b325cddf73aa5482eeffc6d7cd992933038e09ad39dcf9e382c5b33_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
