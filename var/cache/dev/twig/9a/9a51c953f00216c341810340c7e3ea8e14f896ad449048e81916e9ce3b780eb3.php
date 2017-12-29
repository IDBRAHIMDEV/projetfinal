<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_fb088ce6c19465863ecb7eaf84a3a942d3571471e9a105698c0d9dd2b3c4071c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe6eeeec7413e63a3d0e9d7430535ef147b70baf9de6c43ff32cc2975f10cd76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe6eeeec7413e63a3d0e9d7430535ef147b70baf9de6c43ff32cc2975f10cd76->enter($__internal_fe6eeeec7413e63a3d0e9d7430535ef147b70baf9de6c43ff32cc2975f10cd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_2c44fb91fc1957eb7474af218c708762357fb85c1dfb25810f28ebdf7b445edd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c44fb91fc1957eb7474af218c708762357fb85c1dfb25810f28ebdf7b445edd->enter($__internal_2c44fb91fc1957eb7474af218c708762357fb85c1dfb25810f28ebdf7b445edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_fe6eeeec7413e63a3d0e9d7430535ef147b70baf9de6c43ff32cc2975f10cd76->leave($__internal_fe6eeeec7413e63a3d0e9d7430535ef147b70baf9de6c43ff32cc2975f10cd76_prof);

        
        $__internal_2c44fb91fc1957eb7474af218c708762357fb85c1dfb25810f28ebdf7b445edd->leave($__internal_2c44fb91fc1957eb7474af218c708762357fb85c1dfb25810f28ebdf7b445edd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
