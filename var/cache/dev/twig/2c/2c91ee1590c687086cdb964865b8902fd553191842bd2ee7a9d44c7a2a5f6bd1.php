<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_1b0ba3d9d56060abdd5ca565e0f301fc671384e924837109b822af0304bc6a90 extends Twig_Template
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
        $__internal_aef0abccdc2fb67d52104bd876d4441e881f265dde2a363b407edc216bfe1bab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aef0abccdc2fb67d52104bd876d4441e881f265dde2a363b407edc216bfe1bab->enter($__internal_aef0abccdc2fb67d52104bd876d4441e881f265dde2a363b407edc216bfe1bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_5a03f915725b4acd3473257b8b317620dfe54b712c1a4c658a948b5deb9c9576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a03f915725b4acd3473257b8b317620dfe54b712c1a4c658a948b5deb9c9576->enter($__internal_5a03f915725b4acd3473257b8b317620dfe54b712c1a4c658a948b5deb9c9576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_aef0abccdc2fb67d52104bd876d4441e881f265dde2a363b407edc216bfe1bab->leave($__internal_aef0abccdc2fb67d52104bd876d4441e881f265dde2a363b407edc216bfe1bab_prof);

        
        $__internal_5a03f915725b4acd3473257b8b317620dfe54b712c1a4c658a948b5deb9c9576->leave($__internal_5a03f915725b4acd3473257b8b317620dfe54b712c1a4c658a948b5deb9c9576_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
", "TwigBundle:Exception:error.txt.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
