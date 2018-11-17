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
        $__internal_74221885c84daf65d05da50ecba93c4a6e4caff834a1f9d4e42618acc73c5393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74221885c84daf65d05da50ecba93c4a6e4caff834a1f9d4e42618acc73c5393->enter($__internal_74221885c84daf65d05da50ecba93c4a6e4caff834a1f9d4e42618acc73c5393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f246e41a2dc5eaab4f6006957857873f71118d68c039b9b66e86f629862c282a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f246e41a2dc5eaab4f6006957857873f71118d68c039b9b66e86f629862c282a->enter($__internal_f246e41a2dc5eaab4f6006957857873f71118d68c039b9b66e86f629862c282a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
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
                <a id=\"home\" class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/pipel-logo-white.png"), "html", null, true);
        echo "\"> </a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li id=\"new-pipel\">
                        <button id=\"newpipel\" class=\"btn btn-warning btn-fab btn-fab-mini btn-round\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i><div class=\"ripple-container\"></div></button>
                    </li>
                    <li>
                        <button id=\"settings\" class=\"btn btn-warning btn-fab btn-fab-mini btn-round\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i><div class=\"ripple-container\"></div></button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class=\"wrapper main\">
        ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "    </div>
        ";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "        ";
        // line 49
        echo "
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/material.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/nouislider.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/material-kit.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script>
            \$( document ).ready(function() {
                \$(\"#group-div\").load(\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groups");
        echo "\");
                \$(\"#contact-div\").load(\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacts");
        echo "\");
                \$(\"#person-div\").load(\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person");
        echo "\");

                \$( \"#newpipel\" ).click(function() {
                    \$( \"#group-div\" ).empty();
                    \$( \"#contact-div\" ).empty();
                    \$( \"#person-div\" ).empty();
                    \$( \"#settings-div\" ).empty();
                    \$(\"#addpipel-div\").load(\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("addpipel");
        echo "\");
                });
                \$( \"#settings\" ).click(function() {
                    \$( \"#group-div\" ).empty();
                    \$( \"#contact-div\" ).empty();
                    \$( \"#person-div\" ).empty();
                    \$( \"#addpipel-div\" ).empty();
                    \$(\"#settings-div\").load(\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings");
        echo "\");
                });
                \$( \"#home\" ).click(function() {
                    \$( \"#settings-div\" ).empty();
                    \$( \"#addperson-div\" ).empty();
                    \$(\"#group-div\").load(\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("groups");
        echo "\");
                    \$(\"#contact-div\").load(\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacts");
        echo "\");
                    \$(\"#person-div\").load(\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("person");
        echo "\");
                });
            });



        </script>
        ";
        // line 88
        echo "            ";
        // line 89
        echo "                ";
        // line 90
        echo "                ";
        // line 91
        echo "                ";
        // line 92
        echo "
                ";
        // line 94
        echo "                    ";
        // line 95
        echo "
                    ";
        // line 97
        echo "                ";
        // line 98
        echo "            ";
        // line 99
        echo "        ";
        // line 100
        echo "    </body>
</html>
";
        
        $__internal_74221885c84daf65d05da50ecba93c4a6e4caff834a1f9d4e42618acc73c5393->leave($__internal_74221885c84daf65d05da50ecba93c4a6e4caff834a1f9d4e42618acc73c5393_prof);

        
        $__internal_f246e41a2dc5eaab4f6006957857873f71118d68c039b9b66e86f629862c282a->leave($__internal_f246e41a2dc5eaab4f6006957857873f71118d68c039b9b66e86f629862c282a_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_c90d029fae9255890099fa69928cb13196fc1fcdb418c09327cf15d65c458715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c90d029fae9255890099fa69928cb13196fc1fcdb418c09327cf15d65c458715->enter($__internal_c90d029fae9255890099fa69928cb13196fc1fcdb418c09327cf15d65c458715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_204d8d285ddd9a7d3d6d2d192eed97c8b0553a95a023243fb342334f4808256c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204d8d285ddd9a7d3d6d2d192eed97c8b0553a95a023243fb342334f4808256c->enter($__internal_204d8d285ddd9a7d3d6d2d192eed97c8b0553a95a023243fb342334f4808256c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_204d8d285ddd9a7d3d6d2d192eed97c8b0553a95a023243fb342334f4808256c->leave($__internal_204d8d285ddd9a7d3d6d2d192eed97c8b0553a95a023243fb342334f4808256c_prof);

        
        $__internal_c90d029fae9255890099fa69928cb13196fc1fcdb418c09327cf15d65c458715->leave($__internal_c90d029fae9255890099fa69928cb13196fc1fcdb418c09327cf15d65c458715_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9f9d6121b1296c4333e6d3a0cf5758882627620f04c7729cf95fd4edb3c78057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f9d6121b1296c4333e6d3a0cf5758882627620f04c7729cf95fd4edb3c78057->enter($__internal_9f9d6121b1296c4333e6d3a0cf5758882627620f04c7729cf95fd4edb3c78057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_120d0a795700b5245d28d097ce79609932d66be4430f2e3cacff85904d50b29c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120d0a795700b5245d28d097ce79609932d66be4430f2e3cacff85904d50b29c->enter($__internal_120d0a795700b5245d28d097ce79609932d66be4430f2e3cacff85904d50b29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_120d0a795700b5245d28d097ce79609932d66be4430f2e3cacff85904d50b29c->leave($__internal_120d0a795700b5245d28d097ce79609932d66be4430f2e3cacff85904d50b29c_prof);

        
        $__internal_9f9d6121b1296c4333e6d3a0cf5758882627620f04c7729cf95fd4edb3c78057->leave($__internal_9f9d6121b1296c4333e6d3a0cf5758882627620f04c7729cf95fd4edb3c78057_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_55eb5a025497c3f4dc0368358a82969af6cc9ec9ccb735d0514c5917a8b9cedb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55eb5a025497c3f4dc0368358a82969af6cc9ec9ccb735d0514c5917a8b9cedb->enter($__internal_55eb5a025497c3f4dc0368358a82969af6cc9ec9ccb735d0514c5917a8b9cedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_562e1201e9faf512e5f352fd6b1b7a9c8707e258fb3208678d15c399ffc47595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_562e1201e9faf512e5f352fd6b1b7a9c8707e258fb3208678d15c399ffc47595->enter($__internal_562e1201e9faf512e5f352fd6b1b7a9c8707e258fb3208678d15c399ffc47595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_562e1201e9faf512e5f352fd6b1b7a9c8707e258fb3208678d15c399ffc47595->leave($__internal_562e1201e9faf512e5f352fd6b1b7a9c8707e258fb3208678d15c399ffc47595_prof);

        
        $__internal_55eb5a025497c3f4dc0368358a82969af6cc9ec9ccb735d0514c5917a8b9cedb->leave($__internal_55eb5a025497c3f4dc0368358a82969af6cc9ec9ccb735d0514c5917a8b9cedb_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_416e31ea7a1e6be435dc83d3dcb4d97fce1d12ceb324ed08c537daae7e7f305a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_416e31ea7a1e6be435dc83d3dcb4d97fce1d12ceb324ed08c537daae7e7f305a->enter($__internal_416e31ea7a1e6be435dc83d3dcb4d97fce1d12ceb324ed08c537daae7e7f305a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_767f0365e40fac01623ebd13c437842d75a26fdb44864dcb4d821b1cb28886e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_767f0365e40fac01623ebd13c437842d75a26fdb44864dcb4d821b1cb28886e6->enter($__internal_767f0365e40fac01623ebd13c437842d75a26fdb44864dcb4d821b1cb28886e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_767f0365e40fac01623ebd13c437842d75a26fdb44864dcb4d821b1cb28886e6->leave($__internal_767f0365e40fac01623ebd13c437842d75a26fdb44864dcb4d821b1cb28886e6_prof);

        
        $__internal_416e31ea7a1e6be435dc83d3dcb4d97fce1d12ceb324ed08c537daae7e7f305a->leave($__internal_416e31ea7a1e6be435dc83d3dcb4d97fce1d12ceb324ed08c537daae7e7f305a_prof);

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
        return array (  276 => 47,  259 => 45,  242 => 18,  224 => 8,  212 => 100,  210 => 99,  208 => 98,  206 => 97,  203 => 95,  201 => 94,  198 => 92,  196 => 91,  194 => 90,  192 => 89,  190 => 88,  180 => 80,  176 => 79,  172 => 78,  164 => 73,  154 => 66,  144 => 59,  140 => 58,  136 => 57,  130 => 54,  126 => 53,  122 => 52,  118 => 51,  114 => 50,  111 => 49,  109 => 48,  107 => 47,  104 => 46,  102 => 45,  84 => 30,  71 => 19,  69 => 18,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  44 => 8,  39 => 6,  35 => 5,  29 => 1,);
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
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
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
                <a id=\"home\" class=\"navbar-brand\" href=\"#\"><img src=\"{{ asset('img/pipel-logo-white.png') }}\"> </a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li id=\"new-pipel\">
                        <button id=\"newpipel\" class=\"btn btn-warning btn-fab btn-fab-mini btn-round\"><i class=\"fa fa-user-plus\" aria-hidden=\"true\"></i><div class=\"ripple-container\"></div></button>
                    </li>
                    <li>
                        <button id=\"settings\" class=\"btn btn-warning btn-fab btn-fab-mini btn-round\"><i class=\"fa fa-cog\" aria-hidden=\"true\"></i><div class=\"ripple-container\"></div></button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class=\"wrapper main\">
        {% block body %}{% endblock %}
    </div>
        {% block javascripts %}{% endblock %}
        {#<script src=\"{{ asset('js/jquery.min.js') }}\" type=\"text/javascript\"></script>#}

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

                \$( \"#newpipel\" ).click(function() {
                    \$( \"#group-div\" ).empty();
                    \$( \"#contact-div\" ).empty();
                    \$( \"#person-div\" ).empty();
                    \$( \"#settings-div\" ).empty();
                    \$(\"#addpipel-div\").load(\"{{ path('addpipel') }}\");
                });
                \$( \"#settings\" ).click(function() {
                    \$( \"#group-div\" ).empty();
                    \$( \"#contact-div\" ).empty();
                    \$( \"#person-div\" ).empty();
                    \$( \"#addpipel-div\" ).empty();
                    \$(\"#settings-div\").load(\"{{ path('settings') }}\");
                });
                \$( \"#home\" ).click(function() {
                    \$( \"#settings-div\" ).empty();
                    \$( \"#addperson-div\" ).empty();
                    \$(\"#group-div\").load(\"{{ path('groups') }}\");
                    \$(\"#contact-div\").load(\"{{ path('contacts') }}\");
                    \$(\"#person-div\").load(\"{{ path('person') }}\");
                });
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
", "base.html.twig", "/home/grimlorn/Citadel/Pipel---Address-Book/app/Resources/views/base.html.twig");
    }
}
