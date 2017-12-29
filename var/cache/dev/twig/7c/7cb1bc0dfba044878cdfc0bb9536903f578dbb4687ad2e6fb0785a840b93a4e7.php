<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_340cd20d191f88f33422c85e7c6c8f02cde737ea805062a10f92aa8d34eb01e5 extends Twig_Template
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
        $__internal_869dedd4915de78773efb60505847eeda93ad1cd8a7c3a3072053d50771a80b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_869dedd4915de78773efb60505847eeda93ad1cd8a7c3a3072053d50771a80b5->enter($__internal_869dedd4915de78773efb60505847eeda93ad1cd8a7c3a3072053d50771a80b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_6a80a9dc560fc078f865f15071907707db117fe5e24b417132176e001cd809a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a80a9dc560fc078f865f15071907707db117fe5e24b417132176e001cd809a9->enter($__internal_6a80a9dc560fc078f865f15071907707db117fe5e24b417132176e001cd809a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_869dedd4915de78773efb60505847eeda93ad1cd8a7c3a3072053d50771a80b5->leave($__internal_869dedd4915de78773efb60505847eeda93ad1cd8a7c3a3072053d50771a80b5_prof);

        
        $__internal_6a80a9dc560fc078f865f15071907707db117fe5e24b417132176e001cd809a9->leave($__internal_6a80a9dc560fc078f865f15071907707db117fe5e24b417132176e001cd809a9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
