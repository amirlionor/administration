<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_184f18ba34791eb75d67671b7118eeb7c95cea591e0d3f6c45294a73ddffb6d7 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b271493b6521f45d43a21eeb7720c1a1287f216feebd73c3be7344f9c9e3432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b271493b6521f45d43a21eeb7720c1a1287f216feebd73c3be7344f9c9e3432->enter($__internal_2b271493b6521f45d43a21eeb7720c1a1287f216feebd73c3be7344f9c9e3432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b271493b6521f45d43a21eeb7720c1a1287f216feebd73c3be7344f9c9e3432->leave($__internal_2b271493b6521f45d43a21eeb7720c1a1287f216feebd73c3be7344f9c9e3432_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_2fd3772302c2f5982c62b9e7978ef147a5825ce06f616a6490ae53d16ce1e3ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd3772302c2f5982c62b9e7978ef147a5825ce06f616a6490ae53d16ce1e3ff->enter($__internal_2fd3772302c2f5982c62b9e7978ef147a5825ce06f616a6490ae53d16ce1e3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataBlockBundle:Block:block_core_action.html.twig"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_2fd3772302c2f5982c62b9e7978ef147a5825ce06f616a6490ae53d16ce1e3ff->leave($__internal_2fd3772302c2f5982c62b9e7978ef147a5825ce06f616a6490ae53d16ce1e3ff_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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
    {{ content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_action.html.twig", "/var/www/html/administration/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_action.html.twig");
    }
}
