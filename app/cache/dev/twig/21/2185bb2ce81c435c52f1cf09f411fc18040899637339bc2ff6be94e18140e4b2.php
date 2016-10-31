<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_706abfc96a529fec578ecd1436640e0e41a35dc98665d9b0d1d2117e5bfda6f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_646784a077abcde01fa1d0338e36936256f519c0c1656de52ea1e33efdf441b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_646784a077abcde01fa1d0338e36936256f519c0c1656de52ea1e33efdf441b5->enter($__internal_646784a077abcde01fa1d0338e36936256f519c0c1656de52ea1e33efdf441b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_646784a077abcde01fa1d0338e36936256f519c0c1656de52ea1e33efdf441b5->leave($__internal_646784a077abcde01fa1d0338e36936256f519c0c1656de52ea1e33efdf441b5_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_308953615f6fb383a5b53e08b9c63d939917c0af90212ed22065bba386583d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_308953615f6fb383a5b53e08b9c63d939917c0af90212ed22065bba386583d62->enter($__internal_308953615f6fb383a5b53e08b9c63d939917c0af90212ed22065bba386583d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:Core:user_block.html.twig"));

        
        $__internal_308953615f6fb383a5b53e08b9c63d939917c0af90212ed22065bba386583d62->leave($__internal_308953615f6fb383a5b53e08b9c63d939917c0af90212ed22065bba386583d62_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block user_block %}{# Customize this value #}{% endblock %}
", "SonataAdminBundle:Core:user_block.html.twig", "/var/www/html/administration/vendor/sonata-project/admin-bundle/Resources/views/Core/user_block.html.twig");
    }
}
