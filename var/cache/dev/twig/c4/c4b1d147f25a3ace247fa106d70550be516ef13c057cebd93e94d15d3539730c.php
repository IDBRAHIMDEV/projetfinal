<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_0b3ee0412c5206bd6da30c8842c9e0d8460b7eb83f4e524b78a96dee925a5d69 extends Twig_Template
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
        $__internal_14831397e403e790071990e83dc0e9ad1b670a09bd8de5304c0a10d627ace78d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14831397e403e790071990e83dc0e9ad1b670a09bd8de5304c0a10d627ace78d->enter($__internal_14831397e403e790071990e83dc0e9ad1b670a09bd8de5304c0a10d627ace78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_15e525ff9629b221cf15fb93e83442b9a4d61653b8ddab94236d0ebc06025670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e525ff9629b221cf15fb93e83442b9a4d61653b8ddab94236d0ebc06025670->enter($__internal_15e525ff9629b221cf15fb93e83442b9a4d61653b8ddab94236d0ebc06025670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_14831397e403e790071990e83dc0e9ad1b670a09bd8de5304c0a10d627ace78d->leave($__internal_14831397e403e790071990e83dc0e9ad1b670a09bd8de5304c0a10d627ace78d_prof);

        
        $__internal_15e525ff9629b221cf15fb93e83442b9a4d61653b8ddab94236d0ebc06025670->leave($__internal_15e525ff9629b221cf15fb93e83442b9a4d61653b8ddab94236d0ebc06025670_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
