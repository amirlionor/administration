<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_a2d4a9039caf8d290cd2ee49db24054c923b31993c0e9a52432e38bac0dfcf0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_javascript_config' => array($this, 'block_sonata_javascript_config'),
            'sonata_javascript_pool' => array($this, 'block_sonata_javascript_pool'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_top_nav_menu_add_block' => array($this, 'block_sonata_top_nav_menu_add_block'),
            'sonata_top_nav_menu_user_block' => array($this, 'block_sonata_top_nav_menu_user_block'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'side_bar_after_nav_content' => array($this, 'block_side_bar_after_nav_content'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content_actions_wrappers' => array($this, 'block_sonata_admin_content_actions_wrappers'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
            'bootlint' => array($this, 'block_bootlint'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_126e956041f0ed3aaeebde737f447c27dd06fdff60c7234760434f38c3dd669c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126e956041f0ed3aaeebde737f447c27dd06fdff60c7234760434f38c3dd669c->enter($__internal_126e956041f0ed3aaeebde737f447c27dd06fdff60c7234760434f38c3dd669c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::standard_layout.html.twig"));

        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_tab_menu"] = $this->renderBlock("tab_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        $context["_navbar_title"] = $this->renderBlock("navbar_title", $context, $blocks);
        // line 22
        $context["_list_filters_actions"] = $this->renderBlock("list_filters_actions", $context, $blocks);
        // line 23
        echo "
<!DOCTYPE html>
<html ";
        // line 25
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 27
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 32
        echo "
        ";
        // line 33
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
        ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "
        <title>
        ";
        // line 85
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 111
        echo "        </title>
    </head>
    <body ";
        // line 113
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">

    <div class=\"wrapper\">

        ";
        // line 117
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 216
        echo "
        ";
        // line 217
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 351
        echo "    </div>

    ";
        // line 353
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_bootlint"), "method")) {
            // line 354
            echo "        ";
            $this->displayBlock('bootlint', $context, $blocks);
            // line 360
            echo "    ";
        }
        // line 361
        echo "
    </body>
</html>
";
        
        $__internal_126e956041f0ed3aaeebde737f447c27dd06fdff60c7234760434f38c3dd669c->leave($__internal_126e956041f0ed3aaeebde737f447c27dd06fdff60c7234760434f38c3dd669c_prof);

    }

    // line 25
    public function block_html_attributes($context, array $blocks = array())
    {
        $__internal_1b2c5976da2a0e5a7bbdafe494fb88273d06616d846deb7df5f20992935e75e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2c5976da2a0e5a7bbdafe494fb88273d06616d846deb7df5f20992935e75e7->enter($__internal_1b2c5976da2a0e5a7bbdafe494fb88273d06616d846deb7df5f20992935e75e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        echo "class=\"no-js\"";
        
        $__internal_1b2c5976da2a0e5a7bbdafe494fb88273d06616d846deb7df5f20992935e75e7->leave($__internal_1b2c5976da2a0e5a7bbdafe494fb88273d06616d846deb7df5f20992935e75e7_prof);

    }

    // line 27
    public function block_meta_tags($context, array $blocks = array())
    {
        $__internal_97013f340a16ea522c60985594822050956241abdfc4c4f2cbdf97169e26730e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97013f340a16ea522c60985594822050956241abdfc4c4f2cbdf97169e26730e->enter($__internal_97013f340a16ea522c60985594822050956241abdfc4c4f2cbdf97169e26730e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 28
        echo "            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
        
        $__internal_97013f340a16ea522c60985594822050956241abdfc4c4f2cbdf97169e26730e->leave($__internal_97013f340a16ea522c60985594822050956241abdfc4c4f2cbdf97169e26730e_prof);

    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3265fb8fc19ced3223685038ce5872b40e6c8f4c414cdf71f03240f3459cbd61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3265fb8fc19ced3223685038ce5872b40e6c8f4c414cdf71f03240f3459cbd61->enter($__internal_3265fb8fc19ced3223685038ce5872b40e6c8f4c414cdf71f03240f3459cbd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 34
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 35
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\">
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        ";
        
        $__internal_3265fb8fc19ced3223685038ce5872b40e6c8f4c414cdf71f03240f3459cbd61->leave($__internal_3265fb8fc19ced3223685038ce5872b40e6c8f4c414cdf71f03240f3459cbd61_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6fb718853728a15892bbb06845853ab41cdbe4815ae48bcc02aefc58c5dafe47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb718853728a15892bbb06845853ab41cdbe4815ae48bcc02aefc58c5dafe47->enter($__internal_6fb718853728a15892bbb06845853ab41cdbe4815ae48bcc02aefc58c5dafe47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 40
        echo "            ";
        $this->displayBlock('sonata_javascript_config', $context, $blocks);
        // line 60
        echo "
            ";
        // line 61
        $this->displayBlock('sonata_javascript_pool', $context, $blocks);
        // line 66
        echo "
            ";
        // line 67
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array());
        // line 68
        echo "            ";
        // line 69
        echo "            ";
        if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
            // line 70
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/moment/locale/" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
            echo "\"></script>
            ";
        }
        // line 72
        echo "
            ";
        // line 74
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            // line 75
            echo "                ";
            if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 76
            echo "
                ";
            // line 78
            echo "                ";
            if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 79
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . twig_replace_filter((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 81
            echo "            ";
        }
        // line 82
        echo "        ";
        
        $__internal_6fb718853728a15892bbb06845853ab41cdbe4815ae48bcc02aefc58c5dafe47->leave($__internal_6fb718853728a15892bbb06845853ab41cdbe4815ae48bcc02aefc58c5dafe47_prof);

    }

    // line 40
    public function block_sonata_javascript_config($context, array $blocks = array())
    {
        $__internal_94f1f40b0e3cb0460436282b3f838d859b32d909695790a983c6d46b4dbcd768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f1f40b0e3cb0460436282b3f838d859b32d909695790a983c6d46b4dbcd768->enter($__internal_94f1f40b0e3cb0460436282b3f838d859b32d909695790a983c6d46b4dbcd768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 41
        echo "                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: ";
        // line 43
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "confirm_exit"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_SELECT2: ";
        // line 44
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_select2"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_ICHECK: ";
        // line 45
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_icheck"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                        USE_STICKYFORMS: ";
        // line 46
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "use_stickyforms"), "method")) {
            echo "true";
        } else {
            echo "false";
        }
        // line 47
        echo "                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT:  '";
        // line 49
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            ";
        
        $__internal_94f1f40b0e3cb0460436282b3f838d859b32d909695790a983c6d46b4dbcd768->leave($__internal_94f1f40b0e3cb0460436282b3f838d859b32d909695790a983c6d46b4dbcd768_prof);

    }

    // line 61
    public function block_sonata_javascript_pool($context, array $blocks = array())
    {
        $__internal_54abb097d096a5398ad43f106ab4ff4d3845b2c2bb90dd548bd90b9c1d79d015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54abb097d096a5398ad43f106ab4ff4d3845b2c2bb90dd548bd90b9c1d79d015->enter($__internal_54abb097d096a5398ad43f106ab4ff4d3845b2c2bb90dd548bd90b9c1d79d015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 62
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "javascripts", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
            // line 63
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["javascript"]), "html", null, true);
            echo "\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "            ";
        
        $__internal_54abb097d096a5398ad43f106ab4ff4d3845b2c2bb90dd548bd90b9c1d79d015->leave($__internal_54abb097d096a5398ad43f106ab4ff4d3845b2c2bb90dd548bd90b9c1d79d015_prof);

    }

    // line 85
    public function block_sonata_head_title($context, array $blocks = array())
    {
        $__internal_dc97c183a1ce9bf94f90f37c8558d1142a8f03c2fed0f451695a13b1e3cb0eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc97c183a1ce9bf94f90f37c8558d1142a8f03c2fed0f451695a13b1e3cb0eac->enter($__internal_dc97c183a1ce9bf94f90f37c8558d1142a8f03c2fed0f451695a13b1e3cb0eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 86
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 88
        if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title")))) {
            // line 89
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 91
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 92
                echo "                    -
                    ";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs_builder"]) ? $context["breadcrumbs_builder"] : $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 1 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 94
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 95
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 96
                            echo "                                &gt;
                            ";
                        }
                        // line 99
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 100
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 101
                        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
                            // line 102
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
                        }
                        // line 105
                        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                        echo "
                        ";
                    }
                    // line 107
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "                ";
            }
            // line 109
            echo "            ";
        }
        // line 110
        echo "        ";
        
        $__internal_dc97c183a1ce9bf94f90f37c8558d1142a8f03c2fed0f451695a13b1e3cb0eac->leave($__internal_dc97c183a1ce9bf94f90f37c8558d1142a8f03c2fed0f451695a13b1e3cb0eac_prof);

    }

    // line 113
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_ddb4b41a375dfbd4feba6caa54267725285737f5e79bccc354d7e967d37e6ca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb4b41a375dfbd4feba6caa54267725285737f5e79bccc354d7e967d37e6ca0->enter($__internal_ddb4b41a375dfbd4feba6caa54267725285737f5e79bccc354d7e967d37e6ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        echo "class=\"sonata-bc skin-black fixed\"";
        
        $__internal_ddb4b41a375dfbd4feba6caa54267725285737f5e79bccc354d7e967d37e6ca0->leave($__internal_ddb4b41a375dfbd4feba6caa54267725285737f5e79bccc354d7e967d37e6ca0_prof);

    }

    // line 117
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_5a71fb34aef320963c0e9dc68b1a906f743e3e8ed08015b62a67001dd81d6e2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a71fb34aef320963c0e9dc68b1a906f743e3e8ed08015b62a67001dd81d6e2b->enter($__internal_5a71fb34aef320963c0e9dc68b1a906f743e3e8ed08015b62a67001dd81d6e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 118
        echo "            <header class=\"main-header\">
                ";
        // line 119
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 126
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 138
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 214
        echo "            </header>
        ";
        
        $__internal_5a71fb34aef320963c0e9dc68b1a906f743e3e8ed08015b62a67001dd81d6e2b->leave($__internal_5a71fb34aef320963c0e9dc68b1a906f743e3e8ed08015b62a67001dd81d6e2b_prof);

    }

    // line 119
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        $__internal_638d2fd868fd71299016bba4741e1d2f41976214b4df78f73c69a2a6ae8c2af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_638d2fd868fd71299016bba4741e1d2f41976214b4df78f73c69a2a6ae8c2af2->enter($__internal_638d2fd868fd71299016bba4741e1d2f41976214b4df78f73c69a2a6ae8c2af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 120
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
        
        $__internal_638d2fd868fd71299016bba4741e1d2f41976214b4df78f73c69a2a6ae8c2af2->leave($__internal_638d2fd868fd71299016bba4741e1d2f41976214b4df78f73c69a2a6ae8c2af2_prof);

    }

    // line 126
    public function block_logo($context, array $blocks = array())
    {
        $__internal_3bdf21fd89418d46c5546559d69e11b788f89b9f96721cd53f30664715b15b3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bdf21fd89418d46c5546559d69e11b788f89b9f96721cd53f30664715b15b3a->enter($__internal_3bdf21fd89418d46c5546559d69e11b788f89b9f96721cd53f30664715b15b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 127
        echo "                    ";
        ob_start();
        // line 128
        echo "                        <a class=\"logo\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                            ";
        // line 129
        if ((("single_image" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 130
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                            ";
        }
        // line 132
        echo "                            ";
        if ((("single_text" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 133
            echo "                                <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                            ";
        }
        // line 135
        echo "                        </a>
                    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 137
        echo "                ";
        
        $__internal_3bdf21fd89418d46c5546559d69e11b788f89b9f96721cd53f30664715b15b3a->leave($__internal_3bdf21fd89418d46c5546559d69e11b788f89b9f96721cd53f30664715b15b3a_prof);

    }

    // line 138
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_404cb30705a8a1a15e510d4507a6540eff0aec9fa5f1a5ddb8bd7452deeee6e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404cb30705a8a1a15e510d4507a6540eff0aec9fa5f1a5ddb8bd7452deeee6e9->enter($__internal_404cb30705a8a1a15e510d4507a6540eff0aec9fa5f1a5ddb8bd7452deeee6e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 139
        echo "                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            ";
        // line 145
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 184
        echo "                        </div>

                        ";
        // line 186
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 212
        echo "                    </nav>
                ";
        
        $__internal_404cb30705a8a1a15e510d4507a6540eff0aec9fa5f1a5ddb8bd7452deeee6e9->leave($__internal_404cb30705a8a1a15e510d4507a6540eff0aec9fa5f1a5ddb8bd7452deeee6e9_prof);

    }

    // line 145
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_482da57bddf6c1f891564a4d9d26f61950c2bdd5e6ddb385010d2ba86bbc4c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_482da57bddf6c1f891564a4d9d26f61950c2bdd5e6ddb385010d2ba86bbc4c27->enter($__internal_482da57bddf6c1f891564a4d9d26f61950c2bdd5e6ddb385010d2ba86bbc4c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 146
        echo "                                <div class=\"hidden-xs\">
                                    ";
        // line 147
        if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 148
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 149
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 150
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 151
                    echo "                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs_builder"]) ? $context["breadcrumbs_builder"] : $this->getContext($context, "breadcrumbs_builder")), "breadcrumbs", array(0 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 1 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 152
                        $context["translation_domain"] = $this->getAttribute($context["menu"], "extra", array(0 => "translation_domain", 1 => "messages"), "method");
                        // line 153
                        $context["label"] = $this->getAttribute($context["menu"], "label", array());
                        // line 154
                        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
                            // line 155
                            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute($context["menu"], "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
                        }
                        // line 158
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 159
                            echo "                                                            <li>
                                                                ";
                            // line 160
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 161
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">
                                                                        ";
                                // line 162
                                if ($this->getAttribute($context["menu"], "extra", array(0 => "safe_label", 1 => true), "method")) {
                                    // line 163
                                    echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
                                } else {
                                    // line 165
                                    echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                                }
                                // line 167
                                echo "                                                                    </a>
                                                                ";
                            } else {
                                // line 169
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                                echo "
                                                                ";
                            }
                            // line 171
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 173
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 175
                        echo "                                                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 176
                    echo "                                                ";
                }
                // line 177
                echo "                                            ";
            } else {
                // line 178
                echo "                                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 180
            echo "                                        </ol>
                                    ";
        }
        // line 182
        echo "                                </div>
                            ";
        
        $__internal_482da57bddf6c1f891564a4d9d26f61950c2bdd5e6ddb385010d2ba86bbc4c27->leave($__internal_482da57bddf6c1f891564a4d9d26f61950c2bdd5e6ddb385010d2ba86bbc4c27_prof);

    }

    // line 186
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        $__internal_ecb19bc3bbe98d9728a12c36852c973bbaebf70a7c7b86369813fc31ff7983fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb19bc3bbe98d9728a12c36852c973bbaebf70a7c7b86369813fc31ff7983fe->enter($__internal_ecb19bc3bbe98d9728a12c36852c973bbaebf70a7c7b86369813fc31ff7983fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 187
        echo "                            ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 188
            echo "                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        ";
            // line 190
            $this->displayBlock('sonata_top_nav_menu_add_block', $context, $blocks);
            // line 198
            echo "                                        ";
            $this->displayBlock('sonata_top_nav_menu_user_block', $context, $blocks);
            // line 208
            echo "                                    </ul>
                                </div>
                            ";
        }
        // line 211
        echo "                        ";
        
        $__internal_ecb19bc3bbe98d9728a12c36852c973bbaebf70a7c7b86369813fc31ff7983fe->leave($__internal_ecb19bc3bbe98d9728a12c36852c973bbaebf70a7c7b86369813fc31ff7983fe_prof);

    }

    // line 190
    public function block_sonata_top_nav_menu_add_block($context, array $blocks = array())
    {
        $__internal_5872afa2e2839434b72fe0ce0e0d1bbe475edf00093addcc9790295406f9be6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5872afa2e2839434b72fe0ce0e0d1bbe475edf00093addcc9790295406f9be6d->enter($__internal_5872afa2e2839434b72fe0ce0e0d1bbe475edf00093addcc9790295406f9be6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 191
        echo "                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                ";
        // line 195
        $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "add_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 195)->display($context);
        // line 196
        echo "                                            </li>
                                        ";
        
        $__internal_5872afa2e2839434b72fe0ce0e0d1bbe475edf00093addcc9790295406f9be6d->leave($__internal_5872afa2e2839434b72fe0ce0e0d1bbe475edf00093addcc9790295406f9be6d_prof);

    }

    // line 198
    public function block_sonata_top_nav_menu_user_block($context, array $blocks = array())
    {
        $__internal_f984a58f46742e63ab93ee01fba3acbfe7834417770d88586b7d2c97d3323ff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f984a58f46742e63ab93ee01fba3acbfe7834417770d88586b7d2c97d3323ff6->enter($__internal_f984a58f46742e63ab93ee01fba3acbfe7834417770d88586b7d2c97d3323ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 199
        echo "                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    ";
        // line 204
        $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::standard_layout.html.twig", 204)->display($context);
        // line 205
        echo "                                                </ul>
                                            </li>
                                        ";
        
        $__internal_f984a58f46742e63ab93ee01fba3acbfe7834417770d88586b7d2c97d3323ff6->leave($__internal_f984a58f46742e63ab93ee01fba3acbfe7834417770d88586b7d2c97d3323ff6_prof);

    }

    // line 217
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_021a901252d227e11915cc4c670e860399e8738dd8f66696731c47264960c049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_021a901252d227e11915cc4c670e860399e8738dd8f66696731c47264960c049->enter($__internal_021a901252d227e11915cc4c670e860399e8738dd8f66696731c47264960c049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 218
        echo "            ";
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 250
        echo "
            <div class=\"content-wrapper\">
                ";
        // line 252
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 349
        echo "            </div>
        ";
        
        $__internal_021a901252d227e11915cc4c670e860399e8738dd8f66696731c47264960c049->leave($__internal_021a901252d227e11915cc4c670e860399e8738dd8f66696731c47264960c049_prof);

    }

    // line 218
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_10fbb6d85893d0591e8549ab77b10363fcd01ac13e8fa87a8c804fc0baa55d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10fbb6d85893d0591e8549ab77b10363fcd01ac13e8fa87a8c804fc0baa55d65->enter($__internal_10fbb6d85893d0591e8549ab77b10363fcd01ac13e8fa87a8c804fc0baa55d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 219
        echo "                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        ";
        // line 221
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 247
        echo "                    </section>
                </aside>
            ";
        
        $__internal_10fbb6d85893d0591e8549ab77b10363fcd01ac13e8fa87a8c804fc0baa55d65->leave($__internal_10fbb6d85893d0591e8549ab77b10363fcd01ac13e8fa87a8c804fc0baa55d65_prof);

    }

    // line 221
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        $__internal_d37c498269da3aa04faf8b7bfc44f631b28e7aff4dd9b7bd23bbdd6bcd815b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d37c498269da3aa04faf8b7bfc44f631b28e7aff4dd9b7bd23bbdd6bcd815b44->enter($__internal_d37c498269da3aa04faf8b7bfc44f631b28e7aff4dd9b7bd23bbdd6bcd815b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 222
        echo "                            ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 234
        echo "
                            ";
        // line 235
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 236
        echo "                            ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 239
        echo "                            ";
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 246
        echo "                        ";
        
        $__internal_d37c498269da3aa04faf8b7bfc44f631b28e7aff4dd9b7bd23bbdd6bcd815b44->leave($__internal_d37c498269da3aa04faf8b7bfc44f631b28e7aff4dd9b7bd23bbdd6bcd815b44_prof);

    }

    // line 222
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        $__internal_80073ab4e2917792c45bff27b34e92b1599665e0ab2c591c19bbd82e843c2c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80073ab4e2917792c45bff27b34e92b1599665e0ab2c591c19bbd82e843c2c88->enter($__internal_80073ab4e2917792c45bff27b34e92b1599665e0ab2c591c19bbd82e843c2c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 223
        echo "                                <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_search");
        echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn btn-flat\" type=\"submit\">
                                                    <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                                </button>
                                            </span>
                                    </div>
                                </form>
                            ";
        
        $__internal_80073ab4e2917792c45bff27b34e92b1599665e0ab2c591c19bbd82e843c2c88->leave($__internal_80073ab4e2917792c45bff27b34e92b1599665e0ab2c591c19bbd82e843c2c88_prof);

    }

    // line 235
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        $__internal_60ff536fc0216c64415f151a901e4d3fd669702e4551161b82da41ee2bce3dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ff536fc0216c64415f151a901e4d3fd669702e4551161b82da41ee2bce3dfd->enter($__internal_60ff536fc0216c64415f151a901e4d3fd669702e4551161b82da41ee2bce3dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        echo " ";
        
        $__internal_60ff536fc0216c64415f151a901e4d3fd669702e4551161b82da41ee2bce3dfd->leave($__internal_60ff536fc0216c64415f151a901e4d3fd669702e4551161b82da41ee2bce3dfd_prof);

    }

    // line 236
    public function block_side_bar_nav($context, array $blocks = array())
    {
        $__internal_e06843c219f1968a5f8dd0918632a2ceaaf8b4121ee85a2612b9359c658368b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e06843c219f1968a5f8dd0918632a2ceaaf8b4121ee85a2612b9359c658368b0->enter($__internal_e06843c219f1968a5f8dd0918632a2ceaaf8b4121ee85a2612b9359c658368b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 237
        echo "                                ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render("sonata_admin_sidebar", array("template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "knp_menu_template"), "method")));
        echo "
                            ";
        
        $__internal_e06843c219f1968a5f8dd0918632a2ceaaf8b4121ee85a2612b9359c658368b0->leave($__internal_e06843c219f1968a5f8dd0918632a2ceaaf8b4121ee85a2612b9359c658368b0_prof);

    }

    // line 239
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        $__internal_19a35e8197e9dbd11f8fa456de367c4fc0c9de436557a5616f7f70fd18383ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a35e8197e9dbd11f8fa456de367c4fc0c9de436557a5616f7f70fd18383ddb->enter($__internal_19a35e8197e9dbd11f8fa456de367c4fc0c9de436557a5616f7f70fd18383ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 240
        echo "                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    ";
        // line 241
        $this->displayBlock('side_bar_after_nav_content', $context, $blocks);
        // line 244
        echo "                                </p>
                            ";
        
        $__internal_19a35e8197e9dbd11f8fa456de367c4fc0c9de436557a5616f7f70fd18383ddb->leave($__internal_19a35e8197e9dbd11f8fa456de367c4fc0c9de436557a5616f7f70fd18383ddb_prof);

    }

    // line 241
    public function block_side_bar_after_nav_content($context, array $blocks = array())
    {
        $__internal_f6e0b06dc1e711404611cefa44787883b8257934b181c6d96e9550e545daffe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e0b06dc1e711404611cefa44787883b8257934b181c6d96e9550e545daffe4->enter($__internal_f6e0b06dc1e711404611cefa44787883b8257934b181c6d96e9550e545daffe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 242
        echo "                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    ";
        
        $__internal_f6e0b06dc1e711404611cefa44787883b8257934b181c6d96e9550e545daffe4->leave($__internal_f6e0b06dc1e711404611cefa44787883b8257934b181c6d96e9550e545daffe4_prof);

    }

    // line 252
    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_7b2d003ba17253ed87d64759827a536f1702feb65ec5654256b48ab6a3847a94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b2d003ba17253ed87d64759827a536f1702feb65ec5654256b48ab6a3847a94->enter($__internal_7b2d003ba17253ed87d64759827a536f1702feb65ec5654256b48ab6a3847a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 253
        echo "                    <section class=\"content-header\">

                        ";
        // line 255
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 309
        echo "                    </section>

                    <section class=\"content\">
                        ";
        // line 312
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 347
        echo "                    </section>
                ";
        
        $__internal_7b2d003ba17253ed87d64759827a536f1702feb65ec5654256b48ab6a3847a94->leave($__internal_7b2d003ba17253ed87d64759827a536f1702feb65ec5654256b48ab6a3847a94_prof);

    }

    // line 255
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        $__internal_7f649f6bb02c6d223906a18e9a9054435b21f7bf3f6bf4eed300982b11e71afb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f649f6bb02c6d223906a18e9a9054435b21f7bf3f6bf4eed300982b11e71afb->enter($__internal_7f649f6bb02c6d223906a18e9a9054435b21f7bf3f6bf4eed300982b11e71afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 256
        echo "                            ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 308
        echo "                        ";
        
        $__internal_7f649f6bb02c6d223906a18e9a9054435b21f7bf3f6bf4eed300982b11e71afb->leave($__internal_7f649f6bb02c6d223906a18e9a9054435b21f7bf3f6bf4eed300982b11e71afb_prof);

    }

    // line 256
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        $__internal_40d36cf031d9eb563a6e6272b37439a0dd04c5e794b1891359f18c1b25e649af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40d36cf031d9eb563a6e6272b37439a0dd04c5e794b1891359f18c1b25e649af->enter($__internal_40d36cf031d9eb563a6e6272b37439a0dd04c5e794b1891359f18c1b25e649af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 257
        echo "                                ";
        if ((( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")))) ||  !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"))))) {
            // line 258
            echo "                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            ";
            // line 260
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 267
            echo "
                                            <div class=\"navbar-collapse\">
                                                <div class=\"navbar-left\">
                                                    ";
            // line 270
            if ( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) {
                // line 271
                echo "                                                        ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                                    ";
            }
            // line 273
            echo "                                                </div>

                                                ";
            // line 275
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 276
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 277
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 278
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 280
                echo "                                                    </div>
                                                ";
            }
            // line 282
            echo "
                                                ";
            // line 283
            $this->displayBlock('sonata_admin_content_actions_wrappers', $context, $blocks);
            // line 299
            echo "
                                                ";
            // line 300
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions")))) {
                // line 301
                echo "                                                    ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"));
                echo "
                                                ";
            }
            // line 303
            echo "                                            </div>
                                        </div>
                                    </nav>
                                ";
        }
        // line 307
        echo "                            ";
        
        $__internal_40d36cf031d9eb563a6e6272b37439a0dd04c5e794b1891359f18c1b25e649af->leave($__internal_40d36cf031d9eb563a6e6272b37439a0dd04c5e794b1891359f18c1b25e649af_prof);

    }

    // line 260
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        $__internal_205a55c5ab83b6e4b4a290a0b5440773e8c4ce454c94697bf73b5db838c2611c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205a55c5ab83b6e4b4a290a0b5440773e8c4ce454c94697bf73b5db838c2611c->enter($__internal_205a55c5ab83b6e4b4a290a0b5440773e8c4ce454c94697bf73b5db838c2611c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 261
        echo "                                                ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title")))) {
            // line 262
            echo "                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">";
            // line 263
            echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"));
            echo "</a>
                                                    </div>
                                                ";
        }
        // line 266
        echo "                                            ";
        
        $__internal_205a55c5ab83b6e4b4a290a0b5440773e8c4ce454c94697bf73b5db838c2611c->leave($__internal_205a55c5ab83b6e4b4a290a0b5440773e8c4ce454c94697bf73b5db838c2611c_prof);

    }

    // line 283
    public function block_sonata_admin_content_actions_wrappers($context, array $blocks = array())
    {
        $__internal_90e6b145df8c58872c0a6cc994d112697ba67a891aa7acaf9f616a077a31d3f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e6b145df8c58872c0a6cc994d112697ba67a891aa7acaf9f616a077a31d3f7->enter($__internal_90e6b145df8c58872c0a6cc994d112697ba67a891aa7acaf9f616a077a31d3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 284
        echo "                                                    ";
        if ( !twig_test_empty(trim(twig_replace_filter((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
            // line 285
            echo "                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        ";
            // line 286
            if ((twig_length_filter($this->env, twig_split_filter($this->env, (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), "</a>")) > 2)) {
                // line 287
                echo "                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 288
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    ";
                // line 290
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                                </ul>
                                                            </li>
                                                        ";
            } else {
                // line 294
                echo "                                                            ";
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                        ";
            }
            // line 296
            echo "                                                        </ul>
                                                    ";
        }
        // line 298
        echo "                                                ";
        
        $__internal_90e6b145df8c58872c0a6cc994d112697ba67a891aa7acaf9f616a077a31d3f7->leave($__internal_90e6b145df8c58872c0a6cc994d112697ba67a891aa7acaf9f616a077a31d3f7_prof);

    }

    // line 312
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        $__internal_8b3427fa171cc7a8d2bef941a6956b6c0dde8d8ec471e8a127027cda1a9004cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b3427fa171cc7a8d2bef941a6956b6c0dde8d8ec471e8a127027cda1a9004cb->enter($__internal_8b3427fa171cc7a8d2bef941a6956b6c0dde8d8ec471e8a127027cda1a9004cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 313
        echo "
                            ";
        // line 314
        $this->displayBlock('notice', $context, $blocks);
        // line 317
        echo "
                            ";
        // line 318
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview")))) {
            // line 319
            echo "                                <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                            ";
        }
        // line 321
        echo "
                            ";
        // line 322
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content")))) {
            // line 323
            echo "                                <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                            ";
        }
        // line 325
        echo "
                            ";
        // line 326
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show")))) {
            // line 327
            echo "                                <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                            ";
        }
        // line 329
        echo "
                            ";
        // line 330
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form")))) {
            // line 331
            echo "                                <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                            ";
        }
        // line 333
        echo "
                            ";
        // line 334
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 335
            echo "                                ";
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 336
                echo "                                    <div class=\"row\">
                                        ";
                // line 337
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                                    </div>
                                ";
            }
            // line 340
            echo "
                                <div class=\"row\">
                                    ";
            // line 342
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                </div>

                            ";
        }
        // line 346
        echo "                        ";
        
        $__internal_8b3427fa171cc7a8d2bef941a6956b6c0dde8d8ec471e8a127027cda1a9004cb->leave($__internal_8b3427fa171cc7a8d2bef941a6956b6c0dde8d8ec471e8a127027cda1a9004cb_prof);

    }

    // line 314
    public function block_notice($context, array $blocks = array())
    {
        $__internal_1fad37696b8bfb7d67bc7484cb2a210cf2acc4d228bc35063d4fd56b52716908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fad37696b8bfb7d67bc7484cb2a210cf2acc4d228bc35063d4fd56b52716908->enter($__internal_1fad37696b8bfb7d67bc7484cb2a210cf2acc4d228bc35063d4fd56b52716908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 315
        echo "                                ";
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataAdminBundle::standard_layout.html.twig", 315)->display($context);
        // line 316
        echo "                            ";
        
        $__internal_1fad37696b8bfb7d67bc7484cb2a210cf2acc4d228bc35063d4fd56b52716908->leave($__internal_1fad37696b8bfb7d67bc7484cb2a210cf2acc4d228bc35063d4fd56b52716908_prof);

    }

    // line 354
    public function block_bootlint($context, array $blocks = array())
    {
        $__internal_e9ffc32daf834d25df07561a2b0ee3850f8831c1b3dd21c47d3654ccf38741fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9ffc32daf834d25df07561a2b0ee3850f8831c1b3dd21c47d3654ccf38741fb->enter($__internal_e9ffc32daf834d25df07561a2b0ee3850f8831c1b3dd21c47d3654ccf38741fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SonataAdminBundle::standard_layout.html.twig"));

        // line 355
        echo "            ";
        // line 356
        echo "            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        ";
        
        $__internal_e9ffc32daf834d25df07561a2b0ee3850f8831c1b3dd21c47d3654ccf38741fb->leave($__internal_e9ffc32daf834d25df07561a2b0ee3850f8831c1b3dd21c47d3654ccf38741fb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1257 => 356,  1255 => 355,  1249 => 354,  1242 => 316,  1239 => 315,  1233 => 314,  1226 => 346,  1219 => 342,  1215 => 340,  1209 => 337,  1206 => 336,  1203 => 335,  1201 => 334,  1198 => 333,  1192 => 331,  1190 => 330,  1187 => 329,  1181 => 327,  1179 => 326,  1176 => 325,  1170 => 323,  1168 => 322,  1165 => 321,  1159 => 319,  1157 => 318,  1154 => 317,  1152 => 314,  1149 => 313,  1143 => 312,  1136 => 298,  1132 => 296,  1126 => 294,  1119 => 290,  1114 => 288,  1111 => 287,  1109 => 286,  1106 => 285,  1103 => 284,  1097 => 283,  1090 => 266,  1084 => 263,  1081 => 262,  1078 => 261,  1072 => 260,  1065 => 307,  1059 => 303,  1053 => 301,  1051 => 300,  1048 => 299,  1046 => 283,  1043 => 282,  1039 => 280,  1024 => 278,  1020 => 277,  1017 => 276,  1015 => 275,  1011 => 273,  1005 => 271,  1003 => 270,  998 => 267,  996 => 260,  992 => 258,  989 => 257,  983 => 256,  976 => 308,  973 => 256,  967 => 255,  959 => 347,  957 => 312,  952 => 309,  950 => 255,  946 => 253,  940 => 252,  932 => 242,  926 => 241,  918 => 244,  916 => 241,  913 => 240,  907 => 239,  897 => 237,  891 => 236,  879 => 235,  861 => 225,  855 => 223,  849 => 222,  842 => 246,  839 => 239,  836 => 236,  834 => 235,  831 => 234,  828 => 222,  822 => 221,  813 => 247,  811 => 221,  807 => 219,  801 => 218,  793 => 349,  791 => 252,  787 => 250,  784 => 218,  778 => 217,  769 => 205,  767 => 204,  760 => 199,  754 => 198,  746 => 196,  744 => 195,  738 => 191,  732 => 190,  725 => 211,  720 => 208,  717 => 198,  715 => 190,  711 => 188,  708 => 187,  702 => 186,  694 => 182,  690 => 180,  684 => 178,  681 => 177,  678 => 176,  664 => 175,  658 => 173,  654 => 171,  648 => 169,  644 => 167,  641 => 165,  638 => 163,  636 => 162,  631 => 161,  629 => 160,  626 => 159,  624 => 158,  621 => 155,  619 => 154,  617 => 153,  615 => 152,  597 => 151,  594 => 150,  592 => 149,  589 => 148,  587 => 147,  584 => 146,  578 => 145,  570 => 212,  568 => 186,  564 => 184,  562 => 145,  554 => 139,  548 => 138,  541 => 137,  537 => 135,  531 => 133,  528 => 132,  520 => 130,  518 => 129,  513 => 128,  510 => 127,  504 => 126,  493 => 122,  489 => 120,  483 => 119,  475 => 214,  472 => 138,  469 => 126,  467 => 119,  464 => 118,  458 => 117,  446 => 113,  439 => 110,  436 => 109,  433 => 108,  419 => 107,  414 => 105,  411 => 102,  409 => 101,  407 => 100,  405 => 99,  401 => 96,  398 => 95,  395 => 94,  378 => 93,  375 => 92,  372 => 91,  366 => 89,  364 => 88,  358 => 86,  352 => 85,  345 => 65,  336 => 63,  331 => 62,  325 => 61,  307 => 49,  303 => 47,  297 => 46,  289 => 45,  281 => 44,  273 => 43,  269 => 41,  263 => 40,  256 => 82,  253 => 81,  247 => 79,  244 => 78,  241 => 76,  236 => 75,  233 => 74,  230 => 72,  224 => 70,  221 => 69,  219 => 68,  217 => 67,  214 => 66,  212 => 61,  209 => 60,  206 => 40,  200 => 39,  193 => 37,  184 => 35,  179 => 34,  173 => 33,  163 => 28,  157 => 27,  145 => 25,  135 => 361,  132 => 360,  129 => 354,  127 => 353,  123 => 351,  121 => 217,  118 => 216,  116 => 117,  109 => 113,  105 => 111,  103 => 85,  99 => 83,  97 => 39,  94 => 38,  92 => 33,  89 => 32,  87 => 27,  82 => 25,  78 => 23,  76 => 22,  74 => 21,  72 => 20,  70 => 19,  68 => 18,  66 => 17,  64 => 16,  62 => 15,  60 => 14,  58 => 13,  56 => 12,  54 => 11,);
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
{% set _preview              = block('preview') %}
{% set _form                 = block('form') %}
{% set _show                 = block('show') %}
{% set _list_table           = block('list_table') %}
{% set _list_filters         = block('list_filters') %}
{% set _tab_menu             = block('tab_menu') %}
{% set _content              = block('content') %}
{% set _title                = block('title') %}
{% set _breadcrumb           = block('breadcrumb') %}
{% set _actions              = block('actions') %}
{% set _navbar_title         = block('navbar_title') %}
{% set _list_filters_actions = block('list_filters_actions') %}

<!DOCTYPE html>
<html {% block html_attributes %}class=\"no-js\"{% endblock %}>
    <head>
        {% block meta_tags %}
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        {% endblock %}

        {% block stylesheets %}
            {% for stylesheet in sonata_admin.adminPool.getOption('stylesheets', []) %}
                    <link rel=\"stylesheet\" href=\"{{ asset(stylesheet) }}\">
            {% endfor %}
        {% endblock %}

        {% block javascripts %}
            {% block sonata_javascript_config %}
                <script>
                    window.SONATA_CONFIG = {
                        CONFIRM_EXIT: {% if sonata_admin.adminPool.getOption('confirm_exit') %}true{% else %}false{% endif %},
                        USE_SELECT2: {% if sonata_admin.adminPool.getOption('use_select2') %}true{% else %}false{% endif %},
                        USE_ICHECK: {% if sonata_admin.adminPool.getOption('use_icheck') %}true{% else %}false{% endif %},
                        USE_STICKYFORMS: {% if sonata_admin.adminPool.getOption('use_stickyforms') %}true{% else %}false{% endif %}
                    };
                    window.SONATA_TRANSLATIONS = {
                        CONFIRM_EXIT:  '{{ 'confirm_exit'|trans({}, 'SonataAdminBundle')|escape('js') }}'
                    };

                    // http://getbootstrap.com/getting-started/#support-ie10-width
                    if (navigator.userAgent.match(/IEMobile\\/10\\.0/)) {
                        var msViewportStyle = document.createElement('style');
                        msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
                        document.querySelector('head').appendChild(msViewportStyle);
                    }
                </script>
            {% endblock %}

            {% block sonata_javascript_pool %}
                {% for javascript in sonata_admin.adminPool.getOption('javascripts', []) %}
                    <script src=\"{{ asset(javascript) }}\"></script>
                {% endfor %}
            {% endblock %}

            {% set locale = app.request.locale %}
            {# localize moment #}
            {% if locale[:2] != 'en' %}
                <script src=\"{{ asset('bundles/sonatacore/vendor/moment/locale/' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
            {% endif %}

            {# localize select2 #}
            {% if sonata_admin.adminPool.getOption('use_select2') %}
                {% if locale == 'pt' %}{% set locale = 'pt_PT' %}{% endif %}

                {# omit default EN locale #}
                {% if locale[:2] != 'en' %}
                    <script src=\"{{ asset('bundles/sonatacore/vendor/select2/select2_locale_' ~ locale|replace({'_':'-'}) ~ '.js') }}\"></script>
                {% endif %}
            {% endif %}
        {% endblock %}

        <title>
        {% block sonata_head_title %}
            {{ 'Admin'|trans({}, 'SonataAdminBundle') }}

            {% if _title is not empty %}
                {{ _title|raw }}
            {% else %}
                {% if action is defined %}
                    -
                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                        {% if not loop.first %}
                            {%  if loop.index != 2 %}
                                &gt;
                            {% endif %}

                            {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                            {%- set label = menu.label -%}
                            {%- if translation_domain is not same as(false) -%}
                                {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                            {%- endif -%}

                            {{ label }}
                        {% endif %}
                    {% endfor %}
                {% endif %}
            {% endif%}
        {% endblock %}
        </title>
    </head>
    <body {% block body_attributes %}class=\"sonata-bc skin-black fixed\"{% endblock %}>

    <div class=\"wrapper\">

        {% block sonata_header %}
            <header class=\"main-header\">
                {% block sonata_header_noscript_warning %}
                    <noscript>
                        <div class=\"noscript-warning\">
                            {{ 'noscript_warning'|trans({}, 'SonataAdminBundle') }}
                        </div>
                    </noscript>
                {% endblock %}
                {% block logo %}
                    {% spaceless %}
                        <a class=\"logo\" href=\"{{ path('sonata_admin_dashboard') }}\">
                            {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <img src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
                            {% endif %}
                            {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                                <span>{{ sonata_admin.adminPool.title }}</span>
                            {% endif %}
                        </a>
                    {% endspaceless %}
                {% endblock %}
                {% block sonata_nav %}
                    <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                        <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                            <span class=\"sr-only\">Toggle navigation</span>
                        </a>

                        <div class=\"navbar-left\">
                            {% block sonata_breadcrumb %}
                                <div class=\"hidden-xs\">
                                    {% if _breadcrumb is not empty or action is defined %}
                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            {% if _breadcrumb is empty %}
                                                {% if action is defined %}
                                                    {% for menu in breadcrumbs_builder.breadcrumbs(admin, action) %}
                                                        {%- set translation_domain = menu.extra('translation_domain', 'messages') -%}
                                                        {%- set label = menu.label -%}
                                                        {%- if translation_domain is not same as(false) -%}
                                                            {%- set label = label|trans(menu.extra('translation_params', {}), translation_domain) -%}
                                                        {%- endif -%}

                                                        {% if not loop.last  %}
                                                            <li>
                                                                {% if menu.uri is not empty %}
                                                                    <a href=\"{{ menu.uri }}\">
                                                                        {% if menu.extra('safe_label', true) %}
                                                                            {{- label|raw -}}
                                                                        {% else %}
                                                                            {{- label -}}
                                                                        {% endif %}
                                                                    </a>
                                                                {% else %}
                                                                    {{ label }}
                                                                {% endif %}
                                                            </li>
                                                        {% else %}
                                                            <li class=\"active\"><span>{{ label }}</span></li>
                                                        {% endif %}
                                                    {% endfor %}
                                                {% endif %}
                                            {% else %}
                                                {{ _breadcrumb|raw }}
                                            {% endif %}
                                        </ol>
                                    {% endif %}
                                </div>
                            {% endblock sonata_breadcrumb %}
                        </div>

                        {% block sonata_top_nav_menu %}
                            {% if app.user and is_granted('ROLE_SONATA_ADMIN') %}
                                <div class=\"navbar-custom-menu\">
                                    <ul class=\"nav navbar-nav\">
                                        {% block sonata_top_nav_menu_add_block %}
                                            <li class=\"dropdown\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-plus-square fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                {% include sonata_admin.adminPool.getTemplate('add_block') %}
                                            </li>
                                        {% endblock %}
                                        {% block sonata_top_nav_menu_user_block %}
                                            <li class=\"dropdown user-menu\">
                                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                    <i class=\"fa fa-user fa-fw\" aria-hidden=\"true\"></i> <i class=\"fa fa-caret-down\" aria-hidden=\"true\"></i>
                                                </a>
                                                <ul class=\"dropdown-menu dropdown-user\">
                                                    {% include sonata_admin.adminPool.getTemplate('user_block') %}
                                                </ul>
                                            </li>
                                        {% endblock %}
                                    </ul>
                                </div>
                            {% endif %}
                        {% endblock %}
                    </nav>
                {% endblock sonata_nav %}
            </header>
        {% endblock sonata_header %}

        {% block sonata_wrapper %}
            {% block sonata_left_side %}
                <aside class=\"main-sidebar\">
                    <section class=\"sidebar\">
                        {% block sonata_side_nav %}
                            {% block sonata_sidebar_search %}
                                <form action=\"{{ path('sonata_admin_search') }}\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                    <div class=\"input-group custom-search-form\">
                                        <input type=\"text\" name=\"q\" value=\"{{ app.request.get('q') }}\" class=\"form-control\" placeholder=\"{{ 'search_placeholder'|trans({}, 'SonataAdminBundle') }}\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn btn-flat\" type=\"submit\">
                                                    <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                                                </button>
                                            </span>
                                    </div>
                                </form>
                            {% endblock sonata_sidebar_search %}

                            {% block side_bar_before_nav %} {% endblock %}
                            {% block side_bar_nav %}
                                {{ knp_menu_render('sonata_admin_sidebar', {template: sonata_admin.adminPool.getTemplate('knp_menu_template')}) }}
                            {% endblock side_bar_nav %}
                            {% block side_bar_after_nav %}
                                <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\">
                                    {% block side_bar_after_nav_content %}
                                        <a href=\"https://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a>
                                    {% endblock %}
                                </p>
                            {% endblock %}
                        {% endblock sonata_side_nav %}
                    </section>
                </aside>
            {% endblock sonata_left_side %}

            <div class=\"content-wrapper\">
                {% block sonata_page_content %}
                    <section class=\"content-header\">

                        {% block sonata_page_content_header %}
                            {% block sonata_page_content_nav %}
                                {% if _tab_menu is not empty or _actions is not empty or _list_filters_actions is not empty %}
                                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                                        <div class=\"container-fluid\">
                                            {% block tab_menu_navbar_header %}
                                                {% if _navbar_title is not empty %}
                                                    <div class=\"navbar-header\">
                                                        <a class=\"navbar-brand\" href=\"#\">{{ _navbar_title|raw }}</a>
                                                    </div>
                                                {% endif %}
                                            {% endblock %}

                                            <div class=\"navbar-collapse\">
                                                <div class=\"navbar-left\">
                                                    {% if _tab_menu is not empty %}
                                                        {{ _tab_menu|raw }}
                                                    {% endif %}
                                                </div>

                                                {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                                                    <div class=\"nav navbar-right btn-group\">
                                                        {% for mode, settings in admin.listModes %}
                                                            <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                                        {% endfor %}
                                                    </div>
                                                {% endif %}

                                                {% block sonata_admin_content_actions_wrappers %}
                                                    {% if _actions|replace({ '<li>': '', '</li>': '' })|trim is not empty %}
                                                        <ul class=\"nav navbar-nav navbar-right\">
                                                        {% if _actions|split('</a>')|length > 2 %}
                                                            <li class=\"dropdown sonata-actions\">
                                                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'link_actions'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b></a>
                                                                <ul class=\"dropdown-menu\" role=\"menu\">
                                                                    {{ _actions|raw }}
                                                                </ul>
                                                            </li>
                                                        {% else %}
                                                            {{ _actions|raw }}
                                                        {% endif %}
                                                        </ul>
                                                    {% endif %}
                                                {% endblock sonata_admin_content_actions_wrappers %}

                                                {% if _list_filters_actions is not empty %}
                                                    {{ _list_filters_actions|raw }}
                                                {% endif %}
                                            </div>
                                        </div>
                                    </nav>
                                {% endif %}
                            {% endblock sonata_page_content_nav %}
                        {% endblock sonata_page_content_header %}
                    </section>

                    <section class=\"content\">
                        {% block sonata_admin_content %}

                            {% block notice %}
                                {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}
                            {% endblock notice %}

                            {% if _preview is not empty %}
                                <div class=\"sonata-ba-preview\">{{ _preview|raw }}</div>
                            {% endif %}

                            {% if _content is not empty %}
                                <div class=\"sonata-ba-content\">{{ _content|raw }}</div>
                            {% endif %}

                            {% if _show is not empty %}
                                <div class=\"sonata-ba-show\">{{ _show|raw }}</div>
                            {% endif %}

                            {% if _form is not empty %}
                                <div class=\"sonata-ba-form\">{{ _form|raw }}</div>
                            {% endif %}

                            {% if _list_table is not empty or _list_filters is not empty %}
                                {% if _list_filters|trim %}
                                    <div class=\"row\">
                                        {{ _list_filters|raw }}
                                    </div>
                                {% endif %}

                                <div class=\"row\">
                                    {{ _list_table|raw }}
                                </div>

                            {% endif %}
                        {% endblock sonata_admin_content %}
                    </section>
                {% endblock sonata_page_content %}
            </div>
        {% endblock sonata_wrapper %}
    </div>

    {% if sonata_admin.adminPool.getOption('use_bootlint') %}
        {% block bootlint %}
            {# Bootlint - https://github.com/twbs/bootlint#in-the-browser #}
            <script type=\"text/javascript\">
                javascript:(function(){var s=document.createElement(\"script\");s.onload=function(){bootlint.showLintReportForCurrentDocument([], {hasProblems: false, problemFree: false});};s.src=\"https://maxcdn.bootstrapcdn.com/bootlint/latest/bootlint.min.js\";document.body.appendChild(s)})();
            </script>
        {% endblock %}
    {% endif %}

    </body>
</html>
", "SonataAdminBundle::standard_layout.html.twig", "/var/www/html/administration/vendor/sonata-project/admin-bundle/Resources/views/standard_layout.html.twig");
    }
}
