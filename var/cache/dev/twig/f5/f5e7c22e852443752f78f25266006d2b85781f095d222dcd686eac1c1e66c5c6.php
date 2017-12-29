<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_1302dcd28cc7466859e962c7f62ccbdd8c098dda7f38a24c326f17d34b362c1e extends Twig_Template
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
        $__internal_367719bc4730d6f140f58ceee3d27267fe6b43edf616e6d786c29bd2dbf16a16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_367719bc4730d6f140f58ceee3d27267fe6b43edf616e6d786c29bd2dbf16a16->enter($__internal_367719bc4730d6f140f58ceee3d27267fe6b43edf616e6d786c29bd2dbf16a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_c400e9f0858001f14fbc3645a1596cb9eb8d0abe1079a5d133fb168b16a9dc15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c400e9f0858001f14fbc3645a1596cb9eb8d0abe1079a5d133fb168b16a9dc15->enter($__internal_c400e9f0858001f14fbc3645a1596cb9eb8d0abe1079a5d133fb168b16a9dc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_367719bc4730d6f140f58ceee3d27267fe6b43edf616e6d786c29bd2dbf16a16->leave($__internal_367719bc4730d6f140f58ceee3d27267fe6b43edf616e6d786c29bd2dbf16a16_prof);

        
        $__internal_c400e9f0858001f14fbc3645a1596cb9eb8d0abe1079a5d133fb168b16a9dc15->leave($__internal_c400e9f0858001f14fbc3645a1596cb9eb8d0abe1079a5d133fb168b16a9dc15_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
