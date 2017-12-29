<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_d62a013c86c053a6dbf4272c62e74851f80e97c4e782988437c968ced2aec6eb extends Twig_Template
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
        $__internal_6d0a35a0eb834db2d29d48b88f23b9b870682040d93013db4c660622161a6e23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d0a35a0eb834db2d29d48b88f23b9b870682040d93013db4c660622161a6e23->enter($__internal_6d0a35a0eb834db2d29d48b88f23b9b870682040d93013db4c660622161a6e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_767fde3e545532c10d2fcbd6e4d7d17daf38cbfb49047ead67e2393cbab503b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_767fde3e545532c10d2fcbd6e4d7d17daf38cbfb49047ead67e2393cbab503b2->enter($__internal_767fde3e545532c10d2fcbd6e4d7d17daf38cbfb49047ead67e2393cbab503b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_6d0a35a0eb834db2d29d48b88f23b9b870682040d93013db4c660622161a6e23->leave($__internal_6d0a35a0eb834db2d29d48b88f23b9b870682040d93013db4c660622161a6e23_prof);

        
        $__internal_767fde3e545532c10d2fcbd6e4d7d17daf38cbfb49047ead67e2393cbab503b2->leave($__internal_767fde3e545532c10d2fcbd6e4d7d17daf38cbfb49047ead67e2393cbab503b2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
