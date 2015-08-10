<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_dd76dd9cb3a267f68cd0ab7abb14c27193f24d6a4f3f22819fd111f8e90eb4e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_cbb33fc0139503d922fc0b1f544e66f875038cf69f3826d267d8e5c0395fa091 = $this->env->getExtension("native_profiler");
        $__internal_cbb33fc0139503d922fc0b1f544e66f875038cf69f3826d267d8e5c0395fa091->enter($__internal_cbb33fc0139503d922fc0b1f544e66f875038cf69f3826d267d8e5c0395fa091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbb33fc0139503d922fc0b1f544e66f875038cf69f3826d267d8e5c0395fa091->leave($__internal_cbb33fc0139503d922fc0b1f544e66f875038cf69f3826d267d8e5c0395fa091_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4d6414667a9442edb37f67c3e2e54e268e1012599a96ed2accbf925fa494da27 = $this->env->getExtension("native_profiler");
        $__internal_4d6414667a9442edb37f67c3e2e54e268e1012599a96ed2accbf925fa494da27->enter($__internal_4d6414667a9442edb37f67c3e2e54e268e1012599a96ed2accbf925fa494da27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_4d6414667a9442edb37f67c3e2e54e268e1012599a96ed2accbf925fa494da27->leave($__internal_4d6414667a9442edb37f67c3e2e54e268e1012599a96ed2accbf925fa494da27_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
