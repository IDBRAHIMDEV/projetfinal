<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_28c00e22c2cd195fb04ca6c8ecf8b32aed4eaa023a2502631874bed6a03b41f6 extends Twig_Template
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
        $__internal_06a945d831022fca9cac5fbd4e4202e03944b53ff6d4345ee93ef74a3829d3b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06a945d831022fca9cac5fbd4e4202e03944b53ff6d4345ee93ef74a3829d3b7->enter($__internal_06a945d831022fca9cac5fbd4e4202e03944b53ff6d4345ee93ef74a3829d3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_4392680c5f535278eaee7def01ea263f0cd6bc200b21d37e82e2fc39e5db9d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4392680c5f535278eaee7def01ea263f0cd6bc200b21d37e82e2fc39e5db9d12->enter($__internal_4392680c5f535278eaee7def01ea263f0cd6bc200b21d37e82e2fc39e5db9d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_06a945d831022fca9cac5fbd4e4202e03944b53ff6d4345ee93ef74a3829d3b7->leave($__internal_06a945d831022fca9cac5fbd4e4202e03944b53ff6d4345ee93ef74a3829d3b7_prof);

        
        $__internal_4392680c5f535278eaee7def01ea263f0cd6bc200b21d37e82e2fc39e5db9d12->leave($__internal_4392680c5f535278eaee7def01ea263f0cd6bc200b21d37e82e2fc39e5db9d12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
