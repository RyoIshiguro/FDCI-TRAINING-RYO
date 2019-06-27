"use strict";

var gu = document.getElementById('gu');
var choki = document.getElementById('choki');
var pa = document.getElementById('pa');
var retry = document.getElementById('retry');

//com hand function
function functionName(hand) {
  var arr = ["gu","choki","pa"];


  // var num1 = arr[Math.floor(Math.random() * arr.length)];
  var num2 = arr[Math.floor(Math.random() * arr.length)];

  // var num1 = Math.floor(Math.random()*3);
  // var num2 = Math.floor(Math.random()*3);

  // console.log(num1);
  // console.log(num2);
}

function reset(hand) {
  var arr = ["gu","choki","pa"];
  var num2 = arr[Math.floor(Math.random() * arr.length)];

}

// function judge(hands){
//
//   var arr = ["gu","choki","pa"];
//
//   var num1 = arr[Math.floor(Math.random() * arr.length)];
//
//   console.log(num1);
//   console.log(hands);
// };

//gu choki pa



//動作
// var btn1 = document.getElementById("gu");
// btn1.addEventListener("click",function(){
//   console.log("gu");
//
//   if(  num1 == "gu" && num2 == "gu" ){
//     console.log("aiko");
//
//   } else if ( num1 == "gu" && num2 == "choki" ){
//     console.log("kachi");
//
//   } else if (  num1 == "gu" && num2 == "pa" ){
//     console.log("make");
//
//   } else {
//     console.log("aiko");
//   }
// });

//player1 gu
var btn1 = document.getElementById("gu");
btn1.addEventListener("click",function(){
  // console.log("gu");
  // console.log(btn1);
  var num1 = "gu";


  if( num2 == "gu" ){
    console.log("aiko");
    console.log(num2);

  } else if (num2 == "choki" ){
    console.log("kachi");
    console.log(num2);

  } else if (num2 == "pa"){
    console.log("make");
    console.log(num2);

  } else {
    console.log("aiko");
    console.log(num2);
  }
});

//player1 choki
var btn2 = document.getElementById("choki");
btn2.addEventListener("click",function(){
  // console.log("gu");
  // console.log(btn1);
  var num1 = "choki";


  if( num2 == "gu" ){
    console.log("make");
    console.log(num2);

  } else if (num2 == "choki" ){
    console.log("aiko");
    console.log(num2);

  } else if (num2 == "pa"){
    console.log("kachi");
    console.log(num2);

  } else {
    console.log("aiko");
    console.log(num2);
  }
});

//player1 pa
var btn3 = document.getElementById("pa");
btn3.addEventListener("click",function(){
  // console.log("gu");
  // console.log(btn1);
  var num1 = "pa";


  if( num2 == "gu" ){
    console.log("kachi");
    console.log(num2);

  } else if (num2 == "choki" ){
    console.log("make");
    console.log(num2);

  } else if (num2 == "pa"){
    console.log("aiko");
    console.log(num2);

  } else {
    console.log("aiko");
    console.log(num2);
  }
});

// var btn2 = document.getElementById("choki");
// btn2.addEventListener("click",function(){
//   // console.log("choki");
//   if (  num1 == "choki" && num2 == "gu" ){
//     console.log("make");
//
//   } else if ( num1 == "choki" && num2 == "choki" ){
//     console.log("aiko");
//
//   } else if (  num1 == "choki" && num2 == "pa" ){
//     console.log("kachi");
//
//   } else {
//     console.log("aiko");
//   }
// });

// var btn2 = document.getElementById("choki");
// btn2.addEventListener("click",function(){
//   // console.log("choki");
//   if (  num1 == "choki" && num2 == "gu" ){
//     console.log("make");
//
//   } else if ( num1 == "choki" && num2 == "choki" ){
//     console.log("aiko");
//
//   } else if (  num1 == "choki" && num2 == "pa" ){
//     console.log("kachi");
//
//   } else {
//     console.log("aiko");
//   }
// });

// var btn3 = document.getElementById("pa");
// btn3.addEventListener("click",function(){
//   // console.log("pa");
//   if (  num1 == "pa" && num2 == "gu" ){
//     console.log("kachi");
//
//   } else if ( num1 == "pa" && num2 == "choki" ){
//     console.log("make")
//
//   } else if ( num1 == "pa" && num2 == "pa" ){
//     console.log("aiko");  /*pa × pa*/
//   } else {
//     console.log("aiko");
//   }
// });

// var btn3 = document.getElementById("pa");
// btn3.addEventListener("click",function(){
//   // console.log("pa");
//   if (  num1 == "pa" && num2 == "gu" ){
//     console.log("kachi");
//
//   } else if ( num1 == "pa" && num2 == "choki" ){
//     console.log("make")
//
//   } else if ( num1 == "pa" && num2 == "pa" ){
//     console.log("aiko");  /*pa × pa*/
//
//   } else {
//     console.log("aiko");
//   }
// });


// var btn4 = document.getElementById("retry");
// btn4.addEventListener("click",function(){
//   // console.log("pa");
//   reset();
// });









var arr = ["gu","choki","pa"];

var num1 = arr[Math.floor(Math.random() * arr.length)];
var num2 = arr[Math.floor(Math.random() * arr.length)];

// var num1 = Math.floor(Math.random()*3);
// var num2 = Math.floor(Math.random()*3);

// console.log(num1);
// console.log(num2);


// console.log(arr[0]);

// console.log(arr[Math.floor(Math.random() * arr.length)]);
//ランダム整数の表示は同じだけど、arrのlengthを掛けることで整数を作る

// if(  num1 == "gu" && num2 == "gu" ){
//   console.log("aiko");
//
// } else if ( num1 == "gu" && num2 == "choki" ){
//   console.log("kachi");
//
// } else if (  num1 == "gu" && num2 == "pa" ){
//   console.log("make");
//
// } else if (  num1 == "choki" && num2 == "gu" ){
//   console.log("make");
//
// } else if ( num1 == "choki" && num2 == "choki" ){
//   console.log("aiko");
//
// } else if (  num1 == "choki" && num2 == "pa" ){
//   console.log("kachi");
//
// } else if (  num1 == "pa" && num2 == "gu" ){
//   console.log("kachi");
//
// } else if ( num1 == "pa" && num2 == "choki" ){
//   console.log("make")
//
// } else if ( num1 == "pa" && num2 == "pa" ){
//   console.log("aiko");  /*pa × pa*/
// } else {
//   console.log("error");
// }
