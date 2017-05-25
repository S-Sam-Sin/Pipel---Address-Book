<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b899594e1a4af6ec732f205dc84f98eb52b7baa8fd2d88f5bc1115b4936d23ad extends Twig_Template
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
        $__internal_2a37ed3744fc0041b555eaa9c24cd9a8f44b48deda61736e817e08322d317a62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a37ed3744fc0041b555eaa9c24cd9a8f44b48deda61736e817e08322d317a62->enter($__internal_2a37ed3744fc0041b555eaa9c24cd9a8f44b48deda61736e817e08322d317a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_e1a2378981df67b7f507dd97e9074501a4ff80e31d35ac2fae8cc82dbb191a1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a2378981df67b7f507dd97e9074501a4ff80e31d35ac2fae8cc82dbb191a1c->enter($__internal_e1a2378981df67b7f507dd97e9074501a4ff80e31d35ac2fae8cc82dbb191a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2a37ed3744fc0041b555eaa9c24cd9a8f44b48deda61736e817e08322d317a62->leave($__internal_2a37ed3744fc0041b555eaa9c24cd9a8f44b48deda61736e817e08322d317a62_prof);

        
        $__internal_e1a2378981df67b7f507dd97e9074501a4ff80e31d35ac2fae8cc82dbb191a1c->leave($__internal_e1a2378981df67b7f507dd97e9074501a4ff80e31d35ac2fae8cc82dbb191a1c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
