<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_2b70825fa83e6d2e4d51d13c7860bdae01747b82755759b93f6980b646ffd630 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dff2bdf9a22589c2509b75b350f9847c95500a5bc0e84e22b2836646b2809423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff2bdf9a22589c2509b75b350f9847c95500a5bc0e84e22b2836646b2809423->enter($__internal_dff2bdf9a22589c2509b75b350f9847c95500a5bc0e84e22b2836646b2809423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dff2bdf9a22589c2509b75b350f9847c95500a5bc0e84e22b2836646b2809423->leave($__internal_dff2bdf9a22589c2509b75b350f9847c95500a5bc0e84e22b2836646b2809423_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_44a7a078bfbd37be9338cffcf0ac40c437732ee1cac45b08de4407351be95da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a7a078bfbd37be9338cffcf0ac40c437732ee1cac45b08de4407351be95da1->enter($__internal_44a7a078bfbd37be9338cffcf0ac40c437732ee1cac45b08de4407351be95da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:list_time.html.twig"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_44a7a078bfbd37be9338cffcf0ac40c437732ee1cac45b08de4407351be95da1->leave($__internal_44a7a078bfbd37be9338cffcf0ac40c437732ee1cac45b08de4407351be95da1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_time.html.twig", "/var/www/html/administration/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_time.html.twig");
    }
}
