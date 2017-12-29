<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_77ae026b93ba73710f39c78745b9adb4c9cb88fb535c9adce2e109bc1c1b0748 extends Twig_Template
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
        $__internal_dcb18a10e2754cadafd0949e4a625aafb96b717e23385613468b71ff37e7744e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcb18a10e2754cadafd0949e4a625aafb96b717e23385613468b71ff37e7744e->enter($__internal_dcb18a10e2754cadafd0949e4a625aafb96b717e23385613468b71ff37e7744e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_054ba8f5455d7f3420ace6706763b982bbd556b9625b2a1589e862573993f972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_054ba8f5455d7f3420ace6706763b982bbd556b9625b2a1589e862573993f972->enter($__internal_054ba8f5455d7f3420ace6706763b982bbd556b9625b2a1589e862573993f972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_dcb18a10e2754cadafd0949e4a625aafb96b717e23385613468b71ff37e7744e->leave($__internal_dcb18a10e2754cadafd0949e4a625aafb96b717e23385613468b71ff37e7744e_prof);

        
        $__internal_054ba8f5455d7f3420ace6706763b982bbd556b9625b2a1589e862573993f972->leave($__internal_054ba8f5455d7f3420ace6706763b982bbd556b9625b2a1589e862573993f972_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
