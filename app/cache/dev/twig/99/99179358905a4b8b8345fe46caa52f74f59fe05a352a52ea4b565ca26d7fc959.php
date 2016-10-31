<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_6916a7fcd8a8e1ff018ff2cbdb2a331e2a7b5d2d5feee8d4547da692fe767a39 extends Twig_Template
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
        $__internal_60c9deea49809f24403bcf346bd7a05a2158293a063cc76e22f69611db5901df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c9deea49809f24403bcf346bd7a05a2158293a063cc76e22f69611db5901df->enter($__internal_60c9deea49809f24403bcf346bd7a05a2158293a063cc76e22f69611db5901df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_60c9deea49809f24403bcf346bd7a05a2158293a063cc76e22f69611db5901df->leave($__internal_60c9deea49809f24403bcf346bd7a05a2158293a063cc76e22f69611db5901df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/administration/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
