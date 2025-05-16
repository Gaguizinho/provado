<?php
// Recebe o nome enviado via POST
$name = isset($_POST['name']) ? trim($_POST['name']) : null;


echo json_encode ($name);