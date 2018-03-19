<?php

/* camion/show.html.twig */
class __TwigTemplate_22036237c582faf22b130106254632e5152477176ec0673b828fa1afe4e9e396 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "camion/show.html.twig", 1);
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
        $__internal_9454ce10adf795d09520250e873e519b2ace25c94748546d63d4f0c62843b308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9454ce10adf795d09520250e873e519b2ace25c94748546d63d4f0c62843b308->enter($__internal_9454ce10adf795d09520250e873e519b2ace25c94748546d63d4f0c62843b308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "camion/show.html.twig"));

        $__internal_585a8824b45deac801a3b25d53c081982362902e4273ec8caeec2f719088fb43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585a8824b45deac801a3b25d53c081982362902e4273ec8caeec2f719088fb43->enter($__internal_585a8824b45deac801a3b25d53c081982362902e4273ec8caeec2f719088fb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "camion/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9454ce10adf795d09520250e873e519b2ace25c94748546d63d4f0c62843b308->leave($__internal_9454ce10adf795d09520250e873e519b2ace25c94748546d63d4f0c62843b308_prof);

        
        $__internal_585a8824b45deac801a3b25d53c081982362902e4273ec8caeec2f719088fb43->leave($__internal_585a8824b45deac801a3b25d53c081982362902e4273ec8caeec2f719088fb43_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b2943e2b8483a05e11c37e858879d8365a873342917bbecda827b8814546b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b2943e2b8483a05e11c37e858879d8365a873342917bbecda827b8814546b6a->enter($__internal_5b2943e2b8483a05e11c37e858879d8365a873342917bbecda827b8814546b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7fa2470acdb5cd8cf7a750310d936ca5e126cefd3161be708e07fe9715511434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa2470acdb5cd8cf7a750310d936ca5e126cefd3161be708e07fe9715511434->enter($__internal_7fa2470acdb5cd8cf7a750310d936ca5e126cefd3161be708e07fe9715511434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"panel panel-default\"> 
                <div class=\"panel-heading\"> 
                    <span class=\"panel-title\"><h1>Client</h1></span> 
                </div> 
                <div class=\"panel-body\"></div> 
                <table class=\"table table-bordered\">
                    <tbody class=\"text-center\">
                        <tr>
                            <th>Plaque d'immatriculation</th>
                            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["camion"]) ? $context["camion"] : $this->getContext($context, "camion")), "plaqueImmatriculation", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Tierce</th>
                            <td>";
        // line 19
        if ($this->getAttribute((isset($context["camion"]) ? $context["camion"] : $this->getContext($context, "camion")), "tierce", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
                        </tr>
                        <tr>
                            <th>Conducteur</th>
                            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["camion"]) ? $context["camion"] : $this->getContext($context, "camion")), "conducteur", array()), "nom", array()), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("camion_index");
        echo "\" class=\"btn btn-default\">Retourner à la liste</a>
            </div>
        </div>
    </div>
";
        
        $__internal_7fa2470acdb5cd8cf7a750310d936ca5e126cefd3161be708e07fe9715511434->leave($__internal_7fa2470acdb5cd8cf7a750310d936ca5e126cefd3161be708e07fe9715511434_prof);

        
        $__internal_5b2943e2b8483a05e11c37e858879d8365a873342917bbecda827b8814546b6a->leave($__internal_5b2943e2b8483a05e11c37e858879d8365a873342917bbecda827b8814546b6a_prof);

    }

    public function getTemplateName()
    {
        return "camion/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 29,  80 => 23,  69 => 19,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
                    <span class=\"panel-title\"><h1>Client</h1></span> 
                </div> 
                <div class=\"panel-body\"></div> 
                <table class=\"table table-bordered\">
                    <tbody class=\"text-center\">
                        <tr>
                            <th>Plaque d'immatriculation</th>
                            <td>{{ camion.plaqueImmatriculation }}</td>
                        </tr>
                        <tr>
                            <th>Tierce</th>
                            <td>{% if camion.tierce %}Yes{% else %}No{% endif %}</td>
                        </tr>
                        <tr>
                            <th>Conducteur</th>
                            <td>{{camion.conducteur.nom}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <a href=\"{{ path('camion_index') }}\" class=\"btn btn-default\">Retourner à la liste</a>
            </div>
        </div>
    </div>
{% endblock %}
", "camion/show.html.twig", "C:\\wamp\\www\\projet_narindra\\travel2\\app\\Resources\\views\\camion\\show.html.twig");
    }
}
