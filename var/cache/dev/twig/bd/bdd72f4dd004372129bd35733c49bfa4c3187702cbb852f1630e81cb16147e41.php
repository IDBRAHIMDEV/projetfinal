<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_24def0837c26d3cbb506e9a738260bc4befaf6ef8c6527b63f81c1fbb2bde270 extends Twig_Template
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
        $__internal_1cfc5965024a5dc25f837d8051421194681ac35fae355cb23946487d63732aa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cfc5965024a5dc25f837d8051421194681ac35fae355cb23946487d63732aa8->enter($__internal_1cfc5965024a5dc25f837d8051421194681ac35fae355cb23946487d63732aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_107db134abfcce82b6b1f50f87b528f5ef5eb70044c07917d53b236e7da2b6c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107db134abfcce82b6b1f50f87b528f5ef5eb70044c07917d53b236e7da2b6c9->enter($__internal_107db134abfcce82b6b1f50f87b528f5ef5eb70044c07917d53b236e7da2b6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_1cfc5965024a5dc25f837d8051421194681ac35fae355cb23946487d63732aa8->leave($__internal_1cfc5965024a5dc25f837d8051421194681ac35fae355cb23946487d63732aa8_prof);

        
        $__internal_107db134abfcce82b6b1f50f87b528f5ef5eb70044c07917d53b236e7da2b6c9->leave($__internal_107db134abfcce82b6b1f50f87b528f5ef5eb70044c07917d53b236e7da2b6c9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
