<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_53615b1c5f96c524b59aae034e6e527d7ea4600ad9e2925d3512728474aa3665 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ab386757ef21f2c1dbb44ff00f318a04bd1256be2fd30b9c0a62ef6ace3252e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab386757ef21f2c1dbb44ff00f318a04bd1256be2fd30b9c0a62ef6ace3252e->enter($__internal_6ab386757ef21f2c1dbb44ff00f318a04bd1256be2fd30b9c0a62ef6ace3252e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>

";
        // line 15
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_6ab386757ef21f2c1dbb44ff00f318a04bd1256be2fd30b9c0a62ef6ace3252e->leave($__internal_6ab386757ef21f2c1dbb44ff00f318a04bd1256be2fd30b9c0a62ef6ace3252e_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_c9032ee09f3bd9bc8b931cb997863fa03601ed559691a423ebf852bd390c7ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9032ee09f3bd9bc8b931cb997863fa03601ed559691a423ebf852bd390c7ea6->enter($__internal_c9032ee09f3bd9bc8b931cb997863fa03601ed559691a423ebf852bd390c7ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), array(), (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) ? ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        
        $__internal_c9032ee09f3bd9bc8b931cb997863fa03601ed559691a423ebf852bd390c7ea6->leave($__internal_c9032ee09f3bd9bc8b931cb997863fa03601ed559691a423ebf852bd390c7ea6_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_dba9148935191703874f1c9aa9d04bc271f18e8a6dc66d6fc5cccaf9025e1186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dba9148935191703874f1c9aa9d04bc271f18e8a6dc66d6fc5cccaf9025e1186->enter($__internal_dba9148935191703874f1c9aa9d04bc271f18e8a6dc66d6fc5cccaf9025e1186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_dba9148935191703874f1c9aa9d04bc271f18e8a6dc66d6fc5cccaf9025e1186->leave($__internal_dba9148935191703874f1c9aa9d04bc271f18e8a6dc66d6fc5cccaf9025e1186_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_76d130d75a09d9fc8fdbc57d74cdd1b2af0ce771222ff83c76a7afe59276a566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d130d75a09d9fc8fdbc57d74cdd1b2af0ce771222ff83c76a7afe59276a566->enter($__internal_76d130d75a09d9fc8fdbc57d74cdd1b2af0ce771222ff83c76a7afe59276a566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 16
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 17
            echo "        <td>
            ";
            // line 18
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 19
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_76d130d75a09d9fc8fdbc57d74cdd1b2af0ce771222ff83c76a7afe59276a566->leave($__internal_76d130d75a09d9fc8fdbc57d74cdd1b2af0ce771222ff83c76a7afe59276a566_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 15,  60 => 13,  48 => 12,  41 => 15,  36 => 13,  28 => 12,  25 => 11,);
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

<th{% if(is_diff|default(false)) %} class=\"diff\"{% endif %}>{% block name %}{{ field_description.label|trans({}, field_description.translationDomain ?: admin.translationDomain) }}{% endblock %}</th>
<td>{% block field %}{% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}{% endblock %}</td>

{% block field_compare %}
    {% if(value_compare is defined) %}
        <td>
            {% set value = value_compare %}
            {{ block('field') }}
        </td>
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_field.html.twig", "/var/www/html/administration/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show_field.html.twig");
    }
}
