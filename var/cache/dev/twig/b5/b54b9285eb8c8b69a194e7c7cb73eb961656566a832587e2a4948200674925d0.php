<?php

/* client/show.html.twig */
class __TwigTemplate_c173009b1caf55339381b58de1f705def405973123e7644a4739b980110f1e8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/show.html.twig", 1);
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
        $__internal_4f9466482d8528f876c8d98ecacea9eafe0914bad64e786b955873dd69e53da3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f9466482d8528f876c8d98ecacea9eafe0914bad64e786b955873dd69e53da3->enter($__internal_4f9466482d8528f876c8d98ecacea9eafe0914bad64e786b955873dd69e53da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/show.html.twig"));

        $__internal_e2e977c73f623036945197db7461dee0fb494b38f58a645beadf5f2f228b4892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e977c73f623036945197db7461dee0fb494b38f58a645beadf5f2f228b4892->enter($__internal_e2e977c73f623036945197db7461dee0fb494b38f58a645beadf5f2f228b4892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f9466482d8528f876c8d98ecacea9eafe0914bad64e786b955873dd69e53da3->leave($__internal_4f9466482d8528f876c8d98ecacea9eafe0914bad64e786b955873dd69e53da3_prof);

        
        $__internal_e2e977c73f623036945197db7461dee0fb494b38f58a645beadf5f2f228b4892->leave($__internal_e2e977c73f623036945197db7461dee0fb494b38f58a645beadf5f2f228b4892_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8419123ba9c728f35a522020273f967f174b1e1d3347222a22642f4c41b23ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8419123ba9c728f35a522020273f967f174b1e1d3347222a22642f4c41b23ac8->enter($__internal_8419123ba9c728f35a522020273f967f174b1e1d3347222a22642f4c41b23ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f1928323decb1592b726d8d67a94091ca8eb497516c96f4b36ec821e8f50c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1928323decb1592b726d8d67a94091ca8eb497516c96f4b36ec821e8f50c0d->enter($__internal_0f1928323decb1592b726d8d67a94091ca8eb497516c96f4b36ec821e8f50c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                            <th>Nom</th>
                            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nom", array()), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_index");
        echo "\" class=\"btn btn-default\">Retourner à la liste</a>
            </div>
        </div>
    </div>
";
        
        $__internal_0f1928323decb1592b726d8d67a94091ca8eb497516c96f4b36ec821e8f50c0d->leave($__internal_0f1928323decb1592b726d8d67a94091ca8eb497516c96f4b36ec821e8f50c0d_prof);

        
        $__internal_8419123ba9c728f35a522020273f967f174b1e1d3347222a22642f4c41b23ac8->leave($__internal_8419123ba9c728f35a522020273f967f174b1e1d3347222a22642f4c41b23ac8_prof);

    }

    public function getTemplateName()
    {
        return "client/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 21,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
                            <th>Nom</th>
                            <td>{{ client.nom }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <a href=\"{{ path('client_index') }}\" class=\"btn btn-default\">Retourner à la liste</a>
            </div>
        </div>
    </div>
{% endblock %}
", "client/show.html.twig", "C:\\wamp\\www\\projet_narindra\\travel2\\app\\Resources\\views\\client\\show.html.twig");
    }
}
