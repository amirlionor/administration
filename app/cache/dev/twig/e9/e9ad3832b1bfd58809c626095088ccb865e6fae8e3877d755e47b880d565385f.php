<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_5f8f376ce510f0ad90edacc004473e992093403c771f06e062fc18dbf6fd9ed0 extends Twig_Template
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
        $__internal_116d0670fec01ad785f34dd656184b5e7b7d501d9c8b5e539e9d1f6d2b1ec61a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_116d0670fec01ad785f34dd656184b5e7b7d501d9c8b5e539e9d1f6d2b1ec61a->enter($__internal_116d0670fec01ad785f34dd656184b5e7b7d501d9c8b5e539e9d1f6d2b1ec61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

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
        
        $__internal_116d0670fec01ad785f34dd656184b5e7b7d501d9c8b5e539e9d1f6d2b1ec61a->leave($__internal_116d0670fec01ad785f34dd656184b5e7b7d501d9c8b5e539e9d1f6d2b1ec61a_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_ac55e71fd17fd2ff2729c343694ca62d328277066aa5a999c8b4fb309583b1e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac55e71fd17fd2ff2729c343694ca62d328277066aa5a999c8b4fb309583b1e6->enter($__internal_ac55e71fd17fd2ff2729c343694ca62d328277066aa5a999c8b4fb309583b1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataBlockBundle:Block:block_base.html.twig"));

        echo "EMPTY CONTENT";
        
        $__internal_ac55e71fd17fd2ff2729c343694ca62d328277066aa5a999c8b4fb309583b1e6->leave($__internal_ac55e71fd17fd2ff2729c343694ca62d328277066aa5a999c8b4fb309583b1e6_prof);

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
