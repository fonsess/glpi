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

/* @news/profile.html.twig */
class __TwigTemplate_61fb8cb880325da495d89c0a5e5c479e extends Template
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
<div class=\"spaced\">
    <form method=\"post\" action=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Profile"), "html", null, true);
        echo "\">
        ";
        // line 31
        twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "displayRightsChoiceMatrix", [0 => ($context["rights"] ?? null), 1 => ["title" => ($context["title"] ?? null)]], "method", false, false, false, 31);
        // line 32
        echo "
        <div class=\"center\">
            <input type=\"hidden\" name=\"id\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 35
        echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::submit", [0 => _x("button", "Save", "news"), 1 => ["name" => "update"]]);
        echo "
        </div>

        <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\">
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "@news/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 38,  55 => 35,  51 => 34,  47 => 32,  45 => 31,  41 => 30,  37 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "@news/profile.html.twig", "C:\\xampp\\htdocs\\glpi\\plugins\\news\\templates\\profile.html.twig");
    }
}
