<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_127b8d2e716378c64c9b8e80248dc68b56829b5e0ad2539154505b026c3d9207 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
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
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd4cd06f1c386c1a84999d60d46402af06182aaf65cec4f14384cde37c0c981d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd4cd06f1c386c1a84999d60d46402af06182aaf65cec4f14384cde37c0c981d->enter($__internal_fd4cd06f1c386c1a84999d60d46402af06182aaf65cec4f14384cde37c0c981d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_2b403f3c205965edf160e241c7bbac5f52fa5dde1b80d4973194f28d1cee5102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b403f3c205965edf160e241c7bbac5f52fa5dde1b80d4973194f28d1cee5102->enter($__internal_2b403f3c205965edf160e241c7bbac5f52fa5dde1b80d4973194f28d1cee5102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd4cd06f1c386c1a84999d60d46402af06182aaf65cec4f14384cde37c0c981d->leave($__internal_fd4cd06f1c386c1a84999d60d46402af06182aaf65cec4f14384cde37c0c981d_prof);

        
        $__internal_2b403f3c205965edf160e241c7bbac5f52fa5dde1b80d4973194f28d1cee5102->leave($__internal_2b403f3c205965edf160e241c7bbac5f52fa5dde1b80d4973194f28d1cee5102_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_6f42d3ae3685cd7e524f854e403d8d230e3ee640c97fdbb67e43131c66d11cd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f42d3ae3685cd7e524f854e403d8d230e3ee640c97fdbb67e43131c66d11cd8->enter($__internal_6f42d3ae3685cd7e524f854e403d8d230e3ee640c97fdbb67e43131c66d11cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_82c2e1c001c45feb2f31038f4d354ec5f6b9e1e1128fb8024a48225e369bdb78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c2e1c001c45feb2f31038f4d354ec5f6b9e1e1128fb8024a48225e369bdb78->enter($__internal_82c2e1c001c45feb2f31038f4d354ec5f6b9e1e1128fb8024a48225e369bdb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_82c2e1c001c45feb2f31038f4d354ec5f6b9e1e1128fb8024a48225e369bdb78->leave($__internal_82c2e1c001c45feb2f31038f4d354ec5f6b9e1e1128fb8024a48225e369bdb78_prof);

        
        $__internal_6f42d3ae3685cd7e524f854e403d8d230e3ee640c97fdbb67e43131c66d11cd8->leave($__internal_6f42d3ae3685cd7e524f854e403d8d230e3ee640c97fdbb67e43131c66d11cd8_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_7123be6f60982ca3be47534f68f0c7cc139d1472aceaf108f5dd41f327f1954b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7123be6f60982ca3be47534f68f0c7cc139d1472aceaf108f5dd41f327f1954b->enter($__internal_7123be6f60982ca3be47534f68f0c7cc139d1472aceaf108f5dd41f327f1954b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_4a77bad483ab4814f1d2ca7a6cf6cd808a152ecea17c11404d9caea11e28854c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a77bad483ab4814f1d2ca7a6cf6cd808a152ecea17c11404d9caea11e28854c->enter($__internal_4a77bad483ab4814f1d2ca7a6cf6cd808a152ecea17c11404d9caea11e28854c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_4a77bad483ab4814f1d2ca7a6cf6cd808a152ecea17c11404d9caea11e28854c->leave($__internal_4a77bad483ab4814f1d2ca7a6cf6cd808a152ecea17c11404d9caea11e28854c_prof);

        
        $__internal_7123be6f60982ca3be47534f68f0c7cc139d1472aceaf108f5dd41f327f1954b->leave($__internal_7123be6f60982ca3be47534f68f0c7cc139d1472aceaf108f5dd41f327f1954b_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_1bab5aab36a786ff74480ef3b64f3d236c9edf1b37a2bef3771f001169d81cab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bab5aab36a786ff74480ef3b64f3d236c9edf1b37a2bef3771f001169d81cab->enter($__internal_1bab5aab36a786ff74480ef3b64f3d236c9edf1b37a2bef3771f001169d81cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_466f1ceb2df195d7376571d8e9f40e50069381dd858cc6dfbac04ec9baa91db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_466f1ceb2df195d7376571d8e9f40e50069381dd858cc6dfbac04ec9baa91db4->enter($__internal_466f1ceb2df195d7376571d8e9f40e50069381dd858cc6dfbac04ec9baa91db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_466f1ceb2df195d7376571d8e9f40e50069381dd858cc6dfbac04ec9baa91db4->leave($__internal_466f1ceb2df195d7376571d8e9f40e50069381dd858cc6dfbac04ec9baa91db4_prof);

        
        $__internal_1bab5aab36a786ff74480ef3b64f3d236c9edf1b37a2bef3771f001169d81cab->leave($__internal_1bab5aab36a786ff74480ef3b64f3d236c9edf1b37a2bef3771f001169d81cab_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_5ab1623efbba8eec694c291fccf98e942871ec0da2dab8d62662fa7173583b27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab1623efbba8eec694c291fccf98e942871ec0da2dab8d62662fa7173583b27->enter($__internal_5ab1623efbba8eec694c291fccf98e942871ec0da2dab8d62662fa7173583b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_9805c68efa7dd36e5c4e1b9878d96aa4a6e0a1118f2cc91d504be59eff7847d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9805c68efa7dd36e5c4e1b9878d96aa4a6e0a1118f2cc91d504be59eff7847d8->enter($__internal_9805c68efa7dd36e5c4e1b9878d96aa4a6e0a1118f2cc91d504be59eff7847d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !(isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_9805c68efa7dd36e5c4e1b9878d96aa4a6e0a1118f2cc91d504be59eff7847d8->leave($__internal_9805c68efa7dd36e5c4e1b9878d96aa4a6e0a1118f2cc91d504be59eff7847d8_prof);

        
        $__internal_5ab1623efbba8eec694c291fccf98e942871ec0da2dab8d62662fa7173583b27->leave($__internal_5ab1623efbba8eec694c291fccf98e942871ec0da2dab8d62662fa7173583b27_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_c7d0be999598e0fcbdd89ad1d3f65cc3e7dd84a27d8acf23af83ed928bf5d248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d0be999598e0fcbdd89ad1d3f65cc3e7dd84a27d8acf23af83ed928bf5d248->enter($__internal_c7d0be999598e0fcbdd89ad1d3f65cc3e7dd84a27d8acf23af83ed928bf5d248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_c2260903802449b5f8b552b453a35a13f221f818d308c0362fcc4ae967553285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2260903802449b5f8b552b453a35a13f221f818d308c0362fcc4ae967553285->enter($__internal_c2260903802449b5f8b552b453a35a13f221f818d308c0362fcc4ae967553285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_c2260903802449b5f8b552b453a35a13f221f818d308c0362fcc4ae967553285->leave($__internal_c2260903802449b5f8b552b453a35a13f221f818d308c0362fcc4ae967553285_prof);

        
        $__internal_c7d0be999598e0fcbdd89ad1d3f65cc3e7dd84a27d8acf23af83ed928bf5d248->leave($__internal_c7d0be999598e0fcbdd89ad1d3f65cc3e7dd84a27d8acf23af83ed928bf5d248_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_768bb1f15815d190b3af24b06ff9b95e78b6ccc52206a2e98c237b80b5b107d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_768bb1f15815d190b3af24b06ff9b95e78b6ccc52206a2e98c237b80b5b107d4->enter($__internal_768bb1f15815d190b3af24b06ff9b95e78b6ccc52206a2e98c237b80b5b107d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_e8ca6461a7aa680d38bc59e93cfb82aebb0dd3185dd045dc962514481e6ab84a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ca6461a7aa680d38bc59e93cfb82aebb0dd3185dd045dc962514481e6ab84a->enter($__internal_e8ca6461a7aa680d38bc59e93cfb82aebb0dd3185dd045dc962514481e6ab84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_e8ca6461a7aa680d38bc59e93cfb82aebb0dd3185dd045dc962514481e6ab84a->leave($__internal_e8ca6461a7aa680d38bc59e93cfb82aebb0dd3185dd045dc962514481e6ab84a_prof);

        
        $__internal_768bb1f15815d190b3af24b06ff9b95e78b6ccc52206a2e98c237b80b5b107d4->leave($__internal_768bb1f15815d190b3af24b06ff9b95e78b6ccc52206a2e98c237b80b5b107d4_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_a72d8b7e8932a54873a4a939a93622b02d3f3b755a7fe78f8f5348124477abdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a72d8b7e8932a54873a4a939a93622b02d3f3b755a7fe78f8f5348124477abdf->enter($__internal_a72d8b7e8932a54873a4a939a93622b02d3f3b755a7fe78f8f5348124477abdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_45cca5a286e44994046431c79557a4c1b2ffac7842e1810db79178db1a088686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45cca5a286e44994046431c79557a4c1b2ffac7842e1810db79178db1a088686->enter($__internal_45cca5a286e44994046431c79557a4c1b2ffac7842e1810db79178db1a088686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_45cca5a286e44994046431c79557a4c1b2ffac7842e1810db79178db1a088686->leave($__internal_45cca5a286e44994046431c79557a4c1b2ffac7842e1810db79178db1a088686_prof);

        
        $__internal_a72d8b7e8932a54873a4a939a93622b02d3f3b755a7fe78f8f5348124477abdf->leave($__internal_a72d8b7e8932a54873a4a939a93622b02d3f3b755a7fe78f8f5348124477abdf_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_6d79f1f03add5214e0b7173076a5e5657aca78d6fe7e2c8f1c5195cf0735b18b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d79f1f03add5214e0b7173076a5e5657aca78d6fe7e2c8f1c5195cf0735b18b->enter($__internal_6d79f1f03add5214e0b7173076a5e5657aca78d6fe7e2c8f1c5195cf0735b18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_9996cdfaeef2286acfc3202dc94092842abe1e07caa584ee523107ce43cf4a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9996cdfaeef2286acfc3202dc94092842abe1e07caa584ee523107ce43cf4a15->enter($__internal_9996cdfaeef2286acfc3202dc94092842abe1e07caa584ee523107ce43cf4a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_9996cdfaeef2286acfc3202dc94092842abe1e07caa584ee523107ce43cf4a15->leave($__internal_9996cdfaeef2286acfc3202dc94092842abe1e07caa584ee523107ce43cf4a15_prof);

        
        $__internal_6d79f1f03add5214e0b7173076a5e5657aca78d6fe7e2c8f1c5195cf0735b18b->leave($__internal_6d79f1f03add5214e0b7173076a5e5657aca78d6fe7e2c8f1c5195cf0735b18b_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_b40f771f94a6c210c411c63b135e9227751db2af4568aa4e61800dde3549fde8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b40f771f94a6c210c411c63b135e9227751db2af4568aa4e61800dde3549fde8->enter($__internal_b40f771f94a6c210c411c63b135e9227751db2af4568aa4e61800dde3549fde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_08da6e9e5af7012ccbe0a7d499d27045b0b25f9c18075cd271c261b804afebe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08da6e9e5af7012ccbe0a7d499d27045b0b25f9c18075cd271c261b804afebe2->enter($__internal_08da6e9e5af7012ccbe0a7d499d27045b0b25f9c18075cd271c261b804afebe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if (((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_08da6e9e5af7012ccbe0a7d499d27045b0b25f9c18075cd271c261b804afebe2->leave($__internal_08da6e9e5af7012ccbe0a7d499d27045b0b25f9c18075cd271c261b804afebe2_prof);

        
        $__internal_b40f771f94a6c210c411c63b135e9227751db2af4568aa4e61800dde3549fde8->leave($__internal_b40f771f94a6c210c411c63b135e9227751db2af4568aa4e61800dde3549fde8_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_f702447a11c2975731cf87a32dc798c5ed8074a8e4fe3c572dccd008e910c88b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f702447a11c2975731cf87a32dc798c5ed8074a8e4fe3c572dccd008e910c88b->enter($__internal_f702447a11c2975731cf87a32dc798c5ed8074a8e4fe3c572dccd008e910c88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_bf9ad5848bbe5855fe80ce2fdbdd759e3a9c704c5a9aa92a564ab726d2ce2069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf9ad5848bbe5855fe80ce2fdbdd759e3a9c704c5a9aa92a564ab726d2ce2069->enter($__internal_bf9ad5848bbe5855fe80ce2fdbdd759e3a9c704c5a9aa92a564ab726d2ce2069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_bf9ad5848bbe5855fe80ce2fdbdd759e3a9c704c5a9aa92a564ab726d2ce2069->leave($__internal_bf9ad5848bbe5855fe80ce2fdbdd759e3a9c704c5a9aa92a564ab726d2ce2069_prof);

        
        $__internal_f702447a11c2975731cf87a32dc798c5ed8074a8e4fe3c572dccd008e910c88b->leave($__internal_f702447a11c2975731cf87a32dc798c5ed8074a8e4fe3c572dccd008e910c88b_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_f8e895075b669e34751244ee2bba8728fcafc76ae957fd1a4fe9263b99f1f0c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e895075b669e34751244ee2bba8728fcafc76ae957fd1a4fe9263b99f1f0c0->enter($__internal_f8e895075b669e34751244ee2bba8728fcafc76ae957fd1a4fe9263b99f1f0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_7ec7922ee8191fe184db17b8e312797e9e9edc5b8d29bf5f881ff3475b23fd8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ec7922ee8191fe184db17b8e312797e9e9edc5b8d29bf5f881ff3475b23fd8d->enter($__internal_7ec7922ee8191fe184db17b8e312797e9e9edc5b8d29bf5f881ff3475b23fd8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_7ec7922ee8191fe184db17b8e312797e9e9edc5b8d29bf5f881ff3475b23fd8d->leave($__internal_7ec7922ee8191fe184db17b8e312797e9e9edc5b8d29bf5f881ff3475b23fd8d_prof);

        
        $__internal_f8e895075b669e34751244ee2bba8728fcafc76ae957fd1a4fe9263b99f1f0c0->leave($__internal_f8e895075b669e34751244ee2bba8728fcafc76ae957fd1a4fe9263b99f1f0c0_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_67bdedfb02d944d8e1c9d7d9d7576ade62d7cdfb1fb1322d14b0cbfbd3a3a81b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67bdedfb02d944d8e1c9d7d9d7576ade62d7cdfb1fb1322d14b0cbfbd3a3a81b->enter($__internal_67bdedfb02d944d8e1c9d7d9d7576ade62d7cdfb1fb1322d14b0cbfbd3a3a81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_5f8bc9a39643f9e8299e07d559ed74e5d9011841e436a3494093635ff219daa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8bc9a39643f9e8299e07d559ed74e5d9011841e436a3494093635ff219daa3->enter($__internal_5f8bc9a39643f9e8299e07d559ed74e5d9011841e436a3494093635ff219daa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_5f8bc9a39643f9e8299e07d559ed74e5d9011841e436a3494093635ff219daa3->leave($__internal_5f8bc9a39643f9e8299e07d559ed74e5d9011841e436a3494093635ff219daa3_prof);

        
        $__internal_67bdedfb02d944d8e1c9d7d9d7576ade62d7cdfb1fb1322d14b0cbfbd3a3a81b->leave($__internal_67bdedfb02d944d8e1c9d7d9d7576ade62d7cdfb1fb1322d14b0cbfbd3a3a81b_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_1c6205c5499132d2b6c9effbefff79529a1537b48dff193c861bd916be94c035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c6205c5499132d2b6c9effbefff79529a1537b48dff193c861bd916be94c035->enter($__internal_1c6205c5499132d2b6c9effbefff79529a1537b48dff193c861bd916be94c035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_89063d826dc7768a28347076cfda24541853268b9db0e2deac5110c3664fd453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89063d826dc7768a28347076cfda24541853268b9db0e2deac5110c3664fd453->enter($__internal_89063d826dc7768a28347076cfda24541853268b9db0e2deac5110c3664fd453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_89063d826dc7768a28347076cfda24541853268b9db0e2deac5110c3664fd453->leave($__internal_89063d826dc7768a28347076cfda24541853268b9db0e2deac5110c3664fd453_prof);

        
        $__internal_1c6205c5499132d2b6c9effbefff79529a1537b48dff193c861bd916be94c035->leave($__internal_1c6205c5499132d2b6c9effbefff79529a1537b48dff193c861bd916be94c035_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_cd38bff55d634cb160f3b07a92944071fd25dd329949ce21831ea4545a5c5dec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd38bff55d634cb160f3b07a92944071fd25dd329949ce21831ea4545a5c5dec->enter($__internal_cd38bff55d634cb160f3b07a92944071fd25dd329949ce21831ea4545a5c5dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_9f6f41f302728e475c4c08353b7a28ea899f1b1a2a29a40371c947ef26e733e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6f41f302728e475c4c08353b7a28ea899f1b1a2a29a40371c947ef26e733e2->enter($__internal_9f6f41f302728e475c4c08353b7a28ea899f1b1a2a29a40371c947ef26e733e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_9f6f41f302728e475c4c08353b7a28ea899f1b1a2a29a40371c947ef26e733e2->leave($__internal_9f6f41f302728e475c4c08353b7a28ea899f1b1a2a29a40371c947ef26e733e2_prof);

        
        $__internal_cd38bff55d634cb160f3b07a92944071fd25dd329949ce21831ea4545a5c5dec->leave($__internal_cd38bff55d634cb160f3b07a92944071fd25dd329949ce21831ea4545a5c5dec_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_a7c45edf0ca828094aa5aec10d911c352f2730841bbb121a813e88dab61c3785 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7c45edf0ca828094aa5aec10d911c352f2730841bbb121a813e88dab61c3785->enter($__internal_a7c45edf0ca828094aa5aec10d911c352f2730841bbb121a813e88dab61c3785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_c55bc8db4e2da2290528e23daeb36168d1c514dad9f1f60cbc2e2feac2a639e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55bc8db4e2da2290528e23daeb36168d1c514dad9f1f60cbc2e2feac2a639e8->enter($__internal_c55bc8db4e2da2290528e23daeb36168d1c514dad9f1f60cbc2e2feac2a639e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c55bc8db4e2da2290528e23daeb36168d1c514dad9f1f60cbc2e2feac2a639e8->leave($__internal_c55bc8db4e2da2290528e23daeb36168d1c514dad9f1f60cbc2e2feac2a639e8_prof);

        
        $__internal_a7c45edf0ca828094aa5aec10d911c352f2730841bbb121a813e88dab61c3785->leave($__internal_a7c45edf0ca828094aa5aec10d911c352f2730841bbb121a813e88dab61c3785_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_c0038a46c73e074b9e3d4ae006ea2f6866b1c4a35bf1f8cf018a4aab75082af1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0038a46c73e074b9e3d4ae006ea2f6866b1c4a35bf1f8cf018a4aab75082af1->enter($__internal_c0038a46c73e074b9e3d4ae006ea2f6866b1c4a35bf1f8cf018a4aab75082af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_fb8deb9a64a6b95f6edf844809b77c6ae068fd7ade8235d2b1b50e3cbd24cea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8deb9a64a6b95f6edf844809b77c6ae068fd7ade8235d2b1b50e3cbd24cea5->enter($__internal_fb8deb9a64a6b95f6edf844809b77c6ae068fd7ade8235d2b1b50e3cbd24cea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_fb8deb9a64a6b95f6edf844809b77c6ae068fd7ade8235d2b1b50e3cbd24cea5->leave($__internal_fb8deb9a64a6b95f6edf844809b77c6ae068fd7ade8235d2b1b50e3cbd24cea5_prof);

        
        $__internal_c0038a46c73e074b9e3d4ae006ea2f6866b1c4a35bf1f8cf018a4aab75082af1->leave($__internal_c0038a46c73e074b9e3d4ae006ea2f6866b1c4a35bf1f8cf018a4aab75082af1_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_1d3be7d4f76c388a66080b4f70cc9d544af90c6a4629ede538c61ef3e73be3c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d3be7d4f76c388a66080b4f70cc9d544af90c6a4629ede538c61ef3e73be3c8->enter($__internal_1d3be7d4f76c388a66080b4f70cc9d544af90c6a4629ede538c61ef3e73be3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_9ec987e4aaccd8615f5574a6fe17f33fa2a5cfb2eb28ee3ea65f3f02f5f00845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec987e4aaccd8615f5574a6fe17f33fa2a5cfb2eb28ee3ea65f3f02f5f00845->enter($__internal_9ec987e4aaccd8615f5574a6fe17f33fa2a5cfb2eb28ee3ea65f3f02f5f00845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 255
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
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
        echo ">
        ";
        // line 262
        echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_9ec987e4aaccd8615f5574a6fe17f33fa2a5cfb2eb28ee3ea65f3f02f5f00845->leave($__internal_9ec987e4aaccd8615f5574a6fe17f33fa2a5cfb2eb28ee3ea65f3f02f5f00845_prof);

        
        $__internal_1d3be7d4f76c388a66080b4f70cc9d544af90c6a4629ede538c61ef3e73be3c8->leave($__internal_1d3be7d4f76c388a66080b4f70cc9d544af90c6a4629ede538c61ef3e73be3c8_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ac4e5882a21d910051b8441652a12baf88f0fac428373f2411aa5062697fb2a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac4e5882a21d910051b8441652a12baf88f0fac428373f2411aa5062697fb2a9->enter($__internal_ac4e5882a21d910051b8441652a12baf88f0fac428373f2411aa5062697fb2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ead092e41477f4d70ed9b464beb2beb19f0bc8b87efb78ed1c1180af5c9aaa50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ead092e41477f4d70ed9b464beb2beb19f0bc8b87efb78ed1c1180af5c9aaa50->enter($__internal_ead092e41477f4d70ed9b464beb2beb19f0bc8b87efb78ed1c1180af5c9aaa50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_ead092e41477f4d70ed9b464beb2beb19f0bc8b87efb78ed1c1180af5c9aaa50->leave($__internal_ead092e41477f4d70ed9b464beb2beb19f0bc8b87efb78ed1c1180af5c9aaa50_prof);

        
        $__internal_ac4e5882a21d910051b8441652a12baf88f0fac428373f2411aa5062697fb2a9->leave($__internal_ac4e5882a21d910051b8441652a12baf88f0fac428373f2411aa5062697fb2a9_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_6574c27cb1096535ae9edc4c85ecd009ba663fbbefde89055535758775f0b4f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6574c27cb1096535ae9edc4c85ecd009ba663fbbefde89055535758775f0b4f9->enter($__internal_6574c27cb1096535ae9edc4c85ecd009ba663fbbefde89055535758775f0b4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_566344c254d5828047d94ae4f83248ee694dc34d9ce6b20cc552287245748ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566344c254d5828047d94ae4f83248ee694dc34d9ce6b20cc552287245748ad1->enter($__internal_566344c254d5828047d94ae4f83248ee694dc34d9ce6b20cc552287245748ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_566344c254d5828047d94ae4f83248ee694dc34d9ce6b20cc552287245748ad1->leave($__internal_566344c254d5828047d94ae4f83248ee694dc34d9ce6b20cc552287245748ad1_prof);

        
        $__internal_6574c27cb1096535ae9edc4c85ecd009ba663fbbefde89055535758775f0b4f9->leave($__internal_6574c27cb1096535ae9edc4c85ecd009ba663fbbefde89055535758775f0b4f9_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_6947c4cb37dc69bd08a66a164a968bdabd475b4c21cc5cc42d5c897f3cbaa4fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6947c4cb37dc69bd08a66a164a968bdabd475b4c21cc5cc42d5c897f3cbaa4fe->enter($__internal_6947c4cb37dc69bd08a66a164a968bdabd475b4c21cc5cc42d5c897f3cbaa4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_82eee81e3756fd5b3e6c4b80234aa45881283d068d64e77947128d46e939245a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82eee81e3756fd5b3e6c4b80234aa45881283d068d64e77947128d46e939245a->enter($__internal_82eee81e3756fd5b3e6c4b80234aa45881283d068d64e77947128d46e939245a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_82eee81e3756fd5b3e6c4b80234aa45881283d068d64e77947128d46e939245a->leave($__internal_82eee81e3756fd5b3e6c4b80234aa45881283d068d64e77947128d46e939245a_prof);

        
        $__internal_6947c4cb37dc69bd08a66a164a968bdabd475b4c21cc5cc42d5c897f3cbaa4fe->leave($__internal_6947c4cb37dc69bd08a66a164a968bdabd475b4c21cc5cc42d5c897f3cbaa4fe_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_621021c5d9eb72b9e9e3838c77611c9c5c3675140a4167d00f5d98b489c7ba1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_621021c5d9eb72b9e9e3838c77611c9c5c3675140a4167d00f5d98b489c7ba1d->enter($__internal_621021c5d9eb72b9e9e3838c77611c9c5c3675140a4167d00f5d98b489c7ba1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_2672a3a70f28e01e8bd02cb55b7db5b1c03f88ad9aeda7e330a9369a1a4cd81d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2672a3a70f28e01e8bd02cb55b7db5b1c03f88ad9aeda7e330a9369a1a4cd81d->enter($__internal_2672a3a70f28e01e8bd02cb55b7db5b1c03f88ad9aeda7e330a9369a1a4cd81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2672a3a70f28e01e8bd02cb55b7db5b1c03f88ad9aeda7e330a9369a1a4cd81d->leave($__internal_2672a3a70f28e01e8bd02cb55b7db5b1c03f88ad9aeda7e330a9369a1a4cd81d_prof);

        
        $__internal_621021c5d9eb72b9e9e3838c77611c9c5c3675140a4167d00f5d98b489c7ba1d->leave($__internal_621021c5d9eb72b9e9e3838c77611c9c5c3675140a4167d00f5d98b489c7ba1d_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_d4c12cf4cd27db89fba88d475a4cbd66e84a3e66e2f838a1587253dbc87c7237 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c12cf4cd27db89fba88d475a4cbd66e84a3e66e2f838a1587253dbc87c7237->enter($__internal_d4c12cf4cd27db89fba88d475a4cbd66e84a3e66e2f838a1587253dbc87c7237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_7f1d705b802f7cb303d8ac1ab3390bf9d1854fa1f7b6f0e2f4c17232131cda1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f1d705b802f7cb303d8ac1ab3390bf9d1854fa1f7b6f0e2f4c17232131cda1e->enter($__internal_7f1d705b802f7cb303d8ac1ab3390bf9d1854fa1f7b6f0e2f4c17232131cda1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7f1d705b802f7cb303d8ac1ab3390bf9d1854fa1f7b6f0e2f4c17232131cda1e->leave($__internal_7f1d705b802f7cb303d8ac1ab3390bf9d1854fa1f7b6f0e2f4c17232131cda1e_prof);

        
        $__internal_d4c12cf4cd27db89fba88d475a4cbd66e84a3e66e2f838a1587253dbc87c7237->leave($__internal_d4c12cf4cd27db89fba88d475a4cbd66e84a3e66e2f838a1587253dbc87c7237_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_5ffe882b8654937b5e34322df437b03758e05da363b5db01313f9c26190e1a78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ffe882b8654937b5e34322df437b03758e05da363b5db01313f9c26190e1a78->enter($__internal_5ffe882b8654937b5e34322df437b03758e05da363b5db01313f9c26190e1a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_3409cf5c6f5d816c461a4170820e7b92e297cfbffb84fa82bce8ef93c509bedf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3409cf5c6f5d816c461a4170820e7b92e297cfbffb84fa82bce8ef93c509bedf->enter($__internal_3409cf5c6f5d816c461a4170820e7b92e297cfbffb84fa82bce8ef93c509bedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_3409cf5c6f5d816c461a4170820e7b92e297cfbffb84fa82bce8ef93c509bedf->leave($__internal_3409cf5c6f5d816c461a4170820e7b92e297cfbffb84fa82bce8ef93c509bedf_prof);

        
        $__internal_5ffe882b8654937b5e34322df437b03758e05da363b5db01313f9c26190e1a78->leave($__internal_5ffe882b8654937b5e34322df437b03758e05da363b5db01313f9c26190e1a78_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_59cc0f2fca688789703341988ab62004aba78ba34a3ed8a43936d278ded85f36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59cc0f2fca688789703341988ab62004aba78ba34a3ed8a43936d278ded85f36->enter($__internal_59cc0f2fca688789703341988ab62004aba78ba34a3ed8a43936d278ded85f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_7d72e10f53d7f9489ca780108266dd0e108ec40e0d6e6ff3c814337309621fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d72e10f53d7f9489ca780108266dd0e108ec40e0d6e6ff3c814337309621fe8->enter($__internal_7d72e10f53d7f9489ca780108266dd0e108ec40e0d6e6ff3c814337309621fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_7d72e10f53d7f9489ca780108266dd0e108ec40e0d6e6ff3c814337309621fe8->leave($__internal_7d72e10f53d7f9489ca780108266dd0e108ec40e0d6e6ff3c814337309621fe8_prof);

        
        $__internal_59cc0f2fca688789703341988ab62004aba78ba34a3ed8a43936d278ded85f36->leave($__internal_59cc0f2fca688789703341988ab62004aba78ba34a3ed8a43936d278ded85f36_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_f7b6ebe19e4c7372f102a662d19e8270885b0c4a50e71bc0554952cf364ab521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7b6ebe19e4c7372f102a662d19e8270885b0c4a50e71bc0554952cf364ab521->enter($__internal_f7b6ebe19e4c7372f102a662d19e8270885b0c4a50e71bc0554952cf364ab521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_ffb5b4306bb78ce554bf4e0d5bc0ae80a48ae7936371a5a66436e0d22517c457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffb5b4306bb78ce554bf4e0d5bc0ae80a48ae7936371a5a66436e0d22517c457->enter($__internal_ffb5b4306bb78ce554bf4e0d5bc0ae80a48ae7936371a5a66436e0d22517c457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_ffb5b4306bb78ce554bf4e0d5bc0ae80a48ae7936371a5a66436e0d22517c457->leave($__internal_ffb5b4306bb78ce554bf4e0d5bc0ae80a48ae7936371a5a66436e0d22517c457_prof);

        
        $__internal_f7b6ebe19e4c7372f102a662d19e8270885b0c4a50e71bc0554952cf364ab521->leave($__internal_f7b6ebe19e4c7372f102a662d19e8270885b0c4a50e71bc0554952cf364ab521_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
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
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\foundation_5_layout.html.twig");
    }
}
