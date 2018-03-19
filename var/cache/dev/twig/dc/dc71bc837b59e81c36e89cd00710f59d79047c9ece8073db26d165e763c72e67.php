<?php

/* camion/new.html.twig */
class __TwigTemplate_cac245ba1542db40ef671829b9f3a7f743d86a5f784cf4053d48ce834419a2bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "camion/new.html.twig", 1);
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
        $__internal_1efaf0de824e126419c650dfeac4e461b5c2ec24c6be6777d980e8f36fef5a48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1efaf0de824e126419c650dfeac4e461b5c2ec24c6be6777d980e8f36fef5a48->enter($__internal_1efaf0de824e126419c650dfeac4e461b5c2ec24c6be6777d980e8f36fef5a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "camion/new.html.twig"));

        $__internal_8a990898b954ce7a4db9295e9ea0ccc4540f9e9851c3884b75cf523bf5cf9747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a990898b954ce7a4db9295e9ea0ccc4540f9e9851c3884b75cf523bf5cf9747->enter($__internal_8a990898b954ce7a4db9295e9ea0ccc4540f9e9851c3884b75cf523bf5cf9747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "camion/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1efaf0de824e126419c650dfeac4e461b5c2ec24c6be6777d980e8f36fef5a48->leave($__internal_1efaf0de824e126419c650dfeac4e461b5c2ec24c6be6777d980e8f36fef5a48_prof);

        
        $__internal_8a990898b954ce7a4db9295e9ea0ccc4540f9e9851c3884b75cf523bf5cf9747->leave($__internal_8a990898b954ce7a4db9295e9ea0ccc4540f9e9851c3884b75cf523bf5cf9747_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b2f069bcef0bf81af7c9ef3825b9d02f98d43aee51795591c5018245d91c28a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b2f069bcef0bf81af7c9ef3825b9d02f98d43aee51795591c5018245d91c28a->enter($__internal_8b2f069bcef0bf81af7c9ef3825b9d02f98d43aee51795591c5018245d91c28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf55560776735a7f15849a8f3e16119b56ab7b50c4ae98e8a2ac1a547c3d8079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf55560776735a7f15849a8f3e16119b56ab7b50c4ae98e8a2ac1a547c3d8079->enter($__internal_cf55560776735a7f15849a8f3e16119b56ab7b50c4ae98e8a2ac1a547c3d8079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"panel panel-default\"> 
                <div class=\"panel-heading\"> 
                    <span class=\"panel-title\"><h1>Ajout camion</h1></span> 
                </div> 
                <div class=\"panel-body\">
                    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                        <div class=\"form-group\">
                             ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plaqueImmatriculation", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nom"));
        echo "
                             ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plaqueImmatriculation", array()), 'errors');
        echo "
                             <div class=\"col-sm-4\">
                                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plaqueImmatriculation", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                             <div class=\"col-sm-offset-2\">
                                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tierce", array()), 'widget');
        echo "
                                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tierce", array()), 'label');
        echo "
                                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tierce", array()), 'errors');
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                             ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "conducteur", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nom"));
        echo "
                             ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "conducteur", array()), 'errors');
        echo "
                             <div class=\"col-sm-4\">
                                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "conducteur", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-offset-2\">
                            <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-default\"/>
                            <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("camion_index");
        echo "\" class=\"btn btn-default\">Retourner à la liste</a>
                        </div>
                    ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_cf55560776735a7f15849a8f3e16119b56ab7b50c4ae98e8a2ac1a547c3d8079->leave($__internal_cf55560776735a7f15849a8f3e16119b56ab7b50c4ae98e8a2ac1a547c3d8079_prof);

        
        $__internal_8b2f069bcef0bf81af7c9ef3825b9d02f98d43aee51795591c5018245d91c28a->leave($__internal_8b2f069bcef0bf81af7c9ef3825b9d02f98d43aee51795591c5018245d91c28a_prof);

    }

    public function getTemplateName()
    {
        return "camion/new.html.twig";
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
                    <span class=\"panel-title\"><h1>Ajout camion</h1></span> 
                </div> 
                <div class=\"panel-body\">
                    {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
                        <div class=\"form-group\">
                             {{ form_label(form.plaqueImmatriculation, \"Nom\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
                             {{ form_errors(form.plaqueImmatriculation) }}
                             <div class=\"col-sm-4\">
                                {{ form_widget(form.plaqueImmatriculation, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"form-group\">
                             <div class=\"col-sm-offset-2\">
                                {{ form_widget(form.tierce) }}
                                {{ form_label(form.tierce) }}
                                {{ form_errors(form.tierce) }}
                            </div>
                        </div>
                        <div class=\"form-group\">
                             {{ form_label(form.conducteur, \"Nom\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
                             {{ form_errors(form.conducteur) }}
                             <div class=\"col-sm-4\">
                                {{ form_widget(form.conducteur, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"col-sm-offset-2\">
                            <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-default\"/>
                            <a href=\"{{ path('camion_index') }}\" class=\"btn btn-default\">Retourner à la liste</a>
                        </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "camion/new.html.twig", "C:\\wamp\\www\\projet_narindra\\travel2\\app\\Resources\\views\\camion\\new.html.twig");
    }
}
