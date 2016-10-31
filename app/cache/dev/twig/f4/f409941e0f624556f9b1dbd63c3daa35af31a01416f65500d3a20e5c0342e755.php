<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_fdacb2fb0fda93349a695497263b36914727248a302f8a5e85fb6aba00ebe936 extends Twig_Template
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
        $__internal_eb11f4be69fe73ea457fe37ae6b09260eb58ce0748a3e39143e4f5c1cbab32a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb11f4be69fe73ea457fe37ae6b09260eb58ce0748a3e39143e4f5c1cbab32a3->enter($__internal_eb11f4be69fe73ea457fe37ae6b09260eb58ce0748a3e39143e4f5c1cbab32a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_eb11f4be69fe73ea457fe37ae6b09260eb58ce0748a3e39143e4f5c1cbab32a3->leave($__internal_eb11f4be69fe73ea457fe37ae6b09260eb58ce0748a3e39143e4f5c1cbab32a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/administration/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
