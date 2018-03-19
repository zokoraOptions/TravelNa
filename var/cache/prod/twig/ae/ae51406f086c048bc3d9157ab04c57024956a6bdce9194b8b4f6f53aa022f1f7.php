<?php

/* base.html.twig */
class __TwigTemplate_e226e3cf857e098e0439693ec5fcbc15eb139dccd154c303310ba9f6ea54d462 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    </head>
    <body>
        <div class=\"container\">
            <header>
                <ul class=\"nav nav-pills\"> 
                    <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_index");
        echo "\">Client</a></li> 
                    <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transport_index");
        echo "\">Transport</a></li> 
                    <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("camion_index");
        echo "\">Camion</a></li> 
                    <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conducteur_index");
        echo "\">Conducteur</a></li> 
                    <li><a href=\"#\">Maintenance</a></li> 
                    <li><a href=\"#\">Facture</a></li> 
                </ul>
                ";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 22
        echo "            </header>
            ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Gestionnaire de Transport!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 24,  102 => 23,  97 => 21,  92 => 6,  86 => 5,  79 => 25,  76 => 24,  74 => 23,  71 => 22,  69 => 21,  62 => 17,  58 => 16,  54 => 15,  50 => 14,  41 => 8,  36 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "C:\\wamp\\www\\projet_narindra\\travel2\\app\\Resources\\views\\base.html.twig");
    }
}
