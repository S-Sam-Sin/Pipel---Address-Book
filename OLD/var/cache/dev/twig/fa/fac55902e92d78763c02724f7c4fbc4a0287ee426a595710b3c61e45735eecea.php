<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_3411c5459fefde02e42888849cf135634fc31cb04d7e7c42d1794b2b3424f2ec extends Twig_Template
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
        $__internal_42b6f20d09caec9333fc82626558531957cc8dbf68fba970a3451e1b773c15f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42b6f20d09caec9333fc82626558531957cc8dbf68fba970a3451e1b773c15f6->enter($__internal_42b6f20d09caec9333fc82626558531957cc8dbf68fba970a3451e1b773c15f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_e2edc6d70e5e2a0c830b0e6e69de74142a1ccd5489094d5b00855900d7da2b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2edc6d70e5e2a0c830b0e6e69de74142a1ccd5489094d5b00855900d7da2b92->enter($__internal_e2edc6d70e5e2a0c830b0e6e69de74142a1ccd5489094d5b00855900d7da2b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_42b6f20d09caec9333fc82626558531957cc8dbf68fba970a3451e1b773c15f6->leave($__internal_42b6f20d09caec9333fc82626558531957cc8dbf68fba970a3451e1b773c15f6_prof);

        
        $__internal_e2edc6d70e5e2a0c830b0e6e69de74142a1ccd5489094d5b00855900d7da2b92->leave($__internal_e2edc6d70e5e2a0c830b0e6e69de74142a1ccd5489094d5b00855900d7da2b92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
