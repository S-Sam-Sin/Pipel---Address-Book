<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_af0d7ffca172acc8290551e8da69fd63cb787d448b705003130cc80d19d83054 extends Twig_Template
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
        $__internal_188676c256d7b2e4b18597af22e0920a13d16ffd4789fcc5a4e9bd88539bfe38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_188676c256d7b2e4b18597af22e0920a13d16ffd4789fcc5a4e9bd88539bfe38->enter($__internal_188676c256d7b2e4b18597af22e0920a13d16ffd4789fcc5a4e9bd88539bfe38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_aed38cdc8adf80c60d199b0ea28631c29e3a2ded8818d5b656a4d7846ae1f583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed38cdc8adf80c60d199b0ea28631c29e3a2ded8818d5b656a4d7846ae1f583->enter($__internal_aed38cdc8adf80c60d199b0ea28631c29e3a2ded8818d5b656a4d7846ae1f583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_188676c256d7b2e4b18597af22e0920a13d16ffd4789fcc5a4e9bd88539bfe38->leave($__internal_188676c256d7b2e4b18597af22e0920a13d16ffd4789fcc5a4e9bd88539bfe38_prof);

        
        $__internal_aed38cdc8adf80c60d199b0ea28631c29e3a2ded8818d5b656a4d7846ae1f583->leave($__internal_aed38cdc8adf80c60d199b0ea28631c29e3a2ded8818d5b656a4d7846ae1f583_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
