<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_fba2d26ae0df881f69ce98cffd15f44a9dd48ed1659b28068577fc9e3a40fa90 extends Twig_Template
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
        $__internal_ed2b316b701da2832e2309474cf87ff5bbdb83c8d64f7242aff70e954defc4b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed2b316b701da2832e2309474cf87ff5bbdb83c8d64f7242aff70e954defc4b2->enter($__internal_ed2b316b701da2832e2309474cf87ff5bbdb83c8d64f7242aff70e954defc4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_8b267705d7c4bb4a088328dbcdbb6ee834b526cf837aa122cb948d7b3c5059a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b267705d7c4bb4a088328dbcdbb6ee834b526cf837aa122cb948d7b3c5059a9->enter($__internal_8b267705d7c4bb4a088328dbcdbb6ee834b526cf837aa122cb948d7b3c5059a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ed2b316b701da2832e2309474cf87ff5bbdb83c8d64f7242aff70e954defc4b2->leave($__internal_ed2b316b701da2832e2309474cf87ff5bbdb83c8d64f7242aff70e954defc4b2_prof);

        
        $__internal_8b267705d7c4bb4a088328dbcdbb6ee834b526cf837aa122cb948d7b3c5059a9->leave($__internal_8b267705d7c4bb4a088328dbcdbb6ee834b526cf837aa122cb948d7b3c5059a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\projetfinal\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
