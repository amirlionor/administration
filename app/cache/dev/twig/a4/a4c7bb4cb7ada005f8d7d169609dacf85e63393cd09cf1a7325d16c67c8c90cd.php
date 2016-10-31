<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_77ad86f86ea6dc69faa95f7f011ce8330b99ddb8bd2738b911a5b75ef9b5ed74 extends Twig_Template
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
        $__internal_900a937f6820b7fcb3b2edbed1c3ce0de5c2c652b0adbce4f484a270c7c580f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_900a937f6820b7fcb3b2edbed1c3ce0de5c2c652b0adbce4f484a270c7c580f1->enter($__internal_900a937f6820b7fcb3b2edbed1c3ce0de5c2c652b0adbce4f484a270c7c580f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_900a937f6820b7fcb3b2edbed1c3ce0de5c2c652b0adbce4f484a270c7c580f1->leave($__internal_900a937f6820b7fcb3b2edbed1c3ce0de5c2c652b0adbce4f484a270c7c580f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/administration/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
