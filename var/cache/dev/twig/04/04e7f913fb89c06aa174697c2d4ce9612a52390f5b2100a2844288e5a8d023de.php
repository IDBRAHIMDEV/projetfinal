<?php

/* ::base.html.twig */
class __TwigTemplate_aa5f3552ca86d979583f0f0cf183b69bf6a4a2a035ec7a029f8d3a6956a24664 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7673bad56fa23ba835ffb67052ce953a9f96c0d6999efb0e0d95f9ebfc7f9567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7673bad56fa23ba835ffb67052ce953a9f96c0d6999efb0e0d95f9ebfc7f9567->enter($__internal_7673bad56fa23ba835ffb67052ce953a9f96c0d6999efb0e0d95f9ebfc7f9567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_75aab0cfb1f4361891242ab4355c3aa885fe883fbd0a926313c16fed758c3904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75aab0cfb1f4361891242ab4355c3aa885fe883fbd0a926313c16fed758c3904->enter($__internal_75aab0cfb1f4361891242ab4355c3aa885fe883fbd0a926313c16fed758c3904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7673bad56fa23ba835ffb67052ce953a9f96c0d6999efb0e0d95f9ebfc7f9567->leave($__internal_7673bad56fa23ba835ffb67052ce953a9f96c0d6999efb0e0d95f9ebfc7f9567_prof);

        
        $__internal_75aab0cfb1f4361891242ab4355c3aa885fe883fbd0a926313c16fed758c3904->leave($__internal_75aab0cfb1f4361891242ab4355c3aa885fe883fbd0a926313c16fed758c3904_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_10242f342830c3a38ee7b103cde4c122e4aeac49364290e8cbb2297a2cbd4e97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10242f342830c3a38ee7b103cde4c122e4aeac49364290e8cbb2297a2cbd4e97->enter($__internal_10242f342830c3a38ee7b103cde4c122e4aeac49364290e8cbb2297a2cbd4e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_658373dd85bbcc3c67c9db319b6442e8f2e74f35f5b71bbca54f26fab165327b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658373dd85bbcc3c67c9db319b6442e8f2e74f35f5b71bbca54f26fab165327b->enter($__internal_658373dd85bbcc3c67c9db319b6442e8f2e74f35f5b71bbca54f26fab165327b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_658373dd85bbcc3c67c9db319b6442e8f2e74f35f5b71bbca54f26fab165327b->leave($__internal_658373dd85bbcc3c67c9db319b6442e8f2e74f35f5b71bbca54f26fab165327b_prof);

        
        $__internal_10242f342830c3a38ee7b103cde4c122e4aeac49364290e8cbb2297a2cbd4e97->leave($__internal_10242f342830c3a38ee7b103cde4c122e4aeac49364290e8cbb2297a2cbd4e97_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6ce0e0d3c0114f78fcd48ee98c2ca7120625c72bcd0711cf989d58067796133e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce0e0d3c0114f78fcd48ee98c2ca7120625c72bcd0711cf989d58067796133e->enter($__internal_6ce0e0d3c0114f78fcd48ee98c2ca7120625c72bcd0711cf989d58067796133e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2eded2110333910a52cf26dfafd53bca5fa8b982314f49329bbf2220d0c5aad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eded2110333910a52cf26dfafd53bca5fa8b982314f49329bbf2220d0c5aad3->enter($__internal_2eded2110333910a52cf26dfafd53bca5fa8b982314f49329bbf2220d0c5aad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2eded2110333910a52cf26dfafd53bca5fa8b982314f49329bbf2220d0c5aad3->leave($__internal_2eded2110333910a52cf26dfafd53bca5fa8b982314f49329bbf2220d0c5aad3_prof);

        
        $__internal_6ce0e0d3c0114f78fcd48ee98c2ca7120625c72bcd0711cf989d58067796133e->leave($__internal_6ce0e0d3c0114f78fcd48ee98c2ca7120625c72bcd0711cf989d58067796133e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f70260442b732807c35d5256e3c081f5ce5303a9958ce002941e92b15cbd27b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f70260442b732807c35d5256e3c081f5ce5303a9958ce002941e92b15cbd27b->enter($__internal_9f70260442b732807c35d5256e3c081f5ce5303a9958ce002941e92b15cbd27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e647d982eff1a876a2fe2fe421d2a15f243406ea5e7a6b750b81687921afd3f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e647d982eff1a876a2fe2fe421d2a15f243406ea5e7a6b750b81687921afd3f5->enter($__internal_e647d982eff1a876a2fe2fe421d2a15f243406ea5e7a6b750b81687921afd3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e647d982eff1a876a2fe2fe421d2a15f243406ea5e7a6b750b81687921afd3f5->leave($__internal_e647d982eff1a876a2fe2fe421d2a15f243406ea5e7a6b750b81687921afd3f5_prof);

        
        $__internal_9f70260442b732807c35d5256e3c081f5ce5303a9958ce002941e92b15cbd27b->leave($__internal_9f70260442b732807c35d5256e3c081f5ce5303a9958ce002941e92b15cbd27b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_88d36a86f2665e2269965e63b6c84aa767ce5ef3f0b92ebfbeed14a93caee339 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88d36a86f2665e2269965e63b6c84aa767ce5ef3f0b92ebfbeed14a93caee339->enter($__internal_88d36a86f2665e2269965e63b6c84aa767ce5ef3f0b92ebfbeed14a93caee339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_301c7eb400c8cad37dabbb71695ad37ebbe3f2e7ef55fc4c39f7a619af86d49d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_301c7eb400c8cad37dabbb71695ad37ebbe3f2e7ef55fc4c39f7a619af86d49d->enter($__internal_301c7eb400c8cad37dabbb71695ad37ebbe3f2e7ef55fc4c39f7a619af86d49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_301c7eb400c8cad37dabbb71695ad37ebbe3f2e7ef55fc4c39f7a619af86d49d->leave($__internal_301c7eb400c8cad37dabbb71695ad37ebbe3f2e7ef55fc4c39f7a619af86d49d_prof);

        
        $__internal_88d36a86f2665e2269965e63b6c84aa767ce5ef3f0b92ebfbeed14a93caee339->leave($__internal_88d36a86f2665e2269965e63b6c84aa767ce5ef3f0b92ebfbeed14a93caee339_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\projetfinal\\app/Resources\\views/base.html.twig");
    }
}
