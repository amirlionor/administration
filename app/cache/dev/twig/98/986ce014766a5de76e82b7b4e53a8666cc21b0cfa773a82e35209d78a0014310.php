<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_528c3d6eb220ed5b8b1bf5bd563d3f33c5f71753749491ddb6393ec7b9593879 extends Twig_Template
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
        $__internal_6cdd172b71fe78d9d5f818e54a61e65d86ee020a9c299c7c263c8ec9edf6f9c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cdd172b71fe78d9d5f818e54a61e65d86ee020a9c299c7c263c8ec9edf6f9c5->enter($__internal_6cdd172b71fe78d9d5f818e54a61e65d86ee020a9c299c7c263c8ec9edf6f9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_6cdd172b71fe78d9d5f818e54a61e65d86ee020a9c299c7c263c8ec9edf6f9c5->leave($__internal_6cdd172b71fe78d9d5f818e54a61e65d86ee020a9c299c7c263c8ec9edf6f9c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/administration/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
