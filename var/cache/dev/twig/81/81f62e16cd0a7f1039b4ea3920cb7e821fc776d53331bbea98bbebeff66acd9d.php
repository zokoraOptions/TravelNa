<?php

/* base.html.twig */
class __TwigTemplate_9ab8b1b030889b9a293a63a8b8062d1d0312ba8e9f73e390a59a48c73a7c4686 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92ca9a7c4674b21d51d48141c7becb53a84dac40630670da08832412e17a02d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92ca9a7c4674b21d51d48141c7becb53a84dac40630670da08832412e17a02d1->enter($__internal_92ca9a7c4674b21d51d48141c7becb53a84dac40630670da08832412e17a02d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_33244edf837571773062afa76b7a224a45c0583b5c03fe78b7dd76d963a342ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33244edf837571773062afa76b7a224a45c0583b5c03fe78b7dd76d963a342ae->enter($__internal_33244edf837571773062afa76b7a224a45c0583b5c03fe78b7dd76d963a342ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    </head>
    <body>
        <div class=\"container\">
            <header>
                <ul class=\"nav nav-pills\"> 
                    <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_index");
        echo "\">Client</a></li> 
                    <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transport_index");
        echo "\">Transport</a></li> 
                    <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("camion_index");
        echo "\">Camion</a></li> 
                    <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conducteur_index");
        echo "\">Conducteur</a></li> 
                    <li><a href=\"#\">Maintenance</a></li> 
                    <li><a href=\"#\">Facture</a></li> 
                </ul>
                ";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 22
        echo "            </header>
            ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "        </div>
    </body>
</html>
";
        
        $__internal_92ca9a7c4674b21d51d48141c7becb53a84dac40630670da08832412e17a02d1->leave($__internal_92ca9a7c4674b21d51d48141c7becb53a84dac40630670da08832412e17a02d1_prof);

        
        $__internal_33244edf837571773062afa76b7a224a45c0583b5c03fe78b7dd76d963a342ae->leave($__internal_33244edf837571773062afa76b7a224a45c0583b5c03fe78b7dd76d963a342ae_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b852d4b72fccb4dbc02480a317ccc528e07bddb70ff48c27a8835b1176e580b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b852d4b72fccb4dbc02480a317ccc528e07bddb70ff48c27a8835b1176e580b->enter($__internal_5b852d4b72fccb4dbc02480a317ccc528e07bddb70ff48c27a8835b1176e580b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d06b7076868572df62404579633e0c4df7d209b274fffa383e0ea643d680713c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d06b7076868572df62404579633e0c4df7d209b274fffa383e0ea643d680713c->enter($__internal_d06b7076868572df62404579633e0c4df7d209b274fffa383e0ea643d680713c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gestionnaire de Transport";
        
        $__internal_d06b7076868572df62404579633e0c4df7d209b274fffa383e0ea643d680713c->leave($__internal_d06b7076868572df62404579633e0c4df7d209b274fffa383e0ea643d680713c_prof);

        
        $__internal_5b852d4b72fccb4dbc02480a317ccc528e07bddb70ff48c27a8835b1176e580b->leave($__internal_5b852d4b72fccb4dbc02480a317ccc528e07bddb70ff48c27a8835b1176e580b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2a891619b411473cce324d94ec07a156d146c308f43b15ac6254ba3fda4f7b9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a891619b411473cce324d94ec07a156d146c308f43b15ac6254ba3fda4f7b9f->enter($__internal_2a891619b411473cce324d94ec07a156d146c308f43b15ac6254ba3fda4f7b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_78bd1ab1c5e9fca3a141f94085e64469963811de21cdde30249f7c4089a16a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78bd1ab1c5e9fca3a141f94085e64469963811de21cdde30249f7c4089a16a27->enter($__internal_78bd1ab1c5e9fca3a141f94085e64469963811de21cdde30249f7c4089a16a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_78bd1ab1c5e9fca3a141f94085e64469963811de21cdde30249f7c4089a16a27->leave($__internal_78bd1ab1c5e9fca3a141f94085e64469963811de21cdde30249f7c4089a16a27_prof);

        
        $__internal_2a891619b411473cce324d94ec07a156d146c308f43b15ac6254ba3fda4f7b9f->leave($__internal_2a891619b411473cce324d94ec07a156d146c308f43b15ac6254ba3fda4f7b9f_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_b93c1624a12b86137a34665e2f0e4b42c3ac7d069951f017f20ff1d1b8c5f11f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b93c1624a12b86137a34665e2f0e4b42c3ac7d069951f017f20ff1d1b8c5f11f->enter($__internal_b93c1624a12b86137a34665e2f0e4b42c3ac7d069951f017f20ff1d1b8c5f11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_b0b8512750adffd2ab0ab7dd9b2051ce2a0bca31750cd7455b2e637b1588e58d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b8512750adffd2ab0ab7dd9b2051ce2a0bca31750cd7455b2e637b1588e58d->enter($__internal_b0b8512750adffd2ab0ab7dd9b2051ce2a0bca31750cd7455b2e637b1588e58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_b0b8512750adffd2ab0ab7dd9b2051ce2a0bca31750cd7455b2e637b1588e58d->leave($__internal_b0b8512750adffd2ab0ab7dd9b2051ce2a0bca31750cd7455b2e637b1588e58d_prof);

        
        $__internal_b93c1624a12b86137a34665e2f0e4b42c3ac7d069951f017f20ff1d1b8c5f11f->leave($__internal_b93c1624a12b86137a34665e2f0e4b42c3ac7d069951f017f20ff1d1b8c5f11f_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_9468b615a8ff3f23b5f76d0937fd39011a3020f589f5a8e19c2837b3f43042b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9468b615a8ff3f23b5f76d0937fd39011a3020f589f5a8e19c2837b3f43042b0->enter($__internal_9468b615a8ff3f23b5f76d0937fd39011a3020f589f5a8e19c2837b3f43042b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f821f93c1c2e377dd5f1d0188978666137fd95e02d93bfe09b06f272a8691d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f821f93c1c2e377dd5f1d0188978666137fd95e02d93bfe09b06f272a8691d37->enter($__internal_f821f93c1c2e377dd5f1d0188978666137fd95e02d93bfe09b06f272a8691d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f821f93c1c2e377dd5f1d0188978666137fd95e02d93bfe09b06f272a8691d37->leave($__internal_f821f93c1c2e377dd5f1d0188978666137fd95e02d93bfe09b06f272a8691d37_prof);

        
        $__internal_9468b615a8ff3f23b5f76d0937fd39011a3020f589f5a8e19c2837b3f43042b0->leave($__internal_9468b615a8ff3f23b5f76d0937fd39011a3020f589f5a8e19c2837b3f43042b0_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e4ba5b183666bf5115f2e95d05c0f16f6f1c57d3c6a65ad1b2d9e28144787c60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4ba5b183666bf5115f2e95d05c0f16f6f1c57d3c6a65ad1b2d9e28144787c60->enter($__internal_e4ba5b183666bf5115f2e95d05c0f16f6f1c57d3c6a65ad1b2d9e28144787c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4dc9eab15d5d1ecd18f2fb4fec81c34e039be567863dd586814fef865fc7fa20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc9eab15d5d1ecd18f2fb4fec81c34e039be567863dd586814fef865fc7fa20->enter($__internal_4dc9eab15d5d1ecd18f2fb4fec81c34e039be567863dd586814fef865fc7fa20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4dc9eab15d5d1ecd18f2fb4fec81c34e039be567863dd586814fef865fc7fa20->leave($__internal_4dc9eab15d5d1ecd18f2fb4fec81c34e039be567863dd586814fef865fc7fa20_prof);

        
        $__internal_e4ba5b183666bf5115f2e95d05c0f16f6f1c57d3c6a65ad1b2d9e28144787c60->leave($__internal_e4ba5b183666bf5115f2e95d05c0f16f6f1c57d3c6a65ad1b2d9e28144787c60_prof);

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
        return array (  167 => 24,  150 => 23,  133 => 21,  116 => 6,  98 => 5,  85 => 25,  82 => 24,  80 => 23,  77 => 22,  75 => 21,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  47 => 8,  42 => 7,  40 => 6,  36 => 5,  30 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Gestionnaire de Transport{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/bootstrap.min.css')}}\">
    </head>
    <body>
        <div class=\"container\">
            <header>
                <ul class=\"nav nav-pills\"> 
                    <li><a href=\"{{path('client_index')}}\">Client</a></li> 
                    <li><a href=\"{{path('transport_index')}}\">Transport</a></li> 
                    <li><a href=\"{{path('camion_index')}}\">Camion</a></li> 
                    <li><a href=\"{{path('conducteur_index')}}\">Conducteur</a></li> 
                    <li><a href=\"#\">Maintenance</a></li> 
                    <li><a href=\"#\">Facture</a></li> 
                </ul>
                {% block header%}{% endblock %}
            </header>
            {% block body %}{% endblock %}
            {% block javascripts %}{% endblock %}
        </div>
    </body>
</html>
", "base.html.twig", "C:\\wamp\\www\\projet_narindra\\travel2\\app\\Resources\\views\\base.html.twig");
    }
}
