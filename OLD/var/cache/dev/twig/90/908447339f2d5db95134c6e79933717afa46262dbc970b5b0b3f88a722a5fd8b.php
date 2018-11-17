<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_aa31ab996e47fda23ad49151f6136e043e59dca3f38aa76de5207f69d5ac57fa extends Twig_Template
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
        $__internal_6ee1cb3fb1a80c78f618c6534a61cc568758ffaa129dfd25854f589090ec4da6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ee1cb3fb1a80c78f618c6534a61cc568758ffaa129dfd25854f589090ec4da6->enter($__internal_6ee1cb3fb1a80c78f618c6534a61cc568758ffaa129dfd25854f589090ec4da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a5d0069c9f98568086ca6476f3517b9e21fd4f7c6f77ad71ae259eaaf9183732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d0069c9f98568086ca6476f3517b9e21fd4f7c6f77ad71ae259eaaf9183732->enter($__internal_a5d0069c9f98568086ca6476f3517b9e21fd4f7c6f77ad71ae259eaaf9183732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6ee1cb3fb1a80c78f618c6534a61cc568758ffaa129dfd25854f589090ec4da6->leave($__internal_6ee1cb3fb1a80c78f618c6534a61cc568758ffaa129dfd25854f589090ec4da6_prof);

        
        $__internal_a5d0069c9f98568086ca6476f3517b9e21fd4f7c6f77ad71ae259eaaf9183732->leave($__internal_a5d0069c9f98568086ca6476f3517b9e21fd4f7c6f77ad71ae259eaaf9183732_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
