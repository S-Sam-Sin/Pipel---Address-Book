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
        $__internal_4c068333a46ed4f42233a4123c78007a714c6e86c4f37b90301efc328ab4082c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c068333a46ed4f42233a4123c78007a714c6e86c4f37b90301efc328ab4082c->enter($__internal_4c068333a46ed4f42233a4123c78007a714c6e86c4f37b90301efc328ab4082c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_61f4f644b35fde008f1a150f380ace3d0ef258152294526839ae87ebb0c76397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61f4f644b35fde008f1a150f380ace3d0ef258152294526839ae87ebb0c76397->enter($__internal_61f4f644b35fde008f1a150f380ace3d0ef258152294526839ae87ebb0c76397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c068333a46ed4f42233a4123c78007a714c6e86c4f37b90301efc328ab4082c->leave($__internal_4c068333a46ed4f42233a4123c78007a714c6e86c4f37b90301efc328ab4082c_prof);

        
        $__internal_61f4f644b35fde008f1a150f380ace3d0ef258152294526839ae87ebb0c76397->leave($__internal_61f4f644b35fde008f1a150f380ace3d0ef258152294526839ae87ebb0c76397_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a27f963dce8d4343f86501f52046f9e1de06c1e32782e5999c2147db3e96e9e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a27f963dce8d4343f86501f52046f9e1de06c1e32782e5999c2147db3e96e9e8->enter($__internal_a27f963dce8d4343f86501f52046f9e1de06c1e32782e5999c2147db3e96e9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f8b95cfdf7a4aab698adcbe79577a1186e81bc030f7f0fcb40b3980a26a56ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b95cfdf7a4aab698adcbe79577a1186e81bc030f7f0fcb40b3980a26a56ab1->enter($__internal_f8b95cfdf7a4aab698adcbe79577a1186e81bc030f7f0fcb40b3980a26a56ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div id=\"pipel\" class=\"main\">
    <div id=\"group-div\"></div>
    <div id=\"contact-div\"></div>
    <div id=\"person-div\"></div>
    <div id=\"addpipel-div\"></div>
    <div id=\"settings-div\"></div>
</div>
";
        
        $__internal_f8b95cfdf7a4aab698adcbe79577a1186e81bc030f7f0fcb40b3980a26a56ab1->leave($__internal_f8b95cfdf7a4aab698adcbe79577a1186e81bc030f7f0fcb40b3980a26a56ab1_prof);

        
        $__internal_a27f963dce8d4343f86501f52046f9e1de06c1e32782e5999c2147db3e96e9e8->leave($__internal_a27f963dce8d4343f86501f52046f9e1de06c1e32782e5999c2147db3e96e9e8_prof);

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
<div id=\"pipel\" class=\"main\">
    <div id=\"group-div\"></div>
    <div id=\"contact-div\"></div>
    <div id=\"person-div\"></div>
    <div id=\"addpipel-div\"></div>
    <div id=\"settings-div\"></div>
</div>
{% endblock %}
", "default/index.html.twig", "/home/grimlorn/Citadel/Pipel---Address-Book/app/Resources/views/default/index.html.twig");
    }
}
