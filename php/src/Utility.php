<?php namespace rxmg\app;
/**
* Squares and summates an attribute in an array of arrays.
*
* @param array of arrays
* @param string, name of the attribute you want to apply summation and squaring
*
* @return the summation of the squares of the  attribute in the arrays
*
* @access public
*/

Class Utility{

  public static function sumSquaresOfData($array, $attribute){
    $out = 0;

    foreach ($array as $item) {
     // only evaluates second expression if first is true
      if( array_key_exists($attribute, $item) && is_int($item[$attribute]) ){
        $out += pow( $item[$attribute], 2);
      }
    }

    return  $out;
  }

/**
* Tests if a string contains an html tag pattern of: "/ \.*<.*>.*<\/.*>.* /"
*
* @param string to test if contains html tags
*
* @return true
*
* @access public
*/
  public static function contains_html_tag($string){
    $tag_regex = "/\.*<.*>.*<\/.*>.*/";
    return preg_match($tag_regex, $string);
  }
}