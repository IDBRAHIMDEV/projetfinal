<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_d9c0bbd83035474b1efd35a1815320658544969cf7c28ea68a1c82031c9b8380 extends Twig_Template
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
        $__internal_6ef49b97b480a9366df5288f750849bed9deb33329c560b90b2e6eac99dcab27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ef49b97b480a9366df5288f750849bed9deb33329c560b90b2e6eac99dcab27->enter($__internal_6ef49b97b480a9366df5288f750849bed9deb33329c560b90b2e6eac99dcab27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_6c1a79831d4cbb3ca01a8135609fabc115a5e7bc3dfe4a176dce771f1332aeb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c1a79831d4cbb3ca01a8135609fabc115a5e7bc3dfe4a176dce771f1332aeb2->enter($__internal_6c1a79831d4cbb3ca01a8135609fabc115a5e7bc3dfe4a176dce771f1332aeb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6ef49b97b480a9366df5288f750849bed9deb33329c560b90b2e6eac99dcab27->leave($__internal_6ef49b97b480a9366df5288f750849bed9deb33329c560b90b2e6eac99dcab27_prof);

        
        $__internal_6c1a79831d4cbb3ca01a8135609fabc115a5e7bc3dfe4a176dce771f1332aeb2->leave($__internal_6c1a79831d4cbb3ca01a8135609fabc115a5e7bc3dfe4a176dce771f1332aeb2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
