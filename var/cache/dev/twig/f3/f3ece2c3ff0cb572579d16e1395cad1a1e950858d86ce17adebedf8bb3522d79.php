<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_41aafb73ace2af1696d3e6dac36aeaf8cce29a33295dd2704cd8481324982923 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_1d3970a33031b58658a74c02209566a9c8add9971101d19e4299f3b15a3110d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d3970a33031b58658a74c02209566a9c8add9971101d19e4299f3b15a3110d2->enter($__internal_1d3970a33031b58658a74c02209566a9c8add9971101d19e4299f3b15a3110d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_73c937a7859852d1f4fb1aeb2426ea6bd7fef568a7c39f89f200eb1bc38fbd7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73c937a7859852d1f4fb1aeb2426ea6bd7fef568a7c39f89f200eb1bc38fbd7e->enter($__internal_73c937a7859852d1f4fb1aeb2426ea6bd7fef568a7c39f89f200eb1bc38fbd7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d3970a33031b58658a74c02209566a9c8add9971101d19e4299f3b15a3110d2->leave($__internal_1d3970a33031b58658a74c02209566a9c8add9971101d19e4299f3b15a3110d2_prof);

        
        $__internal_73c937a7859852d1f4fb1aeb2426ea6bd7fef568a7c39f89f200eb1bc38fbd7e->leave($__internal_73c937a7859852d1f4fb1aeb2426ea6bd7fef568a7c39f89f200eb1bc38fbd7e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa3eafd23f917ea4350942d82577f992708474611cb8f1c2719216de29692e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa3eafd23f917ea4350942d82577f992708474611cb8f1c2719216de29692e6e->enter($__internal_fa3eafd23f917ea4350942d82577f992708474611cb8f1c2719216de29692e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_78e9ca08cb533d5a02f004e4a8a4562f5bb73292e72685a4ca96cf2069db0f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78e9ca08cb533d5a02f004e4a8a4562f5bb73292e72685a4ca96cf2069db0f80->enter($__internal_78e9ca08cb533d5a02f004e4a8a4562f5bb73292e72685a4ca96cf2069db0f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_78e9ca08cb533d5a02f004e4a8a4562f5bb73292e72685a4ca96cf2069db0f80->leave($__internal_78e9ca08cb533d5a02f004e4a8a4562f5bb73292e72685a4ca96cf2069db0f80_prof);

        
        $__internal_fa3eafd23f917ea4350942d82577f992708474611cb8f1c2719216de29692e6e->leave($__internal_fa3eafd23f917ea4350942d82577f992708474611cb8f1c2719216de29692e6e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ee3ebb63228f5e13517c6cb12bfbf57e92c2adba379208a843fb29f0398d89f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ee3ebb63228f5e13517c6cb12bfbf57e92c2adba379208a843fb29f0398d89f->enter($__internal_6ee3ebb63228f5e13517c6cb12bfbf57e92c2adba379208a843fb29f0398d89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_981e3d9a513e71fef25105204679c8ef9cbcc22b4a02e540b7bd91bd71c96a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_981e3d9a513e71fef25105204679c8ef9cbcc22b4a02e540b7bd91bd71c96a67->enter($__internal_981e3d9a513e71fef25105204679c8ef9cbcc22b4a02e540b7bd91bd71c96a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_981e3d9a513e71fef25105204679c8ef9cbcc22b4a02e540b7bd91bd71c96a67->leave($__internal_981e3d9a513e71fef25105204679c8ef9cbcc22b4a02e540b7bd91bd71c96a67_prof);

        
        $__internal_6ee3ebb63228f5e13517c6cb12bfbf57e92c2adba379208a843fb29f0398d89f->leave($__internal_6ee3ebb63228f5e13517c6cb12bfbf57e92c2adba379208a843fb29f0398d89f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
