<?php
Use RXMG\RxTest;
//error_reporting(E_STRICT);
require 'RxTest.php';
echo RxTest::testIfContainsTag('lorem ipsum <h2>header</h2>');
// should be "Contains HTML tags"
echo RxTest::testIfContainsTag('<span>lorem ipsum</span>');
// should be "Contains HTML tags"
echo RxTest::testIfContainsTag('dolor sit amet');
// should be "Does not contain HTML tags"