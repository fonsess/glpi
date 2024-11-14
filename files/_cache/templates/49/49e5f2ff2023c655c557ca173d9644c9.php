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

/* pages/assets/software.html.twig */
class __TwigTemplate_f6b664800e2cd83fd8d1a7cb24290567 extends Template
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
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "generic_show_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/assets/software.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/assets/software.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 38
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "    ";
        ob_start();
        // line 40
        echo "    ";
        echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeDropdown("Software", ["value" => (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 41
($context["item"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["softwares_id"] ?? null) : null), "rand" =>         // line 42
($context["rand"] ?? null)]);
        // line 43
        echo "
    ";
        $context["dd_software"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        echo "
    ";
        // line 46
        echo twig_call_macro($macros["fields"], "macro_checkboxField", ["is_update", (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,         // line 48
($context["item"] ?? null), "fields", [], "any", false, false, false, 48)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["is_update"] ?? null) : null), __("Upgrade"), twig_array_merge(        // line 50
($context["field_options"] ?? null), ["add_field_html" => (__("from") .         // line 51
($context["dd_software"] ?? null))])], 46, $context, $this->getSourceContext());
        // line 53
        echo "

    ";
        // line 55
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["SoftwareCategory", "softwarecategories_id", (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,         // line 58
($context["item"] ?? null), "fields", [], "any", false, false, false, 58)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["softwarecategories_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("SoftwareCategory"),         // line 60
($context["field_options"] ?? null)], 55, $context, $this->getSourceContext());
        // line 61
        echo "
";
    }

    public function getTemplateName()
    {
        return "pages/assets/software.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 61,  81 => 60,  80 => 58,  79 => 55,  75 => 53,  73 => 51,  72 => 50,  71 => 48,  70 => 46,  67 => 45,  63 => 43,  61 => 42,  60 => 41,  58 => 40,  55 => 39,  51 => 38,  46 => 34,  44 => 36,  42 => 35,  35 => 34,);
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

{% extends \"generic_show_form.html.twig\" %}
{% import 'components/form/fields_macros.html.twig' as fields %}
{% set params  = params ?? [] %}

{% block more_fields %}
    {% set dd_software %}
    {{ 'Software'|itemtype_dropdown({
        'value': item.fields['softwares_id'],
        'rand': rand,
    }) }}
    {% endset %}

    {{ fields.checkboxField(
        'is_update',
        item.fields['is_update'],
        __('Upgrade'),
        field_options|merge({
            add_field_html: __('from') ~ dd_software
        })
    ) }}

    {{ fields.dropdownField(
        'SoftwareCategory',
        'softwarecategories_id',
        item.fields['softwarecategories_id'],
        'SoftwareCategory'|itemtype_name,
        field_options
    ) }}
{% endblock %}
", "pages/assets/software.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\pages\\assets\\software.html.twig");
    }
}
