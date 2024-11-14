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

/* components/itilobject/timeline/timeline.html.twig */
class __TwigTemplate_2bb8af9f2bda162b8168832abf146fce extends Template
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
        $context["is_timeline_reversed"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("timeline_order") == twig_constant("CommonITILObject::TIMELINE_ORDER_REVERSE"));
        // line 35
        echo "
<div class=\"itil-timeline d-flex flex-column align-items-start mb-auto\">
    ";
        // line 37
        if ( !($context["is_timeline_reversed"] ?? null)) {
            // line 38
            echo "        ";
            echo twig_include($this->env, $context, "components/itilobject/timeline/main_description.html.twig");
            echo "
    ";
        } else {
            // line 40
            echo "        ";
            echo twig_include($this->env, $context, "components/itilobject/timeline/approbation_form.html.twig");
            echo "
        ";
            // line 41
            echo twig_include($this->env, $context, "components/itilobject/answer.html.twig");
            echo "
    ";
        }
        // line 43
        echo "
   ";
        // line 44
        $context["status_closed"] = twig_in_filter((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 44)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["status"] ?? null) : null), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getClosedStatusArray", [], "method", false, false, false, 44));
        // line 45
        echo "   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timeline"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 46
            echo "      ";
            $context["entry_i"] = (($__internal_compile_1 = $context["entry"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["item"] ?? null) : null);
            // line 47
            echo "      ";
            $context["entry_object"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem((($__internal_compile_2 = $context["entry"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["type"] ?? null) : null), (($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["id"] ?? null) : null));
            // line 48
            echo "      ";
            $context["users_id"] = (($__internal_compile_4 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["users_id"] ?? null) : null);
            // line 49
            echo "      ";
            $context["is_private"] = (((twig_get_attribute($this->env, $this->source, ($context["entry_i"] ?? null), "is_private", [], "array", true, true, false, 49) &&  !(null === (($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["is_private"] ?? null) : null)))) ? ((($__internal_compile_6 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["is_private"] ?? null) : null)) : (false));
            // line 50
            echo "      ";
            $context["date_creation"] = (((twig_get_attribute($this->env, $this->source, ($context["entry_i"] ?? null), "date_creation", [], "array", true, true, false, 50) &&  !(null === (($__internal_compile_7 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["date_creation"] ?? null) : null)))) ? ((($__internal_compile_8 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["date_creation"] ?? null) : null)) : ((($__internal_compile_9 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["date"] ?? null) : null)));
            // line 51
            echo "      ";
            $context["date_mod"] = (($__internal_compile_10 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["date_mod"] ?? null) : null);
            // line 52
            echo "      ";
            $context["entry_rand"] = twig_random($this->env);
            // line 53
            echo "      ";
            $context["is_current_user"] = (($context["users_id"] ?? null) == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"));
            // line 54
            echo "      ";
            $context["anonym_user"] = ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk") &&  !($context["is_current_user"] ?? null)) && ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) != twig_constant("Entity::ANONYMIZE_DISABLED")));
            // line 55
            echo "
      ";
            // line 56
            $context["can_edit_i"] = (($__internal_compile_11 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["can_edit"] ?? null) : null);
            // line 57
            echo "      ";
            $context["can_promote"] = (((((($__internal_compile_12 = $context["entry"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["type"] ?? null) : null) == "ITILFollowup") || ((($__internal_compile_13 = $context["entry"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["type"] ?? null) : null) == "TicketTask")) && ($context["can_edit_i"] ?? null)) &&  !($context["status_closed"] ?? null));
            // line 58
            echo "      ";
            $context["is_promoted"] = (($context["can_promote"] ?? null) && ((($__internal_compile_14 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["sourceof_items_id"] ?? null) : null) > 0));
            // line 59
            echo "
      ";
            // line 60
            $context["timeline_position"] = (($__internal_compile_15 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["timeline_position"] ?? null) : null);
            // line 61
            echo "      ";
            $context["item_position"] = "t-left";
            // line 62
            echo "      ";
            if ((($context["timeline_position"] ?? null) == twig_constant("CommonITILObject::TIMELINE_LEFT"))) {
                // line 63
                echo "         ";
                $context["item_position"] = "t-left";
                // line 64
                echo "      ";
            } elseif ((($context["timeline_position"] ?? null) == twig_constant("CommonITILObject::TIMELINE_MIDLEFT"))) {
                // line 65
                echo "         ";
                $context["item_position"] = "t-left t-middle";
                // line 66
                echo "      ";
            } elseif ((($context["timeline_position"] ?? null) == twig_constant("CommonITILObject::TIMELINE_MIDRIGHT"))) {
                // line 67
                echo "         ";
                $context["item_position"] = "t-right t-middle";
                // line 68
                echo "      ";
            } elseif ((($context["timeline_position"] ?? null) == twig_constant("CommonITILObject::TIMELINE_RIGHT"))) {
                // line 69
                echo "         ";
                $context["item_position"] = "t-right";
                // line 70
                echo "      ";
            }
            // line 71
            echo "
      ";
            // line 72
            $context["itiltype"] = ((twig_get_attribute($this->env, $this->source, $context["entry"], "itiltype", [], "array", true, true, false, 72)) ? (("ITIL" . (($__internal_compile_16 = $context["entry"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["itiltype"] ?? null) : null))) : ((($__internal_compile_17 = $context["entry"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["type"] ?? null) : null)));
            // line 73
            echo "
      ";
            // line 74
            $context["state_class"] = "";
            // line 75
            echo "      ";
            if (((($__internal_compile_18 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["state"] ?? null) : null) === constant("Planning::INFO"))) {
                // line 76
                echo "         ";
                $context["state_class"] = "info";
                // line 77
                echo "      ";
            }
            // line 78
            echo "      ";
            if (((($__internal_compile_19 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["state"] ?? null) : null) === constant("Planning::TODO"))) {
                // line 79
                echo "         ";
                $context["state_class"] = "todo";
                // line 80
                echo "      ";
            }
            // line 81
            echo "      ";
            if (((($__internal_compile_20 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["state"] ?? null) : null) === constant("Planning::DONE"))) {
                // line 82
                echo "         ";
                $context["state_class"] = "done";
                // line 83
                echo "      ";
            }
            // line 84
            echo "
      ";
            // line 85
            $context["solution_class"] = "";
            // line 86
            echo "      ";
            if ((((($context["itiltype"] ?? null) == "ITILSolution") || (($context["itiltype"] ?? null) == "ITILValidation")) && twig_get_attribute($this->env, $this->source, ($context["entry_i"] ?? null), "status", [], "array", true, true, false, 86))) {
                // line 87
                echo "         ";
                $context["status"] = (((($context["itiltype"] ?? null) == "ITILSolution")) ? ((($__internal_compile_21 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["status"] ?? null) : null)) : (twig_replace_filter((($__internal_compile_22 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["status"] ?? null) : null), ["status_" => ""])));
                // line 88
                echo "         ";
                if ((($context["status"] ?? null) == twig_constant("CommonITILValidation::WAITING"))) {
                    // line 89
                    echo "            ";
                    $context["solution_class"] = "waiting";
                    // line 90
                    echo "         ";
                }
                // line 91
                echo "         ";
                if ((($context["status"] ?? null) == twig_constant("CommonITILValidation::ACCEPTED"))) {
                    // line 92
                    echo "            ";
                    $context["solution_class"] = "accepted";
                    // line 93
                    echo "         ";
                }
                // line 94
                echo "         ";
                if ((($context["status"] ?? null) == twig_constant("CommonITILValidation::REFUSED"))) {
                    // line 95
                    echo "            ";
                    $context["solution_class"] = "refused";
                    // line 96
                    echo "         ";
                }
                // line 97
                echo "      ";
            }
            // line 98
            echo "
      <div class=\"timeline-item mb-3 ";
            // line 99
            echo twig_escape_filter($this->env, ($context["itiltype"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["state_class"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_compile_23 = $context["entry"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["class"] ?? null) : null), "html", null, true);
            echo " ";
            echo ((twig_in_filter("right", ($context["item_position"] ?? null))) ? ("ms-auto") : (""));
            echo "\"
            data-itemtype=\"";
            // line 100
            echo twig_escape_filter($this->env, (($__internal_compile_24 = $context["entry"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["type"] ?? null) : null), "html", null, true);
            echo "\" data-items-id=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_25 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["id"] ?? null) : null), "html", null, true);
            echo "\"
            ";
            // line 101
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "item_action", [], "array", true, true, false, 101)) {
                echo "data-item-action=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_26 = $context["entry"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["item_action"] ?? null) : null), "html", null, true);
                echo "\"";
            }
            echo ">

         ";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::PRE_SHOW_ITEM"), ["item" => ($context["entry_object"] ?? null), "options" => ["parent" => ($context["item"] ?? null), "rand" => ($context["entry_rand"] ?? null)]]), "html", null, true);
            echo "

         <div class=\"row\">
            <div class=\"col-auto todo-list-state ";
            // line 106
            echo ((twig_in_filter("left", ($context["item_position"] ?? null))) ? ("ms-auto ms-0 order-sm-last") : (""));
            echo "\">
               ";
            // line 107
            if (((($__internal_compile_27 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["state"] ?? null) : null) === constant("Planning::TODO"))) {
                // line 108
                echo "                  ";
                if (($context["can_edit_i"] ?? null)) {
                    // line 109
                    echo "                     <span class=\"state state_1\" onclick=\"change_task_state(";
                    echo twig_escape_filter($this->env, (($__internal_compile_28 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["id"] ?? null) : null), "html", null, true);
                    echo ", this)\" title=\"";
                    echo twig_escape_filter($this->env, __("To do"), "html", null, true);
                    echo "\"></span>
                  ";
                } else {
                    // line 111
                    echo "                     <span class=\"state state_1\" title=\"";
                    echo twig_escape_filter($this->env, __("To do"), "html", null, true);
                    echo "\" style=\"cursor: not-allowed;\"></span>
                  ";
                }
                // line 113
                echo "               ";
            } elseif (((($__internal_compile_29 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["state"] ?? null) : null) === constant("Planning::DONE"))) {
                // line 114
                echo "                  ";
                if (($context["can_edit_i"] ?? null)) {
                    // line 115
                    echo "                     <span class=\"state state_2\" onclick=\"change_task_state(";
                    echo twig_escape_filter($this->env, (($__internal_compile_30 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["id"] ?? null) : null), "html", null, true);
                    echo ", this)\" title=\"";
                    echo twig_escape_filter($this->env, __("Done"), "html", null, true);
                    echo "\"></span>
                  ";
                } else {
                    // line 117
                    echo "                     <span class=\"state state_2\" title=\"";
                    echo twig_escape_filter($this->env, __("Done"), "html", null, true);
                    echo "\" style=\"cursor: not-allowed;\"></span>
                  ";
                }
                // line 119
                echo "               ";
            }
            // line 120
            echo "            </div>

            <div class=\"col-auto d-flex flex-column user-part ";
            // line 122
            echo ((twig_in_filter("right", ($context["item_position"] ?? null))) ? ("ms-auto ms-0 order-sm-last") : ("order-first"));
            echo "\">
               ";
            // line 123
            $context["avatar_rand"] = twig_random($this->env);
            // line 124
            echo "               ";
            // line 125
            echo "               ";
            $context["entry_user"] = (((array_key_exists("users_id", $context) &&  !(null === ($context["users_id"] ?? null)))) ? ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("User", ($context["users_id"] ?? null))) : (null));
            // line 126
            echo "               ";
            if ( !(null === ($context["entry_user"] ?? null))) {
                // line 127
                echo "                  ";
                $context["user_fields"] = twig_get_attribute($this->env, $this->source, ($context["entry_user"] ?? null), "fields", [], "any", false, false, false, 127);
                // line 128
                echo "                  ";
                $context["user_fields"] = twig_array_merge(($context["user_fields"] ?? null), ["user_name" => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(twig_get_attribute($this->env, $this->source, ($context["entry_user"] ?? null), "getFriendlyName", [], "method", false, false, false, 128))]);
                // line 129
                echo "                  ";
                $context["user_fields"] = twig_array_merge(($context["user_fields"] ?? null), ["email" => twig_get_attribute($this->env, $this->source, ($context["entry_user"] ?? null), "getDefaultEmail", [], "method", false, false, false, 129)]);
                // line 130
                echo "                  <span id=\"timeline-avatar";
                echo twig_escape_filter($this->env, ($context["avatar_rand"] ?? null), "html", null, true);
                echo "\">
                     ";
                // line 131
                echo twig_include($this->env, $context, "components/user/picture.html.twig", ["users_id" =>                 // line 132
($context["users_id"] ?? null), "enable_anonymization" =>                 // line 133
($context["anonym_user"] ?? null)], false);
                // line 134
                echo "
                  </span>
                  ";
                // line 136
                if ( !($context["anonym_user"] ?? null)) {
                    // line 137
                    echo "                     ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showToolTip", [0 => twig_include($this->env, $context, "components/user/info_card.html.twig", ["user" =>                     // line 139
($context["user_fields"] ?? null), "enable_anonymization" => false], false), 1 => ["applyto" => ("timeline-avatar" .                     // line 142
($context["avatar_rand"] ?? null))]]);
                    // line 144
                    echo "                  ";
                }
                // line 145
                echo "               ";
            } else {
                // line 146
                echo "                  <span id=\"timeline-avatar";
                echo twig_escape_filter($this->env, ($context["avatar_rand"] ?? null), "html", null, true);
                echo "\"><span class=\"avatar avatar-md rounded\"></span></span>
               ";
            }
            // line 148
            echo "            </div>
            <div class=\"col-12 col-sm d-flex flex-column content-part\">
               <div class=\"mt-2 timeline-content ";
            // line 150
            echo twig_escape_filter($this->env, ($context["solution_class"] ?? null), "html", null, true);
            echo " flex-grow-1 ";
            echo twig_escape_filter($this->env, ($context["item_position"] ?? null), "html", null, true);
            echo " card\">
                  <div class=\"card-body px-1 px-xxl-3\">
                     ";
            // line 152
            echo twig_include($this->env, $context, "components/itilobject/timeline/timeline_item_header.html.twig");
            echo "

                     ";
            // line 154
            if (twig_in_filter(($context["itiltype"] ?? null), twig_array_column(($context["timeline_itemtypes"] ?? null), "type"))) {
                // line 155
                echo "                        ";
                $context["matching_types"] = twig_array_filter($this->env, ($context["timeline_itemtypes"] ?? null), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return (twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "type", [], "any", false, false, false, 155) == ($context["itiltype"] ?? null)); });
                // line 156
                echo "                        ";
                if ((twig_length_filter($this->env, ($context["matching_types"] ?? null)) > 0)) {
                    // line 157
                    echo "                           ";
                    $context["timeline_itemtype"] = twig_first($this->env, ($context["matching_types"] ?? null));
                    // line 158
                    echo "                           ";
                    if (twig_get_attribute($this->env, $this->source, ($context["timeline_itemtype"] ?? null), "template", [], "any", true, true, false, 158)) {
                        // line 159
                        echo "                              ";
                        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["timeline_itemtype"] ?? null), "template", [], "any", false, false, false, 159), ["form_mode" => "view"]);
                        echo "
                           ";
                    }
                    // line 161
                    echo "                        ";
                }
                // line 162
                echo "                     ";
            } else {
                // line 163
                echo "                        <div class=\"read-only-content\">
                           ";
                // line 164
                echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml((($__internal_compile_31 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["content"] ?? null) : null));
                echo "
                        </div>
                     ";
            }
            // line 167
            echo "                     <div class=\"edit-content collapse\">
                        <div class=\"ajax-content\"></div>
                     </div>
                  </div>
               </div>

               ";
            // line 173
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "documents", [], "array", true, true, false, 173)) {
                // line 174
                echo "                  ";
                echo twig_include($this->env, $context, "components/itilobject/timeline/sub_documents.html.twig", ["item" =>                 // line 175
($context["item"] ?? null), "entry" =>                 // line 176
$context["entry"]]);
                // line 177
                echo "
               ";
            }
            // line 179
            echo "            </div>
         </div>

         ";
            // line 182
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::POST_SHOW_ITEM"), ["item" => ($context["entry_object"] ?? null), "options" => ["parent" => ($context["item"] ?? null), "rand" => ($context["entry_rand"] ?? null)]]), "html", null, true);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "
    ";
        // line 186
        if (($context["is_timeline_reversed"] ?? null)) {
            // line 187
            echo "        ";
            echo twig_include($this->env, $context, "components/itilobject/timeline/main_description.html.twig");
            echo "
    ";
        }
        // line 189
        echo "
    <div class=\"timeline-item tasks-title d-none\">
        <h3>";
        // line 191
        echo twig_escape_filter($this->env, _n("Task", "Tasks", Session::getPluralNumber()), "html", null, true);
        echo "</h3>
    </div>

    ";
        // line 194
        echo twig_include($this->env, $context, "components/itilobject/timeline/todo-list-summary.html.twig");
        echo "

    <div class=\"timeline-item validations-title d-none mt-4\">
        <h3>";
        // line 197
        echo twig_escape_filter($this->env, _n("Validation", "Validations", Session::getPluralNumber()), "html", null, true);
        echo "</h3>
    </div>

    ";
        // line 200
        if ( !($context["is_timeline_reversed"] ?? null)) {
            // line 201
            echo "        ";
            echo twig_include($this->env, $context, "components/itilobject/timeline/approbation_form.html.twig");
            echo "
        ";
            // line 202
            echo twig_include($this->env, $context, "components/itilobject/answer.html.twig");
            echo "
    ";
        }
        // line 204
        echo "
</div>

<script type=\"text/javascript\">
\$(function() {
   \$(document).on(\"click\", \".edit-timeline-item\", function() {
      var timeline_item = \$(this).closest(\".timeline-item\");
      var content_block = timeline_item.find(\".timeline-content\");
      var itemtype      = timeline_item.data('itemtype');
      var items_id      = timeline_item.data('items-id');
      var item_action   = timeline_item.data('item-action');

      content_block.find(\".read-only-content\").hide();
      content_block.find(\".edit-content\").show()
         .find(\".ajax-content\")
         .html('<i class=\"fas fa-3x fa-spinner fa-spin ms-auto\"></i>')
         .load(\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/timeline.php"), "html", null, true);
        echo "\", {
            'action'     : 'viewsubitem',
            'type'       : itemtype,
            'parenttype' : '";
        // line 223
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 223), "html", null, true);
        echo "',
            '";
        // line 224
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 224), "html", null, true);
        echo "': ";
        echo twig_escape_filter($this->env, (($__internal_compile_32 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 224)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["id"] ?? null) : null), "html", null, true);
        echo ",
            'id'         : items_id,
            'item_action': item_action
         });

      timeline_item.find('.timeline-item-buttons').addClass('d-none');
      timeline_item.find('.close-edit-content').removeClass('d-none');

      \$(\"#itil-footer\").find(\".main-actions\").hide();
   });

   \$(document).on(\"click\", \".close-edit-content\", function() {
      var timeline_item = \$(this).closest(\".timeline-item\");
      timeline_item.find('.timeline-item-buttons').removeClass('d-none');
      timeline_item.find('.close-edit-content').addClass('d-none');

      timeline_item.find('.ajax-content').html('');
      timeline_item.find('.read-only-content').show();

      \$(\"#itil-footer .main-actions\").show();
   });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/timeline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  542 => 224,  538 => 223,  532 => 220,  514 => 204,  509 => 202,  504 => 201,  502 => 200,  496 => 197,  490 => 194,  484 => 191,  480 => 189,  474 => 187,  472 => 186,  469 => 185,  452 => 182,  447 => 179,  443 => 177,  441 => 176,  440 => 175,  438 => 174,  436 => 173,  428 => 167,  422 => 164,  419 => 163,  416 => 162,  413 => 161,  407 => 159,  404 => 158,  401 => 157,  398 => 156,  395 => 155,  393 => 154,  388 => 152,  381 => 150,  377 => 148,  371 => 146,  368 => 145,  365 => 144,  363 => 142,  362 => 139,  360 => 137,  358 => 136,  354 => 134,  352 => 133,  351 => 132,  350 => 131,  345 => 130,  342 => 129,  339 => 128,  336 => 127,  333 => 126,  330 => 125,  328 => 124,  326 => 123,  322 => 122,  318 => 120,  315 => 119,  309 => 117,  301 => 115,  298 => 114,  295 => 113,  289 => 111,  281 => 109,  278 => 108,  276 => 107,  272 => 106,  266 => 103,  257 => 101,  251 => 100,  241 => 99,  238 => 98,  235 => 97,  232 => 96,  229 => 95,  226 => 94,  223 => 93,  220 => 92,  217 => 91,  214 => 90,  211 => 89,  208 => 88,  205 => 87,  202 => 86,  200 => 85,  197 => 84,  194 => 83,  191 => 82,  188 => 81,  185 => 80,  182 => 79,  179 => 78,  176 => 77,  173 => 76,  170 => 75,  168 => 74,  165 => 73,  163 => 72,  160 => 71,  157 => 70,  154 => 69,  151 => 68,  148 => 67,  145 => 66,  142 => 65,  139 => 64,  136 => 63,  133 => 62,  130 => 61,  128 => 60,  125 => 59,  122 => 58,  119 => 57,  117 => 56,  114 => 55,  111 => 54,  108 => 53,  105 => 52,  102 => 51,  99 => 50,  96 => 49,  93 => 48,  90 => 47,  87 => 46,  69 => 45,  67 => 44,  64 => 43,  59 => 41,  54 => 40,  48 => 38,  46 => 37,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 # ---------------------------------------------------------------------
 #
 # GLPI - Gestionnaire Libre de Parc Informatique
 #
 # http://glpi-project.org
 #
 # @copyright 2015-2023 Teclib' and contributors.
 # @copyright 2003-2014 by the INDEPNET Development Team.
 # @licence   https://www.gnu.org/licenses/gpl-3.0.html
 #
 # ---------------------------------------------------------------------
 #
 # LICENSE
 #
 # This file is part of GLPI.
 #
 # This program is free software: you can redistribute it and/or modify
 # it under the terms of the GNU General Public License as published by
 # the Free Software Foundation, either version 3 of the License, or
 # (at your option) any later version.
 #
 # This program is distributed in the hope that it will be useful,
 # but WITHOUT ANY WARRANTY; without even the implied warranty of
 # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 # GNU General Public License for more details.
 #
 # You should have received a copy of the GNU General Public License
 # along with this program.  If not, see <https://www.gnu.org/licenses/>.
 #
 # ---------------------------------------------------------------------
 #}

{% set is_timeline_reversed = user_pref('timeline_order') == constant('CommonITILObject::TIMELINE_ORDER_REVERSE') %}

<div class=\"itil-timeline d-flex flex-column align-items-start mb-auto\">
    {% if not is_timeline_reversed %}
        {{ include('components/itilobject/timeline/main_description.html.twig') }}
    {% else %}
        {{ include('components/itilobject/timeline/approbation_form.html.twig') }}
        {{ include('components/itilobject/answer.html.twig') }}
    {% endif %}

   {% set status_closed = (item.fields['status'] in item.getClosedStatusArray()) %}
   {% for entry in timeline %}
      {% set entry_i = entry['item'] %}
      {% set entry_object = get_item(entry['type'], entry_i['id']) %}
      {% set users_id = entry_i['users_id'] %}
      {% set is_private = entry_i['is_private'] ?? false %}
      {% set date_creation = entry_i['date_creation'] ?? entry_i['date'] %}
      {% set date_mod = entry_i['date_mod'] %}
      {% set entry_rand = random() %}
      {% set is_current_user = users_id == session('glpiID') %}
      {% set anonym_user = (get_current_interface() == 'helpdesk' and not is_current_user and entity_config('anonymize_support_agents', session('glpiactive_entity')) != constant('Entity::ANONYMIZE_DISABLED')) %}

      {% set can_edit_i  = entry_i['can_edit'] %}
      {% set can_promote = (entry['type'] == 'ITILFollowup' or entry['type'] == 'TicketTask') and can_edit_i and not status_closed %}
      {% set is_promoted = can_promote and entry_i['sourceof_items_id'] > 0 %}

      {% set timeline_position = entry_i['timeline_position'] %}
      {% set item_position = 't-left' %}
      {% if timeline_position == constant('CommonITILObject::TIMELINE_LEFT') %}
         {% set item_position = 't-left' %}
      {% elseif timeline_position == constant('CommonITILObject::TIMELINE_MIDLEFT') %}
         {% set item_position = 't-left t-middle' %}
      {% elseif timeline_position == constant('CommonITILObject::TIMELINE_MIDRIGHT') %}
         {% set item_position = 't-right t-middle' %}
      {% elseif timeline_position == constant('CommonITILObject::TIMELINE_RIGHT') %}
         {% set item_position = 't-right' %}
      {% endif %}

      {% set itiltype = entry['itiltype'] is defined ? 'ITIL' ~ entry['itiltype'] : entry['type'] %}

      {% set state_class = '' %}
      {% if entry_i['state'] is constant('Planning::INFO') %}
         {% set state_class = 'info' %}
      {% endif %}
      {% if entry_i['state'] is constant('Planning::TODO') %}
         {% set state_class = 'todo' %}
      {% endif %}
      {% if entry_i['state'] is constant('Planning::DONE') %}
         {% set state_class = 'done' %}
      {% endif %}

      {% set solution_class = '' %}
      {% if (itiltype == 'ITILSolution' or itiltype == 'ITILValidation') and entry_i['status'] is defined %}
         {% set status = itiltype == 'ITILSolution' ? entry_i['status'] : entry_i['status']|replace({'status_': ''}) %}
         {% if status == constant('CommonITILValidation::WAITING') %}
            {% set solution_class = 'waiting' %}
         {% endif %}
         {% if status == constant('CommonITILValidation::ACCEPTED') %}
            {% set solution_class = 'accepted' %}
         {% endif %}
         {% if status == constant('CommonITILValidation::REFUSED') %}
            {% set solution_class = 'refused' %}
         {% endif %}
      {% endif %}

      <div class=\"timeline-item mb-3 {{ itiltype }} {{ state_class }} {{ entry['class'] }} {{ 'right' in item_position ? 'ms-auto' : '' }}\"
            data-itemtype=\"{{ entry['type'] }}\" data-items-id=\"{{ entry_i['id'] }}\"
            {% if entry['item_action'] is defined %}data-item-action=\"{{ entry['item_action'] }}\"{% endif %}>

         {{ call_plugin_hook(constant('Glpi\\\\Plugin\\\\Hooks::PRE_SHOW_ITEM'), {'item': entry_object, 'options': {'parent': item, 'rand': entry_rand}}) }}

         <div class=\"row\">
            <div class=\"col-auto todo-list-state {{ 'left' in item_position ? 'ms-auto ms-0 order-sm-last' : '' }}\">
               {% if entry_i['state'] is constant('Planning::TODO') %}
                  {% if can_edit_i %}
                     <span class=\"state state_1\" onclick=\"change_task_state({{ entry_i['id'] }}, this)\" title=\"{{ __('To do') }}\"></span>
                  {% else %}
                     <span class=\"state state_1\" title=\"{{ __('To do') }}\" style=\"cursor: not-allowed;\"></span>
                  {% endif %}
               {% elseif entry_i['state'] is constant('Planning::DONE') %}
                  {% if can_edit_i %}
                     <span class=\"state state_2\" onclick=\"change_task_state({{ entry_i['id'] }}, this)\" title=\"{{ __('Done') }}\"></span>
                  {% else %}
                     <span class=\"state state_2\" title=\"{{ __('Done') }}\" style=\"cursor: not-allowed;\"></span>
                  {% endif %}
               {% endif %}
            </div>

            <div class=\"col-auto d-flex flex-column user-part {{ 'right' in item_position ? 'ms-auto ms-0 order-sm-last' : 'order-first' }}\">
               {% set avatar_rand = random() %}
               {# log entries have no users_id #}
               {% set entry_user = users_id is defined and users_id is not null ? get_item('User', users_id) : null %}
               {% if entry_user is not null %}
                  {% set user_fields = entry_user.fields %}
                  {% set user_fields = user_fields|merge({user_name: entry_user.getFriendlyName()|verbatim_value}) %}
                  {% set user_fields = user_fields|merge({email: entry_user.getDefaultEmail()}) %}
                  <span id=\"timeline-avatar{{ avatar_rand }}\">
                     {{ include('components/user/picture.html.twig', {
                        'users_id': users_id,
                        'enable_anonymization': anonym_user
                     }, with_context = false) }}
                  </span>
                  {% if not anonym_user %}
                     {% do call('Html::showToolTip', [
                        include('components/user/info_card.html.twig', {
                           'user': user_fields,
                           'enable_anonymization': false,
                        }, with_context = false), {
                           'applyto': 'timeline-avatar' ~ avatar_rand
                        }]) %}
                  {% endif %}
               {% else %}
                  <span id=\"timeline-avatar{{ avatar_rand }}\"><span class=\"avatar avatar-md rounded\"></span></span>
               {% endif %}
            </div>
            <div class=\"col-12 col-sm d-flex flex-column content-part\">
               <div class=\"mt-2 timeline-content {{ solution_class }} flex-grow-1 {{ item_position }} card\">
                  <div class=\"card-body px-1 px-xxl-3\">
                     {{ include('components/itilobject/timeline/timeline_item_header.html.twig') }}

                     {% if itiltype in timeline_itemtypes|column('type') %}
                        {% set matching_types = timeline_itemtypes|filter((v) => v.type == itiltype) %}
                        {% if matching_types|length > 0 %}
                           {% set timeline_itemtype = matching_types|first %}
                           {% if timeline_itemtype.template is defined %}
                              {{ include(timeline_itemtype.template, {'form_mode': 'view'}) }}
                           {% endif %}
                        {% endif %}
                     {% else %}
                        <div class=\"read-only-content\">
                           {{ entry_i['content']|safe_html }}
                        </div>
                     {% endif %}
                     <div class=\"edit-content collapse\">
                        <div class=\"ajax-content\"></div>
                     </div>
                  </div>
               </div>

               {% if entry['documents'] is defined %}
                  {{ include('components/itilobject/timeline/sub_documents.html.twig', {
                     'item': item,
                     'entry': entry
                  }) }}
               {% endif %}
            </div>
         </div>

         {{ call_plugin_hook(constant('Glpi\\\\Plugin\\\\Hooks::POST_SHOW_ITEM'), {'item': entry_object, 'options': {'parent': item, 'rand': entry_rand}}) }}
      </div>
   {% endfor %}

    {% if is_timeline_reversed %}
        {{ include('components/itilobject/timeline/main_description.html.twig') }}
    {% endif %}

    <div class=\"timeline-item tasks-title d-none\">
        <h3>{{ _n('Task', 'Tasks', get_plural_number()) }}</h3>
    </div>

    {{ include('components/itilobject/timeline/todo-list-summary.html.twig') }}

    <div class=\"timeline-item validations-title d-none mt-4\">
        <h3>{{ _n('Validation', 'Validations', get_plural_number()) }}</h3>
    </div>

    {% if not is_timeline_reversed %}
        {{ include('components/itilobject/timeline/approbation_form.html.twig') }}
        {{ include('components/itilobject/answer.html.twig') }}
    {% endif %}

</div>

<script type=\"text/javascript\">
\$(function() {
   \$(document).on(\"click\", \".edit-timeline-item\", function() {
      var timeline_item = \$(this).closest(\".timeline-item\");
      var content_block = timeline_item.find(\".timeline-content\");
      var itemtype      = timeline_item.data('itemtype');
      var items_id      = timeline_item.data('items-id');
      var item_action   = timeline_item.data('item-action');

      content_block.find(\".read-only-content\").hide();
      content_block.find(\".edit-content\").show()
         .find(\".ajax-content\")
         .html('<i class=\"fas fa-3x fa-spinner fa-spin ms-auto\"></i>')
         .load(\"{{ path('/ajax/timeline.php') }}\", {
            'action'     : 'viewsubitem',
            'type'       : itemtype,
            'parenttype' : '{{ item.getType() }}',
            '{{ item.getForeignKeyField() }}': {{ item.fields['id'] }},
            'id'         : items_id,
            'item_action': item_action
         });

      timeline_item.find('.timeline-item-buttons').addClass('d-none');
      timeline_item.find('.close-edit-content').removeClass('d-none');

      \$(\"#itil-footer\").find(\".main-actions\").hide();
   });

   \$(document).on(\"click\", \".close-edit-content\", function() {
      var timeline_item = \$(this).closest(\".timeline-item\");
      timeline_item.find('.timeline-item-buttons').removeClass('d-none');
      timeline_item.find('.close-edit-content').addClass('d-none');

      timeline_item.find('.ajax-content').html('');
      timeline_item.find('.read-only-content').show();

      \$(\"#itil-footer .main-actions\").show();
   });
});
</script>
", "components/itilobject/timeline/timeline.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\timeline\\timeline.html.twig");
    }
}
