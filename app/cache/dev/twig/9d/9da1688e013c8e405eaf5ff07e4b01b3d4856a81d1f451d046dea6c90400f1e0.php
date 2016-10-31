<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_ccc6859b564c53f962fe08771eebb250d537e12ee5e0be2f3e81bf54aab9d4cd extends Twig_Template
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
        $__internal_003aeefea4848b673495e94f764e07c6904d289fca8003e172dce6d64dfb95f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003aeefea4848b673495e94f764e07c6904d289fca8003e172dce6d64dfb95f5->enter($__internal_003aeefea4848b673495e94f764e07c6904d289fca8003e172dce6d64dfb95f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_003aeefea4848b673495e94f764e07c6904d289fca8003e172dce6d64dfb95f5->leave($__internal_003aeefea4848b673495e94f764e07c6904d289fca8003e172dce6d64dfb95f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/administration/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
