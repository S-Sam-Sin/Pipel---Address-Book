<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ff91a568cd45297ad6ddeca97ebca6d3330951cbc4769f18119be76f4df36f5c extends Twig_Template
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
        $__internal_eaf77f557ab6cf83e4edffc67616d718da31dee27c91c818fa1a89f08c260d27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaf77f557ab6cf83e4edffc67616d718da31dee27c91c818fa1a89f08c260d27->enter($__internal_eaf77f557ab6cf83e4edffc67616d718da31dee27c91c818fa1a89f08c260d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_3bd12d475fe680530cf3dc957afbd658ea774b07cd0514b5635018c64032bd43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd12d475fe680530cf3dc957afbd658ea774b07cd0514b5635018c64032bd43->enter($__internal_3bd12d475fe680530cf3dc957afbd658ea774b07cd0514b5635018c64032bd43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_eaf77f557ab6cf83e4edffc67616d718da31dee27c91c818fa1a89f08c260d27->leave($__internal_eaf77f557ab6cf83e4edffc67616d718da31dee27c91c818fa1a89f08c260d27_prof);

        
        $__internal_3bd12d475fe680530cf3dc957afbd658ea774b07cd0514b5635018c64032bd43->leave($__internal_3bd12d475fe680530cf3dc957afbd658ea774b07cd0514b5635018c64032bd43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
