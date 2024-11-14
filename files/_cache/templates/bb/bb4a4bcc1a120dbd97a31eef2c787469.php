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

/* pages/tools/project_task.html.twig */
class __TwigTemplate_e9d5472cc472d7c1d1721ea064a53a81 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'form_fields' => [$this, 'block_form_fields'],
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "pages/tools/project_task.html.twig", 35)->unwrap();
        // line 37
        $context["form_id"] = ("project_task_" . ($context["rand"] ?? null));
        // line 38
        $context["content_field_id"] = ("content_" . ($context["rand"] ?? null));
        // line 39
        $context["params"] = ["formoptions" => (("id=\"" .         // line 40
($context["form_id"] ?? null)) . "\"")];
        // line 34
        $this->parent = $this->loadTemplate("generic_show_form.html.twig", "pages/tools/project_task.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 43
    public function block_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 44
        echo "
    ";
        // line 45
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["ProjectTaskTemplate", "projecttasktemplates_id", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 48
($context["item"] ?? null), "fields", [], "any", false, false, false, 48), "projecttasktemplates_id", [], "any", false, false, false, 48), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("ProjectTaskTemplate"), ["entity" => twig_get_attribute($this->env, $this->source,         // line 51
($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 51), "on_change" => "projecttasktemplate_update(this.value)"]], 45, $context, $this->getSourceContext());
        // line 54
        echo "

    <script>
        const form = \$('#";
        // line 57
        echo twig_escape_filter($this->env, ($context["form_id"] ?? null), "html", null, true);
        echo "');
        function projecttasktemplate_update(value) {
            \$.ajax({
                url: CFG_GLPI.root_doc + \"/ajax/projecttask.php\",
                type: \"POST\",
                data: {
                    projecttasktemplates_id: value
                }
            }).done(function(data) {
                // Set simple inputs
                form.find('input[name=name]').val(data.name);
                form.find('textarea[name=comment]').val(data.comments);

                // Set flatpickr dates
                form.find('input[name=plan_start_date]').parent()[0]._flatpickr.setDate(data.plan_start_date);
                form.find('input[name=plan_end_date]').parent()[0]._flatpickr.setDate(data.plan_end_date);
                form.find('input[name=real_start_date]').parent()[0]._flatpickr.setDate(data.real_start_date);
                form.find('input[name=real_end_date]').parent()[0]._flatpickr.setDate(data.real_end_date);

                // Set tinymce
                if (tasktinymce = tinymce.get(\"";
        // line 77
        echo twig_escape_filter($this->env, ($context["content_field_id"] ?? null), "html", null, true);
        echo "\")) {
                    tasktinymce.setContent(data.description);
                }

                // Set dropdowns and dates
                form.find('select[name=projecttasks_id]').trigger(\"setValue\", data.projecttasks_id);
                form.find('select[name=projectstates_id]').trigger(\"setValue\", data.projectstates_id);
                form.find('select[name=projecttasktypes_id]').trigger(\"setValue\", data.projecttasktypes_id);
                form.find('select[name=percent_done]').trigger(\"setValue\", data.percent_done);
                form.find('select[name=is_milestone]').trigger(\"setValue\", data.is_milestone);
                form.find('select[name=effective_duration]').trigger(\"setValue\", data.effective_duration);
                form.find('select[name=planned_duration]').trigger(\"setValue\", data.planned_duration);
            });
         }
    </script>

    ";
        // line 93
        echo twig_call_macro($macros["fields"], "macro_nullField", [], 93, $context, $this->getSourceContext());
        echo "

    ";
        // line 95
        ob_start(function () { return ''; });
        // line 96
        echo "        <span class=\"col-form-label d-inline-flex\">";
        echo twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "getLink", [], "method", false, false, false, 96);
        echo "</span>
    ";
        $context["project_link"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 98
        echo "    ";
        echo twig_call_macro($macros["fields"], "macro_field", ["_project",         // line 100
($context["project_link"] ?? null), twig_get_attribute($this->env, $this->source,         // line 101
($context["parent"] ?? null), "getTypeName", [], "method", false, false, false, 101)], 98, $context, $this->getSourceContext());
        // line 102
        echo "

    ";
        // line 104
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewID", [0 => ($context["id"] ?? null)], "method", false, false, false, 104)) {
            // line 105
            echo "        <input type='hidden' name='projects_id' value='";
            echo twig_escape_filter($this->env, ($context["projects_id"] ?? null), "html", null, true);
            echo "'>
        <input type='hidden' name='is_recursive' value='";
            // line 106
            echo twig_escape_filter($this->env, ($context["recursive"] ?? null), "html", null, true);
            echo "'>
    ";
        }
        // line 108
        echo "
    ";
        // line 109
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["ProjectTask", "projecttasks_id",         // line 112
($context["projecttasks_id"] ?? null), __("As child of"), ["entity" => twig_get_attribute($this->env, $this->source,         // line 115
($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 115), "condition" => ["glpi_projecttasks.projects_id" =>         // line 116
($context["projects_id"] ?? null)], "used" => [0 => twig_get_attribute($this->env, $this->source,         // line 117
($context["item"] ?? null), "getID", [], "method", false, false, false, 117)]]], 109, $context, $this->getSourceContext());
        // line 119
        echo "

    ";
        // line 121
        echo twig_call_macro($macros["fields"], "macro_textField", ["name", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 123
($context["item"] ?? null), "fields", [], "any", false, false, false, 123), "name", [], "any", false, false, false, 123), __("Name")], 121, $context, $this->getSourceContext());
        // line 125
        echo "

    ";
        // line 127
        echo twig_call_macro($macros["fields"], "macro_nullField", [], 127, $context, $this->getSourceContext());
        echo "

    ";
        // line 129
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["ProjectState", "projectstates_id", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 132
($context["item"] ?? null), "fields", [], "any", false, false, false, 132), "projectstates_id", [], "any", false, false, false, 132), _x("item", "State")], 129, $context, $this->getSourceContext());
        // line 134
        echo "

    ";
        // line 136
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["ProjectTaskType", "projecttasktypes_id", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 139
($context["item"] ?? null), "fields", [], "any", false, false, false, 139), "projecttasktypes_id", [], "any", false, false, false, 139), _n("Type", "Types", 1)], 136, $context, $this->getSourceContext());
        // line 141
        echo "

    ";
        // line 143
        echo twig_call_macro($macros["fields"], "macro_dropdownNumberField", ["percent_done", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 145
($context["item"] ?? null), "fields", [], "any", false, false, false, 145), "percent_done", [], "any", false, false, false, 145), __("Percent done"), twig_array_merge(["value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 148
($context["item"] ?? null), "fields", [], "any", false, false, false, 148), "percent_done", [], "any", false, false, false, 148), "min" => 0, "max" => 100, "step" => 5, "unit" => "%"], ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 153
($context["item"] ?? null), "fields", [], "any", false, false, false, 153), "auto_percent_done", [], "any", false, false, false, 153)) ? (["specific_tags" => ["disabled" => "disabled"]]) : ([])))], 143, $context, $this->getSourceContext());
        // line 154
        echo "

    ";
        // line 156
        ob_start(function () { return ''; });
        // line 157
        echo "        ";
        $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showToolTip", [0 => __("When automatic computation is active, percentage is computed based on the average of all child task percent done.")]);
        // line 160
        echo "    ";
        $context["tooltip"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 161
        echo "    ";
        echo twig_call_macro($macros["fields"], "macro_checkboxField", ["auto_percent_done", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 163
($context["item"] ?? null), "fields", [], "any", false, false, false, 163), "auto_percent_done", [], "any", false, false, false, 163), __("Automatically calculate"), ["add_field_html" =>         // line 166
($context["tooltip"] ?? null)]], 161, $context, $this->getSourceContext());
        // line 168
        echo "
    <script>
        form.find(\"input[name=auto_percent_done]\").on('change', function() {
            \$(\"select[name='percent_done']\").prop('disabled', \$(\"input[name='auto_percent_done']\").eq(1).prop('checked'));
        });
    </script>

    ";
        // line 175
        echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_milestone", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 177
($context["item"] ?? null), "fields", [], "any", false, false, false, 177), "is_milestone", [], "any", false, false, false, 177), __("Milestone")], 175, $context, $this->getSourceContext());
        // line 179
        echo "
    <script>
        form.find('select[name=is_milestone]').on('change', function() {
            \$('.is_milestone').toggleClass('d-none', Boolean(Number(this.value)));
        });
    </script>

    ";
        // line 186
        echo twig_call_macro($macros["fields"], "macro_nullField", [], 186, $context, $this->getSourceContext());
        echo "

    <div class=\"hr-text\">
        <i class=\"ti ti-calendar-event\"></i>
        <span>";
        // line 190
        echo twig_escape_filter($this->env, __("Planning"), "html", null, true);
        echo "</span>
    </div>

    ";
        // line 193
        echo twig_call_macro($macros["fields"], "macro_datetimeField", ["plan_start_date", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 195
($context["item"] ?? null), "fields", [], "any", false, false, false, 195), "plan_start_date", [], "any", false, false, false, 195), __("Planned start date")], 193, $context, $this->getSourceContext());
        // line 197
        echo "

    ";
        // line 199
        echo twig_call_macro($macros["fields"], "macro_datetimeField", ["real_start_date", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 201
($context["item"] ?? null), "fields", [], "any", false, false, false, 201), "real_start_date", [], "any", false, false, false, 201), __("Real start date")], 199, $context, $this->getSourceContext());
        // line 203
        echo "

    ";
        // line 205
        echo twig_call_macro($macros["fields"], "macro_datetimeField", ["plan_end_date", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 207
($context["item"] ?? null), "fields", [], "any", false, false, false, 207), "plan_end_date", [], "any", false, false, false, 207), __("Planned end date"), ["field_class" => ("col-12 col-sm-6 is_milestone " . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 210
($context["item"] ?? null), "fields", [], "any", false, false, false, 210), "is_milestone", [], "any", false, false, false, 210)) ? ("d-none") : ("")))]], 205, $context, $this->getSourceContext());
        // line 212
        echo "

    ";
        // line 214
        echo twig_call_macro($macros["fields"], "macro_datetimeField", ["real_end_date", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 216
($context["item"] ?? null), "fields", [], "any", false, false, false, 216), "real_end_date", [], "any", false, false, false, 216), __("Real end date"), ["field_class" => ("col-12 col-sm-6 is_milestone " . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 219
($context["item"] ?? null), "fields", [], "any", false, false, false, 219), "is_milestone", [], "any", false, false, false, 219)) ? ("d-none") : ("")))]], 214, $context, $this->getSourceContext());
        // line 221
        echo "

    ";
        // line 223
        echo twig_call_macro($macros["fields"], "macro_dropdownTimestampField", ["planned_duration", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 225
($context["item"] ?? null), "fields", [], "any", false, false, false, 225), "planned_duration", [], "any", false, false, false, 225), __("Planned duration"), ["min" => 0, "max" => (8 * twig_constant("HOUR_TIMESTAMP")), "addfirstminutes" => true, "inhours" => true, "toadd" =>         // line 232
($context["duration_dropdown_to_add"] ?? null), "field_class" => ("col-12 col-sm-6 is_milestone " . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 233
($context["item"] ?? null), "fields", [], "any", false, false, false, 233), "is_milestone", [], "any", false, false, false, 233)) ? ("d-none") : ("")))]], 223, $context, $this->getSourceContext());
        // line 235
        echo "

    ";
        // line 237
        echo twig_call_macro($macros["fields"], "macro_dropdownTimestampField", ["effective_duration", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 239
($context["item"] ?? null), "fields", [], "any", false, false, false, 239), "effective_duration", [], "any", false, false, false, 239), __("Effective duration"), ["min" => 0, "max" => (8 * twig_constant("HOUR_TIMESTAMP")), "addfirstminutes" => true, "inhours" => true, "toadd" =>         // line 246
($context["duration_dropdown_to_add"] ?? null), "field_class" => ("col-12 col-sm-6 is_milestone " . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 247
($context["item"] ?? null), "fields", [], "any", false, false, false, 247), "is_milestone", [], "any", false, false, false, 247)) ? ("d-none") : ("")))]], 237, $context, $this->getSourceContext());
        // line 249
        echo "

    ";
        // line 251
        if (($context["id"] ?? null)) {
            // line 252
            echo "        ";
            ob_start(function () { return ''; });
            // line 253
            echo "            <span class=\"fw-normal col-form-label d-inline-flex \">";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDuration(($context["duration"] ?? null), false), "html", null, true);
            echo "</span>
        ";
            $context["ticket_duration"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 255
            echo "        ";
            echo twig_call_macro($macros["fields"], "macro_field", ["_ticket_duration",             // line 257
($context["ticket_duration"] ?? null), __("Tickets duration")], 255, $context, $this->getSourceContext());
            // line 259
            echo "

        ";
            // line 261
            ob_start(function () { return ''; });
            // line 262
            echo "            <span class=\"fw-normal col-form-label d-inline-flex \">";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDuration((($context["duration"] ?? null) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 262), "effective_duration", [], "any", false, false, false, 262)), false), "html", null, true);
            echo "</span>
        ";
            $context["total_duration"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 264
            echo "        ";
            echo twig_call_macro($macros["fields"], "macro_field", ["_total_duration",             // line 266
($context["total_duration"] ?? null), __("Total duration")], 264, $context, $this->getSourceContext());
            // line 268
            echo "
    ";
        }
        // line 270
        echo "
    <div class=\"hr-text\">
        <i class=\"ti ti-file-description\"></i>
        <span>";
        // line 273
        echo twig_escape_filter($this->env, __("Details"), "html", null, true);
        echo "</span>
    </div>

    ";
        // line 276
        echo twig_call_macro($macros["fields"], "macro_textareaField", ["content", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 278
($context["item"] ?? null), "fields", [], "any", false, false, false, 278), "content", [], "any", false, false, false, 278), __("Description"), ["name" => "content", "enable_richtext" => true, "id" =>         // line 283
($context["content_field_id"] ?? null), "label_class" => "col-xxl-2", "input_class" => "col-xxl-10", "field_class" => "col-12"]], 276, $context, $this->getSourceContext());
        // line 288
        echo "

    ";
        // line 290
        echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 292
($context["item"] ?? null), "fields", [], "any", false, false, false, 292), "comment", [], "any", false, false, false, 292), __("Comments"), ["label_class" => "col-xxl-2", "input_class" => "col-xxl-10", "field_class" => "col-12"]], 290, $context, $this->getSourceContext());
        // line 299
        echo "

";
    }

    public function getTemplateName()
    {
        return "pages/tools/project_task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 299,  346 => 292,  345 => 290,  341 => 288,  339 => 283,  338 => 278,  337 => 276,  331 => 273,  326 => 270,  322 => 268,  320 => 266,  318 => 264,  312 => 262,  310 => 261,  306 => 259,  304 => 257,  302 => 255,  296 => 253,  293 => 252,  291 => 251,  287 => 249,  285 => 247,  284 => 246,  283 => 239,  282 => 237,  278 => 235,  276 => 233,  275 => 232,  274 => 225,  273 => 223,  269 => 221,  267 => 219,  266 => 216,  265 => 214,  261 => 212,  259 => 210,  258 => 207,  257 => 205,  253 => 203,  251 => 201,  250 => 199,  246 => 197,  244 => 195,  243 => 193,  237 => 190,  230 => 186,  221 => 179,  219 => 177,  218 => 175,  209 => 168,  207 => 166,  206 => 163,  204 => 161,  201 => 160,  198 => 157,  196 => 156,  192 => 154,  190 => 153,  189 => 148,  188 => 145,  187 => 143,  183 => 141,  181 => 139,  180 => 136,  176 => 134,  174 => 132,  173 => 129,  168 => 127,  164 => 125,  162 => 123,  161 => 121,  157 => 119,  155 => 117,  154 => 116,  153 => 115,  152 => 112,  151 => 109,  148 => 108,  143 => 106,  138 => 105,  136 => 104,  132 => 102,  130 => 101,  129 => 100,  127 => 98,  121 => 96,  119 => 95,  114 => 93,  95 => 77,  72 => 57,  67 => 54,  65 => 51,  64 => 48,  63 => 45,  60 => 44,  56 => 43,  51 => 34,  49 => 40,  48 => 39,  46 => 38,  44 => 37,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/tools/project_task.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\pages\\tools\\project_task.html.twig");
    }
}
