<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_38e4522e63b542be606254a68f5ba73a9796652cd4092b84a41770058c25831a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e793369fba2ab06acb3001927b66501c91ffc2b5e669105980dc8f1a29792cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e793369fba2ab06acb3001927b66501c91ffc2b5e669105980dc8f1a29792cfd->enter($__internal_e793369fba2ab06acb3001927b66501c91ffc2b5e669105980dc8f1a29792cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e793369fba2ab06acb3001927b66501c91ffc2b5e669105980dc8f1a29792cfd->leave($__internal_e793369fba2ab06acb3001927b66501c91ffc2b5e669105980dc8f1a29792cfd_prof);

    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_db432713aa2632affe0b11863f5ed3a98cd483f9936936af5672427773e3c9d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db432713aa2632affe0b11863f5ed3a98cd483f9936936af5672427773e3c9d5->enter($__internal_db432713aa2632affe0b11863f5ed3a98cd483f9936936af5672427773e3c9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
        echo "
";
        
        $__internal_db432713aa2632affe0b11863f5ed3a98cd483f9936936af5672427773e3c9d5->leave($__internal_db432713aa2632affe0b11863f5ed3a98cd483f9936936af5672427773e3c9d5_prof);

    }

    // line 18
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_2eef5b094db015d4cbd7b95b5b78488c7fcb4ac8c8ae5e2cd278394e59898d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2eef5b094db015d4cbd7b95b5b78488c7fcb4ac8c8ae5e2cd278394e59898d6e->enter($__internal_2eef5b094db015d4cbd7b95b5b78488c7fcb4ac8c8ae5e2cd278394e59898d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        // line 19
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 20
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 21
            echo "            ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElementCompare($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["object_compare"]) ? $context["object_compare"] : $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 23
        echo "    </tr>
";
        
        $__internal_2eef5b094db015d4cbd7b95b5b78488c7fcb4ac8c8ae5e2cd278394e59898d6e->leave($__internal_2eef5b094db015d4cbd7b95b5b78488c7fcb4ac8c8ae5e2cd278394e59898d6e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  62 => 21,  60 => 20,  57 => 19,  51 => 18,  41 => 15,  35 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}

{% block show_title %}
    {{ name|trans({}, admin.translationdomain) }}
{% endblock %}

{% block show_field %}
    <tr class=\"sonata-ba-view-container history-audit-compare\">
        {% if elements[field_name] is defined %}
            {{ elements[field_name]|render_view_element_compare(object, object_compare) }}
        {% endif %}
    </tr>
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_compare.html.twig", "/var/www/html/administration/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show_compare.html.twig");
    }
}
