<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_afe7fce202636c56c681cc00712a112da9e17139cfbc47b262140a50c1d5f322 extends Twig_Template
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
        $__internal_96f6463fce2ef5ded803b85b4a35b4ee1ed73df0bf25536b6019e7eaeb563bb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96f6463fce2ef5ded803b85b4a35b4ee1ed73df0bf25536b6019e7eaeb563bb8->enter($__internal_96f6463fce2ef5ded803b85b4a35b4ee1ed73df0bf25536b6019e7eaeb563bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_72e244a34a828eaef3388b63497811249f26cf917e237c6222a0707a4dd7599b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e244a34a828eaef3388b63497811249f26cf917e237c6222a0707a4dd7599b->enter($__internal_72e244a34a828eaef3388b63497811249f26cf917e237c6222a0707a4dd7599b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_96f6463fce2ef5ded803b85b4a35b4ee1ed73df0bf25536b6019e7eaeb563bb8->leave($__internal_96f6463fce2ef5ded803b85b4a35b4ee1ed73df0bf25536b6019e7eaeb563bb8_prof);

        
        $__internal_72e244a34a828eaef3388b63497811249f26cf917e237c6222a0707a4dd7599b->leave($__internal_72e244a34a828eaef3388b63497811249f26cf917e237c6222a0707a4dd7599b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
