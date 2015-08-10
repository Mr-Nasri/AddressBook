<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_6dbaa2f7b16f9411f6e7c04743812bc93019d3aa770982dae7a41aef8adf7c3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d2457f30444011e66228c355ac49716802a1156e47851184ca4ca7034ff14ee = $this->env->getExtension("native_profiler");
        $__internal_0d2457f30444011e66228c355ac49716802a1156e47851184ca4ca7034ff14ee->enter($__internal_0d2457f30444011e66228c355ac49716802a1156e47851184ca4ca7034ff14ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d2457f30444011e66228c355ac49716802a1156e47851184ca4ca7034ff14ee->leave($__internal_0d2457f30444011e66228c355ac49716802a1156e47851184ca4ca7034ff14ee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8c5a63f45754bb7b86b8007d9b187926f66828de96ed2d09482101a7584046bc = $this->env->getExtension("native_profiler");
        $__internal_8c5a63f45754bb7b86b8007d9b187926f66828de96ed2d09482101a7584046bc->enter($__internal_8c5a63f45754bb7b86b8007d9b187926f66828de96ed2d09482101a7584046bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_8c5a63f45754bb7b86b8007d9b187926f66828de96ed2d09482101a7584046bc->leave($__internal_8c5a63f45754bb7b86b8007d9b187926f66828de96ed2d09482101a7584046bc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
