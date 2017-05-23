<?php

/* base.html.twig */
class __TwigTemplate_f03a4114f3bbc06a5a70f78f5c825420debb072cd257afd9f5197056656666db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e840285fd4e15393f0d73153f0f7997a67e584d71169fb3ff45811e3992b5c6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e840285fd4e15393f0d73153f0f7997a67e584d71169fb3ff45811e3992b5c6b->enter($__internal_e840285fd4e15393f0d73153f0f7997a67e584d71169fb3ff45811e3992b5c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_54bc87f166d011332a866dd995990ef6588c56afcb7cb53da4c0eb294634c16c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54bc87f166d011332a866dd995990ef6588c56afcb7cb53da4c0eb294634c16c->enter($__internal_54bc87f166d011332a866dd995990ef6588c56afcb7cb53da4c0eb294634c16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/apple-icon.png"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" />
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/material-kit.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
        ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "    </head>
    <body style=\"background:#FFFFFF;overflow:hidden; \">
    <nav class=\"navbar navbar-danger\" role=\"navigation\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/pipel-logo.png"), "html", null, true);
        echo "\"> </a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <button class=\"btn btn-warning btn-fab btn-fab-mini btn-round\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i><div class=\"ripple-container\"></div></button>
                    </li>
                    <li>
                        <button class=\"btn btn-warning btn-fab btn-fab-mini btn-round\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i><div class=\"ripple-container\"></div></button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class=\"wrapper main\">
        ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "    </div>
        ";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/material.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nouislider.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/material-kit.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script>
            \$( document ).ready(function() {
                \$(\"#group-div\").load(\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groups");
        echo "\");
                \$(\"#contact-div\").load(\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacts");
        echo "\");
                \$(\"#person-div\").load(\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person");
        echo "\");
            });
        </script>
        ";
        // line 62
        echo "            ";
        // line 63
        echo "                ";
        // line 64
        echo "                ";
        // line 65
        echo "                ";
        // line 66
        echo "
                ";
        // line 68
        echo "                    ";
        // line 69
        echo "
                    ";
        // line 71
        echo "                ";
        // line 72
        echo "            ";
        // line 73
        echo "        ";
        // line 74
        echo "    </body>
</html>
";
        
        $__internal_e840285fd4e15393f0d73153f0f7997a67e584d71169fb3ff45811e3992b5c6b->leave($__internal_e840285fd4e15393f0d73153f0f7997a67e584d71169fb3ff45811e3992b5c6b_prof);

        
        $__internal_54bc87f166d011332a866dd995990ef6588c56afcb7cb53da4c0eb294634c16c->leave($__internal_54bc87f166d011332a866dd995990ef6588c56afcb7cb53da4c0eb294634c16c_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2fe1608431db36f30b50bebed343d2197f47ad4fce7a3cce524d25298659a1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2fe1608431db36f30b50bebed343d2197f47ad4fce7a3cce524d25298659a1e->enter($__internal_a2fe1608431db36f30b50bebed343d2197f47ad4fce7a3cce524d25298659a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cb038f15f9673358a6d04a7e17d252f420dcb5378d74f347c41f9fd47f3cde6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb038f15f9673358a6d04a7e17d252f420dcb5378d74f347c41f9fd47f3cde6b->enter($__internal_cb038f15f9673358a6d04a7e17d252f420dcb5378d74f347c41f9fd47f3cde6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_cb038f15f9673358a6d04a7e17d252f420dcb5378d74f347c41f9fd47f3cde6b->leave($__internal_cb038f15f9673358a6d04a7e17d252f420dcb5378d74f347c41f9fd47f3cde6b_prof);

        
        $__internal_a2fe1608431db36f30b50bebed343d2197f47ad4fce7a3cce524d25298659a1e->leave($__internal_a2fe1608431db36f30b50bebed343d2197f47ad4fce7a3cce524d25298659a1e_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_859bea81773b01093bbcb3b0ddcdd211dbc939235acf21d191703312c6a0eaa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_859bea81773b01093bbcb3b0ddcdd211dbc939235acf21d191703312c6a0eaa1->enter($__internal_859bea81773b01093bbcb3b0ddcdd211dbc939235acf21d191703312c6a0eaa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_af947766c02267810bef9e7dca1ca4c8f3cc1144092373c1f2634f400ff11566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af947766c02267810bef9e7dca1ca4c8f3cc1144092373c1f2634f400ff11566->enter($__internal_af947766c02267810bef9e7dca1ca4c8f3cc1144092373c1f2634f400ff11566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_af947766c02267810bef9e7dca1ca4c8f3cc1144092373c1f2634f400ff11566->leave($__internal_af947766c02267810bef9e7dca1ca4c8f3cc1144092373c1f2634f400ff11566_prof);

        
        $__internal_859bea81773b01093bbcb3b0ddcdd211dbc939235acf21d191703312c6a0eaa1->leave($__internal_859bea81773b01093bbcb3b0ddcdd211dbc939235acf21d191703312c6a0eaa1_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_e092b1ba1b26c42b637c70a602333c7f9b06e284e709647a8213744b96e0cc47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e092b1ba1b26c42b637c70a602333c7f9b06e284e709647a8213744b96e0cc47->enter($__internal_e092b1ba1b26c42b637c70a602333c7f9b06e284e709647a8213744b96e0cc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb55b665b4d0f11c28502186986371bd606ea95389537dad554b176994f9011f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb55b665b4d0f11c28502186986371bd606ea95389537dad554b176994f9011f->enter($__internal_eb55b665b4d0f11c28502186986371bd606ea95389537dad554b176994f9011f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eb55b665b4d0f11c28502186986371bd606ea95389537dad554b176994f9011f->leave($__internal_eb55b665b4d0f11c28502186986371bd606ea95389537dad554b176994f9011f_prof);

        
        $__internal_e092b1ba1b26c42b637c70a602333c7f9b06e284e709647a8213744b96e0cc47->leave($__internal_e092b1ba1b26c42b637c70a602333c7f9b06e284e709647a8213744b96e0cc47_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7ce449927ec7f943f059f7b0781fd9578d0ca6f0c940d3077da20e03c0ad2c97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ce449927ec7f943f059f7b0781fd9578d0ca6f0c940d3077da20e03c0ad2c97->enter($__internal_7ce449927ec7f943f059f7b0781fd9578d0ca6f0c940d3077da20e03c0ad2c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9ba74ae6c610ac3b67f5ce33332b9525e8ae6cef83442b14ba4b294871935b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ba74ae6c610ac3b67f5ce33332b9525e8ae6cef83442b14ba4b294871935b7a->enter($__internal_9ba74ae6c610ac3b67f5ce33332b9525e8ae6cef83442b14ba4b294871935b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9ba74ae6c610ac3b67f5ce33332b9525e8ae6cef83442b14ba4b294871935b7a->leave($__internal_9ba74ae6c610ac3b67f5ce33332b9525e8ae6cef83442b14ba4b294871935b7a_prof);

        
        $__internal_7ce449927ec7f943f059f7b0781fd9578d0ca6f0c940d3077da20e03c0ad2c97->leave($__internal_7ce449927ec7f943f059f7b0781fd9578d0ca6f0c940d3077da20e03c0ad2c97_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 46,  219 => 44,  202 => 17,  184 => 8,  172 => 74,  170 => 73,  168 => 72,  166 => 71,  163 => 69,  161 => 68,  158 => 66,  156 => 65,  154 => 64,  152 => 63,  150 => 62,  144 => 58,  140 => 57,  136 => 56,  130 => 53,  126 => 52,  122 => 51,  118 => 50,  114 => 49,  108 => 47,  106 => 46,  103 => 45,  101 => 44,  83 => 29,  70 => 18,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  44 => 8,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('img/apple-icon.png') }}\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('img/favicon.png') }}\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" />
        <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\" />
        <link href=\"{{ asset('css/material-kit.css') }}\" rel=\"stylesheet\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\">
        {% block stylesheets %}{% endblock %}
    </head>
    <body style=\"background:#FFFFFF;overflow:hidden; \">
    <nav class=\"navbar navbar-danger\" role=\"navigation\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\"><img src=\"{{ asset('img/pipel-logo.png') }}\"> </a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <button class=\"btn btn-warning btn-fab btn-fab-mini btn-round\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i><div class=\"ripple-container\"></div></button>
                    </li>
                    <li>
                        <button class=\"btn btn-warning btn-fab btn-fab-mini btn-round\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i><div class=\"ripple-container\"></div></button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class=\"wrapper main\">
        {% block body %}{% endblock %}
    </div>
        {% block javascripts %}{% endblock %}
        <script src=\"{{ asset('js/jquery.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <script src=\"{{ asset('js/bootstrap.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('js/material.min.js') }}\"></script>
        <script src=\"{{ asset('js/nouislider.min.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('js/bootstrap-datepicker.js') }}\" type=\"text/javascript\"></script>
        <script src=\"{{ asset('js/material-kit.js') }}\" type=\"text/javascript\"></script>
        <script>
            \$( document ).ready(function() {
                \$(\"#group-div\").load(\"{{ path('groups') }}\");
                \$(\"#contact-div\").load(\"{{ path('contacts') }}\");
                \$(\"#person-div\").load(\"{{ path('person') }}\");
            });
        </script>
        {#<script type=\"text/javascript\">#}
            {#\$().ready(function(){#}
                {#// the body of this function is in assets/material-kit.js#}
                {#materialKit.initSliders();#}
                {#window_width = \$(window).width();#}

                {#if (window_width >= 992){#}
                    {#big_image = \$('.wrapper > .header');#}

                    {#\$(window).on('scroll', materialKitDemo.checkScrollForParallax);#}
                {#}#}
            {#});#}
        {#</script>#}
    </body>
</html>
", "base.html.twig", "/home/grimlorn/Citadel/Contact-app-Symfony/app/Resources/views/base.html.twig");
    }
}
