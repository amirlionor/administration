<?php

/* SonataAdminBundle:Button:list_button.html.twig */
class __TwigTemplate_270b146331be254fdb3173304685b1a48259641f31a0786daa972cfb51189ed2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8d8f2286c16bddba3c42c909d066ed69d9dc05a83aa9eba0bf4bbb0514a7424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d8f2286c16bddba3c42c909d066ed69d9dc05a83aa9eba0bf4bbb0514a7424->enter($__internal_c8d8f2286c16bddba3c42c909d066ed69d9dc05a83aa9eba0bf4bbb0514a7424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Button:list_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_c8d8f2286c16bddba3c42c909d066ed69d9dc05a83aa9eba0bf4bbb0514a7424->leave($__internal_c8d8f2286c16bddba3c42c909d066ed69d9dc05a83aa9eba0bf4bbb0514a7424_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:list_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 15,  27 => 13,  25 => 12,  22 => 11,);
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

{% if admin.hasAccess('list') and admin.hasRoute('list') %}
    <a class=\"sonata-action-element\" href=\"{{ admin.generateUrl('list') }}\">
        <i class=\"fa fa-list\" aria-hidden=\"true\"></i>
        {{ 'link_action_list'|trans({}, 'SonataAdminBundle') }}</a>
{% endif %}
", "SonataAdminBundle:Button:list_button.html.twig", "/var/www/html/administration/vendor/sonata-project/admin-bundle/Resources/views/Button/list_button.html.twig");
    }
}
