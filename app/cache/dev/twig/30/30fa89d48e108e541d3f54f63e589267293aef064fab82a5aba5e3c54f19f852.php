<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f42523c7a5d7fa5ded9ff3380505080ab523aa32ce0682f5ccd181de432209d6 extends Twig_Template
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
        $__internal_0ded7a1d72990ed4a929e2f679351fd00adc50a5766f471697b25bf45bdcc2f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ded7a1d72990ed4a929e2f679351fd00adc50a5766f471697b25bf45bdcc2f7->enter($__internal_0ded7a1d72990ed4a929e2f679351fd00adc50a5766f471697b25bf45bdcc2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0ded7a1d72990ed4a929e2f679351fd00adc50a5766f471697b25bf45bdcc2f7->leave($__internal_0ded7a1d72990ed4a929e2f679351fd00adc50a5766f471697b25bf45bdcc2f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/administration/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
