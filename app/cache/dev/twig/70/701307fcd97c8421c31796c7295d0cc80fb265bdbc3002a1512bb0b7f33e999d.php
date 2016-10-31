<?php

/* ::base.html.twig */
class __TwigTemplate_d20dba92ae23213a0f7a4448127fe556466d3eb25e73ee95e3fe17466bbfb214 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0916196e75f84ddf1b74ee43ed251dfd9235445fc68175dab201e2ff82e82040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0916196e75f84ddf1b74ee43ed251dfd9235445fc68175dab201e2ff82e82040->enter($__internal_0916196e75f84ddf1b74ee43ed251dfd9235445fc68175dab201e2ff82e82040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0916196e75f84ddf1b74ee43ed251dfd9235445fc68175dab201e2ff82e82040->leave($__internal_0916196e75f84ddf1b74ee43ed251dfd9235445fc68175dab201e2ff82e82040_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6bd196e49ca917eea223b4b900efec2a9bc61046ab08bddf0b805a3cf8bc6c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd196e49ca917eea223b4b900efec2a9bc61046ab08bddf0b805a3cf8bc6c20->enter($__internal_6bd196e49ca917eea223b4b900efec2a9bc61046ab08bddf0b805a3cf8bc6c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        echo "Welcome!";
        
        $__internal_6bd196e49ca917eea223b4b900efec2a9bc61046ab08bddf0b805a3cf8bc6c20->leave($__internal_6bd196e49ca917eea223b4b900efec2a9bc61046ab08bddf0b805a3cf8bc6c20_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_16b66132d9e8019f523bea0ea0aa674a8de9d6c65f185831061a3104d46da112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b66132d9e8019f523bea0ea0aa674a8de9d6c65f185831061a3104d46da112->enter($__internal_16b66132d9e8019f523bea0ea0aa674a8de9d6c65f185831061a3104d46da112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_16b66132d9e8019f523bea0ea0aa674a8de9d6c65f185831061a3104d46da112->leave($__internal_16b66132d9e8019f523bea0ea0aa674a8de9d6c65f185831061a3104d46da112_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_66e036f459625ea249460120c90b8a29ce8c7c564341c9eceb6c0a6b4e0aa7f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e036f459625ea249460120c90b8a29ce8c7c564341c9eceb6c0a6b4e0aa7f6->enter($__internal_66e036f459625ea249460120c90b8a29ce8c7c564341c9eceb6c0a6b4e0aa7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_66e036f459625ea249460120c90b8a29ce8c7c564341c9eceb6c0a6b4e0aa7f6->leave($__internal_66e036f459625ea249460120c90b8a29ce8c7c564341c9eceb6c0a6b4e0aa7f6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bef66ade2d0757c5d13bec59f64c2525974b6a6e95221c73b4e238a0ecefb4e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef66ade2d0757c5d13bec59f64c2525974b6a6e95221c73b4e238a0ecefb4e5->enter($__internal_bef66ade2d0757c5d13bec59f64c2525974b6a6e95221c73b4e238a0ecefb4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "::base.html.twig"));

        
        $__internal_bef66ade2d0757c5d13bec59f64c2525974b6a6e95221c73b4e238a0ecefb4e5->leave($__internal_bef66ade2d0757c5d13bec59f64c2525974b6a6e95221c73b4e238a0ecefb4e5_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/administration/app/Resources/views/base.html.twig");
    }
}
