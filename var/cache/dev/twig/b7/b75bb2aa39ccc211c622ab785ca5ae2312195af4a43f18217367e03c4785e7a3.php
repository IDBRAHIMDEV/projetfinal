<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_9687a019ecfaa04003bfac67b4ca0edd3c986fec58dff7c3de7b045df2ad2970 extends Twig_Template
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
        $__internal_d4bcbc1225e874bc1901f530b1d977cc5d78104ce22d763d01a7d7483cfdf3fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4bcbc1225e874bc1901f530b1d977cc5d78104ce22d763d01a7d7483cfdf3fc->enter($__internal_d4bcbc1225e874bc1901f530b1d977cc5d78104ce22d763d01a7d7483cfdf3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_f4e18d7de296b5c3addaa8b2a930dce22a56aa2dcf0f797a774a019e4e663049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e18d7de296b5c3addaa8b2a930dce22a56aa2dcf0f797a774a019e4e663049->enter($__internal_f4e18d7de296b5c3addaa8b2a930dce22a56aa2dcf0f797a774a019e4e663049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_d4bcbc1225e874bc1901f530b1d977cc5d78104ce22d763d01a7d7483cfdf3fc->leave($__internal_d4bcbc1225e874bc1901f530b1d977cc5d78104ce22d763d01a7d7483cfdf3fc_prof);

        
        $__internal_f4e18d7de296b5c3addaa8b2a930dce22a56aa2dcf0f797a774a019e4e663049->leave($__internal_f4e18d7de296b5c3addaa8b2a930dce22a56aa2dcf0f797a774a019e4e663049_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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
", "@Twig/Exception/error.xml.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
