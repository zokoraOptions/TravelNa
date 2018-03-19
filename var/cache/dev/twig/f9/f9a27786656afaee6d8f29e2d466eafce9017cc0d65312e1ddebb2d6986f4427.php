<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9831df335742712b992c3c4f6ef3b5cf14cbb78d86ecc5fa2a4002d48b2b4feb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63a74feaa05585e85cb67ef02e5fa22b5522a3cb0551bc807634cddbf18f0dad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63a74feaa05585e85cb67ef02e5fa22b5522a3cb0551bc807634cddbf18f0dad->enter($__internal_63a74feaa05585e85cb67ef02e5fa22b5522a3cb0551bc807634cddbf18f0dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_419522429f50b039a61820ec6ec42089e50c2dfab709461ac49fd1b63d0b8b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_419522429f50b039a61820ec6ec42089e50c2dfab709461ac49fd1b63d0b8b24->enter($__internal_419522429f50b039a61820ec6ec42089e50c2dfab709461ac49fd1b63d0b8b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63a74feaa05585e85cb67ef02e5fa22b5522a3cb0551bc807634cddbf18f0dad->leave($__internal_63a74feaa05585e85cb67ef02e5fa22b5522a3cb0551bc807634cddbf18f0dad_prof);

        
        $__internal_419522429f50b039a61820ec6ec42089e50c2dfab709461ac49fd1b63d0b8b24->leave($__internal_419522429f50b039a61820ec6ec42089e50c2dfab709461ac49fd1b63d0b8b24_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ca124ef9a678794dca73902ae0e88a92cc74b6d09a015abe92c8e37791fc4643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca124ef9a678794dca73902ae0e88a92cc74b6d09a015abe92c8e37791fc4643->enter($__internal_ca124ef9a678794dca73902ae0e88a92cc74b6d09a015abe92c8e37791fc4643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6c141d43d1d961b2671bdfce966299607e95e055e3fe5d2e11d549a360aa681b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c141d43d1d961b2671bdfce966299607e95e055e3fe5d2e11d549a360aa681b->enter($__internal_6c141d43d1d961b2671bdfce966299607e95e055e3fe5d2e11d549a360aa681b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_6c141d43d1d961b2671bdfce966299607e95e055e3fe5d2e11d549a360aa681b->leave($__internal_6c141d43d1d961b2671bdfce966299607e95e055e3fe5d2e11d549a360aa681b_prof);

        
        $__internal_ca124ef9a678794dca73902ae0e88a92cc74b6d09a015abe92c8e37791fc4643->leave($__internal_ca124ef9a678794dca73902ae0e88a92cc74b6d09a015abe92c8e37791fc4643_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_06197e42ecf0572ec76d741a5dd135b8162d544beaaecee490d8323aa58f8017 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06197e42ecf0572ec76d741a5dd135b8162d544beaaecee490d8323aa58f8017->enter($__internal_06197e42ecf0572ec76d741a5dd135b8162d544beaaecee490d8323aa58f8017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_61b632686705886ba0a2d7b110bb2bfacb11383940260b346874646048c84c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61b632686705886ba0a2d7b110bb2bfacb11383940260b346874646048c84c21->enter($__internal_61b632686705886ba0a2d7b110bb2bfacb11383940260b346874646048c84c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_61b632686705886ba0a2d7b110bb2bfacb11383940260b346874646048c84c21->leave($__internal_61b632686705886ba0a2d7b110bb2bfacb11383940260b346874646048c84c21_prof);

        
        $__internal_06197e42ecf0572ec76d741a5dd135b8162d544beaaecee490d8323aa58f8017->leave($__internal_06197e42ecf0572ec76d741a5dd135b8162d544beaaecee490d8323aa58f8017_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0923ec7d8e549e6395f56a97fb7fb9786b4f2350c8f0a804d97c0a0dbf5b3869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0923ec7d8e549e6395f56a97fb7fb9786b4f2350c8f0a804d97c0a0dbf5b3869->enter($__internal_0923ec7d8e549e6395f56a97fb7fb9786b4f2350c8f0a804d97c0a0dbf5b3869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_59448637d7392c01a942839e4180d83209f7e8967c36921c82f6f0de918539d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59448637d7392c01a942839e4180d83209f7e8967c36921c82f6f0de918539d4->enter($__internal_59448637d7392c01a942839e4180d83209f7e8967c36921c82f6f0de918539d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_59448637d7392c01a942839e4180d83209f7e8967c36921c82f6f0de918539d4->leave($__internal_59448637d7392c01a942839e4180d83209f7e8967c36921c82f6f0de918539d4_prof);

        
        $__internal_0923ec7d8e549e6395f56a97fb7fb9786b4f2350c8f0a804d97c0a0dbf5b3869->leave($__internal_0923ec7d8e549e6395f56a97fb7fb9786b4f2350c8f0a804d97c0a0dbf5b3869_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\projet_narindra\\travel2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
