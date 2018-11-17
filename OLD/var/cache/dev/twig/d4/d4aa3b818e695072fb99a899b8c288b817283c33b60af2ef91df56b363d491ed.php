<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b637723b582a7979b4b36d8b8f86a06c12f6affa9919a773d7bb7ead0fa50a1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_3b3a85c6bc619fe3a7ea127c0d63096bc22e9b1d231e1a47dbabb29e2e1ab3a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b3a85c6bc619fe3a7ea127c0d63096bc22e9b1d231e1a47dbabb29e2e1ab3a0->enter($__internal_3b3a85c6bc619fe3a7ea127c0d63096bc22e9b1d231e1a47dbabb29e2e1ab3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_c9d6823900d6b9e1679da29ca2ba6f8c69101c843653bce17d54adef75402c9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d6823900d6b9e1679da29ca2ba6f8c69101c843653bce17d54adef75402c9d->enter($__internal_c9d6823900d6b9e1679da29ca2ba6f8c69101c843653bce17d54adef75402c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b3a85c6bc619fe3a7ea127c0d63096bc22e9b1d231e1a47dbabb29e2e1ab3a0->leave($__internal_3b3a85c6bc619fe3a7ea127c0d63096bc22e9b1d231e1a47dbabb29e2e1ab3a0_prof);

        
        $__internal_c9d6823900d6b9e1679da29ca2ba6f8c69101c843653bce17d54adef75402c9d->leave($__internal_c9d6823900d6b9e1679da29ca2ba6f8c69101c843653bce17d54adef75402c9d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_25d55ce891c4ddc01be1b76a995177d500b7279c685d23dcd98943fea7906ed2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25d55ce891c4ddc01be1b76a995177d500b7279c685d23dcd98943fea7906ed2->enter($__internal_25d55ce891c4ddc01be1b76a995177d500b7279c685d23dcd98943fea7906ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0b5cec4011579d36c4abcbc95221e98d839b5868f682c132a0cf495dd09ac963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5cec4011579d36c4abcbc95221e98d839b5868f682c132a0cf495dd09ac963->enter($__internal_0b5cec4011579d36c4abcbc95221e98d839b5868f682c132a0cf495dd09ac963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0b5cec4011579d36c4abcbc95221e98d839b5868f682c132a0cf495dd09ac963->leave($__internal_0b5cec4011579d36c4abcbc95221e98d839b5868f682c132a0cf495dd09ac963_prof);

        
        $__internal_25d55ce891c4ddc01be1b76a995177d500b7279c685d23dcd98943fea7906ed2->leave($__internal_25d55ce891c4ddc01be1b76a995177d500b7279c685d23dcd98943fea7906ed2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0b1fa747bc25dd6ec3a3e53372155cc09945fa402d9e871ea11b0679d0d4e31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0b1fa747bc25dd6ec3a3e53372155cc09945fa402d9e871ea11b0679d0d4e31->enter($__internal_b0b1fa747bc25dd6ec3a3e53372155cc09945fa402d9e871ea11b0679d0d4e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c730b6b1444a922ce2015a56718b3a2a755508890bd5053937432e7027dce8c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c730b6b1444a922ce2015a56718b3a2a755508890bd5053937432e7027dce8c6->enter($__internal_c730b6b1444a922ce2015a56718b3a2a755508890bd5053937432e7027dce8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c730b6b1444a922ce2015a56718b3a2a755508890bd5053937432e7027dce8c6->leave($__internal_c730b6b1444a922ce2015a56718b3a2a755508890bd5053937432e7027dce8c6_prof);

        
        $__internal_b0b1fa747bc25dd6ec3a3e53372155cc09945fa402d9e871ea11b0679d0d4e31->leave($__internal_b0b1fa747bc25dd6ec3a3e53372155cc09945fa402d9e871ea11b0679d0d4e31_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
