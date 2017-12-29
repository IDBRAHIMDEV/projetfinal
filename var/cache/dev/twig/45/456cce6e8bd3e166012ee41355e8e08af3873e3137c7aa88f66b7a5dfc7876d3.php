<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2a8d770db71b9fabd185afc15d82df0553ecd84a7921ea2861a43bb7e7bfdca5 extends Twig_Template
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
        $__internal_6207672ad2540c186121c50dbd3ae4e37e821ee8b46f39ec658bf67621111f54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6207672ad2540c186121c50dbd3ae4e37e821ee8b46f39ec658bf67621111f54->enter($__internal_6207672ad2540c186121c50dbd3ae4e37e821ee8b46f39ec658bf67621111f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_f2d8ad36a51702719e3f8d587480b1c2657e9ce5393aaf2ef7b93e19e9bccb68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d8ad36a51702719e3f8d587480b1c2657e9ce5393aaf2ef7b93e19e9bccb68->enter($__internal_f2d8ad36a51702719e3f8d587480b1c2657e9ce5393aaf2ef7b93e19e9bccb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_6207672ad2540c186121c50dbd3ae4e37e821ee8b46f39ec658bf67621111f54->leave($__internal_6207672ad2540c186121c50dbd3ae4e37e821ee8b46f39ec658bf67621111f54_prof);

        
        $__internal_f2d8ad36a51702719e3f8d587480b1c2657e9ce5393aaf2ef7b93e19e9bccb68->leave($__internal_f2d8ad36a51702719e3f8d587480b1c2657e9ce5393aaf2ef7b93e19e9bccb68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
