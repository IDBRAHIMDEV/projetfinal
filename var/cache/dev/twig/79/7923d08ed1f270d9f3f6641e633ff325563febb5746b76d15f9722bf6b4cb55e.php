<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_74e898af5cb444d07e7bc2d7c93e8c88b34b8083155fdcb4dce0f18824d6306b extends Twig_Template
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
        $__internal_41d2740119b49f7a10976f1eb18012052f41039ab6967e8a0f522f432e44799b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41d2740119b49f7a10976f1eb18012052f41039ab6967e8a0f522f432e44799b->enter($__internal_41d2740119b49f7a10976f1eb18012052f41039ab6967e8a0f522f432e44799b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_e6d01bca7c648a81207b321e684db52f70f46cd9c3aa4a0604606833deeeaf90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d01bca7c648a81207b321e684db52f70f46cd9c3aa4a0604606833deeeaf90->enter($__internal_e6d01bca7c648a81207b321e684db52f70f46cd9c3aa4a0604606833deeeaf90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_41d2740119b49f7a10976f1eb18012052f41039ab6967e8a0f522f432e44799b->leave($__internal_41d2740119b49f7a10976f1eb18012052f41039ab6967e8a0f522f432e44799b_prof);

        
        $__internal_e6d01bca7c648a81207b321e684db52f70f46cd9c3aa4a0604606833deeeaf90->leave($__internal_e6d01bca7c648a81207b321e684db52f70f46cd9c3aa4a0604606833deeeaf90_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
