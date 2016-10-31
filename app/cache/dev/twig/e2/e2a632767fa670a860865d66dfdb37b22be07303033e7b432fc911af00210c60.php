<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9eaca6ed8c6a65bcb8791f665d5a15e38aaa49b1b7e6b3281cd7a6b69542a6f5 extends Twig_Template
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
        $__internal_f390f99a387dc9c2ffabe0a9274a01e9d95706cd130e8ad13f925c8ecd8daab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f390f99a387dc9c2ffabe0a9274a01e9d95706cd130e8ad13f925c8ecd8daab6->enter($__internal_f390f99a387dc9c2ffabe0a9274a01e9d95706cd130e8ad13f925c8ecd8daab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f390f99a387dc9c2ffabe0a9274a01e9d95706cd130e8ad13f925c8ecd8daab6->leave($__internal_f390f99a387dc9c2ffabe0a9274a01e9d95706cd130e8ad13f925c8ecd8daab6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/administration/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
