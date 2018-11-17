<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_8bbc625140afc72c8b19f38f0f24da0557ba3863bbb77bb63a619b97bc881b85 extends Twig_Template
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
        $__internal_c0586f44c2db1063460924b4a1bfe1b0621c7f6753b63557a9d36a3647a772aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0586f44c2db1063460924b4a1bfe1b0621c7f6753b63557a9d36a3647a772aa->enter($__internal_c0586f44c2db1063460924b4a1bfe1b0621c7f6753b63557a9d36a3647a772aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_c9e6ecf3d28feccf2053d0254a85f4bb52968c7a861dc730513ee2df0123eb07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e6ecf3d28feccf2053d0254a85f4bb52968c7a861dc730513ee2df0123eb07->enter($__internal_c9e6ecf3d28feccf2053d0254a85f4bb52968c7a861dc730513ee2df0123eb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c0586f44c2db1063460924b4a1bfe1b0621c7f6753b63557a9d36a3647a772aa->leave($__internal_c0586f44c2db1063460924b4a1bfe1b0621c7f6753b63557a9d36a3647a772aa_prof);

        
        $__internal_c9e6ecf3d28feccf2053d0254a85f4bb52968c7a861dc730513ee2df0123eb07->leave($__internal_c9e6ecf3d28feccf2053d0254a85f4bb52968c7a861dc730513ee2df0123eb07_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
