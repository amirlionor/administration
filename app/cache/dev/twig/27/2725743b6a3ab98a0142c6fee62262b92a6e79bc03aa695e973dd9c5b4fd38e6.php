<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_0ba3215458c506c0a4f3fce4c529663898bbbfc50991672fab947e5035001135 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98719ec0951f0f827d39075a064966f3ca9d0b5f039faf438002165918680da7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98719ec0951f0f827d39075a064966f3ca9d0b5f039faf438002165918680da7->enter($__internal_98719ec0951f0f827d39075a064966f3ca9d0b5f039faf438002165918680da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98719ec0951f0f827d39075a064966f3ca9d0b5f039faf438002165918680da7->leave($__internal_98719ec0951f0f827d39075a064966f3ca9d0b5f039faf438002165918680da7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_66eefb9a993e74601e17946e93afd7f6ecd0560f2e4a63f19e3d3bfe5f19b3b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66eefb9a993e74601e17946e93afd7f6ecd0560f2e4a63f19e3d3bfe5f19b3b5->enter($__internal_66eefb9a993e74601e17946e93afd7f6ecd0560f2e4a63f19e3d3bfe5f19b3b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_66eefb9a993e74601e17946e93afd7f6ecd0560f2e4a63f19e3d3bfe5f19b3b5->leave($__internal_66eefb9a993e74601e17946e93afd7f6ecd0560f2e4a63f19e3d3bfe5f19b3b5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:list_percent.html.twig", "/var/www/html/administration/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_percent.html.twig");
    }
}
