<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_42ef0757bd3fe7c25dee85190d93c54f7fb1108bdeffa7ada9f504a4797ca648 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56cbac5d8bfb29acf9e5a938729556a03cfa010de181b7505f5f1ec2c1a9ba48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56cbac5d8bfb29acf9e5a938729556a03cfa010de181b7505f5f1ec2c1a9ba48->enter($__internal_56cbac5d8bfb29acf9e5a938729556a03cfa010de181b7505f5f1ec2c1a9ba48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56cbac5d8bfb29acf9e5a938729556a03cfa010de181b7505f5f1ec2c1a9ba48->leave($__internal_56cbac5d8bfb29acf9e5a938729556a03cfa010de181b7505f5f1ec2c1a9ba48_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc099ecc438b6b57e871eea04a4f3db1dc97f26711bffa166871d3e2b76b579e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc099ecc438b6b57e871eea04a4f3db1dc97f26711bffa166871d3e2b76b579e->enter($__internal_fc099ecc438b6b57e871eea04a4f3db1dc97f26711bffa166871d3e2b76b579e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_fc099ecc438b6b57e871eea04a4f3db1dc97f26711bffa166871d3e2b76b579e->leave($__internal_fc099ecc438b6b57e871eea04a4f3db1dc97f26711bffa166871d3e2b76b579e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_164a42616d0b0e5422a35d3e9e442d3002c36700ed07200f5cd9c3e5dfca00cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_164a42616d0b0e5422a35d3e9e442d3002c36700ed07200f5cd9c3e5dfca00cd->enter($__internal_164a42616d0b0e5422a35d3e9e442d3002c36700ed07200f5cd9c3e5dfca00cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_164a42616d0b0e5422a35d3e9e442d3002c36700ed07200f5cd9c3e5dfca00cd->leave($__internal_164a42616d0b0e5422a35d3e9e442d3002c36700ed07200f5cd9c3e5dfca00cd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/administration/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
