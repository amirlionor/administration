<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_3476002dbbe1881311fad876abc2ec4fe34c343e95001f239ee403991a6e5970 extends Twig_Template
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
        $__internal_ada82b68965ee5a83fa356f4be5593e456bc2fa90b92d1e96142f7a8ec00884f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada82b68965ee5a83fa356f4be5593e456bc2fa90b92d1e96142f7a8ec00884f->enter($__internal_ada82b68965ee5a83fa356f4be5593e456bc2fa90b92d1e96142f7a8ec00884f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_ada82b68965ee5a83fa356f4be5593e456bc2fa90b92d1e96142f7a8ec00884f->leave($__internal_ada82b68965ee5a83fa356f4be5593e456bc2fa90b92d1e96142f7a8ec00884f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/administration/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
