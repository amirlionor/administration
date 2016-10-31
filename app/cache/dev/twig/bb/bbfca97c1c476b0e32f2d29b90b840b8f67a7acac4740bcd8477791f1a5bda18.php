<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4067902147214372d54e85181ae3b917a917d88475d8fe9bfcb314c9cd5ace6b extends Twig_Template
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
        $__internal_ed9ed4c08cd1692bad545d577b9fd86bfea9589fd300acc305d6b230c43e9d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed9ed4c08cd1692bad545d577b9fd86bfea9589fd300acc305d6b230c43e9d02->enter($__internal_ed9ed4c08cd1692bad545d577b9fd86bfea9589fd300acc305d6b230c43e9d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ed9ed4c08cd1692bad545d577b9fd86bfea9589fd300acc305d6b230c43e9d02->leave($__internal_ed9ed4c08cd1692bad545d577b9fd86bfea9589fd300acc305d6b230c43e9d02_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget',  array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/administration/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
