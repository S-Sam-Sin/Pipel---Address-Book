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
        $__internal_c4b320197c3300638968c7751e66172cfe912473e5f7fa9754331c807cabfad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4b320197c3300638968c7751e66172cfe912473e5f7fa9754331c807cabfad0->enter($__internal_c4b320197c3300638968c7751e66172cfe912473e5f7fa9754331c807cabfad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contacts.html.twig"));

        $__internal_5370f4791d0f463b7818084e93fd3f85075ea4ea9951c0c2e0ead8f4feee40fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5370f4791d0f463b7818084e93fd3f85075ea4ea9951c0c2e0ead8f4feee40fe->enter($__internal_5370f4791d0f463b7818084e93fd3f85075ea4ea9951c0c2e0ead8f4feee40fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contacts.html.twig"));

        // line 1
        echo "<div class=\"col-md-4\" style=\"height:85vh; overflow-y: scroll;\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"input-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Search for...\">
                <span class=\"input-group-btn\">
                </span>
            </div>
        </div>
    </div>
    <div class=\"panel panel-danger\">
        <div class=\"panel-heading\">Me</div>
        <table class=\"table\">
            <thead>
            <tr>
                <th class=\"text-center\"></th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
            </thead>
            <tbody>
            <tr id=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["me"] ?? $this->getContext($context, "me")), "id", array()), "html", null, true);
        echo "\">
                <td class=\"col-md-2\"> <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("avatars/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["me"] ?? $this->getContext($context, "me")), "Avatar", array()), "html", null, true);
        echo " \" class=\"img-circle img-responsive\"></td>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["me"] ?? $this->getContext($context, "me")), "FirstName", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["me"] ?? $this->getContext($context, "me")), "LastName", array()), "html", null, true);
        echo " </td>
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
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contacts"] ?? $this->getContext($context, "contacts")));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 42
            echo "            <tr id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "\">
                <td class=\"col-md-2\"> <img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("avatars/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "Avatar", array()), "html", null, true);
            echo "\" class=\"img-circle img-responsive\"></td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "FirstName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "LastName", array()), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </tbody>
        </table>
    </div>
</div>
</div>";
        
        $__internal_c4b320197c3300638968c7751e66172cfe912473e5f7fa9754331c807cabfad0->leave($__internal_c4b320197c3300638968c7751e66172cfe912473e5f7fa9754331c807cabfad0_prof);

        
        $__internal_5370f4791d0f463b7818084e93fd3f85075ea4ea9951c0c2e0ead8f4feee40fe->leave($__internal_5370f4791d0f463b7818084e93fd3f85075ea4ea9951c0c2e0ead8f4feee40fe_prof);

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
        return array (  107 => 48,  98 => 45,  94 => 44,  89 => 43,  84 => 42,  80 => 41,  61 => 25,  57 => 24,  52 => 23,  48 => 22,  25 => 1,);
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
            </div>
        </div>
    </div>
    <div class=\"panel panel-danger\">
        <div class=\"panel-heading\">Me</div>
        <table class=\"table\">
            <thead>
            <tr>
                <th class=\"text-center\"></th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
            </thead>
            <tbody>
            <tr id=\"{{ me.id }}\">
                <td class=\"col-md-2\"> <img src=\"{{ asset('avatars/') }}{{ me.Avatar }} \" class=\"img-circle img-responsive\"></td>
                <td>{{ me.FirstName }}</td>
                <td>{{ me.LastName }} </td>
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
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
            </thead>
            <tbody>
            {% for contact in contacts %}
            <tr id=\"{{ contact.id }}\">
                <td class=\"col-md-2\"> <img src=\"{{ asset('avatars/') }}{{ contact.Avatar }}\" class=\"img-circle img-responsive\"></td>
                <td>{{ contact.FirstName }}</td>
                <td>{{ contact.LastName }}</td>
            </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
</div>
</div>", "default/contacts.html.twig", "/home/grimlorn/Citadel/Pipel---Address-Book/app/Resources/views/default/contacts.html.twig");
    }
}
