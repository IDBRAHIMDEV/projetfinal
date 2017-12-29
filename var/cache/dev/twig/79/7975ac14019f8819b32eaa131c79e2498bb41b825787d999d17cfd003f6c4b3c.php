<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_9e4aa9ec999a6fbff3e6a5ecb74fe56054f47cc0be0531e82e295a7c4aac6475 extends Twig_Template
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
        $__internal_d44d07463540d8de1c540f9f4e79329d802ec2af7875f88e4ea89390cad0c550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d44d07463540d8de1c540f9f4e79329d802ec2af7875f88e4ea89390cad0c550->enter($__internal_d44d07463540d8de1c540f9f4e79329d802ec2af7875f88e4ea89390cad0c550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_09bab3b7aa21d4434f8b7477262be036fd286db21ff7ddde2f1e440451ea6846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09bab3b7aa21d4434f8b7477262be036fd286db21ff7ddde2f1e440451ea6846->enter($__internal_09bab3b7aa21d4434f8b7477262be036fd286db21ff7ddde2f1e440451ea6846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_d44d07463540d8de1c540f9f4e79329d802ec2af7875f88e4ea89390cad0c550->leave($__internal_d44d07463540d8de1c540f9f4e79329d802ec2af7875f88e4ea89390cad0c550_prof);

        
        $__internal_09bab3b7aa21d4434f8b7477262be036fd286db21ff7ddde2f1e440451ea6846->leave($__internal_09bab3b7aa21d4434f8b7477262be036fd286db21ff7ddde2f1e440451ea6846_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
