<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_bfbacc8e635f173cc6498ca12eae022316fbb20c1601275fa24822cb800920df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_948051873900a7cb22952dbe1abebd667d3c45ce482bdd265984172e2247f635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_948051873900a7cb22952dbe1abebd667d3c45ce482bdd265984172e2247f635->enter($__internal_948051873900a7cb22952dbe1abebd667d3c45ce482bdd265984172e2247f635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_45a18f263fc68101fc01d4dbda41d3d7f660cb0efd256ab43eac025b238f899a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a18f263fc68101fc01d4dbda41d3d7f660cb0efd256ab43eac025b238f899a->enter($__internal_45a18f263fc68101fc01d4dbda41d3d7f660cb0efd256ab43eac025b238f899a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_948051873900a7cb22952dbe1abebd667d3c45ce482bdd265984172e2247f635->leave($__internal_948051873900a7cb22952dbe1abebd667d3c45ce482bdd265984172e2247f635_prof);

        
        $__internal_45a18f263fc68101fc01d4dbda41d3d7f660cb0efd256ab43eac025b238f899a->leave($__internal_45a18f263fc68101fc01d4dbda41d3d7f660cb0efd256ab43eac025b238f899a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a95b07ac745f8266da4532f682d5a993fbdbd6e77760a7a4f9c2259cbaf4376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a95b07ac745f8266da4532f682d5a993fbdbd6e77760a7a4f9c2259cbaf4376->enter($__internal_2a95b07ac745f8266da4532f682d5a993fbdbd6e77760a7a4f9c2259cbaf4376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_aea8d0d7c0501332c1094d339162e259d27b6d711f42e189fc283f08c259b40a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea8d0d7c0501332c1094d339162e259d27b6d711f42e189fc283f08c259b40a->enter($__internal_aea8d0d7c0501332c1094d339162e259d27b6d711f42e189fc283f08c259b40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_aea8d0d7c0501332c1094d339162e259d27b6d711f42e189fc283f08c259b40a->leave($__internal_aea8d0d7c0501332c1094d339162e259d27b6d711f42e189fc283f08c259b40a_prof);

        
        $__internal_2a95b07ac745f8266da4532f682d5a993fbdbd6e77760a7a4f9c2259cbaf4376->leave($__internal_2a95b07ac745f8266da4532f682d5a993fbdbd6e77760a7a4f9c2259cbaf4376_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_219e0e6dd0dd41626738ce6e9b9eb887b49931abf61b9538b302d904b5da3e41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_219e0e6dd0dd41626738ce6e9b9eb887b49931abf61b9538b302d904b5da3e41->enter($__internal_219e0e6dd0dd41626738ce6e9b9eb887b49931abf61b9538b302d904b5da3e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_082430deb021e12d0f28d3d39d6bc92c40662305170b458c16d124e071a7868f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_082430deb021e12d0f28d3d39d6bc92c40662305170b458c16d124e071a7868f->enter($__internal_082430deb021e12d0f28d3d39d6bc92c40662305170b458c16d124e071a7868f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_082430deb021e12d0f28d3d39d6bc92c40662305170b458c16d124e071a7868f->leave($__internal_082430deb021e12d0f28d3d39d6bc92c40662305170b458c16d124e071a7868f_prof);

        
        $__internal_219e0e6dd0dd41626738ce6e9b9eb887b49931abf61b9538b302d904b5da3e41->leave($__internal_219e0e6dd0dd41626738ce6e9b9eb887b49931abf61b9538b302d904b5da3e41_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
