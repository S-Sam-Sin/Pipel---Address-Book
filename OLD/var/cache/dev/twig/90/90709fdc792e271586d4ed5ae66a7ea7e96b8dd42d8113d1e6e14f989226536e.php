<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e297c640960503a899ae115cebef317122a0fecdcd1671665a4e9527d4b3f59c extends Twig_Template
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
        $__internal_2aa31045a5ab41ebc55fbc5f349cadc52a84fbe54ab9bcd9f78779f31480740e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aa31045a5ab41ebc55fbc5f349cadc52a84fbe54ab9bcd9f78779f31480740e->enter($__internal_2aa31045a5ab41ebc55fbc5f349cadc52a84fbe54ab9bcd9f78779f31480740e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_728b25dad43f0bef3ed8fb49080370afcf5f479b5613b6ce6f9fb6bfa15208d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_728b25dad43f0bef3ed8fb49080370afcf5f479b5613b6ce6f9fb6bfa15208d6->enter($__internal_728b25dad43f0bef3ed8fb49080370afcf5f479b5613b6ce6f9fb6bfa15208d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_2aa31045a5ab41ebc55fbc5f349cadc52a84fbe54ab9bcd9f78779f31480740e->leave($__internal_2aa31045a5ab41ebc55fbc5f349cadc52a84fbe54ab9bcd9f78779f31480740e_prof);

        
        $__internal_728b25dad43f0bef3ed8fb49080370afcf5f479b5613b6ce6f9fb6bfa15208d6->leave($__internal_728b25dad43f0bef3ed8fb49080370afcf5f479b5613b6ce6f9fb6bfa15208d6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
