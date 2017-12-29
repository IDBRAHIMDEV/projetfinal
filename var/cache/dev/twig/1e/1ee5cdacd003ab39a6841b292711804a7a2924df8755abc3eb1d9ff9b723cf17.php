<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7671c5deca4b957eb89f92f01ed41783aba8befc0cb318ee647dd9fb009acff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_e4338d0142cf57602cc5c461496fd8fe944e8c8ee6de6a89d7b65d1da88133f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4338d0142cf57602cc5c461496fd8fe944e8c8ee6de6a89d7b65d1da88133f1->enter($__internal_e4338d0142cf57602cc5c461496fd8fe944e8c8ee6de6a89d7b65d1da88133f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_442726c5a1e241b8ec057464dc590d706d6bde98f540f706c557596c895adc4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_442726c5a1e241b8ec057464dc590d706d6bde98f540f706c557596c895adc4d->enter($__internal_442726c5a1e241b8ec057464dc590d706d6bde98f540f706c557596c895adc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4338d0142cf57602cc5c461496fd8fe944e8c8ee6de6a89d7b65d1da88133f1->leave($__internal_e4338d0142cf57602cc5c461496fd8fe944e8c8ee6de6a89d7b65d1da88133f1_prof);

        
        $__internal_442726c5a1e241b8ec057464dc590d706d6bde98f540f706c557596c895adc4d->leave($__internal_442726c5a1e241b8ec057464dc590d706d6bde98f540f706c557596c895adc4d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6457f1b544d5b235bb0eb1ef4786e48d2c4aa2c8df2397b2d8141623cc935576 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6457f1b544d5b235bb0eb1ef4786e48d2c4aa2c8df2397b2d8141623cc935576->enter($__internal_6457f1b544d5b235bb0eb1ef4786e48d2c4aa2c8df2397b2d8141623cc935576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b3bc78f47e4fb05bb772cd78b8969780463a6046540b749f978e2ff2963e2399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3bc78f47e4fb05bb772cd78b8969780463a6046540b749f978e2ff2963e2399->enter($__internal_b3bc78f47e4fb05bb772cd78b8969780463a6046540b749f978e2ff2963e2399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b3bc78f47e4fb05bb772cd78b8969780463a6046540b749f978e2ff2963e2399->leave($__internal_b3bc78f47e4fb05bb772cd78b8969780463a6046540b749f978e2ff2963e2399_prof);

        
        $__internal_6457f1b544d5b235bb0eb1ef4786e48d2c4aa2c8df2397b2d8141623cc935576->leave($__internal_6457f1b544d5b235bb0eb1ef4786e48d2c4aa2c8df2397b2d8141623cc935576_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_326e63c49a6d5ebd22443e5593b4336da58cdffce9dcf9b812c0a8afe5dd450c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_326e63c49a6d5ebd22443e5593b4336da58cdffce9dcf9b812c0a8afe5dd450c->enter($__internal_326e63c49a6d5ebd22443e5593b4336da58cdffce9dcf9b812c0a8afe5dd450c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2cfab65e3f3bff99f6be8e0a62dff6369541d75b362b26e8bc37ae7cb4aef1e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cfab65e3f3bff99f6be8e0a62dff6369541d75b362b26e8bc37ae7cb4aef1e2->enter($__internal_2cfab65e3f3bff99f6be8e0a62dff6369541d75b362b26e8bc37ae7cb4aef1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2cfab65e3f3bff99f6be8e0a62dff6369541d75b362b26e8bc37ae7cb4aef1e2->leave($__internal_2cfab65e3f3bff99f6be8e0a62dff6369541d75b362b26e8bc37ae7cb4aef1e2_prof);

        
        $__internal_326e63c49a6d5ebd22443e5593b4336da58cdffce9dcf9b812c0a8afe5dd450c->leave($__internal_326e63c49a6d5ebd22443e5593b4336da58cdffce9dcf9b812c0a8afe5dd450c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b520a3c0809eff7f7489992dc357479fbdf9eb9f8924077f4309eaaeeece6df0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b520a3c0809eff7f7489992dc357479fbdf9eb9f8924077f4309eaaeeece6df0->enter($__internal_b520a3c0809eff7f7489992dc357479fbdf9eb9f8924077f4309eaaeeece6df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_780b23a5c132d7101ff3c99663f07b0ee67a77f619f52e070183c07799e36e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_780b23a5c132d7101ff3c99663f07b0ee67a77f619f52e070183c07799e36e15->enter($__internal_780b23a5c132d7101ff3c99663f07b0ee67a77f619f52e070183c07799e36e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_780b23a5c132d7101ff3c99663f07b0ee67a77f619f52e070183c07799e36e15->leave($__internal_780b23a5c132d7101ff3c99663f07b0ee67a77f619f52e070183c07799e36e15_prof);

        
        $__internal_b520a3c0809eff7f7489992dc357479fbdf9eb9f8924077f4309eaaeeece6df0->leave($__internal_b520a3c0809eff7f7489992dc357479fbdf9eb9f8924077f4309eaaeeece6df0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
