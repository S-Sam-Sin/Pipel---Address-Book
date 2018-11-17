<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_87c54b94642b5acb5f8392769c9f7cda27b8679021e0bbdc2603da56cb6339b7 extends Twig_Template
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
        $__internal_71b161d71f1a524cac79c8208d8699843c4e87974f46c5d8fa497f8ba1191107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71b161d71f1a524cac79c8208d8699843c4e87974f46c5d8fa497f8ba1191107->enter($__internal_71b161d71f1a524cac79c8208d8699843c4e87974f46c5d8fa497f8ba1191107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_0233a59717a0455ae366a713273bb8006f36cc1cbcebe735bbc46c2bc381b42b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0233a59717a0455ae366a713273bb8006f36cc1cbcebe735bbc46c2bc381b42b->enter($__internal_0233a59717a0455ae366a713273bb8006f36cc1cbcebe735bbc46c2bc381b42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_71b161d71f1a524cac79c8208d8699843c4e87974f46c5d8fa497f8ba1191107->leave($__internal_71b161d71f1a524cac79c8208d8699843c4e87974f46c5d8fa497f8ba1191107_prof);

        
        $__internal_0233a59717a0455ae366a713273bb8006f36cc1cbcebe735bbc46c2bc381b42b->leave($__internal_0233a59717a0455ae366a713273bb8006f36cc1cbcebe735bbc46c2bc381b42b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
