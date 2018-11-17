<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_b62c5a534f913c2e7bdf389d8c2467f29272453f660d2c60a71d102a1f9c547b extends Twig_Template
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
        $__internal_430c070f2d142eda0a6adce9c20fe90667815b619c0c05efbeae6ef05a9b9bfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_430c070f2d142eda0a6adce9c20fe90667815b619c0c05efbeae6ef05a9b9bfe->enter($__internal_430c070f2d142eda0a6adce9c20fe90667815b619c0c05efbeae6ef05a9b9bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_39811760d798fdaedee28827b509cc3a182b74e07e901dca4cb6297a5a47ff5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39811760d798fdaedee28827b509cc3a182b74e07e901dca4cb6297a5a47ff5b->enter($__internal_39811760d798fdaedee28827b509cc3a182b74e07e901dca4cb6297a5a47ff5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_430c070f2d142eda0a6adce9c20fe90667815b619c0c05efbeae6ef05a9b9bfe->leave($__internal_430c070f2d142eda0a6adce9c20fe90667815b619c0c05efbeae6ef05a9b9bfe_prof);

        
        $__internal_39811760d798fdaedee28827b509cc3a182b74e07e901dca4cb6297a5a47ff5b->leave($__internal_39811760d798fdaedee28827b509cc3a182b74e07e901dca4cb6297a5a47ff5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
