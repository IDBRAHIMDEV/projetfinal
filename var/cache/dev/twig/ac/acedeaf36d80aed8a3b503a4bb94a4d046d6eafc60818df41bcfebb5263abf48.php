<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_c937431cd853be897d4163ea44fcebb9e0abe7205fb887243bfb7be7d1dc35ff extends Twig_Template
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
        $__internal_013cf1ab0f0ebdfc524d32592b98550eb249e1193b74c7d22a3b4699f27e057e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_013cf1ab0f0ebdfc524d32592b98550eb249e1193b74c7d22a3b4699f27e057e->enter($__internal_013cf1ab0f0ebdfc524d32592b98550eb249e1193b74c7d22a3b4699f27e057e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_d270e5d0cb90847374edaf479cb360938d1b295190a9b87a343d00e91d318ae2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d270e5d0cb90847374edaf479cb360938d1b295190a9b87a343d00e91d318ae2->enter($__internal_d270e5d0cb90847374edaf479cb360938d1b295190a9b87a343d00e91d318ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_013cf1ab0f0ebdfc524d32592b98550eb249e1193b74c7d22a3b4699f27e057e->leave($__internal_013cf1ab0f0ebdfc524d32592b98550eb249e1193b74c7d22a3b4699f27e057e_prof);

        
        $__internal_d270e5d0cb90847374edaf479cb360938d1b295190a9b87a343d00e91d318ae2->leave($__internal_d270e5d0cb90847374edaf479cb360938d1b295190a9b87a343d00e91d318ae2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
