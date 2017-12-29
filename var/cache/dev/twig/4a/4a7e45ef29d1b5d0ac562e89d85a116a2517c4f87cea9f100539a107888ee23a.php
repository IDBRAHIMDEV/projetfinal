<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_d7d2d05437ef1096171656efbbe297dc973a4689e69fa30b5dd55f378e99c0d6 extends Twig_Template
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
        $__internal_0b5914dfe16125132f26ff7750060a590aef18e618dc5fedeba079f8bc4eedde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b5914dfe16125132f26ff7750060a590aef18e618dc5fedeba079f8bc4eedde->enter($__internal_0b5914dfe16125132f26ff7750060a590aef18e618dc5fedeba079f8bc4eedde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_405be6739454b5fddd06c0ab90858ba15e0355657bfec9dd72cf81105c9d8854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_405be6739454b5fddd06c0ab90858ba15e0355657bfec9dd72cf81105c9d8854->enter($__internal_405be6739454b5fddd06c0ab90858ba15e0355657bfec9dd72cf81105c9d8854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0b5914dfe16125132f26ff7750060a590aef18e618dc5fedeba079f8bc4eedde->leave($__internal_0b5914dfe16125132f26ff7750060a590aef18e618dc5fedeba079f8bc4eedde_prof);

        
        $__internal_405be6739454b5fddd06c0ab90858ba15e0355657bfec9dd72cf81105c9d8854->leave($__internal_405be6739454b5fddd06c0ab90858ba15e0355657bfec9dd72cf81105c9d8854_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
