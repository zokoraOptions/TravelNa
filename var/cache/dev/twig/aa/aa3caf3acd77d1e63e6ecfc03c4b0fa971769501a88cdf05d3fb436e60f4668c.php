<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_dfd5932d37eb311310b1a109371676cdb7931b8ac0e52101e51857947d8d21fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e7d01e26fce6a1122983e8723deeddbae2458b93445cf92a91d17d6a18cbf90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e7d01e26fce6a1122983e8723deeddbae2458b93445cf92a91d17d6a18cbf90->enter($__internal_2e7d01e26fce6a1122983e8723deeddbae2458b93445cf92a91d17d6a18cbf90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5613cb52d66f8178cd886820abbea84e6a7457c3d4fcefa66f233f4a48748b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5613cb52d66f8178cd886820abbea84e6a7457c3d4fcefa66f233f4a48748b70->enter($__internal_5613cb52d66f8178cd886820abbea84e6a7457c3d4fcefa66f233f4a48748b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e7d01e26fce6a1122983e8723deeddbae2458b93445cf92a91d17d6a18cbf90->leave($__internal_2e7d01e26fce6a1122983e8723deeddbae2458b93445cf92a91d17d6a18cbf90_prof);

        
        $__internal_5613cb52d66f8178cd886820abbea84e6a7457c3d4fcefa66f233f4a48748b70->leave($__internal_5613cb52d66f8178cd886820abbea84e6a7457c3d4fcefa66f233f4a48748b70_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_976446d032f612d1817c6b2b066ef942688dccc3ac8bc9e7d9a949c98d395f70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_976446d032f612d1817c6b2b066ef942688dccc3ac8bc9e7d9a949c98d395f70->enter($__internal_976446d032f612d1817c6b2b066ef942688dccc3ac8bc9e7d9a949c98d395f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4d3595b8c1f0d71645f62fb54c0b086eb31a9be054e91001268560cdce8c8bb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d3595b8c1f0d71645f62fb54c0b086eb31a9be054e91001268560cdce8c8bb1->enter($__internal_4d3595b8c1f0d71645f62fb54c0b086eb31a9be054e91001268560cdce8c8bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4d3595b8c1f0d71645f62fb54c0b086eb31a9be054e91001268560cdce8c8bb1->leave($__internal_4d3595b8c1f0d71645f62fb54c0b086eb31a9be054e91001268560cdce8c8bb1_prof);

        
        $__internal_976446d032f612d1817c6b2b066ef942688dccc3ac8bc9e7d9a949c98d395f70->leave($__internal_976446d032f612d1817c6b2b066ef942688dccc3ac8bc9e7d9a949c98d395f70_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d51aec306f32a2f4b5eba0192d58e9cd012b0ea35b2e2b8c9ae2e9ec5882b3dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d51aec306f32a2f4b5eba0192d58e9cd012b0ea35b2e2b8c9ae2e9ec5882b3dd->enter($__internal_d51aec306f32a2f4b5eba0192d58e9cd012b0ea35b2e2b8c9ae2e9ec5882b3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_67b8e0d895534b740e96fed5472afe98a081d9b62b46c462dd8d186b8878db3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b8e0d895534b740e96fed5472afe98a081d9b62b46c462dd8d186b8878db3c->enter($__internal_67b8e0d895534b740e96fed5472afe98a081d9b62b46c462dd8d186b8878db3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_67b8e0d895534b740e96fed5472afe98a081d9b62b46c462dd8d186b8878db3c->leave($__internal_67b8e0d895534b740e96fed5472afe98a081d9b62b46c462dd8d186b8878db3c_prof);

        
        $__internal_d51aec306f32a2f4b5eba0192d58e9cd012b0ea35b2e2b8c9ae2e9ec5882b3dd->leave($__internal_d51aec306f32a2f4b5eba0192d58e9cd012b0ea35b2e2b8c9ae2e9ec5882b3dd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_47745c983e3b3793cb4a619c7ba3d4e50cb2f6f8dc6dd545b3e2e523e2bc643b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47745c983e3b3793cb4a619c7ba3d4e50cb2f6f8dc6dd545b3e2e523e2bc643b->enter($__internal_47745c983e3b3793cb4a619c7ba3d4e50cb2f6f8dc6dd545b3e2e523e2bc643b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3d68679769d41c81094455fdb991acca6c5663e53fb87fd6f63ba6fb14baa36e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d68679769d41c81094455fdb991acca6c5663e53fb87fd6f63ba6fb14baa36e->enter($__internal_3d68679769d41c81094455fdb991acca6c5663e53fb87fd6f63ba6fb14baa36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3d68679769d41c81094455fdb991acca6c5663e53fb87fd6f63ba6fb14baa36e->leave($__internal_3d68679769d41c81094455fdb991acca6c5663e53fb87fd6f63ba6fb14baa36e_prof);

        
        $__internal_47745c983e3b3793cb4a619c7ba3d4e50cb2f6f8dc6dd545b3e2e523e2bc643b->leave($__internal_47745c983e3b3793cb4a619c7ba3d4e50cb2f6f8dc6dd545b3e2e523e2bc643b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\projet_narindra\\travel2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
