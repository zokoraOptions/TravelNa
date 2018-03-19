<?php

/* transport/show.html.twig */
class __TwigTemplate_26d9c5672af96ca6e951d0fc772d02b94174307a428c733ad53c8debf0aafd82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "transport/show.html.twig", 1);
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
        $__internal_60fc8b3e0ad14c2eea052476d91c5eba96bdf64fd9758270cfb09a66171fd1e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60fc8b3e0ad14c2eea052476d91c5eba96bdf64fd9758270cfb09a66171fd1e4->enter($__internal_60fc8b3e0ad14c2eea052476d91c5eba96bdf64fd9758270cfb09a66171fd1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transport/show.html.twig"));

        $__internal_f197fc17a348a6e05779583d5648c633e386f7617395cadee32825e62f184ac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f197fc17a348a6e05779583d5648c633e386f7617395cadee32825e62f184ac8->enter($__internal_f197fc17a348a6e05779583d5648c633e386f7617395cadee32825e62f184ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transport/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60fc8b3e0ad14c2eea052476d91c5eba96bdf64fd9758270cfb09a66171fd1e4->leave($__internal_60fc8b3e0ad14c2eea052476d91c5eba96bdf64fd9758270cfb09a66171fd1e4_prof);

        
        $__internal_f197fc17a348a6e05779583d5648c633e386f7617395cadee32825e62f184ac8->leave($__internal_f197fc17a348a6e05779583d5648c633e386f7617395cadee32825e62f184ac8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2bc8b061feea0d13b70b2b5f7fcf42c7072f250b39a181d55d5cb91aaa6b6b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2bc8b061feea0d13b70b2b5f7fcf42c7072f250b39a181d55d5cb91aaa6b6b3->enter($__internal_f2bc8b061feea0d13b70b2b5f7fcf42c7072f250b39a181d55d5cb91aaa6b6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0940e3fba9b7c3a7a67bd832d138be970a10e7e9f85a8a4a5d2b06b59f13ce28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0940e3fba9b7c3a7a67bd832d138be970a10e7e9f85a8a4a5d2b06b59f13ce28->enter($__internal_0940e3fba9b7c3a7a67bd832d138be970a10e7e9f85a8a4a5d2b06b59f13ce28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"panel panel-default\"> 
                <div class=\"panel-heading\"> 
                    <span class=\"panel-title\"><h1>Transport</h1></span> 
                </div> 
                <div class=\"panel-body\"></div> 
                <table class=\"table table-bordered\">
                    <tbody class=\"text-center\">
                        <tr>
                            <th>Transit</th>
                            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transport"]) ? $context["transport"] : $this->getContext($context, "transport")), "transit", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Comission</th>
                            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transport"]) ? $context["transport"] : $this->getContext($context, "transport")), "comission", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Date de transport</th>
                            <td>";
        // line 23
        if ($this->getAttribute((isset($context["transport"]) ? $context["transport"] : $this->getContext($context, "transport")), "dateTransport", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["transport"]) ? $context["transport"] : $this->getContext($context, "transport")), "dateTransport", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
                        </tr>
                        <tr>
                            <th>Client</th>
                            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["transport"]) ? $context["transport"] : $this->getContext($context, "transport")), "client", array()), "nom", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Camion</th>
                            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["transport"]) ? $context["transport"] : $this->getContext($context, "transport")), "camion", array()), "plaqueImmatriculation", array()), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transport_index");
        echo "\" class=\"btn btn-default\">Retourner à la liste</a>
            </div>
        </div>
    </div>
";
        
        $__internal_0940e3fba9b7c3a7a67bd832d138be970a10e7e9f85a8a4a5d2b06b59f13ce28->leave($__internal_0940e3fba9b7c3a7a67bd832d138be970a10e7e9f85a8a4a5d2b06b59f13ce28_prof);

        
        $__internal_f2bc8b061feea0d13b70b2b5f7fcf42c7072f250b39a181d55d5cb91aaa6b6b3->leave($__internal_f2bc8b061feea0d13b70b2b5f7fcf42c7072f250b39a181d55d5cb91aaa6b6b3_prof);

    }

    public function getTemplateName()
    {
        return "transport/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 37,  92 => 31,  85 => 27,  76 => 23,  69 => 19,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
                    <span class=\"panel-title\"><h1>Transport</h1></span> 
                </div> 
                <div class=\"panel-body\"></div> 
                <table class=\"table table-bordered\">
                    <tbody class=\"text-center\">
                        <tr>
                            <th>Transit</th>
                            <td>{{ transport.transit }}</td>
                        </tr>
                        <tr>
                            <th>Comission</th>
                            <td>{{ transport.comission }}</td>
                        </tr>
                        <tr>
                            <th>Date de transport</th>
                            <td>{% if transport.dateTransport %}{{ transport.dateTransport|date('Y-m-d') }}{% endif %}</td>
                        </tr>
                        <tr>
                            <th>Client</th>
                            <td>{{ transport.client.nom }}</td>
                        </tr>
                        <tr>
                            <th>Camion</th>
                            <td>{{ transport.camion.plaqueImmatriculation }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <a href=\"{{ path('transport_index') }}\" class=\"btn btn-default\">Retourner à la liste</a>
            </div>
        </div>
    </div>
{% endblock %}
", "transport/show.html.twig", "C:\\wamp\\www\\projet_narindra\\travel2\\app\\Resources\\views\\transport\\show.html.twig");
    }
}
