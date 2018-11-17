<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_db3716d3f708ad48587c9859687a871f43214f665f4ba4c9523cefb01dc0c217 extends Twig_Template
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
        $__internal_9ddb5b5e2514e76101713f28b10415775d3c081a086181df7d329cd5c4f6e758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ddb5b5e2514e76101713f28b10415775d3c081a086181df7d329cd5c4f6e758->enter($__internal_9ddb5b5e2514e76101713f28b10415775d3c081a086181df7d329cd5c4f6e758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_9d8a2b16139e2e0daf34e7e521cf6015b7b4cee4e03457f03706edb97421876d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d8a2b16139e2e0daf34e7e521cf6015b7b4cee4e03457f03706edb97421876d->enter($__internal_9d8a2b16139e2e0daf34e7e521cf6015b7b4cee4e03457f03706edb97421876d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_9ddb5b5e2514e76101713f28b10415775d3c081a086181df7d329cd5c4f6e758->leave($__internal_9ddb5b5e2514e76101713f28b10415775d3c081a086181df7d329cd5c4f6e758_prof);

        
        $__internal_9d8a2b16139e2e0daf34e7e521cf6015b7b4cee4e03457f03706edb97421876d->leave($__internal_9d8a2b16139e2e0daf34e7e521cf6015b7b4cee4e03457f03706edb97421876d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
