<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_fd6102672d6705b69e1cff7f2d5487ade96471f238601e784b6144e3d2ba6568 extends Twig_Template
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
        $__internal_31596844c34df161ad4106acd491fd5c062f7c3fb3c372b4cabba09f419f4d46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31596844c34df161ad4106acd491fd5c062f7c3fb3c372b4cabba09f419f4d46->enter($__internal_31596844c34df161ad4106acd491fd5c062f7c3fb3c372b4cabba09f419f4d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_9d549cde6d9f8f1408e6eaf75a6ca6c097b482219c117fd79f44f68d4195d958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d549cde6d9f8f1408e6eaf75a6ca6c097b482219c117fd79f44f68d4195d958->enter($__internal_9d549cde6d9f8f1408e6eaf75a6ca6c097b482219c117fd79f44f68d4195d958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_31596844c34df161ad4106acd491fd5c062f7c3fb3c372b4cabba09f419f4d46->leave($__internal_31596844c34df161ad4106acd491fd5c062f7c3fb3c372b4cabba09f419f4d46_prof);

        
        $__internal_9d549cde6d9f8f1408e6eaf75a6ca6c097b482219c117fd79f44f68d4195d958->leave($__internal_9d549cde6d9f8f1408e6eaf75a6ca6c097b482219c117fd79f44f68d4195d958_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
