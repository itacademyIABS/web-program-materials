<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
ini_set('assert.exception', 1);  // могут понадобится.
ini_set('zend.assertions', -1);
assert_options(ASSERT_ACTIVE, TRUE);

require './functions.php';

$users = get_users();

assert(isset($users[0]['login']));

assert(check_password('admin', '123456'));

assert(check_password('user1', '123'));

assert(check_password('user1', '1234') == false);