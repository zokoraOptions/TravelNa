<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_be89ceb3658923a19131103670eb85f620582d8985e4870f12206d7448cfae25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_965908ec707b2a3e13289f94e6fb3e1eec2c350bf827e8834addb62e54d360a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_965908ec707b2a3e13289f94e6fb3e1eec2c350bf827e8834addb62e54d360a3->enter($__internal_965908ec707b2a3e13289f94e6fb3e1eec2c350bf827e8834addb62e54d360a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ea14d90e90277851956182304cd68acf7af5058d4abe5b3ece424681dd3fcf9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea14d90e90277851956182304cd68acf7af5058d4abe5b3ece424681dd3fcf9c->enter($__internal_ea14d90e90277851956182304cd68acf7af5058d4abe5b3ece424681dd3fcf9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_965908ec707b2a3e13289f94e6fb3e1eec2c350bf827e8834addb62e54d360a3->leave($__internal_965908ec707b2a3e13289f94e6fb3e1eec2c350bf827e8834addb62e54d360a3_prof);

        
        $__internal_ea14d90e90277851956182304cd68acf7af5058d4abe5b3ece424681dd3fcf9c->leave($__internal_ea14d90e90277851956182304cd68acf7af5058d4abe5b3ece424681dd3fcf9c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5b2f9649d2498c7f8f45a1c23627a553080a7a1a4913b8d76863f2faa756d030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b2f9649d2498c7f8f45a1c23627a553080a7a1a4913b8d76863f2faa756d030->enter($__internal_5b2f9649d2498c7f8f45a1c23627a553080a7a1a4913b8d76863f2faa756d030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ef06d4dce8a108b9091d6fc312fa59bdc9c3697cd35f6acc736f19ed6206b78d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef06d4dce8a108b9091d6fc312fa59bdc9c3697cd35f6acc736f19ed6206b78d->enter($__internal_ef06d4dce8a108b9091d6fc312fa59bdc9c3697cd35f6acc736f19ed6206b78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ef06d4dce8a108b9091d6fc312fa59bdc9c3697cd35f6acc736f19ed6206b78d->leave($__internal_ef06d4dce8a108b9091d6fc312fa59bdc9c3697cd35f6acc736f19ed6206b78d_prof);

        
        $__internal_5b2f9649d2498c7f8f45a1c23627a553080a7a1a4913b8d76863f2faa756d030->leave($__internal_5b2f9649d2498c7f8f45a1c23627a553080a7a1a4913b8d76863f2faa756d030_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a17fd9cb4f176b04d0ddcfe6a2b9d3a46eef3089cea162e0f445bc4e9be1e366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a17fd9cb4f176b04d0ddcfe6a2b9d3a46eef3089cea162e0f445bc4e9be1e366->enter($__internal_a17fd9cb4f176b04d0ddcfe6a2b9d3a46eef3089cea162e0f445bc4e9be1e366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eee9ede8bdb0bde10440d3dca2b65f09cacf31bdfd325563c7fb296a81e8ee18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee9ede8bdb0bde10440d3dca2b65f09cacf31bdfd325563c7fb296a81e8ee18->enter($__internal_eee9ede8bdb0bde10440d3dca2b65f09cacf31bdfd325563c7fb296a81e8ee18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eee9ede8bdb0bde10440d3dca2b65f09cacf31bdfd325563c7fb296a81e8ee18->leave($__internal_eee9ede8bdb0bde10440d3dca2b65f09cacf31bdfd325563c7fb296a81e8ee18_prof);

        
        $__internal_a17fd9cb4f176b04d0ddcfe6a2b9d3a46eef3089cea162e0f445bc4e9be1e366->leave($__internal_a17fd9cb4f176b04d0ddcfe6a2b9d3a46eef3089cea162e0f445bc4e9be1e366_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fde1603ebfacbacc65e0b947be31151fbb8f883e80e028f6bd6945c5e5777de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fde1603ebfacbacc65e0b947be31151fbb8f883e80e028f6bd6945c5e5777de1->enter($__internal_fde1603ebfacbacc65e0b947be31151fbb8f883e80e028f6bd6945c5e5777de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e4222487ad2f5812df9653fb2c9a2ba0305d5f57d9923505be496350c16d8e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4222487ad2f5812df9653fb2c9a2ba0305d5f57d9923505be496350c16d8e19->enter($__internal_e4222487ad2f5812df9653fb2c9a2ba0305d5f57d9923505be496350c16d8e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e4222487ad2f5812df9653fb2c9a2ba0305d5f57d9923505be496350c16d8e19->leave($__internal_e4222487ad2f5812df9653fb2c9a2ba0305d5f57d9923505be496350c16d8e19_prof);

        
        $__internal_fde1603ebfacbacc65e0b947be31151fbb8f883e80e028f6bd6945c5e5777de1->leave($__internal_fde1603ebfacbacc65e0b947be31151fbb8f883e80e028f6bd6945c5e5777de1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\projet_narindra\\travel2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
