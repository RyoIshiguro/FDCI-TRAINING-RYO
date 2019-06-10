"use strict";
/*文字列の子音をとって文字列の最後に繋げる。その後ろに”ay”を追加する*/

/*
  memo
    .pop();  配列から最後の要素を削除し、その要素を返します。

    .shift();  配列から最初の要素を削除して、その要素を返します。このメソッドは配列のlengthを変更する。

    .push();  配列の最後に1つ以上の要素を追加し、新しい配列のlengthを返す

    .pop();1つ以上の要素を配列の先頭に追加し、配列の新しいlengthを返す


    var str = "あいうえお" ;

    // 先頭から2文字を取得
    var a = str.slice( 0, 2 ) ;

    // 末尾から2文字を取得
    var b = str.slice( -2 ) ;

    const str1 = "ABあい";
    console.log(str1.charAt(str1.length -1)); // い
    最後の文字を取得しています。lengthで文字列の長さを取得して1引く


*/

/*
var vowels = ["a","e","i","o","u"];
var ay = ["pig","latin","banana"];
var way = ["are","egg"];


function adday(add){

  for (var i = 0; i < add.length; i++) {
      // if(ay[i] == ){
        var split = add[i].split("");
        var first = split[0];

        // loop  vowels and compare each index if same with first variable
        if (character(first) == true) {
          console.log(add[i] + "ay");
        } else {
              split.shift();
              split.push(first);
              var doc = split.join("");
              console.log(doc + "ay");
        }
    }
  }

function character (check){
  for (var i = 0; i < vowels.length; i++) {
    // console.log(vowels[i]);
    if(check == vowels[i]){
      return true;
    }
  }return false;
}

console.log(adday(ay));

console.log(adday(way));
*/

var ay = ["pig","latin","banana"];
var way = ["are","egg"];
var vowels = ["a","i","u","e","o"];

function vowel(check){
  for (var i = 0; i < check.length; i++) {
    var split = check[i].split("");
    var first = split[0];

    if(character(first) == true){
      console.log(split.join("")+"way"+"\tor\t"+split.join("")+"ay");
    }else{
      console.log()
      split.shift();
      split.push(first);
      split.join("");
      console.log(split.join("")+"ay");
    }
  }
}

function character(judge){
  for (var i = 0; i < vowels.length; i++) {
    if(judge == vowels[i]){
      return true
    }
  }  return false
}

// console.log(vowel(ay));
// console.log(vowel(way));

vowel(ay);
vowel(way);





















/*
//fibonachi

function fib(n) {
 if (n == 1 || n == 0) {
   return n;
 } else {
   return fib(n - 1) + fib(n - 2);
  }
}

function compute(number){
  for (var i = 0; i < number; i++) {
    console.log(fib(i));
  }
}

// console.log(
  compute(4);
// );

// console.log(fib(4));
*/


function fibonachi(n) {
  if(n == 1 || n == 0){
    return n;
  }else{
    return fibonachi(n-1) + fibonachi(n-2);
  }
}

function compulate(number){
  for (var i = 0; i < number; i++) {
    console.log(fibonachi(i));
  }
}

compulate(4);
