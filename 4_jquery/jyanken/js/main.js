"use strict";

var gu = document.getElementById('gu');
var choki = document.getElementById('choki');
var pa = document.getElementById('pa');
var retry = document.getElementById('retry');
var display = document.getElementById('display');


//配列　ジャンケン
var arr = ["gu","choki","pa"];
// ランダム正数
var num1 = arr[Math.floor(Math.random() * arr.length)];
var num2 = arr[Math.floor(Math.random() * arr.length)];




//com hand function
// function functionName(hand) {
//   var arr = ["gu","choki","pa"];
//
//
//   // var num1 = arr[Math.floor(Math.random() * arr.length)];
//   var num2 = arr[Math.floor(Math.random() * arr.length)];
//
//   // var num1 = Math.floor(Math.random()*3);
//   // var num2 = Math.floor(Math.random()*3);
//
//   // console.log(num1);
//   // console.log(num2);
// }


//player1 gu
var btn1 = document.getElementById("gu");
btn1.addEventListener("click",function(){
  // console.log("gu");
  // console.log(btn1);
  var num1 = "gu";
  


  if( num2 == "gu" ){
    console.log("aiko"  + " = you draw ");
    console.log(num2 + " = computer hund");
    display.innerHTML ="you draw" ;

  } else if (num2 == "choki" ){
    console.log("kachi" + " = you win!");
    console.log(num2 + " = computer hund");
      display.innerHTML ="you win!" ;

  } else if (num2 == "pa"){
    console.log("make" + " = hey loser ");
    console.log(num2 + " = computer hund");
      display.innerHTML ="hey loser" ;

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
    console.log("make" + " = hey loser ");
    console.log(num2);
    display.innerHTML ="hey loser" ;

  } else if (num2 == "choki" ){
    console.log("aiko"  + " = you draw ");
    console.log(num2);
    display.innerHTML ="you draw" ;

  } else if (num2 == "pa"){
    console.log("kachi" + " = you win!");
    console.log(num2);
    display.innerHTML ="you win!" ;

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
    console.log("kachi" + " = you win!");
    console.log(num2);
    display.innerHTML ="you win!" ;

  } else if (num2 == "choki" ){
    console.log("make" + " = hey loser ");
    console.log(num2);
    display.innerHTML ="hey loser" ;

  } else if (num2 == "pa"){
    console.log("aiko"  + " = you draw ");
    console.log(num2);
    display.innerHTML ="you draw" ;

  } else {
    console.log("aiko");
    console.log(num2);
  }
});


var btn_retry = document.getElementById('retry');
btn_retry.addEventListener("click",function(){


  /*リロード*/
  location.reload();

  /*コンソールをクリア*/
  // console.clear();

});
// var num1 = Math.floor(Math.random()*3);
// var num2 = Math.floor(Math.random()*3);

// console.log(num1);
// console.log(num2);


// console.log(arr[0]);

// console.log(arr[Math.floor(Math.random() * arr.length)]);
//ランダム整数の表示は同じだけど、arrのlengthを掛けることで整数を作る
