<?php

/* client/edit.html.twig */
class __TwigTemplate_7b6961e60d77df9825f8a803fb853fad2b4bac4fa0f467b0235d148eb4998187 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/edit.html.twig", 1);
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
        $__internal_e84af0e168d4d2c87e3740fc875536eddc8da0c7d2802e3d7696e7950f815742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e84af0e168d4d2c87e3740fc875536eddc8da0c7d2802e3d7696e7950f815742->enter($__internal_e84af0e168d4d2c87e3740fc875536eddc8da0c7d2802e3d7696e7950f815742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/edit.html.twig"));

        $__internal_a40f0082162bab03fe6cabb8529a0e1c273fb4c5dba9d2edf218f079fbd96814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a40f0082162bab03fe6cabb8529a0e1c273fb4c5dba9d2edf218f079fbd96814->enter($__internal_a40f0082162bab03fe6cabb8529a0e1c273fb4c5dba9d2edf218f079fbd96814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e84af0e168d4d2c87e3740fc875536eddc8da0c7d2802e3d7696e7950f815742->leave($__internal_e84af0e168d4d2c87e3740fc875536eddc8da0c7d2802e3d7696e7950f815742_prof);

        
        $__internal_a40f0082162bab03fe6cabb8529a0e1c273fb4c5dba9d2edf218f079fbd96814->leave($__internal_a40f0082162bab03fe6cabb8529a0e1c273fb4c5dba9d2edf218f079fbd96814_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_74c292adec62d84eaa8c6b91170f1125c81e1037153da66a35fd364f535b3a08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c292adec62d84eaa8c6b91170f1125c81e1037153da66a35fd364f535b3a08->enter($__internal_74c292adec62d84eaa8c6b91170f1125c81e1037153da66a35fd364f535b3a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d23a1a902a81b3992bc595cdb78ec18cb6788c462520e1182e24e38e9f403aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d23a1a902a81b3992bc595cdb78ec18cb6788c462520e1182e24e38e9f403aa5->enter($__internal_d23a1a902a81b3992bc595cdb78ec18cb6788c462520e1182e24e38e9f403aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"panel panel-default\"> 
                <div class=\"panel-heading\"> 
                    <span class=\"panel-title\"><h1>Modification Client</h1></span> 
                </div> 
                <div class=\"panel-body\">
                    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                        <div class=\"form-group\">
                             ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nom"));
        echo "
                             ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", array()), 'errors');
        echo "
                             <div class=\"col-sm-4\">
                                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-offset-2\">
                            <input type=\"submit\" value=\"Modifier\" class=\"btn btn-default\"/>
                            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_index");
        echo "\" class=\"btn btn-default\">Retourner à la liste</a>
                        </div>
                    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_d23a1a902a81b3992bc595cdb78ec18cb6788c462520e1182e24e38e9f403aa5->leave($__internal_d23a1a902a81b3992bc595cdb78ec18cb6788c462520e1182e24e38e9f403aa5_prof);

        
        $__internal_74c292adec62d84eaa8c6b91170f1125c81e1037153da66a35fd364f535b3a08->leave($__internal_74c292adec62d84eaa8c6b91170f1125c81e1037153da66a35fd364f535b3a08_prof);

    }

    public function getTemplateName()
    {
        return "client/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 23,  80 => 21,  72 => 16,  67 => 14,  63 => 13,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
                    <span class=\"panel-title\"><h1>Modification Client</h1></span> 
                </div> 
                <div class=\"panel-body\">
                    {{ form_start(edit_form, {'attr': {'class': 'form-horizontal'}}) }}
                        <div class=\"form-group\">
                             {{ form_label(edit_form.nom, \"Nom\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
                             {{ form_errors(edit_form.nom) }}
                             <div class=\"col-sm-4\">
                                {{ form_widget(edit_form.nom, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"col-sm-offset-2\">
                            <input type=\"submit\" value=\"Modifier\" class=\"btn btn-default\"/>
                            <a href=\"{{ path('client_index') }}\" class=\"btn btn-default\">Retourner à la liste</a>
                        </div>
                    {{ form_end(edit_form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "client/edit.html.twig", "C:\\wamp\\www\\projet_narindra\\travel2\\app\\Resources\\views\\client\\edit.html.twig");
    }
}
