<?php

/* client/new.html.twig */
class __TwigTemplate_4771d040228179c2ab6efedaf9022e0b3af9032f1b2d50b5a4405b73e783434b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/new.html.twig", 1);
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
        $__internal_2b9bd180d179ebccd690e486ff2410d025951e507e9a42bcf7b04d6ff36d55ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b9bd180d179ebccd690e486ff2410d025951e507e9a42bcf7b04d6ff36d55ea->enter($__internal_2b9bd180d179ebccd690e486ff2410d025951e507e9a42bcf7b04d6ff36d55ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/new.html.twig"));

        $__internal_cbcd68cb69c938f1f0f85ca6ca7b68212221f1af4c29f3535d09d9382a58353b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbcd68cb69c938f1f0f85ca6ca7b68212221f1af4c29f3535d09d9382a58353b->enter($__internal_cbcd68cb69c938f1f0f85ca6ca7b68212221f1af4c29f3535d09d9382a58353b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b9bd180d179ebccd690e486ff2410d025951e507e9a42bcf7b04d6ff36d55ea->leave($__internal_2b9bd180d179ebccd690e486ff2410d025951e507e9a42bcf7b04d6ff36d55ea_prof);

        
        $__internal_cbcd68cb69c938f1f0f85ca6ca7b68212221f1af4c29f3535d09d9382a58353b->leave($__internal_cbcd68cb69c938f1f0f85ca6ca7b68212221f1af4c29f3535d09d9382a58353b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_838d326fe65a075e83a2d00614a4371db727180a3ec492f3da967d4cff044cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_838d326fe65a075e83a2d00614a4371db727180a3ec492f3da967d4cff044cdb->enter($__internal_838d326fe65a075e83a2d00614a4371db727180a3ec492f3da967d4cff044cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_919e6d77d2f752b8bd881afdf81abfbf30163641a762105f9abfe9363f3b267b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_919e6d77d2f752b8bd881afdf81abfbf30163641a762105f9abfe9363f3b267b->enter($__internal_919e6d77d2f752b8bd881afdf81abfbf30163641a762105f9abfe9363f3b267b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"panel panel-default\"> 
                <div class=\"panel-heading\"> 
                    <span class=\"panel-title\"><h1>Ajout client</h1></span> 
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_index");
        echo "\" class=\"btn btn-default\">Retourner à la liste</a>
                        </div>
                    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_919e6d77d2f752b8bd881afdf81abfbf30163641a762105f9abfe9363f3b267b->leave($__internal_919e6d77d2f752b8bd881afdf81abfbf30163641a762105f9abfe9363f3b267b_prof);

        
        $__internal_838d326fe65a075e83a2d00614a4371db727180a3ec492f3da967d4cff044cdb->leave($__internal_838d326fe65a075e83a2d00614a4371db727180a3ec492f3da967d4cff044cdb_prof);

    }

    public function getTemplateName()
    {
        return "client/new.html.twig";
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
                    <span class=\"panel-title\"><h1>Ajout client</h1></span> 
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
                            <a href=\"{{ path('client_index') }}\" class=\"btn btn-default\">Retourner à la liste</a>
                        </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "client/new.html.twig", "C:\\wamp\\www\\projet_narindra\\travel2\\app\\Resources\\views\\client\\new.html.twig");
    }
}
