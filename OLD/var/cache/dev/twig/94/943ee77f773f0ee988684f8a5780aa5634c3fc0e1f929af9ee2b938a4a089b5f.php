<?php

/* default/groups.html.twig */
class __TwigTemplate_2ba7a64dc2483c7f9b56979b42060db0f8bf00c1e3bdbda9738999b4f77e26a1 extends Twig_Template
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
        $__internal_034692c4e9579c53a477732b3be4e22fc0026a61121b2182e07263a51403e7d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_034692c4e9579c53a477732b3be4e22fc0026a61121b2182e07263a51403e7d8->enter($__internal_034692c4e9579c53a477732b3be4e22fc0026a61121b2182e07263a51403e7d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/groups.html.twig"));

        $__internal_185d228377c0da037638c3f67a43977d0fcaaec4a70830d6ff91ea962863a87b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185d228377c0da037638c3f67a43977d0fcaaec4a70830d6ff91ea962863a87b->enter($__internal_185d228377c0da037638c3f67a43977d0fcaaec4a70830d6ff91ea962863a87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/groups.html.twig"));

        // line 1
        echo "<div class=\"col-md-2\" style=\"height:85vh; overflow-y: scroll;\">
    <div class=\"list-group\">
        <a href=\"#\" class=\"list-group-item active\">Everybody <span class=\"label label-primary pull-right\">14</span></a>
        <a href=\"#\" class=\"list-group-item\">Not Grouped <span class=\"label label-primary pull-right\">14</span></a>
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 6
            echo "            <a href=\"#\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "idGroups", array()), "html", null, true);
            echo "\" class=\"list-group-item\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "GroupName", array()), "html", null, true);
            echo " <span class=\"label label-primary pull-right\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["group"], 0, array()), "count", array()), "html", null, true);
            echo "</span></a>
            ";
            // line 7
            if (($this->getAttribute($context["group"], "idGroups", array()) == 1)) {
                // line 8
                echo "                <hr>
            ";
            }
            // line 10
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </div>
</div>";
        
        $__internal_034692c4e9579c53a477732b3be4e22fc0026a61121b2182e07263a51403e7d8->leave($__internal_034692c4e9579c53a477732b3be4e22fc0026a61121b2182e07263a51403e7d8_prof);

        
        $__internal_185d228377c0da037638c3f67a43977d0fcaaec4a70830d6ff91ea962863a87b->leave($__internal_185d228377c0da037638c3f67a43977d0fcaaec4a70830d6ff91ea962863a87b_prof);

    }

    public function getTemplateName()
    {
        return "default/groups.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 11,  50 => 10,  46 => 8,  44 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-2\" style=\"height:85vh; overflow-y: scroll;\">
    <div class=\"list-group\">
        <a href=\"#\" class=\"list-group-item active\">Everybody <span class=\"label label-primary pull-right\">14</span></a>
        <a href=\"#\" class=\"list-group-item\">Not Grouped <span class=\"label label-primary pull-right\">14</span></a>
        {%  for group in groups %}
            <a href=\"#\" id=\"{{ group.idGroups }}\" class=\"list-group-item\">{{ group.GroupName }} <span class=\"label label-primary pull-right\">{{ group.0.count }}</span></a>
            {% if group.idGroups == 1 %}
                <hr>
            {% endif %}
        {% endfor %}
    </div>
</div>", "default/groups.html.twig", "/home/grimlorn/Citadel/Pipel---Address-Book/app/Resources/views/default/groups.html.twig");
    }
}
