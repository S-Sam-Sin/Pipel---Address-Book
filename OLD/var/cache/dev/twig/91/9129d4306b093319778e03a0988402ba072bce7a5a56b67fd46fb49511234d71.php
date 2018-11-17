<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_4474f74cada0a5e75a6dd5b3cdda12cf897c90f75a32f1281201f0c9fa22ecb9 extends Twig_Template
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
        $__internal_0d631d625e1c669e9940cc89a401cdbc61e8f007fdd8e1ddc40e752906f7478a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d631d625e1c669e9940cc89a401cdbc61e8f007fdd8e1ddc40e752906f7478a->enter($__internal_0d631d625e1c669e9940cc89a401cdbc61e8f007fdd8e1ddc40e752906f7478a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_f7be7056269f7e562bf5283724dd2c0b96eda87b2495e46e30ba5148c6fc5a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7be7056269f7e562bf5283724dd2c0b96eda87b2495e46e30ba5148c6fc5a10->enter($__internal_f7be7056269f7e562bf5283724dd2c0b96eda87b2495e46e30ba5148c6fc5a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_0d631d625e1c669e9940cc89a401cdbc61e8f007fdd8e1ddc40e752906f7478a->leave($__internal_0d631d625e1c669e9940cc89a401cdbc61e8f007fdd8e1ddc40e752906f7478a_prof);

        
        $__internal_f7be7056269f7e562bf5283724dd2c0b96eda87b2495e46e30ba5148c6fc5a10->leave($__internal_f7be7056269f7e562bf5283724dd2c0b96eda87b2495e46e30ba5148c6fc5a10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
