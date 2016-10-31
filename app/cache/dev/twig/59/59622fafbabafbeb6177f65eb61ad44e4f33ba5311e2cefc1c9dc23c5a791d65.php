<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e6175a28d09f6a29019b2f463cc92267e3e517cda94d8e7ea50bd54bbac0c572 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_7d7bbef3800d53ce9933eed948787d60922b303764b69c407e0f02f1d5e8c94f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d7bbef3800d53ce9933eed948787d60922b303764b69c407e0f02f1d5e8c94f->enter($__internal_7d7bbef3800d53ce9933eed948787d60922b303764b69c407e0f02f1d5e8c94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d7bbef3800d53ce9933eed948787d60922b303764b69c407e0f02f1d5e8c94f->leave($__internal_7d7bbef3800d53ce9933eed948787d60922b303764b69c407e0f02f1d5e8c94f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2e206b59bcc7ab6127d34cc4f5a5838db5dc485bf79f5b523a4216cf879d2b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e206b59bcc7ab6127d34cc4f5a5838db5dc485bf79f5b523a4216cf879d2b52->enter($__internal_2e206b59bcc7ab6127d34cc4f5a5838db5dc485bf79f5b523a4216cf879d2b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_2e206b59bcc7ab6127d34cc4f5a5838db5dc485bf79f5b523a4216cf879d2b52->leave($__internal_2e206b59bcc7ab6127d34cc4f5a5838db5dc485bf79f5b523a4216cf879d2b52_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_acb9a7b3d58dc9d905ef50289f1d35da31964d06f4a2a40a6c0a7d9ec83540b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acb9a7b3d58dc9d905ef50289f1d35da31964d06f4a2a40a6c0a7d9ec83540b7->enter($__internal_acb9a7b3d58dc9d905ef50289f1d35da31964d06f4a2a40a6c0a7d9ec83540b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_acb9a7b3d58dc9d905ef50289f1d35da31964d06f4a2a40a6c0a7d9ec83540b7->leave($__internal_acb9a7b3d58dc9d905ef50289f1d35da31964d06f4a2a40a6c0a7d9ec83540b7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a969ed97effa8130603d70936eed006f6ddf548a5e7b50f6efb0c51764382443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a969ed97effa8130603d70936eed006f6ddf548a5e7b50f6efb0c51764382443->enter($__internal_a969ed97effa8130603d70936eed006f6ddf548a5e7b50f6efb0c51764382443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a969ed97effa8130603d70936eed006f6ddf548a5e7b50f6efb0c51764382443->leave($__internal_a969ed97effa8130603d70936eed006f6ddf548a5e7b50f6efb0c51764382443_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/administration/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
