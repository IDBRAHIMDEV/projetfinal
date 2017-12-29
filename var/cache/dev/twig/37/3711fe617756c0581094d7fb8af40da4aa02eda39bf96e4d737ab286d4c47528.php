<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5ec49ec246b6add92df0d608fc9b33ca124438f8b66234d84e6d09c30a78f845 extends Twig_Template
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
        $__internal_9a2afa7a1c3fee5a32bf987ed6c72babd60908a1de9a86ea63af5cab83208116 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a2afa7a1c3fee5a32bf987ed6c72babd60908a1de9a86ea63af5cab83208116->enter($__internal_9a2afa7a1c3fee5a32bf987ed6c72babd60908a1de9a86ea63af5cab83208116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_181972f62975375eaef938aa542c86d98a13d4bb6e0be4d0e4f37cbfb9b53e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_181972f62975375eaef938aa542c86d98a13d4bb6e0be4d0e4f37cbfb9b53e99->enter($__internal_181972f62975375eaef938aa542c86d98a13d4bb6e0be4d0e4f37cbfb9b53e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9a2afa7a1c3fee5a32bf987ed6c72babd60908a1de9a86ea63af5cab83208116->leave($__internal_9a2afa7a1c3fee5a32bf987ed6c72babd60908a1de9a86ea63af5cab83208116_prof);

        
        $__internal_181972f62975375eaef938aa542c86d98a13d4bb6e0be4d0e4f37cbfb9b53e99->leave($__internal_181972f62975375eaef938aa542c86d98a13d4bb6e0be4d0e4f37cbfb9b53e99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
