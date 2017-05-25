<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f5a0aa3844d9600030e9ac735f4890a4de59c0b76ee05fadb7af494b20f0708d extends Twig_Template
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
        $__internal_833e4c632cf0d987ce707f10b7d8bcb8ec495f04f07252dcc1b672bf146f76f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_833e4c632cf0d987ce707f10b7d8bcb8ec495f04f07252dcc1b672bf146f76f5->enter($__internal_833e4c632cf0d987ce707f10b7d8bcb8ec495f04f07252dcc1b672bf146f76f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e254353f7e31290bcdd4bd3ca4a753486dee236ac7c268b88da7088dedcb9c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e254353f7e31290bcdd4bd3ca4a753486dee236ac7c268b88da7088dedcb9c9e->enter($__internal_e254353f7e31290bcdd4bd3ca4a753486dee236ac7c268b88da7088dedcb9c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_833e4c632cf0d987ce707f10b7d8bcb8ec495f04f07252dcc1b672bf146f76f5->leave($__internal_833e4c632cf0d987ce707f10b7d8bcb8ec495f04f07252dcc1b672bf146f76f5_prof);

        
        $__internal_e254353f7e31290bcdd4bd3ca4a753486dee236ac7c268b88da7088dedcb9c9e->leave($__internal_e254353f7e31290bcdd4bd3ca4a753486dee236ac7c268b88da7088dedcb9c9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
