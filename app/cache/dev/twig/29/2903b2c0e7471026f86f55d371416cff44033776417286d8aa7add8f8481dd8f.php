<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_c82d3ef34d974c9f11c68b27dda71a3296c5ce836e0469f8c0fa5e46159c5962 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1fe2758a9935a9780e199844f263fdef6e03a1e9d32e9597ed53b66a5253286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1fe2758a9935a9780e199844f263fdef6e03a1e9d32e9597ed53b66a5253286->enter($__internal_d1fe2758a9935a9780e199844f263fdef6e03a1e9d32e9597ed53b66a5253286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1fe2758a9935a9780e199844f263fdef6e03a1e9d32e9597ed53b66a5253286->leave($__internal_d1fe2758a9935a9780e199844f263fdef6e03a1e9d32e9597ed53b66a5253286_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_95954fe698b3e2f33ddcc0ad9a4fa19743a91257741b59a4c0054b7666720f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95954fe698b3e2f33ddcc0ad9a4fa19743a91257741b59a4c0054b7666720f56->enter($__internal_95954fe698b3e2f33ddcc0ad9a4fa19743a91257741b59a4c0054b7666720f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::empty_layout.html.twig"));

        
        $__internal_95954fe698b3e2f33ddcc0ad9a4fa19743a91257741b59a4c0054b7666720f56->leave($__internal_95954fe698b3e2f33ddcc0ad9a4fa19743a91257741b59a4c0054b7666720f56_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_cdd55f8ff99f03360227f9c248ff8e19b0ebcc445e3f0225e9616499255517f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd55f8ff99f03360227f9c248ff8e19b0ebcc445e3f0225e9616499255517f4->enter($__internal_cdd55f8ff99f03360227f9c248ff8e19b0ebcc445e3f0225e9616499255517f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::empty_layout.html.twig"));

        
        $__internal_cdd55f8ff99f03360227f9c248ff8e19b0ebcc445e3f0225e9616499255517f4->leave($__internal_cdd55f8ff99f03360227f9c248ff8e19b0ebcc445e3f0225e9616499255517f4_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_64d69ff23f6e54d12a93734bba8217543835bea58ec2df700fd5f08507c6c7ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d69ff23f6e54d12a93734bba8217543835bea58ec2df700fd5f08507c6c7ab->enter($__internal_64d69ff23f6e54d12a93734bba8217543835bea58ec2df700fd5f08507c6c7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::empty_layout.html.twig"));

        
        $__internal_64d69ff23f6e54d12a93734bba8217543835bea58ec2df700fd5f08507c6c7ab->leave($__internal_64d69ff23f6e54d12a93734bba8217543835bea58ec2df700fd5f08507c6c7ab_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_0d2a20d94f4829ac44de248b5c4d3d986199523a54ee5b82b34ea8eaafd8d183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d2a20d94f4829ac44de248b5c4d3d986199523a54ee5b82b34ea8eaafd8d183->enter($__internal_0d2a20d94f4829ac44de248b5c4d3d986199523a54ee5b82b34ea8eaafd8d183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::empty_layout.html.twig"));

        
        $__internal_0d2a20d94f4829ac44de248b5c4d3d986199523a54ee5b82b34ea8eaafd8d183->leave($__internal_0d2a20d94f4829ac44de248b5c4d3d986199523a54ee5b82b34ea8eaafd8d183_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8120e6e911fe675a5e5088d790ef4ac1142f68a6b7cfd379af985149cc96fa06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8120e6e911fe675a5e5088d790ef4ac1142f68a6b7cfd379af985149cc96fa06->enter($__internal_8120e6e911fe675a5e5088d790ef4ac1142f68a6b7cfd379af985149cc96fa06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::empty_layout.html.twig"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_8120e6e911fe675a5e5088d790ef4ac1142f68a6b7cfd379af985149cc96fa06->leave($__internal_8120e6e911fe675a5e5088d790ef4ac1142f68a6b7cfd379af985149cc96fa06_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_babd89ca052b1351674a7da9c8df6b910b4261785740d8065f7651f4741c7c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_babd89ca052b1351674a7da9c8df6b910b4261785740d8065f7651f4741c7c76->enter($__internal_babd89ca052b1351674a7da9c8df6b910b4261785740d8065f7651f4741c7c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::empty_layout.html.twig"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_babd89ca052b1351674a7da9c8df6b910b4261785740d8065f7651f4741c7c76->leave($__internal_babd89ca052b1351674a7da9c8df6b910b4261785740d8065f7651f4741c7c76_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_4e1ebe638a3cb33221cb7972436c873e09ff8e277f47e05ce5669e11a622eff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1ebe638a3cb33221cb7972436c873e09ff8e277f47e05ce5669e11a622eff7->enter($__internal_4e1ebe638a3cb33221cb7972436c873e09ff8e277f47e05ce5669e11a622eff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::empty_layout.html.twig"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_4e1ebe638a3cb33221cb7972436c873e09ff8e277f47e05ce5669e11a622eff7->leave($__internal_4e1ebe638a3cb33221cb7972436c873e09ff8e277f47e05ce5669e11a622eff7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
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

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle::empty_layout.html.twig", "/var/www/html/administration/vendor/sonata-project/admin-bundle/Resources/views/empty_layout.html.twig");
    }
}
