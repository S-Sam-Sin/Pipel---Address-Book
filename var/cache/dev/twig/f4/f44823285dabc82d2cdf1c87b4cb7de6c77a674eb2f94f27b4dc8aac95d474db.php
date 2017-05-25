<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_fdef7b3cbc51627ddf34b13ab6fe79909f3fb2aa9aacdf2b43b9e2fe712f399f extends Twig_Template
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
        $__internal_3f5155da867f01e0ac73b44b634218623397a3f7af3bba1a0b5c814e9d1727c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f5155da867f01e0ac73b44b634218623397a3f7af3bba1a0b5c814e9d1727c7->enter($__internal_3f5155da867f01e0ac73b44b634218623397a3f7af3bba1a0b5c814e9d1727c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_6d8cf7bf64f4e4f197a4f5318b0db0579fe6537084ca7bb53bed31e251a0204a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d8cf7bf64f4e4f197a4f5318b0db0579fe6537084ca7bb53bed31e251a0204a->enter($__internal_6d8cf7bf64f4e4f197a4f5318b0db0579fe6537084ca7bb53bed31e251a0204a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_3f5155da867f01e0ac73b44b634218623397a3f7af3bba1a0b5c814e9d1727c7->leave($__internal_3f5155da867f01e0ac73b44b634218623397a3f7af3bba1a0b5c814e9d1727c7_prof);

        
        $__internal_6d8cf7bf64f4e4f197a4f5318b0db0579fe6537084ca7bb53bed31e251a0204a->leave($__internal_6d8cf7bf64f4e4f197a4f5318b0db0579fe6537084ca7bb53bed31e251a0204a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
