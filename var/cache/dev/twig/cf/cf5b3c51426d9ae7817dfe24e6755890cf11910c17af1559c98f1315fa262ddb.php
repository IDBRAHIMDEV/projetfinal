<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_43694899eea294f11fbe54eb0874f892655b48c3a1cc2396b64fc660146ef43c extends Twig_Template
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
        $__internal_651e7203eb0912344bd19035a81e8332a536dc0f2e0a10e52a389bbd27316eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_651e7203eb0912344bd19035a81e8332a536dc0f2e0a10e52a389bbd27316eb9->enter($__internal_651e7203eb0912344bd19035a81e8332a536dc0f2e0a10e52a389bbd27316eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_2fe9c5b35ed5358d34b539fb0d716eb796fcf26dbc3a410200170859f474cb21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe9c5b35ed5358d34b539fb0d716eb796fcf26dbc3a410200170859f474cb21->enter($__internal_2fe9c5b35ed5358d34b539fb0d716eb796fcf26dbc3a410200170859f474cb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_651e7203eb0912344bd19035a81e8332a536dc0f2e0a10e52a389bbd27316eb9->leave($__internal_651e7203eb0912344bd19035a81e8332a536dc0f2e0a10e52a389bbd27316eb9_prof);

        
        $__internal_2fe9c5b35ed5358d34b539fb0d716eb796fcf26dbc3a410200170859f474cb21->leave($__internal_2fe9c5b35ed5358d34b539fb0d716eb796fcf26dbc3a410200170859f474cb21_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
