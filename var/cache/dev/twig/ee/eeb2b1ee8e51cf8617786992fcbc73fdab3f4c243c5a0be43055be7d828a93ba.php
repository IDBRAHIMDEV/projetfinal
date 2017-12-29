<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c40193700c43849b17745eb5abfeca5c8df45b7a4f99058185c5b98f641c1361 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba76e11f15ab7b7fefafa6e2edcb790f29fbeb8289b29a7715511e458ce3f503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba76e11f15ab7b7fefafa6e2edcb790f29fbeb8289b29a7715511e458ce3f503->enter($__internal_ba76e11f15ab7b7fefafa6e2edcb790f29fbeb8289b29a7715511e458ce3f503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1b6a261a86f958aa119f2776ec2138fc9a31fc2e957e50614c78d39cbe89b9c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b6a261a86f958aa119f2776ec2138fc9a31fc2e957e50614c78d39cbe89b9c0->enter($__internal_1b6a261a86f958aa119f2776ec2138fc9a31fc2e957e50614c78d39cbe89b9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba76e11f15ab7b7fefafa6e2edcb790f29fbeb8289b29a7715511e458ce3f503->leave($__internal_ba76e11f15ab7b7fefafa6e2edcb790f29fbeb8289b29a7715511e458ce3f503_prof);

        
        $__internal_1b6a261a86f958aa119f2776ec2138fc9a31fc2e957e50614c78d39cbe89b9c0->leave($__internal_1b6a261a86f958aa119f2776ec2138fc9a31fc2e957e50614c78d39cbe89b9c0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_824a05bee66f9028a5300310d5af86a6b3504a52fe9d7ae57ad6671576105272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_824a05bee66f9028a5300310d5af86a6b3504a52fe9d7ae57ad6671576105272->enter($__internal_824a05bee66f9028a5300310d5af86a6b3504a52fe9d7ae57ad6671576105272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3800a7d8596e00b0692be96140106f26a2348d205067b96604686830585dab21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3800a7d8596e00b0692be96140106f26a2348d205067b96604686830585dab21->enter($__internal_3800a7d8596e00b0692be96140106f26a2348d205067b96604686830585dab21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_3800a7d8596e00b0692be96140106f26a2348d205067b96604686830585dab21->leave($__internal_3800a7d8596e00b0692be96140106f26a2348d205067b96604686830585dab21_prof);

        
        $__internal_824a05bee66f9028a5300310d5af86a6b3504a52fe9d7ae57ad6671576105272->leave($__internal_824a05bee66f9028a5300310d5af86a6b3504a52fe9d7ae57ad6671576105272_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ed0bf1d6655018e347ca3a25a9675ee94e559724a820c0ab867b476ebffb6ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed0bf1d6655018e347ca3a25a9675ee94e559724a820c0ab867b476ebffb6ac->enter($__internal_1ed0bf1d6655018e347ca3a25a9675ee94e559724a820c0ab867b476ebffb6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e05e943c72f5daeb21c6d10072c121f154ad466f7470ade20f5d2268734f7aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05e943c72f5daeb21c6d10072c121f154ad466f7470ade20f5d2268734f7aff->enter($__internal_e05e943c72f5daeb21c6d10072c121f154ad466f7470ade20f5d2268734f7aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e05e943c72f5daeb21c6d10072c121f154ad466f7470ade20f5d2268734f7aff->leave($__internal_e05e943c72f5daeb21c6d10072c121f154ad466f7470ade20f5d2268734f7aff_prof);

        
        $__internal_1ed0bf1d6655018e347ca3a25a9675ee94e559724a820c0ab867b476ebffb6ac->leave($__internal_1ed0bf1d6655018e347ca3a25a9675ee94e559724a820c0ab867b476ebffb6ac_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a46ecc98d9967fb3b7bd73a109af8f12f65552ed4a06dd4330e79858554d247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a46ecc98d9967fb3b7bd73a109af8f12f65552ed4a06dd4330e79858554d247->enter($__internal_7a46ecc98d9967fb3b7bd73a109af8f12f65552ed4a06dd4330e79858554d247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fcb1d7e9861399250ab6f8243cbda41ad735a9433e712b00f655d70a7a53a6ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb1d7e9861399250ab6f8243cbda41ad735a9433e712b00f655d70a7a53a6ed->enter($__internal_fcb1d7e9861399250ab6f8243cbda41ad735a9433e712b00f655d70a7a53a6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_fcb1d7e9861399250ab6f8243cbda41ad735a9433e712b00f655d70a7a53a6ed->leave($__internal_fcb1d7e9861399250ab6f8243cbda41ad735a9433e712b00f655d70a7a53a6ed_prof);

        
        $__internal_7a46ecc98d9967fb3b7bd73a109af8f12f65552ed4a06dd4330e79858554d247->leave($__internal_7a46ecc98d9967fb3b7bd73a109af8f12f65552ed4a06dd4330e79858554d247_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
