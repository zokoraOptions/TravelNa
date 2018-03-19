<?php

/* client/index.html.twig */
class __TwigTemplate_0c2d03d092c60d7ef20a2ff723f4ae6bfe82718377baae11de0d183266993c61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"panel panel-default\"> 
                <div class=\"panel-heading\"> 
                    <span class=\"panel-title\"><h1>Listes des Clients</h1></span> 
                </div> 
                <div class=\"panel-body\"><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_new");
        echo "\" class=\"btn btn-default\">Ajouter un client</a></div> 
                <table class=\"table table-bordered\"> 
                    <thead> 
                        <tr> 
                            <th class=\"text-center\">Nom</th>
                            <th class=\"text-center\">Actions</th>
                        </tr> 
                    </thead> 
                    <tbody class=\"text-center\">
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 20
            echo "                            <tr>
                                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "nom", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_show", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">Voir</a>
                                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("client_edit", array("id" => $this->getAttribute($context["client"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">Modifier</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "client/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 28,  67 => 24,  63 => 23,  58 => 21,  55 => 20,  51 => 19,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "client/index.html.twig", "C:\\wamp\\www\\projet_narindra\\travel2\\app\\Resources\\views\\client\\index.html.twig");
    }
}
