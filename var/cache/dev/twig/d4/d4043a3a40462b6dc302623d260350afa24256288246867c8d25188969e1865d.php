<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_eb8972821209143caf22826fc561b04da3ce418c02bea3b324c5bdffbcde3233 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_39073d96faf0c6d095e48e0b3332ba809264a35efda0d8c269bd45d5c9f99fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39073d96faf0c6d095e48e0b3332ba809264a35efda0d8c269bd45d5c9f99fd0->enter($__internal_39073d96faf0c6d095e48e0b3332ba809264a35efda0d8c269bd45d5c9f99fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_8564f28dfa764ea61f66084018432a33a5341087b0ca1da1bf9b9ae65e18a42b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8564f28dfa764ea61f66084018432a33a5341087b0ca1da1bf9b9ae65e18a42b->enter($__internal_8564f28dfa764ea61f66084018432a33a5341087b0ca1da1bf9b9ae65e18a42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39073d96faf0c6d095e48e0b3332ba809264a35efda0d8c269bd45d5c9f99fd0->leave($__internal_39073d96faf0c6d095e48e0b3332ba809264a35efda0d8c269bd45d5c9f99fd0_prof);

        
        $__internal_8564f28dfa764ea61f66084018432a33a5341087b0ca1da1bf9b9ae65e18a42b->leave($__internal_8564f28dfa764ea61f66084018432a33a5341087b0ca1da1bf9b9ae65e18a42b_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ba00154666fcaabe038ebaec7ddf71e715299196d2fb773340f89121dcb3afc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba00154666fcaabe038ebaec7ddf71e715299196d2fb773340f89121dcb3afc7->enter($__internal_ba00154666fcaabe038ebaec7ddf71e715299196d2fb773340f89121dcb3afc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_07d3f259488bccf0b1da2e6ff8cfdce80b1766bd7ba50b39b0a7d5f39a381a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d3f259488bccf0b1da2e6ff8cfdce80b1766bd7ba50b39b0a7d5f39a381a5b->enter($__internal_07d3f259488bccf0b1da2e6ff8cfdce80b1766bd7ba50b39b0a7d5f39a381a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_07d3f259488bccf0b1da2e6ff8cfdce80b1766bd7ba50b39b0a7d5f39a381a5b->leave($__internal_07d3f259488bccf0b1da2e6ff8cfdce80b1766bd7ba50b39b0a7d5f39a381a5b_prof);

        
        $__internal_ba00154666fcaabe038ebaec7ddf71e715299196d2fb773340f89121dcb3afc7->leave($__internal_ba00154666fcaabe038ebaec7ddf71e715299196d2fb773340f89121dcb3afc7_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ef2394276d9ea62e3fc6c62c13b022384a7b29c04b0a42de4f67b5c3dc87d9de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef2394276d9ea62e3fc6c62c13b022384a7b29c04b0a42de4f67b5c3dc87d9de->enter($__internal_ef2394276d9ea62e3fc6c62c13b022384a7b29c04b0a42de4f67b5c3dc87d9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_af2f9991c5b4115512cd8714c999d7744f476f53267bb26f9b29507c35754d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af2f9991c5b4115512cd8714c999d7744f476f53267bb26f9b29507c35754d4e->enter($__internal_af2f9991c5b4115512cd8714c999d7744f476f53267bb26f9b29507c35754d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_af2f9991c5b4115512cd8714c999d7744f476f53267bb26f9b29507c35754d4e->leave($__internal_af2f9991c5b4115512cd8714c999d7744f476f53267bb26f9b29507c35754d4e_prof);

        
        $__internal_ef2394276d9ea62e3fc6c62c13b022384a7b29c04b0a42de4f67b5c3dc87d9de->leave($__internal_ef2394276d9ea62e3fc6c62c13b022384a7b29c04b0a42de4f67b5c3dc87d9de_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
