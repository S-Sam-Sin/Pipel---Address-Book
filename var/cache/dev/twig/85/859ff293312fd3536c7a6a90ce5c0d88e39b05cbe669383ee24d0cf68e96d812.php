<?php

/* default/contacts.html.twig */
class __TwigTemplate_03b6038bb6c073eca3012009ea095300bf200ebc21ba962c43906644233bd959 extends Twig_Template
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
        $__internal_d45ca2d00ae80ae3c6e65da35affe792e682e8e407f19881fe24f46853e95ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d45ca2d00ae80ae3c6e65da35affe792e682e8e407f19881fe24f46853e95ec1->enter($__internal_d45ca2d00ae80ae3c6e65da35affe792e682e8e407f19881fe24f46853e95ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contacts.html.twig"));

        $__internal_48c82a7ee8d861c92cf91fcd8c41641366b4b5b6ae7b3ecd1bd4a6225ca44119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c82a7ee8d861c92cf91fcd8c41641366b4b5b6ae7b3ecd1bd4a6225ca44119->enter($__internal_48c82a7ee8d861c92cf91fcd8c41641366b4b5b6ae7b3ecd1bd4a6225ca44119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contacts.html.twig"));

        // line 1
        echo "<div class=\"col-md-4\" style=\"height:85vh; overflow-y: scroll;\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"input-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
                <span class=\"input-group-btn\">
                </span>
            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
    <div class=\"panel panel-danger\">
        <div class=\"panel-heading\">Me</div>
        <table class=\"table\">
            <thead>
            <tr>
                <th class=\"text-center\"></th>
                <th>Name</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class=\"col-md-2\"> <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("avatars/me.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-responsive\"></td>
                <td>Cameron Johnsen</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class=\"panel panel-warning\">
        <div class=\"panel-heading\">Everybody</div>
        <table class=\"table\">
            <thead>
            <tr>
                <th class=\"text-center\"></th>
                <th>Name</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class=\"col-md-2\"> <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("avatars/1.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-responsive\"></td>
                <td>Michele W. Carpenter</td>
            </tr>
            <tr>
                <td class=\"col-md-2\"> <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("avatars/2.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-responsive\"></td>
                <td>Lynn R. Mason</td>
            </tr>
            <tr>
                <td class=\"col-md-2\"> <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("avatars/3.jpg"), "html", null, true);
        echo "\" class=\"img-circle img-responsive\"></td>
                <td>Kennith B. Bogart</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</div>";
        
        $__internal_d45ca2d00ae80ae3c6e65da35affe792e682e8e407f19881fe24f46853e95ec1->leave($__internal_d45ca2d00ae80ae3c6e65da35affe792e682e8e407f19881fe24f46853e95ec1_prof);

        
        $__internal_48c82a7ee8d861c92cf91fcd8c41641366b4b5b6ae7b3ecd1bd4a6225ca44119->leave($__internal_48c82a7ee8d861c92cf91fcd8c41641366b4b5b6ae7b3ecd1bd4a6225ca44119_prof);

    }

    public function getTemplateName()
    {
        return "default/contacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 47,  75 => 43,  68 => 39,  48 => 22,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-4\" style=\"height:85vh; overflow-y: scroll;\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"input-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
                <span class=\"input-group-btn\">
                </span>
            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
    <div class=\"panel panel-danger\">
        <div class=\"panel-heading\">Me</div>
        <table class=\"table\">
            <thead>
            <tr>
                <th class=\"text-center\"></th>
                <th>Name</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class=\"col-md-2\"> <img src=\"{{ asset('avatars/me.jpg') }}\" class=\"img-circle img-responsive\"></td>
                <td>Cameron Johnsen</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class=\"panel panel-warning\">
        <div class=\"panel-heading\">Everybody</div>
        <table class=\"table\">
            <thead>
            <tr>
                <th class=\"text-center\"></th>
                <th>Name</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class=\"col-md-2\"> <img src=\"{{ asset('avatars/1.jpg') }}\" class=\"img-circle img-responsive\"></td>
                <td>Michele W. Carpenter</td>
            </tr>
            <tr>
                <td class=\"col-md-2\"> <img src=\"{{ asset('avatars/2.jpg') }}\" class=\"img-circle img-responsive\"></td>
                <td>Lynn R. Mason</td>
            </tr>
            <tr>
                <td class=\"col-md-2\"> <img src=\"{{ asset('avatars/3.jpg') }}\" class=\"img-circle img-responsive\"></td>
                <td>Kennith B. Bogart</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</div>", "default/contacts.html.twig", "/home/grimlorn/Citadel/Contact-app-Symfony/app/Resources/views/default/contacts.html.twig");
    }
}
