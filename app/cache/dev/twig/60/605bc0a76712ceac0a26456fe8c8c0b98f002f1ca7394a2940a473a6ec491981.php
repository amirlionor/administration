<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_6c9ae90995cfebc2be72fc56d42248399c98fcb75cca4464349b36c6eaa1ff8f extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61840e675b4db42f9d39843b1d568e9300d456fb4a09e2f71e24e4bea06c0195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61840e675b4db42f9d39843b1d568e9300d456fb4a09e2f71e24e4bea06c0195->enter($__internal_61840e675b4db42f9d39843b1d568e9300d456fb4a09e2f71e24e4bea06c0195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61840e675b4db42f9d39843b1d568e9300d456fb4a09e2f71e24e4bea06c0195->leave($__internal_61840e675b4db42f9d39843b1d568e9300d456fb4a09e2f71e24e4bea06c0195_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3527316b693a631df46f50e496ad5efc797595b46c4fdc9147d7471e106ad54d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3527316b693a631df46f50e496ad5efc797595b46c4fdc9147d7471e106ad54d->enter($__internal_3527316b693a631df46f50e496ad5efc797595b46c4fdc9147d7471e106ad54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_3527316b693a631df46f50e496ad5efc797595b46c4fdc9147d7471e106ad54d->leave($__internal_3527316b693a631df46f50e496ad5efc797595b46c4fdc9147d7471e106ad54d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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
", "SonataAdminBundle:CRUD:edit_string.html.twig", "/var/www/html/administration/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_string.html.twig");
    }
}
