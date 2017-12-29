<?php

/* form_table_layout.html.twig */
class __TwigTemplate_87b1b54ac87991e209083bd942c0a43c2ee9bb0d9244da4ea568e1aa7837248d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af3a1b54453b85d6d86bd4ea0a4d0d357120c8faa4bbff10aaa7313a8b589eb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af3a1b54453b85d6d86bd4ea0a4d0d357120c8faa4bbff10aaa7313a8b589eb8->enter($__internal_af3a1b54453b85d6d86bd4ea0a4d0d357120c8faa4bbff10aaa7313a8b589eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_0938935372d63d51303d4f390303d95fe11eadc3bb54b60b6765f3724fec49c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0938935372d63d51303d4f390303d95fe11eadc3bb54b60b6765f3724fec49c2->enter($__internal_0938935372d63d51303d4f390303d95fe11eadc3bb54b60b6765f3724fec49c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_af3a1b54453b85d6d86bd4ea0a4d0d357120c8faa4bbff10aaa7313a8b589eb8->leave($__internal_af3a1b54453b85d6d86bd4ea0a4d0d357120c8faa4bbff10aaa7313a8b589eb8_prof);

        
        $__internal_0938935372d63d51303d4f390303d95fe11eadc3bb54b60b6765f3724fec49c2->leave($__internal_0938935372d63d51303d4f390303d95fe11eadc3bb54b60b6765f3724fec49c2_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5e7609c522a5f52036d6c8d5beba06b22ec769a2433fa53e14166f683628a5d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e7609c522a5f52036d6c8d5beba06b22ec769a2433fa53e14166f683628a5d1->enter($__internal_5e7609c522a5f52036d6c8d5beba06b22ec769a2433fa53e14166f683628a5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b6df9ba27bd0eae5e7e614a91cb0368fafe7ee54224a840a16624b0763bd569f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6df9ba27bd0eae5e7e614a91cb0368fafe7ee54224a840a16624b0763bd569f->enter($__internal_b6df9ba27bd0eae5e7e614a91cb0368fafe7ee54224a840a16624b0763bd569f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_b6df9ba27bd0eae5e7e614a91cb0368fafe7ee54224a840a16624b0763bd569f->leave($__internal_b6df9ba27bd0eae5e7e614a91cb0368fafe7ee54224a840a16624b0763bd569f_prof);

        
        $__internal_5e7609c522a5f52036d6c8d5beba06b22ec769a2433fa53e14166f683628a5d1->leave($__internal_5e7609c522a5f52036d6c8d5beba06b22ec769a2433fa53e14166f683628a5d1_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_216df4de8f239eed16227dcb224efd1b0f0b913f63fd12b8e0f6f28a5a65f7a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_216df4de8f239eed16227dcb224efd1b0f0b913f63fd12b8e0f6f28a5a65f7a5->enter($__internal_216df4de8f239eed16227dcb224efd1b0f0b913f63fd12b8e0f6f28a5a65f7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_a8680f2cb29c1b36fc2aa1f2ab221865c0b06acdd1e1318bb5b57062b01d431b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8680f2cb29c1b36fc2aa1f2ab221865c0b06acdd1e1318bb5b57062b01d431b->enter($__internal_a8680f2cb29c1b36fc2aa1f2ab221865c0b06acdd1e1318bb5b57062b01d431b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_a8680f2cb29c1b36fc2aa1f2ab221865c0b06acdd1e1318bb5b57062b01d431b->leave($__internal_a8680f2cb29c1b36fc2aa1f2ab221865c0b06acdd1e1318bb5b57062b01d431b_prof);

        
        $__internal_216df4de8f239eed16227dcb224efd1b0f0b913f63fd12b8e0f6f28a5a65f7a5->leave($__internal_216df4de8f239eed16227dcb224efd1b0f0b913f63fd12b8e0f6f28a5a65f7a5_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_23f5878f492fe795488be093b1bf38b0240124593d59fed37937d1aefe33bf42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23f5878f492fe795488be093b1bf38b0240124593d59fed37937d1aefe33bf42->enter($__internal_23f5878f492fe795488be093b1bf38b0240124593d59fed37937d1aefe33bf42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_2b563b0dd4dd72a25d1caf95496318f760068bc1c3ad3b8972169358201db0a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b563b0dd4dd72a25d1caf95496318f760068bc1c3ad3b8972169358201db0a4->enter($__internal_2b563b0dd4dd72a25d1caf95496318f760068bc1c3ad3b8972169358201db0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_2b563b0dd4dd72a25d1caf95496318f760068bc1c3ad3b8972169358201db0a4->leave($__internal_2b563b0dd4dd72a25d1caf95496318f760068bc1c3ad3b8972169358201db0a4_prof);

        
        $__internal_23f5878f492fe795488be093b1bf38b0240124593d59fed37937d1aefe33bf42->leave($__internal_23f5878f492fe795488be093b1bf38b0240124593d59fed37937d1aefe33bf42_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_47b5c94beb49da6d947fc99574f726911ad73860b1fc0dcfbde7519205babf6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47b5c94beb49da6d947fc99574f726911ad73860b1fc0dcfbde7519205babf6c->enter($__internal_47b5c94beb49da6d947fc99574f726911ad73860b1fc0dcfbde7519205babf6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_cc245f0309e47f260289638b004e41d354310407986bb450870714efad317fa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc245f0309e47f260289638b004e41d354310407986bb450870714efad317fa3->enter($__internal_cc245f0309e47f260289638b004e41d354310407986bb450870714efad317fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_cc245f0309e47f260289638b004e41d354310407986bb450870714efad317fa3->leave($__internal_cc245f0309e47f260289638b004e41d354310407986bb450870714efad317fa3_prof);

        
        $__internal_47b5c94beb49da6d947fc99574f726911ad73860b1fc0dcfbde7519205babf6c->leave($__internal_47b5c94beb49da6d947fc99574f726911ad73860b1fc0dcfbde7519205babf6c_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
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

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
