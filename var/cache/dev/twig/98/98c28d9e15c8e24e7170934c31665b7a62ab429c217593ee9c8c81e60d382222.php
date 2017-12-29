<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_833a1ff71bd3152ab198d4f793ab03a7cbcc76d37c7a2d707cc0607dc32c186d extends Twig_Template
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
        $__internal_e798213d402746955c95c1ca611b7d23c8858f5cc8d529e7ca4f93062890eeaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e798213d402746955c95c1ca611b7d23c8858f5cc8d529e7ca4f93062890eeaa->enter($__internal_e798213d402746955c95c1ca611b7d23c8858f5cc8d529e7ca4f93062890eeaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_f0f7a69315f3ab8fd3bcf9b2163363e02358a2b6484777667493550ef30ae130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f7a69315f3ab8fd3bcf9b2163363e02358a2b6484777667493550ef30ae130->enter($__internal_f0f7a69315f3ab8fd3bcf9b2163363e02358a2b6484777667493550ef30ae130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e798213d402746955c95c1ca611b7d23c8858f5cc8d529e7ca4f93062890eeaa->leave($__internal_e798213d402746955c95c1ca611b7d23c8858f5cc8d529e7ca4f93062890eeaa_prof);

        
        $__internal_f0f7a69315f3ab8fd3bcf9b2163363e02358a2b6484777667493550ef30ae130->leave($__internal_f0f7a69315f3ab8fd3bcf9b2163363e02358a2b6484777667493550ef30ae130_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
