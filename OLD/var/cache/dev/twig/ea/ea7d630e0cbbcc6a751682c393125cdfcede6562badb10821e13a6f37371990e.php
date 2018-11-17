<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_cdbb904837e962a19dfec90805919a0d29ba78968ddf9c258e4cd106724570ae extends Twig_Template
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
        $__internal_f8443c96eae4365a97b2780e8f795098bcc1cb2874fa85426a4d9bd020ed5954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8443c96eae4365a97b2780e8f795098bcc1cb2874fa85426a4d9bd020ed5954->enter($__internal_f8443c96eae4365a97b2780e8f795098bcc1cb2874fa85426a4d9bd020ed5954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_9893cedc4be3b089d978d041d299a99d06ee059a40d8c137501b6afb9195dbff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9893cedc4be3b089d978d041d299a99d06ee059a40d8c137501b6afb9195dbff->enter($__internal_9893cedc4be3b089d978d041d299a99d06ee059a40d8c137501b6afb9195dbff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_f8443c96eae4365a97b2780e8f795098bcc1cb2874fa85426a4d9bd020ed5954->leave($__internal_f8443c96eae4365a97b2780e8f795098bcc1cb2874fa85426a4d9bd020ed5954_prof);

        
        $__internal_9893cedc4be3b089d978d041d299a99d06ee059a40d8c137501b6afb9195dbff->leave($__internal_9893cedc4be3b089d978d041d299a99d06ee059a40d8c137501b6afb9195dbff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
