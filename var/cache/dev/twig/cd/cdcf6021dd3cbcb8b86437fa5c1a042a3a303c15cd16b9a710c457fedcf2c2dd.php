<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_73d7296faf4941012e95e1a6a65acee0f66af9a18a4a9fc2accf532ab5db1ca0 extends Twig_Template
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
        $__internal_dcf6bc5d9239f7d1fa896ed1d601918de0b4f410c74baca366bc917e1bbdfdde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcf6bc5d9239f7d1fa896ed1d601918de0b4f410c74baca366bc917e1bbdfdde->enter($__internal_dcf6bc5d9239f7d1fa896ed1d601918de0b4f410c74baca366bc917e1bbdfdde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_d57cd7004262e95792923a20cc9c6c2bfdca4f5892755338c8350a33229b316d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57cd7004262e95792923a20cc9c6c2bfdca4f5892755338c8350a33229b316d->enter($__internal_d57cd7004262e95792923a20cc9c6c2bfdca4f5892755338c8350a33229b316d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_dcf6bc5d9239f7d1fa896ed1d601918de0b4f410c74baca366bc917e1bbdfdde->leave($__internal_dcf6bc5d9239f7d1fa896ed1d601918de0b4f410c74baca366bc917e1bbdfdde_prof);

        
        $__internal_d57cd7004262e95792923a20cc9c6c2bfdca4f5892755338c8350a33229b316d->leave($__internal_d57cd7004262e95792923a20cc9c6c2bfdca4f5892755338c8350a33229b316d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
