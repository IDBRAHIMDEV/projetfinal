<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7b4a186033becf563b602d840c5dbb698aea9622544e121fc67e793cdfb7c171 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_46bdfe773a3e2b810abe039f4b9bf2b936458e9f5afbeae3c12f2de574ed3bff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46bdfe773a3e2b810abe039f4b9bf2b936458e9f5afbeae3c12f2de574ed3bff->enter($__internal_46bdfe773a3e2b810abe039f4b9bf2b936458e9f5afbeae3c12f2de574ed3bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_34a387a8ca8c98ac87aaa9e58f3d8cf463ade29ae7cbeba46ecfd616d3b76914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a387a8ca8c98ac87aaa9e58f3d8cf463ade29ae7cbeba46ecfd616d3b76914->enter($__internal_34a387a8ca8c98ac87aaa9e58f3d8cf463ade29ae7cbeba46ecfd616d3b76914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46bdfe773a3e2b810abe039f4b9bf2b936458e9f5afbeae3c12f2de574ed3bff->leave($__internal_46bdfe773a3e2b810abe039f4b9bf2b936458e9f5afbeae3c12f2de574ed3bff_prof);

        
        $__internal_34a387a8ca8c98ac87aaa9e58f3d8cf463ade29ae7cbeba46ecfd616d3b76914->leave($__internal_34a387a8ca8c98ac87aaa9e58f3d8cf463ade29ae7cbeba46ecfd616d3b76914_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_28002182d5e2788d7a5d71435f9122764222ea435e86817a4e852c151b4a36eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28002182d5e2788d7a5d71435f9122764222ea435e86817a4e852c151b4a36eb->enter($__internal_28002182d5e2788d7a5d71435f9122764222ea435e86817a4e852c151b4a36eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_081477ea39be0883213f9a74b5f05c6266c479d040e1d028c3dc8845db447079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_081477ea39be0883213f9a74b5f05c6266c479d040e1d028c3dc8845db447079->enter($__internal_081477ea39be0883213f9a74b5f05c6266c479d040e1d028c3dc8845db447079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_081477ea39be0883213f9a74b5f05c6266c479d040e1d028c3dc8845db447079->leave($__internal_081477ea39be0883213f9a74b5f05c6266c479d040e1d028c3dc8845db447079_prof);

        
        $__internal_28002182d5e2788d7a5d71435f9122764222ea435e86817a4e852c151b4a36eb->leave($__internal_28002182d5e2788d7a5d71435f9122764222ea435e86817a4e852c151b4a36eb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3985a4ca466aebaa9f6eddf69446ab0d12ac9006bf1f7e035e6c75c9015a5d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3985a4ca466aebaa9f6eddf69446ab0d12ac9006bf1f7e035e6c75c9015a5d15->enter($__internal_3985a4ca466aebaa9f6eddf69446ab0d12ac9006bf1f7e035e6c75c9015a5d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2f777f556c56b6233ce27cfa77a5c899c6237dedf6e7c6c7660caad1d6452dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f777f556c56b6233ce27cfa77a5c899c6237dedf6e7c6c7660caad1d6452dae->enter($__internal_2f777f556c56b6233ce27cfa77a5c899c6237dedf6e7c6c7660caad1d6452dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2f777f556c56b6233ce27cfa77a5c899c6237dedf6e7c6c7660caad1d6452dae->leave($__internal_2f777f556c56b6233ce27cfa77a5c899c6237dedf6e7c6c7660caad1d6452dae_prof);

        
        $__internal_3985a4ca466aebaa9f6eddf69446ab0d12ac9006bf1f7e035e6c75c9015a5d15->leave($__internal_3985a4ca466aebaa9f6eddf69446ab0d12ac9006bf1f7e035e6c75c9015a5d15_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3bf775abdeebaa36b838b48402911ce619aeb64afa7439673cded520e350cb29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bf775abdeebaa36b838b48402911ce619aeb64afa7439673cded520e350cb29->enter($__internal_3bf775abdeebaa36b838b48402911ce619aeb64afa7439673cded520e350cb29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aab3be2784668996b977bda290d8fd5a981a78f33676e282d06963be07cb5384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab3be2784668996b977bda290d8fd5a981a78f33676e282d06963be07cb5384->enter($__internal_aab3be2784668996b977bda290d8fd5a981a78f33676e282d06963be07cb5384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aab3be2784668996b977bda290d8fd5a981a78f33676e282d06963be07cb5384->leave($__internal_aab3be2784668996b977bda290d8fd5a981a78f33676e282d06963be07cb5384_prof);

        
        $__internal_3bf775abdeebaa36b838b48402911ce619aeb64afa7439673cded520e350cb29->leave($__internal_3bf775abdeebaa36b838b48402911ce619aeb64afa7439673cded520e350cb29_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
