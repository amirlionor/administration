<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_f0681abfaacfeb28bfd7699000777974b384b3974292e9bd117ea51e4cfebd58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_9652ba62d9938b7a9e2c3ffb4232f4ed41f4e3fa13ef7e3a6ca6cd795298ad82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9652ba62d9938b7a9e2c3ffb4232f4ed41f4e3fa13ef7e3a6ca6cd795298ad82->enter($__internal_9652ba62d9938b7a9e2c3ffb4232f4ed41f4e3fa13ef7e3a6ca6cd795298ad82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9652ba62d9938b7a9e2c3ffb4232f4ed41f4e3fa13ef7e3a6ca6cd795298ad82->leave($__internal_9652ba62d9938b7a9e2c3ffb4232f4ed41f4e3fa13ef7e3a6ca6cd795298ad82_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b461bddaff12a182521d3552746f6e8a9e63caed8d359b1747deb306a2df4e2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b461bddaff12a182521d3552746f6e8a9e63caed8d359b1747deb306a2df4e2d->enter($__internal_b461bddaff12a182521d3552746f6e8a9e63caed8d359b1747deb306a2df4e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_b461bddaff12a182521d3552746f6e8a9e63caed8d359b1747deb306a2df4e2d->leave($__internal_b461bddaff12a182521d3552746f6e8a9e63caed8d359b1747deb306a2df4e2d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:show_percent.html.twig", "/var/www/html/administration/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_percent.html.twig");
    }
}
