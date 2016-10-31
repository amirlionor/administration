<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig */
class __TwigTemplate_8fa029fe4c633d9a206348cd30334806c3892756cc8d46d4a69a0e5f696a4a27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'relation_link' => array($this, 'block_relation_link'),
            'relation_value' => array($this, 'block_relation_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54c414be68c649920654788cc79678696a289d0a8d6367615ad1aef1d3f56153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c414be68c649920654788cc79678696a289d0a8d6367615ad1aef1d3f56153->enter($__internal_54c414be68c649920654788cc79678696a289d0a8d6367615ad1aef1d3f56153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54c414be68c649920654788cc79678696a289d0a8d6367615ad1aef1d3f56153->leave($__internal_54c414be68c649920654788cc79678696a289d0a8d6367615ad1aef1d3f56153_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_31de3adcf684d23be87a65d3f52424b8780a1673bb0a944c99a1ed2cf7677b10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31de3adcf684d23be87a65d3f52424b8780a1673bb0a944c99a1ed2cf7677b10->enter($__internal_31de3adcf684d23be87a65d3f52424b8780a1673bb0a944c99a1ed2cf7677b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig"));

        // line 15
        echo "    ";
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 16
        echo "    ";
        $context["route_role"] = twig_upper_filter($this->env, (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")));
        // line 17
        echo "    ";
        if (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method"))) {
            // line 18
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 19
                if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "isGranted", array(0 => (isset($context["route_role"]) ? $context["route_role"] : $this->getContext($context, "route_role")), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) {
                    // line 20
                    $this->displayBlock("relation_link", $context, $blocks);
                } else {
                    // line 22
                    $this->displayBlock("relation_value", $context, $blocks);
                }
                // line 24
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 25
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    ";
        } else {
            // line 27
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 28
                echo "            ";
                $this->displayBlock("relation_value", $context, $blocks);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 29
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    ";
        }
        
        $__internal_31de3adcf684d23be87a65d3f52424b8780a1673bb0a944c99a1ed2cf7677b10->leave($__internal_31de3adcf684d23be87a65d3f52424b8780a1673bb0a944c99a1ed2cf7677b10_prof);

    }

    // line 33
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_2f1e4806bf251c38793c754dcf1fd4d86eb673c225f36d1ba6fe2c58104b6245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f1e4806bf251c38793c754dcf1fd4d86eb673c225f36d1ba6fe2c58104b6245->enter($__internal_2f1e4806bf251c38793c754dcf1fd4d86eb673c225f36d1ba6fe2c58104b6245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig"));

        // line 34
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">
        ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        echo "
    </a>";
        
        $__internal_2f1e4806bf251c38793c754dcf1fd4d86eb673c225f36d1ba6fe2c58104b6245->leave($__internal_2f1e4806bf251c38793c754dcf1fd4d86eb673c225f36d1ba6fe2c58104b6245_prof);

    }

    // line 39
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_53922bc25d9842bb6cf7af59e9c3fd2d59f89f3c0f4a8be6adcb9e929ae7f598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53922bc25d9842bb6cf7af59e9c3fd2d59f89f3c0f4a8be6adcb9e929ae7f598->enter($__internal_53922bc25d9842bb6cf7af59e9c3fd2d59f89f3c0f4a8be6adcb9e929ae7f598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig"));

        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_53922bc25d9842bb6cf7af59e9c3fd2d59f89f3c0f4a8be6adcb9e929ae7f598->leave($__internal_53922bc25d9842bb6cf7af59e9c3fd2d59f89f3c0f4a8be6adcb9e929ae7f598_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 40,  163 => 39,  154 => 35,  149 => 34,  143 => 33,  135 => 30,  121 => 29,  115 => 28,  97 => 27,  94 => 26,  80 => 25,  76 => 24,  73 => 22,  70 => 20,  68 => 19,  50 => 18,  47 => 17,  44 => 16,  41 => 15,  35 => 14,  20 => 12,);
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
    {% set route_name = field_description.options.route.name %}
    {% set route_role = route_name | upper %}
    {% if field_description.hasassociationadmin and field_description.associationadmin.hasRoute(route_name) %}
        {% for element in value %}
            {%- if field_description.associationadmin.isGranted(route_role, value) -%}
                {{ block('relation_link') }}
            {%- else -%}
                {{ block('relation_value') }}
            {%- endif -%}
            {% if not loop.last %}, {% endif %}
        {% endfor %}
    {% else %}
        {% for element in value%}
            {{ block('relation_value') }}{% if not loop.last %}, {% endif %}
        {% endfor %}
    {% endif %}
{% endblock %}

{%- block relation_link -%}
    <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}\">
        {{ element|render_relation_element(field_description) }}
    </a>
{%- endblock -%}

{%- block relation_value -%}
    {{ element|render_relation_element(field_description) }}
{%- endblock -%}
", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig", "/var/www/html/administration/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/list_orm_one_to_many.html.twig");
    }
}
