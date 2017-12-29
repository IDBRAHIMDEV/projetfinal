<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2d97467d38f5359429d3adabfbdab8b1811abc83356125557c4663d3e88e243f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_faba1d46728a764a583de382e1e0e01933f6535a04f92117b4879b8787175287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faba1d46728a764a583de382e1e0e01933f6535a04f92117b4879b8787175287->enter($__internal_faba1d46728a764a583de382e1e0e01933f6535a04f92117b4879b8787175287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_2a9d0de95366ce23f775ac7ead14892a6186c84aa03b23da6bfc3a473a8fd1fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9d0de95366ce23f775ac7ead14892a6186c84aa03b23da6bfc3a473a8fd1fd->enter($__internal_2a9d0de95366ce23f775ac7ead14892a6186c84aa03b23da6bfc3a473a8fd1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_faba1d46728a764a583de382e1e0e01933f6535a04f92117b4879b8787175287->leave($__internal_faba1d46728a764a583de382e1e0e01933f6535a04f92117b4879b8787175287_prof);

        
        $__internal_2a9d0de95366ce23f775ac7ead14892a6186c84aa03b23da6bfc3a473a8fd1fd->leave($__internal_2a9d0de95366ce23f775ac7ead14892a6186c84aa03b23da6bfc3a473a8fd1fd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b814c7c97c41333dfbe839fe4c431f7bec21e04852f8aa98ba1ac573ba1caedc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b814c7c97c41333dfbe839fe4c431f7bec21e04852f8aa98ba1ac573ba1caedc->enter($__internal_b814c7c97c41333dfbe839fe4c431f7bec21e04852f8aa98ba1ac573ba1caedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_30f83804abe708893a2c097db597b8a068637a97486f62e4f829020e30fdb297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30f83804abe708893a2c097db597b8a068637a97486f62e4f829020e30fdb297->enter($__internal_30f83804abe708893a2c097db597b8a068637a97486f62e4f829020e30fdb297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_30f83804abe708893a2c097db597b8a068637a97486f62e4f829020e30fdb297->leave($__internal_30f83804abe708893a2c097db597b8a068637a97486f62e4f829020e30fdb297_prof);

        
        $__internal_b814c7c97c41333dfbe839fe4c431f7bec21e04852f8aa98ba1ac573ba1caedc->leave($__internal_b814c7c97c41333dfbe839fe4c431f7bec21e04852f8aa98ba1ac573ba1caedc_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_357f4e79bdd5ab79466278e04c471cb6a89d7d7894fc31d9cba15847801e5537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_357f4e79bdd5ab79466278e04c471cb6a89d7d7894fc31d9cba15847801e5537->enter($__internal_357f4e79bdd5ab79466278e04c471cb6a89d7d7894fc31d9cba15847801e5537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c9c843556810eef761437a5242c1b8153c066fbb2fcfc660482ce709063835cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c843556810eef761437a5242c1b8153c066fbb2fcfc660482ce709063835cd->enter($__internal_c9c843556810eef761437a5242c1b8153c066fbb2fcfc660482ce709063835cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c9c843556810eef761437a5242c1b8153c066fbb2fcfc660482ce709063835cd->leave($__internal_c9c843556810eef761437a5242c1b8153c066fbb2fcfc660482ce709063835cd_prof);

        
        $__internal_357f4e79bdd5ab79466278e04c471cb6a89d7d7894fc31d9cba15847801e5537->leave($__internal_357f4e79bdd5ab79466278e04c471cb6a89d7d7894fc31d9cba15847801e5537_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a06cafdd4a400b012276117f9bcbacee9338762b7afe57991daf25e599c42b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a06cafdd4a400b012276117f9bcbacee9338762b7afe57991daf25e599c42b3->enter($__internal_2a06cafdd4a400b012276117f9bcbacee9338762b7afe57991daf25e599c42b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d8e01c99e3ef67bdee84633785991067bd0483e84344c3a31cea4e39e1193b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d8e01c99e3ef67bdee84633785991067bd0483e84344c3a31cea4e39e1193b0->enter($__internal_4d8e01c99e3ef67bdee84633785991067bd0483e84344c3a31cea4e39e1193b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_4d8e01c99e3ef67bdee84633785991067bd0483e84344c3a31cea4e39e1193b0->leave($__internal_4d8e01c99e3ef67bdee84633785991067bd0483e84344c3a31cea4e39e1193b0_prof);

        
        $__internal_2a06cafdd4a400b012276117f9bcbacee9338762b7afe57991daf25e599c42b3->leave($__internal_2a06cafdd4a400b012276117f9bcbacee9338762b7afe57991daf25e599c42b3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
