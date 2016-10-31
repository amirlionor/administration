<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_456ec6d41cb1e43179858933c1e09ac28729dc5b12d8947d7da63492145113de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48ee993329d9b8c5c3a3c4bf1a305eff677564b2166bba23cc89c54efe30e05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48ee993329d9b8c5c3a3c4bf1a305eff677564b2166bba23cc89c54efe30e05e->enter($__internal_48ee993329d9b8c5c3a3c4bf1a305eff677564b2166bba23cc89c54efe30e05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_48ee993329d9b8c5c3a3c4bf1a305eff677564b2166bba23cc89c54efe30e05e->leave($__internal_48ee993329d9b8c5c3a3c4bf1a305eff677564b2166bba23cc89c54efe30e05e_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_2f48b63c3ed60c64991755888c1ef6a236adacfec87342bc8e3a5fe0f57381c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f48b63c3ed60c64991755888c1ef6a236adacfec87342bc8e3a5fe0f57381c0->enter($__internal_2f48b63c3ed60c64991755888c1ef6a236adacfec87342bc8e3a5fe0f57381c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataBlockBundle:Block:block_base.html.twig"));

        echo "EMPTY CONTENT";
        
        $__internal_2f48b63c3ed60c64991755888c1ef6a236adacfec87342bc8e3a5fe0f57381c0->leave($__internal_2f48b63c3ed60c64991755888c1ef6a236adacfec87342bc8e3a5fe0f57381c0_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "/var/www/html/administration/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
