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

/**
* Converts an array of values into an array of
* callback functions which returns each of the
* values originally passed.
* For empty inputs, the default is used
*/
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


module.exports = {
  sumSquaresOfData: sumSquaresOfData,
  makeGetterArray: makeGetterArray
}