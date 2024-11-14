<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @news/alert_form.html.twig */
class __TwigTemplate_50480593e3a83ad12eab011ed46e6902 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_fields' => [$this, 'block_form_fields'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 29
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@news/alert_form.html.twig", 30)->unwrap();
        // line 31
        $macros["news_fields"] = $this->macros["news_fields"] = $this->loadTemplate("@news/components/news_fields_macros.html.twig", "@news/alert_form.html.twig", 31)->unwrap();
        // line 33
        $context["params"] = (($context["params"]) ?? ([]));
        // line 29
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "@news/alert_form.html.twig", 29);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 35
    public function block_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "
    ";
        // line 40
        echo "    ";
        $context["base_option"] = ["is_horizontal" => false];
        // line 43
        echo "    ";
        $context["base_option_small"] = twig_array_merge(["field_class" => "col-xxl-4 col-xl-6"],         // line 45
($context["base_option"] ?? null));
        // line 46
        echo "
    ";
        // line 47
        echo twig_call_macro($macros["fields"], "macro_textField", ["name", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 49
($context["item"] ?? null), "fields", [], "any", false, false, false, 49), "name", [], "any", false, false, false, 49), __("Name", "news"),         // line 51
($context["base_option"] ?? null)], 47, $context, $this->getSourceContext());
        // line 52
        echo "
    ";
        // line 53
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_active", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 55
($context["item"] ?? null), "fields", [], "any", false, false, false, 55), "is_active", [], "any", false, false, false, 55), __("Active", "news"),         // line 57
($context["base_option"] ?? null)], 53, $context, $this->getSourceContext());
        // line 58
        echo "

    ";
        // line 60
        echo twig_call_macro($macros["fields"], "macro_textareaField", ["message", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 62
($context["item"] ?? null), "fields", [], "any", false, false, false, 62), "message", [], "any", false, false, false, 62), __("Description", "news"), twig_array_merge(["full_width" => true, "enable_richtext" => true, "enable_images" => false],         // line 68
($context["base_option"] ?? null))], 60, $context, $this->getSourceContext());
        // line 69
        echo "

    ";
        // line 71
        echo twig_call_macro($macros["fields"], "macro_dateTimeField", ["date_start", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 73
($context["item"] ?? null), "fields", [], "any", false, false, false, 73), "date_start", [], "any", false, false, false, 73), __("Visibility start date", "news"),         // line 75
($context["base_option"] ?? null)], 71, $context, $this->getSourceContext());
        // line 76
        echo "
     ";
        // line 77
        echo twig_call_macro($macros["fields"], "macro_dateTimeField", ["date_end", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 79
($context["item"] ?? null), "fields", [], "any", false, false, false, 79), "date_end", [], "any", false, false, false, 79), __("Visibility end date", "news"),         // line 81
($context["base_option"] ?? null)], 77, $context, $this->getSourceContext());
        // line 82
        echo "

    ";
        // line 84
        echo twig_call_macro($macros["news_fields"], "macro_checkboxesField", ["show_on_pages", ["is_displayed_oncentral" => __("Central page", "news"), "is_displayed_onlogin" => __("Login page", "news"), "is_displayed_onhelpdesk" => __("Helpdesk page", "news")], twig_get_attribute($this->env, $this->source,         // line 91
($context["item"] ?? null), "fields", [], "any", false, false, false, 91), __("Show on pages", "news"),         // line 93
($context["base_option"] ?? null)], 84, $context, $this->getSourceContext());
        // line 94
        echo "
    ";
        // line 95
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_close_allowed", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 97
($context["item"] ?? null), "fields", [], "any", false, false, false, 97), "is_close_allowed", [], "any", false, false, false, 97), __("Can close alert", "news"),         // line 99
($context["base_option"] ?? null)], 95, $context, $this->getSourceContext());
        // line 100
        echo "

    <div class=\"hr-text\">
        <i class=\"ti ti-palette\"></i>
        <span>";
        // line 104
        echo twig_escape_filter($this->env, __("Customization", "news"), "html", null, true);
        echo "</span>
    </div>

    ";
        // line 107
        echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["type", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 109
($context["item"] ?? null), "fields", [], "any", false, false, false, 109), "type", [], "any", false, false, false, 109),         // line 110
($context["templates"] ?? null), __("Template", "news"), twig_array_merge(["display_emptychoice" => true],         // line 114
($context["base_option_small"] ?? null))], 107, $context, $this->getSourceContext());
        // line 115
        echo "
    ";
        // line 116
        echo twig_call_macro($macros["fields"], "macro_nullField", [], 116, $context, $this->getSourceContext());
        echo "

    ";
        // line 118
        echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["size", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 120
($context["item"] ?? null), "fields", [], "any", false, false, false, 120), "size", [], "any", false, false, false, 120),         // line 121
($context["sizes"] ?? null), __("Size", "news"),         // line 123
($context["base_option_small"] ?? null)], 118, $context, $this->getSourceContext());
        // line 124
        echo "
    ";
        // line 125
        echo twig_call_macro($macros["news_fields"], "macro_iconField", ["icon",         // line 127
($context["icons"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 128
($context["item"] ?? null), "fields", [], "any", false, false, false, 128), "icon", [], "any", false, false, false, 128), __("Icon", "news"), twig_array_merge(["display_emptychoice" => true],         // line 132
($context["base_option_small"] ?? null))], 125, $context, $this->getSourceContext());
        // line 133
        echo "
    ";
        // line 134
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["display_dates", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 136
($context["item"] ?? null), "fields", [], "any", false, false, false, 136), "display_dates", [], "any", false, false, false, 136), __("Show dates", "news"),         // line 138
($context["base_option_small"] ?? null)], 134, $context, $this->getSourceContext());
        // line 139
        echo "

    ";
        // line 141
        echo twig_call_macro($macros["news_fields"], "macro_colorField", ["background_color",         // line 143
($context["colors"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 144
($context["item"] ?? null), "fields", [], "any", false, false, false, 144), "background_color", [], "any", false, false, false, 144), __("Background color", "news"),         // line 146
($context["base_option_small"] ?? null)], 141, $context, $this->getSourceContext());
        // line 147
        echo "
    ";
        // line 148
        echo twig_call_macro($macros["news_fields"], "macro_colorField", ["text_color",         // line 150
($context["colors"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 151
($context["item"] ?? null), "fields", [], "any", false, false, false, 151), "text_color", [], "any", false, false, false, 151), __("Text color", "news"),         // line 153
($context["base_option_small"] ?? null)], 148, $context, $this->getSourceContext());
        // line 154
        echo "
    ";
        // line 155
        echo twig_call_macro($macros["news_fields"], "macro_colorField", ["emphasis_color",         // line 157
($context["colors"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 158
($context["item"] ?? null), "fields", [], "any", false, false, false, 158), "emphasis_color", [], "any", false, false, false, 158), __("Emphasis color", "news"),         // line 160
($context["base_option_small"] ?? null)], 155, $context, $this->getSourceContext());
        // line 161
        echo "

    <div class=\"hr-text preview-section ";
        // line 163
        echo ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 163)) ? ("d-none") : (""));
        echo "\">
        <i class=\"ti ti-eye\"></i>
        <span>";
        // line 165
        echo twig_escape_filter($this->env, __("Preview", "news"), "html", null, true);
        echo "</span>
    </div>

    <div class=\"alert-preview\">
    </div>

    <script>
        (async function () {
            const reload_preview = function () {
                // Show preview section if hidden
                \$('.preview-section').removeClass('d-none');

                // Send tinymce content to the forms textarea
                tinyMCE.triggerSave();

                // Load preview
                \$(\".alert-preview\").load(
                    \"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->getPluginWebDir("news"), "html", null, true);
        echo "/ajax/alert_preview.php\",
                    \$(\"form[name=asset_form]\").serialize()
                );
            };

            // Debounced function to not spam the backend for changes less than 0.4 seconds appart
            const reload_preview_debounced = _.debounce(reload_preview, 400, false);

            // Any input or dropdown change on our form
            let updating_template = false;
            \$(\"form[name=asset_form] :input\").on('input', function(e) {
                if (updating_template) {
                    // Prevent infinite loops as modifying the template will trigger
                    // an update on others fields
                    return;
                }

                if (\$(e.target).prop('name') == 'type') {
                    // Template change
                    updating_template = true;

                    // Template disabled, stop processing
                    if (\$(e.target).val() == \"0\") {
                        updating_template = false;
                        return;
                    }

                    // Clear values
                    \$('form[name=\"asset_form\"] input[name=\"icon\"]').prop('checked', false);
                    \$('form[name=\"asset_form\"] input[name=\"background_color\"]').prop('checked', false);
                    \$('form[name=\"asset_form\"] input[name=\"text_color\"]').prop('checked', false);
                    \$('form[name=\"asset_form\"] input[name=\"emphasis_color\"]').prop('checked', false);

                    // Apply template values
                    switch (\$(e.target).val()) {
                        ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templates_values"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["values"]) {
            // line 218
            echo "                            case '";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "':
                                \$('form[name=\"asset_form\"] input[name=\"icon\"][value=\"";
            // line 219
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["values"], "icon", [], "any", false, false, false, 219), "html", null, true);
            echo "\"]').prop('checked', true);
                                \$('form[name=\"asset_form\"] input[name=\"background_color\"][value=\"";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["values"], "background_color", [], "any", false, false, false, 220), "html", null, true);
            echo "\"]').prop('checked', true);
                                \$('form[name=\"asset_form\"] input[name=\"text_color\"][value=\"";
            // line 221
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["values"], "text_color", [], "any", false, false, false, 221), "html", null, true);
            echo "\"]').prop('checked', true);
                                \$('form[name=\"asset_form\"] input[name=\"emphasis_color\"][value=\"";
            // line 222
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["values"], "emphasis_color", [], "any", false, false, false, 222), "html", null, true);
            echo "\"]').prop('checked', true);
                                break;
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo "                    }

                    updating_template = false;
                } else if (['icon', 'background_color', 'text_color', 'emphasis_color'].includes(\$(e.target).prop('name'))) {
                    // Manual color or icon change, disable templating
                    \$(\"form[name=asset_form] select[name=type]\").val(0).trigger(\"change\");
                }

                reload_preview_debounced();
            });

            // Specific tinymce change detection
            await new Promise(r => setTimeout(r, 500)); // Wait for all editors to be loaded
            let i = 0;
            while (e = tinymce.get(i++)) {
                e.on('input NodeChange', function(e) {
                    reload_preview_debounced();
                });
            }


            ";
        // line 246
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 246)) {
            // line 247
            echo "                // If existing alert, load preview immediatly
                // New alerts will not have a preview until a change is made on any inputs
                reload_preview();
            ";
        }
        // line 251
        echo "        })();
    </script>

";
    }

    public function getTemplateName()
    {
        return "@news/alert_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 251,  311 => 247,  309 => 246,  286 => 225,  277 => 222,  273 => 221,  269 => 220,  265 => 219,  260 => 218,  256 => 217,  218 => 182,  198 => 165,  193 => 163,  189 => 161,  187 => 160,  186 => 158,  185 => 157,  184 => 155,  181 => 154,  179 => 153,  178 => 151,  177 => 150,  176 => 148,  173 => 147,  171 => 146,  170 => 144,  169 => 143,  168 => 141,  164 => 139,  162 => 138,  161 => 136,  160 => 134,  157 => 133,  155 => 132,  154 => 128,  153 => 127,  152 => 125,  149 => 124,  147 => 123,  146 => 121,  145 => 120,  144 => 118,  139 => 116,  136 => 115,  134 => 114,  133 => 110,  132 => 109,  131 => 107,  125 => 104,  119 => 100,  117 => 99,  116 => 97,  115 => 95,  112 => 94,  110 => 93,  109 => 91,  108 => 84,  104 => 82,  102 => 81,  101 => 79,  100 => 77,  97 => 76,  95 => 75,  94 => 73,  93 => 71,  89 => 69,  87 => 68,  86 => 62,  85 => 60,  81 => 58,  79 => 57,  78 => 55,  77 => 53,  74 => 52,  72 => 51,  71 => 49,  70 => 47,  67 => 46,  65 => 45,  63 => 43,  60 => 40,  57 => 36,  53 => 35,  48 => 29,  46 => 33,  44 => 31,  42 => 30,  35 => 29,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 # -------------------------------------------------------------------------
 # News plugin for GLPI
 # -------------------------------------------------------------------------
 #
 # LICENSE
 #
 # This file is part of News.
 #
 # News is free software; you can redistribute it and/or modify
 # it under the terms of the GNU General Public License as published by
 # the Free Software Foundation; either version 2 of the License, or
 # (at your option) any later version.
 #
 # News is distributed in the hope that it will be useful,
 # but WITHOUT ANY WARRANTY; without even the implied warranty of
 # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 # GNU General Public License for more details.
 #
 # You should have received a copy of the GNU General Public License
 # along with News. If not, see <http://www.gnu.org/licenses/>.
 # -------------------------------------------------------------------------
 # @copyright Copyright (C) 2015-2022 by News plugin team.
 # @license   GPLv2 https://www.gnu.org/licenses/gpl-2.0.html
 # @link      https://github.com/pluginsGLPI/news
 # -------------------------------------------------------------------------
 #}

{% extends \"generic_show_form.html.twig\" %}
{% import 'components/form/fields_macros.html.twig' as fields %}
{% import '@news/components/news_fields_macros.html.twig' as news_fields %}

{% set params  = params ?? [] %}

{% block form_fields %}

    {# Horizontal mode solve a few layout problems for this page, such as displaying
       properly a field on an entire row or splitting the layout into 3 columns
       without losing too much space #}
    {% set base_option = {
        'is_horizontal' : false,
    } %}
    {% set base_option_small = {
        'field_class' : 'col-xxl-4 col-xl-6',
    }|merge(base_option) %}

    {{ fields.textField(
        'name',
        item.fields.name,
        __('Name', 'news'),
        base_option
    ) }}
    {{ fields.dropdownYesNo(
        'is_active',
        item.fields.is_active,
        __('Active', 'news'),
        base_option
    ) }}

    {{ fields.textareaField(
        'message',
        item.fields.message,
        __('Description', 'news'),
        {
            'full_width': true,
            'enable_richtext': true,
            'enable_images'  : false,
        }|merge(base_option)
    ) }}

    {{ fields.dateTimeField(
        'date_start',
        item.fields.date_start,
        __('Visibility start date', 'news'),
        base_option
    ) }}
     {{ fields.dateTimeField(
        'date_end',
        item.fields.date_end,
        __('Visibility end date', 'news'),
        base_option
    ) }}

    {{ news_fields.checkboxesField(
        \"show_on_pages\",
        {
            'is_displayed_oncentral' : __('Central page', 'news'),
            'is_displayed_onlogin'   : __('Login page', 'news'),
            'is_displayed_onhelpdesk': __('Helpdesk page', 'news'),
        },
        item.fields,
        __('Show on pages', 'news'),
        base_option
    )}}
    {{ fields.dropdownYesNo(
        'is_close_allowed',
        item.fields.is_close_allowed,
        __('Can close alert', 'news'),
        base_option
    ) }}

    <div class=\"hr-text\">
        <i class=\"ti ti-palette\"></i>
        <span>{{ __('Customization', 'news') }}</span>
    </div>

    {{ fields.dropdownArrayField(
        'type',
        item.fields.type,
        templates,
        __('Template', 'news'),
        {
            'display_emptychoice': true,
        }|merge(base_option_small)
    ) }}
    {{ fields.nullField() }}

    {{ fields.dropdownArrayField(
        'size',
        item.fields.size,
        sizes,
        __('Size', 'news'),
        base_option_small
    ) }}
    {{ news_fields.iconField(
        \"icon\",
        icons,
        item.fields.icon,
        __('Icon', 'news'),
        {
            'display_emptychoice': true,
        }|merge(base_option_small)
    ) }}
    {{ fields.dropdownYesNo(
        'display_dates',
        item.fields.display_dates,
        __('Show dates', 'news'),
        base_option_small
    ) }}

    {{ news_fields.colorField(
        \"background_color\",
        colors,
        item.fields.background_color,
        __('Background color', 'news'),
        base_option_small
    )}}
    {{ news_fields.colorField(
        \"text_color\",
        colors,
        item.fields.text_color,
        __('Text color', 'news'),
        base_option_small
    )}}
    {{ news_fields.colorField(
        \"emphasis_color\",
        colors,
        item.fields.emphasis_color,
        __('Emphasis color', 'news'),
        base_option_small
    )}}

    <div class=\"hr-text preview-section {{ item.isNewItem() ? \"d-none\" : \"\" }}\">
        <i class=\"ti ti-eye\"></i>
        <span>{{ __('Preview', 'news') }}</span>
    </div>

    <div class=\"alert-preview\">
    </div>

    <script>
        (async function () {
            const reload_preview = function () {
                // Show preview section if hidden
                \$('.preview-section').removeClass('d-none');

                // Send tinymce content to the forms textarea
                tinyMCE.triggerSave();

                // Load preview
                \$(\".alert-preview\").load(
                    \"{{ get_plugin_web_dir('news') }}/ajax/alert_preview.php\",
                    \$(\"form[name=asset_form]\").serialize()
                );
            };

            // Debounced function to not spam the backend for changes less than 0.4 seconds appart
            const reload_preview_debounced = _.debounce(reload_preview, 400, false);

            // Any input or dropdown change on our form
            let updating_template = false;
            \$(\"form[name=asset_form] :input\").on('input', function(e) {
                if (updating_template) {
                    // Prevent infinite loops as modifying the template will trigger
                    // an update on others fields
                    return;
                }

                if (\$(e.target).prop('name') == 'type') {
                    // Template change
                    updating_template = true;

                    // Template disabled, stop processing
                    if (\$(e.target).val() == \"0\") {
                        updating_template = false;
                        return;
                    }

                    // Clear values
                    \$('form[name=\"asset_form\"] input[name=\"icon\"]').prop('checked', false);
                    \$('form[name=\"asset_form\"] input[name=\"background_color\"]').prop('checked', false);
                    \$('form[name=\"asset_form\"] input[name=\"text_color\"]').prop('checked', false);
                    \$('form[name=\"asset_form\"] input[name=\"emphasis_color\"]').prop('checked', false);

                    // Apply template values
                    switch (\$(e.target).val()) {
                        {% for key, values in templates_values %}
                            case '{{ key }}':
                                \$('form[name=\"asset_form\"] input[name=\"icon\"][value=\"{{ values.icon }}\"]').prop('checked', true);
                                \$('form[name=\"asset_form\"] input[name=\"background_color\"][value=\"{{ values.background_color }}\"]').prop('checked', true);
                                \$('form[name=\"asset_form\"] input[name=\"text_color\"][value=\"{{ values.text_color }}\"]').prop('checked', true);
                                \$('form[name=\"asset_form\"] input[name=\"emphasis_color\"][value=\"{{ values.emphasis_color }}\"]').prop('checked', true);
                                break;
                        {% endfor %}
                    }

                    updating_template = false;
                } else if (['icon', 'background_color', 'text_color', 'emphasis_color'].includes(\$(e.target).prop('name'))) {
                    // Manual color or icon change, disable templating
                    \$(\"form[name=asset_form] select[name=type]\").val(0).trigger(\"change\");
                }

                reload_preview_debounced();
            });

            // Specific tinymce change detection
            await new Promise(r => setTimeout(r, 500)); // Wait for all editors to be loaded
            let i = 0;
            while (e = tinymce.get(i++)) {
                e.on('input NodeChange', function(e) {
                    reload_preview_debounced();
                });
            }


            {% if not item.isNewItem() %}
                // If existing alert, load preview immediatly
                // New alerts will not have a preview until a change is made on any inputs
                reload_preview();
            {% endif %}
        })();
    </script>

{% endblock %}

", "@news/alert_form.html.twig", "C:\\xampp\\htdocs\\glpi\\plugins\\news\\templates\\alert_form.html.twig");
    }
}
