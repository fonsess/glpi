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

/* components/itilobject/timeline/simple_form.html.twig */
class __TwigTemplate_ce23e422d52947d5622b7570f2cf45bc extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/simple_form.html.twig", 34)->unwrap();
        // line 35
        echo "
";
        // line 36
        $context["target"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 36);
        // line 37
        $context["is_new_item"] = ((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 37)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null) == 0);
        // line 38
        $context["show_form"] = ( !array_key_exists("no_form", $context) || true);
        // line 39
        echo "
";
        // line 40
        $context["field_options"] = ["is_horizontal" => false, "full_width" => true, "fields_template" =>         // line 43
($context["itiltemplate"] ?? null), "disabled" =>  !(        // line 44
($context["canupdate"] ?? null) || ($context["can_requester"] ?? null))];
        // line 46
        echo "
";
        // line 47
        if (($context["show_form"] ?? null)) {
            // line 48
            echo "<form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["formoptions"] ?? null), "html", null, true);
            echo " enctype=\"multipart/form-data\" data-submit-once>
";
        }
        // line 50
        echo "   <div class=\"row flex-column\">
      ";
        // line 51
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 51)) {
            // line 52
            echo "        ";
            $context["recipient"] = ((((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 52)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["users_id_recipient"] ?? null) : null) > 0)) ? ((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 52)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["users_id_recipient"] ?? null) : null)) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID")));
            // line 53
            echo "        ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", "users_id_recipient",             // line 56
($context["recipient"] ?? null), __("By"), twig_array_merge(            // line 58
($context["field_options"] ?? null), ["maxlength" => 255, "entity" => (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,             // line 60
($context["item"] ?? null), "fields", [], "any", false, false, false, 60)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["entities_id"] ?? null) : null), "right" => "all"])], 53, $context, $this->getSourceContext());
            // line 63
            echo "
      ";
        }
        // line 65
        echo "
      ";
        // line 66
        echo twig_call_macro($macros["fields"], "macro_textField", ["name", (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,         // line 68
($context["item"] ?? null), "fields", [], "any", false, false, false, 68)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["name"] ?? null) : null), __("Title"), twig_array_merge(        // line 70
($context["field_options"] ?? null), ["maxlength" => 255])], 66, $context, $this->getSourceContext());
        // line 73
        echo "

      ";
        // line 75
        $context["uploads"] = [];
        // line 76
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, true, false, 76), "_content", [], "any", true, true, false, 76)) {
            // line 77
            echo "         ";
            $context["uploads"] = twig_array_merge(($context["uploads"] ?? null), ["_content" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, false, false, 77), "_content", [], "any", false, false, false, 77), "_tag_content" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, false, false, 77), "_tag_content", [], "any", false, false, false, 77)]);
            // line 78
            echo "      ";
        }
        // line 79
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, true, false, 79), "_filename", [], "any", true, true, false, 79)) {
            // line 80
            echo "         ";
            $context["uploads"] = twig_array_merge(($context["uploads"] ?? null), ["_filename" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, false, false, 80), "_filename", [], "any", false, false, false, 80), "_tag_filename" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "input", [], "any", false, false, false, 80), "_tag_filename", [], "any", false, false, false, 80)]);
            // line 81
            echo "      ";
        }
        // line 82
        echo "
      ";
        // line 83
        echo twig_call_macro($macros["fields"], "macro_textareaField", ["content", (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,         // line 85
($context["item"] ?? null), "fields", [], "any", false, false, false, 85)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["content"] ?? null) : null), __("Description"), twig_array_merge(        // line 87
($context["field_options"] ?? null), ["enable_richtext" => true, "enable_fileupload" => true, "enable_mentions" => true, "enable_fileupload" => ((twig_get_attribute($this->env, $this->source,         // line 91
($context["itiltemplate"] ?? null), "isHiddenField", [0 => "_documents_id"], "method", false, false, false, 91)) ? (false) : (true)), "entities_id" => ((twig_get_attribute($this->env, $this->source,         // line 92
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 92)) ? (($context["entities_id"] ?? null)) : ((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 92)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["entities_id"] ?? null) : null))), "uploads" =>         // line 93
($context["uploads"] ?? null), "add_field_class" => "col-12 itil-textarea-content"])], 83, $context, $this->getSourceContext());
        // line 96
        echo "
   </div>

   ";
        // line 99
        if ((( !($context["is_new_item"] ?? null) && ($context["show_form"] ?? null)) &&  !(($__internal_compile_7 = ($context["params"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["template_preview"] ?? null) : null))) {
            // line 100
            echo "      <div class=\"d-flex card-footer mx-n3 mb-n3\">
         <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
            <i class=\"far fa-save\"></i>
            <span>";
            // line 103
            echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
            echo "</span>
         </button>
      </div>

      <input type=\"hidden\" name=\"id\" value=\"";
            // line 107
            echo twig_escape_filter($this->env, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 107)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["id"] ?? null) : null), "html", null, true);
            echo "\" />
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 108
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
   </form>
   ";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/simple_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 108,  149 => 107,  142 => 103,  137 => 100,  135 => 99,  130 => 96,  128 => 93,  127 => 92,  126 => 91,  125 => 87,  124 => 85,  123 => 83,  120 => 82,  117 => 81,  114 => 80,  111 => 79,  108 => 78,  105 => 77,  102 => 76,  100 => 75,  96 => 73,  94 => 70,  93 => 68,  92 => 66,  89 => 65,  85 => 63,  83 => 60,  82 => 58,  81 => 56,  79 => 53,  76 => 52,  74 => 51,  71 => 50,  63 => 48,  61 => 47,  58 => 46,  56 => 44,  55 => 43,  54 => 40,  51 => 39,  49 => 38,  47 => 37,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
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

{% set target      = item.getFormURL() %}
{% set is_new_item = (item.fields['id'] == 0) %}
{% set show_form   = no_form is not defined or true %}

{% set field_options = {
   'is_horizontal': false,
   'full_width': true,
   'fields_template': itiltemplate,
   'disabled': (not (canupdate or can_requester)),
} %}

{% if show_form %}
<form method=\"post\" action=\"{{ target }}\" {{ formoptions }} enctype=\"multipart/form-data\" data-submit-once>
{% endif %}
   <div class=\"row flex-column\">
      {% if not item.isNewItem() %}
        {% set recipient = item.fields['users_id_recipient'] > 0 ? item.fields['users_id_recipient'] : session('glpiID') %}
        {{ fields.dropdownField(
            'User',
            'users_id_recipient',
            recipient,
            __('By'),
            field_options|merge({
                maxlength: 255,
                entity: item.fields['entities_id'],
                right: 'all',
            })
        ) }}
      {% endif %}

      {{ fields.textField(
         'name',
         item.fields['name'],
         __('Title'),
         field_options|merge({
             maxlength: 255,
         })
      ) }}

      {% set uploads = [] %}
      {% if item.input._content is defined %}
         {% set uploads = uploads|merge({'_content': item.input._content, '_tag_content': item.input._tag_content}) %}
      {% endif %}
      {% if item.input._filename is defined %}
         {% set uploads = uploads|merge({'_filename': item.input._filename, '_tag_filename': item.input._tag_filename}) %}
      {% endif %}

      {{ fields.textareaField(
         'content',
         item.fields['content'],
         __('Description'),
         field_options|merge({
            'enable_richtext': true,
            'enable_fileupload': true,
            'enable_mentions': true,
            'enable_fileupload': (itiltemplate.isHiddenField('_documents_id')) ? false : true,
            'entities_id': item.isNewItem() ? entities_id : item.fields['entities_id'],
            'uploads': uploads,
            'add_field_class': 'col-12 itil-textarea-content',
         })
      ) }}
   </div>

   {% if not is_new_item and show_form and not params['template_preview'] %}
      <div class=\"d-flex card-footer mx-n3 mb-n3\">
         <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
            <i class=\"far fa-save\"></i>
            <span>{{ _x('button', 'Save') }}</span>
         </button>
      </div>

      <input type=\"hidden\" name=\"id\" value=\"{{ item.fields['id'] }}\" />
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"{{ csrf_token() }}\" />
   </form>
   {% endif %}
", "components/itilobject/timeline/simple_form.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\timeline\\simple_form.html.twig");
    }
}
