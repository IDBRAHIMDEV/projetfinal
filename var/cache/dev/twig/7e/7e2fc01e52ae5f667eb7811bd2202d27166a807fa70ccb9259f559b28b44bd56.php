<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_3b080ab8b4f480f549e1d3e566249331679c144c45502946ef3a5cacaaae54d8 extends Twig_Template
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
        $__internal_0cd1e135443c5d6d0f52546f2329877cf83f2580d11bfb32507e93de13840540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cd1e135443c5d6d0f52546f2329877cf83f2580d11bfb32507e93de13840540->enter($__internal_0cd1e135443c5d6d0f52546f2329877cf83f2580d11bfb32507e93de13840540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_94d25b12afb35302ceed4effc32480af6e19c357171cfe5cf083c182e25f98e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d25b12afb35302ceed4effc32480af6e19c357171cfe5cf083c182e25f98e8->enter($__internal_94d25b12afb35302ceed4effc32480af6e19c357171cfe5cf083c182e25f98e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_0cd1e135443c5d6d0f52546f2329877cf83f2580d11bfb32507e93de13840540->leave($__internal_0cd1e135443c5d6d0f52546f2329877cf83f2580d11bfb32507e93de13840540_prof);

        
        $__internal_94d25b12afb35302ceed4effc32480af6e19c357171cfe5cf083c182e25f98e8->leave($__internal_94d25b12afb35302ceed4effc32480af6e19c357171cfe5cf083c182e25f98e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
