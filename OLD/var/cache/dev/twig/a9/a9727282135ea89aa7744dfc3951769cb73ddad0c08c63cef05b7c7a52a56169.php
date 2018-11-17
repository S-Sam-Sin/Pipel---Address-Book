<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3a850b9d28cdb48dc986b07263c05526f4999b31edacc9ce6e365ca366872178 extends Twig_Template
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
        $__internal_60d0873cc759285f8aa667695ee8c09e862280d235103c5666f76f10e8fa7d00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60d0873cc759285f8aa667695ee8c09e862280d235103c5666f76f10e8fa7d00->enter($__internal_60d0873cc759285f8aa667695ee8c09e862280d235103c5666f76f10e8fa7d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_20b2833068e8ebc6fccf1b10e115e5667427e28c111e95ad9e3ef01410bc1ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20b2833068e8ebc6fccf1b10e115e5667427e28c111e95ad9e3ef01410bc1ad7->enter($__internal_20b2833068e8ebc6fccf1b10e115e5667427e28c111e95ad9e3ef01410bc1ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_60d0873cc759285f8aa667695ee8c09e862280d235103c5666f76f10e8fa7d00->leave($__internal_60d0873cc759285f8aa667695ee8c09e862280d235103c5666f76f10e8fa7d00_prof);

        
        $__internal_20b2833068e8ebc6fccf1b10e115e5667427e28c111e95ad9e3ef01410bc1ad7->leave($__internal_20b2833068e8ebc6fccf1b10e115e5667427e28c111e95ad9e3ef01410bc1ad7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
