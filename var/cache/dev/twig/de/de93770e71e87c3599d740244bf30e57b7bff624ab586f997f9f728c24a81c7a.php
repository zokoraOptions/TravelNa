<?php

/* camion/edit.html.twig */
class __TwigTemplate_81c7a9c65aa017335f711bdc5ab562e165ace2e3653bbd576fb1f1e73fafc0d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "camion/edit.html.twig", 1);
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
        $__internal_64f8dbfe46341980c7b675fcd8ba2ceac3f71926c27f68b8540035fe64a3d4d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64f8dbfe46341980c7b675fcd8ba2ceac3f71926c27f68b8540035fe64a3d4d0->enter($__internal_64f8dbfe46341980c7b675fcd8ba2ceac3f71926c27f68b8540035fe64a3d4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "camion/edit.html.twig"));

        $__internal_2d3f0c62d1efe63ad9e919dd8c6aa0b8aa32efd223689bccebeb3462ca1e42fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d3f0c62d1efe63ad9e919dd8c6aa0b8aa32efd223689bccebeb3462ca1e42fe->enter($__internal_2d3f0c62d1efe63ad9e919dd8c6aa0b8aa32efd223689bccebeb3462ca1e42fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "camion/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64f8dbfe46341980c7b675fcd8ba2ceac3f71926c27f68b8540035fe64a3d4d0->leave($__internal_64f8dbfe46341980c7b675fcd8ba2ceac3f71926c27f68b8540035fe64a3d4d0_prof);

        
        $__internal_2d3f0c62d1efe63ad9e919dd8c6aa0b8aa32efd223689bccebeb3462ca1e42fe->leave($__internal_2d3f0c62d1efe63ad9e919dd8c6aa0b8aa32efd223689bccebeb3462ca1e42fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_44008be3cee9d77ad3acd9aacb8f2efda790ca54c4bd5a8f67cdf54932b44620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44008be3cee9d77ad3acd9aacb8f2efda790ca54c4bd5a8f67cdf54932b44620->enter($__internal_44008be3cee9d77ad3acd9aacb8f2efda790ca54c4bd5a8f67cdf54932b44620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7dae511203f59188f0693f1900ed838aabe7a82e4f0558bfe4e147f19a7711b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dae511203f59188f0693f1900ed838aabe7a82e4f0558bfe4e147f19a7711b4->enter($__internal_7dae511203f59188f0693f1900ed838aabe7a82e4f0558bfe4e147f19a7711b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"panel panel-default\"> 
                <div class=\"panel-heading\"> 
                    <span class=\"panel-title\"><h1>Modification Camion</h1></span> 
                </div> 
                <div class=\"panel-body\">
                    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                        <div class=\"form-group\">
                             ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "plaqueImmatriculation", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nom"));
        echo "
                             ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "plaqueImmatriculation", array()), 'errors');
        echo "
                             <div class=\"col-sm-4\">
                                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "plaqueImmatriculation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                             <div class=\"col-sm-offset-2\">
                                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tierce", array()), 'widget');
        echo "
                                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tierce", array()), 'label');
        echo "
                                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tierce", array()), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                             ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "conducteur", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nom"));
        echo "
                             ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "conducteur", array()), 'errors');
        echo "
                             <div class=\"col-sm-4\">
                                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "conducteur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-offset-2\">
                            <input type=\"submit\" value=\"Modifier\" class=\"btn btn-default\"/>
                            <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("camion_index");
        echo "\" class=\"btn btn-default\">Retourner à la liste</a>
                        </div>
                    ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_7dae511203f59188f0693f1900ed838aabe7a82e4f0558bfe4e147f19a7711b4->leave($__internal_7dae511203f59188f0693f1900ed838aabe7a82e4f0558bfe4e147f19a7711b4_prof);

        
        $__internal_44008be3cee9d77ad3acd9aacb8f2efda790ca54c4bd5a8f67cdf54932b44620->leave($__internal_44008be3cee9d77ad3acd9aacb8f2efda790ca54c4bd5a8f67cdf54932b44620_prof);

    }

    public function getTemplateName()
    {
        return "camion/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 37,  112 => 35,  104 => 30,  99 => 28,  95 => 27,  88 => 23,  84 => 22,  80 => 21,  72 => 16,  67 => 14,  63 => 13,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
                    <span class=\"panel-title\"><h1>Modification Camion</h1></span> 
                </div> 
                <div class=\"panel-body\">
                    {{ form_start(edit_form, {'attr': {'class': 'form-horizontal'}}) }}
                        <div class=\"form-group\">
                             {{ form_label(edit_form.plaqueImmatriculation, \"Nom\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
                             {{ form_errors(edit_form.plaqueImmatriculation) }}
                             <div class=\"col-sm-4\">
                                {{ form_widget(edit_form.plaqueImmatriculation, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"form-group\">
                             <div class=\"col-sm-offset-2\">
                                {{ form_widget(edit_form.tierce) }}
                                {{ form_label(edit_form.tierce) }}
                                {{ form_errors(edit_form.tierce) }}
                            </div>
                        </div>
                        <div class=\"form-group\">
                             {{ form_label(edit_form.conducteur, \"Nom\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
                             {{ form_errors(edit_form.conducteur) }}
                             <div class=\"col-sm-4\">
                                {{ form_widget(edit_form.conducteur, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"col-sm-offset-2\">
                            <input type=\"submit\" value=\"Modifier\" class=\"btn btn-default\"/>
                            <a href=\"{{ path('camion_index') }}\" class=\"btn btn-default\">Retourner à la liste</a>
                        </div>
                    {{ form_end(edit_form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "camion/edit.html.twig", "C:\\wamp\\www\\projet_narindra\\travel2\\app\\Resources\\views\\camion\\edit.html.twig");
    }
}
