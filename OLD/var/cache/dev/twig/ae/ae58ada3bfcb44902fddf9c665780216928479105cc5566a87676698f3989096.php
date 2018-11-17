<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2b010cb35fb9a71259ebd5f4d9945690d6bc2df7d5bb357e7184efe2193ab1b2 extends Twig_Template
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
        $__internal_216b4722305727c38d19eb4204a274b4b40f81079604350e05d16a301204a47d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_216b4722305727c38d19eb4204a274b4b40f81079604350e05d16a301204a47d->enter($__internal_216b4722305727c38d19eb4204a274b4b40f81079604350e05d16a301204a47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_4e9e28f700ec39d22115b41aa9e0cc9305060897db857bcb4da9d0fffd615098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e9e28f700ec39d22115b41aa9e0cc9305060897db857bcb4da9d0fffd615098->enter($__internal_4e9e28f700ec39d22115b41aa9e0cc9305060897db857bcb4da9d0fffd615098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_216b4722305727c38d19eb4204a274b4b40f81079604350e05d16a301204a47d->leave($__internal_216b4722305727c38d19eb4204a274b4b40f81079604350e05d16a301204a47d_prof);

        
        $__internal_4e9e28f700ec39d22115b41aa9e0cc9305060897db857bcb4da9d0fffd615098->leave($__internal_4e9e28f700ec39d22115b41aa9e0cc9305060897db857bcb4da9d0fffd615098_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
