<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e8da47c82bdbf50e78aef30bcc8d459ea0b2d9469dfc5aab66ef267e1403fcc8 extends Twig_Template
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
        $__internal_543242aba4d88c18ce24fd40cddb3ae3d75d9c84ce800415347a0d1b9b91489f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_543242aba4d88c18ce24fd40cddb3ae3d75d9c84ce800415347a0d1b9b91489f->enter($__internal_543242aba4d88c18ce24fd40cddb3ae3d75d9c84ce800415347a0d1b9b91489f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_cab5fd479928f9ef4ccb06a95a55f07ab416f93f2fffaa60a389bdc6e1c6abf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab5fd479928f9ef4ccb06a95a55f07ab416f93f2fffaa60a389bdc6e1c6abf7->enter($__internal_cab5fd479928f9ef4ccb06a95a55f07ab416f93f2fffaa60a389bdc6e1c6abf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_543242aba4d88c18ce24fd40cddb3ae3d75d9c84ce800415347a0d1b9b91489f->leave($__internal_543242aba4d88c18ce24fd40cddb3ae3d75d9c84ce800415347a0d1b9b91489f_prof);

        
        $__internal_cab5fd479928f9ef4ccb06a95a55f07ab416f93f2fffaa60a389bdc6e1c6abf7->leave($__internal_cab5fd479928f9ef4ccb06a95a55f07ab416f93f2fffaa60a389bdc6e1c6abf7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
