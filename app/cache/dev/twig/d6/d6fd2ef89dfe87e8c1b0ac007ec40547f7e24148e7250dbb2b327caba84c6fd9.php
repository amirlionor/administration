<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_5a1fe6b4bfbb83b264a68e7a7c9f8d1db1273a7530dd5cd91c051f1e5b186322 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65b27a311b427a68e56f27e5d8ee494918636cb0e0ab4c9d0fcd6bcc0b36ed52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65b27a311b427a68e56f27e5d8ee494918636cb0e0ab4c9d0fcd6bcc0b36ed52->enter($__internal_65b27a311b427a68e56f27e5d8ee494918636cb0e0ab4c9d0fcd6bcc0b36ed52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65b27a311b427a68e56f27e5d8ee494918636cb0e0ab4c9d0fcd6bcc0b36ed52->leave($__internal_65b27a311b427a68e56f27e5d8ee494918636cb0e0ab4c9d0fcd6bcc0b36ed52_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_41de1db01a6bd9ad443044e60b431bbc186b17a93dcdb5a15e79a4e216ddd275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41de1db01a6bd9ad443044e60b431bbc186b17a93dcdb5a15e79a4e216ddd275->enter($__internal_41de1db01a6bd9ad443044e60b431bbc186b17a93dcdb5a15e79a4e216ddd275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataBlockBundle:Block:block_exception.html.twig"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_41de1db01a6bd9ad443044e60b431bbc186b17a93dcdb5a15e79a4e216ddd275->leave($__internal_41de1db01a6bd9ad443044e60b431bbc186b17a93dcdb5a15e79a4e216ddd275_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    <div class=\"cms-block-exception\">
        <h2>{{ block.name }}</h2>
        <h3>{{ exception.message }}</h3>
    </div>
{% endblock %}
", "SonataBlockBundle:Block:block_exception.html.twig", "/var/www/html/administration/vendor/sonata-project/block-bundle/Resources/views/Block/block_exception.html.twig");
    }
}
