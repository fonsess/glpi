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

/* components/user/link_with_tooltip.html.twig */
class __TwigTemplate_95f706feeea5d8fafe60838ece6564e7 extends Template
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
        $context["rand"] = twig_random($this->env);
        // line 35
        echo "
<span id=\"user_";
        // line 36
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\">
    <i class=\"ti ti-user ms-1\"></i>
    ";
        // line 38
        echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("User", ($context["users_id"] ?? null), ["enable_anonymization" => ($context["enable_anonymization"] ?? null)]);
        echo "
</span>

";
        // line 41
        if ( !($context["enable_anonymization"] ?? null)) {
            // line 42
            echo "    ";
            $context["user"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("User", ($context["users_id"] ?? null));
            // line 43
            echo "    ";
            if ( !(null === ($context["user"] ?? null))) {
                // line 44
                echo "        ";
                $context["user_fields"] = twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "fields", [], "any", false, false, false, 44);
                // line 45
                echo "        ";
                $context["user_fields"] = twig_array_merge(($context["user_fields"] ?? null), ["user_name" => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getFriendlyName", [], "method", false, false, false, 45))]);
                // line 46
                echo "        ";
                $context["user_fields"] = twig_array_merge(($context["user_fields"] ?? null), ["email" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getDefaultEmail", [], "method", false, false, false, 46)]);
                // line 47
                echo "        ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showToolTip", [0 => twig_include($this->env, $context, "components/user/info_card.html.twig", ["user" =>                 // line 52
($context["user_fields"] ?? null)], false), 1 => ["applyto" => ("user_" .                 // line 56
($context["rand"] ?? null))]]);
                // line 60
                echo "    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "components/user/link_with_tooltip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 60,  76 => 56,  75 => 52,  73 => 47,  70 => 46,  67 => 45,  64 => 44,  61 => 43,  58 => 42,  56 => 41,  50 => 38,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
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

{% set rand = random() %}

<span id=\"user_{{ rand }}\">
    <i class=\"ti ti-user ms-1\"></i>
    {{ get_item_link('User', users_id, {'enable_anonymization': enable_anonymization}) }}
</span>

{% if not enable_anonymization %}
    {% set user = get_item('User', users_id) %}
    {% if user is not null %}
        {% set user_fields = user.fields %}
        {% set user_fields = user_fields|merge({user_name: user.getFriendlyName()|verbatim_value}) %}
        {% set user_fields = user_fields|merge({email: user.getDefaultEmail()}) %}
        {% do call(
            'Html::showToolTip',
            [
                include(
                    'components/user/info_card.html.twig',
                    {'user': user_fields},
                    with_context = false
                ),
                {
                    'applyto': \"user_\" ~ rand
                }
            ]
        ) %}
    {% endif %}
{% endif %}
", "components/user/link_with_tooltip.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\user\\link_with_tooltip.html.twig");
    }
}
