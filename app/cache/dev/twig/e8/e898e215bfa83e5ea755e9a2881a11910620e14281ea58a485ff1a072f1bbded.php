<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_1e244ab76f3fa7423d145d1d3244b068aed96839d0e630b6d904871ca65468ee extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6e18176c305fb0005eadddc2034086700fdb750a3d143bb13d69b7d77dfa0a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e18176c305fb0005eadddc2034086700fdb750a3d143bb13d69b7d77dfa0a8->enter($__internal_a6e18176c305fb0005eadddc2034086700fdb750a3d143bb13d69b7d77dfa0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6e18176c305fb0005eadddc2034086700fdb750a3d143bb13d69b7d77dfa0a8->leave($__internal_a6e18176c305fb0005eadddc2034086700fdb750a3d143bb13d69b7d77dfa0a8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ded2b55d947e441331832b22241601aeeba915f8310053e857f04a3919580010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded2b55d947e441331832b22241601aeeba915f8310053e857f04a3919580010->enter($__internal_ded2b55d947e441331832b22241601aeeba915f8310053e857f04a3919580010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:list_email.html.twig"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_ded2b55d947e441331832b22241601aeeba915f8310053e857f04a3919580010->leave($__internal_ded2b55d947e441331832b22241601aeeba915f8310053e857f04a3919580010_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_email.html.twig", "/var/www/html/administration/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_email.html.twig");
    }
}
