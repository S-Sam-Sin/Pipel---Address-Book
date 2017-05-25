<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_4797223814f9f4baf13dd6b3e4d12709f6698e41d16f53c7b98f05ee42b19e32 extends Twig_Template
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
        $__internal_69162c03edc2a690e60045c3c108e74839017dc606101ee3c66d3de5ae8a0c67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69162c03edc2a690e60045c3c108e74839017dc606101ee3c66d3de5ae8a0c67->enter($__internal_69162c03edc2a690e60045c3c108e74839017dc606101ee3c66d3de5ae8a0c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_bfc7f5ec91fe39095c9abea47769885fe8db118db1e0b60ac5b21c677582699b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfc7f5ec91fe39095c9abea47769885fe8db118db1e0b60ac5b21c677582699b->enter($__internal_bfc7f5ec91fe39095c9abea47769885fe8db118db1e0b60ac5b21c677582699b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_69162c03edc2a690e60045c3c108e74839017dc606101ee3c66d3de5ae8a0c67->leave($__internal_69162c03edc2a690e60045c3c108e74839017dc606101ee3c66d3de5ae8a0c67_prof);

        
        $__internal_bfc7f5ec91fe39095c9abea47769885fe8db118db1e0b60ac5b21c677582699b->leave($__internal_bfc7f5ec91fe39095c9abea47769885fe8db118db1e0b60ac5b21c677582699b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
