<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_def6723a72f6c80587a73eecc28802aff61a1a81464942685f8ffe210c728f7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f3c3c5b87e6e1a7d173f9a2001682b143be1ca5a4acec291a7f548355cb0cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3c3c5b87e6e1a7d173f9a2001682b143be1ca5a4acec291a7f548355cb0cbf->enter($__internal_6f3c3c5b87e6e1a7d173f9a2001682b143be1ca5a4acec291a7f548355cb0cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f3c3c5b87e6e1a7d173f9a2001682b143be1ca5a4acec291a7f548355cb0cbf->leave($__internal_6f3c3c5b87e6e1a7d173f9a2001682b143be1ca5a4acec291a7f548355cb0cbf_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}
", "SonataAdminBundle:CRUD:history.html.twig", "/var/www/html/administration/vendor/sonata-project/admin-bundle/Resources/views/CRUD/history.html.twig");
    }
}
