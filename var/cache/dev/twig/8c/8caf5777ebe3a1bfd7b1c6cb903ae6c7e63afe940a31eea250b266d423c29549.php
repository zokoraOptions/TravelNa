<?php

/* client/index.html.twig */
class __TwigTemplate_ac6dde54bf42be1ca4ca02c8eb7b0b72783717c931ca071c0909ae9709c40aeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/index.html.twig", 1);
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
        $__internal_a4acb1a046dfc3d4498bf55f2cc700e02eb82f547dcb7470017e9670b6b2dfbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4acb1a046dfc3d4498bf55f2cc700e02eb82f547dcb7470017e9670b6b2dfbd->enter($__internal_a4acb1a046dfc3d4498bf55f2cc700e02eb82f547dcb7470017e9670b6b2dfbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $__internal_2c7fe6c6e721aa25c2f1eb589189964ab0ca332b3a3743b249319c9059df7927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c7fe6c6e721aa25c2f1eb589189964ab0ca332b3a3743b249319c9059df7927->enter($__internal_2c7fe6c6e721aa25c2f1eb589189964ab0ca332b3a3743b249319c9059df7927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4acb1a046dfc3d4498bf55f2cc700e02eb82f547dcb7470017e9670b6b2dfbd->leave($__internal_a4acb1a046dfc3d4498bf55f2cc700e02eb82f547dcb7470017e9670b6b2dfbd_prof);

        
        $__internal_2c7fe6c6e721aa25c2f1eb589189964ab0ca332b3a3743b249319c9059df7927->leave($__internal_2c7fe6c6e721aa25c2f1eb589189964ab0ca332b3a3743b249319c9059df7927_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c80db7639c8e505a86a7baf709a1bd415c95b72f0404e34e752529916e069e1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c80db7639c8e505a86a7baf709a1bd415c95b72f0404e34e752529916e069e1f->enter($__internal_c80db7639c8e505a86a7baf709a1bd415c95b72f0404e34e752529916e069e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bddf19434080c5b204d4b10b4e0a981f9ddfed8a6b805242c923013161e15729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bddf19434080c5b204d4b10b4e0a981f9ddfed8a6b805242c923013161e15729->enter($__internal_bddf19434080c5b204d4b10b4e0a981f9ddfed8a6b805242c923013161e15729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"panel panel-default\"> 
                <div class=\"panel-heading\"> 
                    <span class=\"panel-title\"><h1>Listes des Clients</h1></span> 
                </div> 
                <div class=\"panel-body\"><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_new");
        echo "\" class=\"btn btn-default\">Ajouter un client</a></div> 
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
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 20
            echo "                            <tr>
                                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nom", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_show", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">Voir</a>
                                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_edit", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">Modifier</a>
                                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_suppression", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">Supprimer</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_bddf19434080c5b204d4b10b4e0a981f9ddfed8a6b805242c923013161e15729->leave($__internal_bddf19434080c5b204d4b10b4e0a981f9ddfed8a6b805242c923013161e15729_prof);

        
        $__internal_c80db7639c8e505a86a7baf709a1bd415c95b72f0404e34e752529916e069e1f->leave($__internal_c80db7639c8e505a86a7baf709a1bd415c95b72f0404e34e752529916e069e1f_prof);

    }

    public function getTemplateName()
    {
        return "client/index.html.twig";
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
                    <span class=\"panel-title\"><h1>Listes des Clients</h1></span> 
                </div> 
                <div class=\"panel-body\"><a href=\"{{ path('client_new') }}\" class=\"btn btn-default\">Ajouter un client</a></div> 
                <table class=\"table table-bordered\"> 
                    <thead> 
                        <tr> 
                            <th class=\"text-center\">Nom</th>
                            <th class=\"text-center\">Actions</th>
                        </tr> 
                    </thead> 
                    <tbody class=\"text-center\">
                        {% for client in clients %}
                            <tr>
                                <td>{{ client.nom }}</td>
                                <td>
                                    <a href=\"{{ path('client_show', { 'id': client.id }) }}\" class=\"btn btn-default\">Voir</a>
                                    <a href=\"{{ path('client_edit', { 'id': client.id }) }}\" class=\"btn btn-default\">Modifier</a>
                                    <a href=\"{{ path('client_suppression', { 'id': client.id }) }}\" class=\"btn btn-default\">Supprimer</a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}
", "client/index.html.twig", "C:\\wamp\\www\\projet_narindra\\travel2\\app\\Resources\\views\\client\\index.html.twig");
    }
}
