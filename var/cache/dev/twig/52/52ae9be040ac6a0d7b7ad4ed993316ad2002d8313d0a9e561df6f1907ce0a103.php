<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_d04edcbb07950ac0cb4bea09bdded90c5d65a63a3e0c5df87d22b56839c447b8 extends Twig_Template
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
        $__internal_f564ffdbbd0d4e1e6f8b4d2fb90872ab469c283019c08cf48d3051ac73aa8981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f564ffdbbd0d4e1e6f8b4d2fb90872ab469c283019c08cf48d3051ac73aa8981->enter($__internal_f564ffdbbd0d4e1e6f8b4d2fb90872ab469c283019c08cf48d3051ac73aa8981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_5a1635e66a86ddd536ca045383461d32fcb0e5a8bd082ccdf53a84ac474fe062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1635e66a86ddd536ca045383461d32fcb0e5a8bd082ccdf53a84ac474fe062->enter($__internal_5a1635e66a86ddd536ca045383461d32fcb0e5a8bd082ccdf53a84ac474fe062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f564ffdbbd0d4e1e6f8b4d2fb90872ab469c283019c08cf48d3051ac73aa8981->leave($__internal_f564ffdbbd0d4e1e6f8b4d2fb90872ab469c283019c08cf48d3051ac73aa8981_prof);

        
        $__internal_5a1635e66a86ddd536ca045383461d32fcb0e5a8bd082ccdf53a84ac474fe062->leave($__internal_5a1635e66a86ddd536ca045383461d32fcb0e5a8bd082ccdf53a84ac474fe062_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
