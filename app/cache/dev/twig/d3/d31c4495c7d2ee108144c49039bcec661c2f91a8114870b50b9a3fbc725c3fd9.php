<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_3e9e558759f897e9910800b1cec389f93767fe29e1e37d7779479de26250ba27 extends Twig_Template
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
        $__internal_e510f5f853d19af01f44e646b55be5aa2e20a11809b3effb6997a21e3b9ca00d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e510f5f853d19af01f44e646b55be5aa2e20a11809b3effb6997a21e3b9ca00d->enter($__internal_e510f5f853d19af01f44e646b55be5aa2e20a11809b3effb6997a21e3b9ca00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e510f5f853d19af01f44e646b55be5aa2e20a11809b3effb6997a21e3b9ca00d->leave($__internal_e510f5f853d19af01f44e646b55be5aa2e20a11809b3effb6997a21e3b9ca00d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/administration/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
