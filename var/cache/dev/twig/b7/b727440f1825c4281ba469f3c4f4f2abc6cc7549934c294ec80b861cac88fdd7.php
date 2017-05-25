<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_71135c85904bf810169f521ea4d0867221d786b90dd265c188d9d9c524cb0214 extends Twig_Template
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
        $__internal_cd6117d1f6536f93700037eaca9b9d580da57ba22f4d2935e28ba42c30736925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd6117d1f6536f93700037eaca9b9d580da57ba22f4d2935e28ba42c30736925->enter($__internal_cd6117d1f6536f93700037eaca9b9d580da57ba22f4d2935e28ba42c30736925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_6138f565aff2ab69905bd36546688a0cf13656c490f8a2e29ea9079141872f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6138f565aff2ab69905bd36546688a0cf13656c490f8a2e29ea9079141872f63->enter($__internal_6138f565aff2ab69905bd36546688a0cf13656c490f8a2e29ea9079141872f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cd6117d1f6536f93700037eaca9b9d580da57ba22f4d2935e28ba42c30736925->leave($__internal_cd6117d1f6536f93700037eaca9b9d580da57ba22f4d2935e28ba42c30736925_prof);

        
        $__internal_6138f565aff2ab69905bd36546688a0cf13656c490f8a2e29ea9079141872f63->leave($__internal_6138f565aff2ab69905bd36546688a0cf13656c490f8a2e29ea9079141872f63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
