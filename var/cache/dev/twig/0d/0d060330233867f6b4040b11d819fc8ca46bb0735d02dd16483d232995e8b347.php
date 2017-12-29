<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_0cfe7a08f5b533de04fe8b1c3eb4c0745a3bb902f9ef12af1867a2965d5a0b0c extends Twig_Template
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
        $__internal_848e2d6487c9e72b96611435b87330eb2414206fdbad0330a906e9fd57d89946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_848e2d6487c9e72b96611435b87330eb2414206fdbad0330a906e9fd57d89946->enter($__internal_848e2d6487c9e72b96611435b87330eb2414206fdbad0330a906e9fd57d89946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_d084cf370f8bb6a66c72fff61282699e4b26c8c6eab69703de478298997b96e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d084cf370f8bb6a66c72fff61282699e4b26c8c6eab69703de478298997b96e8->enter($__internal_d084cf370f8bb6a66c72fff61282699e4b26c8c6eab69703de478298997b96e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_848e2d6487c9e72b96611435b87330eb2414206fdbad0330a906e9fd57d89946->leave($__internal_848e2d6487c9e72b96611435b87330eb2414206fdbad0330a906e9fd57d89946_prof);

        
        $__internal_d084cf370f8bb6a66c72fff61282699e4b26c8c6eab69703de478298997b96e8->leave($__internal_d084cf370f8bb6a66c72fff61282699e4b26c8c6eab69703de478298997b96e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
