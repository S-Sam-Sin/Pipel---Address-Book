<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ed598f64c3eaa249ab8e1cd012263774744fd2aae7a0bb9f4357007b645c5fd8 extends Twig_Template
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
        $__internal_10619b7d7d274b950477cf09d93421b17601b506fbcd8c1d9703c7a94490f11c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10619b7d7d274b950477cf09d93421b17601b506fbcd8c1d9703c7a94490f11c->enter($__internal_10619b7d7d274b950477cf09d93421b17601b506fbcd8c1d9703c7a94490f11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_9e8cbd2e8f00df875438d058b3758614e19f4d321282356021fe2af791a21014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8cbd2e8f00df875438d058b3758614e19f4d321282356021fe2af791a21014->enter($__internal_9e8cbd2e8f00df875438d058b3758614e19f4d321282356021fe2af791a21014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_10619b7d7d274b950477cf09d93421b17601b506fbcd8c1d9703c7a94490f11c->leave($__internal_10619b7d7d274b950477cf09d93421b17601b506fbcd8c1d9703c7a94490f11c_prof);

        
        $__internal_9e8cbd2e8f00df875438d058b3758614e19f4d321282356021fe2af791a21014->leave($__internal_9e8cbd2e8f00df875438d058b3758614e19f4d321282356021fe2af791a21014_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
