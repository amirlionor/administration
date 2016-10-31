<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_e635b5a8edb2141c5097ae2cbc421ecbfd850e451b776f28949cf37a34213454 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02b7b77d3f78042b56d659b63b01375d70e2f000e302d97818079c64a4bfcca4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b7b77d3f78042b56d659b63b01375d70e2f000e302d97818079c64a4bfcca4->enter($__internal_02b7b77d3f78042b56d659b63b01375d70e2f000e302d97818079c64a4bfcca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02b7b77d3f78042b56d659b63b01375d70e2f000e302d97818079c64a4bfcca4->leave($__internal_02b7b77d3f78042b56d659b63b01375d70e2f000e302d97818079c64a4bfcca4_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_7b7aade8bd4dfa65c1b5d5fb5aab6262aa9191759a0baf4aaf052b91a2e76f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b7aade8bd4dfa65c1b5d5fb5aab6262aa9191759a0baf4aaf052b91a2e76f5c->enter($__internal_7b7aade8bd4dfa65c1b5d5fb5aab6262aa9191759a0baf4aaf052b91a2e76f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_7b7aade8bd4dfa65c1b5d5fb5aab6262aa9191759a0baf4aaf052b91a2e76f5c->leave($__internal_7b7aade8bd4dfa65c1b5d5fb5aab6262aa9191759a0baf4aaf052b91a2e76f5c_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_56011a81bfc226215ad52004255c5f951c620b9d7449bb50a118a9a19171a425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56011a81bfc226215ad52004255c5f951c620b9d7449bb50a118a9a19171a425->enter($__internal_56011a81bfc226215ad52004255c5f951c620b9d7449bb50a118a9a19171a425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_56011a81bfc226215ad52004255c5f951c620b9d7449bb50a118a9a19171a425->leave($__internal_56011a81bfc226215ad52004255c5f951c620b9d7449bb50a118a9a19171a425_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_0bab0ad499d3deb8b22eb1e829a8ba0865db3c651a6212cdc216945ecc2bbc8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bab0ad499d3deb8b22eb1e829a8ba0865db3c651a6212cdc216945ecc2bbc8d->enter($__internal_0bab0ad499d3deb8b22eb1e829a8ba0865db3c651a6212cdc216945ecc2bbc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_0bab0ad499d3deb8b22eb1e829a8ba0865db3c651a6212cdc216945ecc2bbc8d->leave($__internal_0bab0ad499d3deb8b22eb1e829a8ba0865db3c651a6212cdc216945ecc2bbc8d_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_988c13ae87edce5996504f6523bdbe8f4771b7572f2fb020c5ff67ed02348083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_988c13ae87edce5996504f6523bdbe8f4771b7572f2fb020c5ff67ed02348083->enter($__internal_988c13ae87edce5996504f6523bdbe8f4771b7572f2fb020c5ff67ed02348083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_988c13ae87edce5996504f6523bdbe8f4771b7572f2fb020c5ff67ed02348083->leave($__internal_988c13ae87edce5996504f6523bdbe8f4771b7572f2fb020c5ff67ed02348083_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  85 => 24,  75 => 22,  69 => 21,  61 => 24,  58 => 21,  52 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}

{% block form %}
    {% block form_acl_roles %}
        {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
    {% block form_acl_users %}
        {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_acl.html.twig", "/var/www/html/administration/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_acl.html.twig");
    }
}
