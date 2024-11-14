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

/* impact/edit_compound_modal.html.twig */
class __TwigTemplate_a2a2d440df7173a89dd62a897169df59 extends Template
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
<div id=\"edit_compound_dialog\"  class=\"modal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">

            ";
        // line 39
        echo "            <div class=\"modal-header\">
                <h5 class=\"modal-title\"> ";
        // line 40
        echo twig_escape_filter($this->env, __("Edit group"), "html", null, true);
        echo " </h5>
                <button type=\"button\" class=\"btn btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>

            ";
        // line 45
        echo "            <div class=\"modal-body\">
                <form>
                    <div class=\"form-group mb-3\">
                        <label class=\"form-label\" for=\"compound_name\">
                            ";
        // line 49
        echo twig_escape_filter($this->env, __("Name"), "html", null, true);
        echo "
                        </label>
                        <input type=\"text\" class=\"form-control\" name=\"compound_name\" />
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"compound_color\">
                            ";
        // line 55
        echo twig_escape_filter($this->env, __("Color"), "html", null, true);
        echo "
                        </label>
                        <input type=\"color\" class=\"form-control\" name=\"compound_color\" />
                    </div>
                </form>
            </div>

            ";
        // line 63
        echo "            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-primary\" id=\"edit_compound_save\"> ";
        // line 64
        echo twig_escape_filter($this->env, __("Save"), "html", null, true);
        echo " </button>
            </div>

        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "impact/edit_compound_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 64,  79 => 63,  69 => 55,  60 => 49,  54 => 45,  47 => 40,  44 => 39,  37 => 33,);
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

<div id=\"edit_compound_dialog\"  class=\"modal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">

            {# Header #}
            <div class=\"modal-header\">
                <h5 class=\"modal-title\"> {{ __('Edit group') }} </h5>
                <button type=\"button\" class=\"btn btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>

            {# Body #}
            <div class=\"modal-body\">
                <form>
                    <div class=\"form-group mb-3\">
                        <label class=\"form-label\" for=\"compound_name\">
                            {{ __('Name') }}
                        </label>
                        <input type=\"text\" class=\"form-control\" name=\"compound_name\" />
                    </div>
                    <div class=\"form-group\">
                        <label class=\"form-label\" for=\"compound_color\">
                            {{ __('Color') }}
                        </label>
                        <input type=\"color\" class=\"form-control\" name=\"compound_color\" />
                    </div>
                </form>
            </div>

            {# Actions #}
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-primary\" id=\"edit_compound_save\"> {{ __('Save') }} </button>
            </div>

        </div>
    </div>
</div>
", "impact/edit_compound_modal.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\impact\\edit_compound_modal.html.twig");
    }
}
