<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_259b9d0e1e412d6e2aad7ac9ccd45311a2f332b067fdcccafcdddb94a3a21cf5 extends Twig_Template
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
        $__internal_2111a125794151abba5835738d45c61fa90f3765be4ced4a12a590c5ad560636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2111a125794151abba5835738d45c61fa90f3765be4ced4a12a590c5ad560636->enter($__internal_2111a125794151abba5835738d45c61fa90f3765be4ced4a12a590c5ad560636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_2f87845c1419e0a6d1316908d3772e6a0345935b3ddf200ea55a6251c3cfff7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f87845c1419e0a6d1316908d3772e6a0345935b3ddf200ea55a6251c3cfff7b->enter($__internal_2f87845c1419e0a6d1316908d3772e6a0345935b3ddf200ea55a6251c3cfff7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_2111a125794151abba5835738d45c61fa90f3765be4ced4a12a590c5ad560636->leave($__internal_2111a125794151abba5835738d45c61fa90f3765be4ced4a12a590c5ad560636_prof);

        
        $__internal_2f87845c1419e0a6d1316908d3772e6a0345935b3ddf200ea55a6251c3cfff7b->leave($__internal_2f87845c1419e0a6d1316908d3772e6a0345935b3ddf200ea55a6251c3cfff7b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
