<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c52f5e6c8225261f5af2d1cfc2e8a2ca21e2ea3cffc8d05cc6c5728e6ba8ae9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c7980ddf316c39b57adbafc54828f74b79617a657cb6ddee1f7ad03fca21217 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c7980ddf316c39b57adbafc54828f74b79617a657cb6ddee1f7ad03fca21217->enter($__internal_9c7980ddf316c39b57adbafc54828f74b79617a657cb6ddee1f7ad03fca21217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b301fbd63e08fff5677b067fe4663cd4be813ab87964a91d8e8c2a80dd73ce21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b301fbd63e08fff5677b067fe4663cd4be813ab87964a91d8e8c2a80dd73ce21->enter($__internal_b301fbd63e08fff5677b067fe4663cd4be813ab87964a91d8e8c2a80dd73ce21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_9c7980ddf316c39b57adbafc54828f74b79617a657cb6ddee1f7ad03fca21217->leave($__internal_9c7980ddf316c39b57adbafc54828f74b79617a657cb6ddee1f7ad03fca21217_prof);

        
        $__internal_b301fbd63e08fff5677b067fe4663cd4be813ab87964a91d8e8c2a80dd73ce21->leave($__internal_b301fbd63e08fff5677b067fe4663cd4be813ab87964a91d8e8c2a80dd73ce21_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ab62770881a7679a294689e7e62215c0d1311f12fc8a6070ba49e75e830cabc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ab62770881a7679a294689e7e62215c0d1311f12fc8a6070ba49e75e830cabc->enter($__internal_1ab62770881a7679a294689e7e62215c0d1311f12fc8a6070ba49e75e830cabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f17cb43f2aa3f0168508c08e14e7fada83b7fb06a54fb559100069dc9672af1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17cb43f2aa3f0168508c08e14e7fada83b7fb06a54fb559100069dc9672af1e->enter($__internal_f17cb43f2aa3f0168508c08e14e7fada83b7fb06a54fb559100069dc9672af1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f17cb43f2aa3f0168508c08e14e7fada83b7fb06a54fb559100069dc9672af1e->leave($__internal_f17cb43f2aa3f0168508c08e14e7fada83b7fb06a54fb559100069dc9672af1e_prof);

        
        $__internal_1ab62770881a7679a294689e7e62215c0d1311f12fc8a6070ba49e75e830cabc->leave($__internal_1ab62770881a7679a294689e7e62215c0d1311f12fc8a6070ba49e75e830cabc_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_359bd4b905119bc81a7dce21a5e95916d8d0dc379d6c5c1ef86b4104cc61dbd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_359bd4b905119bc81a7dce21a5e95916d8d0dc379d6c5c1ef86b4104cc61dbd2->enter($__internal_359bd4b905119bc81a7dce21a5e95916d8d0dc379d6c5c1ef86b4104cc61dbd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7167242517c245d81e72a676d77caee48cb5d83bfce0484aba163ec9ea6428ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7167242517c245d81e72a676d77caee48cb5d83bfce0484aba163ec9ea6428ff->enter($__internal_7167242517c245d81e72a676d77caee48cb5d83bfce0484aba163ec9ea6428ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7167242517c245d81e72a676d77caee48cb5d83bfce0484aba163ec9ea6428ff->leave($__internal_7167242517c245d81e72a676d77caee48cb5d83bfce0484aba163ec9ea6428ff_prof);

        
        $__internal_359bd4b905119bc81a7dce21a5e95916d8d0dc379d6c5c1ef86b4104cc61dbd2->leave($__internal_359bd4b905119bc81a7dce21a5e95916d8d0dc379d6c5c1ef86b4104cc61dbd2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1c78be407cee2c324304fae29700d881e1750532bc2f66e7be81b02cc1a4562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1c78be407cee2c324304fae29700d881e1750532bc2f66e7be81b02cc1a4562->enter($__internal_a1c78be407cee2c324304fae29700d881e1750532bc2f66e7be81b02cc1a4562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6df60a6fc58cc63be56973692067621e6f2847a1da9f1df2e07331ea9428d91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6df60a6fc58cc63be56973692067621e6f2847a1da9f1df2e07331ea9428d91->enter($__internal_a6df60a6fc58cc63be56973692067621e6f2847a1da9f1df2e07331ea9428d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a6df60a6fc58cc63be56973692067621e6f2847a1da9f1df2e07331ea9428d91->leave($__internal_a6df60a6fc58cc63be56973692067621e6f2847a1da9f1df2e07331ea9428d91_prof);

        
        $__internal_a1c78be407cee2c324304fae29700d881e1750532bc2f66e7be81b02cc1a4562->leave($__internal_a1c78be407cee2c324304fae29700d881e1750532bc2f66e7be81b02cc1a4562_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp\\www\\projet_narindra\\travel2\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
