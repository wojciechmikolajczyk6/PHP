<?php
require_once dirname(__FILE__).'/config.php';

//przekierowanie przeglądarki klienta (redirect)
header("Location: "._APP_URL."/calc.php");
echo 'OK';
//przekazanie żądania do następnego dokumentu ("forward")
include _ROOT_PATH. '/calc.php';