<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_e62462caea6dcaccbaa1878deaee179dc9dace409967113c963c4685ba3824b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2c8f8d89995b596da22c2df726aceda905c36e8770dd1edc233194dbae5ff23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2c8f8d89995b596da22c2df726aceda905c36e8770dd1edc233194dbae5ff23->enter($__internal_c2c8f8d89995b596da22c2df726aceda905c36e8770dd1edc233194dbae5ff23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_e47bc57bd1459c169ce88a75e2e8b8dca5a5afc60ee9ed3781ac0462a1c0ee01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e47bc57bd1459c169ce88a75e2e8b8dca5a5afc60ee9ed3781ac0462a1c0ee01->enter($__internal_e47bc57bd1459c169ce88a75e2e8b8dca5a5afc60ee9ed3781ac0462a1c0ee01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c2c8f8d89995b596da22c2df726aceda905c36e8770dd1edc233194dbae5ff23->leave($__internal_c2c8f8d89995b596da22c2df726aceda905c36e8770dd1edc233194dbae5ff23_prof);

        
        $__internal_e47bc57bd1459c169ce88a75e2e8b8dca5a5afc60ee9ed3781ac0462a1c0ee01->leave($__internal_e47bc57bd1459c169ce88a75e2e8b8dca5a5afc60ee9ed3781ac0462a1c0ee01_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_78612029a8d2548a284c8e467c71e4fd8855548fa67b40432a573eb996676a54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78612029a8d2548a284c8e467c71e4fd8855548fa67b40432a573eb996676a54->enter($__internal_78612029a8d2548a284c8e467c71e4fd8855548fa67b40432a573eb996676a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6726d98cbb6676d743e42b59eb9ba69fcfde1f2626fdbb25d3057def592a19a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6726d98cbb6676d743e42b59eb9ba69fcfde1f2626fdbb25d3057def592a19a9->enter($__internal_6726d98cbb6676d743e42b59eb9ba69fcfde1f2626fdbb25d3057def592a19a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6726d98cbb6676d743e42b59eb9ba69fcfde1f2626fdbb25d3057def592a19a9->leave($__internal_6726d98cbb6676d743e42b59eb9ba69fcfde1f2626fdbb25d3057def592a19a9_prof);

        
        $__internal_78612029a8d2548a284c8e467c71e4fd8855548fa67b40432a573eb996676a54->leave($__internal_78612029a8d2548a284c8e467c71e4fd8855548fa67b40432a573eb996676a54_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
