<?php namespace RXMG;

class RxTest
{
  /**
  * Tests to see if a given input contains HTML tags
  */
public static function testIfContainsTag($input)
  {
    $test = strpos($input, '<');

    if ($test = true) {
    return "Contains HTML tags\n";
    } else {
    return "Does not contain HTML tags\n";
    }
  }
}