<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_ec14cc3b2c8168b74a9a870dce4471c37542a8af95d1c3deda5e8bf67f7d3c6d extends Twig_Template
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
        $__internal_639bb07aba1b2e15b772883544f4905c0e85224d644f0a46d4e38e0360acc43f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_639bb07aba1b2e15b772883544f4905c0e85224d644f0a46d4e38e0360acc43f->enter($__internal_639bb07aba1b2e15b772883544f4905c0e85224d644f0a46d4e38e0360acc43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_56a97097282cf2e066c50dd43e32926dc4fa0a97097e5581c1d7a60a7fffe770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a97097282cf2e066c50dd43e32926dc4fa0a97097e5581c1d7a60a7fffe770->enter($__internal_56a97097282cf2e066c50dd43e32926dc4fa0a97097e5581c1d7a60a7fffe770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_639bb07aba1b2e15b772883544f4905c0e85224d644f0a46d4e38e0360acc43f->leave($__internal_639bb07aba1b2e15b772883544f4905c0e85224d644f0a46d4e38e0360acc43f_prof);

        
        $__internal_56a97097282cf2e066c50dd43e32926dc4fa0a97097e5581c1d7a60a7fffe770->leave($__internal_56a97097282cf2e066c50dd43e32926dc4fa0a97097e5581c1d7a60a7fffe770_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
