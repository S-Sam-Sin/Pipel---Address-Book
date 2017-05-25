<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_73735ef2de69645ebcdeac65c950fbb0f088f50adae5df3c40ef4d9100a786c6 extends Twig_Template
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
        $__internal_42b04d5ec55659ac611c16fea02ad81ec1ed77311d1696e5cbea57ff2afc8718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42b04d5ec55659ac611c16fea02ad81ec1ed77311d1696e5cbea57ff2afc8718->enter($__internal_42b04d5ec55659ac611c16fea02ad81ec1ed77311d1696e5cbea57ff2afc8718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_de96b0a15a4b1a4e338651bb65897e17e7001c9e81c1aba114ea11e98bce8074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de96b0a15a4b1a4e338651bb65897e17e7001c9e81c1aba114ea11e98bce8074->enter($__internal_de96b0a15a4b1a4e338651bb65897e17e7001c9e81c1aba114ea11e98bce8074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_42b04d5ec55659ac611c16fea02ad81ec1ed77311d1696e5cbea57ff2afc8718->leave($__internal_42b04d5ec55659ac611c16fea02ad81ec1ed77311d1696e5cbea57ff2afc8718_prof);

        
        $__internal_de96b0a15a4b1a4e338651bb65897e17e7001c9e81c1aba114ea11e98bce8074->leave($__internal_de96b0a15a4b1a4e338651bb65897e17e7001c9e81c1aba114ea11e98bce8074_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
