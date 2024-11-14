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

/* @glpiinventory/forms/iprange.html.twig */
class __TwigTemplate_ded8f7578b832045a1bd759fc7a58cdf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'more_fields' => [$this, 'block_more_fields'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 32
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "@glpiinventory/forms/iprange.html.twig", 33)->unwrap();
        // line 34
        $context["params"] = (($context["params"]) ?? ([]));
        // line 32
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "@glpiinventory/forms/iprange.html.twig", 32);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 36
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_nullField", [], 37, $context, $this->getSourceContext());
        echo "

   ";
        // line 39
        echo twig_call_macro($macros["_self"], "macro_ipField", ["ip_start", (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 41
($context["item"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["ip_start"] ?? null) : null), __("Start of IP range", "glpiinventory")], 39, $context, $this->getSourceContext());
        // line 43
        echo "

   ";
        // line 45
        echo twig_call_macro($macros["fields"], "macro_nullField", [], 45, $context, $this->getSourceContext());
        echo "

   ";
        // line 47
        echo twig_call_macro($macros["_self"], "macro_ipField", ["ip_end", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,         // line 49
($context["item"] ?? null), "fields", [], "any", false, false, false, 49)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["ip_end"] ?? null) : null), __("End of IP range", "glpiinventory")], 47, $context, $this->getSourceContext());
        // line 51
        echo "

   <script type='text/javascript'>
      function endip(index) {
         if (\$('#ip_end' + index).val() == '') {
            if (index == 3) {
               \$('#ip_end' + index).val('254');
            } else {
               \$('#ip_end' + index).val(\$('#ip_start' + index).val());
            }
         }
      }

      \$(function() {
         \$(\"input[name^='ip_end']\").focus(function() {
            endip(\$(this).data('index'));
         });
      });

   </script>

   ";
        // line 72
        if (Session::isMultiEntitiesMode()) {
            // line 73
            echo "      ";
            echo twig_call_macro($macros["fields"], "macro_nullField", [], 73, $context, $this->getSourceContext());
            echo "
      ";
            // line 74
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Entity", "entities_id", (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,             // line 77
($context["item"] ?? null), "fields", [], "any", false, false, false, 77)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["entities_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Entity")], 74, $context, $this->getSourceContext());
            // line 79
            echo "
   ";
        }
        // line 81
        echo "
";
    }

    // line 84
    public function macro_ipField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 85
            echo "   ";
            ob_start();
            // line 86
            echo "      ";
            if ((twig_length_filter($this->env, ($context["value"] ?? null)) == 0)) {
                // line 87
                echo "         ";
                $context["value"] = "...";
                // line 88
                echo "      ";
            }
            // line 89
            echo "
      ";
            // line 90
            $context["ipexploded"] = twig_split_filter($this->env, ($context["value"] ?? null), ".");
            // line 91
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["ipexploded"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["ipnum"]) {
                // line 92
                echo "         ";
                if (($context["ipnum"] > 255)) {
                    // line 93
                    echo "            ";
                    $context["ipexploded"] = twig_array_merge(($context["ipexploded"] ?? null), [twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 93) => ""]);
                    // line 94
                    echo "         ";
                }
                // line 95
                echo "      ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ipnum'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "
      <div class=\"row flex-nowrap\">
         <div class=\"col-auto\">
            <input type=\"text\" class=\"form-control\" value=\"";
            // line 99
            echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["ipexploded"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), "html", null, true);
            echo "\"
                   name=\"";
            // line 100
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "0\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "0\" data-index=\"0\" size=\"2\" maxlength=\"3\">
         </div>
         <div class=\"col-auto\">
            <input type=\"text\" class=\"form-control\" value=\"";
            // line 103
            echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["ipexploded"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[1] ?? null) : null), "html", null, true);
            echo "\"
                   name=\"";
            // line 104
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "1\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "1\" data-index=\"1\" size=\"2\" maxlength=\"3\">
         </div>
         <div class=\"col-auto\">
            <input type=\"text\" class=\"form-control\" value=\"";
            // line 107
            echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["ipexploded"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[2] ?? null) : null), "html", null, true);
            echo "\"
                   name=\"";
            // line 108
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "2\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "2\" data-index=\"2\" size=\"2\" maxlength=\"3\" >
         </div>
         <div class=\"col-auto\">
            <input type=\"text\" class=\"form-control\" value=\"";
            // line 111
            echo twig_escape_filter($this->env, (($__internal_compile_6 = ($context["ipexploded"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[3] ?? null) : null), "html", null, true);
            echo "\"
                   name=\"";
            // line 112
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "3\" id=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "3\" data-index=\"3\" size=\"2\" maxlength=\"3\">
         </div>
      </div>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 116
            echo "
   ";
            // line 117
            echo twig_call_macro($macros["fields"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 117, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@glpiinventory/forms/iprange.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 117,  247 => 116,  238 => 112,  234 => 111,  226 => 108,  222 => 107,  214 => 104,  210 => 103,  202 => 100,  198 => 99,  193 => 96,  179 => 95,  176 => 94,  173 => 93,  170 => 92,  152 => 91,  150 => 90,  147 => 89,  144 => 88,  141 => 87,  138 => 86,  135 => 85,  119 => 84,  114 => 81,  110 => 79,  108 => 77,  107 => 74,  102 => 73,  100 => 72,  77 => 51,  75 => 49,  74 => 47,  69 => 45,  65 => 43,  63 => 41,  62 => 39,  56 => 37,  52 => 36,  47 => 32,  45 => 34,  43 => 33,  36 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("{#
 # ---------------------------------------------------------------------
 # GLPI Inventory Plugin
 # Copyright (C) 2021 Teclib' and contributors.
 #
 # http://glpi-project.org
 #
 # based on FusionInventory for GLPI
 # Copyright (C) 2010-2021 by the FusionInventory Development Team.
 #
 # ---------------------------------------------------------------------
 #
 # LICENSE
 #
 # This file is part of GLPI Inventory Plugin.
 #
 # GLPI Inventory Plugin is free software: you can redistribute it and/or modify
 # it under the terms of the GNU Affero General Public License as published by
 # the Free Software Foundation, either version 3 of the License, or
 # (at your option) any later version.
 #
 # GLPI Inventory Plugin is distributed in the hope that it will be useful,
 # but WITHOUT ANY WARRANTY; without even the implied warranty of
 # MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 # GNU Affero General Public License for more details.
 #
 # You should have received a copy of the GNU Affero General Public License
 # along with GLPI Inventory Plugin. If not, see <https://www.gnu.org/licenses/>.
 # ---------------------------------------------------------------------
 #}

{% extends \"generic_show_form.html.twig\" %}
{% import 'components/form/fields_macros.html.twig' as fields %}
{% set params  = params ?? [] %}

{% block more_fields %}
   {{ fields.nullField() }}

   {{ _self.ipField(
      'ip_start',
      item.fields['ip_start'],
      __('Start of IP range', 'glpiinventory'),
   ) }}

   {{ fields.nullField() }}

   {{ _self.ipField(
      'ip_end',
      item.fields['ip_end'],
      __('End of IP range', 'glpiinventory'),
   ) }}

   <script type='text/javascript'>
      function endip(index) {
         if (\$('#ip_end' + index).val() == '') {
            if (index == 3) {
               \$('#ip_end' + index).val('254');
            } else {
               \$('#ip_end' + index).val(\$('#ip_start' + index).val());
            }
         }
      }

      \$(function() {
         \$(\"input[name^='ip_end']\").focus(function() {
            endip(\$(this).data('index'));
         });
      });

   </script>

   {% if is_multi_entities_mode() %}
      {{ fields.nullField() }}
      {{ fields.dropdownField(
         'Entity',
         'entities_id',
         item.fields['entities_id'],
         'Entity'|itemtype_name,
      ) }}
   {% endif %}

{% endblock %}

{% macro ipField(name, value, label = '', options = {}) %}
   {% set field %}
      {% if value|length == 0 %}
         {% set value = '...' %}
      {% endif %}

      {% set ipexploded = value|split('.') %}
      {% for ipnum in ipexploded %}
         {% if ipnum > 255 %}
            {% set ipexploded = ipexploded|merge({(loop.index0): ''}) %}
         {% endif %}
      {% endfor %}

      <div class=\"row flex-nowrap\">
         <div class=\"col-auto\">
            <input type=\"text\" class=\"form-control\" value=\"{{ ipexploded[0] }}\"
                   name=\"{{ name }}0\" id=\"{{ name }}0\" data-index=\"0\" size=\"2\" maxlength=\"3\">
         </div>
         <div class=\"col-auto\">
            <input type=\"text\" class=\"form-control\" value=\"{{ ipexploded[1] }}\"
                   name=\"{{ name }}1\" id=\"{{ name }}1\" data-index=\"1\" size=\"2\" maxlength=\"3\">
         </div>
         <div class=\"col-auto\">
            <input type=\"text\" class=\"form-control\" value=\"{{ ipexploded[2] }}\"
                   name=\"{{ name }}2\" id=\"{{ name }}2\" data-index=\"2\" size=\"2\" maxlength=\"3\" >
         </div>
         <div class=\"col-auto\">
            <input type=\"text\" class=\"form-control\" value=\"{{ ipexploded[3] }}\"
                   name=\"{{ name }}3\" id=\"{{ name }}3\" data-index=\"3\" size=\"2\" maxlength=\"3\">
         </div>
      </div>
   {% endset %}

   {{ fields.field(name, field, label, options) }}
{% endmacro %}
", "@glpiinventory/forms/iprange.html.twig", "C:\\xampp\\htdocs\\glpi\\plugins\\glpiinventory\\templates\\forms\\iprange.html.twig");
    }
}
