<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_9b7e91467a98ec3bfd0c0a15bf5a691f95618817514bacd939803090eeb923df extends Twig_Template
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
        $__internal_6e848d85ae815ab6a270f06b0428bfd0184bfca4c144844d9f03ddc42ceb2b54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e848d85ae815ab6a270f06b0428bfd0184bfca4c144844d9f03ddc42ceb2b54->enter($__internal_6e848d85ae815ab6a270f06b0428bfd0184bfca4c144844d9f03ddc42ceb2b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_38bc212cc13d4068d16a7be611b9d6d4cfbd3a0d35a9a06191b67ea5be61d113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38bc212cc13d4068d16a7be611b9d6d4cfbd3a0d35a9a06191b67ea5be61d113->enter($__internal_38bc212cc13d4068d16a7be611b9d6d4cfbd3a0d35a9a06191b67ea5be61d113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6e848d85ae815ab6a270f06b0428bfd0184bfca4c144844d9f03ddc42ceb2b54->leave($__internal_6e848d85ae815ab6a270f06b0428bfd0184bfca4c144844d9f03ddc42ceb2b54_prof);

        
        $__internal_38bc212cc13d4068d16a7be611b9d6d4cfbd3a0d35a9a06191b67ea5be61d113->leave($__internal_38bc212cc13d4068d16a7be611b9d6d4cfbd3a0d35a9a06191b67ea5be61d113_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
