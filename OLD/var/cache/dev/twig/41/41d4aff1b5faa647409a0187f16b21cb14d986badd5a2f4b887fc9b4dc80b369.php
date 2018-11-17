<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_5d2ae1d0a64b41e4515169acd5bba145a3cee3a340bee724fa3db7572906088a extends Twig_Template
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
        $__internal_7cd4a5a3243e488b49cb654e7ebc599de84f349c5cd73c260bcf4f9c2797cd69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd4a5a3243e488b49cb654e7ebc599de84f349c5cd73c260bcf4f9c2797cd69->enter($__internal_7cd4a5a3243e488b49cb654e7ebc599de84f349c5cd73c260bcf4f9c2797cd69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_85642959ae786eb2d109560ea3e33ee9973aa8c5282ef72a3e73f50c1cee214a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85642959ae786eb2d109560ea3e33ee9973aa8c5282ef72a3e73f50c1cee214a->enter($__internal_85642959ae786eb2d109560ea3e33ee9973aa8c5282ef72a3e73f50c1cee214a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_7cd4a5a3243e488b49cb654e7ebc599de84f349c5cd73c260bcf4f9c2797cd69->leave($__internal_7cd4a5a3243e488b49cb654e7ebc599de84f349c5cd73c260bcf4f9c2797cd69_prof);

        
        $__internal_85642959ae786eb2d109560ea3e33ee9973aa8c5282ef72a3e73f50c1cee214a->leave($__internal_85642959ae786eb2d109560ea3e33ee9973aa8c5282ef72a3e73f50c1cee214a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
