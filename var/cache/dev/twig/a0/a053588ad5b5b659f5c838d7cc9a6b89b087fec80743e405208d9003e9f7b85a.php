<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_135320c2cdc2fda63acfde9da157d88470401fd5e541ee6afba00a489ce8eed7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_16c9ce5aab8e09947c26d2f43801b1c767f0967f7d3e5ace28c36b081426a25c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16c9ce5aab8e09947c26d2f43801b1c767f0967f7d3e5ace28c36b081426a25c->enter($__internal_16c9ce5aab8e09947c26d2f43801b1c767f0967f7d3e5ace28c36b081426a25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_547c25db693e5e949a25564dc2177bdf7114688b29880b5cf25a3ffae12a5997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547c25db693e5e949a25564dc2177bdf7114688b29880b5cf25a3ffae12a5997->enter($__internal_547c25db693e5e949a25564dc2177bdf7114688b29880b5cf25a3ffae12a5997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16c9ce5aab8e09947c26d2f43801b1c767f0967f7d3e5ace28c36b081426a25c->leave($__internal_16c9ce5aab8e09947c26d2f43801b1c767f0967f7d3e5ace28c36b081426a25c_prof);

        
        $__internal_547c25db693e5e949a25564dc2177bdf7114688b29880b5cf25a3ffae12a5997->leave($__internal_547c25db693e5e949a25564dc2177bdf7114688b29880b5cf25a3ffae12a5997_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b6c31cf1962062be82aaebe4bf293a2c729f1de3ecac9af0e73a63d2029ac289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6c31cf1962062be82aaebe4bf293a2c729f1de3ecac9af0e73a63d2029ac289->enter($__internal_b6c31cf1962062be82aaebe4bf293a2c729f1de3ecac9af0e73a63d2029ac289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8992f0495ee3334f9cbf5bb0c305750e004968dd37ac701006f15d1310a31375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8992f0495ee3334f9cbf5bb0c305750e004968dd37ac701006f15d1310a31375->enter($__internal_8992f0495ee3334f9cbf5bb0c305750e004968dd37ac701006f15d1310a31375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_8992f0495ee3334f9cbf5bb0c305750e004968dd37ac701006f15d1310a31375->leave($__internal_8992f0495ee3334f9cbf5bb0c305750e004968dd37ac701006f15d1310a31375_prof);

        
        $__internal_b6c31cf1962062be82aaebe4bf293a2c729f1de3ecac9af0e73a63d2029ac289->leave($__internal_b6c31cf1962062be82aaebe4bf293a2c729f1de3ecac9af0e73a63d2029ac289_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp\\www\\projet_narindra\\travel2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
