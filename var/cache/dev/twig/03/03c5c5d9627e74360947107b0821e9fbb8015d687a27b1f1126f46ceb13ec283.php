<?php

/* transport/new.html.twig */
class __TwigTemplate_b7c4b515d88176f7b6396180e7a2b2ed574f88406998d70f13077a91dca1c22a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "transport/new.html.twig", 1);
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
        $__internal_b5f6b12375d9880c46cbdd3c4e34f94542821c2a4a02aaa03ca53047ceb348db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5f6b12375d9880c46cbdd3c4e34f94542821c2a4a02aaa03ca53047ceb348db->enter($__internal_b5f6b12375d9880c46cbdd3c4e34f94542821c2a4a02aaa03ca53047ceb348db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transport/new.html.twig"));

        $__internal_336cc6a7c4483eca6b31fcea848843e1364fd97e989d858782cc744901f34b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336cc6a7c4483eca6b31fcea848843e1364fd97e989d858782cc744901f34b5a->enter($__internal_336cc6a7c4483eca6b31fcea848843e1364fd97e989d858782cc744901f34b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "transport/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5f6b12375d9880c46cbdd3c4e34f94542821c2a4a02aaa03ca53047ceb348db->leave($__internal_b5f6b12375d9880c46cbdd3c4e34f94542821c2a4a02aaa03ca53047ceb348db_prof);

        
        $__internal_336cc6a7c4483eca6b31fcea848843e1364fd97e989d858782cc744901f34b5a->leave($__internal_336cc6a7c4483eca6b31fcea848843e1364fd97e989d858782cc744901f34b5a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a43296f416721fb2847ae6fcc18a57dbdd1237db33a3e425149bb4cf45116c99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a43296f416721fb2847ae6fcc18a57dbdd1237db33a3e425149bb4cf45116c99->enter($__internal_a43296f416721fb2847ae6fcc18a57dbdd1237db33a3e425149bb4cf45116c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4ad2989df82f4a3bfaa02a96620bdcd0c473e19d9d1912183a0e4991b1224d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4ad2989df82f4a3bfaa02a96620bdcd0c473e19d9d1912183a0e4991b1224d5->enter($__internal_d4ad2989df82f4a3bfaa02a96620bdcd0c473e19d9d1912183a0e4991b1224d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"panel panel-default\"> 
                <div class=\"panel-heading\"> 
                    <span class=\"panel-title\"><h1>Ajout Transport</h1></span> 
                </div> 
                <div class=\"panel-body\">
                    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                        <div class=\"form-group\">
                             ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "transit", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Transit"));
        echo "
                             ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "transit", array()), 'errors');
        echo "
                             <div class=\"col-sm-4\">
                                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "transit", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                             ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comission", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Comission"));
        echo "
                             ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comission", array()), 'errors');
        echo "
                             <div class=\"col-sm-4\">
                                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "comission", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                             ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateTransport", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Date de Transport"));
        echo "
                             <div class=\"col-sm-4\">
                                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateTransport", array()), 'widget');
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Client"));
        echo "
                            <div class=\"col-sm-4\">
                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "client", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                             </div>
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "camion", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Camion"));
        echo "
                            <div class=\"col-sm-4\">
                                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "camion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                             </div>
                        </div>
                        <div class=\"col-sm-offset-2\">
                            <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-default\"/>
                            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transport_index");
        echo "\" class=\"btn btn-default\">Retourner à la liste</a>
                        </div>
                    ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_d4ad2989df82f4a3bfaa02a96620bdcd0c473e19d9d1912183a0e4991b1224d5->leave($__internal_d4ad2989df82f4a3bfaa02a96620bdcd0c473e19d9d1912183a0e4991b1224d5_prof);

        
        $__internal_a43296f416721fb2847ae6fcc18a57dbdd1237db33a3e425149bb4cf45116c99->leave($__internal_a43296f416721fb2847ae6fcc18a57dbdd1237db33a3e425149bb4cf45116c99_prof);

    }

    public function getTemplateName()
    {
        return "transport/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 48,  132 => 46,  124 => 41,  119 => 39,  112 => 35,  107 => 33,  100 => 29,  95 => 27,  88 => 23,  83 => 21,  79 => 20,  72 => 16,  67 => 14,  63 => 13,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
                    <span class=\"panel-title\"><h1>Ajout Transport</h1></span> 
                </div> 
                <div class=\"panel-body\">
                    {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
                        <div class=\"form-group\">
                             {{ form_label(form.transit, \"Transit\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
                             {{ form_errors(form.transit) }}
                             <div class=\"col-sm-4\">
                                {{ form_widget(form.transit, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"form-group\">
                             {{ form_label(form.comission, \"Comission\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
                             {{ form_errors(form.comission) }}
                             <div class=\"col-sm-4\">
                                {{ form_widget(form.comission, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"form-group\">
                             {{ form_label(form.dateTransport, \"Date de Transport\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
                             <div class=\"col-sm-4\">
                                {{ form_widget(form.dateTransport) }}
                            </div>
                        </div>
                        <div class=\"form-group\">
                            {{ form_label(form.client, \"Client\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
                            <div class=\"col-sm-4\">
                                {{ form_widget(form.client, {'attr': {'class': 'form-control'}}) }}
                             </div>
                        </div>
                        <div class=\"form-group\">
                            {{ form_label(form.camion, \"Camion\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
                            <div class=\"col-sm-4\">
                                {{ form_widget(form.camion, {'attr': {'class': 'form-control'}}) }}
                             </div>
                        </div>
                        <div class=\"col-sm-offset-2\">
                            <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-default\"/>
                            <a href=\"{{ path('transport_index') }}\" class=\"btn btn-default\">Retourner à la liste</a>
                        </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "transport/new.html.twig", "C:\\wamp\\www\\projet_narindra\\travel2\\app\\Resources\\views\\transport\\new.html.twig");
    }
}
