<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_ea95c20eb1e4f40259b1fa3e7a5ebb62eaf8f9c4012b3755eb251e109d8ac54a extends Twig_Template
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
        $__internal_c2f9c9b7cd31832b97f47c8e5ea24f0f9c62191d3764f5c6e5a23a42a0c20912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2f9c9b7cd31832b97f47c8e5ea24f0f9c62191d3764f5c6e5a23a42a0c20912->enter($__internal_c2f9c9b7cd31832b97f47c8e5ea24f0f9c62191d3764f5c6e5a23a42a0c20912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_37bf2fd28f0852d8c974a715a4f0973e7fe36d3c069b0bbf065e572b79c97b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37bf2fd28f0852d8c974a715a4f0973e7fe36d3c069b0bbf065e572b79c97b23->enter($__internal_37bf2fd28f0852d8c974a715a4f0973e7fe36d3c069b0bbf065e572b79c97b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_c2f9c9b7cd31832b97f47c8e5ea24f0f9c62191d3764f5c6e5a23a42a0c20912->leave($__internal_c2f9c9b7cd31832b97f47c8e5ea24f0f9c62191d3764f5c6e5a23a42a0c20912_prof);

        
        $__internal_37bf2fd28f0852d8c974a715a4f0973e7fe36d3c069b0bbf065e572b79c97b23->leave($__internal_37bf2fd28f0852d8c974a715a4f0973e7fe36d3c069b0bbf065e572b79c97b23_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
