<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_3f4c9cade32f53675f5d1507ee1007bd799aa5f57b44c2fc2f6931c09424bd7f extends Twig_Template
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
        $__internal_2544971311ffaf49f7169464b3778e8f1544a3a14b12757f2b467a0db0176180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2544971311ffaf49f7169464b3778e8f1544a3a14b12757f2b467a0db0176180->enter($__internal_2544971311ffaf49f7169464b3778e8f1544a3a14b12757f2b467a0db0176180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_7fb315989bbdf2f487f5b0fa462cb3327e4c1143e429f2fd5e3045dbf7ee59b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb315989bbdf2f487f5b0fa462cb3327e4c1143e429f2fd5e3045dbf7ee59b1->enter($__internal_7fb315989bbdf2f487f5b0fa462cb3327e4c1143e429f2fd5e3045dbf7ee59b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_2544971311ffaf49f7169464b3778e8f1544a3a14b12757f2b467a0db0176180->leave($__internal_2544971311ffaf49f7169464b3778e8f1544a3a14b12757f2b467a0db0176180_prof);

        
        $__internal_7fb315989bbdf2f487f5b0fa462cb3327e4c1143e429f2fd5e3045dbf7ee59b1->leave($__internal_7fb315989bbdf2f487f5b0fa462cb3327e4c1143e429f2fd5e3045dbf7ee59b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
