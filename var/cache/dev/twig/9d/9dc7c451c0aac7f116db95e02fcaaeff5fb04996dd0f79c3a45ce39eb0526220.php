<?php

/* transport/edit.html.twig */
class __TwigTemplate_b263c01526b6cb4cee886089305bbfe2628c598c0943f1540f05f4a999f6eeab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "transport/edit.html.twig", 1);
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
        $__internal_73d202c33b1acfde0220fb7586e06779d5ea150c5bfd34727ec9533b174e4d50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73d202c33b1acfde0220fb7586e06779d5ea150c5bfd34727ec9533b174e4d50->enter($__internal_73d202c33b1acfde0220fb7586e06779d5ea150c5bfd34727ec9533b174e4d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transport/edit.html.twig"));

        $__internal_fb356442c2c35a4dda4d0f6879f4e5e31a96cd48b9b1f93c9c0c3bc7cc9f7a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb356442c2c35a4dda4d0f6879f4e5e31a96cd48b9b1f93c9c0c3bc7cc9f7a15->enter($__internal_fb356442c2c35a4dda4d0f6879f4e5e31a96cd48b9b1f93c9c0c3bc7cc9f7a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transport/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73d202c33b1acfde0220fb7586e06779d5ea150c5bfd34727ec9533b174e4d50->leave($__internal_73d202c33b1acfde0220fb7586e06779d5ea150c5bfd34727ec9533b174e4d50_prof);

        
        $__internal_fb356442c2c35a4dda4d0f6879f4e5e31a96cd48b9b1f93c9c0c3bc7cc9f7a15->leave($__internal_fb356442c2c35a4dda4d0f6879f4e5e31a96cd48b9b1f93c9c0c3bc7cc9f7a15_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_188a2a5c0124cfda1bb798f83145dfe8800f8dfdc67d725577bd567db447dd06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_188a2a5c0124cfda1bb798f83145dfe8800f8dfdc67d725577bd567db447dd06->enter($__internal_188a2a5c0124cfda1bb798f83145dfe8800f8dfdc67d725577bd567db447dd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b6760b28d40965a2249fd14c78b741efcccc45ff47f2beea4860ed13acdd846a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6760b28d40965a2249fd14c78b741efcccc45ff47f2beea4860ed13acdd846a->enter($__internal_b6760b28d40965a2249fd14c78b741efcccc45ff47f2beea4860ed13acdd846a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "     <div class=\"container\">
        <div class=\"row\">
            <div class=\"panel panel-default\"> 
                <div class=\"panel-heading\"> 
                    <span class=\"panel-title\"><h1>Modification Transport</h1></span> 
                </div> 
                <div class=\"panel-body\">
                    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                        <div class=\"form-group\">
                             ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "transit", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Transit"));
        echo "
                             ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "transit", array()), 'errors');
        echo "
                             <div class=\"col-sm-4\">
                                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "transit", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                             ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "comission", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Comission"));
        echo "
                             ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "comission", array()), 'errors');
        echo "
                             <div class=\"col-sm-4\">
                                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "comission", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                             ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateTransport", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Date de Transport"));
        echo "
                             <div class=\"col-sm-4\">
                                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dateTransport", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "client", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Client"));
        echo "
                            <div class=\"col-sm-4\">
                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "client", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                             </div>
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "camion", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Camion"));
        echo "
                            <div class=\"col-sm-4\">
                                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "camion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                             </div>
                        </div>
                        <div class=\"col-sm-offset-2\">
                            <input type=\"submit\" value=\"Modifier\" class=\"btn btn-default\"/>
                            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transport_index");
        echo "\" class=\"btn btn-default\">Retourner à la liste</a>
                        </div>
                        <!--";
        // line 48
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                        ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start', array("attr" => array("class" => "form-inline")));
        echo "
                            <input type=\"submit\" value=\"Delete\" class=\"btn btn-default\">
                        ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "-->
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_b6760b28d40965a2249fd14c78b741efcccc45ff47f2beea4860ed13acdd846a->leave($__internal_b6760b28d40965a2249fd14c78b741efcccc45ff47f2beea4860ed13acdd846a_prof);

        
        $__internal_188a2a5c0124cfda1bb798f83145dfe8800f8dfdc67d725577bd567db447dd06->leave($__internal_188a2a5c0124cfda1bb798f83145dfe8800f8dfdc67d725577bd567db447dd06_prof);

    }

    public function getTemplateName()
    {
        return "transport/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 51,  141 => 49,  137 => 48,  132 => 46,  124 => 41,  119 => 39,  112 => 35,  107 => 33,  100 => 29,  95 => 27,  88 => 23,  83 => 21,  79 => 20,  72 => 16,  67 => 14,  63 => 13,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
                    <span class=\"panel-title\"><h1>Modification Transport</h1></span> 
                </div> 
                <div class=\"panel-body\">
                    {{ form_start(edit_form, {'attr': {'class': 'form-horizontal'}}) }}
                        <div class=\"form-group\">
                             {{ form_label(edit_form.transit, \"Transit\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
                             {{ form_errors(edit_form.transit) }}
                             <div class=\"col-sm-4\">
                                {{ form_widget(edit_form.transit, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"form-group\">
                             {{ form_label(edit_form.comission, \"Comission\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
                             {{ form_errors(edit_form.comission) }}
                             <div class=\"col-sm-4\">
                                {{ form_widget(edit_form.comission, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"form-group\">
                             {{ form_label(edit_form.dateTransport, \"Date de Transport\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
                             <div class=\"col-sm-4\">
                                {{ form_widget(edit_form.dateTransport) }}
                            </div>
                        </div>
                        <div class=\"form-group\">
                            {{ form_label(edit_form.client, \"Client\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
                            <div class=\"col-sm-4\">
                                {{ form_widget(edit_form.client, {'attr': {'class': 'form-control'}}) }}
                             </div>
                        </div>
                        <div class=\"form-group\">
                            {{ form_label(edit_form.camion, \"Camion\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
                            <div class=\"col-sm-4\">
                                {{ form_widget(edit_form.camion, {'attr': {'class': 'form-control'}}) }}
                             </div>
                        </div>
                        <div class=\"col-sm-offset-2\">
                            <input type=\"submit\" value=\"Modifier\" class=\"btn btn-default\"/>
                            <a href=\"{{ path('transport_index') }}\" class=\"btn btn-default\">Retourner à la liste</a>
                        </div>
                        <!--{{ form_end(edit_form) }}
                        {{ form_start(delete_form, {'attr': {'class': 'form-inline'}}) }}
                            <input type=\"submit\" value=\"Delete\" class=\"btn btn-default\">
                        {{ form_end(delete_form) }}-->
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "transport/edit.html.twig", "C:\\wamp\\www\\projet_narindra\\travel2\\app\\Resources\\views\\transport\\edit.html.twig");
    }
}
