<?php

Plugin::load('fields', true);

$dropdown = new PluginFieldsPerodoletivofieldDropdown();
include GLPI_ROOT . "/front/dropdown.common.php";
