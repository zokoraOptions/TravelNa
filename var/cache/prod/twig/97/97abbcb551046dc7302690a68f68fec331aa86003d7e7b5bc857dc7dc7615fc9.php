<?php

/* transport/index.html.twig */
class __TwigTemplate_014edbd8315d94a09f9ed8941700c65091343640fbd0bc51629fe826e7eb4cd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "transport/index.html.twig", 1);
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
        echo "   <div class=\"container\">
        <div class=\"row\">
            <div class=\"panel panel-default\"> 
                <div class=\"panel-heading\"> 
                    <span class=\"panel-title\"><h1>Listes des Transports</h1></span> 
                </div> 
                <div class=\"panel-body\"><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transport_new");
        echo "\" class=\"btn btn-default\">Ajouter un transport</a></div> 
                <table class=\"table table-bordered\"> 
                    <thead> 
                        <tr> 
                            <th class=\"text-center\">Transit</th>
                            <th class=\"text-center\">Comission</th>
                            <th class=\"text-center\">Date de transport</th>
                            <th class=\"text-center\">Client</th>
                            <th class=\"text-center\">Camion</th>
                            <th class=\"text-center\">Actions</th>
                        </tr> 
                    </thead> 
                    <tbody class=\"text-center\">
                        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["transports"]) ? $context["transports"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["transport"]) {
            // line 24
            echo "                            <tr>
                                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["transport"], "transit", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["transport"], "comission", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 27
            if ($this->getAttribute($context["transport"], "dateTransport", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["transport"], "dateTransport", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["transport"], "client", array()), "nom", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["transport"], "camion", array()), "plaqueImmatriculation", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transport_show", array("id" => $this->getAttribute($context["transport"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">Voir</a>
                                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transport_edit", array("id" => $this->getAttribute($context["transport"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">Modifier</a>
                                    <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transport_suppression", array("id" => $this->getAttribute($context["transport"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">Supprimer</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transport'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>




    <button class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\"> Modal </button> 
    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\"> 
            <div class=\"modal-content\"> 
                <div class=\"modal-header\"> 
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"> &times; </button> 
                    <h4 class=\"modal-title\" id=\"myModalLabel\"></h4> 
                </div> 
                <div class=\"modal-body id=\"affichage2\"\">

                </div> 
                <div class=\"modal-footer\"> 
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"> Fermer </button> 
                    <button type=\"button\" class=\"btn btn-primary\"> Enregistrer </button> 
                </div> 
            </div>
        </div>
    </div>

    <!--<h2>Example of using methods of Modal Plugin</h2>
    <button class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\"> Launch demo modal </button>
    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\"> 
        <div class=\"modal-dialog\"> 
            <div class=\"modal-content\"> 
                <div class=\"modal-header\"> 
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×
                        <a href=\"#\" id=\"add_x\" class=\"btn btn-default\">Ajouter x</a><br>
                    </button> 
                    <h4 class=\"modal-title\" id=\"myModalLabel\"> This Modal title </h4> 
                </div> 
                <div class=\"modal-body\"> Press ESC button to exit. </div> 
                <div class=\"modal-footer\"> 
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close </button> 
                    <button type=\"button\" class=\"btn btn-primary\"> Submit changes </button> 
                </div> 
            </div>
        </div>
    </div>-->




        
        <a href=\"#\" id=\"add_x\" class=\"btn btn-default\">Ajouter x</a><br>
        <div id=\"affichage2\"></div>

    <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function()
        {
                //var url1=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transport_new");
        echo "\";
                //alert(url1);
                //\$('#affichage2').load(url1);

            //\$('#myModal').modal({ keyboard: true});
            \$('#add_x').click(
            function(e)
            {
                var url1=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("transport_new");
        echo "\";
                alert(url1);
                \$('#affichage2').load(url1);
                e.preventDefault();
                
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "transport/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 105,  171 => 97,  164 => 93,  160 => 92,  103 => 37,  93 => 33,  89 => 32,  85 => 31,  80 => 29,  76 => 28,  70 => 27,  66 => 26,  62 => 25,  59 => 24,  55 => 23,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "transport/index.html.twig", "C:\\wamp\\www\\projet_narindra\\travel2\\app\\Resources\\views\\transport\\index.html.twig");
    }
}
