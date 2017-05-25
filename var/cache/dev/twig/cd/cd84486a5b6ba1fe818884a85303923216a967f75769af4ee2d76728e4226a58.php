<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_831d6045f5f7e57b672f77b45a30282bdbdc2f4d734edd3fbfaeb309409bb625 extends Twig_Template
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
        $__internal_84b97ab7eac03a50d3b89eb7e0358cc37d520ee06eb7520bd24415ebc81286ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84b97ab7eac03a50d3b89eb7e0358cc37d520ee06eb7520bd24415ebc81286ad->enter($__internal_84b97ab7eac03a50d3b89eb7e0358cc37d520ee06eb7520bd24415ebc81286ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_83969ed2ae710d51252cfd2b4ee76f6add090c8b5ffd68dcde47bc1c3a94df60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83969ed2ae710d51252cfd2b4ee76f6add090c8b5ffd68dcde47bc1c3a94df60->enter($__internal_83969ed2ae710d51252cfd2b4ee76f6add090c8b5ffd68dcde47bc1c3a94df60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_84b97ab7eac03a50d3b89eb7e0358cc37d520ee06eb7520bd24415ebc81286ad->leave($__internal_84b97ab7eac03a50d3b89eb7e0358cc37d520ee06eb7520bd24415ebc81286ad_prof);

        
        $__internal_83969ed2ae710d51252cfd2b4ee76f6add090c8b5ffd68dcde47bc1c3a94df60->leave($__internal_83969ed2ae710d51252cfd2b4ee76f6add090c8b5ffd68dcde47bc1c3a94df60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
