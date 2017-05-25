<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_632777faee52521f52599050204e98e151d10f6d29fd60284f7ce50b679bef62 extends Twig_Template
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
        $__internal_ea22a0f9ca2d60c1d4bedaa7732c0ba416637b764e51871edda137173d5d438a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea22a0f9ca2d60c1d4bedaa7732c0ba416637b764e51871edda137173d5d438a->enter($__internal_ea22a0f9ca2d60c1d4bedaa7732c0ba416637b764e51871edda137173d5d438a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_441ced982a0423222691b16dfe58eda5aa205ef03c490e54666a670563c324fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441ced982a0423222691b16dfe58eda5aa205ef03c490e54666a670563c324fb->enter($__internal_441ced982a0423222691b16dfe58eda5aa205ef03c490e54666a670563c324fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_ea22a0f9ca2d60c1d4bedaa7732c0ba416637b764e51871edda137173d5d438a->leave($__internal_ea22a0f9ca2d60c1d4bedaa7732c0ba416637b764e51871edda137173d5d438a_prof);

        
        $__internal_441ced982a0423222691b16dfe58eda5aa205ef03c490e54666a670563c324fb->leave($__internal_441ced982a0423222691b16dfe58eda5aa205ef03c490e54666a670563c324fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
