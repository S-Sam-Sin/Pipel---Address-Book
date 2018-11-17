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
        $__internal_501a0fc6e2106ce4ab15d74fc6193fe664f807cd587d7d016b62855fe26b8d49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_501a0fc6e2106ce4ab15d74fc6193fe664f807cd587d7d016b62855fe26b8d49->enter($__internal_501a0fc6e2106ce4ab15d74fc6193fe664f807cd587d7d016b62855fe26b8d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contacts.html.twig"));

        $__internal_f929c11baa175354e05743dca25b0b51293a493c6fef2d53274579a2b33e7500 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f929c11baa175354e05743dca25b0b51293a493c6fef2d53274579a2b33e7500->enter($__internal_f929c11baa175354e05743dca25b0b51293a493c6fef2d53274579a2b33e7500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/contacts.html.twig"));

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
        <div class=\"panel-heading\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x\"></i>
                <i class=\"fa fa-flag fa-stack-1x fa-inverse\"></i>
            </span> Me
        </div>
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
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["me"] ?? $this->getContext($context, "me")), "id", array()), "html", null, true);
        echo "\">
                <td class=\"col-md-2\"> <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("avatars/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["me"] ?? $this->getContext($context, "me")), "Avatar", array()), "html", null, true);
        echo " \" class=\"img-circle img-responsive\"></td>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["me"] ?? $this->getContext($context, "me")), "FirstName", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 30
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
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["contacts"] ?? $this->getContext($context, "contacts")));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 47
            echo "            <tr id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "\">
                <td class=\"col-md-2\"> <img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("avatars/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "Avatar", array()), "html", null, true);
            echo "\" class=\"img-circle img-responsive\"></td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "FirstName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "LastName", array()), "html", null, true);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            </tbody>
        </table>
    </div>
</div>";
        
        $__internal_501a0fc6e2106ce4ab15d74fc6193fe664f807cd587d7d016b62855fe26b8d49->leave($__internal_501a0fc6e2106ce4ab15d74fc6193fe664f807cd587d7d016b62855fe26b8d49_prof);

        
        $__internal_f929c11baa175354e05743dca25b0b51293a493c6fef2d53274579a2b33e7500->leave($__internal_f929c11baa175354e05743dca25b0b51293a493c6fef2d53274579a2b33e7500_prof);

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
        return array (  112 => 53,  103 => 50,  99 => 49,  94 => 48,  89 => 47,  85 => 46,  66 => 30,  62 => 29,  57 => 28,  53 => 27,  25 => 1,);
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
        <div class=\"panel-heading\">
            <span class=\"fa-stack fa-lg\">
                <i class=\"fa fa-circle fa-stack-2x\"></i>
                <i class=\"fa fa-flag fa-stack-1x fa-inverse\"></i>
            </span> Me
        </div>
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
</div>", "default/contacts.html.twig", "/home/grimlorn/Citadel/Pipel---Address-Book/app/Resources/views/default/contacts.html.twig");
    }
}
