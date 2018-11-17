<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_85b2ccb6e82e3a87665006b7528b56159c640c36cd53ed73c26fdcf33a8718d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ba14e78d5cd07d144408975c35434fc3aeac261390d8c694f3abfe5745c50e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ba14e78d5cd07d144408975c35434fc3aeac261390d8c694f3abfe5745c50e6->enter($__internal_1ba14e78d5cd07d144408975c35434fc3aeac261390d8c694f3abfe5745c50e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_07c286519ee7fcf46ee88339b7f92863feabb89655f3d3ee729d8b812eb486c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c286519ee7fcf46ee88339b7f92863feabb89655f3d3ee729d8b812eb486c0->enter($__internal_07c286519ee7fcf46ee88339b7f92863feabb89655f3d3ee729d8b812eb486c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ba14e78d5cd07d144408975c35434fc3aeac261390d8c694f3abfe5745c50e6->leave($__internal_1ba14e78d5cd07d144408975c35434fc3aeac261390d8c694f3abfe5745c50e6_prof);

        
        $__internal_07c286519ee7fcf46ee88339b7f92863feabb89655f3d3ee729d8b812eb486c0->leave($__internal_07c286519ee7fcf46ee88339b7f92863feabb89655f3d3ee729d8b812eb486c0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_63b7b6ddb217910ccc97a42754fe0c5fa83cbe231767efadbdcf70190c09fe2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63b7b6ddb217910ccc97a42754fe0c5fa83cbe231767efadbdcf70190c09fe2c->enter($__internal_63b7b6ddb217910ccc97a42754fe0c5fa83cbe231767efadbdcf70190c09fe2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_38f70fbaebb42ea328c1ba238222752fae5f5ae68916eb92a8e7365a30ff10d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f70fbaebb42ea328c1ba238222752fae5f5ae68916eb92a8e7365a30ff10d6->enter($__internal_38f70fbaebb42ea328c1ba238222752fae5f5ae68916eb92a8e7365a30ff10d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_38f70fbaebb42ea328c1ba238222752fae5f5ae68916eb92a8e7365a30ff10d6->leave($__internal_38f70fbaebb42ea328c1ba238222752fae5f5ae68916eb92a8e7365a30ff10d6_prof);

        
        $__internal_63b7b6ddb217910ccc97a42754fe0c5fa83cbe231767efadbdcf70190c09fe2c->leave($__internal_63b7b6ddb217910ccc97a42754fe0c5fa83cbe231767efadbdcf70190c09fe2c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5515f6b9b8e5c128cbc55e0d600816ff96f76de872c4b6b9dc39c7a47f9e15e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5515f6b9b8e5c128cbc55e0d600816ff96f76de872c4b6b9dc39c7a47f9e15e6->enter($__internal_5515f6b9b8e5c128cbc55e0d600816ff96f76de872c4b6b9dc39c7a47f9e15e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e4224b15866ab274c8eee0c1da6070d95a3e5dd311d06d171ebfd44785baef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e4224b15866ab274c8eee0c1da6070d95a3e5dd311d06d171ebfd44785baef4->enter($__internal_7e4224b15866ab274c8eee0c1da6070d95a3e5dd311d06d171ebfd44785baef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7e4224b15866ab274c8eee0c1da6070d95a3e5dd311d06d171ebfd44785baef4->leave($__internal_7e4224b15866ab274c8eee0c1da6070d95a3e5dd311d06d171ebfd44785baef4_prof);

        
        $__internal_5515f6b9b8e5c128cbc55e0d600816ff96f76de872c4b6b9dc39c7a47f9e15e6->leave($__internal_5515f6b9b8e5c128cbc55e0d600816ff96f76de872c4b6b9dc39c7a47f9e15e6_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2387dc5c928ca68e840b1c7fa7ff84d4d8888d931b9684416e1b04afcbd67271 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2387dc5c928ca68e840b1c7fa7ff84d4d8888d931b9684416e1b04afcbd67271->enter($__internal_2387dc5c928ca68e840b1c7fa7ff84d4d8888d931b9684416e1b04afcbd67271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_35370eb1e4dc83dc6834c50f63da993d667a0b38a684bd2377935be25fc82b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35370eb1e4dc83dc6834c50f63da993d667a0b38a684bd2377935be25fc82b24->enter($__internal_35370eb1e4dc83dc6834c50f63da993d667a0b38a684bd2377935be25fc82b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_35370eb1e4dc83dc6834c50f63da993d667a0b38a684bd2377935be25fc82b24->leave($__internal_35370eb1e4dc83dc6834c50f63da993d667a0b38a684bd2377935be25fc82b24_prof);

        
        $__internal_2387dc5c928ca68e840b1c7fa7ff84d4d8888d931b9684416e1b04afcbd67271->leave($__internal_2387dc5c928ca68e840b1c7fa7ff84d4d8888d931b9684416e1b04afcbd67271_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
