<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_ea2c2249f8bb8efe7459e641c7dfb9755e0838d3dc8ee19ac514900ba5b1ae3e extends Twig_Template
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
        $__internal_3843704a7d252bc9532715fe34c4b87ac72c13841f97dd323c177aff3e90ef7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3843704a7d252bc9532715fe34c4b87ac72c13841f97dd323c177aff3e90ef7e->enter($__internal_3843704a7d252bc9532715fe34c4b87ac72c13841f97dd323c177aff3e90ef7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_3843704a7d252bc9532715fe34c4b87ac72c13841f97dd323c177aff3e90ef7e->leave($__internal_3843704a7d252bc9532715fe34c4b87ac72c13841f97dd323c177aff3e90ef7e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/administration/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
