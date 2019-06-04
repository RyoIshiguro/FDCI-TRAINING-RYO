"use strict";

var arrAlphabet = [
    "a",
    "b",
    "c",
    "d",
    "e",
    "f",
    "g",
    "h",
    "i",
    "j",
    "k",
    "l",
    "m",
    "n",
    "o",
    "p",
    "q",
    "r",
    "s",
    "t",
    "u",
    "v",
    "w",
    "x",
    "y",
    "z"
];

var name = "fortydegrees";
var arrName = name.split("");
/*
arrName[0] = f
arrName[1] = o
arrName[2] = r
arrName[3] = t
arrName[4] = y
*/
//   for(var i =0 ; i <= arrAlphabet.length ; i++){
//         console.log(arrAlphabet[i] + " is "+ i +"banme");
//   }
// console.log(arrName);
// console.log(arrAlphabet.length);
//
//
//
// var splice = arrAlphabet[i].splice(1,5);
// console.log(splice);


for (var i = 0; i < arrName.length; i++){
  for (var f = 0; f < arrAlphabet.length; f++ ){

    if(arrName[i] == arrAlphabet[f]){
      console.log(arrName[i] + "=" + f);

    }
  }
}



//console.log(arrAlphabet,arrAlphabet[]);
