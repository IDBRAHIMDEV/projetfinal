<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_767cd94b67157670f3fa91586ac8e0ca766b93ed6fe5dfce06649a11431aad5b extends Twig_Template
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
        $__internal_35c47fa6ae43993f899f435c26ed3564c39c36e2cf1f5db16f070d48cf258e5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35c47fa6ae43993f899f435c26ed3564c39c36e2cf1f5db16f070d48cf258e5a->enter($__internal_35c47fa6ae43993f899f435c26ed3564c39c36e2cf1f5db16f070d48cf258e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_54c3469d94f79617ea5f59b02e979bbef92b7f4cb84077dfd50f788ffc3ea6ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c3469d94f79617ea5f59b02e979bbef92b7f4cb84077dfd50f788ffc3ea6ef->enter($__internal_54c3469d94f79617ea5f59b02e979bbef92b7f4cb84077dfd50f788ffc3ea6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_35c47fa6ae43993f899f435c26ed3564c39c36e2cf1f5db16f070d48cf258e5a->leave($__internal_35c47fa6ae43993f899f435c26ed3564c39c36e2cf1f5db16f070d48cf258e5a_prof);

        
        $__internal_54c3469d94f79617ea5f59b02e979bbef92b7f4cb84077dfd50f788ffc3ea6ef->leave($__internal_54c3469d94f79617ea5f59b02e979bbef92b7f4cb84077dfd50f788ffc3ea6ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
