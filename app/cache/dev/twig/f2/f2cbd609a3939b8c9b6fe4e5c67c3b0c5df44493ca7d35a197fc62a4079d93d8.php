<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_d4543bd99009bfb9e6ea0b0555e6902a026b40a468b7af8d4a1a1c51b1179e5d extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_063f3995b0522b32d2ae8b54c04ba50df05a12e5f4e623dad7885372c72f97da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_063f3995b0522b32d2ae8b54c04ba50df05a12e5f4e623dad7885372c72f97da->enter($__internal_063f3995b0522b32d2ae8b54c04ba50df05a12e5f4e623dad7885372c72f97da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_063f3995b0522b32d2ae8b54c04ba50df05a12e5f4e623dad7885372c72f97da->leave($__internal_063f3995b0522b32d2ae8b54c04ba50df05a12e5f4e623dad7885372c72f97da_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2ee3acd55098d864a139c3e71a8fbe3ddbe5f0ad9926400ed2747fe5d08c2b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee3acd55098d864a139c3e71a8fbe3ddbe5f0ad9926400ed2747fe5d08c2b0e->enter($__internal_2ee3acd55098d864a139c3e71a8fbe3ddbe5f0ad9926400ed2747fe5d08c2b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_2ee3acd55098d864a139c3e71a8fbe3ddbe5f0ad9926400ed2747fe5d08c2b0e->leave($__internal_2ee3acd55098d864a139c3e71a8fbe3ddbe5f0ad9926400ed2747fe5d08c2b0e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
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

{% extends base_template %}

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
", "SonataAdminBundle:CRUD:edit_array.html.twig", "/var/www/html/administration/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_array.html.twig");
    }
}
