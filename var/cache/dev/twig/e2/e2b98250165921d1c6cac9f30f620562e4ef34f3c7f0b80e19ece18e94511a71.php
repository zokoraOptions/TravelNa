<?php

/* conducteur/new.html.twig */
class __TwigTemplate_4b5fe8d4eaa4d50646932a1aa01c72f0409fc06d53aa81e146061137c8755a0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "conducteur/new.html.twig", 1);
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
        $__internal_09567a452670c3f0b00008a640b549f647e04be74ba704c8e9518e42a9cb718b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09567a452670c3f0b00008a640b549f647e04be74ba704c8e9518e42a9cb718b->enter($__internal_09567a452670c3f0b00008a640b549f647e04be74ba704c8e9518e42a9cb718b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "conducteur/new.html.twig"));

        $__internal_ebb7a1b7b4687c66f473e45b83ca3855681999b29cfb1690bf7ee78c922c3a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb7a1b7b4687c66f473e45b83ca3855681999b29cfb1690bf7ee78c922c3a6b->enter($__internal_ebb7a1b7b4687c66f473e45b83ca3855681999b29cfb1690bf7ee78c922c3a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "conducteur/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09567a452670c3f0b00008a640b549f647e04be74ba704c8e9518e42a9cb718b->leave($__internal_09567a452670c3f0b00008a640b549f647e04be74ba704c8e9518e42a9cb718b_prof);

        
        $__internal_ebb7a1b7b4687c66f473e45b83ca3855681999b29cfb1690bf7ee78c922c3a6b->leave($__internal_ebb7a1b7b4687c66f473e45b83ca3855681999b29cfb1690bf7ee78c922c3a6b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5f018c4b601cb45e08e2190a892a3ef664607b16ea58518e8ab0fb419a30258 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f018c4b601cb45e08e2190a892a3ef664607b16ea58518e8ab0fb419a30258->enter($__internal_d5f018c4b601cb45e08e2190a892a3ef664607b16ea58518e8ab0fb419a30258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2bcfdd741213fdae8f68dff9a30eac9a8b7484cd7f2de3ec0d60f5a7d71751ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bcfdd741213fdae8f68dff9a30eac9a8b7484cd7f2de3ec0d60f5a7d71751ff->enter($__internal_2bcfdd741213fdae8f68dff9a30eac9a8b7484cd7f2de3ec0d60f5a7d71751ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"panel panel-default\"> 
                <div class=\"panel-heading\"> 
                    <span class=\"panel-title\"><h1>Ajout conducteur</h1></span> 
                </div> 
                <div class=\"panel-body\">
                    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
                        <div class=\"form-group\">
                             ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nom"));
        echo "
                             ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
                             <div class=\"col-sm-4\">
                                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                            </div>
                        </div>
                        <div class=\"col-sm-offset-2\">
                            <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-default\"/>
                            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conducteur_index");
        echo "\" class=\"btn btn-default\">Retourner à la liste</a>
                        </div>
                    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
";
        
        $__internal_2bcfdd741213fdae8f68dff9a30eac9a8b7484cd7f2de3ec0d60f5a7d71751ff->leave($__internal_2bcfdd741213fdae8f68dff9a30eac9a8b7484cd7f2de3ec0d60f5a7d71751ff_prof);

        
        $__internal_d5f018c4b601cb45e08e2190a892a3ef664607b16ea58518e8ab0fb419a30258->leave($__internal_d5f018c4b601cb45e08e2190a892a3ef664607b16ea58518e8ab0fb419a30258_prof);

    }

    public function getTemplateName()
    {
        return "conducteur/new.html.twig";
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
                    <span class=\"panel-title\"><h1>Ajout conducteur</h1></span> 
                </div> 
                <div class=\"panel-body\">
                    {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
                        <div class=\"form-group\">
                             {{ form_label(form.nom, \"Nom\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
                             {{ form_errors(form.nom) }}
                             <div class=\"col-sm-4\">
                                {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
                            </div>
                        </div>
                        <div class=\"col-sm-offset-2\">
                            <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-default\"/>
                            <a href=\"{{ path('conducteur_index') }}\" class=\"btn btn-default\">Retourner à la liste</a>
                        </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
{% endblock %}
", "conducteur/new.html.twig", "C:\\wamp\\www\\projet_narindra\\travel2\\app\\Resources\\views\\conducteur\\new.html.twig");
    }
}
