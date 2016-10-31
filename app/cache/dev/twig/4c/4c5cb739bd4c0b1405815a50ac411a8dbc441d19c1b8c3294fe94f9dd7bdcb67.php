<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_403cb5dbe82e7fd258a9bcf7d46eb5e9d924916513bb69e6f7776c8e0b48d034 extends Twig_Template
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
        $__internal_9fa3cf1c157e7220b8c815427d890fae77f3f19afb84c240b0afd857761670d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa3cf1c157e7220b8c815427d890fae77f3f19afb84c240b0afd857761670d4->enter($__internal_9fa3cf1c157e7220b8c815427d890fae77f3f19afb84c240b0afd857761670d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_9fa3cf1c157e7220b8c815427d890fae77f3f19afb84c240b0afd857761670d4->leave($__internal_9fa3cf1c157e7220b8c815427d890fae77f3f19afb84c240b0afd857761670d4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/administration/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
