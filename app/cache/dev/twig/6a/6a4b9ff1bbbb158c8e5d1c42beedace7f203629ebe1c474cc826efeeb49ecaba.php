<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_ddf33de27259fccdf8157b83a4cf914dd785fc7e254dedfa46b5d3115c17c4a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ffa77903795f9dc9da1751d0715e5c602bac587a859520d6ba0aaf06867b88a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ffa77903795f9dc9da1751d0715e5c602bac587a859520d6ba0aaf06867b88a->enter($__internal_9ffa77903795f9dc9da1751d0715e5c602bac587a859520d6ba0aaf06867b88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ffa77903795f9dc9da1751d0715e5c602bac587a859520d6ba0aaf06867b88a->leave($__internal_9ffa77903795f9dc9da1751d0715e5c602bac587a859520d6ba0aaf06867b88a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
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

{# DEPRECATED #}
{# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}

{% extends 'SonataAdminBundle:Button:create_button.html.twig' %}
", "SonataAdminBundle:Core:create_button.html.twig", "/var/www/html/administration/vendor/sonata-project/admin-bundle/Resources/views/Core/create_button.html.twig");
    }
}
