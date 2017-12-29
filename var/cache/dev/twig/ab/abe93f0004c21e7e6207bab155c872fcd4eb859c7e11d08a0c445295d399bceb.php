<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_5cf172f6e8381a97474e12577d6f10b3645b2ca273c43c154efe7f037e04956d extends Twig_Template
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
        $__internal_6e7350b4b5db940d79134fb2e91e459394717f08320bec89be48ef8a5f3eb933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e7350b4b5db940d79134fb2e91e459394717f08320bec89be48ef8a5f3eb933->enter($__internal_6e7350b4b5db940d79134fb2e91e459394717f08320bec89be48ef8a5f3eb933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_b5a472ef990ef47f7d7d8016dc8946f7ddc9376f958eb750fcb8f8f157106e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a472ef990ef47f7d7d8016dc8946f7ddc9376f958eb750fcb8f8f157106e60->enter($__internal_b5a472ef990ef47f7d7d8016dc8946f7ddc9376f958eb750fcb8f8f157106e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_6e7350b4b5db940d79134fb2e91e459394717f08320bec89be48ef8a5f3eb933->leave($__internal_6e7350b4b5db940d79134fb2e91e459394717f08320bec89be48ef8a5f3eb933_prof);

        
        $__internal_b5a472ef990ef47f7d7d8016dc8946f7ddc9376f958eb750fcb8f8f157106e60->leave($__internal_b5a472ef990ef47f7d7d8016dc8946f7ddc9376f958eb750fcb8f8f157106e60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
