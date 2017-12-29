<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_0731cd3a4fe81ff3f9d8fdd5cfeb995194af6871e39a533f2af45a6887c28588 extends Twig_Template
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
        $__internal_382d292605b7c2af76d03098a748711e44bd479ef479cf77d879abfded6fbd2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382d292605b7c2af76d03098a748711e44bd479ef479cf77d879abfded6fbd2d->enter($__internal_382d292605b7c2af76d03098a748711e44bd479ef479cf77d879abfded6fbd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_f29df7894f5901550e2051024c5c8dcc568a0467de4373fdc16e0d0af9b0e1dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29df7894f5901550e2051024c5c8dcc568a0467de4373fdc16e0d0af9b0e1dc->enter($__internal_f29df7894f5901550e2051024c5c8dcc568a0467de4373fdc16e0d0af9b0e1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_382d292605b7c2af76d03098a748711e44bd479ef479cf77d879abfded6fbd2d->leave($__internal_382d292605b7c2af76d03098a748711e44bd479ef479cf77d879abfded6fbd2d_prof);

        
        $__internal_f29df7894f5901550e2051024c5c8dcc568a0467de4373fdc16e0d0af9b0e1dc->leave($__internal_f29df7894f5901550e2051024c5c8dcc568a0467de4373fdc16e0d0af9b0e1dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
