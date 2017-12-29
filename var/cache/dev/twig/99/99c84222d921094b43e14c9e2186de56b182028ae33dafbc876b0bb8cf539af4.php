<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_0e9f703e46577dc44d718287de02239da68f6a78cbf413deda9744c5ec6d68ac extends Twig_Template
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
        $__internal_a0c7fa6ca9c405e6bccc58ca9fbb681b4b821d3d1086871ec86f7b75ea3dca74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0c7fa6ca9c405e6bccc58ca9fbb681b4b821d3d1086871ec86f7b75ea3dca74->enter($__internal_a0c7fa6ca9c405e6bccc58ca9fbb681b4b821d3d1086871ec86f7b75ea3dca74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_4a464105eac497dcce1e75ca64dfaa731e3f29cdef06f814b3fde2c312c84c10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a464105eac497dcce1e75ca64dfaa731e3f29cdef06f814b3fde2c312c84c10->enter($__internal_4a464105eac497dcce1e75ca64dfaa731e3f29cdef06f814b3fde2c312c84c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_a0c7fa6ca9c405e6bccc58ca9fbb681b4b821d3d1086871ec86f7b75ea3dca74->leave($__internal_a0c7fa6ca9c405e6bccc58ca9fbb681b4b821d3d1086871ec86f7b75ea3dca74_prof);

        
        $__internal_4a464105eac497dcce1e75ca64dfaa731e3f29cdef06f814b3fde2c312c84c10->leave($__internal_4a464105eac497dcce1e75ca64dfaa731e3f29cdef06f814b3fde2c312c84c10_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
