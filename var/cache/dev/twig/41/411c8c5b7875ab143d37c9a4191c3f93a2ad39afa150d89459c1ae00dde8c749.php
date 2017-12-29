<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_ca7395ae83a2dca697f76689362e05bc32e9206c36bb9801dd4d21f710147660 extends Twig_Template
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
        $__internal_74d62567ad2059824f5c2bdc32991be4bae9df0995cf0f1c76903fbd9513693a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d62567ad2059824f5c2bdc32991be4bae9df0995cf0f1c76903fbd9513693a->enter($__internal_74d62567ad2059824f5c2bdc32991be4bae9df0995cf0f1c76903fbd9513693a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_99eac9236e9b5aa6b5771355ec6de8c892dfc2c9f4b8621473b7cfaa980057aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99eac9236e9b5aa6b5771355ec6de8c892dfc2c9f4b8621473b7cfaa980057aa->enter($__internal_99eac9236e9b5aa6b5771355ec6de8c892dfc2c9f4b8621473b7cfaa980057aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_74d62567ad2059824f5c2bdc32991be4bae9df0995cf0f1c76903fbd9513693a->leave($__internal_74d62567ad2059824f5c2bdc32991be4bae9df0995cf0f1c76903fbd9513693a_prof);

        
        $__internal_99eac9236e9b5aa6b5771355ec6de8c892dfc2c9f4b8621473b7cfaa980057aa->leave($__internal_99eac9236e9b5aa6b5771355ec6de8c892dfc2c9f4b8621473b7cfaa980057aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
