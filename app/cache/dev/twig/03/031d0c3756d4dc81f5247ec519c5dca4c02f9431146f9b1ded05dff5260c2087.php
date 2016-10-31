<?php

/* SonataCoreBundle:Form:datepicker.html.twig */
class __TwigTemplate_adfc95446158269c398c9615a498346ddc455c9eaf86dd5e634ac95371b3f606 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_date_picker_widget_html' => array($this, 'block_sonata_type_date_picker_widget_html'),
            'sonata_type_date_picker_widget' => array($this, 'block_sonata_type_date_picker_widget'),
            'sonata_type_datetime_picker_widget_html' => array($this, 'block_sonata_type_datetime_picker_widget_html'),
            'sonata_type_datetime_picker_widget' => array($this, 'block_sonata_type_datetime_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f78a6c3b9586a61bd670b29cb1eb04ea2e8b84da97f4d1b1268dd3a91abadf0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f78a6c3b9586a61bd670b29cb1eb04ea2e8b84da97f4d1b1268dd3a91abadf0f->enter($__internal_f78a6c3b9586a61bd670b29cb1eb04ea2e8b84da97f4d1b1268dd3a91abadf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:datepicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_date_picker_widget_html', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('sonata_type_date_picker_widget', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('sonata_type_datetime_picker_widget_html', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('sonata_type_datetime_picker_widget', $context, $blocks);
        
        $__internal_f78a6c3b9586a61bd670b29cb1eb04ea2e8b84da97f4d1b1268dd3a91abadf0f->leave($__internal_f78a6c3b9586a61bd670b29cb1eb04ea2e8b84da97f4d1b1268dd3a91abadf0f_prof);

    }

    // line 11
    public function block_sonata_type_date_picker_widget_html($context, array $blocks = array())
    {
        $__internal_fcb9ab4d48b6e4c4c00aa185d8b8188257a624c9eec65e2b690f148b89e354f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb9ab4d48b6e4c4c00aa185d8b8188257a624c9eec65e2b690f148b89e354f5->enter($__internal_fcb9ab4d48b6e4c4c00aa185d8b8188257a624c9eec65e2b690f148b89e354f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataCoreBundle:Form:datepicker.html.twig"));

        // line 12
        echo "    ";
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 13
            echo "        <div class='input-group date' id='dp_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "'>
    ";
        }
        // line 15
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-date-format" => (isset($context["moment_format"]) ? $context["moment_format"] : $this->getContext($context, "moment_format"))));
        // line 16
        echo "    ";
        $this->displayBlock("date_widget", $context, $blocks);
        echo "
    ";
        // line 17
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 18
            echo "            <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    ";
        }
        
        $__internal_fcb9ab4d48b6e4c4c00aa185d8b8188257a624c9eec65e2b690f148b89e354f5->leave($__internal_fcb9ab4d48b6e4c4c00aa185d8b8188257a624c9eec65e2b690f148b89e354f5_prof);

    }

    // line 23
    public function block_sonata_type_date_picker_widget($context, array $blocks = array())
    {
        $__internal_40710115fe3cde6366e19ec14c1c7db6d92607e115bc57b0bdc4d3b38a5c5f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40710115fe3cde6366e19ec14c1c7db6d92607e115bc57b0bdc4d3b38a5c5f9b->enter($__internal_40710115fe3cde6366e19ec14c1c7db6d92607e115bc57b0bdc4d3b38a5c5f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataCoreBundle:Form:datepicker.html.twig"));

        // line 24
        echo "    ";
        ob_start();
        // line 25
        echo "        ";
        if ((isset($context["wrap_fields_with_addons"]) ? $context["wrap_fields_with_addons"] : $this->getContext($context, "wrap_fields_with_addons"))) {
            // line 26
            echo "            <div class=\"input-group\">
                ";
            // line 27
            $this->displayBlock("sonata_type_date_picker_widget_html", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 30
            echo "            ";
            $this->displayBlock("sonata_type_date_picker_widget_html", $context, $blocks);
            echo "
        ";
        }
        // line 32
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#";
        // line 34
        echo (((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) ? ("dp_") : (""));
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').datetimepicker(";
        echo twig_jsonencode_filter((isset($context["dp_options"]) ? $context["dp_options"] : $this->getContext($context, "dp_options")));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_40710115fe3cde6366e19ec14c1c7db6d92607e115bc57b0bdc4d3b38a5c5f9b->leave($__internal_40710115fe3cde6366e19ec14c1c7db6d92607e115bc57b0bdc4d3b38a5c5f9b_prof);

    }

    // line 40
    public function block_sonata_type_datetime_picker_widget_html($context, array $blocks = array())
    {
        $__internal_dc5acfdce869c65602f636c3b4e5a9f0d4fb690aad2b4be8bffd9d2a8da71a7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5acfdce869c65602f636c3b4e5a9f0d4fb690aad2b4be8bffd9d2a8da71a7f->enter($__internal_dc5acfdce869c65602f636c3b4e5a9f0d4fb690aad2b4be8bffd9d2a8da71a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataCoreBundle:Form:datepicker.html.twig"));

        // line 41
        echo "    ";
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 42
            echo "        <div class='input-group date' id='dtp_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "'>
    ";
        }
        // line 44
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-date-format" => (isset($context["moment_format"]) ? $context["moment_format"] : $this->getContext($context, "moment_format"))));
        // line 45
        echo "    ";
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
    ";
        // line 46
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 47
            echo "          <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    ";
        }
        
        $__internal_dc5acfdce869c65602f636c3b4e5a9f0d4fb690aad2b4be8bffd9d2a8da71a7f->leave($__internal_dc5acfdce869c65602f636c3b4e5a9f0d4fb690aad2b4be8bffd9d2a8da71a7f_prof);

    }

    // line 52
    public function block_sonata_type_datetime_picker_widget($context, array $blocks = array())
    {
        $__internal_bb21126e8f92315eff06465d6359bea273c97188cbbf8f43dc227e1f72dbccdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb21126e8f92315eff06465d6359bea273c97188cbbf8f43dc227e1f72dbccdc->enter($__internal_bb21126e8f92315eff06465d6359bea273c97188cbbf8f43dc227e1f72dbccdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataCoreBundle:Form:datepicker.html.twig"));

        // line 53
        echo "    ";
        ob_start();
        // line 54
        echo "        ";
        if ((isset($context["wrap_fields_with_addons"]) ? $context["wrap_fields_with_addons"] : $this->getContext($context, "wrap_fields_with_addons"))) {
            // line 55
            echo "            <div class=\"input-group\">
                ";
            // line 56
            $this->displayBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
            echo "
            </div>
        ";
        } else {
            // line 59
            echo "            ";
            $this->displayBlock("sonata_type_datetime_picker_widget_html", $context, $blocks);
            echo "
        ";
        }
        // line 61
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#";
        // line 63
        echo (((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) ? ("dtp_") : (""));
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').datetimepicker(";
        echo twig_jsonencode_filter((isset($context["dp_options"]) ? $context["dp_options"] : $this->getContext($context, "dp_options")));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bb21126e8f92315eff06465d6359bea273c97188cbbf8f43dc227e1f72dbccdc->leave($__internal_bb21126e8f92315eff06465d6359bea273c97188cbbf8f43dc227e1f72dbccdc_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:datepicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  195 => 63,  191 => 61,  185 => 59,  179 => 56,  176 => 55,  173 => 54,  170 => 53,  164 => 52,  154 => 47,  152 => 46,  147 => 45,  144 => 44,  138 => 42,  135 => 41,  129 => 40,  114 => 34,  110 => 32,  104 => 30,  98 => 27,  95 => 26,  92 => 25,  89 => 24,  83 => 23,  73 => 18,  71 => 17,  66 => 16,  63 => 15,  57 => 13,  54 => 12,  48 => 11,  41 => 52,  38 => 51,  36 => 40,  33 => 39,  31 => 23,  28 => 22,  26 => 11,);
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
{% block sonata_type_date_picker_widget_html %}
    {% if datepicker_use_button %}
        <div class='input-group date' id='dp_{{ id }}'>
    {% endif %}
    {% set attr = attr|merge({'data-date-format': moment_format}) %}
    {{ block('date_widget') }}
    {% if datepicker_use_button %}
            <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    {% endif %}
{% endblock sonata_type_date_picker_widget_html %}

{% block sonata_type_date_picker_widget %}
    {% spaceless %}
        {% if wrap_fields_with_addons %}
            <div class=\"input-group\">
                {{ block('sonata_type_date_picker_widget_html') }}
            </div>
        {% else %}
            {{ block('sonata_type_date_picker_widget_html') }}
        {% endif %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#{{ datepicker_use_button ? 'dp_' : '' }}{{ id }}').datetimepicker({{ dp_options|json_encode|raw }});
            });
        </script>
    {% endspaceless %}
{% endblock sonata_type_date_picker_widget %}

{% block sonata_type_datetime_picker_widget_html %}
    {% if datepicker_use_button %}
        <div class='input-group date' id='dtp_{{ id }}'>
    {% endif %}
    {% set attr = attr|merge({'data-date-format': moment_format}) %}
    {{ block('datetime_widget') }}
    {% if datepicker_use_button %}
          <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
        </div>
    {% endif %}
{% endblock sonata_type_datetime_picker_widget_html %}

{% block sonata_type_datetime_picker_widget %}
    {% spaceless %}
        {% if wrap_fields_with_addons %}
            <div class=\"input-group\">
                {{ block('sonata_type_datetime_picker_widget_html') }}
            </div>
        {% else %}
            {{ block('sonata_type_datetime_picker_widget_html') }}
        {% endif %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#{{ datepicker_use_button ? 'dtp_' : '' }}{{ id }}').datetimepicker({{ dp_options|json_encode|raw }});
            });
        </script>
    {% endspaceless %}
{% endblock sonata_type_datetime_picker_widget %}
", "SonataCoreBundle:Form:datepicker.html.twig", "/var/www/html/administration/vendor/sonata-project/core-bundle/Resources/views/Form/datepicker.html.twig");
    }
}
