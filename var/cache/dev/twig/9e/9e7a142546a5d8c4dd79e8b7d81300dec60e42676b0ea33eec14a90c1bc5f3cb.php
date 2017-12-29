<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_356405c4bd10a1fab2f513250a96319815f0322fb77d8862fdabcf1a32a9c913 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d88224d3d18b58a61a572b837955b20c7491d77a0cfb5ec8f7d384629e605c88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d88224d3d18b58a61a572b837955b20c7491d77a0cfb5ec8f7d384629e605c88->enter($__internal_d88224d3d18b58a61a572b837955b20c7491d77a0cfb5ec8f7d384629e605c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_0a3207849cf6d5372a75c94ee3a8a13e1c116732215d1eeb06701a9d0c9c3e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3207849cf6d5372a75c94ee3a8a13e1c116732215d1eeb06701a9d0c9c3e45->enter($__internal_0a3207849cf6d5372a75c94ee3a8a13e1c116732215d1eeb06701a9d0c9c3e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d88224d3d18b58a61a572b837955b20c7491d77a0cfb5ec8f7d384629e605c88->leave($__internal_d88224d3d18b58a61a572b837955b20c7491d77a0cfb5ec8f7d384629e605c88_prof);

        
        $__internal_0a3207849cf6d5372a75c94ee3a8a13e1c116732215d1eeb06701a9d0c9c3e45->leave($__internal_0a3207849cf6d5372a75c94ee3a8a13e1c116732215d1eeb06701a9d0c9c3e45_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fb8dc0783e9fed08811dc851ce151d214da18e9f1519097d7a8c1c713bcc49a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb8dc0783e9fed08811dc851ce151d214da18e9f1519097d7a8c1c713bcc49a3->enter($__internal_fb8dc0783e9fed08811dc851ce151d214da18e9f1519097d7a8c1c713bcc49a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_98b35fa1e7fc54ab9f3e1a09cd55191d4c40ef855c550b12fa4c7513bdf93d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b35fa1e7fc54ab9f3e1a09cd55191d4c40ef855c550b12fa4c7513bdf93d61->enter($__internal_98b35fa1e7fc54ab9f3e1a09cd55191d4c40ef855c550b12fa4c7513bdf93d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_98b35fa1e7fc54ab9f3e1a09cd55191d4c40ef855c550b12fa4c7513bdf93d61->leave($__internal_98b35fa1e7fc54ab9f3e1a09cd55191d4c40ef855c550b12fa4c7513bdf93d61_prof);

        
        $__internal_fb8dc0783e9fed08811dc851ce151d214da18e9f1519097d7a8c1c713bcc49a3->leave($__internal_fb8dc0783e9fed08811dc851ce151d214da18e9f1519097d7a8c1c713bcc49a3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_66760df7477acdb9b85fdcdb1a442b7ef9ab2c802c06fa630a7e0df1dd1b99a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66760df7477acdb9b85fdcdb1a442b7ef9ab2c802c06fa630a7e0df1dd1b99a9->enter($__internal_66760df7477acdb9b85fdcdb1a442b7ef9ab2c802c06fa630a7e0df1dd1b99a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_71cf4d8ac325a093d8c0f73206fe0c712e3c1436db2f3d37f64b03cc17f4d651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71cf4d8ac325a093d8c0f73206fe0c712e3c1436db2f3d37f64b03cc17f4d651->enter($__internal_71cf4d8ac325a093d8c0f73206fe0c712e3c1436db2f3d37f64b03cc17f4d651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_71cf4d8ac325a093d8c0f73206fe0c712e3c1436db2f3d37f64b03cc17f4d651->leave($__internal_71cf4d8ac325a093d8c0f73206fe0c712e3c1436db2f3d37f64b03cc17f4d651_prof);

        
        $__internal_66760df7477acdb9b85fdcdb1a442b7ef9ab2c802c06fa630a7e0df1dd1b99a9->leave($__internal_66760df7477acdb9b85fdcdb1a442b7ef9ab2c802c06fa630a7e0df1dd1b99a9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_42103c7342497f8b9629ea23e8c622175eca09843a0fb6df223466b7bf9aa7a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42103c7342497f8b9629ea23e8c622175eca09843a0fb6df223466b7bf9aa7a5->enter($__internal_42103c7342497f8b9629ea23e8c622175eca09843a0fb6df223466b7bf9aa7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3b0bd7e9185a6919cb9d74aed8e05558c0ea25174f58c8282680e4f05e92f26f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b0bd7e9185a6919cb9d74aed8e05558c0ea25174f58c8282680e4f05e92f26f->enter($__internal_3b0bd7e9185a6919cb9d74aed8e05558c0ea25174f58c8282680e4f05e92f26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3b0bd7e9185a6919cb9d74aed8e05558c0ea25174f58c8282680e4f05e92f26f->leave($__internal_3b0bd7e9185a6919cb9d74aed8e05558c0ea25174f58c8282680e4f05e92f26f_prof);

        
        $__internal_42103c7342497f8b9629ea23e8c622175eca09843a0fb6df223466b7bf9aa7a5->leave($__internal_42103c7342497f8b9629ea23e8c622175eca09843a0fb6df223466b7bf9aa7a5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
