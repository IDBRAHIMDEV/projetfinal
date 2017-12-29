<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_435fd2a977de8e09bce976fbb9ea315e564624b507494d46a79512648707b058 extends Twig_Template
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
        $__internal_850a9b7da0bc065a24c32b62156fbfac0a779d85e5bbba8901f385945b187930 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_850a9b7da0bc065a24c32b62156fbfac0a779d85e5bbba8901f385945b187930->enter($__internal_850a9b7da0bc065a24c32b62156fbfac0a779d85e5bbba8901f385945b187930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_e7852c154cc6a9ecef429c0ab33b91a87cea2688dffd3f4ce24670b4e35d9632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7852c154cc6a9ecef429c0ab33b91a87cea2688dffd3f4ce24670b4e35d9632->enter($__internal_e7852c154cc6a9ecef429c0ab33b91a87cea2688dffd3f4ce24670b4e35d9632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_850a9b7da0bc065a24c32b62156fbfac0a779d85e5bbba8901f385945b187930->leave($__internal_850a9b7da0bc065a24c32b62156fbfac0a779d85e5bbba8901f385945b187930_prof);

        
        $__internal_e7852c154cc6a9ecef429c0ab33b91a87cea2688dffd3f4ce24670b4e35d9632->leave($__internal_e7852c154cc6a9ecef429c0ab33b91a87cea2688dffd3f4ce24670b4e35d9632_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
