<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ef2d3e8065f5fd42e42ff40ff1275708310f2e4e5b106600f2dbe16607d08d0f extends Twig_Template
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
        $__internal_267b142f01277e62848a432b624db822dec04a41421ce7a319205f14734bd432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_267b142f01277e62848a432b624db822dec04a41421ce7a319205f14734bd432->enter($__internal_267b142f01277e62848a432b624db822dec04a41421ce7a319205f14734bd432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_29eee64c801413b0cafc05c1daf47405e315793d83bac26bbcff6a0bf13fa605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29eee64c801413b0cafc05c1daf47405e315793d83bac26bbcff6a0bf13fa605->enter($__internal_29eee64c801413b0cafc05c1daf47405e315793d83bac26bbcff6a0bf13fa605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_267b142f01277e62848a432b624db822dec04a41421ce7a319205f14734bd432->leave($__internal_267b142f01277e62848a432b624db822dec04a41421ce7a319205f14734bd432_prof);

        
        $__internal_29eee64c801413b0cafc05c1daf47405e315793d83bac26bbcff6a0bf13fa605->leave($__internal_29eee64c801413b0cafc05c1daf47405e315793d83bac26bbcff6a0bf13fa605_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
