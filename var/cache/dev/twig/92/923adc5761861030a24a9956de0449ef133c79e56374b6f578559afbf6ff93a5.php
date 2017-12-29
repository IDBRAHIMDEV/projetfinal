<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_0e33bbdaf42410ba75772c1d91e82bf3be1f5a56b8bc04f7735b12db5b5669fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6da3410e0efae7b0f5a1df2bce0c9e83b45906b7726ab80b8407abfa760ca51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6da3410e0efae7b0f5a1df2bce0c9e83b45906b7726ab80b8407abfa760ca51->enter($__internal_b6da3410e0efae7b0f5a1df2bce0c9e83b45906b7726ab80b8407abfa760ca51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_aff6322f10330e3becb43f7caf345023e22deb373e6ca6546ce08b765ec9363c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff6322f10330e3becb43f7caf345023e22deb373e6ca6546ce08b765ec9363c->enter($__internal_aff6322f10330e3becb43f7caf345023e22deb373e6ca6546ce08b765ec9363c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6da3410e0efae7b0f5a1df2bce0c9e83b45906b7726ab80b8407abfa760ca51->leave($__internal_b6da3410e0efae7b0f5a1df2bce0c9e83b45906b7726ab80b8407abfa760ca51_prof);

        
        $__internal_aff6322f10330e3becb43f7caf345023e22deb373e6ca6546ce08b765ec9363c->leave($__internal_aff6322f10330e3becb43f7caf345023e22deb373e6ca6546ce08b765ec9363c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_55b5fde04c8a623f4762502ca0f2f9ceaf3134805ea65cb6c955c9f510f17fba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55b5fde04c8a623f4762502ca0f2f9ceaf3134805ea65cb6c955c9f510f17fba->enter($__internal_55b5fde04c8a623f4762502ca0f2f9ceaf3134805ea65cb6c955c9f510f17fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e79154aae6ae37454a2d6bf9450859f1490543b18381b53c9050258116323678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e79154aae6ae37454a2d6bf9450859f1490543b18381b53c9050258116323678->enter($__internal_e79154aae6ae37454a2d6bf9450859f1490543b18381b53c9050258116323678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_e79154aae6ae37454a2d6bf9450859f1490543b18381b53c9050258116323678->leave($__internal_e79154aae6ae37454a2d6bf9450859f1490543b18381b53c9050258116323678_prof);

        
        $__internal_55b5fde04c8a623f4762502ca0f2f9ceaf3134805ea65cb6c955c9f510f17fba->leave($__internal_55b5fde04c8a623f4762502ca0f2f9ceaf3134805ea65cb6c955c9f510f17fba_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
