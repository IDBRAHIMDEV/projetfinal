<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_67b2f4674c4b51be922c1115bb7151e8aadaf0456a1ef175ea5189ce2b06de67 extends Twig_Template
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
        $__internal_ce8d32dc59a7c949cabb0bce20aa8842a8b77747aea9469a5842d7273600c767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce8d32dc59a7c949cabb0bce20aa8842a8b77747aea9469a5842d7273600c767->enter($__internal_ce8d32dc59a7c949cabb0bce20aa8842a8b77747aea9469a5842d7273600c767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_48fab2634795b91147453537068dd6abd2ea4df3fdedd8bdacbef02f58eedad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48fab2634795b91147453537068dd6abd2ea4df3fdedd8bdacbef02f58eedad1->enter($__internal_48fab2634795b91147453537068dd6abd2ea4df3fdedd8bdacbef02f58eedad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ce8d32dc59a7c949cabb0bce20aa8842a8b77747aea9469a5842d7273600c767->leave($__internal_ce8d32dc59a7c949cabb0bce20aa8842a8b77747aea9469a5842d7273600c767_prof);

        
        $__internal_48fab2634795b91147453537068dd6abd2ea4df3fdedd8bdacbef02f58eedad1->leave($__internal_48fab2634795b91147453537068dd6abd2ea4df3fdedd8bdacbef02f58eedad1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
