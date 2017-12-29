<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a041c5aac0e2565216b8fcd8d93e066a73e842f8a00467438f4d29fe3bccfaff extends Twig_Template
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
        $__internal_b7e7828b00d18a16075ddc55c41629fc295e51d63b6b2de6517d48b7069a61fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e7828b00d18a16075ddc55c41629fc295e51d63b6b2de6517d48b7069a61fa->enter($__internal_b7e7828b00d18a16075ddc55c41629fc295e51d63b6b2de6517d48b7069a61fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_83100be0758c8107e1db275cbc682f35264607ce015971cf849edfec567bfc70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83100be0758c8107e1db275cbc682f35264607ce015971cf849edfec567bfc70->enter($__internal_83100be0758c8107e1db275cbc682f35264607ce015971cf849edfec567bfc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b7e7828b00d18a16075ddc55c41629fc295e51d63b6b2de6517d48b7069a61fa->leave($__internal_b7e7828b00d18a16075ddc55c41629fc295e51d63b6b2de6517d48b7069a61fa_prof);

        
        $__internal_83100be0758c8107e1db275cbc682f35264607ce015971cf849edfec567bfc70->leave($__internal_83100be0758c8107e1db275cbc682f35264607ce015971cf849edfec567bfc70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
