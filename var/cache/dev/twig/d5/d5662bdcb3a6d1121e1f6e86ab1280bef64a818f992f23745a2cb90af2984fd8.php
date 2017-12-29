<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_09412fa460fd21e899d0017998e672a2f05bc518afee5284e4ee11a23d87d649 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_69cbb551578233739aa370f9059c6b6efe686b54ccd4c8eb832bbce7ddeef8df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69cbb551578233739aa370f9059c6b6efe686b54ccd4c8eb832bbce7ddeef8df->enter($__internal_69cbb551578233739aa370f9059c6b6efe686b54ccd4c8eb832bbce7ddeef8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_f5ae5cd08a1371220038c439b9cecdeb7219c7ccb826455f1be98a32c8748c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ae5cd08a1371220038c439b9cecdeb7219c7ccb826455f1be98a32c8748c84->enter($__internal_f5ae5cd08a1371220038c439b9cecdeb7219c7ccb826455f1be98a32c8748c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69cbb551578233739aa370f9059c6b6efe686b54ccd4c8eb832bbce7ddeef8df->leave($__internal_69cbb551578233739aa370f9059c6b6efe686b54ccd4c8eb832bbce7ddeef8df_prof);

        
        $__internal_f5ae5cd08a1371220038c439b9cecdeb7219c7ccb826455f1be98a32c8748c84->leave($__internal_f5ae5cd08a1371220038c439b9cecdeb7219c7ccb826455f1be98a32c8748c84_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae46d99f5e6160772f8809e699735f3a9f4317345ab428ab0a1b2a5fd2be186d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae46d99f5e6160772f8809e699735f3a9f4317345ab428ab0a1b2a5fd2be186d->enter($__internal_ae46d99f5e6160772f8809e699735f3a9f4317345ab428ab0a1b2a5fd2be186d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_012550d447e5a78a356ac5a7b1712925a38c2b090fca11ca781d61826b51f97c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_012550d447e5a78a356ac5a7b1712925a38c2b090fca11ca781d61826b51f97c->enter($__internal_012550d447e5a78a356ac5a7b1712925a38c2b090fca11ca781d61826b51f97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_012550d447e5a78a356ac5a7b1712925a38c2b090fca11ca781d61826b51f97c->leave($__internal_012550d447e5a78a356ac5a7b1712925a38c2b090fca11ca781d61826b51f97c_prof);

        
        $__internal_ae46d99f5e6160772f8809e699735f3a9f4317345ab428ab0a1b2a5fd2be186d->leave($__internal_ae46d99f5e6160772f8809e699735f3a9f4317345ab428ab0a1b2a5fd2be186d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_27cebfba6030d922ff1268d99482fd842c2bfff3af473089da3527628b8efbf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27cebfba6030d922ff1268d99482fd842c2bfff3af473089da3527628b8efbf2->enter($__internal_27cebfba6030d922ff1268d99482fd842c2bfff3af473089da3527628b8efbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a9d3294ff3eef0e7df1b7b7361c92ce95b51ec99c98e87d7e0016266d7b8527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9d3294ff3eef0e7df1b7b7361c92ce95b51ec99c98e87d7e0016266d7b8527->enter($__internal_8a9d3294ff3eef0e7df1b7b7361c92ce95b51ec99c98e87d7e0016266d7b8527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8a9d3294ff3eef0e7df1b7b7361c92ce95b51ec99c98e87d7e0016266d7b8527->leave($__internal_8a9d3294ff3eef0e7df1b7b7361c92ce95b51ec99c98e87d7e0016266d7b8527_prof);

        
        $__internal_27cebfba6030d922ff1268d99482fd842c2bfff3af473089da3527628b8efbf2->leave($__internal_27cebfba6030d922ff1268d99482fd842c2bfff3af473089da3527628b8efbf2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
