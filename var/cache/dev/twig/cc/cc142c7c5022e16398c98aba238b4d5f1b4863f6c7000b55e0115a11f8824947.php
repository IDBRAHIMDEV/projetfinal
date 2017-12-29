<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_e5031d41acbcb032689de3331c1652f9086f09fe9ad23427aad69fea6c052a62 extends Twig_Template
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
        $__internal_ed788ff0860b0b00b6daa426e2e672338ca266cdeccfaf10a8cc36b9decfc354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed788ff0860b0b00b6daa426e2e672338ca266cdeccfaf10a8cc36b9decfc354->enter($__internal_ed788ff0860b0b00b6daa426e2e672338ca266cdeccfaf10a8cc36b9decfc354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_99c4b6fd6ff063badd33fd56428e87e3175d40efbdb10213be1b512271f5d391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c4b6fd6ff063badd33fd56428e87e3175d40efbdb10213be1b512271f5d391->enter($__internal_99c4b6fd6ff063badd33fd56428e87e3175d40efbdb10213be1b512271f5d391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_ed788ff0860b0b00b6daa426e2e672338ca266cdeccfaf10a8cc36b9decfc354->leave($__internal_ed788ff0860b0b00b6daa426e2e672338ca266cdeccfaf10a8cc36b9decfc354_prof);

        
        $__internal_99c4b6fd6ff063badd33fd56428e87e3175d40efbdb10213be1b512271f5d391->leave($__internal_99c4b6fd6ff063badd33fd56428e87e3175d40efbdb10213be1b512271f5d391_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1e501d423bfcb153644f3e26ec74734a9818dde5256dc4a471c3d7ba9f4fcd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1e501d423bfcb153644f3e26ec74734a9818dde5256dc4a471c3d7ba9f4fcd5->enter($__internal_c1e501d423bfcb153644f3e26ec74734a9818dde5256dc4a471c3d7ba9f4fcd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_607484acdb7fd0dfa641c1cee8362db99af872c500cf96a620fd4b5b75770534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_607484acdb7fd0dfa641c1cee8362db99af872c500cf96a620fd4b5b75770534->enter($__internal_607484acdb7fd0dfa641c1cee8362db99af872c500cf96a620fd4b5b75770534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_607484acdb7fd0dfa641c1cee8362db99af872c500cf96a620fd4b5b75770534->leave($__internal_607484acdb7fd0dfa641c1cee8362db99af872c500cf96a620fd4b5b75770534_prof);

        
        $__internal_c1e501d423bfcb153644f3e26ec74734a9818dde5256dc4a471c3d7ba9f4fcd5->leave($__internal_c1e501d423bfcb153644f3e26ec74734a9818dde5256dc4a471c3d7ba9f4fcd5_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa8966aa6836c9b8ae3fd985e66a763c1077141640083c72ea645c439550b63f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa8966aa6836c9b8ae3fd985e66a763c1077141640083c72ea645c439550b63f->enter($__internal_aa8966aa6836c9b8ae3fd985e66a763c1077141640083c72ea645c439550b63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_af3030c87d46f34727260bc61fad11af99dce6281558a81814fe4be9d8936ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3030c87d46f34727260bc61fad11af99dce6281558a81814fe4be9d8936ead->enter($__internal_af3030c87d46f34727260bc61fad11af99dce6281558a81814fe4be9d8936ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_af3030c87d46f34727260bc61fad11af99dce6281558a81814fe4be9d8936ead->leave($__internal_af3030c87d46f34727260bc61fad11af99dce6281558a81814fe4be9d8936ead_prof);

        
        $__internal_aa8966aa6836c9b8ae3fd985e66a763c1077141640083c72ea645c439550b63f->leave($__internal_aa8966aa6836c9b8ae3fd985e66a763c1077141640083c72ea645c439550b63f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1fcc30a507f93911b02e6cab25d352f1f56375e2ae973c146cb6ad75bb9f8d2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fcc30a507f93911b02e6cab25d352f1f56375e2ae973c146cb6ad75bb9f8d2a->enter($__internal_1fcc30a507f93911b02e6cab25d352f1f56375e2ae973c146cb6ad75bb9f8d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_13d565b73540dcbdf7158ef0776aefb32c4166a2ccd042307750a906a6b550cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d565b73540dcbdf7158ef0776aefb32c4166a2ccd042307750a906a6b550cb->enter($__internal_13d565b73540dcbdf7158ef0776aefb32c4166a2ccd042307750a906a6b550cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_13d565b73540dcbdf7158ef0776aefb32c4166a2ccd042307750a906a6b550cb->leave($__internal_13d565b73540dcbdf7158ef0776aefb32c4166a2ccd042307750a906a6b550cb_prof);

        
        $__internal_1fcc30a507f93911b02e6cab25d352f1f56375e2ae973c146cb6ad75bb9f8d2a->leave($__internal_1fcc30a507f93911b02e6cab25d352f1f56375e2ae973c146cb6ad75bb9f8d2a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
