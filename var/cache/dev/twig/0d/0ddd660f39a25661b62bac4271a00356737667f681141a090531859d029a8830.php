<?php

/* conducteur/edit.html.twig */
class __TwigTemplate_65883f965f49ecbe5387fac61a87c91511a36327fb84c35ba2adbaf89adbe5d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "conducteur/edit.html.twig", 1);
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
        $__internal_db8ecbd7c246274316cbaa4f228e58d1717b6602b5a6f1b014e01a4585ea1907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db8ecbd7c246274316cbaa4f228e58d1717b6602b5a6f1b014e01a4585ea1907->enter($__internal_db8ecbd7c246274316cbaa4f228e58d1717b6602b5a6f1b014e01a4585ea1907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "conducteur/edit.html.twig"));

        $__internal_e772585782da8a7816eb8e448afedf4e142235f934f6f87d40633db9982e5e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e772585782da8a7816eb8e448afedf4e142235f934f6f87d40633db9982e5e0a->enter($__internal_e772585782da8a7816eb8e448afedf4e142235f934f6f87d40633db9982e5e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "conducteur/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db8ecbd7c246274316cbaa4f228e58d1717b6602b5a6f1b014e01a4585ea1907->leave($__internal_db8ecbd7c246274316cbaa4f228e58d1717b6602b5a6f1b014e01a4585ea1907_prof);

        
        $__internal_e772585782da8a7816eb8e448afedf4e142235f934f6f87d40633db9982e5e0a->leave($__internal_e772585782da8a7816eb8e448afedf4e142235f934f6f87d40633db9982e5e0a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_423f2854c35411b1835d943f44ff769c6a1dce3a3019b5f795a3bcbb74c429fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_423f2854c35411b1835d943f44ff769c6a1dce3a3019b5f795a3bcbb74c429fe->enter($__internal_423f2854c35411b1835d943f44ff769c6a1dce3a3019b5f795a3bcbb74c429fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72b0c4e34f57307a9397cbc5032aaac019f953977ae583c0f0c9701b8a189b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b0c4e34f57307a9397cbc5032aaac019f953977ae583c0f0c9701b8a189b15->enter($__internal_72b0c4e34f57307a9397cbc5032aaac019f953977ae583c0f0c9701b8a189b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "     <div class=\"container\">
        <div class=\"row\">
            <div class=\"panel panel-default\"> 
                <div class=\"panel-heading\"> 
                    <span class=\"panel-title\"><h1>Modification Conducteur</h1></span> 
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conducteur_index");
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
        
        $__internal_72b0c4e34f57307a9397cbc5032aaac019f953977ae583c0f0c9701b8a189b15->leave($__internal_72b0c4e34f57307a9397cbc5032aaac019f953977ae583c0f0c9701b8a189b15_prof);

        
        $__internal_423f2854c35411b1835d943f44ff769c6a1dce3a3019b5f795a3bcbb74c429fe->leave($__internal_423f2854c35411b1835d943f44ff769c6a1dce3a3019b5f795a3bcbb74c429fe_prof);

    }

    public function getTemplateName()
    {
        return "conducteur/edit.html.twig";
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
                    <span class=\"panel-title\"><h1>Modification Conducteur</h1></span> 
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
                            <a href=\"{{ path('conducteur_index') }}\" class=\"btn btn-default\">Retourner à la liste</a>
                        </div>
                    {{ form_end(edit_form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "conducteur/edit.html.twig", "C:\\wamp\\www\\projet_narindra\\travel2\\app\\Resources\\views\\conducteur\\edit.html.twig");
    }
}
