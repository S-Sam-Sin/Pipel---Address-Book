<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_91a8934b45f9944e6ad04de6aaf89fffee96696656f72c4601847bdc8ca26d04 extends Twig_Template
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
        $__internal_7349c4bf0a19b37e84b49d868ae6e831e201db936ac7d0996a40bb529c63b3a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7349c4bf0a19b37e84b49d868ae6e831e201db936ac7d0996a40bb529c63b3a0->enter($__internal_7349c4bf0a19b37e84b49d868ae6e831e201db936ac7d0996a40bb529c63b3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_9584cf3489a3b1ae78cee21fe82e96a2fb3363a9f1fa091bef27fa22fbc5586b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9584cf3489a3b1ae78cee21fe82e96a2fb3363a9f1fa091bef27fa22fbc5586b->enter($__internal_9584cf3489a3b1ae78cee21fe82e96a2fb3363a9f1fa091bef27fa22fbc5586b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7349c4bf0a19b37e84b49d868ae6e831e201db936ac7d0996a40bb529c63b3a0->leave($__internal_7349c4bf0a19b37e84b49d868ae6e831e201db936ac7d0996a40bb529c63b3a0_prof);

        
        $__internal_9584cf3489a3b1ae78cee21fe82e96a2fb3363a9f1fa091bef27fa22fbc5586b->leave($__internal_9584cf3489a3b1ae78cee21fe82e96a2fb3363a9f1fa091bef27fa22fbc5586b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
