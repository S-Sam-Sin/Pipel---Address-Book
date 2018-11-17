<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2722426e46d50e4e427c4443770abf2394fe69258026c8e8f06233e47d4f859b extends Twig_Template
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
        $__internal_4b95b929e95c86957feac9f1780fc7574789b0dd024d629b719acc857ceb911e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b95b929e95c86957feac9f1780fc7574789b0dd024d629b719acc857ceb911e->enter($__internal_4b95b929e95c86957feac9f1780fc7574789b0dd024d629b719acc857ceb911e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_b8eae1e6f75af2f79823c9324a7114a497ce0cef8047484c66ee79bf4d00624a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8eae1e6f75af2f79823c9324a7114a497ce0cef8047484c66ee79bf4d00624a->enter($__internal_b8eae1e6f75af2f79823c9324a7114a497ce0cef8047484c66ee79bf4d00624a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_4b95b929e95c86957feac9f1780fc7574789b0dd024d629b719acc857ceb911e->leave($__internal_4b95b929e95c86957feac9f1780fc7574789b0dd024d629b719acc857ceb911e_prof);

        
        $__internal_b8eae1e6f75af2f79823c9324a7114a497ce0cef8047484c66ee79bf4d00624a->leave($__internal_b8eae1e6f75af2f79823c9324a7114a497ce0cef8047484c66ee79bf4d00624a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
