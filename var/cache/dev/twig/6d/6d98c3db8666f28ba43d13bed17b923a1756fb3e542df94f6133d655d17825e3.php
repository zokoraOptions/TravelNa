<?php

/* conducteur/index.html.twig */
class __TwigTemplate_fc711a1ba4712d313eb1a0cc26834cf12932eb33b7ecdaab29843549560d53fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "conducteur/index.html.twig", 1);
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
        $__internal_d1233316ae317d1d1e4a9bf35c13dcda7fbba1b862bfe473dda6e8de0eee7f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1233316ae317d1d1e4a9bf35c13dcda7fbba1b862bfe473dda6e8de0eee7f83->enter($__internal_d1233316ae317d1d1e4a9bf35c13dcda7fbba1b862bfe473dda6e8de0eee7f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "conducteur/index.html.twig"));

        $__internal_e603657b21c3053d19e9a91a3cf235e0e7e408da02f9ef3aae2b095f498b71a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e603657b21c3053d19e9a91a3cf235e0e7e408da02f9ef3aae2b095f498b71a8->enter($__internal_e603657b21c3053d19e9a91a3cf235e0e7e408da02f9ef3aae2b095f498b71a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "conducteur/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1233316ae317d1d1e4a9bf35c13dcda7fbba1b862bfe473dda6e8de0eee7f83->leave($__internal_d1233316ae317d1d1e4a9bf35c13dcda7fbba1b862bfe473dda6e8de0eee7f83_prof);

        
        $__internal_e603657b21c3053d19e9a91a3cf235e0e7e408da02f9ef3aae2b095f498b71a8->leave($__internal_e603657b21c3053d19e9a91a3cf235e0e7e408da02f9ef3aae2b095f498b71a8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2af2ef9cc20cad9382213a8d1586f90066f4b76f383b3490a786af48e84e5f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af2ef9cc20cad9382213a8d1586f90066f4b76f383b3490a786af48e84e5f83->enter($__internal_2af2ef9cc20cad9382213a8d1586f90066f4b76f383b3490a786af48e84e5f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af21d9e35fb88aa446ebaf25566ce9430cecbdad2f5a1a0510866d0a27df59c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af21d9e35fb88aa446ebaf25566ce9430cecbdad2f5a1a0510866d0a27df59c1->enter($__internal_af21d9e35fb88aa446ebaf25566ce9430cecbdad2f5a1a0510866d0a27df59c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"panel panel-default\"> 
                <div class=\"panel-heading\"> 
                    <span class=\"panel-title\"><h1>Listes des Conducteurs</h1></span> 
                </div> 
                <div class=\"panel-body\"><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conducteur_new");
        echo "\" class=\"btn btn-default\">Ajouter un conducteur</a></div> 
                <table class=\"table table-bordered\"> 
                    <thead> 
                        <tr> 
                            <th class=\"text-center\">Nom</th>
                            <th class=\"text-center\">Actions</th>
                        </tr> 
                    </thead> 
                    <tbody class=\"text-center\">
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conducteurs"]) ? $context["conducteurs"] : $this->getContext($context, "conducteurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["conducteur"]) {
            // line 20
            echo "                            <tr>
                                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["conducteur"], "nom", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conducteur_show", array("id" => $this->getAttribute($context["conducteur"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">Voir</a>
                                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conducteur_edit", array("id" => $this->getAttribute($context["conducteur"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">Modifier</a>
                                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conducteur_suppression", array("id" => $this->getAttribute($context["conducteur"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">Supprimer</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conducteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_af21d9e35fb88aa446ebaf25566ce9430cecbdad2f5a1a0510866d0a27df59c1->leave($__internal_af21d9e35fb88aa446ebaf25566ce9430cecbdad2f5a1a0510866d0a27df59c1_prof);

        
        $__internal_2af2ef9cc20cad9382213a8d1586f90066f4b76f383b3490a786af48e84e5f83->leave($__internal_2af2ef9cc20cad9382213a8d1586f90066f4b76f383b3490a786af48e84e5f83_prof);

    }

    public function getTemplateName()
    {
        return "conducteur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 29,  89 => 25,  85 => 24,  81 => 23,  76 => 21,  73 => 20,  69 => 19,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
                    <span class=\"panel-title\"><h1>Listes des Conducteurs</h1></span> 
                </div> 
                <div class=\"panel-body\"><a href=\"{{ path('conducteur_new') }}\" class=\"btn btn-default\">Ajouter un conducteur</a></div> 
                <table class=\"table table-bordered\"> 
                    <thead> 
                        <tr> 
                            <th class=\"text-center\">Nom</th>
                            <th class=\"text-center\">Actions</th>
                        </tr> 
                    </thead> 
                    <tbody class=\"text-center\">
                        {% for conducteur in conducteurs %}
                            <tr>
                                <td>{{ conducteur.nom }}</td>
                                <td>
                                    <a href=\"{{ path('conducteur_show', { 'id': conducteur.id }) }}\" class=\"btn btn-default\">Voir</a>
                                    <a href=\"{{ path('conducteur_edit', { 'id': conducteur.id }) }}\" class=\"btn btn-default\">Modifier</a>
                                    <a href=\"{{ path('conducteur_suppression', { 'id': conducteur.id }) }}\" class=\"btn btn-default\">Supprimer</a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}
", "conducteur/index.html.twig", "C:\\wamp\\www\\projet_narindra\\travel2\\app\\Resources\\views\\conducteur\\index.html.twig");
    }
}
