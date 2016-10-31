<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_10bd67f98002418a6156973860cfbd7ff8a20862215e5ccda1cdc1b328cbc2a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3ab05545099983c3bb82f5537e251580cb8e7489c41a578fba4c4a6557a3c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ab05545099983c3bb82f5537e251580cb8e7489c41a578fba4c4a6557a3c51->enter($__internal_b3ab05545099983c3bb82f5537e251580cb8e7489c41a578fba4c4a6557a3c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3ab05545099983c3bb82f5537e251580cb8e7489c41a578fba4c4a6557a3c51->leave($__internal_b3ab05545099983c3bb82f5537e251580cb8e7489c41a578fba4c4a6557a3c51_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5dbbed92ab7c2c194394ca7d9864132837ad765d3506f0f978d6d46a657da722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbbed92ab7c2c194394ca7d9864132837ad765d3506f0f978d6d46a657da722->enter($__internal_5dbbed92ab7c2c194394ca7d9864132837ad765d3506f0f978d6d46a657da722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:list_currency.html.twig"));

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
        
        $__internal_5dbbed92ab7c2c194394ca7d9864132837ad765d3506f0f978d6d46a657da722->leave($__internal_5dbbed92ab7c2c194394ca7d9864132837ad765d3506f0f978d6d46a657da722_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_currency.html.twig", "/var/www/html/administration/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_currency.html.twig");
    }
}
