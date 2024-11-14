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

/* components/itilobject/fields_panel.html.twig */
class __TwigTemplate_613ab8c933ccf060ec705f607f8afcc4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/fields_panel.html.twig", 34)->unwrap();
        // line 35
        $context["field_options"] = ["full_width" => true, "fields_template" =>         // line 37
($context["itiltemplate"] ?? null), "disabled" =>  !        // line 38
($context["canupdate"] ?? null), "add_field_class" => ((        // line 39
($context["is_expanded"] ?? null)) ? ("col-sm-6") : (""))];
        // line 41
        echo "
";
        // line 42
        $context["itil_layout"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("itil_layout", true);
        // line 43
        $context["headers_states"] = (($__internal_compile_0 = ($context["itil_layout"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["items"] ?? null) : null);
        // line 44
        echo "
<div class=\"accordion open accordion-flush\" id=\"itil-data\">
   ";
        // line 46
        $context["main_show"] = ((( !twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "item-main", [], "array", true, true, false, 46) || ((($__internal_compile_1 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["item-main"] ?? null) : null) == "true"))) ? (true) : (false));
        // line 47
        echo "   <div class=\"accordion-item\">
      <h2 class=\"accordion-header\" id=\"heading-main-item\">
         <button class=\"accordion-button ";
        // line 49
        echo ((($context["main_show"] ?? null)) ? ("") : ("collapsed"));
        echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#item-main\" aria-expanded=\"true\" aria-controls=\"ticket-main\">
            <i class=\"ti ti-alert-circle me-1 item-icon\"></i>
            <span class='status-recall'>
                ";
        // line 52
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getStatusIcon", [0 => (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 52)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["status"] ?? null) : null)], "method", false, false, false, 52);
        echo "
            </span>
            <span class=\"item-title\">
                ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [0 => 1], "method", false, false, false, 55), "html", null, true);
        echo "
            </span>
         </button>
      </h2>
      <div id=\"item-main\" class=\"accordion-collapse collapse ";
        // line 59
        echo ((($context["main_show"] ?? null)) ? ("show") : (""));
        echo "\" aria-labelledby=\"heading-main-item\">
         <div class=\"accordion-body row m-0 mt-n2\">

            ";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        echo "

            ";
        // line 64
        if (Session::isMultiEntitiesMode()) {
            // line 65
            echo "               ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 65)) {
                // line 66
                echo "                  ";
                echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Entity", "entities_id", (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,                 // line 69
($context["item"] ?? null), "fields", [], "any", false, false, false, 69)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["entities_id"] ?? null) : null), _n("Entity", "Entities", 1), twig_array_merge(                // line 71
($context["field_options"] ?? null), ["entity" =>                 // line 72
($context["userentities"] ?? null), "on_change" => "this.form.submit()"])], 66, $context, $this->getSourceContext());
                // line 75
                echo "
               ";
            } else {
                // line 77
                echo "                  ";
                ob_start(function () { return ''; });
                // line 78
                echo "                     ";
                echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Entity::badgeCompletenameLinkById", [0 => (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 78)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["entities_id"] ?? null) : null)]);
                echo "
                  ";
                $context["entity_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 80
                echo "

               ";
            }
            // line 83
            echo "
               ";
            // line 84
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_recursive"], "method", false, false, false, 84)) {
                // line 85
                echo "                  ";
                echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_recursive", (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,                 // line 87
($context["item"] ?? null), "fields", [], "any", false, false, false, 87)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["is_recursive"] ?? null) : null), __("Child entities"),                 // line 89
($context["field_options"] ?? null)], 85, $context, $this->getSourceContext());
                // line 90
                echo "
               ";
            }
            // line 92
            echo "            ";
        }
        // line 93
        echo "
            ";
        // line 94
        echo twig_call_macro($macros["fields"], "macro_datetimeField", ["date", (($__internal_compile_6 = twig_get_attribute($this->env, $this->source,         // line 96
($context["item"] ?? null), "fields", [], "any", false, false, false, 96)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["date"] ?? null) : null), __("Opening date"),         // line 98
($context["field_options"] ?? null)], 94, $context, $this->getSourceContext());
        // line 99
        echo "

            ";
        // line 101
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 101) != "Ticket")) {
            // line 102
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["time_to_resolve", (($__internal_compile_7 = twig_get_attribute($this->env, $this->source,             // line 104
($context["item"] ?? null), "fields", [], "any", false, false, false, 104)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["time_to_resolve"] ?? null) : null), __("Time to resolve"),             // line 106
($context["field_options"] ?? null)], 102, $context, $this->getSourceContext());
            // line 107
            echo "
            ";
        }
        // line 109
        echo "
            ";
        // line 110
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isSolved", [0 => true], "method", false, false, false, 110)) {
            // line 111
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["solvedate", (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,             // line 113
($context["item"] ?? null), "fields", [], "any", false, false, false, 113)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["solvedate"] ?? null) : null), __("Resolution date"),             // line 115
($context["field_options"] ?? null)], 111, $context, $this->getSourceContext());
            // line 116
            echo "
            ";
        }
        // line 118
        echo "
            ";
        // line 119
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isClosed", [], "method", false, false, false, 119)) {
            // line 120
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["closedate", (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,             // line 122
($context["item"] ?? null), "fields", [], "any", false, false, false, 122)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["closedate"] ?? null) : null), __("Close date"),             // line 124
($context["field_options"] ?? null)], 120, $context, $this->getSourceContext());
            // line 125
            echo "
            ";
        }
        // line 127
        echo "
            ";
        // line 128
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 128) == "Ticket")) {
            // line 129
            echo "               ";
            $context["type_params"] = twig_array_merge(["value" => (($__internal_compile_10 = twig_get_attribute($this->env, $this->source,             // line 130
($context["item"] ?? null), "fields", [], "any", false, false, false, 130)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["type"] ?? null) : null), "width" => "100%", "display" => false],             // line 133
($context["field_options"] ?? null));
            // line 134
            echo "               ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 134)) {
                // line 135
                echo "                  ";
                $context["type_params"] = twig_array_merge(($context["type_params"] ?? null), ["on_change" => "this.form.submit()"]);
                // line 136
                echo "               ";
            } else {
                // line 137
                echo "                  ";
                $context["type_params"] = twig_array_merge(($context["type_params"] ?? null), ["on_change" => "reloadCategory()"]);
                // line 138
                echo "               ";
            }
            // line 139
            echo "
            ";
        }
        // line 141
        echo "
            ";
        // line 142
        $context["cat_params"] = twig_array_merge(($context["field_options"] ?? null), ["entity" => (($__internal_compile_11 = twig_get_attribute($this->env, $this->source,         // line 143
($context["item"] ?? null), "fields", [], "any", false, false, false, 143)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["entities_id"] ?? null) : null), "disabled" =>  !(        // line 144
($context["canupdate"] ?? null) || ($context["can_requester"] ?? null))]);
        // line 146
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 146)) {
            // line 147
            echo "               ";
            $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["on_change" => "this.form.submit()"]);
            // line 150
            echo "            ";
        }
        // line 151
        echo "            ";
        if ((( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 151) && twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [0 => "itilcategories_id"], "method", false, false, false, 151)) && ((($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 151)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["itilcategories_id"] ?? null) : null) > 0))) {
            // line 152
            echo "               ";
            $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["display_emptychoice" => false]);
            // line 155
            echo "            ";
        }
        // line 156
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 156) == "Ticket")) {
            // line 157
            echo "               ";
            if (((($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 157)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["type"] ?? null) : null) == twig_constant("Ticket::INCIDENT_TYPE"))) {
                // line 158
                echo "                  ";
                $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["condition" => ["is_incident" => 1]]);
                // line 159
                echo "               ";
            } elseif (((($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 159)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["type"] ?? null) : null) == twig_constant("Ticket::DEMAND_TYPE"))) {
                // line 160
                echo "                  ";
                $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["condition" => ["is_request" => 1]]);
                // line 161
                echo "               ";
            }
            // line 162
            echo "            ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 162) == "Problem")) {
            // line 163
            echo "               ";
            $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["condition" => ["is_problem" => 1]]);
            // line 164
            echo "            ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 164) == "Change")) {
            // line 165
            echo "               ";
            $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["condition" => ["is_change" => 1]]);
            // line 166
            echo "            ";
        }
        // line 167
        echo "            <span id=\"category_block_";
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 168
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["ITILCategory", "itilcategories_id", (($__internal_compile_15 = twig_get_attribute($this->env, $this->source,         // line 171
($context["item"] ?? null), "fields", [], "any", false, false, false, 171)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["itilcategories_id"] ?? null) : null), _n("Category", "Categories", 1),         // line 173
($context["cat_params"] ?? null)], 168, $context, $this->getSourceContext());
        // line 174
        echo "
            </span>

            ";
        // line 177
        echo twig_include($this->env, $context, "components/itilobject/fields/status.html.twig");
        echo "

            ";
        // line 179
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "requesttypes_id"], "method", false, false, false, 179)) {
            // line 180
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["RequestType", "requesttypes_id", (($__internal_compile_16 = twig_get_attribute($this->env, $this->source,             // line 183
($context["item"] ?? null), "fields", [], "any", false, false, false, 183)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["requesttypes_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("RequestType"), twig_array_merge(            // line 185
($context["field_options"] ?? null), ["condition" => ["is_active" => 1, "is_ticketheader" => 1]])], 180, $context, $this->getSourceContext());
            // line 191
            echo "
            ";
        }
        // line 193
        echo "
            ";
        // line 194
        echo twig_include($this->env, $context, "components/itilobject/fields/priority_matrix.html.twig");
        echo "

            ";
        // line 196
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "locations_id"], "method", false, false, false, 196)) {
            // line 197
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Location", "locations_id", (($__internal_compile_17 = twig_get_attribute($this->env, $this->source,             // line 200
($context["item"] ?? null), "fields", [], "any", false, false, false, 200)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), twig_array_merge(            // line 202
($context["field_options"] ?? null), ["hide_if_no_elements" => true, "entity" => (($__internal_compile_18 = twig_get_attribute($this->env, $this->source,             // line 204
($context["item"] ?? null), "fields", [], "any", false, false, false, 204)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["entities_id"] ?? null) : null), "entity_sons" => true])], 197, $context, $this->getSourceContext());
            // line 207
            echo "
            ";
        }
        // line 209
        echo "
            ";
        // line 210
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 210) && (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 210) == "Ticket"))) {
            // line 211
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Contract", "_contracts_id", ((twig_get_attribute($this->env, $this->source,             // line 214
($context["params"] ?? null), "_contracts_id", [], "array", true, true, false, 214)) ? (_twig_default_filter((($__internal_compile_19 = ($context["params"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["_contracts_id"] ?? null) : null), 0)) : (0)), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Contract"), twig_array_merge(            // line 216
($context["field_options"] ?? null), ["entity" => (($__internal_compile_20 = twig_get_attribute($this->env, $this->source,             // line 217
($context["item"] ?? null), "fields", [], "any", false, false, false, 217)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["entities_id"] ?? null) : null), "width" => "100%", "hide_if_no_elements" => true])], 211, $context, $this->getSourceContext());
            // line 221
            echo "
            ";
        }
        // line 223
        echo "
            ";
        // line 224
        if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 224) != "Ticket") || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 224))) {
            // line 225
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_dropdownTimestampField", ["actiontime", (($__internal_compile_21 = twig_get_attribute($this->env, $this->source,             // line 227
($context["item"] ?? null), "fields", [], "any", false, false, false, 227)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["actiontime"] ?? null) : null), __("Total duration"),             // line 229
($context["field_options"] ?? null)], 225, $context, $this->getSourceContext());
            // line 230
            echo "
            ";
        }
        // line 232
        echo "
            ";
        // line 233
        echo twig_include($this->env, $context, "components/itilobject/fields/global_validation.html.twig");
        echo "

            ";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        echo "
         </div>
      </div>
   </div>

   ";
        // line 240
        $context["actors_show"] = ((( !twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "actors", [], "array", true, true, false, 240) || ((($__internal_compile_22 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["actors"] ?? null) : null) == "true"))) ? (true) : (false));
        // line 241
        echo "   <div class=\"accordion-item\">
      <h2 class=\"accordion-header\" id=\"heading-actor\" title=\"";
        // line 242
        echo twig_escape_filter($this->env, __("Actors"), "html", null, true);
        echo "\" data-bs-toggle=\"tooltip\">
         <button class=\"accordion-button ";
        // line 243
        echo ((($context["actors_show"] ?? null)) ? ("") : ("collapsed"));
        echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#actors\" aria-expanded=\"true\" aria-controls=\"actors\">
            <i class=\"ti ti-users me-1\"></i>
            <span class=\"item-title\">
                ";
        // line 246
        echo twig_escape_filter($this->env, __("Actors"), "html", null, true);
        echo "
            </span>
            <span class=\"badge bg-secondary ms-2\">
               ";
        // line 249
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "countActors", [], "method", false, false, false, 249), "html", null, true);
        echo "
            </span>
         </button>
      </h2>
      <div id=\"actors\" class=\"accordion-collapse collapse ";
        // line 253
        echo ((($context["actors_show"] ?? null)) ? ("show") : (""));
        echo "\" aria-labelledby=\"heading-actor\">
         <div class=\"accordion-body accordion-actors row m-0 mt-n2\">
            ";
        // line 255
        echo twig_include($this->env, $context, "components/itilobject/actors/main.html.twig");
        echo "
         </div>
      </div>
   </div>

   ";
        // line 260
        if ((array_key_exists("item_ticket", $context) &&  !(null === ($context["item_ticket"] ?? null)))) {
            // line 261
            echo "      ";
            $context["items_show"] = ((( !twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "items", [], "array", true, true, false, 261) || ((($__internal_compile_23 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["items"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 262
            echo "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"items-heading\" title=\"";
            // line 263
            echo twig_escape_filter($this->env, _n("Item", "Items", Session::getPluralNumber()), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 264
            echo ((($context["items_show"] ?? null)) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#items\" aria-expanded=\"true\" aria-controls=\"items\">
               <i class=\"ti ti-package me-1\"></i>
               <span class=\"item-title\">
                    ";
            // line 267
            echo twig_escape_filter($this->env, _n("Item", "Items", Session::getPluralNumber()), "html", null, true);
            echo "
                </span>
               <span class=\"item-counter badge bg-secondary ms-2\"></span>
               ";
            // line 270
            if (twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [0 => "items_id"], "method", false, false, false, 270)) {
                // line 271
                echo "                  <span class=\"required\">*</span>
               ";
            }
            // line 273
            echo "            </button>
         </h2>
         <div id=\"items\" class=\"accordion-collapse collapse ";
            // line 275
            echo ((($context["items_show"] ?? null)) ? ("show") : (""));
            echo "\" aria-labelledby=\"items-heading\">
            <div class=\"accordion-body accordion-items row m-0 mt-n2\">
               ";
            // line 277
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item_ticket"] ?? null), "itemAddForm", [0 => ($context["item"] ?? null), 1 => ((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([]))], "method", false, false, false, 277), "html", null, true);
            echo "
            </div>
         </div>
      </div>
   ";
        }
        // line 282
        echo "
   ";
        // line 283
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 283) == "Ticket")) {
            // line 284
            echo "      ";
            ob_start(function () { return ''; });
            // line 285
            echo "         ";
            echo twig_include($this->env, $context, "components/itilobject/service_levels.html.twig");
            echo "
      ";
            $context["la_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 287
            echo "
      ";
            // line 288
            if ((twig_length_filter($this->env, twig_trim_filter(($context["la_content"] ?? null))) > 0)) {
                // line 289
                echo "         ";
                $context["nb_la"] = (((((((($__internal_compile_24 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 289)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["slas_id_tto"] ?? null) : null) > 0)) ? (1) : (0)) + ((((($__internal_compile_25 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 289)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["slas_id_ttr"] ?? null) : null) > 0)) ? (1) : (0))) + ((((($__internal_compile_26 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 289)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["olas_id_tto"] ?? null) : null) > 0)) ? (1) : (0))) + ((((($__internal_compile_27 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 289)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["olas_id_ttr"] ?? null) : null) > 0)) ? (1) : (0)));
                // line 290
                echo "         ";
                $context["servicelevels_show"] = (((twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "service-levels", [], "array", true, true, false, 290) && ((($__internal_compile_28 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["service-levels"] ?? null) : null) == "true"))) ? (true) : (false));
                // line 291
                echo "         <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"service-levels-heading\" title=\"";
                // line 292
                echo twig_escape_filter($this->env, _n("Service level", "Service levels", Session::getPluralNumber()), "html", null, true);
                echo "\" data-bs-toggle=\"tooltip\">
               <button class=\"accordion-button ";
                // line 293
                echo ((($context["servicelevels_show"] ?? null)) ? ("") : ("collapsed"));
                echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#service-levels\" aria-expanded=\"true\" aria-controls=\"service-levels\">
                  <i class=\"ti ti-alarm me-1\"></i>
                  <span class=\"item-title\">
                     ";
                // line 296
                echo twig_escape_filter($this->env, _n("Service level", "Service levels", Session::getPluralNumber()), "html", null, true);
                echo "
                  </span>
                  ";
                // line 298
                if ((($context["nb_la"] ?? null) > 0)) {
                    // line 299
                    echo "                     <span class=\"badge bg-secondary ms-2\">";
                    echo twig_escape_filter($this->env, ($context["nb_la"] ?? null), "html", null, true);
                    echo "</span>
                  ";
                }
                // line 301
                echo "               </button>
            </h2>
            <div id=\"service-levels\" class=\"accordion-collapse collapse ";
                // line 303
                echo ((($context["servicelevels_show"] ?? null)) ? ("show") : (""));
                echo "\" aria-labelledby=\"service-levels-heading\">
               <div class=\"accordion-body row m-0 mt-n2\">
                  ";
                // line 305
                echo twig_escape_filter($this->env, ($context["la_content"] ?? null), "html", null, true);
                echo "
               </div>
            </div>
         </div>
      ";
            }
            // line 310
            echo "   ";
        }
        // line 311
        echo "
   ";
        // line 312
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 312), [0 => "Problem", 1 => "Change"])) {
            // line 313
            echo "      ";
            $context["analysis_fields"] = ["impactcontent" => __("Impacts"), "causecontent" => __("Causes"), "symptomcontent" => __("Symptoms"), "controlistcontent" => __("Control list")];
            // line 319
            echo "
      ";
            // line 320
            $context["nb_analysis"] = 0;
            // line 321
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["analysis_fields"] ?? null));
            foreach ($context['_seq'] as $context["analysis_field"] => $context["label"]) {
                // line 322
                echo "         ";
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => $context["analysis_field"]], "method", false, false, false, 322) && (twig_length_filter($this->env, twig_trim_filter((($__internal_compile_29 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 322)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[$context["analysis_field"]] ?? null) : null))) > 0))) {
                    // line 323
                    echo "            ";
                    $context["nb_analysis"] = (($context["nb_analysis"] ?? null) + 1);
                    // line 324
                    echo "         ";
                }
                // line 325
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['analysis_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            echo "      ";
            $context["analysis_show"] = (((twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "analysis", [], "array", true, true, false, 326) && ((($__internal_compile_30 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["analysis"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 327
            echo "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"analysis-heading\" title=\"";
            // line 328
            echo twig_escape_filter($this->env, __("Analysis"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 329
            echo ((($context["analysis_show"] ?? null)) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#analysis\" aria-expanded=\"true\" aria-controls=\"analysis\">
               <i class=\"ti ti-eyeglass me-1\"></i>
               <span class=\"item-title\">
                    ";
            // line 332
            echo twig_escape_filter($this->env, __("Analysis"), "html", null, true);
            echo "
               </span>
               ";
            // line 334
            if ((($context["nb_analysis"] ?? null) > 0)) {
                // line 335
                echo "                  <span class=\"badge bg-secondary ms-2\">";
                echo twig_escape_filter($this->env, ($context["nb_analysis"] ?? null), "html", null, true);
                echo "</span>
               ";
            }
            // line 337
            echo "            </button>
         </h2>
         <div id=\"analysis\" class=\"accordion-collapse collapse ";
            // line 339
            echo ((($context["analysis_show"] ?? null)) ? ("show") : (""));
            echo "\" aria-labelledby=\"analysis-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               ";
            // line 341
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["analysis_fields"] ?? null));
            foreach ($context['_seq'] as $context["analysis_field"] => $context["label"]) {
                // line 342
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => $context["analysis_field"]], "method", false, false, false, 342)) {
                    // line 343
                    echo "                     ";
                    echo twig_call_macro($macros["fields"], "macro_textareaField", [                    // line 344
$context["analysis_field"], (($__internal_compile_31 = twig_get_attribute($this->env, $this->source,                     // line 345
($context["item"] ?? null), "fields", [], "any", false, false, false, 345)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31[$context["analysis_field"]] ?? null) : null),                     // line 346
$context["label"], twig_array_merge(                    // line 347
($context["field_options"] ?? null), ["enable_richtext" => true, "is_horizontal" => false])], 343, $context, $this->getSourceContext());
                    // line 351
                    echo "
                  ";
                }
                // line 353
                echo "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['analysis_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 354
            echo "            </div>
         </div>
      </div>
   ";
        }
        // line 358
        echo "
   ";
        // line 359
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 359) == "Change")) {
            // line 360
            echo "      ";
            $context["plans_fields"] = ["rolloutplancontent" => __("Deployment plan"), "backoutplancontent" => __("Backup plan"), "checklistcontent" => __("Checklist")];
            // line 365
            echo "
      ";
            // line 366
            $context["nb_plans"] = 0;
            // line 367
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["plans_fields"] ?? null));
            foreach ($context['_seq'] as $context["plans_field"] => $context["label"]) {
                // line 368
                echo "         ";
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => $context["plans_field"]], "method", false, false, false, 368) && (twig_length_filter($this->env, twig_trim_filter((($__internal_compile_32 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 368)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[$context["plans_field"]] ?? null) : null))) > 0))) {
                    // line 369
                    echo "            ";
                    $context["nb_plans"] = (($context["nb_plans"] ?? null) + 1);
                    // line 370
                    echo "         ";
                }
                // line 371
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plans_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 372
            echo "
      ";
            // line 373
            $context["plans_show"] = (((twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "plans", [], "array", true, true, false, 373) && ((($__internal_compile_33 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["plans"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 374
            echo "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"plans-heading\" title=\"";
            // line 375
            echo twig_escape_filter($this->env, __("Plans"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 376
            echo ((($context["plans_show"] ?? null)) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#plans\" aria-expanded=\"true\" aria-controls=\"plans\">
               <i class=\"ti ti-checkup-list me-1\"></i>
               <span class=\"item-title\">
                    ";
            // line 379
            echo twig_escape_filter($this->env, __("Plans"), "html", null, true);
            echo "
               </span>
               ";
            // line 381
            if ((($context["nb_plans"] ?? null) > 0)) {
                // line 382
                echo "                  <span class=\"badge bg-secondary ms-2\">";
                echo twig_escape_filter($this->env, ($context["nb_plans"] ?? null), "html", null, true);
                echo "</span>
               ";
            }
            // line 384
            echo "            </button>
         </h2>
         <div id=\"plans\" class=\"accordion-collapse collapse ";
            // line 386
            echo ((($context["plans_show"] ?? null)) ? ("show") : (""));
            echo "\" aria-labelledby=\"plans-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               ";
            // line 388
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["plans_fields"] ?? null));
            foreach ($context['_seq'] as $context["plans_field"] => $context["label"]) {
                // line 389
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => $context["plans_field"]], "method", false, false, false, 389)) {
                    // line 390
                    echo "                     ";
                    echo twig_call_macro($macros["fields"], "macro_textareaField", [                    // line 391
$context["plans_field"], (($__internal_compile_34 = twig_get_attribute($this->env, $this->source,                     // line 392
($context["item"] ?? null), "fields", [], "any", false, false, false, 392)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34[$context["plans_field"]] ?? null) : null),                     // line 393
$context["label"], twig_array_merge(                    // line 394
($context["field_options"] ?? null), ["enable_richtext" => true, "is_horizontal" => false])], 390, $context, $this->getSourceContext());
                    // line 398
                    echo "
                  ";
                }
                // line 400
                echo "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plans_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 401
            echo "            </div>
         </div>
      </div>
   ";
        }
        // line 405
        echo "
   ";
        // line 406
        if (($context["ticket_ticket"] ?? null)) {
            // line 407
            echo "      ";
            $context["linked_tickets_show"] = (((twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "linked_tickets", [], "array", true, true, false, 407) && ((($__internal_compile_35 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["linked_tickets"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 408
            echo "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"linked_tickets-heading\" title=\"";
            // line 409
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Ticket_Ticket", ($context["nb_linked_tickets"] ?? null)), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 410
            echo ((($context["linked_tickets_show"] ?? null)) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#linked_tickets\" aria-expanded=\"true\" aria-controls=\"linked_tickets\">
               <i class=\"ti ti-link me-1\"></i>
               ";
            // line 412
            $context["linked_tickets"] = twig_get_attribute($this->env, $this->source, ($context["ticket_ticket"] ?? null), "getLinkedTicketsTo", [0 => (($__internal_compile_36 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 412)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["id"] ?? null) : null)], "method", false, false, false, 412);
            // line 413
            echo "               ";
            $context["nb_linked_tickets"] = twig_length_filter($this->env, ($context["linked_tickets"] ?? null));
            // line 414
            echo "               ";
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 414) && ((($__internal_compile_37 = (($__internal_compile_38 = ($context["params"] ?? null)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["_link"] ?? null) : null)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["tickets_id_2"] ?? null) : null) > 0))) {
                // line 415
                echo "                  ";
                $context["nb_linked_tickets"] = 1;
                // line 416
                echo "               ";
            }
            // line 417
            echo "               <span class=\"item-title\">
                    ";
            // line 418
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Ticket_Ticket", ($context["nb_linked_tickets"] ?? null)), "html", null, true);
            echo "
               </span>
               ";
            // line 420
            if ((($context["nb_linked_tickets"] ?? null) > 0)) {
                // line 421
                echo "                  <span class=\"badge bg-secondary ms-2\">";
                echo twig_escape_filter($this->env, ($context["nb_linked_tickets"] ?? null), "html", null, true);
                echo "</span>
               ";
            }
            // line 423
            echo "            </button>
         </h2>
         <div id=\"linked_tickets\" class=\"accordion-collapse collapse ";
            // line 425
            echo ((($context["linked_tickets_show"] ?? null)) ? ("show") : (""));
            echo "\" aria-labelledby=\"linked_tickets-heading\">
            <div class=\"accordion-body\">
               ";
            // line 427
            echo twig_include($this->env, $context, "components/itilobject/linked_tickets.html.twig");
            echo "
            </div>
         </div>
      </div>
   ";
        }
        // line 432
        echo "
    <span class=\"d-none d-md-block\">
        <button type=\"button\" class=\"switch-panel-width btn btn-icon btn-ghost-secondary position-absolute bottom-0 start-0 mb-2\">
            <i class=\"fas fa-caret-left\"></i>
        </button>
    </span>
</div>

<script type=\"text/javascript\">
\$(function() {
   if (\$(window).width() < 768) { // medium breakpoint (Todo check if it's possible to get bootstrap breakpoints withint javascript)
      \$('#itil-data .accordion-collapse').each(function() {
         \$(this).removeClass('show');
      })
   }
});

var reloadCategory = function() {
    var type = \$('[name=type]').val();

    \$('#category_block_";
        // line 452
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo " .field-container').load(
        '";
        // line 453
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("ajax/dropdownTicketCategories.php"), "html", null, true);
        echo "',
        {
            'type': type,
            'entity_restrict': ";
        // line 456
        echo twig_escape_filter($this->env, (($__internal_compile_39 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 456)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["entities_id"] ?? null) : null), "html", null, true);
        echo ",
            'value': ";
        // line 457
        echo twig_escape_filter($this->env, (($__internal_compile_40 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 457)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["itilcategories_id"] ?? null) : null), "html", null, true);
        echo ",
        }
    );
};
</script>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/fields_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  838 => 457,  834 => 456,  828 => 453,  824 => 452,  802 => 432,  794 => 427,  789 => 425,  785 => 423,  779 => 421,  777 => 420,  772 => 418,  769 => 417,  766 => 416,  763 => 415,  760 => 414,  757 => 413,  755 => 412,  750 => 410,  746 => 409,  743 => 408,  740 => 407,  738 => 406,  735 => 405,  729 => 401,  723 => 400,  719 => 398,  717 => 394,  716 => 393,  715 => 392,  714 => 391,  712 => 390,  709 => 389,  705 => 388,  700 => 386,  696 => 384,  690 => 382,  688 => 381,  683 => 379,  677 => 376,  673 => 375,  670 => 374,  668 => 373,  665 => 372,  659 => 371,  656 => 370,  653 => 369,  650 => 368,  645 => 367,  643 => 366,  640 => 365,  637 => 360,  635 => 359,  632 => 358,  626 => 354,  620 => 353,  616 => 351,  614 => 347,  613 => 346,  612 => 345,  611 => 344,  609 => 343,  606 => 342,  602 => 341,  597 => 339,  593 => 337,  587 => 335,  585 => 334,  580 => 332,  574 => 329,  570 => 328,  567 => 327,  564 => 326,  558 => 325,  555 => 324,  552 => 323,  549 => 322,  544 => 321,  542 => 320,  539 => 319,  536 => 313,  534 => 312,  531 => 311,  528 => 310,  520 => 305,  515 => 303,  511 => 301,  505 => 299,  503 => 298,  498 => 296,  492 => 293,  488 => 292,  485 => 291,  482 => 290,  479 => 289,  477 => 288,  474 => 287,  468 => 285,  465 => 284,  463 => 283,  460 => 282,  452 => 277,  447 => 275,  443 => 273,  439 => 271,  437 => 270,  431 => 267,  425 => 264,  421 => 263,  418 => 262,  415 => 261,  413 => 260,  405 => 255,  400 => 253,  393 => 249,  387 => 246,  381 => 243,  377 => 242,  374 => 241,  372 => 240,  364 => 235,  359 => 233,  356 => 232,  352 => 230,  350 => 229,  349 => 227,  347 => 225,  345 => 224,  342 => 223,  338 => 221,  336 => 217,  335 => 216,  334 => 214,  332 => 211,  330 => 210,  327 => 209,  323 => 207,  321 => 204,  320 => 202,  319 => 200,  317 => 197,  315 => 196,  310 => 194,  307 => 193,  303 => 191,  301 => 185,  300 => 183,  298 => 180,  296 => 179,  291 => 177,  286 => 174,  284 => 173,  283 => 171,  282 => 168,  277 => 167,  274 => 166,  271 => 165,  268 => 164,  265 => 163,  262 => 162,  259 => 161,  256 => 160,  253 => 159,  250 => 158,  247 => 157,  244 => 156,  241 => 155,  238 => 152,  235 => 151,  232 => 150,  229 => 147,  226 => 146,  224 => 144,  223 => 143,  222 => 142,  219 => 141,  215 => 139,  212 => 138,  209 => 137,  206 => 136,  203 => 135,  200 => 134,  198 => 133,  197 => 130,  195 => 129,  193 => 128,  190 => 127,  186 => 125,  184 => 124,  183 => 122,  181 => 120,  179 => 119,  176 => 118,  172 => 116,  170 => 115,  169 => 113,  167 => 111,  165 => 110,  162 => 109,  158 => 107,  156 => 106,  155 => 104,  153 => 102,  151 => 101,  147 => 99,  145 => 98,  144 => 96,  143 => 94,  140 => 93,  137 => 92,  133 => 90,  131 => 89,  130 => 87,  128 => 85,  126 => 84,  123 => 83,  118 => 80,  112 => 78,  109 => 77,  105 => 75,  103 => 72,  102 => 71,  101 => 69,  99 => 66,  96 => 65,  94 => 64,  89 => 62,  83 => 59,  76 => 55,  70 => 52,  64 => 49,  60 => 47,  58 => 46,  54 => 44,  52 => 43,  50 => 42,  47 => 41,  45 => 39,  44 => 38,  43 => 37,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/fields_panel.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\fields_panel.html.twig");
    }
}
