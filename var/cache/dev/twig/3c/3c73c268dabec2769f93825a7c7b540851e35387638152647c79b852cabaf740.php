<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_d3f3fe8a63d0b8a4447555b584b6e203ed016cee0aa085021e283dafc7f4361e extends Twig_Template
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
        $__internal_7e0d81e67860b0680ffecc3e0d436a6ba97f627c66946b86e97db828a1441bb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e0d81e67860b0680ffecc3e0d436a6ba97f627c66946b86e97db828a1441bb1->enter($__internal_7e0d81e67860b0680ffecc3e0d436a6ba97f627c66946b86e97db828a1441bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_f5ca5e572477bbfc73aecfa87a5507e9f95fbe81012f56c5b6dfa64025208593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ca5e572477bbfc73aecfa87a5507e9f95fbe81012f56c5b6dfa64025208593->enter($__internal_f5ca5e572477bbfc73aecfa87a5507e9f95fbe81012f56c5b6dfa64025208593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_7e0d81e67860b0680ffecc3e0d436a6ba97f627c66946b86e97db828a1441bb1->leave($__internal_7e0d81e67860b0680ffecc3e0d436a6ba97f627c66946b86e97db828a1441bb1_prof);

        
        $__internal_f5ca5e572477bbfc73aecfa87a5507e9f95fbe81012f56c5b6dfa64025208593->leave($__internal_f5ca5e572477bbfc73aecfa87a5507e9f95fbe81012f56c5b6dfa64025208593_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
