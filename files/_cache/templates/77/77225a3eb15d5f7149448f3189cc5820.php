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

/* components/form/item_disk.html.twig */
class __TwigTemplate_be3506d2ca2e8402ab44392481f181ac extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/form/item_disk.html.twig", 35)->unwrap();
        // line 36
        $context["params"] = (($context["params"]) ?? ([]));
        // line 37
        $context["no_header"] = true;
        // line 38
        $context["no_inventory_footer"] = true;
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "components/form/item_disk.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 40
    public function block_more_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "
    <input type=\"hidden\" name=\"itemtype\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 42)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["itemtype"] ?? null) : null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"items_id\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 43)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["items_id"] ?? null) : null), "html", null, true);
        echo "\">

   ";
        // line 45
        echo twig_call_macro($macros["fields"], "macro_htmlField", ["items_id", twig_get_attribute($this->env, $this->source,         // line 47
($context["asset_item"] ?? null), "getLink", [], "method", false, false, false, 47), __("Item link"), twig_array_merge(        // line 49
($context["field_options"] ?? null), ($context["params"] ?? null))], 45, $context, $this->getSourceContext());
        // line 50
        echo "

   ";
        // line 52
        echo twig_call_macro($macros["fields"], "macro_textField", ["device", (($__internal_compile_2 = twig_get_attribute($this->env, $this->source,         // line 54
($context["item"] ?? null), "fields", [], "any", false, false, false, 54)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["device"] ?? null) : null), __("Partition"), twig_array_merge(        // line 56
($context["field_options"] ?? null), ($context["params"] ?? null))], 52, $context, $this->getSourceContext());
        // line 57
        echo "

   ";
        // line 59
        echo twig_call_macro($macros["fields"], "macro_textField", ["mountpoint", (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,         // line 61
($context["item"] ?? null), "fields", [], "any", false, false, false, 61)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["mountpoint"] ?? null) : null), __("Mount Point"), twig_array_merge(        // line 63
($context["field_options"] ?? null), ($context["params"] ?? null))], 59, $context, $this->getSourceContext());
        // line 64
        echo "

   ";
        // line 66
        $context["filesystems_label"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Filesystem::getTypeName", [0 => 0]);
        // line 67
        echo "   ";
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Filesystem", "filesystems_id", (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,         // line 70
($context["item"] ?? null), "fields", [], "any", false, false, false, 70)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["filesystems_id"] ?? null) : null),         // line 71
($context["filesystems_label"] ?? null), twig_array_merge(        // line 72
($context["field_options"] ?? null), ($context["params"] ?? null))], 67, $context, $this->getSourceContext());
        // line 73
        echo "

   ";
        // line 75
        echo twig_call_macro($macros["fields"], "macro_textField", ["totalsize", (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,         // line 77
($context["item"] ?? null), "fields", [], "any", false, false, false, 77)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["totalsize"] ?? null) : null), __("Global size"), twig_array_merge(        // line 79
($context["field_options"] ?? null), ($context["params"] ?? null))], 75, $context, $this->getSourceContext());
        // line 80
        echo "

   ";
        // line 82
        echo twig_call_macro($macros["fields"], "macro_textField", ["freesize", (($__internal_compile_6 = twig_get_attribute($this->env, $this->source,         // line 84
($context["item"] ?? null), "fields", [], "any", false, false, false, 84)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["freesize"] ?? null) : null), __("Free size"), twig_array_merge(        // line 86
($context["field_options"] ?? null), ($context["params"] ?? null))], 82, $context, $this->getSourceContext());
        // line 87
        echo "

   ";
        // line 89
        echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["encryption_status", (($__internal_compile_7 = twig_get_attribute($this->env, $this->source,         // line 91
($context["item"] ?? null), "fields", [], "any", false, false, false, 91)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["encryption_status"] ?? null) : null),         // line 92
($context["encryption_status_list"] ?? null), __("Encryption tool"), twig_array_merge(        // line 94
($context["field_options"] ?? null), ($context["params"] ?? null))], 89, $context, $this->getSourceContext());
        // line 95
        echo "

   ";
        // line 97
        echo twig_call_macro($macros["fields"], "macro_textField", ["encryption_tool", (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,         // line 99
($context["item"] ?? null), "fields", [], "any", false, false, false, 99)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["encryption_tool"] ?? null) : null), __("Encryption Tool"), twig_array_merge(        // line 101
($context["field_options"] ?? null), ($context["params"] ?? null))], 97, $context, $this->getSourceContext());
        // line 102
        echo "

   ";
        // line 104
        echo twig_call_macro($macros["fields"], "macro_textField", ["encryption_algorithm", (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,         // line 106
($context["item"] ?? null), "fields", [], "any", false, false, false, 106)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["encryption_algorithm"] ?? null) : null), __("Encryption Algorithm"), twig_array_merge(        // line 108
($context["field_options"] ?? null), ($context["params"] ?? null))], 104, $context, $this->getSourceContext());
        // line 109
        echo "

   ";
        // line 111
        echo twig_call_macro($macros["fields"], "macro_textField", ["encryption_type", (($__internal_compile_10 = twig_get_attribute($this->env, $this->source,         // line 113
($context["item"] ?? null), "fields", [], "any", false, false, false, 113)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["encryption_type"] ?? null) : null), __("Encryption Type"), twig_array_merge(        // line 115
($context["field_options"] ?? null), ($context["params"] ?? null))], 111, $context, $this->getSourceContext());
        // line 116
        echo "

";
    }

    public function getTemplateName()
    {
        return "components/form/item_disk.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 116,  150 => 115,  149 => 113,  148 => 111,  144 => 109,  142 => 108,  141 => 106,  140 => 104,  136 => 102,  134 => 101,  133 => 99,  132 => 97,  128 => 95,  126 => 94,  125 => 92,  124 => 91,  123 => 89,  119 => 87,  117 => 86,  116 => 84,  115 => 82,  111 => 80,  109 => 79,  108 => 77,  107 => 75,  103 => 73,  101 => 72,  100 => 71,  99 => 70,  97 => 67,  95 => 66,  91 => 64,  89 => 63,  88 => 61,  87 => 59,  83 => 57,  81 => 56,  80 => 54,  79 => 52,  75 => 50,  73 => 49,  72 => 47,  71 => 45,  66 => 43,  62 => 42,  59 => 41,  55 => 40,  50 => 34,  48 => 38,  46 => 37,  44 => 36,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/item_disk.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\form\\item_disk.html.twig");
    }
}
