<?php
// php нативная не умеет работать с форматов данных json чаще всего для этого используется node.js
// но мы можем поработать с этим типом данных используя для этого конструкцию
$_POST = json_decode(file_get_contents("php://input"), true);
echo var_dump($_POST);