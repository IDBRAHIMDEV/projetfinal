<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_c4ab110c4d154db9e3749ac5193dcde1688891b247a7cac434d9f12959b4fe12 extends Twig_Template
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
        $__internal_8d16ff3bceca51443da9443d78ee5544e47202bbfd8c95272abf182d7fe5285c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d16ff3bceca51443da9443d78ee5544e47202bbfd8c95272abf182d7fe5285c->enter($__internal_8d16ff3bceca51443da9443d78ee5544e47202bbfd8c95272abf182d7fe5285c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_6c56c97f07afedc0f27fce560bd34cfc96b5e0aeec6c0a1d3646b6f9b198fea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c56c97f07afedc0f27fce560bd34cfc96b5e0aeec6c0a1d3646b6f9b198fea9->enter($__internal_6c56c97f07afedc0f27fce560bd34cfc96b5e0aeec6c0a1d3646b6f9b198fea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('radio_label', $context, $blocks);
        // line 199
        echo "
";
        // line 200
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 224
        echo "
";
        // line 226
        echo "
";
        // line 227
        $this->displayBlock('form_row', $context, $blocks);
        // line 234
        echo "
";
        // line 235
        $this->displayBlock('button_row', $context, $blocks);
        // line 240
        echo "
";
        // line 241
        $this->displayBlock('choice_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('date_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('time_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 267
        echo "
";
        // line 268
        $this->displayBlock('radio_row', $context, $blocks);
        // line 274
        echo "
";
        // line 276
        echo "
";
        // line 277
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_8d16ff3bceca51443da9443d78ee5544e47202bbfd8c95272abf182d7fe5285c->leave($__internal_8d16ff3bceca51443da9443d78ee5544e47202bbfd8c95272abf182d7fe5285c_prof);

        
        $__internal_6c56c97f07afedc0f27fce560bd34cfc96b5e0aeec6c0a1d3646b6f9b198fea9->leave($__internal_6c56c97f07afedc0f27fce560bd34cfc96b5e0aeec6c0a1d3646b6f9b198fea9_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_bd1c4d917aa73d534d4dd8d6ae9774dd470bad622d6c82c57f042537d701d12e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd1c4d917aa73d534d4dd8d6ae9774dd470bad622d6c82c57f042537d701d12e->enter($__internal_bd1c4d917aa73d534d4dd8d6ae9774dd470bad622d6c82c57f042537d701d12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_b8d1728eb453f1247d52cac94c0c2f5b2d6f52aa291fe879de988ed48741da23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8d1728eb453f1247d52cac94c0c2f5b2d6f52aa291fe879de988ed48741da23->enter($__internal_b8d1728eb453f1247d52cac94c0c2f5b2d6f52aa291fe879de988ed48741da23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b8d1728eb453f1247d52cac94c0c2f5b2d6f52aa291fe879de988ed48741da23->leave($__internal_b8d1728eb453f1247d52cac94c0c2f5b2d6f52aa291fe879de988ed48741da23_prof);

        
        $__internal_bd1c4d917aa73d534d4dd8d6ae9774dd470bad622d6c82c57f042537d701d12e->leave($__internal_bd1c4d917aa73d534d4dd8d6ae9774dd470bad622d6c82c57f042537d701d12e_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_ba00a9ccf3fbabb97ce1efa48a935972ab86574529f0065b2c8f338682eb6dd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba00a9ccf3fbabb97ce1efa48a935972ab86574529f0065b2c8f338682eb6dd3->enter($__internal_ba00a9ccf3fbabb97ce1efa48a935972ab86574529f0065b2c8f338682eb6dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_08eb77c5f6fcdd79b13bb6831197bc1efd7d0186970483687d6189ee2c066216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08eb77c5f6fcdd79b13bb6831197bc1efd7d0186970483687d6189ee2c066216->enter($__internal_08eb77c5f6fcdd79b13bb6831197bc1efd7d0186970483687d6189ee2c066216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_08eb77c5f6fcdd79b13bb6831197bc1efd7d0186970483687d6189ee2c066216->leave($__internal_08eb77c5f6fcdd79b13bb6831197bc1efd7d0186970483687d6189ee2c066216_prof);

        
        $__internal_ba00a9ccf3fbabb97ce1efa48a935972ab86574529f0065b2c8f338682eb6dd3->leave($__internal_ba00a9ccf3fbabb97ce1efa48a935972ab86574529f0065b2c8f338682eb6dd3_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_7252a4a89afaf122ccca070f14305740d28ab4570e0867e1eaeb5646a6805a22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7252a4a89afaf122ccca070f14305740d28ab4570e0867e1eaeb5646a6805a22->enter($__internal_7252a4a89afaf122ccca070f14305740d28ab4570e0867e1eaeb5646a6805a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_f9dcec56c4bbfa20a3fb28a040397c0f7e0b05a2a16d715e89c3d31380c84ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9dcec56c4bbfa20a3fb28a040397c0f7e0b05a2a16d715e89c3d31380c84ba4->enter($__internal_f9dcec56c4bbfa20a3fb28a040397c0f7e0b05a2a16d715e89c3d31380c84ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_f9dcec56c4bbfa20a3fb28a040397c0f7e0b05a2a16d715e89c3d31380c84ba4->leave($__internal_f9dcec56c4bbfa20a3fb28a040397c0f7e0b05a2a16d715e89c3d31380c84ba4_prof);

        
        $__internal_7252a4a89afaf122ccca070f14305740d28ab4570e0867e1eaeb5646a6805a22->leave($__internal_7252a4a89afaf122ccca070f14305740d28ab4570e0867e1eaeb5646a6805a22_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_562ba0f735b2a4da23268813ada5dbab8b7e26ee980fc8c7a40407c668ef57b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562ba0f735b2a4da23268813ada5dbab8b7e26ee980fc8c7a40407c668ef57b0->enter($__internal_562ba0f735b2a4da23268813ada5dbab8b7e26ee980fc8c7a40407c668ef57b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_3202d8999f01a66e0efbac7d5132dd085cbd358b4f35560ac8ee7d44e839ce43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3202d8999f01a66e0efbac7d5132dd085cbd358b4f35560ac8ee7d44e839ce43->enter($__internal_3202d8999f01a66e0efbac7d5132dd085cbd358b4f35560ac8ee7d44e839ce43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_7d53888dfabc352deeb61810e4b0062f5e81642b453750078cbdb011c0a68dac = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_5ca8b470fa910023c3dc50af4882b6d5cf88d550f12e5b7bdbe9dfdfc0e5431a = "{{") && ('' === $__internal_5ca8b470fa910023c3dc50af4882b6d5cf88d550f12e5b7bdbe9dfdfc0e5431a || 0 === strpos($__internal_7d53888dfabc352deeb61810e4b0062f5e81642b453750078cbdb011c0a68dac, $__internal_5ca8b470fa910023c3dc50af4882b6d5cf88d550f12e5b7bdbe9dfdfc0e5431a)));
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
        
        $__internal_3202d8999f01a66e0efbac7d5132dd085cbd358b4f35560ac8ee7d44e839ce43->leave($__internal_3202d8999f01a66e0efbac7d5132dd085cbd358b4f35560ac8ee7d44e839ce43_prof);

        
        $__internal_562ba0f735b2a4da23268813ada5dbab8b7e26ee980fc8c7a40407c668ef57b0->leave($__internal_562ba0f735b2a4da23268813ada5dbab8b7e26ee980fc8c7a40407c668ef57b0_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_43573fcc0ada13d177e7e77ebd45b02486c3544f0a561c581c4ad2c455133c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43573fcc0ada13d177e7e77ebd45b02486c3544f0a561c581c4ad2c455133c83->enter($__internal_43573fcc0ada13d177e7e77ebd45b02486c3544f0a561c581c4ad2c455133c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_d3f6f02bc95deeefb49981cdf4053bc55a6fd989a85ac5a9fc3d7a44a1ffa14a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f6f02bc95deeefb49981cdf4053bc55a6fd989a85ac5a9fc3d7a44a1ffa14a->enter($__internal_d3f6f02bc95deeefb49981cdf4053bc55a6fd989a85ac5a9fc3d7a44a1ffa14a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_d3f6f02bc95deeefb49981cdf4053bc55a6fd989a85ac5a9fc3d7a44a1ffa14a->leave($__internal_d3f6f02bc95deeefb49981cdf4053bc55a6fd989a85ac5a9fc3d7a44a1ffa14a_prof);

        
        $__internal_43573fcc0ada13d177e7e77ebd45b02486c3544f0a561c581c4ad2c455133c83->leave($__internal_43573fcc0ada13d177e7e77ebd45b02486c3544f0a561c581c4ad2c455133c83_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_6f4c173263aa147f153b16723d7326b9faf6329c35dbf2e0d8e635876d9300d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f4c173263aa147f153b16723d7326b9faf6329c35dbf2e0d8e635876d9300d0->enter($__internal_6f4c173263aa147f153b16723d7326b9faf6329c35dbf2e0d8e635876d9300d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_61b3bbcff622ed4cb609a2caa5e288dd189d40967bd13d674a91e3a56a753c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61b3bbcff622ed4cb609a2caa5e288dd189d40967bd13d674a91e3a56a753c24->enter($__internal_61b3bbcff622ed4cb609a2caa5e288dd189d40967bd13d674a91e3a56a753c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_61b3bbcff622ed4cb609a2caa5e288dd189d40967bd13d674a91e3a56a753c24->leave($__internal_61b3bbcff622ed4cb609a2caa5e288dd189d40967bd13d674a91e3a56a753c24_prof);

        
        $__internal_6f4c173263aa147f153b16723d7326b9faf6329c35dbf2e0d8e635876d9300d0->leave($__internal_6f4c173263aa147f153b16723d7326b9faf6329c35dbf2e0d8e635876d9300d0_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_90f0add9ad061e51e3d675d9f6fce5ddcba66e3963ed7013b7b0e6dde8b70e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f0add9ad061e51e3d675d9f6fce5ddcba66e3963ed7013b7b0e6dde8b70e53->enter($__internal_90f0add9ad061e51e3d675d9f6fce5ddcba66e3963ed7013b7b0e6dde8b70e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_c3f1704d8696d86064577a972d07ac0af6ae7b64ff2a4597c4ba02d0f47f9574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3f1704d8696d86064577a972d07ac0af6ae7b64ff2a4597c4ba02d0f47f9574->enter($__internal_c3f1704d8696d86064577a972d07ac0af6ae7b64ff2a4597c4ba02d0f47f9574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_c3f1704d8696d86064577a972d07ac0af6ae7b64ff2a4597c4ba02d0f47f9574->leave($__internal_c3f1704d8696d86064577a972d07ac0af6ae7b64ff2a4597c4ba02d0f47f9574_prof);

        
        $__internal_90f0add9ad061e51e3d675d9f6fce5ddcba66e3963ed7013b7b0e6dde8b70e53->leave($__internal_90f0add9ad061e51e3d675d9f6fce5ddcba66e3963ed7013b7b0e6dde8b70e53_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_8c2daf7c7c53adbcf2b6dbc34f911cc4c8359d2732b66f34e2bd306ddcbf248d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c2daf7c7c53adbcf2b6dbc34f911cc4c8359d2732b66f34e2bd306ddcbf248d->enter($__internal_8c2daf7c7c53adbcf2b6dbc34f911cc4c8359d2732b66f34e2bd306ddcbf248d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_987f17b38df22ce928b69b4fc2ecf4860877a78350a91448d7002b116beef050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_987f17b38df22ce928b69b4fc2ecf4860877a78350a91448d7002b116beef050->enter($__internal_987f17b38df22ce928b69b4fc2ecf4860877a78350a91448d7002b116beef050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_987f17b38df22ce928b69b4fc2ecf4860877a78350a91448d7002b116beef050->leave($__internal_987f17b38df22ce928b69b4fc2ecf4860877a78350a91448d7002b116beef050_prof);

        
        $__internal_8c2daf7c7c53adbcf2b6dbc34f911cc4c8359d2732b66f34e2bd306ddcbf248d->leave($__internal_8c2daf7c7c53adbcf2b6dbc34f911cc4c8359d2732b66f34e2bd306ddcbf248d_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_1f09629a58cfc2a1daa4e23b82bb57737d73bb946708e173be70c0aa0f48b272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f09629a58cfc2a1daa4e23b82bb57737d73bb946708e173be70c0aa0f48b272->enter($__internal_1f09629a58cfc2a1daa4e23b82bb57737d73bb946708e173be70c0aa0f48b272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_af309324070d7170382cb63ea36baf1e5a305ed5e838b79ae5a8bfb02c999896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af309324070d7170382cb63ea36baf1e5a305ed5e838b79ae5a8bfb02c999896->enter($__internal_af309324070d7170382cb63ea36baf1e5a305ed5e838b79ae5a8bfb02c999896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_af309324070d7170382cb63ea36baf1e5a305ed5e838b79ae5a8bfb02c999896->leave($__internal_af309324070d7170382cb63ea36baf1e5a305ed5e838b79ae5a8bfb02c999896_prof);

        
        $__internal_1f09629a58cfc2a1daa4e23b82bb57737d73bb946708e173be70c0aa0f48b272->leave($__internal_1f09629a58cfc2a1daa4e23b82bb57737d73bb946708e173be70c0aa0f48b272_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_dd1e4158fe82d4c4e7ad18dbe06330320dea82dacd8b4c8cea66d7a646493aec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd1e4158fe82d4c4e7ad18dbe06330320dea82dacd8b4c8cea66d7a646493aec->enter($__internal_dd1e4158fe82d4c4e7ad18dbe06330320dea82dacd8b4c8cea66d7a646493aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_f01394528313ec8cc06cd76c655055476e102bf2f8e1b8bca3c8fa761eb6cfb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01394528313ec8cc06cd76c655055476e102bf2f8e1b8bca3c8fa761eb6cfb5->enter($__internal_f01394528313ec8cc06cd76c655055476e102bf2f8e1b8bca3c8fa761eb6cfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_f01394528313ec8cc06cd76c655055476e102bf2f8e1b8bca3c8fa761eb6cfb5->leave($__internal_f01394528313ec8cc06cd76c655055476e102bf2f8e1b8bca3c8fa761eb6cfb5_prof);

        
        $__internal_dd1e4158fe82d4c4e7ad18dbe06330320dea82dacd8b4c8cea66d7a646493aec->leave($__internal_dd1e4158fe82d4c4e7ad18dbe06330320dea82dacd8b4c8cea66d7a646493aec_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_1e6995e4310ffd56032900ea8d20ac6f0e95f0ee4fa7b044af04e65bd790ac1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e6995e4310ffd56032900ea8d20ac6f0e95f0ee4fa7b044af04e65bd790ac1c->enter($__internal_1e6995e4310ffd56032900ea8d20ac6f0e95f0ee4fa7b044af04e65bd790ac1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_238abed047bdf4c83afe5b878d872eed73f9d93e1c25fcc73d157ee29d23e4a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_238abed047bdf4c83afe5b878d872eed73f9d93e1c25fcc73d157ee29d23e4a6->enter($__internal_238abed047bdf4c83afe5b878d872eed73f9d93e1c25fcc73d157ee29d23e4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_238abed047bdf4c83afe5b878d872eed73f9d93e1c25fcc73d157ee29d23e4a6->leave($__internal_238abed047bdf4c83afe5b878d872eed73f9d93e1c25fcc73d157ee29d23e4a6_prof);

        
        $__internal_1e6995e4310ffd56032900ea8d20ac6f0e95f0ee4fa7b044af04e65bd790ac1c->leave($__internal_1e6995e4310ffd56032900ea8d20ac6f0e95f0ee4fa7b044af04e65bd790ac1c_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_e2c923236533669094a710392f14279d77622efc4da18d68e3645da500e0fd7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2c923236533669094a710392f14279d77622efc4da18d68e3645da500e0fd7a->enter($__internal_e2c923236533669094a710392f14279d77622efc4da18d68e3645da500e0fd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_faf47ecdb4848a0ed00882a85133cbff55debf9dcac42695ce00fc5ce48a6992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf47ecdb4848a0ed00882a85133cbff55debf9dcac42695ce00fc5ce48a6992->enter($__internal_faf47ecdb4848a0ed00882a85133cbff55debf9dcac42695ce00fc5ce48a6992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_faf47ecdb4848a0ed00882a85133cbff55debf9dcac42695ce00fc5ce48a6992->leave($__internal_faf47ecdb4848a0ed00882a85133cbff55debf9dcac42695ce00fc5ce48a6992_prof);

        
        $__internal_e2c923236533669094a710392f14279d77622efc4da18d68e3645da500e0fd7a->leave($__internal_e2c923236533669094a710392f14279d77622efc4da18d68e3645da500e0fd7a_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_c99693c2203cf7d06e75b7857da51a3f4de1c5d58bc2068893d03622cc24b1d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c99693c2203cf7d06e75b7857da51a3f4de1c5d58bc2068893d03622cc24b1d6->enter($__internal_c99693c2203cf7d06e75b7857da51a3f4de1c5d58bc2068893d03622cc24b1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_e835e4a29a495b745c7fe429f30a5000a36c406a2bd7454841a201958fa8ea55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e835e4a29a495b745c7fe429f30a5000a36c406a2bd7454841a201958fa8ea55->enter($__internal_e835e4a29a495b745c7fe429f30a5000a36c406a2bd7454841a201958fa8ea55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_e835e4a29a495b745c7fe429f30a5000a36c406a2bd7454841a201958fa8ea55->leave($__internal_e835e4a29a495b745c7fe429f30a5000a36c406a2bd7454841a201958fa8ea55_prof);

        
        $__internal_c99693c2203cf7d06e75b7857da51a3f4de1c5d58bc2068893d03622cc24b1d6->leave($__internal_c99693c2203cf7d06e75b7857da51a3f4de1c5d58bc2068893d03622cc24b1d6_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_6b3e682275583f8b86e4c2dc7fe31d570d814dab747a5ef13b05645f8e8a8c4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b3e682275583f8b86e4c2dc7fe31d570d814dab747a5ef13b05645f8e8a8c4a->enter($__internal_6b3e682275583f8b86e4c2dc7fe31d570d814dab747a5ef13b05645f8e8a8c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_0f3a8bd46dc030cef195d41d16f179a777ff6c8a54c6ddbc232f4c924082b2dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3a8bd46dc030cef195d41d16f179a777ff6c8a54c6ddbc232f4c924082b2dc->enter($__internal_0f3a8bd46dc030cef195d41d16f179a777ff6c8a54c6ddbc232f4c924082b2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_0f3a8bd46dc030cef195d41d16f179a777ff6c8a54c6ddbc232f4c924082b2dc->leave($__internal_0f3a8bd46dc030cef195d41d16f179a777ff6c8a54c6ddbc232f4c924082b2dc_prof);

        
        $__internal_6b3e682275583f8b86e4c2dc7fe31d570d814dab747a5ef13b05645f8e8a8c4a->leave($__internal_6b3e682275583f8b86e4c2dc7fe31d570d814dab747a5ef13b05645f8e8a8c4a_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_b2f4b6e51b62f502309c50e3734e78b7c74ed99ed1e7e945747e40cfe0a0e397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2f4b6e51b62f502309c50e3734e78b7c74ed99ed1e7e945747e40cfe0a0e397->enter($__internal_b2f4b6e51b62f502309c50e3734e78b7c74ed99ed1e7e945747e40cfe0a0e397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_66c96fbaf866fce17184a33b6778cc799d6dae440ecaad823fc379add2d94125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c96fbaf866fce17184a33b6778cc799d6dae440ecaad823fc379add2d94125->enter($__internal_66c96fbaf866fce17184a33b6778cc799d6dae440ecaad823fc379add2d94125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_66c96fbaf866fce17184a33b6778cc799d6dae440ecaad823fc379add2d94125->leave($__internal_66c96fbaf866fce17184a33b6778cc799d6dae440ecaad823fc379add2d94125_prof);

        
        $__internal_b2f4b6e51b62f502309c50e3734e78b7c74ed99ed1e7e945747e40cfe0a0e397->leave($__internal_b2f4b6e51b62f502309c50e3734e78b7c74ed99ed1e7e945747e40cfe0a0e397_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_c8c8f5895dd67a2117f3444022405e0526fda7d3a9c23153bfd541001a01bbab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8c8f5895dd67a2117f3444022405e0526fda7d3a9c23153bfd541001a01bbab->enter($__internal_c8c8f5895dd67a2117f3444022405e0526fda7d3a9c23153bfd541001a01bbab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_3ba3984f1584d47ce5ac5360a4e6dd976bee9e5c9f1680477cc9c64cda92e02f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba3984f1584d47ce5ac5360a4e6dd976bee9e5c9f1680477cc9c64cda92e02f->enter($__internal_3ba3984f1584d47ce5ac5360a4e6dd976bee9e5c9f1680477cc9c64cda92e02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_3ba3984f1584d47ce5ac5360a4e6dd976bee9e5c9f1680477cc9c64cda92e02f->leave($__internal_3ba3984f1584d47ce5ac5360a4e6dd976bee9e5c9f1680477cc9c64cda92e02f_prof);

        
        $__internal_c8c8f5895dd67a2117f3444022405e0526fda7d3a9c23153bfd541001a01bbab->leave($__internal_c8c8f5895dd67a2117f3444022405e0526fda7d3a9c23153bfd541001a01bbab_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_81567d6341c8dc01d5a21ca9b135c2062de67443f509ed2e9446f4884c3b0162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81567d6341c8dc01d5a21ca9b135c2062de67443f509ed2e9446f4884c3b0162->enter($__internal_81567d6341c8dc01d5a21ca9b135c2062de67443f509ed2e9446f4884c3b0162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_30d88d6d8b3ae85cc28d96c6de30c6ecbddc67267f174857a80acc40a626b046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d88d6d8b3ae85cc28d96c6de30c6ecbddc67267f174857a80acc40a626b046->enter($__internal_30d88d6d8b3ae85cc28d96c6de30c6ecbddc67267f174857a80acc40a626b046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_30d88d6d8b3ae85cc28d96c6de30c6ecbddc67267f174857a80acc40a626b046->leave($__internal_30d88d6d8b3ae85cc28d96c6de30c6ecbddc67267f174857a80acc40a626b046_prof);

        
        $__internal_81567d6341c8dc01d5a21ca9b135c2062de67443f509ed2e9446f4884c3b0162->leave($__internal_81567d6341c8dc01d5a21ca9b135c2062de67443f509ed2e9446f4884c3b0162_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_1f45b223ff246dfb2be334dd1f40a291e0bad37a00af829eb840d13adf3e3c17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f45b223ff246dfb2be334dd1f40a291e0bad37a00af829eb840d13adf3e3c17->enter($__internal_1f45b223ff246dfb2be334dd1f40a291e0bad37a00af829eb840d13adf3e3c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_ffb36e6ed18533bda2231c7ca3acedcb407246e3a48a63ecc4bdc93c563bcb99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffb36e6ed18533bda2231c7ca3acedcb407246e3a48a63ecc4bdc93c563bcb99->enter($__internal_ffb36e6ed18533bda2231c7ca3acedcb407246e3a48a63ecc4bdc93c563bcb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 201
        echo "    ";
        // line 202
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 203
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 204
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 205
                echo "        ";
            }
            // line 206
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 207
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 210
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 211
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 212
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 213
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 216
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 219
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
            // line 220
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 221
            echo "</label>
    ";
        }
        
        $__internal_ffb36e6ed18533bda2231c7ca3acedcb407246e3a48a63ecc4bdc93c563bcb99->leave($__internal_ffb36e6ed18533bda2231c7ca3acedcb407246e3a48a63ecc4bdc93c563bcb99_prof);

        
        $__internal_1f45b223ff246dfb2be334dd1f40a291e0bad37a00af829eb840d13adf3e3c17->leave($__internal_1f45b223ff246dfb2be334dd1f40a291e0bad37a00af829eb840d13adf3e3c17_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d5d54212cb0d77f50307cc9f611713322ea8c033a696382408f34dbefc6b461f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5d54212cb0d77f50307cc9f611713322ea8c033a696382408f34dbefc6b461f->enter($__internal_d5d54212cb0d77f50307cc9f611713322ea8c033a696382408f34dbefc6b461f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_e465a3a4283da5e14d6946bc4b3c743604a3b53d23f7a0d49628eb543715bad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e465a3a4283da5e14d6946bc4b3c743604a3b53d23f7a0d49628eb543715bad5->enter($__internal_e465a3a4283da5e14d6946bc4b3c743604a3b53d23f7a0d49628eb543715bad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 228
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 231
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 232
        echo "</div>";
        
        $__internal_e465a3a4283da5e14d6946bc4b3c743604a3b53d23f7a0d49628eb543715bad5->leave($__internal_e465a3a4283da5e14d6946bc4b3c743604a3b53d23f7a0d49628eb543715bad5_prof);

        
        $__internal_d5d54212cb0d77f50307cc9f611713322ea8c033a696382408f34dbefc6b461f->leave($__internal_d5d54212cb0d77f50307cc9f611713322ea8c033a696382408f34dbefc6b461f_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_b4544c6357587e8fc091866b797f73a977884e8a0f6caf4c8df0a9210ceca7e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4544c6357587e8fc091866b797f73a977884e8a0f6caf4c8df0a9210ceca7e1->enter($__internal_b4544c6357587e8fc091866b797f73a977884e8a0f6caf4c8df0a9210ceca7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_dfc82c718b2909f465606a15ff7d6eb4569a38217d33c46eef8c302f9a1b1b63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc82c718b2909f465606a15ff7d6eb4569a38217d33c46eef8c302f9a1b1b63->enter($__internal_dfc82c718b2909f465606a15ff7d6eb4569a38217d33c46eef8c302f9a1b1b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_dfc82c718b2909f465606a15ff7d6eb4569a38217d33c46eef8c302f9a1b1b63->leave($__internal_dfc82c718b2909f465606a15ff7d6eb4569a38217d33c46eef8c302f9a1b1b63_prof);

        
        $__internal_b4544c6357587e8fc091866b797f73a977884e8a0f6caf4c8df0a9210ceca7e1->leave($__internal_b4544c6357587e8fc091866b797f73a977884e8a0f6caf4c8df0a9210ceca7e1_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_49ace7fb04433b4e115c3828d8a984dde5b6d897808f4e19a2804f918c5cc8fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49ace7fb04433b4e115c3828d8a984dde5b6d897808f4e19a2804f918c5cc8fd->enter($__internal_49ace7fb04433b4e115c3828d8a984dde5b6d897808f4e19a2804f918c5cc8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_548c149bd1ae270de1dd59287c72ca90801806b65c036a65879d7c7dafb20a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548c149bd1ae270de1dd59287c72ca90801806b65c036a65879d7c7dafb20a1d->enter($__internal_548c149bd1ae270de1dd59287c72ca90801806b65c036a65879d7c7dafb20a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_548c149bd1ae270de1dd59287c72ca90801806b65c036a65879d7c7dafb20a1d->leave($__internal_548c149bd1ae270de1dd59287c72ca90801806b65c036a65879d7c7dafb20a1d_prof);

        
        $__internal_49ace7fb04433b4e115c3828d8a984dde5b6d897808f4e19a2804f918c5cc8fd->leave($__internal_49ace7fb04433b4e115c3828d8a984dde5b6d897808f4e19a2804f918c5cc8fd_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_01ca130ed52100e73c86b5514e8236eed544ae1ba0134ca162e28ac5f5970d37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01ca130ed52100e73c86b5514e8236eed544ae1ba0134ca162e28ac5f5970d37->enter($__internal_01ca130ed52100e73c86b5514e8236eed544ae1ba0134ca162e28ac5f5970d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_6fa6695541fec893a7bfa0240140aeec7c536bcdca4373ef60e1c9ac33f1c75a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa6695541fec893a7bfa0240140aeec7c536bcdca4373ef60e1c9ac33f1c75a->enter($__internal_6fa6695541fec893a7bfa0240140aeec7c536bcdca4373ef60e1c9ac33f1c75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6fa6695541fec893a7bfa0240140aeec7c536bcdca4373ef60e1c9ac33f1c75a->leave($__internal_6fa6695541fec893a7bfa0240140aeec7c536bcdca4373ef60e1c9ac33f1c75a_prof);

        
        $__internal_01ca130ed52100e73c86b5514e8236eed544ae1ba0134ca162e28ac5f5970d37->leave($__internal_01ca130ed52100e73c86b5514e8236eed544ae1ba0134ca162e28ac5f5970d37_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_47d3f1c9c4129ab9285dda7de8abdfc6d6b313394ffcf9bc5d0c51c7ae180b9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d3f1c9c4129ab9285dda7de8abdfc6d6b313394ffcf9bc5d0c51c7ae180b9b->enter($__internal_47d3f1c9c4129ab9285dda7de8abdfc6d6b313394ffcf9bc5d0c51c7ae180b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_584c9b78bf707b23df4f2b5f10e657cea25b22c915fbc0903400afd6cd3c13b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584c9b78bf707b23df4f2b5f10e657cea25b22c915fbc0903400afd6cd3c13b7->enter($__internal_584c9b78bf707b23df4f2b5f10e657cea25b22c915fbc0903400afd6cd3c13b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_584c9b78bf707b23df4f2b5f10e657cea25b22c915fbc0903400afd6cd3c13b7->leave($__internal_584c9b78bf707b23df4f2b5f10e657cea25b22c915fbc0903400afd6cd3c13b7_prof);

        
        $__internal_47d3f1c9c4129ab9285dda7de8abdfc6d6b313394ffcf9bc5d0c51c7ae180b9b->leave($__internal_47d3f1c9c4129ab9285dda7de8abdfc6d6b313394ffcf9bc5d0c51c7ae180b9b_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_9b98772b002cf2e4c436c353f9a34228f227991a0eedab838a0bfeef5f65fc8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b98772b002cf2e4c436c353f9a34228f227991a0eedab838a0bfeef5f65fc8f->enter($__internal_9b98772b002cf2e4c436c353f9a34228f227991a0eedab838a0bfeef5f65fc8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_3529e83ca742978ba39e5f9ee7c458c09a0f55d5eaba1da40719a97ca1a05787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3529e83ca742978ba39e5f9ee7c458c09a0f55d5eaba1da40719a97ca1a05787->enter($__internal_3529e83ca742978ba39e5f9ee7c458c09a0f55d5eaba1da40719a97ca1a05787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3529e83ca742978ba39e5f9ee7c458c09a0f55d5eaba1da40719a97ca1a05787->leave($__internal_3529e83ca742978ba39e5f9ee7c458c09a0f55d5eaba1da40719a97ca1a05787_prof);

        
        $__internal_9b98772b002cf2e4c436c353f9a34228f227991a0eedab838a0bfeef5f65fc8f->leave($__internal_9b98772b002cf2e4c436c353f9a34228f227991a0eedab838a0bfeef5f65fc8f_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_dca78c298af618e9d7c68dfb370b9d7097df8a3887acf9873c80ce7c847af858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dca78c298af618e9d7c68dfb370b9d7097df8a3887acf9873c80ce7c847af858->enter($__internal_dca78c298af618e9d7c68dfb370b9d7097df8a3887acf9873c80ce7c847af858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_2253ac78d36c39c0264e3b86f067a74cd53ee29f093f35d4592ae2046a6e07e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2253ac78d36c39c0264e3b86f067a74cd53ee29f093f35d4592ae2046a6e07e5->enter($__internal_2253ac78d36c39c0264e3b86f067a74cd53ee29f093f35d4592ae2046a6e07e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 262
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 265
        echo "</div>";
        
        $__internal_2253ac78d36c39c0264e3b86f067a74cd53ee29f093f35d4592ae2046a6e07e5->leave($__internal_2253ac78d36c39c0264e3b86f067a74cd53ee29f093f35d4592ae2046a6e07e5_prof);

        
        $__internal_dca78c298af618e9d7c68dfb370b9d7097df8a3887acf9873c80ce7c847af858->leave($__internal_dca78c298af618e9d7c68dfb370b9d7097df8a3887acf9873c80ce7c847af858_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_a44d2b6850f459186cad82e89b4034658b8c1c8507916451e5bb81ae5f028f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a44d2b6850f459186cad82e89b4034658b8c1c8507916451e5bb81ae5f028f8a->enter($__internal_a44d2b6850f459186cad82e89b4034658b8c1c8507916451e5bb81ae5f028f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_e45fad0b2913f1c78a895393b649f87f5ef26bd3531ed6321a5c66f02055d344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e45fad0b2913f1c78a895393b649f87f5ef26bd3531ed6321a5c66f02055d344->enter($__internal_e45fad0b2913f1c78a895393b649f87f5ef26bd3531ed6321a5c66f02055d344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 269
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 272
        echo "</div>";
        
        $__internal_e45fad0b2913f1c78a895393b649f87f5ef26bd3531ed6321a5c66f02055d344->leave($__internal_e45fad0b2913f1c78a895393b649f87f5ef26bd3531ed6321a5c66f02055d344_prof);

        
        $__internal_a44d2b6850f459186cad82e89b4034658b8c1c8507916451e5bb81ae5f028f8a->leave($__internal_a44d2b6850f459186cad82e89b4034658b8c1c8507916451e5bb81ae5f028f8a_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_4a2a649563d2c95ef004f546f8a3ed0942fb139d20c9a7c7b1cc83cb47b28ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a2a649563d2c95ef004f546f8a3ed0942fb139d20c9a7c7b1cc83cb47b28ac5->enter($__internal_4a2a649563d2c95ef004f546f8a3ed0942fb139d20c9a7c7b1cc83cb47b28ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_4a36d9a5d729c3d5da917bf06f5dd4c5a3cb3b24708c4a2f1048dc25ea22fc7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a36d9a5d729c3d5da917bf06f5dd4c5a3cb3b24708c4a2f1048dc25ea22fc7b->enter($__internal_4a36d9a5d729c3d5da917bf06f5dd4c5a3cb3b24708c4a2f1048dc25ea22fc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 278
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 279
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 280
            echo "    <ul class=\"list-unstyled\">";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 282
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "</ul>
    ";
            // line 285
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_4a36d9a5d729c3d5da917bf06f5dd4c5a3cb3b24708c4a2f1048dc25ea22fc7b->leave($__internal_4a36d9a5d729c3d5da917bf06f5dd4c5a3cb3b24708c4a2f1048dc25ea22fc7b_prof);

        
        $__internal_4a2a649563d2c95ef004f546f8a3ed0942fb139d20c9a7c7b1cc83cb47b28ac5->leave($__internal_4a2a649563d2c95ef004f546f8a3ed0942fb139d20c9a7c7b1cc83cb47b28ac5_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1139 => 285,  1136 => 284,  1128 => 282,  1124 => 281,  1122 => 280,  1116 => 279,  1114 => 278,  1105 => 277,  1095 => 272,  1093 => 271,  1091 => 270,  1085 => 269,  1076 => 268,  1066 => 265,  1064 => 264,  1062 => 263,  1056 => 262,  1047 => 261,  1037 => 258,  1035 => 257,  1026 => 256,  1016 => 253,  1014 => 252,  1005 => 251,  995 => 248,  993 => 247,  984 => 246,  974 => 243,  972 => 242,  963 => 241,  953 => 238,  951 => 237,  949 => 236,  940 => 235,  930 => 232,  928 => 231,  926 => 230,  924 => 229,  918 => 228,  909 => 227,  897 => 221,  893 => 220,  878 => 219,  874 => 216,  871 => 213,  870 => 212,  869 => 211,  867 => 210,  864 => 209,  861 => 208,  858 => 207,  855 => 206,  852 => 205,  849 => 204,  846 => 203,  843 => 202,  841 => 201,  832 => 200,  822 => 197,  820 => 195,  811 => 194,  801 => 191,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 277,  200 => 276,  197 => 274,  195 => 268,  192 => 267,  190 => 261,  187 => 260,  185 => 256,  182 => 255,  180 => 251,  177 => 250,  175 => 246,  172 => 245,  170 => 241,  167 => 240,  165 => 235,  162 => 234,  160 => 227,  157 => 226,  154 => 224,  152 => 200,  149 => 199,  147 => 194,  144 => 193,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
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
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

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
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
