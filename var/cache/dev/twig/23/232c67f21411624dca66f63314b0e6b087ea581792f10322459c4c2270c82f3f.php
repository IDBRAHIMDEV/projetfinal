<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_c29182d5a69037a0d56eb12a3905ab36cdd72fd14b2c141aef53a747658a34a9 extends Twig_Template
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
        $__internal_5e04a441a3999bae671b9d988ce2053da36912a40455fb63150fdaccca560eef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e04a441a3999bae671b9d988ce2053da36912a40455fb63150fdaccca560eef->enter($__internal_5e04a441a3999bae671b9d988ce2053da36912a40455fb63150fdaccca560eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_2610ef211a5ff1eccfff605ccb9e249211ec89ef852a741d569c86218c70bb69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2610ef211a5ff1eccfff605ccb9e249211ec89ef852a741d569c86218c70bb69->enter($__internal_2610ef211a5ff1eccfff605ccb9e249211ec89ef852a741d569c86218c70bb69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5e04a441a3999bae671b9d988ce2053da36912a40455fb63150fdaccca560eef->leave($__internal_5e04a441a3999bae671b9d988ce2053da36912a40455fb63150fdaccca560eef_prof);

        
        $__internal_2610ef211a5ff1eccfff605ccb9e249211ec89ef852a741d569c86218c70bb69->leave($__internal_2610ef211a5ff1eccfff605ccb9e249211ec89ef852a741d569c86218c70bb69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
