<?php

/* transport/index.html.twig */
class __TwigTemplate_55c7e58298d3a8d6460e418937b9925d5c596ddf38647b8c03176ff25a1230f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "transport/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e9ce4f856b489b0d98c891cc731ce2884ab3fa4b3a0b57e4c61ea9e83d96b87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e9ce4f856b489b0d98c891cc731ce2884ab3fa4b3a0b57e4c61ea9e83d96b87->enter($__internal_9e9ce4f856b489b0d98c891cc731ce2884ab3fa4b3a0b57e4c61ea9e83d96b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transport/index.html.twig"));

        $__internal_d416378269f95f02e5065a8e43bbaf786aa6de7cb4c42d6476308efe254c30f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d416378269f95f02e5065a8e43bbaf786aa6de7cb4c42d6476308efe254c30f0->enter($__internal_d416378269f95f02e5065a8e43bbaf786aa6de7cb4c42d6476308efe254c30f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transport/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e9ce4f856b489b0d98c891cc731ce2884ab3fa4b3a0b57e4c61ea9e83d96b87->leave($__internal_9e9ce4f856b489b0d98c891cc731ce2884ab3fa4b3a0b57e4c61ea9e83d96b87_prof);

        
        $__internal_d416378269f95f02e5065a8e43bbaf786aa6de7cb4c42d6476308efe254c30f0->leave($__internal_d416378269f95f02e5065a8e43bbaf786aa6de7cb4c42d6476308efe254c30f0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_37b5e75350e102fa6c2904e134870051534e15a1a1ccdc52edc526959b298db1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b5e75350e102fa6c2904e134870051534e15a1a1ccdc52edc526959b298db1->enter($__internal_37b5e75350e102fa6c2904e134870051534e15a1a1ccdc52edc526959b298db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_38dcbce3f2e715c0cc41719f6c6b90251f47750976b4af624f47ceec86c49ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38dcbce3f2e715c0cc41719f6c6b90251f47750976b4af624f47ceec86c49ea2->enter($__internal_38dcbce3f2e715c0cc41719f6c6b90251f47750976b4af624f47ceec86c49ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "   <div class=\"container\">
        <div class=\"row\">
            <div class=\"panel panel-default\"> 
                <div class=\"panel-heading\"> 
                    <span class=\"panel-title\"><h1>Listes des Transports</h1></span> 
                </div> 
                <div class=\"panel-body\">
                   <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transport_new");
        echo "\" class=\"btn btn-default\">Ajouter un transport</a>
                   <a href=\"#\" class=\"btn btn-default pull-right\">Exporter</a>
                </div> 
                <table class=\"table table-bordered\"> 
                    <thead> 
                        <tr> 
                            <th class=\"text-center\">Transit</th>
                            <th class=\"text-center\">Comission</th>
                            <th class=\"text-center\">Date de transport</th>
                            <th class=\"text-center\">Client</th>
                            <th class=\"text-center\">Camion</th>
                            <th class=\"text-center\">Actions</th>
                        </tr> 
                    </thead> 
                    <tbody class=\"text-center\">
                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["transports"]) ? $context["transports"] : $this->getContext($context, "transports")));
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 27
            echo "                            <tr>
                                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["transport"], "transit", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["transport"], "comission", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 30
            if ($this->getAttribute($context["transport"], "dateTransport", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["transport"], "dateTransport", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["transport"], "client", array()), "nom", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["transport"], "camion", array()), "plaqueImmatriculation", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transport_show", array("id" => $this->getAttribute($context["transport"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">Voir</a>
                                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transport_edit", array("id" => $this->getAttribute($context["transport"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">Modifier</a>
                                    <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transport_suppression", array("id" => $this->getAttribute($context["transport"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">Supprimer</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <button class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\"> Modal </button> 
    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\"> 
            <div class=\"modal-content\"> 
                <div class=\"modal-header\"> 
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"> &times; </button> 
                    <h4 class=\"modal-title\" id=\"myModalLabel\"></h4> 
                </div> 
                <div class=\"modal-body id=\"affichage2\"\">

                </div> 
                <div class=\"modal-footer\"> 
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"> Fermer </button> 
                    <button type=\"button\" class=\"btn btn-primary\"> Enregistrer </button> 
                </div> 
            </div>
        </div>
    </div>

    <!--<h2>Example of using methods of Modal Plugin</h2>
    <button class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\"> Launch demo modal </button>
    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\"> 
        <div class=\"modal-dialog\"> 
            <div class=\"modal-content\"> 
                <div class=\"modal-header\"> 
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×
                        <a href=\"#\" id=\"add_x\" class=\"btn btn-default\">Ajouter x</a><br>
                    </button> 
                    <h4 class=\"modal-title\" id=\"myModalLabel\"> This Modal title </h4> 
                </div> 
                <div class=\"modal-body\"> Press ESC button to exit. </div> 
                <div class=\"modal-footer\"> 
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close </button> 
                    <button type=\"button\" class=\"btn btn-primary\"> Submit changes </button> 
                </div> 
            </div>
        </div>
    </div>-->


        <a href=\"#\" id=\"add_x\" class=\"btn btn-default\">Ajouter x</a><br>
        <div id=\"affichage2\"></div>

    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function()
        {
            \$('#add_x').click(
            function(e)
            {
                var url1=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transport_new");
        echo "\";
                alert(url1);
                \$('#affichage2').load(url1);
                e.preventDefault();
                
            });
        });
    </script>
";
        
        $__internal_38dcbce3f2e715c0cc41719f6c6b90251f47750976b4af624f47ceec86c49ea2->leave($__internal_38dcbce3f2e715c0cc41719f6c6b90251f47750976b4af624f47ceec86c49ea2_prof);

        
        $__internal_37b5e75350e102fa6c2904e134870051534e15a1a1ccdc52edc526959b298db1->leave($__internal_37b5e75350e102fa6c2904e134870051534e15a1a1ccdc52edc526959b298db1_prof);

    }

    public function getTemplateName()
    {
        return "transport/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 97,  179 => 90,  175 => 89,  124 => 40,  114 => 36,  110 => 35,  106 => 34,  101 => 32,  97 => 31,  91 => 30,  87 => 29,  83 => 28,  80 => 27,  76 => 26,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
   <div class=\"container\">
        <div class=\"row\">
            <div class=\"panel panel-default\"> 
                <div class=\"panel-heading\"> 
                    <span class=\"panel-title\"><h1>Listes des Transports</h1></span> 
                </div> 
                <div class=\"panel-body\">
                   <a href=\"{{ path('transport_new') }}\" class=\"btn btn-default\">Ajouter un transport</a>
                   <a href=\"#\" class=\"btn btn-default pull-right\">Exporter</a>
                </div> 
                <table class=\"table table-bordered\"> 
                    <thead> 
                        <tr> 
                            <th class=\"text-center\">Transit</th>
                            <th class=\"text-center\">Comission</th>
                            <th class=\"text-center\">Date de transport</th>
                            <th class=\"text-center\">Client</th>
                            <th class=\"text-center\">Camion</th>
                            <th class=\"text-center\">Actions</th>
                        </tr> 
                    </thead> 
                    <tbody class=\"text-center\">
                        {% for transport in transports %}
                            <tr>
                                <td>{{ transport.transit }}</td>
                                <td>{{ transport.comission }}</td>
                                <td>{% if transport.dateTransport %}{{ transport.dateTransport|date('Y-m-d') }}{% endif %}</td>
                                <td>{{ transport.client.nom }}</td>
                                <td>{{ transport.camion.plaqueImmatriculation }}</td>
                                <td>
                                    <a href=\"{{ path('transport_show', { 'id': transport.id }) }}\" class=\"btn btn-default\">Voir</a>
                                    <a href=\"{{ path('transport_edit', { 'id': transport.id }) }}\" class=\"btn btn-default\">Modifier</a>
                                    <a href=\"{{ path('transport_suppression', { 'id': transport.id }) }}\" class=\"btn btn-default\">Supprimer</a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <button class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\"> Modal </button> 
    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\"> 
            <div class=\"modal-content\"> 
                <div class=\"modal-header\"> 
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"> &times; </button> 
                    <h4 class=\"modal-title\" id=\"myModalLabel\"></h4> 
                </div> 
                <div class=\"modal-body id=\"affichage2\"\">

                </div> 
                <div class=\"modal-footer\"> 
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"> Fermer </button> 
                    <button type=\"button\" class=\"btn btn-primary\"> Enregistrer </button> 
                </div> 
            </div>
        </div>
    </div>

    <!--<h2>Example of using methods of Modal Plugin</h2>
    <button class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\"> Launch demo modal </button>
    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\"> 
        <div class=\"modal-dialog\"> 
            <div class=\"modal-content\"> 
                <div class=\"modal-header\"> 
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×
                        <a href=\"#\" id=\"add_x\" class=\"btn btn-default\">Ajouter x</a><br>
                    </button> 
                    <h4 class=\"modal-title\" id=\"myModalLabel\"> This Modal title </h4> 
                </div> 
                <div class=\"modal-body\"> Press ESC button to exit. </div> 
                <div class=\"modal-footer\"> 
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close </button> 
                    <button type=\"button\" class=\"btn btn-primary\"> Submit changes </button> 
                </div> 
            </div>
        </div>
    </div>-->


        <a href=\"#\" id=\"add_x\" class=\"btn btn-default\">Ajouter x</a><br>
        <div id=\"affichage2\"></div>

    <script src=\"{{asset('js/jquery.min.js')}}\"></script>
    <script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
    <script>
        \$(function()
        {
            \$('#add_x').click(
            function(e)
            {
                var url1=\"{{path('transport_new')}}\";
                alert(url1);
                \$('#affichage2').load(url1);
                e.preventDefault();
                
            });
        });
    </script>
{% endblock %}
", "transport/index.html.twig", "C:\\wamp\\www\\projet_narindra\\travel2\\app\\Resources\\views\\transport\\index.html.twig");
    }
}
