<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0b532902ac2b08695676f4cd9672811ca0fb3d8b79e207e45b5ee11014f9cee0 extends Twig_Template
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
        $__internal_a7fe1f90b949080400ca1c7631b8a098e9769bf5200ab2218e86815a6e352de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7fe1f90b949080400ca1c7631b8a098e9769bf5200ab2218e86815a6e352de2->enter($__internal_a7fe1f90b949080400ca1c7631b8a098e9769bf5200ab2218e86815a6e352de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_b69d31dc1e3fc864c54cb90f7cf8fcb565b0ecee0f652f3455a473d1264eb459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69d31dc1e3fc864c54cb90f7cf8fcb565b0ecee0f652f3455a473d1264eb459->enter($__internal_b69d31dc1e3fc864c54cb90f7cf8fcb565b0ecee0f652f3455a473d1264eb459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_a7fe1f90b949080400ca1c7631b8a098e9769bf5200ab2218e86815a6e352de2->leave($__internal_a7fe1f90b949080400ca1c7631b8a098e9769bf5200ab2218e86815a6e352de2_prof);

        
        $__internal_b69d31dc1e3fc864c54cb90f7cf8fcb565b0ecee0f652f3455a473d1264eb459->leave($__internal_b69d31dc1e3fc864c54cb90f7cf8fcb565b0ecee0f652f3455a473d1264eb459_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
