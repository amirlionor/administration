<?php

/* SonataAdminBundle:CRUD:base_show_macro.html.twig */
class __TwigTemplate_d5ff9aa5df8cad733cbf9df43e239fd42d00c2bbbcf5d5a4476662c8417ed774 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_row' => array($this, 'block_field_row'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ba58d0db26af9584ef15e786b42a3d6b86a69519b00a1501201342bed5cfdae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba58d0db26af9584ef15e786b42a3d6b86a69519b00a1501201342bed5cfdae->enter($__internal_6ba58d0db26af9584ef15e786b42a3d6b86a69519b00a1501201342bed5cfdae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_macro.html.twig"));

        // line 6
        echo "
";
        // line 7
        $this->displayBlock('field_row', $context, $blocks);
        
        $__internal_6ba58d0db26af9584ef15e786b42a3d6b86a69519b00a1501201342bed5cfdae->leave($__internal_6ba58d0db26af9584ef15e786b42a3d6b86a69519b00a1501201342bed5cfdae_prof);

    }

    public function block_field_row($context, array $blocks = array())
    {
        $__internal_0255f5c791a974e24eed69e61b2d2c30c1de9c0a2800801f79c66bd657199148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0255f5c791a974e24eed69e61b2d2c30c1de9c0a2800801f79c66bd657199148->enter($__internal_0255f5c791a974e24eed69e61b2d2c30c1de9c0a2800801f79c66bd657199148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:base_show_macro.html.twig"));

        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 9
            echo "        ";
            $context["show_group"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()), $context["code"], array(), "array");
            // line 10
            echo "
        <div class=\"";
            // line 11
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo (((isset($context["no_padding"]) ? $context["no_padding"] : $this->getContext($context, "no_padding"))) ? ("nopadding") : (""));
            echo "\">
            <div class=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "box_class", array()), "html", null, true);
            echo "\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
            // line 15
            $this->displayBlock('show_title', $context, $blocks);
            // line 18
            echo "                    </h4>
                </div>
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\">
                        <tbody>
                        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "fields", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 24
                echo "                            ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 31
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_0255f5c791a974e24eed69e61b2d2c30c1de9c0a2800801f79c66bd657199148->leave($__internal_0255f5c791a974e24eed69e61b2d2c30c1de9c0a2800801f79c66bd657199148_prof);

    }

    // line 15
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_1135a88878293e66ac380a8a7e4cce10e75d1a2d4471d57bd18ae442ae90616b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1135a88878293e66ac380a8a7e4cce10e75d1a2d4471d57bd18ae442ae90616b->enter($__internal_1135a88878293e66ac380a8a7e4cce10e75d1a2d4471d57bd18ae442ae90616b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:base_show_macro.html.twig"));

        // line 16
        echo "                            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "name", array()), array(), (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "translation_domain", array())) ? ($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "translation_domain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        echo "
                        ";
        
        $__internal_1135a88878293e66ac380a8a7e4cce10e75d1a2d4471d57bd18ae442ae90616b->leave($__internal_1135a88878293e66ac380a8a7e4cce10e75d1a2d4471d57bd18ae442ae90616b_prof);

    }

    // line 24
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_bf354103fa377641997bb6aeea98a8883bd2828968aa6802e8487083a2254336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf354103fa377641997bb6aeea98a8883bd2828968aa6802e8487083a2254336->enter($__internal_bf354103fa377641997bb6aeea98a8883bd2828968aa6802e8487083a2254336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle:CRUD:base_show_macro.html.twig"));

        // line 25
        echo "                                <tr class=\"sonata-ba-view-container\">
                                    ";
        // line 26
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 27
            echo "                                        ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
            echo "
                                    ";
        }
        // line 29
        echo "                                </tr>
                            ";
        
        $__internal_bf354103fa377641997bb6aeea98a8883bd2828968aa6802e8487083a2254336->leave($__internal_bf354103fa377641997bb6aeea98a8883bd2828968aa6802e8487083a2254336_prof);

    }

    // line 1
    public function getrender_groups($__admin__ = null, $__object__ = null, $__elements__ = null, $__groups__ = null, $__has_tab__ = null, $__no_padding__ = false)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "object" => $__object__,
            "elements" => $__elements__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
            "no_padding" => $__no_padding__,
            "varargs" => func_num_args() > 6 ? array_slice(func_get_args(), 6) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a02864f94b398ef2553631a50253914c4b6660a94e6908d2d2c4646835e3edf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_a02864f94b398ef2553631a50253914c4b6660a94e6908d2d2c4646835e3edf6->enter($__internal_a02864f94b398ef2553631a50253914c4b6660a94e6908d2d2c4646835e3edf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "SonataAdminBundle:CRUD:base_show_macro.html.twig"));

            // line 2
            echo "    <div class=\"row\">
        ";
            // line 3
            $this->displayBlock("field_row", $context, $blocks);
            echo "
    </div>
";
            
            $__internal_a02864f94b398ef2553631a50253914c4b6660a94e6908d2d2c4646835e3edf6->leave($__internal_a02864f94b398ef2553631a50253914c4b6660a94e6908d2d2c4646835e3edf6_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 3,  204 => 2,  184 => 1,  176 => 29,  170 => 27,  168 => 26,  165 => 25,  159 => 24,  149 => 16,  143 => 15,  119 => 32,  105 => 31,  102 => 24,  85 => 23,  78 => 18,  76 => 15,  70 => 12,  64 => 11,  61 => 10,  58 => 9,  40 => 8,  28 => 7,  25 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro render_groups(admin, object, elements, groups, has_tab, no_padding = false) %}
    <div class=\"row\">
        {{ block('field_row') }}
    </div>
{% endmacro %}

{% block field_row %}
    {% for code in groups %}
        {% set show_group = admin.showgroups[code] %}

        <div class=\"{{ show_group.class|default('col-md-12') }} {{ no_padding ? 'nopadding' }}\">
            <div class=\"{{ show_group.box_class }}\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        {% block show_title %}
                            {{ show_group.name|trans({}, show_group.translation_domain ?: admin.translationDomain) }}
                        {% endblock %}
                    </h4>
                </div>
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\">
                        <tbody>
                        {% for field_name in show_group.fields %}
                            {% block show_field %}
                                <tr class=\"sonata-ba-view-container\">
                                    {% if elements[field_name] is defined %}
                                        {{ elements[field_name]|render_view_element(object)}}
                                    {% endif %}
                                </tr>
                            {% endblock %}
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    {% endfor %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_macro.html.twig", "/var/www/html/administration/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show_macro.html.twig");
    }
}
