<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6a7d1171f249629df5ba92a6f1f25e9954ccafb7be15e2df1879089144102782 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34fd704c4331842ae21a680cc8120955ab50d8cbeb850377da717e9e5702b784 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34fd704c4331842ae21a680cc8120955ab50d8cbeb850377da717e9e5702b784->enter($__internal_34fd704c4331842ae21a680cc8120955ab50d8cbeb850377da717e9e5702b784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34fd704c4331842ae21a680cc8120955ab50d8cbeb850377da717e9e5702b784->leave($__internal_34fd704c4331842ae21a680cc8120955ab50d8cbeb850377da717e9e5702b784_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_812aeababf649fb54ec6763e8273c4b9956836f2cb52e915c1d79cd56a108dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812aeababf649fb54ec6763e8273c4b9956836f2cb52e915c1d79cd56a108dc3->enter($__internal_812aeababf649fb54ec6763e8273c4b9956836f2cb52e915c1d79cd56a108dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_812aeababf649fb54ec6763e8273c4b9956836f2cb52e915c1d79cd56a108dc3->leave($__internal_812aeababf649fb54ec6763e8273c4b9956836f2cb52e915c1d79cd56a108dc3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7ca7c109978fdc802bc5c858211d0315936d66ac187fb53e28fa90ad89deee02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca7c109978fdc802bc5c858211d0315936d66ac187fb53e28fa90ad89deee02->enter($__internal_7ca7c109978fdc802bc5c858211d0315936d66ac187fb53e28fa90ad89deee02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7ca7c109978fdc802bc5c858211d0315936d66ac187fb53e28fa90ad89deee02->leave($__internal_7ca7c109978fdc802bc5c858211d0315936d66ac187fb53e28fa90ad89deee02_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_180889e20809eb8b404b1fd820d73ea51bfc234e7b85b84304fa41e56c201862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_180889e20809eb8b404b1fd820d73ea51bfc234e7b85b84304fa41e56c201862->enter($__internal_180889e20809eb8b404b1fd820d73ea51bfc234e7b85b84304fa41e56c201862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_180889e20809eb8b404b1fd820d73ea51bfc234e7b85b84304fa41e56c201862->leave($__internal_180889e20809eb8b404b1fd820d73ea51bfc234e7b85b84304fa41e56c201862_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/administration/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
