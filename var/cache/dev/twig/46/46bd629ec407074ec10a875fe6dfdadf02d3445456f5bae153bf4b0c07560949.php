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
        $__internal_ecb46683d93d9f72ee295eaaaa7543b33012cb99b43cdcec51c3ade25be8978b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecb46683d93d9f72ee295eaaaa7543b33012cb99b43cdcec51c3ade25be8978b->enter($__internal_ecb46683d93d9f72ee295eaaaa7543b33012cb99b43cdcec51c3ade25be8978b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_8c612df84b2e4b8cb6902776e24ad5cca1d4b221eec6011be6d3275db7604516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c612df84b2e4b8cb6902776e24ad5cca1d4b221eec6011be6d3275db7604516->enter($__internal_8c612df84b2e4b8cb6902776e24ad5cca1d4b221eec6011be6d3275db7604516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/pipel-logo.png"), "html", null, true);
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
        
        $__internal_ecb46683d93d9f72ee295eaaaa7543b33012cb99b43cdcec51c3ade25be8978b->leave($__internal_ecb46683d93d9f72ee295eaaaa7543b33012cb99b43cdcec51c3ade25be8978b_prof);

        
        $__internal_8c612df84b2e4b8cb6902776e24ad5cca1d4b221eec6011be6d3275db7604516->leave($__internal_8c612df84b2e4b8cb6902776e24ad5cca1d4b221eec6011be6d3275db7604516_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f6bad330a9baee571b971f0184f3bb5ad3a0611767529020ae40d68ee6a947f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f6bad330a9baee571b971f0184f3bb5ad3a0611767529020ae40d68ee6a947f->enter($__internal_1f6bad330a9baee571b971f0184f3bb5ad3a0611767529020ae40d68ee6a947f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f2ea906d9d9f34fa17b29f688c7bae8a2e5125233fd608f2f5f4dfe409fb4417 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2ea906d9d9f34fa17b29f688c7bae8a2e5125233fd608f2f5f4dfe409fb4417->enter($__internal_f2ea906d9d9f34fa17b29f688c7bae8a2e5125233fd608f2f5f4dfe409fb4417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f2ea906d9d9f34fa17b29f688c7bae8a2e5125233fd608f2f5f4dfe409fb4417->leave($__internal_f2ea906d9d9f34fa17b29f688c7bae8a2e5125233fd608f2f5f4dfe409fb4417_prof);

        
        $__internal_1f6bad330a9baee571b971f0184f3bb5ad3a0611767529020ae40d68ee6a947f->leave($__internal_1f6bad330a9baee571b971f0184f3bb5ad3a0611767529020ae40d68ee6a947f_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_018ce53b563ff81d5e8b816389dc12e7d3584e299d3ed7f52a4111a91478d9d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_018ce53b563ff81d5e8b816389dc12e7d3584e299d3ed7f52a4111a91478d9d5->enter($__internal_018ce53b563ff81d5e8b816389dc12e7d3584e299d3ed7f52a4111a91478d9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_200a3963e103c220845136b6f97536e16f828f1efbc22e7f757f87a168b2dadd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_200a3963e103c220845136b6f97536e16f828f1efbc22e7f757f87a168b2dadd->enter($__internal_200a3963e103c220845136b6f97536e16f828f1efbc22e7f757f87a168b2dadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_200a3963e103c220845136b6f97536e16f828f1efbc22e7f757f87a168b2dadd->leave($__internal_200a3963e103c220845136b6f97536e16f828f1efbc22e7f757f87a168b2dadd_prof);

        
        $__internal_018ce53b563ff81d5e8b816389dc12e7d3584e299d3ed7f52a4111a91478d9d5->leave($__internal_018ce53b563ff81d5e8b816389dc12e7d3584e299d3ed7f52a4111a91478d9d5_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf8fb06ab8249aacdffae5e28309db190bc38fc71026157f81712bf278e788e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf8fb06ab8249aacdffae5e28309db190bc38fc71026157f81712bf278e788e0->enter($__internal_bf8fb06ab8249aacdffae5e28309db190bc38fc71026157f81712bf278e788e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e8b3eaa59bc348a46a3d30326534419781aabcd0215e75822ca6d4d619e8da46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b3eaa59bc348a46a3d30326534419781aabcd0215e75822ca6d4d619e8da46->enter($__internal_e8b3eaa59bc348a46a3d30326534419781aabcd0215e75822ca6d4d619e8da46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e8b3eaa59bc348a46a3d30326534419781aabcd0215e75822ca6d4d619e8da46->leave($__internal_e8b3eaa59bc348a46a3d30326534419781aabcd0215e75822ca6d4d619e8da46_prof);

        
        $__internal_bf8fb06ab8249aacdffae5e28309db190bc38fc71026157f81712bf278e788e0->leave($__internal_bf8fb06ab8249aacdffae5e28309db190bc38fc71026157f81712bf278e788e0_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e7f51f04324d2ab8394e1a3d5eb559dba0142814ef7ea996ea3ad711ad597135 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7f51f04324d2ab8394e1a3d5eb559dba0142814ef7ea996ea3ad711ad597135->enter($__internal_e7f51f04324d2ab8394e1a3d5eb559dba0142814ef7ea996ea3ad711ad597135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5a61993bba69ed22b99f83e436be57d40bc75b6f8787c3d0a353ae73d41ee091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a61993bba69ed22b99f83e436be57d40bc75b6f8787c3d0a353ae73d41ee091->enter($__internal_5a61993bba69ed22b99f83e436be57d40bc75b6f8787c3d0a353ae73d41ee091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5a61993bba69ed22b99f83e436be57d40bc75b6f8787c3d0a353ae73d41ee091->leave($__internal_5a61993bba69ed22b99f83e436be57d40bc75b6f8787c3d0a353ae73d41ee091_prof);

        
        $__internal_e7f51f04324d2ab8394e1a3d5eb559dba0142814ef7ea996ea3ad711ad597135->leave($__internal_e7f51f04324d2ab8394e1a3d5eb559dba0142814ef7ea996ea3ad711ad597135_prof);

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
                <a id=\"home\" class=\"navbar-brand\" href=\"#\"><img src=\"{{ asset('img/pipel-logo.png') }}\"> </a>
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
