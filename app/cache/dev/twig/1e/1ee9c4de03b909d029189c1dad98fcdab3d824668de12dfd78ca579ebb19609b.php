<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_2f2d5819d9b8174c65787774a57f4277789df803a7696ada381f234fde13dcf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d3e83805501bccaae8bc49c9cc8a0f211cb93701acfaac240c11b1e0a619048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3e83805501bccaae8bc49c9cc8a0f211cb93701acfaac240c11b1e0a619048->enter($__internal_7d3e83805501bccaae8bc49c9cc8a0f211cb93701acfaac240c11b1e0a619048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_7d3e83805501bccaae8bc49c9cc8a0f211cb93701acfaac240c11b1e0a619048->leave($__internal_7d3e83805501bccaae8bc49c9cc8a0f211cb93701acfaac240c11b1e0a619048_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/administration/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
