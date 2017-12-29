<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_965854f728c5eccd2ac067f6cd5903f26f3da6568fbeabdb40250064fdf77459 extends Twig_Template
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
        $__internal_0c5359f7b42846ccc13781932408cfb6110546e9767e3f1a640218c95f93bdd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c5359f7b42846ccc13781932408cfb6110546e9767e3f1a640218c95f93bdd9->enter($__internal_0c5359f7b42846ccc13781932408cfb6110546e9767e3f1a640218c95f93bdd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_bbf5a7fa5bb73d7c23f8ff7b6d74c8a69e157b952c014793170dd7102b3f20dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbf5a7fa5bb73d7c23f8ff7b6d74c8a69e157b952c014793170dd7102b3f20dc->enter($__internal_bbf5a7fa5bb73d7c23f8ff7b6d74c8a69e157b952c014793170dd7102b3f20dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0c5359f7b42846ccc13781932408cfb6110546e9767e3f1a640218c95f93bdd9->leave($__internal_0c5359f7b42846ccc13781932408cfb6110546e9767e3f1a640218c95f93bdd9_prof);

        
        $__internal_bbf5a7fa5bb73d7c23f8ff7b6d74c8a69e157b952c014793170dd7102b3f20dc->leave($__internal_bbf5a7fa5bb73d7c23f8ff7b6d74c8a69e157b952c014793170dd7102b3f20dc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
