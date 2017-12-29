<?php

/* base.html.twig */
class __TwigTemplate_429fb43c2efe8dc411128ef4c6ddeea6e45f89b25a33b5aab4318fa925b086db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d9ef0ddc14d69b67fd321837dd38e5c0ecc3b999444101d716135e2f8b4e244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d9ef0ddc14d69b67fd321837dd38e5c0ecc3b999444101d716135e2f8b4e244->enter($__internal_4d9ef0ddc14d69b67fd321837dd38e5c0ecc3b999444101d716135e2f8b4e244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9775ac899093d18d02cb878e6ab6e1f7390502d0d3581767b901f2e7c5930e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9775ac899093d18d02cb878e6ab6e1f7390502d0d3581767b901f2e7c5930e9b->enter($__internal_9775ac899093d18d02cb878e6ab6e1f7390502d0d3581767b901f2e7c5930e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_4d9ef0ddc14d69b67fd321837dd38e5c0ecc3b999444101d716135e2f8b4e244->leave($__internal_4d9ef0ddc14d69b67fd321837dd38e5c0ecc3b999444101d716135e2f8b4e244_prof);

        
        $__internal_9775ac899093d18d02cb878e6ab6e1f7390502d0d3581767b901f2e7c5930e9b->leave($__internal_9775ac899093d18d02cb878e6ab6e1f7390502d0d3581767b901f2e7c5930e9b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_140972645ed57cf8de9ceaee2b5b43236866d9bc2fcfe234e5f5ba1f5b0448a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_140972645ed57cf8de9ceaee2b5b43236866d9bc2fcfe234e5f5ba1f5b0448a4->enter($__internal_140972645ed57cf8de9ceaee2b5b43236866d9bc2fcfe234e5f5ba1f5b0448a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9cc615870f09778cf77ffef9c08653c113a68ae9951e8b03a045eb40459cdc1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc615870f09778cf77ffef9c08653c113a68ae9951e8b03a045eb40459cdc1e->enter($__internal_9cc615870f09778cf77ffef9c08653c113a68ae9951e8b03a045eb40459cdc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9cc615870f09778cf77ffef9c08653c113a68ae9951e8b03a045eb40459cdc1e->leave($__internal_9cc615870f09778cf77ffef9c08653c113a68ae9951e8b03a045eb40459cdc1e_prof);

        
        $__internal_140972645ed57cf8de9ceaee2b5b43236866d9bc2fcfe234e5f5ba1f5b0448a4->leave($__internal_140972645ed57cf8de9ceaee2b5b43236866d9bc2fcfe234e5f5ba1f5b0448a4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_efa1cff9c7ae4c2ca7aeb9678366136948c228b3d3e17a57b801c4b4c8ca931c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efa1cff9c7ae4c2ca7aeb9678366136948c228b3d3e17a57b801c4b4c8ca931c->enter($__internal_efa1cff9c7ae4c2ca7aeb9678366136948c228b3d3e17a57b801c4b4c8ca931c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4e0c8fd0a76be477271b4b1ed50533cc4b8b7ca88fd31acada55401d653c2631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e0c8fd0a76be477271b4b1ed50533cc4b8b7ca88fd31acada55401d653c2631->enter($__internal_4e0c8fd0a76be477271b4b1ed50533cc4b8b7ca88fd31acada55401d653c2631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4e0c8fd0a76be477271b4b1ed50533cc4b8b7ca88fd31acada55401d653c2631->leave($__internal_4e0c8fd0a76be477271b4b1ed50533cc4b8b7ca88fd31acada55401d653c2631_prof);

        
        $__internal_efa1cff9c7ae4c2ca7aeb9678366136948c228b3d3e17a57b801c4b4c8ca931c->leave($__internal_efa1cff9c7ae4c2ca7aeb9678366136948c228b3d3e17a57b801c4b4c8ca931c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfdd9d692c5af1c2553785c7cb79f6ebdd0277beaa36525ca6e8e84020fa04bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfdd9d692c5af1c2553785c7cb79f6ebdd0277beaa36525ca6e8e84020fa04bf->enter($__internal_cfdd9d692c5af1c2553785c7cb79f6ebdd0277beaa36525ca6e8e84020fa04bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_01348aa03f7fac2a211b4e9e495d01a2001dd1d0f2d0899bc501fb852d1d1f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01348aa03f7fac2a211b4e9e495d01a2001dd1d0f2d0899bc501fb852d1d1f19->enter($__internal_01348aa03f7fac2a211b4e9e495d01a2001dd1d0f2d0899bc501fb852d1d1f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_01348aa03f7fac2a211b4e9e495d01a2001dd1d0f2d0899bc501fb852d1d1f19->leave($__internal_01348aa03f7fac2a211b4e9e495d01a2001dd1d0f2d0899bc501fb852d1d1f19_prof);

        
        $__internal_cfdd9d692c5af1c2553785c7cb79f6ebdd0277beaa36525ca6e8e84020fa04bf->leave($__internal_cfdd9d692c5af1c2553785c7cb79f6ebdd0277beaa36525ca6e8e84020fa04bf_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_85da91ac36109d91354094f0bc1190ac018c709a8970ee42f9dd75528083784e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85da91ac36109d91354094f0bc1190ac018c709a8970ee42f9dd75528083784e->enter($__internal_85da91ac36109d91354094f0bc1190ac018c709a8970ee42f9dd75528083784e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0b528bc8651bf6769c69296c91fe9123408c515b54d079abf8a157f5aeabd8b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b528bc8651bf6769c69296c91fe9123408c515b54d079abf8a157f5aeabd8b0->enter($__internal_0b528bc8651bf6769c69296c91fe9123408c515b54d079abf8a157f5aeabd8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0b528bc8651bf6769c69296c91fe9123408c515b54d079abf8a157f5aeabd8b0->leave($__internal_0b528bc8651bf6769c69296c91fe9123408c515b54d079abf8a157f5aeabd8b0_prof);

        
        $__internal_85da91ac36109d91354094f0bc1190ac018c709a8970ee42f9dd75528083784e->leave($__internal_85da91ac36109d91354094f0bc1190ac018c709a8970ee42f9dd75528083784e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\projetfinal\\app\\Resources\\views\\base.html.twig");
    }
}
