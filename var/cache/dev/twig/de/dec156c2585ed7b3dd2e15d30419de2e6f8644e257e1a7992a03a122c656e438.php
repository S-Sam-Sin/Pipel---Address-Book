<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_8cffbb1fe8b1699a05e879eb7aef88e3bd574f3762956b7656e4af077bb583d3 extends Twig_Template
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
        $__internal_8a185cdb6fa9cb5aa06126d17f5c70ba7b0b10ecfb7ba1b7216b455538e1a436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a185cdb6fa9cb5aa06126d17f5c70ba7b0b10ecfb7ba1b7216b455538e1a436->enter($__internal_8a185cdb6fa9cb5aa06126d17f5c70ba7b0b10ecfb7ba1b7216b455538e1a436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_6f7a6d8a59e4d4ce307f736711c288fb4f3b6b8ce718e51bfd6b9820bf35f15e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7a6d8a59e4d4ce307f736711c288fb4f3b6b8ce718e51bfd6b9820bf35f15e->enter($__internal_6f7a6d8a59e4d4ce307f736711c288fb4f3b6b8ce718e51bfd6b9820bf35f15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8a185cdb6fa9cb5aa06126d17f5c70ba7b0b10ecfb7ba1b7216b455538e1a436->leave($__internal_8a185cdb6fa9cb5aa06126d17f5c70ba7b0b10ecfb7ba1b7216b455538e1a436_prof);

        
        $__internal_6f7a6d8a59e4d4ce307f736711c288fb4f3b6b8ce718e51bfd6b9820bf35f15e->leave($__internal_6f7a6d8a59e4d4ce307f736711c288fb4f3b6b8ce718e51bfd6b9820bf35f15e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
