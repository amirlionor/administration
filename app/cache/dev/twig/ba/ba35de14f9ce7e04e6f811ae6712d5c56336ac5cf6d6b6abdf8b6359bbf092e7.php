<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_fdb5b6458b06f3e0f9b7ed4e8c73cd4a6a6c8b98686dd13ca3521d41a1cf9f17 extends Twig_Template
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
        $__internal_70ce73c0f8a0e807823b1facbbe50070ac549b0f2de4b2e63c60b33aab0b8b68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ce73c0f8a0e807823b1facbbe50070ac549b0f2de4b2e63c60b33aab0b8b68->enter($__internal_70ce73c0f8a0e807823b1facbbe50070ac549b0f2de4b2e63c60b33aab0b8b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_70ce73c0f8a0e807823b1facbbe50070ac549b0f2de4b2e63c60b33aab0b8b68->leave($__internal_70ce73c0f8a0e807823b1facbbe50070ac549b0f2de4b2e63c60b33aab0b8b68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/administration/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
