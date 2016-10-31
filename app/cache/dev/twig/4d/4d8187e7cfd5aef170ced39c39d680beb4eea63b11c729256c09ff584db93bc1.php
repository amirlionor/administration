<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_dff55697a64db52d2002e9a38193f5cbc8afeb9ddbdc5b1f39bcdc20d290ba90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb442a90ac8fec5696a3193f8165a3535f3c7824b9376b1e1ad39edd574dd3e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb442a90ac8fec5696a3193f8165a3535f3c7824b9376b1e1ad39edd574dd3e6->enter($__internal_eb442a90ac8fec5696a3193f8165a3535f3c7824b9376b1e1ad39edd574dd3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb442a90ac8fec5696a3193f8165a3535f3c7824b9376b1e1ad39edd574dd3e6->leave($__internal_eb442a90ac8fec5696a3193f8165a3535f3c7824b9376b1e1ad39edd574dd3e6_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_36816953297c9e79e39c08b420f9b88e437a5c7db4d2f82e27057475a181f6e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36816953297c9e79e39c08b420f9b88e437a5c7db4d2f82e27057475a181f6e1->enter($__internal_36816953297c9e79e39c08b420f9b88e437a5c7db4d2f82e27057475a181f6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:action.html.twig"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_36816953297c9e79e39c08b420f9b88e437a5c7db4d2f82e27057475a181f6e1->leave($__internal_36816953297c9e79e39c08b420f9b88e437a5c7db4d2f82e27057475a181f6e1_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_3977ca0d2763e339bf315e0e39bf2c6803c0fa19daf5944ecaf12cab208846bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3977ca0d2763e339bf315e0e39bf2c6803c0fa19daf5944ecaf12cab208846bc->enter($__internal_3977ca0d2763e339bf315e0e39bf2c6803c0fa19daf5944ecaf12cab208846bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:action.html.twig"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_3977ca0d2763e339bf315e0e39bf2c6803c0fa19daf5944ecaf12cab208846bc->leave($__internal_3977ca0d2763e339bf315e0e39bf2c6803c0fa19daf5944ecaf12cab208846bc_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_2c3a4a373449e5e6254be2a5ae87fdea921fdd87d310c54e8d70f24fb1b8ed40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c3a4a373449e5e6254be2a5ae87fdea921fdd87d310c54e8d70f24fb1b8ed40->enter($__internal_2c3a4a373449e5e6254be2a5ae87fdea921fdd87d310c54e8d70f24fb1b8ed40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:action.html.twig"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_2c3a4a373449e5e6254be2a5ae87fdea921fdd87d310c54e8d70f24fb1b8ed40->leave($__internal_2c3a4a373449e5e6254be2a5ae87fdea921fdd87d310c54e8d70f24fb1b8ed40_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  68 => 24,  57 => 20,  54 => 19,  48 => 18,  41 => 15,  35 => 14,  20 => 12,);
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

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
", "SonataAdminBundle:CRUD:action.html.twig", "/var/www/html/administration/vendor/sonata-project/admin-bundle/Resources/views/CRUD/action.html.twig");
    }
}
