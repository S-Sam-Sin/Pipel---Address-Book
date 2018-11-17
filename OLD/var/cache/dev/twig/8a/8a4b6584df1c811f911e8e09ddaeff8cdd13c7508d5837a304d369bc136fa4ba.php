<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_4215492859ff851dd46248b460e126b3fb360a785635db52ff03b10fe3f09c0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbe927390184ec741dbaba470726ad57008cda0d957a3acadee7d8e5853e9253 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe927390184ec741dbaba470726ad57008cda0d957a3acadee7d8e5853e9253->enter($__internal_cbe927390184ec741dbaba470726ad57008cda0d957a3acadee7d8e5853e9253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_d596223951b0d01a53cb34238c51125725d5060c27f471f1a772815bd09cf4a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d596223951b0d01a53cb34238c51125725d5060c27f471f1a772815bd09cf4a7->enter($__internal_d596223951b0d01a53cb34238c51125725d5060c27f471f1a772815bd09cf4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbe927390184ec741dbaba470726ad57008cda0d957a3acadee7d8e5853e9253->leave($__internal_cbe927390184ec741dbaba470726ad57008cda0d957a3acadee7d8e5853e9253_prof);

        
        $__internal_d596223951b0d01a53cb34238c51125725d5060c27f471f1a772815bd09cf4a7->leave($__internal_d596223951b0d01a53cb34238c51125725d5060c27f471f1a772815bd09cf4a7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dcc0e208ed6d8f958f2ea0912094284e640bacab06d788c10fe31af5ce6ee05a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcc0e208ed6d8f958f2ea0912094284e640bacab06d788c10fe31af5ce6ee05a->enter($__internal_dcc0e208ed6d8f958f2ea0912094284e640bacab06d788c10fe31af5ce6ee05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c28d2e4271bfe9dc781c29baee5ea38300a199f76c762cb461ecfe5e7d40eb20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c28d2e4271bfe9dc781c29baee5ea38300a199f76c762cb461ecfe5e7d40eb20->enter($__internal_c28d2e4271bfe9dc781c29baee5ea38300a199f76c762cb461ecfe5e7d40eb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c28d2e4271bfe9dc781c29baee5ea38300a199f76c762cb461ecfe5e7d40eb20->leave($__internal_c28d2e4271bfe9dc781c29baee5ea38300a199f76c762cb461ecfe5e7d40eb20_prof);

        
        $__internal_dcc0e208ed6d8f958f2ea0912094284e640bacab06d788c10fe31af5ce6ee05a->leave($__internal_dcc0e208ed6d8f958f2ea0912094284e640bacab06d788c10fe31af5ce6ee05a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9f2313461275332575ee45de46ea948e9b8b665695bafa0b04357f068904c17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9f2313461275332575ee45de46ea948e9b8b665695bafa0b04357f068904c17->enter($__internal_b9f2313461275332575ee45de46ea948e9b8b665695bafa0b04357f068904c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89e29d2450b3d240600640880bf287a6d37a33b22d9bad843a3147cf9fe31d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e29d2450b3d240600640880bf287a6d37a33b22d9bad843a3147cf9fe31d4d->enter($__internal_89e29d2450b3d240600640880bf287a6d37a33b22d9bad843a3147cf9fe31d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_89e29d2450b3d240600640880bf287a6d37a33b22d9bad843a3147cf9fe31d4d->leave($__internal_89e29d2450b3d240600640880bf287a6d37a33b22d9bad843a3147cf9fe31d4d_prof);

        
        $__internal_b9f2313461275332575ee45de46ea948e9b8b665695bafa0b04357f068904c17->leave($__internal_b9f2313461275332575ee45de46ea948e9b8b665695bafa0b04357f068904c17_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
