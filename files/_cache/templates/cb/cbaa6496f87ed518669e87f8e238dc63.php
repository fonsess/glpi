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

/* components/table.html.twig */
class __TwigTemplate_c7c3a7df8bbac9cd2b70439375fe8e1a extends Template
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
<div class=\"table-responsive card-table\">
   <table class=\"";
        // line 35
        echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter(($context["class"] ?? null), "")) : ("")), "html", null, true);
        echo "\">
      <thead>
      ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["header_rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["header_row"]) {
            // line 38
            echo "         <tr>
            ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["header_row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["header"]) {
                // line 40
                echo "               ";
                if ( !twig_test_iterable($context["header"])) {
                    // line 41
                    echo "                  ";
                    $context["header"] = ["content" => $context["header"]];
                    // line 42
                    echo "               ";
                }
                // line 43
                echo "               <th colspan=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["header"], "colspan", [], "any", true, true, false, 43)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["header"], "colspan", [], "any", false, false, false, 43), 1)) : (1)), "html", null, true);
                echo "\" style=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["header"], "style", [], "any", true, true, false, 43)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["header"], "style", [], "any", false, false, false, 43), "")) : ("")), "html", null, true);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["header"], "content", [], "any", false, false, false, 43);
                echo "</th>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "         </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['header_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "      </thead>
      <tbody>
      ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 50
            echo "         <tr class=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["row"], "class", [], "any", true, true, false, 50)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["row"], "class", [], "any", false, false, false, 50), "")) : ("")), "html", null, true);
            echo "\">
            ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "values", [], "any", false, false, false, 51));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 52
                echo "               ";
                if ( !twig_test_iterable($context["value"])) {
                    // line 53
                    echo "                  ";
                    $context["value"] = ["content" => $context["value"]];
                    // line 54
                    echo "               ";
                }
                // line 55
                echo "               <td colspan=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["value"], "colspan", [], "any", true, true, false, 55)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["value"], "colspan", [], "any", false, false, false, 55), 1)) : (1)), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["value"], "class", [], "any", true, true, false, 55)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["value"], "class", [], "any", false, false, false, 55), "")) : ("")), "html", null, true);
                echo "\" style=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["value"], "style", [], "any", true, true, false, 55)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["value"], "style", [], "any", false, false, false, 55), "")) : ("")), "html", null, true);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["value"], "content", [], "any", false, false, false, 55);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "         </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "      </tbody>
   </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "components/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 59,  127 => 57,  112 => 55,  109 => 54,  106 => 53,  103 => 52,  99 => 51,  94 => 50,  90 => 49,  86 => 47,  79 => 45,  66 => 43,  63 => 42,  60 => 41,  57 => 40,  53 => 39,  50 => 38,  46 => 37,  41 => 35,  37 => 33,);
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

<div class=\"table-responsive card-table\">
   <table class=\"{{ class|default('') }}\">
      <thead>
      {% for header_row in header_rows %}
         <tr>
            {% for header in header_row %}
               {% if header is not iterable %}
                  {% set header = {'content': header} %}
               {% endif %}
               <th colspan=\"{{ header.colspan|default(1) }}\" style=\"{{ header.style|default('') }}\">{{ header.content|raw }}</th>
            {% endfor %}
         </tr>
      {% endfor %}
      </thead>
      <tbody>
      {% for row in rows %}
         <tr class=\"{{ row.class|default('') }}\">
            {% for value in row.values %}
               {% if value is not iterable %}
                  {% set value = {'content': value} %}
               {% endif %}
               <td colspan=\"{{ value.colspan|default(1) }}\" class=\"{{ value.class|default('') }}\" style=\"{{ value.style|default('') }}\">{{ value.content|raw }}</td>
            {% endfor %}
         </tr>
      {% endfor %}
      </tbody>
   </table>
</div>
", "components/table.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\table.html.twig");
    }
}
