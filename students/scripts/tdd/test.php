<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
ini_set('assert.exception', 1);  // могут понадобится.
ini_set('zend.assertions', -1);
assert_options(ASSERT_ACTIVE, TRUE);

require './functions.php';

assert(get_hour("18:00") == 18);
assert(get_hour("20:00") == 20);

// fail
//assert(get_hour("21:00") == 20);

echo "ok\n";