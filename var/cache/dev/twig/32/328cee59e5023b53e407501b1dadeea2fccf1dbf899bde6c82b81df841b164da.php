<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_557d224799058e4442366fdfe03b453b244ef735445a4e1d62fc0b87c2680ebe extends Twig_Template
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
        $__internal_e18de8fbc77c45e8a4858c7cf4a040a4f184770644ee32c55652c7e14803fe54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e18de8fbc77c45e8a4858c7cf4a040a4f184770644ee32c55652c7e14803fe54->enter($__internal_e18de8fbc77c45e8a4858c7cf4a040a4f184770644ee32c55652c7e14803fe54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_996b4d922c284034e75cf5c9268d29492c2c89bb8dcdc6cfce02c79694936fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996b4d922c284034e75cf5c9268d29492c2c89bb8dcdc6cfce02c79694936fff->enter($__internal_996b4d922c284034e75cf5c9268d29492c2c89bb8dcdc6cfce02c79694936fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e18de8fbc77c45e8a4858c7cf4a040a4f184770644ee32c55652c7e14803fe54->leave($__internal_e18de8fbc77c45e8a4858c7cf4a040a4f184770644ee32c55652c7e14803fe54_prof);

        
        $__internal_996b4d922c284034e75cf5c9268d29492c2c89bb8dcdc6cfce02c79694936fff->leave($__internal_996b4d922c284034e75cf5c9268d29492c2c89bb8dcdc6cfce02c79694936fff_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
