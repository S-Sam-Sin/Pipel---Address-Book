<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d53658b15e56fd14b303884d834c3407f4d01ff2e637535840b08a37fb3d1798 extends Twig_Template
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
        $__internal_f40b459ec09cc43197268ceba5ba5c06ac929d6dbe4740811e3b0a2987d503a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f40b459ec09cc43197268ceba5ba5c06ac929d6dbe4740811e3b0a2987d503a1->enter($__internal_f40b459ec09cc43197268ceba5ba5c06ac929d6dbe4740811e3b0a2987d503a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_d039b3886e3d11c751461c18ba8962ad23a9725419c64ef5f88ddbbe790012d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d039b3886e3d11c751461c18ba8962ad23a9725419c64ef5f88ddbbe790012d5->enter($__internal_d039b3886e3d11c751461c18ba8962ad23a9725419c64ef5f88ddbbe790012d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_f40b459ec09cc43197268ceba5ba5c06ac929d6dbe4740811e3b0a2987d503a1->leave($__internal_f40b459ec09cc43197268ceba5ba5c06ac929d6dbe4740811e3b0a2987d503a1_prof);

        
        $__internal_d039b3886e3d11c751461c18ba8962ad23a9725419c64ef5f88ddbbe790012d5->leave($__internal_d039b3886e3d11c751461c18ba8962ad23a9725419c64ef5f88ddbbe790012d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/grimlorn/Citadel/Pipel---Address-Book/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
