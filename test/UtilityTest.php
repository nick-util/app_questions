<?php namespace rxmg\test;

require( __DIR__ . '/../vendor/autoload.php' );


use PHPUnit\Framework\TestCase;
use rxmg\app\Utility;


class UtilityTest extends TestCase
{
   public function test_sumSqaresOfData()
    {
      $array = [
                [ "id" => 1, "amount" => 1],
                [ "id" => 2, "amount" => 2],
                [ "id" => 4, "amount" => 3],
                [ "id" => 5, "amount" => "st"],
                [ "id" => 6, "not_amount"=>4],
                [ "id" => 8, "not_amount" => 5, "amount" => 5],
                [ "id" => 7]
            ];

      $result = Utility::sumSquaresOfData($array, "amount");
      $expected =  pow(1, 2) + pow(2, 2) + pow(3, 2) + pow(5, 2);
      echo "expected:" . $expected;
      $this->assertEquals($expected, $result);
    }

    /**
    * @dataProvider htmlProvider
    */
    public function test_contains_html_tag($string,$expected){
      $result = Utility::contains_html_tag($string);
      $this->assertEquals($expected, $result);
    }

    public function htmlProvider(){
      return [
        ["test", false],
        ["<div>test</div>", true],
        ["<div test </div>", false],
        ["<div> test </div", false],
        ["test </div>", false],
        ["<div>test",false]
      ];
    }
}

