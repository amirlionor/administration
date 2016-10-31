<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_127736dbd4b38ba0009db172104c3b29c6f7ac8f61c4bf534ae4a2edada3403a extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_324cde2ee1b25822bfe3845aad5b58d860c54491e04cbba37b2d153473a7f8df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_324cde2ee1b25822bfe3845aad5b58d860c54491e04cbba37b2d153473a7f8df->enter($__internal_324cde2ee1b25822bfe3845aad5b58d860c54491e04cbba37b2d153473a7f8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_324cde2ee1b25822bfe3845aad5b58d860c54491e04cbba37b2d153473a7f8df->leave($__internal_324cde2ee1b25822bfe3845aad5b58d860c54491e04cbba37b2d153473a7f8df_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_673faa41677764bf528d15de89f25c25d83e3640f5b6b8482ff2721cf9a51853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_673faa41677764bf528d15de89f25c25d83e3640f5b6b8482ff2721cf9a51853->enter($__internal_673faa41677764bf528d15de89f25c25d83e3640f5b6b8482ff2721cf9a51853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_673faa41677764bf528d15de89f25c25d83e3640f5b6b8482ff2721cf9a51853->leave($__internal_673faa41677764bf528d15de89f25c25d83e3640f5b6b8482ff2721cf9a51853_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
", "SonataAdminBundle:CRUD:edit_file.html.twig", "/var/www/html/administration/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_file.html.twig");
    }
}
