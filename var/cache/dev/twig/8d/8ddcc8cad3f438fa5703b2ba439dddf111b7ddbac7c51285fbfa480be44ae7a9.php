<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_e12d9564485797344f854ad150141ccab3af3124378db388e66d9aed4040352c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c829263fde62cac0960b31c26467291e2fdabbf0836a923e71f2da0da4082db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c829263fde62cac0960b31c26467291e2fdabbf0836a923e71f2da0da4082db->enter($__internal_2c829263fde62cac0960b31c26467291e2fdabbf0836a923e71f2da0da4082db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_89a7e252cbdec9f282a2dea1af5bb7137eb6c02513c3aa3fafc0a93ff22448e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a7e252cbdec9f282a2dea1af5bb7137eb6c02513c3aa3fafc0a93ff22448e8->enter($__internal_89a7e252cbdec9f282a2dea1af5bb7137eb6c02513c3aa3fafc0a93ff22448e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2c829263fde62cac0960b31c26467291e2fdabbf0836a923e71f2da0da4082db->leave($__internal_2c829263fde62cac0960b31c26467291e2fdabbf0836a923e71f2da0da4082db_prof);

        
        $__internal_89a7e252cbdec9f282a2dea1af5bb7137eb6c02513c3aa3fafc0a93ff22448e8->leave($__internal_89a7e252cbdec9f282a2dea1af5bb7137eb6c02513c3aa3fafc0a93ff22448e8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f8bc150b8a1b1caa9e298854b31ec1eeeaf95532dfcecf3405c135d8ae9bf116 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8bc150b8a1b1caa9e298854b31ec1eeeaf95532dfcecf3405c135d8ae9bf116->enter($__internal_f8bc150b8a1b1caa9e298854b31ec1eeeaf95532dfcecf3405c135d8ae9bf116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1c458b497ab03ca266bf3f429f3d1578cbbb7d978fca01c79bcfe715603e7e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c458b497ab03ca266bf3f429f3d1578cbbb7d978fca01c79bcfe715603e7e80->enter($__internal_1c458b497ab03ca266bf3f429f3d1578cbbb7d978fca01c79bcfe715603e7e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1c458b497ab03ca266bf3f429f3d1578cbbb7d978fca01c79bcfe715603e7e80->leave($__internal_1c458b497ab03ca266bf3f429f3d1578cbbb7d978fca01c79bcfe715603e7e80_prof);

        
        $__internal_f8bc150b8a1b1caa9e298854b31ec1eeeaf95532dfcecf3405c135d8ae9bf116->leave($__internal_f8bc150b8a1b1caa9e298854b31ec1eeeaf95532dfcecf3405c135d8ae9bf116_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
