<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_c81729c6b512cb4c123f1caf4de286caaf825c9572509c0ed4a59978324fc84b extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef9d1faeaeebb75d483af7eab37b6ee91968ce5ef89643f877951168eb3fc743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9d1faeaeebb75d483af7eab37b6ee91968ce5ef89643f877951168eb3fc743->enter($__internal_ef9d1faeaeebb75d483af7eab37b6ee91968ce5ef89643f877951168eb3fc743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef9d1faeaeebb75d483af7eab37b6ee91968ce5ef89643f877951168eb3fc743->leave($__internal_ef9d1faeaeebb75d483af7eab37b6ee91968ce5ef89643f877951168eb3fc743_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_c855ce17a6aab1e3ee4ea42825748d25a9d72ce3e44d3c92842a9dcc39e450e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c855ce17a6aab1e3ee4ea42825748d25a9d72ce3e44d3c92842a9dcc39e450e9->enter($__internal_c855ce17a6aab1e3ee4ea42825748d25a9d72ce3e44d3c92842a9dcc39e450e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataBlockBundle:Block:block_core_text.html.twig"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_c855ce17a6aab1e3ee4ea42825748d25a9d72ce3e44d3c92842a9dcc39e450e9->leave($__internal_c855ce17a6aab1e3ee4ea42825748d25a9d72ce3e44d3c92842a9dcc39e450e9_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ settings.content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_text.html.twig", "/var/www/html/administration/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_text.html.twig");
    }
}
