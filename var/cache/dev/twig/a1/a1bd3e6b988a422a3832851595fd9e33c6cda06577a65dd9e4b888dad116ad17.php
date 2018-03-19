<?php

/* conducteur/show.html.twig */
class __TwigTemplate_f813f9ab399460d7e01fa75acc64eee65190c988e39a644047a53140e88169cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "conducteur/show.html.twig", 1);
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
        $__internal_e45f5c5058bd13b378fdd8081cef2fa5827f5f42361a91ba4b340282f872e2f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e45f5c5058bd13b378fdd8081cef2fa5827f5f42361a91ba4b340282f872e2f9->enter($__internal_e45f5c5058bd13b378fdd8081cef2fa5827f5f42361a91ba4b340282f872e2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "conducteur/show.html.twig"));

        $__internal_e8f8b3a5b41ff2a5027c430474e2df2eff9dc11bd91a640f8f4e8decb6fd1ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f8b3a5b41ff2a5027c430474e2df2eff9dc11bd91a640f8f4e8decb6fd1ca8->enter($__internal_e8f8b3a5b41ff2a5027c430474e2df2eff9dc11bd91a640f8f4e8decb6fd1ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "conducteur/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e45f5c5058bd13b378fdd8081cef2fa5827f5f42361a91ba4b340282f872e2f9->leave($__internal_e45f5c5058bd13b378fdd8081cef2fa5827f5f42361a91ba4b340282f872e2f9_prof);

        
        $__internal_e8f8b3a5b41ff2a5027c430474e2df2eff9dc11bd91a640f8f4e8decb6fd1ca8->leave($__internal_e8f8b3a5b41ff2a5027c430474e2df2eff9dc11bd91a640f8f4e8decb6fd1ca8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd86e9610c8469d9edd7258eae555cef86d32fbc69b4aa4f50f8900b3cc508ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd86e9610c8469d9edd7258eae555cef86d32fbc69b4aa4f50f8900b3cc508ec->enter($__internal_cd86e9610c8469d9edd7258eae555cef86d32fbc69b4aa4f50f8900b3cc508ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ab3cd0e9366aeaa4ebf827059538cf68072f60db15d6fb15b9991e7ceda9fc05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab3cd0e9366aeaa4ebf827059538cf68072f60db15d6fb15b9991e7ceda9fc05->enter($__internal_ab3cd0e9366aeaa4ebf827059538cf68072f60db15d6fb15b9991e7ceda9fc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"panel panel-default\"> 
                <div class=\"panel-heading\"> 
                    <span class=\"panel-title\"><h1>Conducteur</h1></span> 
                </div> 
                <div class=\"panel-body\"></div> 
                <table class=\"table table-bordered\">
                    <tbody class=\"text-center\">
                        <tr>
                            <th>Nom</th>
                            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["conducteur"]) ? $context["conducteur"] : $this->getContext($context, "conducteur")), "nom", array()), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conducteur_index");
        echo "\" class=\"btn btn-default\">Retourner à la liste</a>
            </div>
        </div>
    </div>
";
        
        $__internal_ab3cd0e9366aeaa4ebf827059538cf68072f60db15d6fb15b9991e7ceda9fc05->leave($__internal_ab3cd0e9366aeaa4ebf827059538cf68072f60db15d6fb15b9991e7ceda9fc05_prof);

        
        $__internal_cd86e9610c8469d9edd7258eae555cef86d32fbc69b4aa4f50f8900b3cc508ec->leave($__internal_cd86e9610c8469d9edd7258eae555cef86d32fbc69b4aa4f50f8900b3cc508ec_prof);

    }

    public function getTemplateName()
    {
        return "conducteur/show.html.twig";
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
                    <span class=\"panel-title\"><h1>Conducteur</h1></span> 
                </div> 
                <div class=\"panel-body\"></div> 
                <table class=\"table table-bordered\">
                    <tbody class=\"text-center\">
                        <tr>
                            <th>Nom</th>
                            <td>{{ conducteur.nom }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <a href=\"{{ path('conducteur_index') }}\" class=\"btn btn-default\">Retourner à la liste</a>
            </div>
        </div>
    </div>
{% endblock %}
", "conducteur/show.html.twig", "C:\\wamp\\www\\projet_narindra\\travel2\\app\\Resources\\views\\conducteur\\show.html.twig");
    }
}
