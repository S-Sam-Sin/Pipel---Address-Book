<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_d9bc5a1bb8762ed25834758f597841d3eaf69286b6a4035a4c51c908446a74e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9ca37f0a6c6ec692edba908f0b8498f8bd6c62459c605d9c146aa949400a5d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ca37f0a6c6ec692edba908f0b8498f8bd6c62459c605d9c146aa949400a5d1->enter($__internal_d9ca37f0a6c6ec692edba908f0b8498f8bd6c62459c605d9c146aa949400a5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_0b2dfb2cdb3ac0f7a9686e0f2f5afc0af84ad7abaac5446ba59353b1dde36262 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b2dfb2cdb3ac0f7a9686e0f2f5afc0af84ad7abaac5446ba59353b1dde36262->enter($__internal_0b2dfb2cdb3ac0f7a9686e0f2f5afc0af84ad7abaac5446ba59353b1dde36262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9ca37f0a6c6ec692edba908f0b8498f8bd6c62459c605d9c146aa949400a5d1->leave($__internal_d9ca37f0a6c6ec692edba908f0b8498f8bd6c62459c605d9c146aa949400a5d1_prof);

        
        $__internal_0b2dfb2cdb3ac0f7a9686e0f2f5afc0af84ad7abaac5446ba59353b1dde36262->leave($__internal_0b2dfb2cdb3ac0f7a9686e0f2f5afc0af84ad7abaac5446ba59353b1dde36262_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a3abd01fece38bddf601501b8ba1d810f16e37f1f05bcb2c1dd9c6fde4e0b280 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3abd01fece38bddf601501b8ba1d810f16e37f1f05bcb2c1dd9c6fde4e0b280->enter($__internal_a3abd01fece38bddf601501b8ba1d810f16e37f1f05bcb2c1dd9c6fde4e0b280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_60e2c52beacb7ab641cae060cf1251c34fbfa2e3b01e60d11f8255ad8c50852a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60e2c52beacb7ab641cae060cf1251c34fbfa2e3b01e60d11f8255ad8c50852a->enter($__internal_60e2c52beacb7ab641cae060cf1251c34fbfa2e3b01e60d11f8255ad8c50852a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_60e2c52beacb7ab641cae060cf1251c34fbfa2e3b01e60d11f8255ad8c50852a->leave($__internal_60e2c52beacb7ab641cae060cf1251c34fbfa2e3b01e60d11f8255ad8c50852a_prof);

        
        $__internal_a3abd01fece38bddf601501b8ba1d810f16e37f1f05bcb2c1dd9c6fde4e0b280->leave($__internal_a3abd01fece38bddf601501b8ba1d810f16e37f1f05bcb2c1dd9c6fde4e0b280_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f3d92cbe6c3b1dd90a7bad758b9f6022568dda6a4e9e2eac11eae3a051f81181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3d92cbe6c3b1dd90a7bad758b9f6022568dda6a4e9e2eac11eae3a051f81181->enter($__internal_f3d92cbe6c3b1dd90a7bad758b9f6022568dda6a4e9e2eac11eae3a051f81181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_81cfeb8a575c4fe9731847dc96c60ca3e21dd8ccfc20d54798f72a35d82b5249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81cfeb8a575c4fe9731847dc96c60ca3e21dd8ccfc20d54798f72a35d82b5249->enter($__internal_81cfeb8a575c4fe9731847dc96c60ca3e21dd8ccfc20d54798f72a35d82b5249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_81cfeb8a575c4fe9731847dc96c60ca3e21dd8ccfc20d54798f72a35d82b5249->leave($__internal_81cfeb8a575c4fe9731847dc96c60ca3e21dd8ccfc20d54798f72a35d82b5249_prof);

        
        $__internal_f3d92cbe6c3b1dd90a7bad758b9f6022568dda6a4e9e2eac11eae3a051f81181->leave($__internal_f3d92cbe6c3b1dd90a7bad758b9f6022568dda6a4e9e2eac11eae3a051f81181_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
