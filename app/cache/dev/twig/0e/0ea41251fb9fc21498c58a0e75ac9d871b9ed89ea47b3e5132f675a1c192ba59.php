<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_9e1132cf390f24cd4fd9cfba61c7f138ce3a395f54a3ac7f279cf04eb14cfccf extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f752f0f442909e6f1d9d0a9ca86551a48f73461653e3784ea22c200fc81169a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f752f0f442909e6f1d9d0a9ca86551a48f73461653e3784ea22c200fc81169a5->enter($__internal_f752f0f442909e6f1d9d0a9ca86551a48f73461653e3784ea22c200fc81169a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f752f0f442909e6f1d9d0a9ca86551a48f73461653e3784ea22c200fc81169a5->leave($__internal_f752f0f442909e6f1d9d0a9ca86551a48f73461653e3784ea22c200fc81169a5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d82cb4946dc26869eb707d696890f7fe56287b3630cfe735e29c109eff15ef5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d82cb4946dc26869eb707d696890f7fe56287b3630cfe735e29c109eff15ef5d->enter($__internal_d82cb4946dc26869eb707d696890f7fe56287b3630cfe735e29c109eff15ef5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_d82cb4946dc26869eb707d696890f7fe56287b3630cfe735e29c109eff15ef5d->leave($__internal_d82cb4946dc26869eb707d696890f7fe56287b3630cfe735e29c109eff15ef5d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
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
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "/var/www/html/administration/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
