<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3f95cc52884f1e1fc3f59cf29d804ae00326e9c7855e29cd2cb9bf7f2b0bd4ed extends Twig_Template
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
        $__internal_27947a16293e88138ef88ad75c58d335a1c0c9cd3266b7307d91e9ab767bd77c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27947a16293e88138ef88ad75c58d335a1c0c9cd3266b7307d91e9ab767bd77c->enter($__internal_27947a16293e88138ef88ad75c58d335a1c0c9cd3266b7307d91e9ab767bd77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_77a18603838b83165c7efbf5ecf92ab578c2932fa635e369cf29fa0021c51486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a18603838b83165c7efbf5ecf92ab578c2932fa635e369cf29fa0021c51486->enter($__internal_77a18603838b83165c7efbf5ecf92ab578c2932fa635e369cf29fa0021c51486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_27947a16293e88138ef88ad75c58d335a1c0c9cd3266b7307d91e9ab767bd77c->leave($__internal_27947a16293e88138ef88ad75c58d335a1c0c9cd3266b7307d91e9ab767bd77c_prof);

        
        $__internal_77a18603838b83165c7efbf5ecf92ab578c2932fa635e369cf29fa0021c51486->leave($__internal_77a18603838b83165c7efbf5ecf92ab578c2932fa635e369cf29fa0021c51486_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
