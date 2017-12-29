<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_91cd47c657aff0a8d3774451f116dc2615eacf6589e759224216ae8678704040 extends Twig_Template
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
        $__internal_015b0a3510b751cd16fe668a135e64c81321e767201f32d6a54f6a61e48b0ad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_015b0a3510b751cd16fe668a135e64c81321e767201f32d6a54f6a61e48b0ad6->enter($__internal_015b0a3510b751cd16fe668a135e64c81321e767201f32d6a54f6a61e48b0ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_f5414dd7ee425790007cd0b652afd33317ad34763fc907d0dc48fe5be726a7d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5414dd7ee425790007cd0b652afd33317ad34763fc907d0dc48fe5be726a7d9->enter($__internal_f5414dd7ee425790007cd0b652afd33317ad34763fc907d0dc48fe5be726a7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_015b0a3510b751cd16fe668a135e64c81321e767201f32d6a54f6a61e48b0ad6->leave($__internal_015b0a3510b751cd16fe668a135e64c81321e767201f32d6a54f6a61e48b0ad6_prof);

        
        $__internal_f5414dd7ee425790007cd0b652afd33317ad34763fc907d0dc48fe5be726a7d9->leave($__internal_f5414dd7ee425790007cd0b652afd33317ad34763fc907d0dc48fe5be726a7d9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
