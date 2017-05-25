<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9da4296c33e4a2507a8266e721232d10f3a1b58beaa68b6875203d4e982a6302 extends Twig_Template
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
        $__internal_9af5e5b4251df3d51b25986bf7c63554358ae613efca3dcb683505cb5e055948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9af5e5b4251df3d51b25986bf7c63554358ae613efca3dcb683505cb5e055948->enter($__internal_9af5e5b4251df3d51b25986bf7c63554358ae613efca3dcb683505cb5e055948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_6c597a7a28e176c1c9ca1b683e0792cae18b982d239a4912410fa0246c099d42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c597a7a28e176c1c9ca1b683e0792cae18b982d239a4912410fa0246c099d42->enter($__internal_6c597a7a28e176c1c9ca1b683e0792cae18b982d239a4912410fa0246c099d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9af5e5b4251df3d51b25986bf7c63554358ae613efca3dcb683505cb5e055948->leave($__internal_9af5e5b4251df3d51b25986bf7c63554358ae613efca3dcb683505cb5e055948_prof);

        
        $__internal_6c597a7a28e176c1c9ca1b683e0792cae18b982d239a4912410fa0246c099d42->leave($__internal_6c597a7a28e176c1c9ca1b683e0792cae18b982d239a4912410fa0246c099d42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
