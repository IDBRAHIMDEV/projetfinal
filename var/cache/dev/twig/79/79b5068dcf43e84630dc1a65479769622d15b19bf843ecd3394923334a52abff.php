<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_0d717bae2a8be5533d6f04c41bc1f4e7a4f9e6a02695878687a756027d572dc1 extends Twig_Template
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
        $__internal_179aa19c1ba10c321274c903362e91aa77d6ef005559f0bb395a07f6ccf722ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_179aa19c1ba10c321274c903362e91aa77d6ef005559f0bb395a07f6ccf722ae->enter($__internal_179aa19c1ba10c321274c903362e91aa77d6ef005559f0bb395a07f6ccf722ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_8fd143d4cadc50e4196f55030d95f4a1cdbb78ba5411a848efab222beeeba5a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fd143d4cadc50e4196f55030d95f4a1cdbb78ba5411a848efab222beeeba5a6->enter($__internal_8fd143d4cadc50e4196f55030d95f4a1cdbb78ba5411a848efab222beeeba5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_179aa19c1ba10c321274c903362e91aa77d6ef005559f0bb395a07f6ccf722ae->leave($__internal_179aa19c1ba10c321274c903362e91aa77d6ef005559f0bb395a07f6ccf722ae_prof);

        
        $__internal_8fd143d4cadc50e4196f55030d95f4a1cdbb78ba5411a848efab222beeeba5a6->leave($__internal_8fd143d4cadc50e4196f55030d95f4a1cdbb78ba5411a848efab222beeeba5a6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
