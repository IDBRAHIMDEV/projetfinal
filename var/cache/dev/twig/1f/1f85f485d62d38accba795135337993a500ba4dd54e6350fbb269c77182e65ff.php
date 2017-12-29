<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_8cbcff524c492a84a5c4840960af0eb16b8ee4786d37581c3ff1d7e7110bf0fd extends Twig_Template
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
        $__internal_c76a7d66b5c13e8981dee69991ed3fd6886b791ab12e609a3b9c1b474a294041 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c76a7d66b5c13e8981dee69991ed3fd6886b791ab12e609a3b9c1b474a294041->enter($__internal_c76a7d66b5c13e8981dee69991ed3fd6886b791ab12e609a3b9c1b474a294041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_16a3cef5f4e64d45d3b9cc651bb3620c3ef4ecdf9d28c72bc410be22b88dbfbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a3cef5f4e64d45d3b9cc651bb3620c3ef4ecdf9d28c72bc410be22b88dbfbc->enter($__internal_16a3cef5f4e64d45d3b9cc651bb3620c3ef4ecdf9d28c72bc410be22b88dbfbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c76a7d66b5c13e8981dee69991ed3fd6886b791ab12e609a3b9c1b474a294041->leave($__internal_c76a7d66b5c13e8981dee69991ed3fd6886b791ab12e609a3b9c1b474a294041_prof);

        
        $__internal_16a3cef5f4e64d45d3b9cc651bb3620c3ef4ecdf9d28c72bc410be22b88dbfbc->leave($__internal_16a3cef5f4e64d45d3b9cc651bb3620c3ef4ecdf9d28c72bc410be22b88dbfbc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
