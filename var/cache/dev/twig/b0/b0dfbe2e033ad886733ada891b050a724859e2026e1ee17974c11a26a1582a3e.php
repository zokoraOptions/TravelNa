<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_5527351057c80cd0e928ce926d454c079b004f206f4b53e6af157087c8fdee3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba2fda85e89406134222bd09a1ad9516271a8ce4a21baa9931fcdebc5dc8ce46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba2fda85e89406134222bd09a1ad9516271a8ce4a21baa9931fcdebc5dc8ce46->enter($__internal_ba2fda85e89406134222bd09a1ad9516271a8ce4a21baa9931fcdebc5dc8ce46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_0148edc46772814f546215a62ef35940d3bb5b8b49c95559d43931c1daf20b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0148edc46772814f546215a62ef35940d3bb5b8b49c95559d43931c1daf20b4e->enter($__internal_0148edc46772814f546215a62ef35940d3bb5b8b49c95559d43931c1daf20b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_ba2fda85e89406134222bd09a1ad9516271a8ce4a21baa9931fcdebc5dc8ce46->leave($__internal_ba2fda85e89406134222bd09a1ad9516271a8ce4a21baa9931fcdebc5dc8ce46_prof);

        
        $__internal_0148edc46772814f546215a62ef35940d3bb5b8b49c95559d43931c1daf20b4e->leave($__internal_0148edc46772814f546215a62ef35940d3bb5b8b49c95559d43931c1daf20b4e_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_00d340a19841e4a5871b7a70d5f4799b81e85c68d6f6cbff8a93921a7caf5a5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00d340a19841e4a5871b7a70d5f4799b81e85c68d6f6cbff8a93921a7caf5a5a->enter($__internal_00d340a19841e4a5871b7a70d5f4799b81e85c68d6f6cbff8a93921a7caf5a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_e8249f7b9b843ad7374bd491531d4f0ae636960278df982d0c3f0512c131e103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8249f7b9b843ad7374bd491531d4f0ae636960278df982d0c3f0512c131e103->enter($__internal_e8249f7b9b843ad7374bd491531d4f0ae636960278df982d0c3f0512c131e103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_e8249f7b9b843ad7374bd491531d4f0ae636960278df982d0c3f0512c131e103->leave($__internal_e8249f7b9b843ad7374bd491531d4f0ae636960278df982d0c3f0512c131e103_prof);

        
        $__internal_00d340a19841e4a5871b7a70d5f4799b81e85c68d6f6cbff8a93921a7caf5a5a->leave($__internal_00d340a19841e4a5871b7a70d5f4799b81e85c68d6f6cbff8a93921a7caf5a5a_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_454e33af365c4d94b0c82bb6fd7915e8c367702bfeaa8cd9336ca62370d4b10a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454e33af365c4d94b0c82bb6fd7915e8c367702bfeaa8cd9336ca62370d4b10a->enter($__internal_454e33af365c4d94b0c82bb6fd7915e8c367702bfeaa8cd9336ca62370d4b10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_90e6cde3ee2ae87291207c7491a9be1c4a12dad1608b2064dcdcf7a6ce315f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e6cde3ee2ae87291207c7491a9be1c4a12dad1608b2064dcdcf7a6ce315f62->enter($__internal_90e6cde3ee2ae87291207c7491a9be1c4a12dad1608b2064dcdcf7a6ce315f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_90e6cde3ee2ae87291207c7491a9be1c4a12dad1608b2064dcdcf7a6ce315f62->leave($__internal_90e6cde3ee2ae87291207c7491a9be1c4a12dad1608b2064dcdcf7a6ce315f62_prof);

        
        $__internal_454e33af365c4d94b0c82bb6fd7915e8c367702bfeaa8cd9336ca62370d4b10a->leave($__internal_454e33af365c4d94b0c82bb6fd7915e8c367702bfeaa8cd9336ca62370d4b10a_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_57b0e3101e0746183c73427401f7451ecf1efaa3e5d6028a2e8da8aff21bc2d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57b0e3101e0746183c73427401f7451ecf1efaa3e5d6028a2e8da8aff21bc2d3->enter($__internal_57b0e3101e0746183c73427401f7451ecf1efaa3e5d6028a2e8da8aff21bc2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_b53b53fc3f066a555c9cde4c4d26961c02b40840e1c8d06e06d17799b55c7733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b53b53fc3f066a555c9cde4c4d26961c02b40840e1c8d06e06d17799b55c7733->enter($__internal_b53b53fc3f066a555c9cde4c4d26961c02b40840e1c8d06e06d17799b55c7733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_b53b53fc3f066a555c9cde4c4d26961c02b40840e1c8d06e06d17799b55c7733->leave($__internal_b53b53fc3f066a555c9cde4c4d26961c02b40840e1c8d06e06d17799b55c7733_prof);

        
        $__internal_57b0e3101e0746183c73427401f7451ecf1efaa3e5d6028a2e8da8aff21bc2d3->leave($__internal_57b0e3101e0746183c73427401f7451ecf1efaa3e5d6028a2e8da8aff21bc2d3_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_ef90b331177c7bfbc6d463cebe261f0a13e600ab955d6957b045afb4f4e6e1f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef90b331177c7bfbc6d463cebe261f0a13e600ab955d6957b045afb4f4e6e1f7->enter($__internal_ef90b331177c7bfbc6d463cebe261f0a13e600ab955d6957b045afb4f4e6e1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_e9a35cb1ab6add1276b426b776f6fdfd740d39fb1029c9cf9bb3011905ec98fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a35cb1ab6add1276b426b776f6fdfd740d39fb1029c9cf9bb3011905ec98fc->enter($__internal_e9a35cb1ab6add1276b426b776f6fdfd740d39fb1029c9cf9bb3011905ec98fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_58357e2531a42e9904f02e8537b6dd2f0648f6b27ee0dfe837c5af3d7b134524 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_ee9924e063e6ce9ffe6e974567819ecf258aaf48a72bdbef3cfc5deadd98c372 = "{{") && ('' === $__internal_ee9924e063e6ce9ffe6e974567819ecf258aaf48a72bdbef3cfc5deadd98c372 || 0 === strpos($__internal_58357e2531a42e9904f02e8537b6dd2f0648f6b27ee0dfe837c5af3d7b134524, $__internal_ee9924e063e6ce9ffe6e974567819ecf258aaf48a72bdbef3cfc5deadd98c372)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_e9a35cb1ab6add1276b426b776f6fdfd740d39fb1029c9cf9bb3011905ec98fc->leave($__internal_e9a35cb1ab6add1276b426b776f6fdfd740d39fb1029c9cf9bb3011905ec98fc_prof);

        
        $__internal_ef90b331177c7bfbc6d463cebe261f0a13e600ab955d6957b045afb4f4e6e1f7->leave($__internal_ef90b331177c7bfbc6d463cebe261f0a13e600ab955d6957b045afb4f4e6e1f7_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_b7bfd1e80ae403d00571ae5e2a280fe880d5c9140d83adc7970f877f06ad2d51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7bfd1e80ae403d00571ae5e2a280fe880d5c9140d83adc7970f877f06ad2d51->enter($__internal_b7bfd1e80ae403d00571ae5e2a280fe880d5c9140d83adc7970f877f06ad2d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_20087a9a2e79c91825a48a1890d1e2f3ef595e98e8150ced6e8bcc7ddc0b1963 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20087a9a2e79c91825a48a1890d1e2f3ef595e98e8150ced6e8bcc7ddc0b1963->enter($__internal_20087a9a2e79c91825a48a1890d1e2f3ef595e98e8150ced6e8bcc7ddc0b1963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_20087a9a2e79c91825a48a1890d1e2f3ef595e98e8150ced6e8bcc7ddc0b1963->leave($__internal_20087a9a2e79c91825a48a1890d1e2f3ef595e98e8150ced6e8bcc7ddc0b1963_prof);

        
        $__internal_b7bfd1e80ae403d00571ae5e2a280fe880d5c9140d83adc7970f877f06ad2d51->leave($__internal_b7bfd1e80ae403d00571ae5e2a280fe880d5c9140d83adc7970f877f06ad2d51_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_e4c4b7b7c870026d9afc32122db5d57003792134c552695e07478c99780e88ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4c4b7b7c870026d9afc32122db5d57003792134c552695e07478c99780e88ce->enter($__internal_e4c4b7b7c870026d9afc32122db5d57003792134c552695e07478c99780e88ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_e000852a41c78faffd7f8b364ce1340ea7e95f3f78fee1a343d0622c0b119397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e000852a41c78faffd7f8b364ce1340ea7e95f3f78fee1a343d0622c0b119397->enter($__internal_e000852a41c78faffd7f8b364ce1340ea7e95f3f78fee1a343d0622c0b119397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_e000852a41c78faffd7f8b364ce1340ea7e95f3f78fee1a343d0622c0b119397->leave($__internal_e000852a41c78faffd7f8b364ce1340ea7e95f3f78fee1a343d0622c0b119397_prof);

        
        $__internal_e4c4b7b7c870026d9afc32122db5d57003792134c552695e07478c99780e88ce->leave($__internal_e4c4b7b7c870026d9afc32122db5d57003792134c552695e07478c99780e88ce_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_70f298b68bc771f62206735bb118aefb5e3fbccc2ec9dab946488e8c2512bc81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70f298b68bc771f62206735bb118aefb5e3fbccc2ec9dab946488e8c2512bc81->enter($__internal_70f298b68bc771f62206735bb118aefb5e3fbccc2ec9dab946488e8c2512bc81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_df642a036d8c551a44d4dc73ac9116f74eb82b6c0201f060ec1f21d7ca712079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df642a036d8c551a44d4dc73ac9116f74eb82b6c0201f060ec1f21d7ca712079->enter($__internal_df642a036d8c551a44d4dc73ac9116f74eb82b6c0201f060ec1f21d7ca712079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_df642a036d8c551a44d4dc73ac9116f74eb82b6c0201f060ec1f21d7ca712079->leave($__internal_df642a036d8c551a44d4dc73ac9116f74eb82b6c0201f060ec1f21d7ca712079_prof);

        
        $__internal_70f298b68bc771f62206735bb118aefb5e3fbccc2ec9dab946488e8c2512bc81->leave($__internal_70f298b68bc771f62206735bb118aefb5e3fbccc2ec9dab946488e8c2512bc81_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_9489af2740f881db1f2351d3d8d5881c2e22eee2748093650bc22f1a71cc4e05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9489af2740f881db1f2351d3d8d5881c2e22eee2748093650bc22f1a71cc4e05->enter($__internal_9489af2740f881db1f2351d3d8d5881c2e22eee2748093650bc22f1a71cc4e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_e4107a09a9e186bb5682adcdcd3f8e7954508694bfc01f653996412b0967b9ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4107a09a9e186bb5682adcdcd3f8e7954508694bfc01f653996412b0967b9ca->enter($__internal_e4107a09a9e186bb5682adcdcd3f8e7954508694bfc01f653996412b0967b9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_e4107a09a9e186bb5682adcdcd3f8e7954508694bfc01f653996412b0967b9ca->leave($__internal_e4107a09a9e186bb5682adcdcd3f8e7954508694bfc01f653996412b0967b9ca_prof);

        
        $__internal_9489af2740f881db1f2351d3d8d5881c2e22eee2748093650bc22f1a71cc4e05->leave($__internal_9489af2740f881db1f2351d3d8d5881c2e22eee2748093650bc22f1a71cc4e05_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_71df9709584a5b98a5eb09318e68bf930c4df1154648987a254a882cebffb778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71df9709584a5b98a5eb09318e68bf930c4df1154648987a254a882cebffb778->enter($__internal_71df9709584a5b98a5eb09318e68bf930c4df1154648987a254a882cebffb778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_1819b1786f7d48f1fa2cb316a832fe3770e008f5fdb77016b0cc107e8789d1d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1819b1786f7d48f1fa2cb316a832fe3770e008f5fdb77016b0cc107e8789d1d5->enter($__internal_1819b1786f7d48f1fa2cb316a832fe3770e008f5fdb77016b0cc107e8789d1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) ? $context["table_class"] : $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_1819b1786f7d48f1fa2cb316a832fe3770e008f5fdb77016b0cc107e8789d1d5->leave($__internal_1819b1786f7d48f1fa2cb316a832fe3770e008f5fdb77016b0cc107e8789d1d5_prof);

        
        $__internal_71df9709584a5b98a5eb09318e68bf930c4df1154648987a254a882cebffb778->leave($__internal_71df9709584a5b98a5eb09318e68bf930c4df1154648987a254a882cebffb778_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_d7ac7bba366042a4b763bd51bca57e297469361103cd01a5922dd1654576e62d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7ac7bba366042a4b763bd51bca57e297469361103cd01a5922dd1654576e62d->enter($__internal_d7ac7bba366042a4b763bd51bca57e297469361103cd01a5922dd1654576e62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_d27f2f6ed086f4e88ccc1f0374e0900240905b31fa822835cd1b8d1331ef150a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d27f2f6ed086f4e88ccc1f0374e0900240905b31fa822835cd1b8d1331ef150a->enter($__internal_d27f2f6ed086f4e88ccc1f0374e0900240905b31fa822835cd1b8d1331ef150a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_d27f2f6ed086f4e88ccc1f0374e0900240905b31fa822835cd1b8d1331ef150a->leave($__internal_d27f2f6ed086f4e88ccc1f0374e0900240905b31fa822835cd1b8d1331ef150a_prof);

        
        $__internal_d7ac7bba366042a4b763bd51bca57e297469361103cd01a5922dd1654576e62d->leave($__internal_d7ac7bba366042a4b763bd51bca57e297469361103cd01a5922dd1654576e62d_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_8482de2efb222ba2d85fc76267220e7268ab32fe030e5d3a3702abdaf42e9b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8482de2efb222ba2d85fc76267220e7268ab32fe030e5d3a3702abdaf42e9b8d->enter($__internal_8482de2efb222ba2d85fc76267220e7268ab32fe030e5d3a3702abdaf42e9b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_71b485c3b49e22e9032c803035dad4fa41a1ed6eb7a41357deee542206b41604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71b485c3b49e22e9032c803035dad4fa41a1ed6eb7a41357deee542206b41604->enter($__internal_71b485c3b49e22e9032c803035dad4fa41a1ed6eb7a41357deee542206b41604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_71b485c3b49e22e9032c803035dad4fa41a1ed6eb7a41357deee542206b41604->leave($__internal_71b485c3b49e22e9032c803035dad4fa41a1ed6eb7a41357deee542206b41604_prof);

        
        $__internal_8482de2efb222ba2d85fc76267220e7268ab32fe030e5d3a3702abdaf42e9b8d->leave($__internal_8482de2efb222ba2d85fc76267220e7268ab32fe030e5d3a3702abdaf42e9b8d_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_53ff65fca41ca40e0b1a2073696b215ba6b08175c60fcc10a84f62ca548dafad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53ff65fca41ca40e0b1a2073696b215ba6b08175c60fcc10a84f62ca548dafad->enter($__internal_53ff65fca41ca40e0b1a2073696b215ba6b08175c60fcc10a84f62ca548dafad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_b268b5b94d1fb30334bf6bbd9184fd6c8346c792bea032dc8844d8d7a479e681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b268b5b94d1fb30334bf6bbd9184fd6c8346c792bea032dc8844d8d7a479e681->enter($__internal_b268b5b94d1fb30334bf6bbd9184fd6c8346c792bea032dc8844d8d7a479e681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_b268b5b94d1fb30334bf6bbd9184fd6c8346c792bea032dc8844d8d7a479e681->leave($__internal_b268b5b94d1fb30334bf6bbd9184fd6c8346c792bea032dc8844d8d7a479e681_prof);

        
        $__internal_53ff65fca41ca40e0b1a2073696b215ba6b08175c60fcc10a84f62ca548dafad->leave($__internal_53ff65fca41ca40e0b1a2073696b215ba6b08175c60fcc10a84f62ca548dafad_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_028a3cebe7f0a4aa07e7a3bd2ab38451d4050a116ea1a667775ef2748e93ea43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_028a3cebe7f0a4aa07e7a3bd2ab38451d4050a116ea1a667775ef2748e93ea43->enter($__internal_028a3cebe7f0a4aa07e7a3bd2ab38451d4050a116ea1a667775ef2748e93ea43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_a97a9fb31ab26ec8d2d0b75d3779e1eb774c05caaded38bfc91d075408f75308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97a9fb31ab26ec8d2d0b75d3779e1eb774c05caaded38bfc91d075408f75308->enter($__internal_a97a9fb31ab26ec8d2d0b75d3779e1eb774c05caaded38bfc91d075408f75308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_a97a9fb31ab26ec8d2d0b75d3779e1eb774c05caaded38bfc91d075408f75308->leave($__internal_a97a9fb31ab26ec8d2d0b75d3779e1eb774c05caaded38bfc91d075408f75308_prof);

        
        $__internal_028a3cebe7f0a4aa07e7a3bd2ab38451d4050a116ea1a667775ef2748e93ea43->leave($__internal_028a3cebe7f0a4aa07e7a3bd2ab38451d4050a116ea1a667775ef2748e93ea43_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_27aef98651ef9c705df7b0c811f9a8889c63ef7c969bdcf20f7d1aeda644a092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27aef98651ef9c705df7b0c811f9a8889c63ef7c969bdcf20f7d1aeda644a092->enter($__internal_27aef98651ef9c705df7b0c811f9a8889c63ef7c969bdcf20f7d1aeda644a092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_7c698d31ba770a802460e73ed1ef02f2af083fdabe7643784b92078b5aa39590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c698d31ba770a802460e73ed1ef02f2af083fdabe7643784b92078b5aa39590->enter($__internal_7c698d31ba770a802460e73ed1ef02f2af083fdabe7643784b92078b5aa39590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_7c698d31ba770a802460e73ed1ef02f2af083fdabe7643784b92078b5aa39590->leave($__internal_7c698d31ba770a802460e73ed1ef02f2af083fdabe7643784b92078b5aa39590_prof);

        
        $__internal_27aef98651ef9c705df7b0c811f9a8889c63ef7c969bdcf20f7d1aeda644a092->leave($__internal_27aef98651ef9c705df7b0c811f9a8889c63ef7c969bdcf20f7d1aeda644a092_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_3fe23a9e0caeedfed33fd9b3731c1b3a2d0f65cb972e8bd565adccfccd7a7f4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fe23a9e0caeedfed33fd9b3731c1b3a2d0f65cb972e8bd565adccfccd7a7f4c->enter($__internal_3fe23a9e0caeedfed33fd9b3731c1b3a2d0f65cb972e8bd565adccfccd7a7f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_59acbbe2b907c99134f7986a5d04573d666315729d38cd90a100d77b7413a5e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59acbbe2b907c99134f7986a5d04573d666315729d38cd90a100d77b7413a5e6->enter($__internal_59acbbe2b907c99134f7986a5d04573d666315729d38cd90a100d77b7413a5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_59acbbe2b907c99134f7986a5d04573d666315729d38cd90a100d77b7413a5e6->leave($__internal_59acbbe2b907c99134f7986a5d04573d666315729d38cd90a100d77b7413a5e6_prof);

        
        $__internal_3fe23a9e0caeedfed33fd9b3731c1b3a2d0f65cb972e8bd565adccfccd7a7f4c->leave($__internal_3fe23a9e0caeedfed33fd9b3731c1b3a2d0f65cb972e8bd565adccfccd7a7f4c_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_36b39c4503933f6e0d0ef56cf2a1d20070526563f1c31e00adbd7b57db0b9a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36b39c4503933f6e0d0ef56cf2a1d20070526563f1c31e00adbd7b57db0b9a74->enter($__internal_36b39c4503933f6e0d0ef56cf2a1d20070526563f1c31e00adbd7b57db0b9a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_a14dfcbf4e10f3a6c916eae2fe1862fe74c1c72cf8f6dad0d3f32b1ff3466f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a14dfcbf4e10f3a6c916eae2fe1862fe74c1c72cf8f6dad0d3f32b1ff3466f57->enter($__internal_a14dfcbf4e10f3a6c916eae2fe1862fe74c1c72cf8f6dad0d3f32b1ff3466f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_a14dfcbf4e10f3a6c916eae2fe1862fe74c1c72cf8f6dad0d3f32b1ff3466f57->leave($__internal_a14dfcbf4e10f3a6c916eae2fe1862fe74c1c72cf8f6dad0d3f32b1ff3466f57_prof);

        
        $__internal_36b39c4503933f6e0d0ef56cf2a1d20070526563f1c31e00adbd7b57db0b9a74->leave($__internal_36b39c4503933f6e0d0ef56cf2a1d20070526563f1c31e00adbd7b57db0b9a74_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_475ae3ad799499e1eda5bd888bb702e6141c4a2ab9b578fd2f2b99dbdcfbe982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_475ae3ad799499e1eda5bd888bb702e6141c4a2ab9b578fd2f2b99dbdcfbe982->enter($__internal_475ae3ad799499e1eda5bd888bb702e6141c4a2ab9b578fd2f2b99dbdcfbe982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_18c149e97134c1dcf13138b4bc81798290d17e117bab081dc069b354edeaa5e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c149e97134c1dcf13138b4bc81798290d17e117bab081dc069b354edeaa5e7->enter($__internal_18c149e97134c1dcf13138b4bc81798290d17e117bab081dc069b354edeaa5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_18c149e97134c1dcf13138b4bc81798290d17e117bab081dc069b354edeaa5e7->leave($__internal_18c149e97134c1dcf13138b4bc81798290d17e117bab081dc069b354edeaa5e7_prof);

        
        $__internal_475ae3ad799499e1eda5bd888bb702e6141c4a2ab9b578fd2f2b99dbdcfbe982->leave($__internal_475ae3ad799499e1eda5bd888bb702e6141c4a2ab9b578fd2f2b99dbdcfbe982_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_536c3cfe7334da5f205854de69104676f93add26db8f2d77079c03bec5873908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_536c3cfe7334da5f205854de69104676f93add26db8f2d77079c03bec5873908->enter($__internal_536c3cfe7334da5f205854de69104676f93add26db8f2d77079c03bec5873908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_58281f0a4819041473967d012ff2003cf60d2feb1ac770ff813ec5191ea3e4c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58281f0a4819041473967d012ff2003cf60d2feb1ac770ff813ec5191ea3e4c2->enter($__internal_58281f0a4819041473967d012ff2003cf60d2feb1ac770ff813ec5191ea3e4c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 209
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_58281f0a4819041473967d012ff2003cf60d2feb1ac770ff813ec5191ea3e4c2->leave($__internal_58281f0a4819041473967d012ff2003cf60d2feb1ac770ff813ec5191ea3e4c2_prof);

        
        $__internal_536c3cfe7334da5f205854de69104676f93add26db8f2d77079c03bec5873908->leave($__internal_536c3cfe7334da5f205854de69104676f93add26db8f2d77079c03bec5873908_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d79f082c96c252e8e29502b6b32964fddcc0c6bad5fe51135cfd2ab17589eab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d79f082c96c252e8e29502b6b32964fddcc0c6bad5fe51135cfd2ab17589eab0->enter($__internal_d79f082c96c252e8e29502b6b32964fddcc0c6bad5fe51135cfd2ab17589eab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_8de0d522111774b606d01e128637912ef9aa3012a950fbeff2c71781014be228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de0d522111774b606d01e128637912ef9aa3012a950fbeff2c71781014be228->enter($__internal_8de0d522111774b606d01e128637912ef9aa3012a950fbeff2c71781014be228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_8de0d522111774b606d01e128637912ef9aa3012a950fbeff2c71781014be228->leave($__internal_8de0d522111774b606d01e128637912ef9aa3012a950fbeff2c71781014be228_prof);

        
        $__internal_d79f082c96c252e8e29502b6b32964fddcc0c6bad5fe51135cfd2ab17589eab0->leave($__internal_d79f082c96c252e8e29502b6b32964fddcc0c6bad5fe51135cfd2ab17589eab0_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_b1492e1b651a3ffd0e19ade7614e27159758abd6ce614f2834c4b9b90ab31019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1492e1b651a3ffd0e19ade7614e27159758abd6ce614f2834c4b9b90ab31019->enter($__internal_b1492e1b651a3ffd0e19ade7614e27159758abd6ce614f2834c4b9b90ab31019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_6dbcc05968543cf0cbfc8af88a3e85cf123d7470b4863a17de6cf12448d2d1d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dbcc05968543cf0cbfc8af88a3e85cf123d7470b4863a17de6cf12448d2d1d4->enter($__internal_6dbcc05968543cf0cbfc8af88a3e85cf123d7470b4863a17de6cf12448d2d1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_6dbcc05968543cf0cbfc8af88a3e85cf123d7470b4863a17de6cf12448d2d1d4->leave($__internal_6dbcc05968543cf0cbfc8af88a3e85cf123d7470b4863a17de6cf12448d2d1d4_prof);

        
        $__internal_b1492e1b651a3ffd0e19ade7614e27159758abd6ce614f2834c4b9b90ab31019->leave($__internal_b1492e1b651a3ffd0e19ade7614e27159758abd6ce614f2834c4b9b90ab31019_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_d736e36e75e3db8f8b6b76a39e968896ebcc1fac9823e85c1412dc8e0fe0142c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d736e36e75e3db8f8b6b76a39e968896ebcc1fac9823e85c1412dc8e0fe0142c->enter($__internal_d736e36e75e3db8f8b6b76a39e968896ebcc1fac9823e85c1412dc8e0fe0142c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_2e13f9a69d98d8ef42bd6a23e170f44fd42819badf3708f2427fd6cdaab92a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e13f9a69d98d8ef42bd6a23e170f44fd42819badf3708f2427fd6cdaab92a76->enter($__internal_2e13f9a69d98d8ef42bd6a23e170f44fd42819badf3708f2427fd6cdaab92a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2e13f9a69d98d8ef42bd6a23e170f44fd42819badf3708f2427fd6cdaab92a76->leave($__internal_2e13f9a69d98d8ef42bd6a23e170f44fd42819badf3708f2427fd6cdaab92a76_prof);

        
        $__internal_d736e36e75e3db8f8b6b76a39e968896ebcc1fac9823e85c1412dc8e0fe0142c->leave($__internal_d736e36e75e3db8f8b6b76a39e968896ebcc1fac9823e85c1412dc8e0fe0142c_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_f04ddd2db0fa3ec508173b4ae84c3bf5687973e8ef411d85187b8a8826321dee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f04ddd2db0fa3ec508173b4ae84c3bf5687973e8ef411d85187b8a8826321dee->enter($__internal_f04ddd2db0fa3ec508173b4ae84c3bf5687973e8ef411d85187b8a8826321dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_742fde1532d32d0dc32e918bb5fc3a702882cf7bc9f5ba649f197d4f48539c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742fde1532d32d0dc32e918bb5fc3a702882cf7bc9f5ba649f197d4f48539c28->enter($__internal_742fde1532d32d0dc32e918bb5fc3a702882cf7bc9f5ba649f197d4f48539c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_742fde1532d32d0dc32e918bb5fc3a702882cf7bc9f5ba649f197d4f48539c28->leave($__internal_742fde1532d32d0dc32e918bb5fc3a702882cf7bc9f5ba649f197d4f48539c28_prof);

        
        $__internal_f04ddd2db0fa3ec508173b4ae84c3bf5687973e8ef411d85187b8a8826321dee->leave($__internal_f04ddd2db0fa3ec508173b4ae84c3bf5687973e8ef411d85187b8a8826321dee_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_b0ce23847d469390e6ec7c652584c47e6aea23027c9995d947a0b9170e34d411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0ce23847d469390e6ec7c652584c47e6aea23027c9995d947a0b9170e34d411->enter($__internal_b0ce23847d469390e6ec7c652584c47e6aea23027c9995d947a0b9170e34d411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_c763382d79233b5c154c70c4c2cdbeea0699ac2c00afccfa22510cd8c3e3cdd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c763382d79233b5c154c70c4c2cdbeea0699ac2c00afccfa22510cd8c3e3cdd0->enter($__internal_c763382d79233b5c154c70c4c2cdbeea0699ac2c00afccfa22510cd8c3e3cdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c763382d79233b5c154c70c4c2cdbeea0699ac2c00afccfa22510cd8c3e3cdd0->leave($__internal_c763382d79233b5c154c70c4c2cdbeea0699ac2c00afccfa22510cd8c3e3cdd0_prof);

        
        $__internal_b0ce23847d469390e6ec7c652584c47e6aea23027c9995d947a0b9170e34d411->leave($__internal_b0ce23847d469390e6ec7c652584c47e6aea23027c9995d947a0b9170e34d411_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_e9255b1b9b1d6aa47fe2a88b1770b798a474bd220f0fe8021d5d46bfaa4369af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9255b1b9b1d6aa47fe2a88b1770b798a474bd220f0fe8021d5d46bfaa4369af->enter($__internal_e9255b1b9b1d6aa47fe2a88b1770b798a474bd220f0fe8021d5d46bfaa4369af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_2a3b573af47ae10ad57c46568aa80bf3c11825687114ba99d79d1a288e8a7c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3b573af47ae10ad57c46568aa80bf3c11825687114ba99d79d1a288e8a7c3f->enter($__internal_2a3b573af47ae10ad57c46568aa80bf3c11825687114ba99d79d1a288e8a7c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2a3b573af47ae10ad57c46568aa80bf3c11825687114ba99d79d1a288e8a7c3f->leave($__internal_2a3b573af47ae10ad57c46568aa80bf3c11825687114ba99d79d1a288e8a7c3f_prof);

        
        $__internal_e9255b1b9b1d6aa47fe2a88b1770b798a474bd220f0fe8021d5d46bfaa4369af->leave($__internal_e9255b1b9b1d6aa47fe2a88b1770b798a474bd220f0fe8021d5d46bfaa4369af_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_b856756eb1aaf6c1fbd70f63ba3c686aeb6355a5df5a666ba56f611acb85dfdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b856756eb1aaf6c1fbd70f63ba3c686aeb6355a5df5a666ba56f611acb85dfdc->enter($__internal_b856756eb1aaf6c1fbd70f63ba3c686aeb6355a5df5a666ba56f611acb85dfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_90875c266b6807336525a2a6c38fc13be380a4116ffad702210b50cf1bc16892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90875c266b6807336525a2a6c38fc13be380a4116ffad702210b50cf1bc16892->enter($__internal_90875c266b6807336525a2a6c38fc13be380a4116ffad702210b50cf1bc16892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_90875c266b6807336525a2a6c38fc13be380a4116ffad702210b50cf1bc16892->leave($__internal_90875c266b6807336525a2a6c38fc13be380a4116ffad702210b50cf1bc16892_prof);

        
        $__internal_b856756eb1aaf6c1fbd70f63ba3c686aeb6355a5df5a666ba56f611acb85dfdc->leave($__internal_b856756eb1aaf6c1fbd70f63ba3c686aeb6355a5df5a666ba56f611acb85dfdc_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_af04243e526c0e2bbc0a7bfbf5605eea5369e2415fb008a433e914c1b5d4280f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af04243e526c0e2bbc0a7bfbf5605eea5369e2415fb008a433e914c1b5d4280f->enter($__internal_af04243e526c0e2bbc0a7bfbf5605eea5369e2415fb008a433e914c1b5d4280f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_f3a2132a2c07321a7ffb14b9034d6c453f9ae50437c9db5f8754faf0955e313f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a2132a2c07321a7ffb14b9034d6c453f9ae50437c9db5f8754faf0955e313f->enter($__internal_f3a2132a2c07321a7ffb14b9034d6c453f9ae50437c9db5f8754faf0955e313f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_f3a2132a2c07321a7ffb14b9034d6c453f9ae50437c9db5f8754faf0955e313f->leave($__internal_f3a2132a2c07321a7ffb14b9034d6c453f9ae50437c9db5f8754faf0955e313f_prof);

        
        $__internal_af04243e526c0e2bbc0a7bfbf5605eea5369e2415fb008a433e914c1b5d4280f->leave($__internal_af04243e526c0e2bbc0a7bfbf5605eea5369e2415fb008a433e914c1b5d4280f_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_7c7f206098909c0cb7575bd9a27b247099933094a1dc088a9c6d669061d74e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c7f206098909c0cb7575bd9a27b247099933094a1dc088a9c6d669061d74e63->enter($__internal_7c7f206098909c0cb7575bd9a27b247099933094a1dc088a9c6d669061d74e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_90a719541ef732ac86caa562e5522e22639381ee34da02eb6886e6dc997dd618 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a719541ef732ac86caa562e5522e22639381ee34da02eb6886e6dc997dd618->enter($__internal_90a719541ef732ac86caa562e5522e22639381ee34da02eb6886e6dc997dd618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_90a719541ef732ac86caa562e5522e22639381ee34da02eb6886e6dc997dd618->leave($__internal_90a719541ef732ac86caa562e5522e22639381ee34da02eb6886e6dc997dd618_prof);

        
        $__internal_7c7f206098909c0cb7575bd9a27b247099933094a1dc088a9c6d669061d74e63->leave($__internal_7c7f206098909c0cb7575bd9a27b247099933094a1dc088a9c6d669061d74e63_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\wamp\\www\\projet_narindra\\travel2\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
