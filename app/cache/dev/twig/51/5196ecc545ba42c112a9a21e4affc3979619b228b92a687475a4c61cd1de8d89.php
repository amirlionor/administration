<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_e61e66e86814324438de1141ea5264a950b81a242bc43a84ac59188979126503 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_150dadc1dedff972f32be7ec6354b6e82ba518e6ef542f3ccd972464b407aa08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150dadc1dedff972f32be7ec6354b6e82ba518e6ef542f3ccd972464b407aa08->enter($__internal_150dadc1dedff972f32be7ec6354b6e82ba518e6ef542f3ccd972464b407aa08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_150dadc1dedff972f32be7ec6354b6e82ba518e6ef542f3ccd972464b407aa08->leave($__internal_150dadc1dedff972f32be7ec6354b6e82ba518e6ef542f3ccd972464b407aa08_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_35a0d7be2d0c2bf5ca14af7b721b3e80a90b9e5529a141c94debb45103e40a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a0d7be2d0c2bf5ca14af7b721b3e80a90b9e5529a141c94debb45103e40a63->enter($__internal_35a0d7be2d0c2bf5ca14af7b721b3e80a90b9e5529a141c94debb45103e40a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:show_email.html.twig"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_35a0d7be2d0c2bf5ca14af7b721b3e80a90b9e5529a141c94debb45103e40a63->leave($__internal_35a0d7be2d0c2bf5ca14af7b721b3e80a90b9e5529a141c94debb45103e40a63_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_email.html.twig", "/var/www/html/administration/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_email.html.twig");
    }
}
