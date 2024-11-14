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

/* components/logs.html.twig */
class __TwigTemplate_eecec27733bc2eff40b8515c9210b82d extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/logs.html.twig", 34)->unwrap();
        // line 35
        echo "
";
        // line 36
        if ((($context["total_number"] ?? null) < 1)) {
            // line 37
            echo "   <div class=\"alert alert-info\">
      ";
            // line 38
            echo twig_escape_filter($this->env, __("No historical"), "html", null, true);
            echo "
   </div>
";
        } else {
            // line 41
            echo "
   ";
            // line 42
            echo twig_include($this->env, $context, "components/pager.html.twig", ["count" => ($context["filtered_number"] ?? null)]);
            echo "
   <div class=\"table-responsive\">
   <table class=\"table table-hover\">
      <thead>
         <tr>
            <th>";
            // line 47
            echo twig_escape_filter($this->env, __("ID"), "html", null, true);
            echo "</th>
            <th>";
            // line 48
            echo twig_escape_filter($this->env, _n("Date", "Dates", 1), "html", null, true);
            echo "</th>
            <th>";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), "html", null, true);
            echo "</th>
            <th>";
            // line 50
            echo twig_escape_filter($this->env, _n("Field", "Fields", 1), "html", null, true);
            echo "</th>
            <th>";
            // line 51
            echo twig_escape_filter($this->env, _x("name", "Update"), "html", null, true);
            echo "</th>
            <th>
               <span class=\"float-end log-toolbar mb-0\">
                  <button class=\"btn btn-sm show_log_filters ";
            // line 54
            echo (((twig_length_filter($this->env, ($context["filters"] ?? null)) > 0)) ? ("btn-secondary active") : ("btn-outline-secondary"));
            echo "\">
                     <i class=\"fas fa-filter\"></i>
                     <span class=\"d-none d-xl-block\">";
            // line 56
            echo twig_escape_filter($this->env, __("Filter"), "html", null, true);
            echo "</span>
                  </button>
                  <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, ($context["csv_url"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-sm text-capitalize btn-icon btn-outline-secondary\">
                     <i class=\"fas fa-file-download\"></i>
                     <span class=\"d-none d-xl-block\">";
            // line 60
            echo twig_escape_filter($this->env, __("Export"), "html", null, true);
            echo "</span>
                  </a>
               </span>
            </th>
         </tr>

         ";
            // line 66
            if ((twig_length_filter($this->env, ($context["filters"] ?? null)) > 0)) {
                // line 67
                echo "         <tr class=\"log_history_filter_row\">
            <td>
               <input type=\"hidden\" name=\"filters[active]\" value=\"1\" />
               <input type=\"hidden\" name=\"items_id\" value=\"";
                // line 70
                echo twig_escape_filter($this->env, ($context["items_id"] ?? null), "html", null, true);
                echo "\" />
            </td>
            <td>
               ";
                // line 73
                echo twig_call_macro($macros["fields"], "macro_dateField", ["filters[date]", (($__internal_compile_0 =                 // line 75
($context["filters"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["date"] ?? null) : null), "", ["no_label" => true, "full_width" => true, "mb" => ""]], 73, $context, $this->getSourceContext());
                // line 82
                echo "
            </td>
            <td>
               <select name=\"filters[users_names][]\" class=\"form-select logs-filter-select-multiple\" multiple>
                  ";
                // line 86
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["user_names"] ?? null));
                foreach ($context['_seq'] as $context["value"] => $context["username"]) {
                    // line 87
                    echo "                     <option value=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue($context["value"]), "html", null, true);
                    echo "\" ";
                    echo (((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "users_names", [], "array", true, true, false, 87) && twig_in_filter($context["value"], (($__internal_compile_1 = ($context["filters"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["users_names"] ?? null) : null)))) ? ("selected") : (""));
                    echo ">
                        ";
                    // line 88
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue($context["username"]), "html", null, true);
                    echo "
                     </option>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['username'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                echo "               </select>
            </td>
            <td>
               <select name=\"filters[affected_fields][]\" class=\"form-select logs-filter-select-multiple\" multiple>
                  ";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["affected_fields"] ?? null));
                foreach ($context['_seq'] as $context["value"] => $context["field"]) {
                    // line 96
                    echo "                     <option value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\" ";
                    echo (((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "affected_fields", [], "array", true, true, false, 96) && twig_in_filter($context["value"], (($__internal_compile_2 = ($context["filters"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["affected_fields"] ?? null) : null)))) ? ("selected") : (""));
                    echo ">
                        ";
                    // line 97
                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                    echo "
                     </option>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "               </select>
            </td>
            <td colspan=\"2\">
               <select name=\"filters[linked_actions][]\" class=\"form-select logs-filter-select-multiple\" multiple>
                  ";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["linked_actions"] ?? null));
                foreach ($context['_seq'] as $context["value"] => $context["action"]) {
                    // line 105
                    echo "                     <option value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\" ";
                    echo (((twig_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "linked_actions", [], "array", true, true, false, 105) && twig_in_filter($context["value"], (($__internal_compile_3 = ($context["filters"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["linked_actions"] ?? null) : null)))) ? ("selected") : (""));
                    echo ">
                        ";
                    // line 106
                    echo twig_escape_filter($this->env, $context["action"], "html", null, true);
                    echo "
                     </option>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "               </select>
            </td>
         </tr>
         ";
            }
            // line 113
            echo "
      </thead>
      <tbody>
      ";
            // line 116
            if ((($context["filtered_number"] ?? null) < 1)) {
                // line 117
                echo "         <tr><td colspan=\"6\">";
                echo twig_escape_filter($this->env, __("No historical matching your filters"), "html", null, true);
                echo "</td></tr>
      ";
            } else {
                // line 119
                echo "         ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                    // line 120
                    echo "            <tr>
               <td>";
                    // line 121
                    echo twig_escape_filter($this->env, (($__internal_compile_4 = $context["entry"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["id"] ?? null) : null), "html", null, true);
                    echo "</td>
               <td>";
                    // line 122
                    echo twig_escape_filter($this->env, (($__internal_compile_5 = $context["entry"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["date_mod"] ?? null) : null), "html", null, true);
                    echo "</td>
               <td>";
                    // line 123
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_6 = $context["entry"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["user_name"] ?? null) : null)), "html", null, true);
                    echo "</td>
               <td>";
                    // line 124
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_7 = $context["entry"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["field"] ?? null) : null)), "html", null, true);
                    echo "</td>
               <td colspan=\"2\" style=\"width: 60%\">";
                    // line 125
                    echo (($__internal_compile_8 = $context["entry"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["change"] ?? null) : null);
                    echo "</td>
            </tr>
         ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "      ";
            }
            // line 129
            echo "      </tbody>
   </table>
   </div>";
            // line 132
            echo "
   ";
            // line 133
            $context["limitdropdown"] = twig_include($this->env, $context, "components/dropdown/limit.html.twig");
            // line 134
            echo "   <div class=\"ms-auto d-inline-flex align-items-center d-none d-md-block mb-2\">
      ";
            // line 135
            echo twig_sprintf(__("Show %s entries"), ($context["limitdropdown"] ?? null));
            echo "
   </div>
";
        }
        // line 138
        echo "


<script type=\"text/javascript\">
\$(function() {
   \$('.logs-filter-select-multiple').select2();
});
</script>
";
    }

    public function getTemplateName()
    {
        return "components/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 138,  274 => 135,  271 => 134,  269 => 133,  266 => 132,  262 => 129,  259 => 128,  250 => 125,  246 => 124,  242 => 123,  238 => 122,  234 => 121,  231 => 120,  226 => 119,  220 => 117,  218 => 116,  213 => 113,  207 => 109,  198 => 106,  191 => 105,  187 => 104,  181 => 100,  172 => 97,  165 => 96,  161 => 95,  155 => 91,  146 => 88,  139 => 87,  135 => 86,  129 => 82,  127 => 75,  126 => 73,  120 => 70,  115 => 67,  113 => 66,  104 => 60,  99 => 58,  94 => 56,  89 => 54,  83 => 51,  79 => 50,  75 => 49,  71 => 48,  67 => 47,  59 => 42,  56 => 41,  50 => 38,  47 => 37,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
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

{% import 'components/form/fields_macros.html.twig' as fields %}

{% if total_number < 1 %}
   <div class=\"alert alert-info\">
      {{ __('No historical') }}
   </div>
{% else %}

   {{ include('components/pager.html.twig', {count: filtered_number}) }}
   <div class=\"table-responsive\">
   <table class=\"table table-hover\">
      <thead>
         <tr>
            <th>{{ __('ID') }}</th>
            <th>{{ _n('Date', 'Dates', 1) }}</th>
            <th>{{ 'User'|itemtype_name }}</th>
            <th>{{ _n('Field', 'Fields', 1) }}</th>
            <th>{{ _x('name', 'Update') }}</th>
            <th>
               <span class=\"float-end log-toolbar mb-0\">
                  <button class=\"btn btn-sm show_log_filters {{ filters|length > 0 ? 'btn-secondary active' : 'btn-outline-secondary' }}\">
                     <i class=\"fas fa-filter\"></i>
                     <span class=\"d-none d-xl-block\">{{ __('Filter') }}</span>
                  </button>
                  <a href=\"{{ csv_url }}\" class=\"btn btn-sm text-capitalize btn-icon btn-outline-secondary\">
                     <i class=\"fas fa-file-download\"></i>
                     <span class=\"d-none d-xl-block\">{{ __('Export') }}</span>
                  </a>
               </span>
            </th>
         </tr>

         {% if filters|length > 0  %}
         <tr class=\"log_history_filter_row\">
            <td>
               <input type=\"hidden\" name=\"filters[active]\" value=\"1\" />
               <input type=\"hidden\" name=\"items_id\" value=\"{{ items_id }}\" />
            </td>
            <td>
               {{ fields.dateField(
                  'filters[date]',
                  filters['date'],
                  '',
                  {
                     no_label: true,
                     full_width: true,
                     mb: '',
                  },
               ) }}
            </td>
            <td>
               <select name=\"filters[users_names][]\" class=\"form-select logs-filter-select-multiple\" multiple>
                  {% for value, username in user_names %}
                     <option value=\"{{ value|verbatim_value }}\" {{ filters['users_names'] is defined and value in filters['users_names'] ? 'selected' : '' }}>
                        {{ username|verbatim_value }}
                     </option>
                  {% endfor %}
               </select>
            </td>
            <td>
               <select name=\"filters[affected_fields][]\" class=\"form-select logs-filter-select-multiple\" multiple>
                  {% for value, field in affected_fields %}
                     <option value=\"{{ value }}\" {{ filters['affected_fields'] is defined and value in filters['affected_fields'] ? 'selected' : '' }}>
                        {{ field }}
                     </option>
                  {% endfor %}
               </select>
            </td>
            <td colspan=\"2\">
               <select name=\"filters[linked_actions][]\" class=\"form-select logs-filter-select-multiple\" multiple>
                  {% for value, action in linked_actions %}
                     <option value=\"{{ value }}\" {{ filters['linked_actions'] is defined and value in filters['linked_actions'] ? 'selected' : '' }}>
                        {{ action }}
                     </option>
                  {% endfor %}
               </select>
            </td>
         </tr>
         {% endif %}

      </thead>
      <tbody>
      {% if filtered_number < 1 %}
         <tr><td colspan=\"6\">{{ __('No historical matching your filters') }}</td></tr>
      {% else %}
         {% for entry in logs %}
            <tr>
               <td>{{ entry['id'] }}</td>
               <td>{{ entry['date_mod'] }}</td>
               <td>{{ entry['user_name']|verbatim_value }}</td>
               <td>{{ entry['field']|verbatim_value }}</td>
               <td colspan=\"2\" style=\"width: 60%\">{{ entry['change']|raw }}</td>
            </tr>
         {% endfor %}
      {% endif %}
      </tbody>
   </table>
   </div>{# .table-responsive #}

   {% set limitdropdown = include('components/dropdown/limit.html.twig') %}
   <div class=\"ms-auto d-inline-flex align-items-center d-none d-md-block mb-2\">
      {{ __('Show %s entries')|format(limitdropdown)|raw }}
   </div>
{% endif %}



<script type=\"text/javascript\">
\$(function() {
   \$('.logs-filter-select-multiple').select2();
});
</script>
", "components/logs.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\logs.html.twig");
    }
}
