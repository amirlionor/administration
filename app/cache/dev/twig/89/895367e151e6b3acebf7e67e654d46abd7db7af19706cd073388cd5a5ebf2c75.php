<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_ad05922237d8e197e518d47c531dcf20ba86aa010b217bb5abe8cde47db942e5 extends Twig_Template
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
        $__internal_0c27e320be6efb4a68afd106427ea6fd223a1f8ba7b924d9c6cbd4d570752c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c27e320be6efb4a68afd106427ea6fd223a1f8ba7b924d9c6cbd4d570752c79->enter($__internal_0c27e320be6efb4a68afd106427ea6fd223a1f8ba7b924d9c6cbd4d570752c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_0c27e320be6efb4a68afd106427ea6fd223a1f8ba7b924d9c6cbd4d570752c79->leave($__internal_0c27e320be6efb4a68afd106427ea6fd223a1f8ba7b924d9c6cbd4d570752c79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/administration/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
