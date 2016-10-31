<?php

/* SonataCoreBundle:Form:colorpicker.html.twig */
class __TwigTemplate_4847545bd2bb2798f5c19b56bf5e6355093f6d741a1ec6b5317d3f7a56ec759e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_selector_widget' => array($this, 'block_sonata_type_color_selector_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b15a551ea9481d1c12be7f9223eb473fb25fee6b2f73a30a9b9d152900b1297b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15a551ea9481d1c12be7f9223eb473fb25fee6b2f73a30a9b9d152900b1297b->enter($__internal_b15a551ea9481d1c12be7f9223eb473fb25fee6b2f73a30a9b9d152900b1297b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_b15a551ea9481d1c12be7f9223eb473fb25fee6b2f73a30a9b9d152900b1297b->leave($__internal_b15a551ea9481d1c12be7f9223eb473fb25fee6b2f73a30a9b9d152900b1297b_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_f659ceeda3ef83e6b1c9a6ef5482e123412923da443a75d141e8e7d7d766d3ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f659ceeda3ef83e6b1c9a6ef5482e123412923da443a75d141e8e7d7d766d3ae->enter($__internal_f659ceeda3ef83e6b1c9a6ef5482e123412923da443a75d141e8e7d7d766d3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataCoreBundle:Form:colorpicker.html.twig"));

        // line 12
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f659ceeda3ef83e6b1c9a6ef5482e123412923da443a75d141e8e7d7d766d3ae->leave($__internal_f659ceeda3ef83e6b1c9a6ef5482e123412923da443a75d141e8e7d7d766d3ae_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:colorpicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 24,  42 => 14,  40 => 13,  35 => 12,  23 => 11,);
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
{% block sonata_type_color_selector_widget %}
    {{ block('choice_widget') }}
    {% spaceless %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#{{ id }}').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    {% endspaceless %}
{% endblock sonata_type_color_selector_widget %}
", "SonataCoreBundle:Form:colorpicker.html.twig", "/var/www/html/administration/vendor/sonata-project/core-bundle/Resources/views/Form/colorpicker.html.twig");
    }
}
