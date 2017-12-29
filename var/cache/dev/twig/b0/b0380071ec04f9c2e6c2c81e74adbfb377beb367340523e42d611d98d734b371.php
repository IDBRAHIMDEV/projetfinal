<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a0b20bb902b1c8783e8c4bad35b74c57da0fbe093e94e3c953197bf40283d15d extends Twig_Template
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
        $__internal_8e57793c547fa7372b76534de89e51b47c096ff4850dc802a9705e4070728cfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e57793c547fa7372b76534de89e51b47c096ff4850dc802a9705e4070728cfc->enter($__internal_8e57793c547fa7372b76534de89e51b47c096ff4850dc802a9705e4070728cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_f2d3e72ff829d1ccf560c1dd9b2d00d2928b3d69dc8b04c9ff8ffb55a8e60fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d3e72ff829d1ccf560c1dd9b2d00d2928b3d69dc8b04c9ff8ffb55a8e60fa2->enter($__internal_f2d3e72ff829d1ccf560c1dd9b2d00d2928b3d69dc8b04c9ff8ffb55a8e60fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_8e57793c547fa7372b76534de89e51b47c096ff4850dc802a9705e4070728cfc->leave($__internal_8e57793c547fa7372b76534de89e51b47c096ff4850dc802a9705e4070728cfc_prof);

        
        $__internal_f2d3e72ff829d1ccf560c1dd9b2d00d2928b3d69dc8b04c9ff8ffb55a8e60fa2->leave($__internal_f2d3e72ff829d1ccf560c1dd9b2d00d2928b3d69dc8b04c9ff8ffb55a8e60fa2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
