<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f0f352e6cc874d1276c596fe6ca952c7c6aaa5616638e5c84bef785a8acd185c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ecb92eb411c74735533b969832eafbd279f6d9cf2be8de7a0f3d9d3a5cd6f3f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb92eb411c74735533b969832eafbd279f6d9cf2be8de7a0f3d9d3a5cd6f3f2->enter($__internal_ecb92eb411c74735533b969832eafbd279f6d9cf2be8de7a0f3d9d3a5cd6f3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecb92eb411c74735533b969832eafbd279f6d9cf2be8de7a0f3d9d3a5cd6f3f2->leave($__internal_ecb92eb411c74735533b969832eafbd279f6d9cf2be8de7a0f3d9d3a5cd6f3f2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_055232dbc788548e352cb68c070a822080a45ae582f062dc2f021a18bf272bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055232dbc788548e352cb68c070a822080a45ae582f062dc2f021a18bf272bd7->enter($__internal_055232dbc788548e352cb68c070a822080a45ae582f062dc2f021a18bf272bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_055232dbc788548e352cb68c070a822080a45ae582f062dc2f021a18bf272bd7->leave($__internal_055232dbc788548e352cb68c070a822080a45ae582f062dc2f021a18bf272bd7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_19fbcae8ca4c2d08a2338c273b9a8e9effd3adc73677391edc9b69963546accc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19fbcae8ca4c2d08a2338c273b9a8e9effd3adc73677391edc9b69963546accc->enter($__internal_19fbcae8ca4c2d08a2338c273b9a8e9effd3adc73677391edc9b69963546accc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_19fbcae8ca4c2d08a2338c273b9a8e9effd3adc73677391edc9b69963546accc->leave($__internal_19fbcae8ca4c2d08a2338c273b9a8e9effd3adc73677391edc9b69963546accc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_de761441b290faa0d3b336df865f7f0bf73e9584d6f729a013a3af10fbf5fea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de761441b290faa0d3b336df865f7f0bf73e9584d6f729a013a3af10fbf5fea8->enter($__internal_de761441b290faa0d3b336df865f7f0bf73e9584d6f729a013a3af10fbf5fea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_de761441b290faa0d3b336df865f7f0bf73e9584d6f729a013a3af10fbf5fea8->leave($__internal_de761441b290faa0d3b336df865f7f0bf73e9584d6f729a013a3af10fbf5fea8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/administration/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
