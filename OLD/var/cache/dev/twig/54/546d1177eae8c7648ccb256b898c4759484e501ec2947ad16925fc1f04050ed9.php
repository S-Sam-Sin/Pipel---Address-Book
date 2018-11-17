<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4cd3c0a952a2a819f5f39c3904ceaf3e68e9f659f876be58dc8bc9275f87ecf5 extends Twig_Template
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
        $__internal_6a7671a0c195e59eb3d4698250c4befb0b0ff4e8a85a89ee537148c7578b7802 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a7671a0c195e59eb3d4698250c4befb0b0ff4e8a85a89ee537148c7578b7802->enter($__internal_6a7671a0c195e59eb3d4698250c4befb0b0ff4e8a85a89ee537148c7578b7802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_5cc5a04b9f4a0fd3f74a9eb1c5d454fb4e13e9168159c4d477f14a0d130cda51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cc5a04b9f4a0fd3f74a9eb1c5d454fb4e13e9168159c4d477f14a0d130cda51->enter($__internal_5cc5a04b9f4a0fd3f74a9eb1c5d454fb4e13e9168159c4d477f14a0d130cda51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6a7671a0c195e59eb3d4698250c4befb0b0ff4e8a85a89ee537148c7578b7802->leave($__internal_6a7671a0c195e59eb3d4698250c4befb0b0ff4e8a85a89ee537148c7578b7802_prof);

        
        $__internal_5cc5a04b9f4a0fd3f74a9eb1c5d454fb4e13e9168159c4d477f14a0d130cda51->leave($__internal_5cc5a04b9f4a0fd3f74a9eb1c5d454fb4e13e9168159c4d477f14a0d130cda51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
