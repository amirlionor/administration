<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_e7c9cdd5e79419397284d1f1762ed3c24eb208ce61517471aa5a55edb7292a4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eed1e9dfb5bbc81460335fdd1d65d705fda65169b14741847c63458681c7de50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eed1e9dfb5bbc81460335fdd1d65d705fda65169b14741847c63458681c7de50->enter($__internal_eed1e9dfb5bbc81460335fdd1d65d705fda65169b14741847c63458681c7de50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eed1e9dfb5bbc81460335fdd1d65d705fda65169b14741847c63458681c7de50->leave($__internal_eed1e9dfb5bbc81460335fdd1d65d705fda65169b14741847c63458681c7de50_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b5b92c67d56efea691a50c927049b8be481d8e9cd2367438acfec485f4ca2319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b92c67d56efea691a50c927049b8be481d8e9cd2367438acfec485f4ca2319->enter($__internal_b5b92c67d56efea691a50c927049b8be481d8e9cd2367438acfec485f4ca2319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_b5b92c67d56efea691a50c927049b8be481d8e9cd2367438acfec485f4ca2319->leave($__internal_b5b92c67d56efea691a50c927049b8be481d8e9cd2367438acfec485f4ca2319_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_currency.html.twig", "/var/www/html/administration/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_currency.html.twig");
    }
}
