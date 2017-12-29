<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_6105a7fe93ed8d15fac81a54f13a3f66b8b929ff82781db4c9c43f7de536e3e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65ff5a4606b6c34ba9eb00e783eebfffa05e3dfbd4de5b75505214544c764a60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65ff5a4606b6c34ba9eb00e783eebfffa05e3dfbd4de5b75505214544c764a60->enter($__internal_65ff5a4606b6c34ba9eb00e783eebfffa05e3dfbd4de5b75505214544c764a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_024e7aaea0028c5c1aca861182190949dbfe1837638a8e9e7964d3cda1f1dfe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_024e7aaea0028c5c1aca861182190949dbfe1837638a8e9e7964d3cda1f1dfe2->enter($__internal_024e7aaea0028c5c1aca861182190949dbfe1837638a8e9e7964d3cda1f1dfe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65ff5a4606b6c34ba9eb00e783eebfffa05e3dfbd4de5b75505214544c764a60->leave($__internal_65ff5a4606b6c34ba9eb00e783eebfffa05e3dfbd4de5b75505214544c764a60_prof);

        
        $__internal_024e7aaea0028c5c1aca861182190949dbfe1837638a8e9e7964d3cda1f1dfe2->leave($__internal_024e7aaea0028c5c1aca861182190949dbfe1837638a8e9e7964d3cda1f1dfe2_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d860bbe85576b6d1c4b5401f4adf04c01c0248c6c317037eb7145256d6fad861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d860bbe85576b6d1c4b5401f4adf04c01c0248c6c317037eb7145256d6fad861->enter($__internal_d860bbe85576b6d1c4b5401f4adf04c01c0248c6c317037eb7145256d6fad861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_6f78221e2fa70c81c5ca1d7fca567e50256d5eabf052a44c94e9a3d7a22766aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f78221e2fa70c81c5ca1d7fca567e50256d5eabf052a44c94e9a3d7a22766aa->enter($__internal_6f78221e2fa70c81c5ca1d7fca567e50256d5eabf052a44c94e9a3d7a22766aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_6f78221e2fa70c81c5ca1d7fca567e50256d5eabf052a44c94e9a3d7a22766aa->leave($__internal_6f78221e2fa70c81c5ca1d7fca567e50256d5eabf052a44c94e9a3d7a22766aa_prof);

        
        $__internal_d860bbe85576b6d1c4b5401f4adf04c01c0248c6c317037eb7145256d6fad861->leave($__internal_d860bbe85576b6d1c4b5401f4adf04c01c0248c6c317037eb7145256d6fad861_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3c25d29a9a37b8a8c98b557a77fdb66e23b71f746e8d8d5b4e992b017e3beda6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c25d29a9a37b8a8c98b557a77fdb66e23b71f746e8d8d5b4e992b017e3beda6->enter($__internal_3c25d29a9a37b8a8c98b557a77fdb66e23b71f746e8d8d5b4e992b017e3beda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_af6b26d7d2f6955863c031023606a7079fe40bcb04684604a67c3494a8ece537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af6b26d7d2f6955863c031023606a7079fe40bcb04684604a67c3494a8ece537->enter($__internal_af6b26d7d2f6955863c031023606a7079fe40bcb04684604a67c3494a8ece537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_af6b26d7d2f6955863c031023606a7079fe40bcb04684604a67c3494a8ece537->leave($__internal_af6b26d7d2f6955863c031023606a7079fe40bcb04684604a67c3494a8ece537_prof);

        
        $__internal_3c25d29a9a37b8a8c98b557a77fdb66e23b71f746e8d8d5b4e992b017e3beda6->leave($__internal_3c25d29a9a37b8a8c98b557a77fdb66e23b71f746e8d8d5b4e992b017e3beda6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
