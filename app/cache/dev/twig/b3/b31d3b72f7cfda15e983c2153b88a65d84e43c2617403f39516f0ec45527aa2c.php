<?php

/* SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig */
class __TwigTemplate_2f9ea58bb67694b35d4c0c27719b9d09e54199b5654471c0d2dc92313efebdc3 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bc9224b0e49e0b7059f090a7a38ecd9271cc80a360f31d2fc3bcef14dcb73f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bc9224b0e49e0b7059f090a7a38ecd9271cc80a360f31d2fc3bcef14dcb73f1->enter($__internal_7bc9224b0e49e0b7059f090a7a38ecd9271cc80a360f31d2fc3bcef14dcb73f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bc9224b0e49e0b7059f090a7a38ecd9271cc80a360f31d2fc3bcef14dcb73f1->leave($__internal_7bc9224b0e49e0b7059f090a7a38ecd9271cc80a360f31d2fc3bcef14dcb73f1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig", "/var/www/html/administration/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_sonata_type_immutable_array.html.twig");
    }
}
