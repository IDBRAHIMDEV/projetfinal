<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_bc1e6d42eb48b80491ff4364a830ef16ee27d86389a9906cea2ae011604b8f46 extends Twig_Template
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
        $__internal_a3d79cc7d97c31f8d7a400ebc4496c8301060e50aa317aa1d412100719e62423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3d79cc7d97c31f8d7a400ebc4496c8301060e50aa317aa1d412100719e62423->enter($__internal_a3d79cc7d97c31f8d7a400ebc4496c8301060e50aa317aa1d412100719e62423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_9dad1d16558f0445604c38f6d9f4cb8a5728f71fbf69c14c74adf0637427e558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dad1d16558f0445604c38f6d9f4cb8a5728f71fbf69c14c74adf0637427e558->enter($__internal_9dad1d16558f0445604c38f6d9f4cb8a5728f71fbf69c14c74adf0637427e558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_a3d79cc7d97c31f8d7a400ebc4496c8301060e50aa317aa1d412100719e62423->leave($__internal_a3d79cc7d97c31f8d7a400ebc4496c8301060e50aa317aa1d412100719e62423_prof);

        
        $__internal_9dad1d16558f0445604c38f6d9f4cb8a5728f71fbf69c14c74adf0637427e558->leave($__internal_9dad1d16558f0445604c38f6d9f4cb8a5728f71fbf69c14c74adf0637427e558_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
