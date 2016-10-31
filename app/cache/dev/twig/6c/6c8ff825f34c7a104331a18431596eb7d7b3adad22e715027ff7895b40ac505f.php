<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_585f193112725f9d08d3b90b77b0fa1cde89c9af3ec323221ee9f764459f870e extends Twig_Template
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
        $__internal_6b82761c9f5cadbfc113bd428cf92f33c70af326c36d1d24e9ba0a3058402a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b82761c9f5cadbfc113bd428cf92f33c70af326c36d1d24e9ba0a3058402a5f->enter($__internal_6b82761c9f5cadbfc113bd428cf92f33c70af326c36d1d24e9ba0a3058402a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6b82761c9f5cadbfc113bd428cf92f33c70af326c36d1d24e9ba0a3058402a5f->leave($__internal_6b82761c9f5cadbfc113bd428cf92f33c70af326c36d1d24e9ba0a3058402a5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/administration/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
