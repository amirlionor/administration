<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_ab8dfc7f7f9a4bd90677793eb04e905c86a14c884e867bece8684b492f8eb233 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8570433a9b4ef439f75fe2f708adcae98613d0dd1ee40ccef76063571b229d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8570433a9b4ef439f75fe2f708adcae98613d0dd1ee40ccef76063571b229d8->enter($__internal_e8570433a9b4ef439f75fe2f708adcae98613d0dd1ee40ccef76063571b229d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8570433a9b4ef439f75fe2f708adcae98613d0dd1ee40ccef76063571b229d8->leave($__internal_e8570433a9b4ef439f75fe2f708adcae98613d0dd1ee40ccef76063571b229d8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a4b9d93a4adac00f0aa889facc0a07491eb5658741945ead6bf9537a39cc1af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b9d93a4adac00f0aa889facc0a07491eb5658741945ead6bf9537a39cc1af6->enter($__internal_a4b9d93a4adac00f0aa889facc0a07491eb5658741945ead6bf9537a39cc1af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_a4b9d93a4adac00f0aa889facc0a07491eb5658741945ead6bf9537a39cc1af6->leave($__internal_a4b9d93a4adac00f0aa889facc0a07491eb5658741945ead6bf9537a39cc1af6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_integer.html.twig", "/var/www/html/administration/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_integer.html.twig");
    }
}
