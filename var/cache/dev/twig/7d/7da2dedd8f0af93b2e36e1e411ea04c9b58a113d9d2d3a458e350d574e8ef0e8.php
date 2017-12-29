<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_98a203b57d526e4645865e4745d2322a06ec7bcfa4efed469062c624baa22954 extends Twig_Template
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
        $__internal_c0974fc3ae88f3fa05aa1017fb5825cdb00c3553fbee0e259f891536d35e2ae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0974fc3ae88f3fa05aa1017fb5825cdb00c3553fbee0e259f891536d35e2ae8->enter($__internal_c0974fc3ae88f3fa05aa1017fb5825cdb00c3553fbee0e259f891536d35e2ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_bbdcf0d7a8369c4a7303ec10becf24fed81c1888ebb9861f20771e88a4ac22db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbdcf0d7a8369c4a7303ec10becf24fed81c1888ebb9861f20771e88a4ac22db->enter($__internal_bbdcf0d7a8369c4a7303ec10becf24fed81c1888ebb9861f20771e88a4ac22db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_c0974fc3ae88f3fa05aa1017fb5825cdb00c3553fbee0e259f891536d35e2ae8->leave($__internal_c0974fc3ae88f3fa05aa1017fb5825cdb00c3553fbee0e259f891536d35e2ae8_prof);

        
        $__internal_bbdcf0d7a8369c4a7303ec10becf24fed81c1888ebb9861f20771e88a4ac22db->leave($__internal_bbdcf0d7a8369c4a7303ec10becf24fed81c1888ebb9861f20771e88a4ac22db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
