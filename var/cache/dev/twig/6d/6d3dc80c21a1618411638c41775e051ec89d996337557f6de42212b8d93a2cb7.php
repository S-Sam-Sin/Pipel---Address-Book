<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_613178b24aef7e1dee0e3cd93f8393d1524d06bae56091fd1630ad3aeb8204b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_677ff76aee1e866b8a609a1dd2bc35300d5145da6469a6d965a9e95a70506add = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_677ff76aee1e866b8a609a1dd2bc35300d5145da6469a6d965a9e95a70506add->enter($__internal_677ff76aee1e866b8a609a1dd2bc35300d5145da6469a6d965a9e95a70506add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_7e9143d093e927e8cbb377acdef0b737fd745caee1b5ea9dcded4f4753a32970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9143d093e927e8cbb377acdef0b737fd745caee1b5ea9dcded4f4753a32970->enter($__internal_7e9143d093e927e8cbb377acdef0b737fd745caee1b5ea9dcded4f4753a32970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_677ff76aee1e866b8a609a1dd2bc35300d5145da6469a6d965a9e95a70506add->leave($__internal_677ff76aee1e866b8a609a1dd2bc35300d5145da6469a6d965a9e95a70506add_prof);

        
        $__internal_7e9143d093e927e8cbb377acdef0b737fd745caee1b5ea9dcded4f4753a32970->leave($__internal_7e9143d093e927e8cbb377acdef0b737fd745caee1b5ea9dcded4f4753a32970_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
