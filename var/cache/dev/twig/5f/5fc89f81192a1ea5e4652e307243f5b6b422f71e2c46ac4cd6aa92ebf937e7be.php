<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_642d86ecdfe83da1f7ce65ed3a76babce0b2d3c06b5462b3d20d0396a8fd8b52 extends Twig_Template
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
        $__internal_7bc7edc5eb984730383d7a0d43ed14edd8e233541a9e9a8fe876c8215055c389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bc7edc5eb984730383d7a0d43ed14edd8e233541a9e9a8fe876c8215055c389->enter($__internal_7bc7edc5eb984730383d7a0d43ed14edd8e233541a9e9a8fe876c8215055c389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_aa6e80be20d3ee9144dd58f7d51d854e95889bb43c01966ebfe34594d3974339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa6e80be20d3ee9144dd58f7d51d854e95889bb43c01966ebfe34594d3974339->enter($__internal_aa6e80be20d3ee9144dd58f7d51d854e95889bb43c01966ebfe34594d3974339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7bc7edc5eb984730383d7a0d43ed14edd8e233541a9e9a8fe876c8215055c389->leave($__internal_7bc7edc5eb984730383d7a0d43ed14edd8e233541a9e9a8fe876c8215055c389_prof);

        
        $__internal_aa6e80be20d3ee9144dd58f7d51d854e95889bb43c01966ebfe34594d3974339->leave($__internal_aa6e80be20d3ee9144dd58f7d51d854e95889bb43c01966ebfe34594d3974339_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
