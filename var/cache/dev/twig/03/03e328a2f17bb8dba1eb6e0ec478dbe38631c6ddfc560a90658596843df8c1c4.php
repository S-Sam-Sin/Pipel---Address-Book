<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_bd9138c75d34683d1be6dab69d393fcdf5948f03f5be714a6a2d77b604181883 extends Twig_Template
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
        $__internal_0260b31820fd6f86dc47d832639638dcfa1227d76aafa16700cd344987f84297 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0260b31820fd6f86dc47d832639638dcfa1227d76aafa16700cd344987f84297->enter($__internal_0260b31820fd6f86dc47d832639638dcfa1227d76aafa16700cd344987f84297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_773fd2fe873ae73656ccea46d43a5482adc8b6390221da8722d175255798074c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_773fd2fe873ae73656ccea46d43a5482adc8b6390221da8722d175255798074c->enter($__internal_773fd2fe873ae73656ccea46d43a5482adc8b6390221da8722d175255798074c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0260b31820fd6f86dc47d832639638dcfa1227d76aafa16700cd344987f84297->leave($__internal_0260b31820fd6f86dc47d832639638dcfa1227d76aafa16700cd344987f84297_prof);

        
        $__internal_773fd2fe873ae73656ccea46d43a5482adc8b6390221da8722d175255798074c->leave($__internal_773fd2fe873ae73656ccea46d43a5482adc8b6390221da8722d175255798074c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
