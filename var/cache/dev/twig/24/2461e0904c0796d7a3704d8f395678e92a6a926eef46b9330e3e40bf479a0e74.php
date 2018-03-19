<?php

/* camion/index.html.twig */
class __TwigTemplate_b4a1fd593e706dd57816866f11781894c96255e33d9cfb0ef3295efb88886340 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "camion/index.html.twig", 1);
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
        $__internal_7a20787fd866bfbb41c4aa18b55d879750e013221623c3dda555a71b6ee9503f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a20787fd866bfbb41c4aa18b55d879750e013221623c3dda555a71b6ee9503f->enter($__internal_7a20787fd866bfbb41c4aa18b55d879750e013221623c3dda555a71b6ee9503f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "camion/index.html.twig"));

        $__internal_19195417bd5632ac22f6889e60267ef2a446e3ced77fc12f59d8f7485ccdba64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19195417bd5632ac22f6889e60267ef2a446e3ced77fc12f59d8f7485ccdba64->enter($__internal_19195417bd5632ac22f6889e60267ef2a446e3ced77fc12f59d8f7485ccdba64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "camion/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a20787fd866bfbb41c4aa18b55d879750e013221623c3dda555a71b6ee9503f->leave($__internal_7a20787fd866bfbb41c4aa18b55d879750e013221623c3dda555a71b6ee9503f_prof);

        
        $__internal_19195417bd5632ac22f6889e60267ef2a446e3ced77fc12f59d8f7485ccdba64->leave($__internal_19195417bd5632ac22f6889e60267ef2a446e3ced77fc12f59d8f7485ccdba64_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1f099431b4e3e4c3ba1b0d6786103cd5a5e1f4e08386d42625cdc39fec0d672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f099431b4e3e4c3ba1b0d6786103cd5a5e1f4e08386d42625cdc39fec0d672->enter($__internal_b1f099431b4e3e4c3ba1b0d6786103cd5a5e1f4e08386d42625cdc39fec0d672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_be28d018d8b2993fc5a57fb080d663c0440ee162d80617ed5c2b8ae6b0461cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be28d018d8b2993fc5a57fb080d663c0440ee162d80617ed5c2b8ae6b0461cb3->enter($__internal_be28d018d8b2993fc5a57fb080d663c0440ee162d80617ed5c2b8ae6b0461cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"panel panel-default\"> 
                <div class=\"panel-heading\"> 
                    <span class=\"panel-title\"><h1>Listes des Camions</h1></span> 
                </div> 
                <div class=\"panel-body\"><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("camion_new");
        echo "\" class=\"btn btn-default\">Ajouter un camion</a></div> 
                <table class=\"table table-bordered\"> 
                    <thead> 
                        <tr> 
                            <th class=\"text-center\">Plaque d'immatriculation</th>
                            <th class=\"text-center\">Tierce</th>
                            <th class=\"text-center\">Conducteur</th>
                            <th class=\"text-center\">Actions</th>
                        </tr> 
                    </thead> 
                    <tbody class=\"text-center\">
                        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["camions"]) ? $context["camions"] : $this->getContext($context, "camions")));
        foreach ($context['_seq'] as $context["_key"] => $context["camion"]) {
            // line 22
            echo "                            <tr>
                                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["camion"], "plaqueImmatriculation", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 24
            if ($this->getAttribute($context["camion"], "tierce", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                                 <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["camion"], "conducteur", array()), "nom", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("camion_show", array("id" => $this->getAttribute($context["camion"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">Voir</a>
                                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("camion_edit", array("id" => $this->getAttribute($context["camion"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">Modifier</a>
                                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("camion_suppression", array("id" => $this->getAttribute($context["camion"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">Supprimer</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['camion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_be28d018d8b2993fc5a57fb080d663c0440ee162d80617ed5c2b8ae6b0461cb3->leave($__internal_be28d018d8b2993fc5a57fb080d663c0440ee162d80617ed5c2b8ae6b0461cb3_prof);

        
        $__internal_b1f099431b4e3e4c3ba1b0d6786103cd5a5e1f4e08386d42625cdc39fec0d672->leave($__internal_b1f099431b4e3e4c3ba1b0d6786103cd5a5e1f4e08386d42625cdc39fec0d672_prof);

    }

    public function getTemplateName()
    {
        return "camion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 33,  103 => 29,  99 => 28,  95 => 27,  90 => 25,  82 => 24,  78 => 23,  75 => 22,  71 => 21,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
                    <span class=\"panel-title\"><h1>Listes des Camions</h1></span> 
                </div> 
                <div class=\"panel-body\"><a href=\"{{ path('camion_new') }}\" class=\"btn btn-default\">Ajouter un camion</a></div> 
                <table class=\"table table-bordered\"> 
                    <thead> 
                        <tr> 
                            <th class=\"text-center\">Plaque d'immatriculation</th>
                            <th class=\"text-center\">Tierce</th>
                            <th class=\"text-center\">Conducteur</th>
                            <th class=\"text-center\">Actions</th>
                        </tr> 
                    </thead> 
                    <tbody class=\"text-center\">
                        {% for camion in camions %}
                            <tr>
                                <td>{{ camion.plaqueImmatriculation }}</td>
                                <td>{% if camion.tierce %}Yes{% else %}No{% endif %}</td>
                                 <td>{{ camion.conducteur.nom }}</td>
                                <td>
                                    <a href=\"{{ path('camion_show', { 'id': camion.id }) }}\" class=\"btn btn-default\">Voir</a>
                                    <a href=\"{{ path('camion_edit', { 'id': camion.id }) }}\" class=\"btn btn-default\">Modifier</a>
                                    <a href=\"{{ path('camion_suppression', { 'id': camion.id }) }}\" class=\"btn btn-default\">Supprimer</a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}
", "camion/index.html.twig", "C:\\wamp\\www\\projet_narindra\\travel2\\app\\Resources\\views\\camion\\index.html.twig");
    }
}
