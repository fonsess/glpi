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

/* @news/display_alert.html.twig */
class __TwigTemplate_877b962c42c9596192d9cf6062aba087 extends Template
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
        // line 28
        echo "
<style>
    /* Mising tabler variable */
    :root{
        --tblr-lime: #74b816;
    }
</style>

";
        // line 36
        $context["js_rand"] = twig_random($this->env);
        // line 37
        echo "
<div class=\"plugin_news_alert ";
        // line 38
        echo twig_escape_filter($this->env, ($context["size"] ?? null), "html", null, true);
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["alert_fields"] ?? null), "id", [], "any", true, true, false, 38)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["alert_fields"] ?? null), "id", [], "any", false, false, false, 38), 0)) : (0)), "html", null, true);
        echo "\">
    <div
        class=\"
            alert-";
        // line 41
        echo twig_escape_filter($this->env, ($context["js_rand"] ?? null), "html", null, true);
        echo "
            alert text-start bg-";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["alert_fields"] ?? null), "background_color", [], "any", false, false, false, 42), "html", null, true);
        echo "
            ";
        // line 43
        echo ((($context["can_close"] ?? null)) ? ("alert-dismissible") : (""));
        echo "
        \"
        style=\"
            color: var(--tblr-";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["alert_fields"] ?? null), "text_color", [], "any", false, false, false, 46), "html", null, true);
        echo ") !important;
            border-left-color: var(--tblr-";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["alert_fields"] ?? null), "emphasis_color", [], "any", false, false, false, 47), "html", null, true);
        echo ") !important;
        \"
    >
        <div class=\"d-flex\">
            <i class=\"ti ti-";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["alert_fields"] ?? null), "icon", [], "any", false, false, false, 51), "html", null, true);
        echo " fa-2x me-2\"></i>
            <div>
                <h3 class=\"mt-1\">
                    ";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(twig_get_attribute($this->env, $this->source, ($context["alert_fields"] ?? null), "name", [], "any", false, false, false, 54)), "html", null, true);
        echo "
                    ";
        // line 55
        if (($context["show_only_login_alerts"] ?? null)) {
            // line 56
            echo "                        <a class=\"plugin_news_alert-toggle\"></a>
                    ";
        }
        // line 58
        echo "                </h3>
                ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["alert_fields"] ?? null), "display_dates", [], "any", false, false, false, 59)) {
            // line 60
            echo "                    <div
                        ";
            // line 62
            echo "                        ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["alert_fields"] ?? null), "background_color", [], "any", false, false, false, 62), [0 => "dark", 1 => "white", 2 => "yellow", 3 => "lime"])) {
                // line 63
                echo "                            class=\"text-muted\"
                        ";
            } else {
                // line 65
                echo "                            style=\"font-style: italic\"
                        ";
            }
            // line 67
            echo "                    >
                        ";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(twig_get_attribute($this->env, $this->source, ($context["alert_fields"] ?? null), "date_start", [], "any", false, false, false, 68)), "html", null, true);
            echo "
                        ";
            // line 69
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["alert_fields"] ?? null), "date_start", [], "any", false, false, false, 69)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["alert_fields"] ?? null), "date_end", [], "any", false, false, false, 69)))) {
                // line 70
                echo "                            -
                        ";
            }
            // line 72
            echo "                        ";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(twig_get_attribute($this->env, $this->source, ($context["alert_fields"] ?? null), "date_end", [], "any", false, false, false, 72)), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 75
        echo "                <div class=\"mt-2 plugin_news_alert-content\">
                    ";
        // line 76
        echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["content"] ?? null));
        echo "
                </div>
            </div>
        </div>
        ";
        // line 80
        if (($context["can_close"] ?? null)) {
            // line 81
            echo "            <a class=\"btn-close\" aria-label=\"close\" data-bs-dismiss=\"alert\"></a>
        ";
        }
        // line 83
        echo "    </div>
</div>

<script>
    (function () {
        // Accentuation color must have a lower opacity
        // Must be done in JS, we can't do a rgba on hex variables directly from css
        const background = \$('.alert-";
        // line 90
        echo twig_escape_filter($this->env, ($context["js_rand"] ?? null), "html", null, true);
        echo "').css('background-color');
        const accent = \$('.alert-";
        // line 91
        echo twig_escape_filter($this->env, ($context["js_rand"] ?? null), "html", null, true);
        echo "').css('border-left-color');

        // Do not add opacity if background and accent are identical (= no accent)
        if (background !== accent) {
            // Rewrite \"rgb(r,g,b)\" into \"rgba(r,g,b,0.6)\"
            \$('.alert-";
        // line 96
        echo twig_escape_filter($this->env, ($context["js_rand"] ?? null), "html", null, true);
        echo "').css(
                'border-left-color',
                \$('.alert-";
        // line 98
        echo twig_escape_filter($this->env, ($context["js_rand"] ?? null), "html", null, true);
        echo "').css('border-left-color')
                    .replace('rgb', 'rgba')
                    .replace(')', ', 0.6)')
            )
        }
    })();
</script>
";
    }

    public function getTemplateName()
    {
        return "@news/display_alert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 98,  177 => 96,  169 => 91,  165 => 90,  156 => 83,  152 => 81,  150 => 80,  143 => 76,  140 => 75,  133 => 72,  129 => 70,  127 => 69,  123 => 68,  120 => 67,  116 => 65,  112 => 63,  109 => 62,  106 => 60,  104 => 59,  101 => 58,  97 => 56,  95 => 55,  91 => 54,  85 => 51,  78 => 47,  74 => 46,  68 => 43,  64 => 42,  60 => 41,  52 => 38,  49 => 37,  47 => 36,  37 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "@news/display_alert.html.twig", "C:\\xampp\\htdocs\\glpi\\plugins\\news\\templates\\display_alert.html.twig");
    }
}
