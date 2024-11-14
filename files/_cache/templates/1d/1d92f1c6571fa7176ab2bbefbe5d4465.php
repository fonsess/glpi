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

/* components/itilobject/selfservice.html.twig */
class __TwigTemplate_b361e40ec4e4d24cceea4b8b05d04436 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/selfservice.html.twig", 34)->unwrap();
        // line 35
        echo "
";
        // line 36
        $context["rand"] = twig_random($this->env);
        // line 37
        $context["base_field_options"] = ["is_horizontal" => false, "full_width" => true, "full_width_adapt_column" => false, "fields_template" =>         // line 41
($context["itiltemplate"] ?? null), "rand" =>         // line 42
($context["rand"] ?? null)];
        // line 44
        $context["right_field_options"] = twig_array_merge(($context["base_field_options"] ?? null), ["is_horizontal" => true, "label_class" => "col-lg-3", "input_class" => "col-lg-9"]);
        // line 49
        echo "
<div class=\"container-lg\">

    ";
        // line 52
        if ((($context["has_tickets_to_validate"] ?? null) &&  !twig_test_empty(($context["url_validate"] ?? null)))) {
            // line 53
            echo "        <div class=\"alert alert-warning\" role=\"alert\">
            ";
            // line 54
            echo twig_escape_filter($this->env, __("There are some tickets awaiting approval"), "html", null, true);
            echo " — <a href=\"";
            echo twig_escape_filter($this->env, ($context["url_validate"] ?? null), "html", null, true);
            echo "\" class=\"alert-link\">";
            echo twig_escape_filter($this->env, __("check it out!"), "html", null, true);
            echo "</a>
        </div>
    ";
        }
        // line 57
        echo "
   ";
        // line 58
        echo twig_include($this->env, $context, "components/itilobject/mainform_open.html.twig");
        echo "

   ";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        echo "

   <div class=\"card\">
        <div class=\"card-header\">
            <h3 class=\"card-title\">
                ";
        // line 65
        echo twig_escape_filter($this->env, __("Describe the incident or request"), "html", null, true);
        echo "
            </h3>
        </div>

        <div class=\"card-body bg-secondary-lt pt-0\">
            ";
        // line 70
        if (twig_length_filter($this->env, ($context["delegating"] ?? null))) {
            // line 71
            echo "                <div class=\"row align-items-end w-100\">
                    <div class=\"col-sm-6\">

                        ";
            // line 74
            ob_start(function () { return ''; });
            // line 75
            echo "                            <div id=\"delegate_other";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" class=\"card mt-2\">
                                <div class=\"card-body\">
                                    ";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "showActorAddFormOnCreate", [0 => twig_constant("CommonITILActor::REQUESTER"), 1 =>             // line 79
($context["params"] ?? null)], "method", false, false, false, 77)), "truncate", [0 => 0], "method", false, false, false, 80), "html", null, true);
            // line 80
            echo "
                                </div>
                            </div>
                        ";
            $context["actor_add_form"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 84
            echo "
                        ";
            // line 85
            echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["nodelegate", (($__internal_compile_0 =             // line 87
($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["nodelegate"] ?? null) : null), __("This ticket concerns me"), twig_array_merge(            // line 89
($context["base_field_options"] ?? null), ["add_field_html" =>             // line 90
($context["actor_add_form"] ?? null)])], 85, $context, $this->getSourceContext());
            // line 92
            echo "
                    </div>
                    <div class=\"col-sm-6 ";
            // line 94
            echo ((($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_check_pref") && (($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["nodelegate"] ?? null) : null))) ? ("") : ("d-none"));
            echo "\" id=\"user-info";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "-block\">
                        ";
            // line 95
            ob_start(function () { return ''; });
            // line 96
            echo "                        <div class=\"d-inline-flex\">
                            <div class=\"card mb-0\" id=\"user-info";
            // line 97
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\">
                                <div class=\"card-body\">
                                    ";
            // line 99
            $context["user"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentUser();
            // line 100
            echo "                                    ";
            $context["user_fields"] = twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "fields", [], "any", false, false, false, 100);
            // line 101
            echo "                                    ";
            $context["user_fields"] = twig_array_merge(($context["user_fields"] ?? null), ["user_name" => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getFriendlyName", [], "method", false, false, false, 101))]);
            // line 102
            echo "                                    ";
            $context["user_fields"] = twig_array_merge(($context["user_fields"] ?? null), ["email" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getDefaultEmail", [], "method", false, false, false, 102)]);
            // line 103
            echo "                                    ";
            echo twig_include($this->env, $context, "components/user/info_card.html.twig", ["user" =>             // line 104
($context["user_fields"] ?? null), "can_edit" => true], false);
            // line 106
            echo "
                                </div>
                            </div>
                        </div>
                        ";
            $context["personal_information"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 111
            echo "                        ";
            echo twig_call_macro($macros["fields"], "macro_field", ["",             // line 113
($context["personal_information"] ?? null), __("Check your personnal information"),             // line 115
($context["base_field_options"] ?? null)], 111, $context, $this->getSourceContext());
            // line 116
            echo "
                    </div>
                </div>

            ";
        } else {
            // line 121
            echo "                <input type=\"hidden\" name=\"_users_id_requester\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"), "html", null, true);
            echo "\">
            ";
        }
        // line 123
        echo "        </div>
        <div class=\"card-body row mx-0\">
            <div class=\"offset-md-1 col-md-8 col-xxl-6\">

               ";
        // line 127
        $context["cat_params"] = twig_array_merge(($context["right_field_options"] ?? null), ["on_change" => "this.form.submit()"]);
        // line 130
        echo "               ";
        $context["condition"] = ["is_helpdeskvisible" => 1];
        // line 133
        echo "               ";
        if (((($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["type"] ?? null) : null) == twig_constant("Ticket::INCIDENT_TYPE"))) {
            // line 134
            echo "                  ";
            $context["condition"] = twig_array_merge(($context["condition"] ?? null), ["is_incident" => 1]);
            // line 135
            echo "               ";
        } elseif (((($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["type"] ?? null) : null) == twig_constant("Ticket::DEMAND_TYPE"))) {
            // line 136
            echo "                  ";
            $context["condition"] = twig_array_merge(($context["condition"] ?? null), ["is_request" => 1]);
            // line 137
            echo "               ";
        }
        // line 138
        echo "               ";
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["ITILCategory", "itilcategories_id", (($__internal_compile_4 =         // line 141
($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["itilcategories_id"] ?? null) : null), _n("Category", "Categories", 1), twig_array_merge(        // line 143
($context["cat_params"] ?? null), ["condition" => ($context["condition"] ?? null)])], 138, $context, $this->getSourceContext());
        // line 144
        echo "

               ";
        // line 146
        echo twig_call_macro($macros["fields"], "macro_field", ["urgency", twig_get_attribute($this->env, $this->source,         // line 148
($context["item"] ?? null), "dropdownUrgency", [0 => ["value" => (($__internal_compile_5 =         // line 149
($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["urgency"] ?? null) : null), "width" => "100%", "display" => false, "required" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 152
($context["right_field_options"] ?? null), "fields_template", [], "any", false, false, false, 152), "isMandatoryField", [0 => "urgency"], "method", false, false, false, 152)]], "method", false, false, false, 148), __("Urgency"),         // line 155
($context["right_field_options"] ?? null)], 146, $context, $this->getSourceContext());
        // line 156
        echo "

               ";
        // line 158
        if (((($__internal_compile_6 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["helpdesk_hardware"] ?? null) : null) && twig_length_filter($this->env, (($__internal_compile_7 = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactiveprofile")) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["helpdesk_item_type"] ?? null) : null)))) {
            // line 159
            echo "                  ";
            ob_start(function () { return ''; });
            // line 160
            echo "                     <a class=\"btn btn-sm btn-ghost-secondary mt-2\" role=\"button\"
                        id=\"btn-collapse-items";
            // line 161
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"
                        aria-expanded=\"false\" aria-controls=\"collapse-items";
            // line 162
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"
                        data-bs-toggle=\"collapse\" href=\"#collapse-items";
            // line 163
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" >
                        <i class=\"fas fa-plus\"></i>
                     </a>
                     <div class=\"collapse\" id=\"collapse-items";
            // line 166
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\">
                        ";
            // line 167
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Item_Ticket::itemAddForm", [0 => ($context["item"] ?? null), 1 => twig_array_merge(($context["params"] ?? null), ["_canupdate" => Session::haveRight("ticket", twig_constant("CREATE")), "_tickettemplate" =>             // line 169
($context["itiltemplate"] ?? null)])]);
            // line 171
            echo "                     </div>
                  ";
            $context["associated_items"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 173
            echo "
                  ";
            // line 174
            echo twig_call_macro($macros["fields"], "macro_field", ["items_id",             // line 176
($context["associated_items"] ?? null), _n("Associated element", "Associated elements", Session::getPluralNumber()),             // line 178
($context["right_field_options"] ?? null)], 174, $context, $this->getSourceContext());
            // line 179
            echo "
               ";
        }
        // line 181
        echo "
               ";
        // line 182
        if (( !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => "_users_id_observer"], "method", false, false, false, 182) ||  !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => "_groups_id_observer"], "method", false, false, false, 182))) {
            // line 183
            echo "                  ";
            ob_start(function () { return ''; });
            // line 184
            echo "
                     ";
            // line 185
            echo twig_include($this->env, $context, "components/itilobject/actors/main.html.twig", ["item" =>             // line 186
($context["item"] ?? null), "entities_id" =>             // line 187
($context["entities_id"] ?? null), "itiltemplate" =>             // line 188
($context["itiltemplate"] ?? null), "field_options" =>             // line 189
($context["right_field_options"] ?? null), "canupdate" => true, "returned_itemtypes" => [0 => "User"], "display_actortypes" => [0 => "observer"], "display_labels" => false, "canassigntome" => false]);
            // line 195
            echo "
                  ";
            $context["observer_field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 197
            echo "                  ";
            echo twig_call_macro($macros["fields"], "macro_field", ["observer",             // line 199
($context["observer_field"] ?? null), _n("Watcher", "Watchers", Session::getPluralNumber()), twig_array_merge(            // line 201
($context["right_field_options"] ?? null), ["required" => (twig_get_attribute($this->env, $this->source,             // line 202
($context["itiltemplate"] ?? null), "isMandatoryField", [0 => "_users_id_observer"], "method", false, false, false, 202) || twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [0 => "_groups_id_observer"], "method", false, false, false, 202))])], 197, $context, $this->getSourceContext());
            // line 204
            echo "
               ";
        }
        // line 206
        echo "
               ";
        // line 207
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Location", "locations_id", (($__internal_compile_8 =         // line 210
($context["params"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), twig_array_merge(        // line 212
($context["right_field_options"] ?? null), ["hide_if_no_elements" => true])], 207, $context, $this->getSourceContext());
        // line 215
        echo "

               ";
        // line 217
        echo twig_call_macro($macros["fields"], "macro_textField", ["name", (($__internal_compile_9 =         // line 219
($context["params"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["name"] ?? null) : null), __("Title"),         // line 221
($context["right_field_options"] ?? null)], 217, $context, $this->getSourceContext());
        // line 222
        echo "

               ";
        // line 224
        $context["uploads"] = [];
        // line 225
        echo "               ";
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_content", [], "any", true, true, false, 225)) {
            // line 226
            echo "                  ";
            $context["uploads"] = twig_array_merge(($context["uploads"] ?? null), ["_content" => twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_content", [], "any", false, false, false, 226), "_tag_content" => twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_tag_content", [], "any", false, false, false, 226)]);
            // line 227
            echo "               ";
        }
        // line 228
        echo "               ";
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_filename", [], "any", true, true, false, 228)) {
            // line 229
            echo "                  ";
            $context["uploads"] = twig_array_merge(($context["uploads"] ?? null), ["_filename" => twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_filename", [], "any", false, false, false, 229), "_tag_filename" => twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_tag_filename", [], "any", false, false, false, 229)]);
            // line 230
            echo "               ";
        }
        // line 231
        echo "
               ";
        // line 232
        echo twig_call_macro($macros["fields"], "macro_textareaField", ["content", (($__internal_compile_10 =         // line 234
($context["params"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["content"] ?? null) : null), __("Description"), twig_array_merge(        // line 236
($context["right_field_options"] ?? null), ["enable_richtext" => true, "enable_fileupload" => ((twig_get_attribute($this->env, $this->source,         // line 238
($context["itiltemplate"] ?? null), "isHiddenField", [0 => "_documents_id"], "method", false, false, false, 238)) ? (false) : (true)), "uploads" =>         // line 239
($context["uploads"] ?? null)])], 232, $context, $this->getSourceContext());
        // line 241
        echo "
            </div>
        </div>

      ";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::POST_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        echo "

        <div class=\"card-footer text-center\">
            <input type=\"hidden\" name=\"entities_id\" value=\"";
        // line 248
        echo twig_escape_filter($this->env, ($context["entities_id"] ?? null), "html", null, true);
        echo "\" />
            <button type=\"submit\" class=\"btn btn-primary\" name=\"add\">
                <i class=\"fas fa-plus\"></i>
                <span>";
        // line 251
        echo twig_escape_filter($this->env, __("Submit message"), "html", null, true);
        echo "</span>
            </button>
        </div>
    </div>

   ";
        // line 256
        echo twig_include($this->env, $context, "components/itilobject/mainform_close.html.twig");
        echo "
</div>

<script type=\"text/javascript\">
\$(function () {
    \$('#btn-collapse-items";
        // line 261
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').on('click', function() {
        \$(this).hide();
    });

    \$('#dropdown_nodelegate";
        // line 265
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "').on('change', function() {
        var is_for_me = (\$(this).val() == '1');
        \$('#user-info";
        // line 267
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "-block').toggleClass('d-none', !is_for_me);
        \$('#delegate_other";
        // line 268
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo " .card-body')
            .html(\"\")
            .load('";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("ajax/dropdownDelegationUsers.php"), "html", null, true);
        echo "', {
                'right': \"delegate\",
                'nodelegate': (is_for_me ? 1 : 0),
                '_users_id_requester': ";
        // line 273
        echo twig_escape_filter($this->env, (($__internal_compile_11 = ($context["params"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["_users_id_requester"] ?? null) : null), "html", null, true);
        echo ",
                '_users_id_requester_notif': ";
        // line 274
        echo json_encode((($__internal_compile_12 = ($context["params"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["_users_id_requester_notif"] ?? null) : null));
        echo ",
                'use_notification': ";
        // line 275
        echo twig_escape_filter($this->env, (($__internal_compile_13 = (($__internal_compile_14 = ($context["params"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["_users_id_requester_notif"] ?? null) : null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["use_notification"] ?? null) : null), "html", null, true);
        echo ",
                'entity_restrict':  ";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), "html", null, true);
        echo "
            });
    })

    saveActorsToDom();
});
</script>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/selfservice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 276,  426 => 275,  422 => 274,  418 => 273,  412 => 270,  407 => 268,  403 => 267,  398 => 265,  391 => 261,  383 => 256,  375 => 251,  369 => 248,  363 => 245,  357 => 241,  355 => 239,  354 => 238,  353 => 236,  352 => 234,  351 => 232,  348 => 231,  345 => 230,  342 => 229,  339 => 228,  336 => 227,  333 => 226,  330 => 225,  328 => 224,  324 => 222,  322 => 221,  321 => 219,  320 => 217,  316 => 215,  314 => 212,  313 => 210,  312 => 207,  309 => 206,  305 => 204,  303 => 202,  302 => 201,  301 => 199,  299 => 197,  295 => 195,  293 => 189,  292 => 188,  291 => 187,  290 => 186,  289 => 185,  286 => 184,  283 => 183,  281 => 182,  278 => 181,  274 => 179,  272 => 178,  271 => 176,  270 => 174,  267 => 173,  263 => 171,  261 => 169,  260 => 167,  256 => 166,  250 => 163,  246 => 162,  242 => 161,  239 => 160,  236 => 159,  234 => 158,  230 => 156,  228 => 155,  227 => 152,  226 => 149,  225 => 148,  224 => 146,  220 => 144,  218 => 143,  217 => 141,  215 => 138,  212 => 137,  209 => 136,  206 => 135,  203 => 134,  200 => 133,  197 => 130,  195 => 127,  189 => 123,  183 => 121,  176 => 116,  174 => 115,  173 => 113,  171 => 111,  164 => 106,  162 => 104,  160 => 103,  157 => 102,  154 => 101,  151 => 100,  149 => 99,  144 => 97,  141 => 96,  139 => 95,  133 => 94,  129 => 92,  127 => 90,  126 => 89,  125 => 87,  124 => 85,  121 => 84,  115 => 80,  113 => 79,  112 => 77,  106 => 75,  104 => 74,  99 => 71,  97 => 70,  89 => 65,  81 => 60,  76 => 58,  73 => 57,  63 => 54,  60 => 53,  58 => 52,  53 => 49,  51 => 44,  49 => 42,  48 => 41,  47 => 37,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/selfservice.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\selfservice.html.twig");
    }
}
