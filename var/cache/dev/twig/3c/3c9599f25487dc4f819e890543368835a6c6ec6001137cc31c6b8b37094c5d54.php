<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d38545e4f05b999df6eee4ca5768dba4549abf021b30f8099a786065ba06780b extends Twig_Template
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
        $__internal_b2b2a0a7a95e624c810bb94b7e8bad2323c6bd64b20bd6c4ca6223956c54acf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2b2a0a7a95e624c810bb94b7e8bad2323c6bd64b20bd6c4ca6223956c54acf3->enter($__internal_b2b2a0a7a95e624c810bb94b7e8bad2323c6bd64b20bd6c4ca6223956c54acf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_603b8cfe0ace7e7e182a38f61564a4ade9222220e937f8a784da38e469ec624f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_603b8cfe0ace7e7e182a38f61564a4ade9222220e937f8a784da38e469ec624f->enter($__internal_603b8cfe0ace7e7e182a38f61564a4ade9222220e937f8a784da38e469ec624f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b2b2a0a7a95e624c810bb94b7e8bad2323c6bd64b20bd6c4ca6223956c54acf3->leave($__internal_b2b2a0a7a95e624c810bb94b7e8bad2323c6bd64b20bd6c4ca6223956c54acf3_prof);

        
        $__internal_603b8cfe0ace7e7e182a38f61564a4ade9222220e937f8a784da38e469ec624f->leave($__internal_603b8cfe0ace7e7e182a38f61564a4ade9222220e937f8a784da38e469ec624f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
