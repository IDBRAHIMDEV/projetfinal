<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_e70c4fdb4e43a367c446f79af89c1719eb534ccfb32f22b001082143d4912228 extends Twig_Template
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
        $__internal_82b8f2e1bf456cee6d4693fd2c1ba3aaf9aec43971b0efd29ec8f1ae97a4889d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82b8f2e1bf456cee6d4693fd2c1ba3aaf9aec43971b0efd29ec8f1ae97a4889d->enter($__internal_82b8f2e1bf456cee6d4693fd2c1ba3aaf9aec43971b0efd29ec8f1ae97a4889d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_c63a65632cf3d653ea7626b8f09d1d7d4107085d4719499f42106919b7161297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c63a65632cf3d653ea7626b8f09d1d7d4107085d4719499f42106919b7161297->enter($__internal_c63a65632cf3d653ea7626b8f09d1d7d4107085d4719499f42106919b7161297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_82b8f2e1bf456cee6d4693fd2c1ba3aaf9aec43971b0efd29ec8f1ae97a4889d->leave($__internal_82b8f2e1bf456cee6d4693fd2c1ba3aaf9aec43971b0efd29ec8f1ae97a4889d_prof);

        
        $__internal_c63a65632cf3d653ea7626b8f09d1d7d4107085d4719499f42106919b7161297->leave($__internal_c63a65632cf3d653ea7626b8f09d1d7d4107085d4719499f42106919b7161297_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
