<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f51158b019e51b95df8132983bf3b9dd19deff85642ca7ace7b3ebc22545b535 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c0c5cf4cb96ab68f28dfbcd51c8318261991d16c5478acbba3d622fee4bca67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0c5cf4cb96ab68f28dfbcd51c8318261991d16c5478acbba3d622fee4bca67->enter($__internal_3c0c5cf4cb96ab68f28dfbcd51c8318261991d16c5478acbba3d622fee4bca67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3c0c5cf4cb96ab68f28dfbcd51c8318261991d16c5478acbba3d622fee4bca67->leave($__internal_3c0c5cf4cb96ab68f28dfbcd51c8318261991d16c5478acbba3d622fee4bca67_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ce86c654db893ae78c2287bf1a9da2bcea8a8eafadb98c8eb6c9f3dde26e7a1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce86c654db893ae78c2287bf1a9da2bcea8a8eafadb98c8eb6c9f3dde26e7a1c->enter($__internal_ce86c654db893ae78c2287bf1a9da2bcea8a8eafadb98c8eb6c9f3dde26e7a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_ce86c654db893ae78c2287bf1a9da2bcea8a8eafadb98c8eb6c9f3dde26e7a1c->leave($__internal_ce86c654db893ae78c2287bf1a9da2bcea8a8eafadb98c8eb6c9f3dde26e7a1c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/administration/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
