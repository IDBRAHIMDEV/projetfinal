<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_d33e99c40a95b41afec3a0a6eaf61765fb12619fed0c8794d1ab33732a01f0fb extends Twig_Template
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
        $__internal_3edb37151c3b7c626ba20218f4dfa3b4cf4b5615061c5927f8b851fbebe59f85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3edb37151c3b7c626ba20218f4dfa3b4cf4b5615061c5927f8b851fbebe59f85->enter($__internal_3edb37151c3b7c626ba20218f4dfa3b4cf4b5615061c5927f8b851fbebe59f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_f4e2f753f42d51b605f2eb5eccb1f1c134c5adaf0cba796b691fc39f6dec79c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e2f753f42d51b605f2eb5eccb1f1c134c5adaf0cba796b691fc39f6dec79c7->enter($__internal_f4e2f753f42d51b605f2eb5eccb1f1c134c5adaf0cba796b691fc39f6dec79c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_3edb37151c3b7c626ba20218f4dfa3b4cf4b5615061c5927f8b851fbebe59f85->leave($__internal_3edb37151c3b7c626ba20218f4dfa3b4cf4b5615061c5927f8b851fbebe59f85_prof);

        
        $__internal_f4e2f753f42d51b605f2eb5eccb1f1c134c5adaf0cba796b691fc39f6dec79c7->leave($__internal_f4e2f753f42d51b605f2eb5eccb1f1c134c5adaf0cba796b691fc39f6dec79c7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
