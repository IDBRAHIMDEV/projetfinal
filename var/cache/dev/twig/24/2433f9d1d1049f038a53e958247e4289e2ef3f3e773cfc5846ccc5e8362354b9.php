<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_4fdec5c45520afe8a4868a52c3ae3ad647afd294ddec3f500336bceedb1f8a69 extends Twig_Template
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
        $__internal_a70a7aed3c618767c7a8c1e7e59a27a3f468f8f2a7c92867b1e0a962cddc2659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a70a7aed3c618767c7a8c1e7e59a27a3f468f8f2a7c92867b1e0a962cddc2659->enter($__internal_a70a7aed3c618767c7a8c1e7e59a27a3f468f8f2a7c92867b1e0a962cddc2659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_1059267a47c2e9d99521e393d849a8f7939554e5ccc352357b7aab0d5437459e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1059267a47c2e9d99521e393d849a8f7939554e5ccc352357b7aab0d5437459e->enter($__internal_1059267a47c2e9d99521e393d849a8f7939554e5ccc352357b7aab0d5437459e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_a70a7aed3c618767c7a8c1e7e59a27a3f468f8f2a7c92867b1e0a962cddc2659->leave($__internal_a70a7aed3c618767c7a8c1e7e59a27a3f468f8f2a7c92867b1e0a962cddc2659_prof);

        
        $__internal_1059267a47c2e9d99521e393d849a8f7939554e5ccc352357b7aab0d5437459e->leave($__internal_1059267a47c2e9d99521e393d849a8f7939554e5ccc352357b7aab0d5437459e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
