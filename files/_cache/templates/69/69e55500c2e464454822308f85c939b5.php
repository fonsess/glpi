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

/* components/itilobject/timeline/filter_timeline.html.twig */
class __TwigTemplate_9d81e118adf9d6bdf79ee35d56f3899b extends Template
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
        $context["filters_buttons"] = ["description" => ["title" => __("Description"), "icon" => twig_get_attribute($this->env, $this->source,         // line 37
($context["item"] ?? null), "getIcon", [], "method", false, false, false, 37), "itemtype" => "ITILContent", "checked" => true], "followups" => ["title" => _n("Followup", "Followups", Session::getPluralNumber()), "icon" => $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("ITILFollowup"), "itemtype" => "ITILFollowup", "checked" => true], "tasks" => ["title" => _n("Task", "Tasks", Session::getPluralNumber()), "icon" => $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("CommonITILTask"), "itemtype" => "ITILTask", "checked" => true], "documents" => ["title" => _n("Document", "Documents", Session::getPluralNumber()), "icon" => $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("Document_Item"), "itemtype" => "Document_Item", "checked" => true], "validations" => ["title" => _n("Validation", "Validations", Session::getPluralNumber()), "icon" => $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("CommonITILValidation"), "itemtype" => "ITILValidation", "checked" => true], "solutions" => ["title" => _n("Solution", "Solutions", Session::getPluralNumber()), "icon" => $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeIcon("ITILSolution"), "itemtype" => "ITILSolution", "checked" => true]];
        // line 72
        echo "
";
        // line 73
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) {
            // line 74
            echo "   ";
            $context["filters_buttons"] = twig_array_merge(($context["filters_buttons"] ?? null), ["logs" => ["title" => __("Historical"), "icon" => "fas fa-history", "itemtype" => "Log", "checked" => false]]);
        }
        // line 83
        echo "
<div class=\"filter-timeline position-relative ms-auto\">
   <span data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
        // line 85
        echo twig_escape_filter($this->env, __("Timeline filter"), "html", null, true);
        echo "\">
      <button type=\"button\"
            class=\"btn btn-icon btn-ghost-secondary open-timeline-filter-popover\"
            data-bs-toggle=\"collapse\"
            data-bs-target=\"#filter-timeline-popover\"
            data-bs-trigger=\"click\">
         <i class=\"ti ti-filter\"></i>
      </button>
   </span>

   <div class=\"filter-timeline-popover collapse position-absolute bottom-100 end-0 text-nowrap\"
        id=\"filter-timeline-popover\">
      <div class=\"card pt-2\">
         <div class=\"list-group list-group-flush\">
            ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filters_buttons"] ?? null));
        foreach ($context['_seq'] as $context["filter_key"] => $context["filter_button"]) {
            // line 100
            echo "               <li class=\"list-group-item list-group-item-action py-1\">
                  <div class=\"form-check form-switch trigger-filter ";
            // line 101
            echo twig_escape_filter($this->env, (($__internal_compile_0 = $context["filter_button"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["itemtype"] ?? null) : null), "html", null, true);
            echo "\" role=\"button\">
                     <input class=\"form-check-input\" type=\"checkbox\" id=\"timeline-filter-";
            // line 102
            echo twig_escape_filter($this->env, $context["filter_key"], "html", null, true);
            echo "\"
                           autocomplete=\"off\"
                           ";
            // line 104
            echo (((($__internal_compile_1 = $context["filter_button"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["checked"] ?? null) : null)) ? ("checked") : (""));
            echo "
                           data-itemtype=\"";
            // line 105
            echo twig_escape_filter($this->env, (($__internal_compile_2 = $context["filter_button"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["itemtype"] ?? null) : null), "html", null, true);
            echo "\" />
                     <label class=\"form-check-label\" for=\"timeline-filter-";
            // line 106
            echo twig_escape_filter($this->env, $context["filter_key"], "html", null, true);
            echo "\" role=\"button\">
                        <i class=\"";
            // line 107
            echo twig_escape_filter($this->env, (($__internal_compile_3 = $context["filter_button"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["icon"] ?? null) : null), "html", null, true);
            echo " ms-2\"></i>
                        ";
            // line 108
            echo twig_escape_filter($this->env, (($__internal_compile_4 = $context["filter_button"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["title"] ?? null) : null), "html", null, true);
            echo "
                     </label>
                  </div>
               </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['filter_key'], $context['filter_button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "         </div>
      </div>
   </div>

   ";
        // line 117
        if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) {
            // line 118
            echo "      <span data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, __("View TODO list"), "html", null, true);
            echo "\">
         <button type=\"button\"
               class=\"btn btn-icon btn-ghost-secondary view-timeline-todo-list me-1\">
            <i class=\"fas fa-tasks\"></i>
         </button>
      </span>
   ";
        }
        // line 125
        echo "</div>

<script type=\"text/javascript\">
\$(function() {
   \$(document).on(\"click\", \".filter-timeline-popover .trigger-filter\", function() {
      var timeline       = \$('#itil-object-container .itil-timeline');
      var timeline_items = timeline.find(\".timeline-item\");

      timeline_items.addClass('d-none');
      \$('.filter-timeline-popover .trigger-filter input[type=checkbox]').each(function() {
         if(!\$(this).is(':checked')) {
            return;
         }
         var itemtype = \$(this).data('itemtype');
         timeline_items.filter(\".\"+itemtype).removeClass('d-none');
      });
   });

   \$(document).on(\"click\", \".view-timeline-todo-list\", function() {
      \$('body').toggleClass('timeline-todo-list');
   });

   \$(document).mouseup(function(e) {
      var container = \$(\"#filter-timeline-popover\");

      // if the target of the click isn't the container nor a descendant of the container
      if (!container.is(e.target) && container.has(e.target).length === 0) {
         var mycollapse = bootstrap.Collapse.getInstance(container[0]);
         if (mycollapse !== null) {
            mycollapse.hide();
         }
      }
   });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/filter_timeline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 125,  124 => 118,  122 => 117,  116 => 113,  105 => 108,  101 => 107,  97 => 106,  93 => 105,  89 => 104,  84 => 102,  80 => 101,  77 => 100,  73 => 99,  56 => 85,  52 => 83,  48 => 74,  46 => 73,  43 => 72,  41 => 37,  40 => 34,  37 => 33,);
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

{% set filters_buttons = {
   'description': {
      'title': __('Description'),
      'icon': item.getIcon(),
      'itemtype': 'ITILContent',
      'checked': true,
   },
   'followups': {
      'title': _n('Followup', 'Followups', get_plural_number()),
      'icon': 'ITILFollowup'|itemtype_icon,
      'itemtype': 'ITILFollowup',
      'checked': true,
   },
   'tasks': {
      'title': _n('Task', 'Tasks', get_plural_number()),
      'icon': 'CommonITILTask'|itemtype_icon,
      'itemtype': 'ITILTask',
      'checked': true,
   },
   'documents': {
      'title': _n('Document', 'Documents', get_plural_number()),
      'icon': 'Document_Item'|itemtype_icon,
      'itemtype': 'Document_Item',
      'checked': true,
   },
   'validations': {
      'title': _n('Validation', 'Validations', get_plural_number()),
      'icon': 'CommonITILValidation'|itemtype_icon,
      'itemtype': 'ITILValidation',
      'checked': true,
   },
   'solutions': {
      'title': _n('Solution', 'Solutions', get_plural_number()),
      'icon': 'ITILSolution'|itemtype_icon,
      'itemtype': 'ITILSolution',
      'checked': true,
   },
} %}

{% if get_current_interface() == 'central' %}
   {% set filters_buttons = filters_buttons|merge({
      'logs': {
         'title': __('Historical'),
         'icon': 'fas fa-history',
         'itemtype': 'Log',
         'checked': false,
      },
   }) %}
{% endif %}

<div class=\"filter-timeline position-relative ms-auto\">
   <span data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ __('Timeline filter') }}\">
      <button type=\"button\"
            class=\"btn btn-icon btn-ghost-secondary open-timeline-filter-popover\"
            data-bs-toggle=\"collapse\"
            data-bs-target=\"#filter-timeline-popover\"
            data-bs-trigger=\"click\">
         <i class=\"ti ti-filter\"></i>
      </button>
   </span>

   <div class=\"filter-timeline-popover collapse position-absolute bottom-100 end-0 text-nowrap\"
        id=\"filter-timeline-popover\">
      <div class=\"card pt-2\">
         <div class=\"list-group list-group-flush\">
            {% for filter_key, filter_button in filters_buttons %}
               <li class=\"list-group-item list-group-item-action py-1\">
                  <div class=\"form-check form-switch trigger-filter {{ filter_button['itemtype'] }}\" role=\"button\">
                     <input class=\"form-check-input\" type=\"checkbox\" id=\"timeline-filter-{{ filter_key }}\"
                           autocomplete=\"off\"
                           {{ filter_button['checked'] ? 'checked' : '' }}
                           data-itemtype=\"{{ filter_button['itemtype'] }}\" />
                     <label class=\"form-check-label\" for=\"timeline-filter-{{ filter_key }}\" role=\"button\">
                        <i class=\"{{ filter_button['icon'] }} ms-2\"></i>
                        {{ filter_button['title'] }}
                     </label>
                  </div>
               </li>
            {% endfor %}
         </div>
      </div>
   </div>

   {% if get_current_interface() == 'central' %}
      <span data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ __('View TODO list') }}\">
         <button type=\"button\"
               class=\"btn btn-icon btn-ghost-secondary view-timeline-todo-list me-1\">
            <i class=\"fas fa-tasks\"></i>
         </button>
      </span>
   {% endif %}
</div>

<script type=\"text/javascript\">
\$(function() {
   \$(document).on(\"click\", \".filter-timeline-popover .trigger-filter\", function() {
      var timeline       = \$('#itil-object-container .itil-timeline');
      var timeline_items = timeline.find(\".timeline-item\");

      timeline_items.addClass('d-none');
      \$('.filter-timeline-popover .trigger-filter input[type=checkbox]').each(function() {
         if(!\$(this).is(':checked')) {
            return;
         }
         var itemtype = \$(this).data('itemtype');
         timeline_items.filter(\".\"+itemtype).removeClass('d-none');
      });
   });

   \$(document).on(\"click\", \".view-timeline-todo-list\", function() {
      \$('body').toggleClass('timeline-todo-list');
   });

   \$(document).mouseup(function(e) {
      var container = \$(\"#filter-timeline-popover\");

      // if the target of the click isn't the container nor a descendant of the container
      if (!container.is(e.target) && container.has(e.target).length === 0) {
         var mycollapse = bootstrap.Collapse.getInstance(container[0]);
         if (mycollapse !== null) {
            mycollapse.hide();
         }
      }
   });
});
</script>
", "components/itilobject/timeline/filter_timeline.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\timeline\\filter_timeline.html.twig");
    }
}
