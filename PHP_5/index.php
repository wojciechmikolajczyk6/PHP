<?php
require_once dirname(__FILE__).'/config.php';

//przekierowanie przeglądarki klienta (redirect)
//header("Location: "._APP_URL."/app/calc.php");

//przekazanie żądania do następnego dokumentu ("forward")
include $config->root_path.'/calc_app/calc.php';