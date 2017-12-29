<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_8838926d77420446d9aa7c9cfa8201ee410c420fdf183f18bf3aa355f04ef637 extends Twig_Template
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
        $__internal_311e339c531953b716e05f42bb0b9e9cfbf0896e12abcabb91283bd966be0b24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_311e339c531953b716e05f42bb0b9e9cfbf0896e12abcabb91283bd966be0b24->enter($__internal_311e339c531953b716e05f42bb0b9e9cfbf0896e12abcabb91283bd966be0b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_5038fea4b45ad0180d559d2c3bdb428adcfb87bb45940b0079b655e2e6440852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5038fea4b45ad0180d559d2c3bdb428adcfb87bb45940b0079b655e2e6440852->enter($__internal_5038fea4b45ad0180d559d2c3bdb428adcfb87bb45940b0079b655e2e6440852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_311e339c531953b716e05f42bb0b9e9cfbf0896e12abcabb91283bd966be0b24->leave($__internal_311e339c531953b716e05f42bb0b9e9cfbf0896e12abcabb91283bd966be0b24_prof);

        
        $__internal_5038fea4b45ad0180d559d2c3bdb428adcfb87bb45940b0079b655e2e6440852->leave($__internal_5038fea4b45ad0180d559d2c3bdb428adcfb87bb45940b0079b655e2e6440852_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
