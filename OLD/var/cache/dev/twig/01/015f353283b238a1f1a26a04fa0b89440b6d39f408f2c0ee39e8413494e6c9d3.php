<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_aaefabb95fdb057edc91b57e65ad07320397beccb8b0c0616689c51bac6073bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc65f1e7685773edc78040bd150195d5e6eb525ded35784c3536e9df50c3bfef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc65f1e7685773edc78040bd150195d5e6eb525ded35784c3536e9df50c3bfef->enter($__internal_bc65f1e7685773edc78040bd150195d5e6eb525ded35784c3536e9df50c3bfef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_1963ec455017e16541f5d3c2db7fab243e71f528fa3a1351ae73cae0e7011dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1963ec455017e16541f5d3c2db7fab243e71f528fa3a1351ae73cae0e7011dac->enter($__internal_1963ec455017e16541f5d3c2db7fab243e71f528fa3a1351ae73cae0e7011dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bc65f1e7685773edc78040bd150195d5e6eb525ded35784c3536e9df50c3bfef->leave($__internal_bc65f1e7685773edc78040bd150195d5e6eb525ded35784c3536e9df50c3bfef_prof);

        
        $__internal_1963ec455017e16541f5d3c2db7fab243e71f528fa3a1351ae73cae0e7011dac->leave($__internal_1963ec455017e16541f5d3c2db7fab243e71f528fa3a1351ae73cae0e7011dac_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0be47de2852208729f2c5666061408fcaf3ef1cfe6c97e685ab3c59e5e72179a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be47de2852208729f2c5666061408fcaf3ef1cfe6c97e685ab3c59e5e72179a->enter($__internal_0be47de2852208729f2c5666061408fcaf3ef1cfe6c97e685ab3c59e5e72179a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_29f7ee5330ff218738e6822dcc774ca8d0c362e9c0272e0a69bddbffa7a13dcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29f7ee5330ff218738e6822dcc774ca8d0c362e9c0272e0a69bddbffa7a13dcd->enter($__internal_29f7ee5330ff218738e6822dcc774ca8d0c362e9c0272e0a69bddbffa7a13dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_29f7ee5330ff218738e6822dcc774ca8d0c362e9c0272e0a69bddbffa7a13dcd->leave($__internal_29f7ee5330ff218738e6822dcc774ca8d0c362e9c0272e0a69bddbffa7a13dcd_prof);

        
        $__internal_0be47de2852208729f2c5666061408fcaf3ef1cfe6c97e685ab3c59e5e72179a->leave($__internal_0be47de2852208729f2c5666061408fcaf3ef1cfe6c97e685ab3c59e5e72179a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
