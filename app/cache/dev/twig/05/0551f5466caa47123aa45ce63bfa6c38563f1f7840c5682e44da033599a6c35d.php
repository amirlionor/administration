<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_0fdf9f8e5deff46a955f8bd5f3803b2935a73c6904c2bcd594d89a03bf508693 extends Twig_Template
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
        $__internal_cbf3d1b6576e60b83a7446a404c0d1ec36d9b98a4d72d6c5c8aa2a07a677436c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbf3d1b6576e60b83a7446a404c0d1ec36d9b98a4d72d6c5c8aa2a07a677436c->enter($__internal_cbf3d1b6576e60b83a7446a404c0d1ec36d9b98a4d72d6c5c8aa2a07a677436c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_cbf3d1b6576e60b83a7446a404c0d1ec36d9b98a4d72d6c5c8aa2a07a677436c->leave($__internal_cbf3d1b6576e60b83a7446a404c0d1ec36d9b98a4d72d6c5c8aa2a07a677436c_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/var/www/html/administration/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
