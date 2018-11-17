<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_a36dad82158789959d9353abb049e3bb361e6d82c87d5cbb9dae18e8d3c92758 extends Twig_Template
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
        $__internal_3a2c1bc289411cb522551b4c1a390d16756282cc2416c030c2d39ba231a5e2db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a2c1bc289411cb522551b4c1a390d16756282cc2416c030c2d39ba231a5e2db->enter($__internal_3a2c1bc289411cb522551b4c1a390d16756282cc2416c030c2d39ba231a5e2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_668294ebe15bd1bb52c5298927e8d07053b8035b1b109e4a2f94c34b29c8cdbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_668294ebe15bd1bb52c5298927e8d07053b8035b1b109e4a2f94c34b29c8cdbb->enter($__internal_668294ebe15bd1bb52c5298927e8d07053b8035b1b109e4a2f94c34b29c8cdbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_3a2c1bc289411cb522551b4c1a390d16756282cc2416c030c2d39ba231a5e2db->leave($__internal_3a2c1bc289411cb522551b4c1a390d16756282cc2416c030c2d39ba231a5e2db_prof);

        
        $__internal_668294ebe15bd1bb52c5298927e8d07053b8035b1b109e4a2f94c34b29c8cdbb->leave($__internal_668294ebe15bd1bb52c5298927e8d07053b8035b1b109e4a2f94c34b29c8cdbb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
