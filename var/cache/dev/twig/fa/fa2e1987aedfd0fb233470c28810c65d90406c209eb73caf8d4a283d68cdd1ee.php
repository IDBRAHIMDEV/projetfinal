<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7405a862ec7094d0e134b541c411a816f97b20f419f6c712d20600fb0ae208fd extends Twig_Template
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
        $__internal_7f6f5e860277b72fe0c77a40ebae122ee4972aadc5778643e59e69d0437f78c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f6f5e860277b72fe0c77a40ebae122ee4972aadc5778643e59e69d0437f78c6->enter($__internal_7f6f5e860277b72fe0c77a40ebae122ee4972aadc5778643e59e69d0437f78c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_a5723188a11a655b73ea0497d1bdc883bbffebae619f37bda4b7b413d617cffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5723188a11a655b73ea0497d1bdc883bbffebae619f37bda4b7b413d617cffe->enter($__internal_a5723188a11a655b73ea0497d1bdc883bbffebae619f37bda4b7b413d617cffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_7f6f5e860277b72fe0c77a40ebae122ee4972aadc5778643e59e69d0437f78c6->leave($__internal_7f6f5e860277b72fe0c77a40ebae122ee4972aadc5778643e59e69d0437f78c6_prof);

        
        $__internal_a5723188a11a655b73ea0497d1bdc883bbffebae619f37bda4b7b413d617cffe->leave($__internal_a5723188a11a655b73ea0497d1bdc883bbffebae619f37bda4b7b413d617cffe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
