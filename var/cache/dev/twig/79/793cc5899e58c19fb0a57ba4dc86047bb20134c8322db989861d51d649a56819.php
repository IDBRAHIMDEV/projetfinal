<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_a7e530fe1995f373b605006179bc4b0d204f065a4f90f5da729978354557f4e8 extends Twig_Template
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
        $__internal_ca80a54b30487807086a9c1e6cc259d283e87781cfb8d93dda982de14e577795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca80a54b30487807086a9c1e6cc259d283e87781cfb8d93dda982de14e577795->enter($__internal_ca80a54b30487807086a9c1e6cc259d283e87781cfb8d93dda982de14e577795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_26fa81cf36adecaf483ff8b2d55e8bec281031b30c4391f5357c82227bcabf6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26fa81cf36adecaf483ff8b2d55e8bec281031b30c4391f5357c82227bcabf6f->enter($__internal_26fa81cf36adecaf483ff8b2d55e8bec281031b30c4391f5357c82227bcabf6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ca80a54b30487807086a9c1e6cc259d283e87781cfb8d93dda982de14e577795->leave($__internal_ca80a54b30487807086a9c1e6cc259d283e87781cfb8d93dda982de14e577795_prof);

        
        $__internal_26fa81cf36adecaf483ff8b2d55e8bec281031b30c4391f5357c82227bcabf6f->leave($__internal_26fa81cf36adecaf483ff8b2d55e8bec281031b30c4391f5357c82227bcabf6f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
