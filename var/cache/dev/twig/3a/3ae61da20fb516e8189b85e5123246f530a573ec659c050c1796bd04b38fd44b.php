<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_b161affdb87c146db4e6e2a167ba4a71c29b4456d88bc8682c5e0274544b389f extends Twig_Template
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
        $__internal_7c8290a952b6db84f375cf0c6887c621f9faec4ca5499d69b540c511c60c52ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c8290a952b6db84f375cf0c6887c621f9faec4ca5499d69b540c511c60c52ec->enter($__internal_7c8290a952b6db84f375cf0c6887c621f9faec4ca5499d69b540c511c60c52ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_d2fcc0d598d4921d5fc048b743c8789d69bc0f06423f400ae701266679dc17aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2fcc0d598d4921d5fc048b743c8789d69bc0f06423f400ae701266679dc17aa->enter($__internal_d2fcc0d598d4921d5fc048b743c8789d69bc0f06423f400ae701266679dc17aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_7c8290a952b6db84f375cf0c6887c621f9faec4ca5499d69b540c511c60c52ec->leave($__internal_7c8290a952b6db84f375cf0c6887c621f9faec4ca5499d69b540c511c60c52ec_prof);

        
        $__internal_d2fcc0d598d4921d5fc048b743c8789d69bc0f06423f400ae701266679dc17aa->leave($__internal_d2fcc0d598d4921d5fc048b743c8789d69bc0f06423f400ae701266679dc17aa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
