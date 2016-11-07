var Utility = require('../src/Utility');


describe("The sumSquaresOfData method", function(){
  var test_array = [
                { "id" : 1, "amount" : 1},
                { "id" : 2, "amount" : 2},
                { "id" : 4, "amount" : 3},
                { "id" : 5, "amount" : "st"},
                { "id" : 6, "not_amount": 4},
                { "id" : 8, "not_amount" : 5, "amount" : 5},
                { "id" : 7}
            ];
  it("should equal the sum squares of the amount attributes in the test array", function() {
      var result = Utility.sumSquaresOfData(test_array, "amount");
      var expected =  Math.pow(1, 2) + Math.pow(2, 2) + Math.pow(3, 2) + Math.pow(5, 2);
      expect(result).toEqual(expected);
    });
});


describe("The makeGetterArray method", function(){

  it("should output functions that return values in the order: ['apple','pineapple', 'banana']", function() {
    var getterArray = Utility.makeGetterArray( ['apple','','banana'], 'pineapple' );
    getterArray =   getterArray.map(function(obj){ return obj() });
//    console.log("The array result is:" + getterArray);
    var result = JSON.stringify(getterArray)==JSON.stringify(['apple','pineapple', 'banana']);
    expect(result).toBe(true);
  })

  it("should output functions that return values in the order: ['kiwi', 'pear']", function() {
    var getterArray = Utility.makeGetterArray( ['', 'pear'], 'kiwi');
    getterArray =   getterArray.map(function(obj){ return obj() });
//    console.log("The array result is:" + getterArray);
    var result = JSON.stringify(getterArray)==JSON.stringify(['kiwi', 'pear']);
    expect(result).toBe(true);
  })


})