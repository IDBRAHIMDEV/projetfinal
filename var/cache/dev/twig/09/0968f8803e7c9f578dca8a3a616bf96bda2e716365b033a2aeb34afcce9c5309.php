<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_e80694b92d7c394825264852286496b60f0e88fc9d73691a9baa73742e4fe2a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_764faff2a5d7ce9e12876cb43a425908004764136a556ff1315009150ee1805f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_764faff2a5d7ce9e12876cb43a425908004764136a556ff1315009150ee1805f->enter($__internal_764faff2a5d7ce9e12876cb43a425908004764136a556ff1315009150ee1805f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_3df0ec4b662e2f3348113515969219158127d07c02d40a700619f30ff486598e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df0ec4b662e2f3348113515969219158127d07c02d40a700619f30ff486598e->enter($__internal_3df0ec4b662e2f3348113515969219158127d07c02d40a700619f30ff486598e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_764faff2a5d7ce9e12876cb43a425908004764136a556ff1315009150ee1805f->leave($__internal_764faff2a5d7ce9e12876cb43a425908004764136a556ff1315009150ee1805f_prof);

        
        $__internal_3df0ec4b662e2f3348113515969219158127d07c02d40a700619f30ff486598e->leave($__internal_3df0ec4b662e2f3348113515969219158127d07c02d40a700619f30ff486598e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_63313b3bd1347e8f85d145e0c2700a42e74d98e2e07ce2fc88356275faf293b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63313b3bd1347e8f85d145e0c2700a42e74d98e2e07ce2fc88356275faf293b3->enter($__internal_63313b3bd1347e8f85d145e0c2700a42e74d98e2e07ce2fc88356275faf293b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bcbfa7460a4325e283b697954e78980383d5dc15fe4d5766a4609333bc81b5fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcbfa7460a4325e283b697954e78980383d5dc15fe4d5766a4609333bc81b5fc->enter($__internal_bcbfa7460a4325e283b697954e78980383d5dc15fe4d5766a4609333bc81b5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bcbfa7460a4325e283b697954e78980383d5dc15fe4d5766a4609333bc81b5fc->leave($__internal_bcbfa7460a4325e283b697954e78980383d5dc15fe4d5766a4609333bc81b5fc_prof);

        
        $__internal_63313b3bd1347e8f85d145e0c2700a42e74d98e2e07ce2fc88356275faf293b3->leave($__internal_63313b3bd1347e8f85d145e0c2700a42e74d98e2e07ce2fc88356275faf293b3_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_4dcd5913bfe4bf80f04f209e22c33dc212ccc759da8d138e0c3230d0924e86b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dcd5913bfe4bf80f04f209e22c33dc212ccc759da8d138e0c3230d0924e86b6->enter($__internal_4dcd5913bfe4bf80f04f209e22c33dc212ccc759da8d138e0c3230d0924e86b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_491723e09b6041c6225a396837e0b5e42a8667ad38f58f675007c7b38ef5b318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_491723e09b6041c6225a396837e0b5e42a8667ad38f58f675007c7b38ef5b318->enter($__internal_491723e09b6041c6225a396837e0b5e42a8667ad38f58f675007c7b38ef5b318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_491723e09b6041c6225a396837e0b5e42a8667ad38f58f675007c7b38ef5b318->leave($__internal_491723e09b6041c6225a396837e0b5e42a8667ad38f58f675007c7b38ef5b318_prof);

        
        $__internal_4dcd5913bfe4bf80f04f209e22c33dc212ccc759da8d138e0c3230d0924e86b6->leave($__internal_4dcd5913bfe4bf80f04f209e22c33dc212ccc759da8d138e0c3230d0924e86b6_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e869bf93846eaa094569e90b3c57fd27e2d79b6d5a613b46b3ae8b6b8d99c90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e869bf93846eaa094569e90b3c57fd27e2d79b6d5a613b46b3ae8b6b8d99c90->enter($__internal_8e869bf93846eaa094569e90b3c57fd27e2d79b6d5a613b46b3ae8b6b8d99c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d78fb6d1bd9a346e0933a31f31b56a19c39c748d5125c9724c15e642b86b09b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d78fb6d1bd9a346e0933a31f31b56a19c39c748d5125c9724c15e642b86b09b->enter($__internal_1d78fb6d1bd9a346e0933a31f31b56a19c39c748d5125c9724c15e642b86b09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1d78fb6d1bd9a346e0933a31f31b56a19c39c748d5125c9724c15e642b86b09b->leave($__internal_1d78fb6d1bd9a346e0933a31f31b56a19c39c748d5125c9724c15e642b86b09b_prof);

        
        $__internal_8e869bf93846eaa094569e90b3c57fd27e2d79b6d5a613b46b3ae8b6b8d99c90->leave($__internal_8e869bf93846eaa094569e90b3c57fd27e2d79b6d5a613b46b3ae8b6b8d99c90_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
