<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_740a1e675171eae31fdc33a6b2ec07b9a03970286eb59464e27fc1f696422796 extends Twig_Template
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
        $__internal_9eab3bbb674f25d8c8cf4e890858638bfc5494d665408dc8962f430c7fa9ab28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eab3bbb674f25d8c8cf4e890858638bfc5494d665408dc8962f430c7fa9ab28->enter($__internal_9eab3bbb674f25d8c8cf4e890858638bfc5494d665408dc8962f430c7fa9ab28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_79a542711fa99b150976f4e11ad38c2753a3b60c70a67cd1dfff2b93137485c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a542711fa99b150976f4e11ad38c2753a3b60c70a67cd1dfff2b93137485c7->enter($__internal_79a542711fa99b150976f4e11ad38c2753a3b60c70a67cd1dfff2b93137485c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_9eab3bbb674f25d8c8cf4e890858638bfc5494d665408dc8962f430c7fa9ab28->leave($__internal_9eab3bbb674f25d8c8cf4e890858638bfc5494d665408dc8962f430c7fa9ab28_prof);

        
        $__internal_79a542711fa99b150976f4e11ad38c2753a3b60c70a67cd1dfff2b93137485c7->leave($__internal_79a542711fa99b150976f4e11ad38c2753a3b60c70a67cd1dfff2b93137485c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
