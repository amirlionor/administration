<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_ea6d849c05b79afe8aedb2db28b32333c9ca7f8df165f180eeefecbdad9203ff extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5184ecb79111207857ec6e9398eb593888774dbdd13ecf3f579e4516523d573d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5184ecb79111207857ec6e9398eb593888774dbdd13ecf3f579e4516523d573d->enter($__internal_5184ecb79111207857ec6e9398eb593888774dbdd13ecf3f579e4516523d573d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5184ecb79111207857ec6e9398eb593888774dbdd13ecf3f579e4516523d573d->leave($__internal_5184ecb79111207857ec6e9398eb593888774dbdd13ecf3f579e4516523d573d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_275aff66b084625ec5ee81be330d0fd32c84e6f68d55c3d22db5ec632f7b6303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275aff66b084625ec5ee81be330d0fd32c84e6f68d55c3d22db5ec632f7b6303->enter($__internal_275aff66b084625ec5ee81be330d0fd32c84e6f68d55c3d22db5ec632f7b6303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:list_array.html.twig"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 16
            echo "        [";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " => ";
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo "]
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_275aff66b084625ec5ee81be330d0fd32c84e6f68d55c3d22db5ec632f7b6303->leave($__internal_275aff66b084625ec5ee81be330d0fd32c84e6f68d55c3d22db5ec632f7b6303_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
    {% for key, val in value %}
        [{{ key }} => {{ val }}]
    {% endfor %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_array.html.twig", "/var/www/html/administration/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_array.html.twig");
    }
}
