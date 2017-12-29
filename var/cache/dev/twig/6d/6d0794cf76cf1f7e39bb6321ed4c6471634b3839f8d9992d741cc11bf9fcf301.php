<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_6629ac95b99cd7e4f765eb8f15c103751eda7cc9f233ce061bb862636b4a1ec3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_ed1bff3d155c077b213159b78afce44354dc8f27d6e6e243eb2ff63815ead27d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed1bff3d155c077b213159b78afce44354dc8f27d6e6e243eb2ff63815ead27d->enter($__internal_ed1bff3d155c077b213159b78afce44354dc8f27d6e6e243eb2ff63815ead27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_6bc52b2ce9b102f7508ea1f64d63b472925c209f95ee87a88acb8faf2a8fe01f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc52b2ce9b102f7508ea1f64d63b472925c209f95ee87a88acb8faf2a8fe01f->enter($__internal_6bc52b2ce9b102f7508ea1f64d63b472925c209f95ee87a88acb8faf2a8fe01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed1bff3d155c077b213159b78afce44354dc8f27d6e6e243eb2ff63815ead27d->leave($__internal_ed1bff3d155c077b213159b78afce44354dc8f27d6e6e243eb2ff63815ead27d_prof);

        
        $__internal_6bc52b2ce9b102f7508ea1f64d63b472925c209f95ee87a88acb8faf2a8fe01f->leave($__internal_6bc52b2ce9b102f7508ea1f64d63b472925c209f95ee87a88acb8faf2a8fe01f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d2d2be086de36fee66d675920609e59cb2c4f74553c358679572625bd4daf77c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2d2be086de36fee66d675920609e59cb2c4f74553c358679572625bd4daf77c->enter($__internal_d2d2be086de36fee66d675920609e59cb2c4f74553c358679572625bd4daf77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7072a87dbf50ac5c58891f5d8e8ea30714b24d36b9e44ebe9b3fa9f613b918a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7072a87dbf50ac5c58891f5d8e8ea30714b24d36b9e44ebe9b3fa9f613b918a0->enter($__internal_7072a87dbf50ac5c58891f5d8e8ea30714b24d36b9e44ebe9b3fa9f613b918a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_7072a87dbf50ac5c58891f5d8e8ea30714b24d36b9e44ebe9b3fa9f613b918a0->leave($__internal_7072a87dbf50ac5c58891f5d8e8ea30714b24d36b9e44ebe9b3fa9f613b918a0_prof);

        
        $__internal_d2d2be086de36fee66d675920609e59cb2c4f74553c358679572625bd4daf77c->leave($__internal_d2d2be086de36fee66d675920609e59cb2c4f74553c358679572625bd4daf77c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_243875863196ee58d7aff72ef551899640b4d5b231c12761ed8686ad1f65053c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_243875863196ee58d7aff72ef551899640b4d5b231c12761ed8686ad1f65053c->enter($__internal_243875863196ee58d7aff72ef551899640b4d5b231c12761ed8686ad1f65053c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb46cc69c45be0606b317276b177c9f21a2e1b3b40bd7a8e14310362cad33f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb46cc69c45be0606b317276b177c9f21a2e1b3b40bd7a8e14310362cad33f74->enter($__internal_bb46cc69c45be0606b317276b177c9f21a2e1b3b40bd7a8e14310362cad33f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bb46cc69c45be0606b317276b177c9f21a2e1b3b40bd7a8e14310362cad33f74->leave($__internal_bb46cc69c45be0606b317276b177c9f21a2e1b3b40bd7a8e14310362cad33f74_prof);

        
        $__internal_243875863196ee58d7aff72ef551899640b4d5b231c12761ed8686ad1f65053c->leave($__internal_243875863196ee58d7aff72ef551899640b4d5b231c12761ed8686ad1f65053c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
