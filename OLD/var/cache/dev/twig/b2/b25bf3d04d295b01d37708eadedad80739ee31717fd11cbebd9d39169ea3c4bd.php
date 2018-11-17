<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_67641477698b6eea2e6bbfd3a74b45911356d91d77869b652912de882954c17f extends Twig_Template
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
        $__internal_c42bf244896fa77809f229ece4b283c4e261326c379c2a9faffa96a9f88ae326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c42bf244896fa77809f229ece4b283c4e261326c379c2a9faffa96a9f88ae326->enter($__internal_c42bf244896fa77809f229ece4b283c4e261326c379c2a9faffa96a9f88ae326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_ee81a6ec746c719e60b86c8873a58898d1bb6716f84828ad67b3e79d6778b01c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee81a6ec746c719e60b86c8873a58898d1bb6716f84828ad67b3e79d6778b01c->enter($__internal_ee81a6ec746c719e60b86c8873a58898d1bb6716f84828ad67b3e79d6778b01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c42bf244896fa77809f229ece4b283c4e261326c379c2a9faffa96a9f88ae326->leave($__internal_c42bf244896fa77809f229ece4b283c4e261326c379c2a9faffa96a9f88ae326_prof);

        
        $__internal_ee81a6ec746c719e60b86c8873a58898d1bb6716f84828ad67b3e79d6778b01c->leave($__internal_ee81a6ec746c719e60b86c8873a58898d1bb6716f84828ad67b3e79d6778b01c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
