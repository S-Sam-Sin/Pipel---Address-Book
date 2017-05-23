<?php

/* default/index.html.twig */
class __TwigTemplate_a6dc696e636e7a4ff790bc08a23eba8fc3ef293aa3fa20a00344e91aabb422bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36909c14d6bdb66634397a05b14ec87adde7cf0bbe538b043d7af18d68363f30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36909c14d6bdb66634397a05b14ec87adde7cf0bbe538b043d7af18d68363f30->enter($__internal_36909c14d6bdb66634397a05b14ec87adde7cf0bbe538b043d7af18d68363f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_f656e32f16a121866cf449ef0b6e839e94cba4707755b3aa440cf7668e189fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f656e32f16a121866cf449ef0b6e839e94cba4707755b3aa440cf7668e189fc0->enter($__internal_f656e32f16a121866cf449ef0b6e839e94cba4707755b3aa440cf7668e189fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36909c14d6bdb66634397a05b14ec87adde7cf0bbe538b043d7af18d68363f30->leave($__internal_36909c14d6bdb66634397a05b14ec87adde7cf0bbe538b043d7af18d68363f30_prof);

        
        $__internal_f656e32f16a121866cf449ef0b6e839e94cba4707755b3aa440cf7668e189fc0->leave($__internal_f656e32f16a121866cf449ef0b6e839e94cba4707755b3aa440cf7668e189fc0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7915e05fc55a8a300b2fabcb2b98157e698b1f3a4fe8ad68274c62dd85fe28e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7915e05fc55a8a300b2fabcb2b98157e698b1f3a4fe8ad68274c62dd85fe28e2->enter($__internal_7915e05fc55a8a300b2fabcb2b98157e698b1f3a4fe8ad68274c62dd85fe28e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3eb1db294274cdd523e6005487fc161998c2772176ebf1a82f540ae771bac043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eb1db294274cdd523e6005487fc161998c2772176ebf1a82f540ae771bac043->enter($__internal_3eb1db294274cdd523e6005487fc161998c2772176ebf1a82f540ae771bac043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"main\">
    <div id=\"group-div\"></div>
    <div id=\"contact-div\"></div>
    <div id=\"person-div\"></div>
</div>
";
        
        $__internal_3eb1db294274cdd523e6005487fc161998c2772176ebf1a82f540ae771bac043->leave($__internal_3eb1db294274cdd523e6005487fc161998c2772176ebf1a82f540ae771bac043_prof);

        
        $__internal_7915e05fc55a8a300b2fabcb2b98157e698b1f3a4fe8ad68274c62dd85fe28e2->leave($__internal_7915e05fc55a8a300b2fabcb2b98157e698b1f3a4fe8ad68274c62dd85fe28e2_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"main\">
    <div id=\"group-div\"></div>
    <div id=\"contact-div\"></div>
    <div id=\"person-div\"></div>
</div>
{% endblock %}
", "default/index.html.twig", "/home/grimlorn/Citadel/Architect/Contact-app-Symfony/app/Resources/views/default/index.html.twig");
    }
}
