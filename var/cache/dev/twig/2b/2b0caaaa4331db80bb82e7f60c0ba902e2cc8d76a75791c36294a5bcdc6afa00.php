<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9badc541b99ba477b077d7f72d0e6c47061b77dede4df622799ce74ef7060b6f extends Twig_Template
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
        $__internal_0748c4e51837665a6c2dd7bea9878258c6faa7810bcc1242c2bb45f7433fe74b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0748c4e51837665a6c2dd7bea9878258c6faa7810bcc1242c2bb45f7433fe74b->enter($__internal_0748c4e51837665a6c2dd7bea9878258c6faa7810bcc1242c2bb45f7433fe74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_41ba266ddd0c26b4d9418098d3f32c13162e337c8bb43660462d57b62e3ea9d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ba266ddd0c26b4d9418098d3f32c13162e337c8bb43660462d57b62e3ea9d5->enter($__internal_41ba266ddd0c26b4d9418098d3f32c13162e337c8bb43660462d57b62e3ea9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_0748c4e51837665a6c2dd7bea9878258c6faa7810bcc1242c2bb45f7433fe74b->leave($__internal_0748c4e51837665a6c2dd7bea9878258c6faa7810bcc1242c2bb45f7433fe74b_prof);

        
        $__internal_41ba266ddd0c26b4d9418098d3f32c13162e337c8bb43660462d57b62e3ea9d5->leave($__internal_41ba266ddd0c26b4d9418098d3f32c13162e337c8bb43660462d57b62e3ea9d5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
