<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_e7daa86cdf4d14a4cc9141baf3b353f4177c93c1869c2bf97809ac9d2599ef0c extends Twig_Template
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
        $__internal_550af8a20c5ad02f7abffd4e471cd07d543df71145d0d02842c23a1e6b494331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_550af8a20c5ad02f7abffd4e471cd07d543df71145d0d02842c23a1e6b494331->enter($__internal_550af8a20c5ad02f7abffd4e471cd07d543df71145d0d02842c23a1e6b494331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_ea5b42b2416f305fab3ca4cce1b3549699b5d14f7417610a35bace396ad4b004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea5b42b2416f305fab3ca4cce1b3549699b5d14f7417610a35bace396ad4b004->enter($__internal_ea5b42b2416f305fab3ca4cce1b3549699b5d14f7417610a35bace396ad4b004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_550af8a20c5ad02f7abffd4e471cd07d543df71145d0d02842c23a1e6b494331->leave($__internal_550af8a20c5ad02f7abffd4e471cd07d543df71145d0d02842c23a1e6b494331_prof);

        
        $__internal_ea5b42b2416f305fab3ca4cce1b3549699b5d14f7417610a35bace396ad4b004->leave($__internal_ea5b42b2416f305fab3ca4cce1b3549699b5d14f7417610a35bace396ad4b004_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
