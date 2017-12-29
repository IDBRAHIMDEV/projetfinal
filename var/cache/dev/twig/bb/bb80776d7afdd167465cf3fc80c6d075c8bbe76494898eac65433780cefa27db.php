<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_f11a36309b48b9ded13a90be282a770a372903171f3c5667e78ef900c6b042ad extends Twig_Template
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
        $__internal_d7bbb6873c3fc10009185166e34f9f71196b7de94e487e8d78437dc3ab42e8b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7bbb6873c3fc10009185166e34f9f71196b7de94e487e8d78437dc3ab42e8b7->enter($__internal_d7bbb6873c3fc10009185166e34f9f71196b7de94e487e8d78437dc3ab42e8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_5995012a29f1a778c0d1dc9a7ba830b6d5cb881f4f9b137ca68826a5cd877e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5995012a29f1a778c0d1dc9a7ba830b6d5cb881f4f9b137ca68826a5cd877e24->enter($__internal_5995012a29f1a778c0d1dc9a7ba830b6d5cb881f4f9b137ca68826a5cd877e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d7bbb6873c3fc10009185166e34f9f71196b7de94e487e8d78437dc3ab42e8b7->leave($__internal_d7bbb6873c3fc10009185166e34f9f71196b7de94e487e8d78437dc3ab42e8b7_prof);

        
        $__internal_5995012a29f1a778c0d1dc9a7ba830b6d5cb881f4f9b137ca68826a5cd877e24->leave($__internal_5995012a29f1a778c0d1dc9a7ba830b6d5cb881f4f9b137ca68826a5cd877e24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
