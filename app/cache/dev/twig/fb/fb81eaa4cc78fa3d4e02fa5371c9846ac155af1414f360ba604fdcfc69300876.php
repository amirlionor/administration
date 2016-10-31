<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_e5ebe32980e14401920dce1ba52aa93323dbddbba85ab62219b7f007f9527579 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e703d6cf775fcdbebca41eccc72ded6138a697818aca18990183ea6f7b7a84b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e703d6cf775fcdbebca41eccc72ded6138a697818aca18990183ea6f7b7a84b->enter($__internal_3e703d6cf775fcdbebca41eccc72ded6138a697818aca18990183ea6f7b7a84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_3e703d6cf775fcdbebca41eccc72ded6138a697818aca18990183ea6f7b7a84b->leave($__internal_3e703d6cf775fcdbebca41eccc72ded6138a697818aca18990183ea6f7b7a84b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3f2c5a5a7498e5f32b886c424d560ec535b6c62b56ca5ecce5ad4e64456a8e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f2c5a5a7498e5f32b886c424d560ec535b6c62b56ca5ecce5ad4e64456a8e42->enter($__internal_3f2c5a5a7498e5f32b886c424d560ec535b6c62b56ca5ecce5ad4e64456a8e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_3f2c5a5a7498e5f32b886c424d560ec535b6c62b56ca5ecce5ad4e64456a8e42->leave($__internal_3f2c5a5a7498e5f32b886c424d560ec535b6c62b56ca5ecce5ad4e64456a8e42_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_912c6f2072dddc134bf981093bc78dd745dffa11bdfdf0f171ffc9cf819e3326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912c6f2072dddc134bf981093bc78dd745dffa11bdfdf0f171ffc9cf819e3326->enter($__internal_912c6f2072dddc134bf981093bc78dd745dffa11bdfdf0f171ffc9cf819e3326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_912c6f2072dddc134bf981093bc78dd745dffa11bdfdf0f171ffc9cf819e3326->leave($__internal_912c6f2072dddc134bf981093bc78dd745dffa11bdfdf0f171ffc9cf819e3326_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_b1e627229dc76f72bae97e29b443f7c1a2a4d008fae17dda5aaa20bf35793198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e627229dc76f72bae97e29b443f7c1a2a4d008fae17dda5aaa20bf35793198->enter($__internal_b1e627229dc76f72bae97e29b443f7c1a2a4d008fae17dda5aaa20bf35793198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_b1e627229dc76f72bae97e29b443f7c1a2a4d008fae17dda5aaa20bf35793198->leave($__internal_b1e627229dc76f72bae97e29b443f7c1a2a4d008fae17dda5aaa20bf35793198_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
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

<div>
    <div class=\"sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(field_element) }}{% endblock %}
        {% block label %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endblock %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "SonataAdminBundle:CRUD:edit_boolean.html.twig", "/var/www/html/administration/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_boolean.html.twig");
    }
}
