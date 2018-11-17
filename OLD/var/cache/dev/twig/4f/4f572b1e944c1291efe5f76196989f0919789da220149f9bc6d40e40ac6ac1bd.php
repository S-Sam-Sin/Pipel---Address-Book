<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_a35857ee1311a28a3bc68d6cb688f4573a483378ff1d1ae838e53d4742bfcaab extends Twig_Template
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
        $__internal_69bd5d9d7b58da89e7326ee6d713f2fd9313fe63bc6ec0f1c92d1ccf7f43454f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69bd5d9d7b58da89e7326ee6d713f2fd9313fe63bc6ec0f1c92d1ccf7f43454f->enter($__internal_69bd5d9d7b58da89e7326ee6d713f2fd9313fe63bc6ec0f1c92d1ccf7f43454f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_d3439f715ddab3d154811f19019edbe44458f295f3eff0ed62ad2928e7829031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3439f715ddab3d154811f19019edbe44458f295f3eff0ed62ad2928e7829031->enter($__internal_d3439f715ddab3d154811f19019edbe44458f295f3eff0ed62ad2928e7829031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_69bd5d9d7b58da89e7326ee6d713f2fd9313fe63bc6ec0f1c92d1ccf7f43454f->leave($__internal_69bd5d9d7b58da89e7326ee6d713f2fd9313fe63bc6ec0f1c92d1ccf7f43454f_prof);

        
        $__internal_d3439f715ddab3d154811f19019edbe44458f295f3eff0ed62ad2928e7829031->leave($__internal_d3439f715ddab3d154811f19019edbe44458f295f3eff0ed62ad2928e7829031_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
