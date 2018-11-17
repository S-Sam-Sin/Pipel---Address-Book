<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_76bf0ac26a99047ff29b3263e88c04869e0cc34ac959f274dce6eaae3620a324 extends Twig_Template
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
        $__internal_e266d27e428faa73bea35ee13fdc85390433ed6a8c464884d1708b219dcac0e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e266d27e428faa73bea35ee13fdc85390433ed6a8c464884d1708b219dcac0e1->enter($__internal_e266d27e428faa73bea35ee13fdc85390433ed6a8c464884d1708b219dcac0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_2c1cf6a0d5c3590989c1c37b43fccedc268f26a656c1626882f670448c1b7855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1cf6a0d5c3590989c1c37b43fccedc268f26a656c1626882f670448c1b7855->enter($__internal_2c1cf6a0d5c3590989c1c37b43fccedc268f26a656c1626882f670448c1b7855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e266d27e428faa73bea35ee13fdc85390433ed6a8c464884d1708b219dcac0e1->leave($__internal_e266d27e428faa73bea35ee13fdc85390433ed6a8c464884d1708b219dcac0e1_prof);

        
        $__internal_2c1cf6a0d5c3590989c1c37b43fccedc268f26a656c1626882f670448c1b7855->leave($__internal_2c1cf6a0d5c3590989c1c37b43fccedc268f26a656c1626882f670448c1b7855_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
