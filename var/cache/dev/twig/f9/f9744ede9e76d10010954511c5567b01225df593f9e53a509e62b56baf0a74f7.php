<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_27d574e89caa8ed5c81abf8353dbd35c7511b9bdb2d2afab5082b4c7e59f26e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_a706638fbfd382efc4e1d612cc542675c56df6e16300ee5a2b12cea50ba81e12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a706638fbfd382efc4e1d612cc542675c56df6e16300ee5a2b12cea50ba81e12->enter($__internal_a706638fbfd382efc4e1d612cc542675c56df6e16300ee5a2b12cea50ba81e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_2c90a64c5a7649a43eb1613d58638cd8b4f390a98b5d4bb5949565ed3f64a55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c90a64c5a7649a43eb1613d58638cd8b4f390a98b5d4bb5949565ed3f64a55a->enter($__internal_2c90a64c5a7649a43eb1613d58638cd8b4f390a98b5d4bb5949565ed3f64a55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a706638fbfd382efc4e1d612cc542675c56df6e16300ee5a2b12cea50ba81e12->leave($__internal_a706638fbfd382efc4e1d612cc542675c56df6e16300ee5a2b12cea50ba81e12_prof);

        
        $__internal_2c90a64c5a7649a43eb1613d58638cd8b4f390a98b5d4bb5949565ed3f64a55a->leave($__internal_2c90a64c5a7649a43eb1613d58638cd8b4f390a98b5d4bb5949565ed3f64a55a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_18c03ef0cac428243308e7161dd4522e1c9750fdce880cf69585e388cef09500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18c03ef0cac428243308e7161dd4522e1c9750fdce880cf69585e388cef09500->enter($__internal_18c03ef0cac428243308e7161dd4522e1c9750fdce880cf69585e388cef09500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_933edab4c4dc3ebbc397a51373e251fbce4751f3154710d179e1f1bb86574016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933edab4c4dc3ebbc397a51373e251fbce4751f3154710d179e1f1bb86574016->enter($__internal_933edab4c4dc3ebbc397a51373e251fbce4751f3154710d179e1f1bb86574016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_933edab4c4dc3ebbc397a51373e251fbce4751f3154710d179e1f1bb86574016->leave($__internal_933edab4c4dc3ebbc397a51373e251fbce4751f3154710d179e1f1bb86574016_prof);

        
        $__internal_18c03ef0cac428243308e7161dd4522e1c9750fdce880cf69585e388cef09500->leave($__internal_18c03ef0cac428243308e7161dd4522e1c9750fdce880cf69585e388cef09500_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c79ca404d94371282409afe6e87cc1f615c183df08fc96188a78f13211d23669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c79ca404d94371282409afe6e87cc1f615c183df08fc96188a78f13211d23669->enter($__internal_c79ca404d94371282409afe6e87cc1f615c183df08fc96188a78f13211d23669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a1b2e5b2af7406e4cc2c0f81c6b514f3620f4a47c954dbd6f07b31270754b5d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b2e5b2af7406e4cc2c0f81c6b514f3620f4a47c954dbd6f07b31270754b5d2->enter($__internal_a1b2e5b2af7406e4cc2c0f81c6b514f3620f4a47c954dbd6f07b31270754b5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a1b2e5b2af7406e4cc2c0f81c6b514f3620f4a47c954dbd6f07b31270754b5d2->leave($__internal_a1b2e5b2af7406e4cc2c0f81c6b514f3620f4a47c954dbd6f07b31270754b5d2_prof);

        
        $__internal_c79ca404d94371282409afe6e87cc1f615c183df08fc96188a78f13211d23669->leave($__internal_c79ca404d94371282409afe6e87cc1f615c183df08fc96188a78f13211d23669_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2cf3ea0c09ff9064790d504740ed56a02e1fc6e1a76aa0c32d2ba336922904e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cf3ea0c09ff9064790d504740ed56a02e1fc6e1a76aa0c32d2ba336922904e9->enter($__internal_2cf3ea0c09ff9064790d504740ed56a02e1fc6e1a76aa0c32d2ba336922904e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7edc0e9cc52999d2b063003d4d6a6322add7918ed158d83f5908819eb1c6ca7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7edc0e9cc52999d2b063003d4d6a6322add7918ed158d83f5908819eb1c6ca7e->enter($__internal_7edc0e9cc52999d2b063003d4d6a6322add7918ed158d83f5908819eb1c6ca7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7edc0e9cc52999d2b063003d4d6a6322add7918ed158d83f5908819eb1c6ca7e->leave($__internal_7edc0e9cc52999d2b063003d4d6a6322add7918ed158d83f5908819eb1c6ca7e_prof);

        
        $__internal_2cf3ea0c09ff9064790d504740ed56a02e1fc6e1a76aa0c32d2ba336922904e9->leave($__internal_2cf3ea0c09ff9064790d504740ed56a02e1fc6e1a76aa0c32d2ba336922904e9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
