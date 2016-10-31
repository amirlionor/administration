<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_ca92c827acc12758000fd126f5fa6d378844082be9602f6e80237c6a23e4b5de extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_341e1559738396bd8614b088986a11ab738bcb20c1ca7dc68a9c62033ef60383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_341e1559738396bd8614b088986a11ab738bcb20c1ca7dc68a9c62033ef60383->enter($__internal_341e1559738396bd8614b088986a11ab738bcb20c1ca7dc68a9c62033ef60383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_341e1559738396bd8614b088986a11ab738bcb20c1ca7dc68a9c62033ef60383->leave($__internal_341e1559738396bd8614b088986a11ab738bcb20c1ca7dc68a9c62033ef60383_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_474698378174ec23bd0c578d244a7478ebf11aa811a74d18836969ec00c6d40f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_474698378174ec23bd0c578d244a7478ebf11aa811a74d18836969ec00c6d40f->enter($__internal_474698378174ec23bd0c578d244a7478ebf11aa811a74d18836969ec00c6d40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_474698378174ec23bd0c578d244a7478ebf11aa811a74d18836969ec00c6d40f->leave($__internal_474698378174ec23bd0c578d244a7478ebf11aa811a74d18836969ec00c6d40f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
", "SonataAdminBundle:CRUD:edit_text.html.twig", "/var/www/html/administration/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_text.html.twig");
    }
}
