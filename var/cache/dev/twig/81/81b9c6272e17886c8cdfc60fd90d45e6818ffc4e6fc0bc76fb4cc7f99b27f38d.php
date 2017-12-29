<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_dafbf89da7ff52355389de0ff5dfd6d2d89de99a7aac102fa8822344b9fbb90d extends Twig_Template
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
        $__internal_144bc79187f8b7ef07c594ccf95bd983efd40a0ecf0c49dd17358f39c07fc98f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_144bc79187f8b7ef07c594ccf95bd983efd40a0ecf0c49dd17358f39c07fc98f->enter($__internal_144bc79187f8b7ef07c594ccf95bd983efd40a0ecf0c49dd17358f39c07fc98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_41ef524c4252acd9d31bed44b44914eaefbea11208aa50045ffdb86aeb1c5854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ef524c4252acd9d31bed44b44914eaefbea11208aa50045ffdb86aeb1c5854->enter($__internal_41ef524c4252acd9d31bed44b44914eaefbea11208aa50045ffdb86aeb1c5854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_144bc79187f8b7ef07c594ccf95bd983efd40a0ecf0c49dd17358f39c07fc98f->leave($__internal_144bc79187f8b7ef07c594ccf95bd983efd40a0ecf0c49dd17358f39c07fc98f_prof);

        
        $__internal_41ef524c4252acd9d31bed44b44914eaefbea11208aa50045ffdb86aeb1c5854->leave($__internal_41ef524c4252acd9d31bed44b44914eaefbea11208aa50045ffdb86aeb1c5854_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
