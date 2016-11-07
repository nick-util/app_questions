1.  =>
  ```
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
        if( array_key_exists($attribute, $item) && is_int($item[$attribute]) ){
          $out += pow( $item[$attribute], 2);
        }
      }

      return  $out;
    }
  ```


2. =>
  ```
  var sumSquaresOfData = function(in_array, attribute){

    var out = 0;

    in_array.map(function(list_obj){

      var cont = list_obj[attribute] && isFinite(list_obj[attribute])

      if(cont){
          out += Math.pow(list_obj[attribute], 2);
      }

    })

    return out;
  }
  ```


3. =>

  * There were several errors
    1.  Extra parenthesis
    2.  testIfContainsFlag changed to testIfContainsTag
    3.  best practice, a public static function to be declared public static

  ```
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
  ```

  MORE ROBUST VERSION OF ABOVE(for even MORE robust would prob go with a library of some sort or more detailed regex):

  ```
  /**
  * Tests if a string contains an html tag pattern of: "/ \.*<.*>.*<\/.*>.* /"
  *
  * @param string to test if contains html tags
  *
  * @return same as preg_match (0:no match, 1:match, false:if error)
  *
  * @access public
  */
    public static function contains_html_tag($string){
      $tag_regex = "/\.*<.*>.*<\/.*>.*/";
      return preg_match($tag_regex, $string);
    }
  }
  ```
4.
  The issue:
    1. The variable 'value' inside the returned function was binding to the outer variable at execution time. Need to add an immediately invoked function expression. This gives each returned function its own variable scope.
    I feel like adding another function outside of this one instead of the IIFE looks cleaner, but wanted to keep it contained inside the single function as per the requirements.


  Correct function:

  ```
  var makeGetterArray = function(valueArray, dynamicDefault){

    if (dynamicDefault) {
      var defaultVal = dynamicDefault;
    }

    var output = [];
    var i, length = valueArray.length, value;

    for (i = 0; i < length; i++)
    {
      if (valueArray[i]) {
        value = valueArray[i];
      } else {
        value = defaultVal;
      }

      output[i] = ( function(value){
        return function() {
          return value;
        }
      })(value);
    }

    return output;
  }
  ```


5.
  * From a technical standpoint the UPDATE operation is:
    1. joining the email_lookup table with sessions, disposition, person and hygiene tables,
    2. finding the records with a  'disposition_id' of 0
    3. updating the disposition, person, hygiene, and site columns of the email_lookup record with their corresponding values in the other tables.


  * From a real world explanation it appears that there's an operation somewhere that does an email lookup. It stores details about the email_lookup operation in the sessions table and the results in the disposition table. I'm assuming hygeine refers to if the cleanliness of the persons data(i.e. if they're 'clean' to be contacted or on a no-contact list?).
  Therefore, the UPDATE looks for email_lookups without their disposition attached. It then updates all of the  various information pertaining to the lookup so now the email_lookup record has all of its correct information associated with it.

  * To limit the search time you have to apparently add a `max_execution_time=50` or `max_statement_time=50` to the statement.
