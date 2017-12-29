<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_12f49941387a0f62a237760c00cecc0c5f86bb72c0c6d232240cf3ed18516b7d extends Twig_Template
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
        $__internal_500a722e15cc6fae1191f5bc31dda4339c8b26a57634f33f933ea159d6123296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_500a722e15cc6fae1191f5bc31dda4339c8b26a57634f33f933ea159d6123296->enter($__internal_500a722e15cc6fae1191f5bc31dda4339c8b26a57634f33f933ea159d6123296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_1a97edfc367934cab571ea651dae0a63b099a9679cb2a42ea322b50b37510a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a97edfc367934cab571ea651dae0a63b099a9679cb2a42ea322b50b37510a05->enter($__internal_1a97edfc367934cab571ea651dae0a63b099a9679cb2a42ea322b50b37510a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_500a722e15cc6fae1191f5bc31dda4339c8b26a57634f33f933ea159d6123296->leave($__internal_500a722e15cc6fae1191f5bc31dda4339c8b26a57634f33f933ea159d6123296_prof);

        
        $__internal_1a97edfc367934cab571ea651dae0a63b099a9679cb2a42ea322b50b37510a05->leave($__internal_1a97edfc367934cab571ea651dae0a63b099a9679cb2a42ea322b50b37510a05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
