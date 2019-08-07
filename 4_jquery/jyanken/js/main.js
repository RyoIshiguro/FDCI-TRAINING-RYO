"use strict";

var gu = document.getElementById('gu');
var choki = document.getElementById('choki');
var pa = document.getElementById('pa');
var retry = document.getElementById('retry');
var display = document.getElementById('display');
var speed = 500;

//配列　ジャンケン
var arr = ["gu","choki","pa"];
// ランダム正数
var num1 = arr[Math.floor(Math.random() * arr.length)];
var num2 = arr[Math.floor(Math.random() * arr.length)];
var flag = false;

function colorChange(){
  var element = element.getElementByClassName("hand");
  element.style.opacity = 0.9;
}



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

  //ストップ　切り替えフラグ　他のものはクリックさせない
  var num1 = "gu";
  if (flag) {
    return false;

    //自分が選択した手の色を変化
      var comHand = num2.getElementByClassName("hand");
      comhand.getElementByClassName("hand");
      colorChange()

  }
  flag = true;





  if( num2 == "gu" ){
    console.log("aiko"  + " = You draw ");
    console.log(num2 + " = computer hund");
    display.innerHTML ="You draw" ;
    // setInterval("gu.style.opacity^=0",500);
    setInterval("comGu.style.opacity^=1",500);
    setInterval("gu.style.opacity^=1",500);


  } else if (num2 == "choki" ){
    console.log("kachi" + " = You win!");
    console.log(num2 + " = computer hund");
      display.innerHTML ="You win!" ;
      // setInterval("choki.style.opacity^=0",500);
      setInterval("gu.style.opacity^=1",500);
      setInterval("comChoki.style.opacity^=1",500);

  } else if (num2 == "pa"){
    console.log("make" + " = Hey loser! ");
    console.log(num2 + " = computer hund");
      display.innerHTML ="Hey loser" ;
      // setInterval("pa.style.opacity^=0",500);
      setInterval("gu.style.opacity^=1",500);
      setInterval("comPa.style.opacity^=1",500);


  } else {
    console.log("error");
    console.log(num2);
  }
});

//player1 choki
var btn2 = document.getElementById("choki");
btn2.addEventListener("click",function(){
  // console.log("gu");
  // console.log(btn1);
  var num1 = "choki";

  if (flag) {
    return false;
  }
  flag = true;

  if( num2 == "gu" ){
    console.log("make" + " = Hey loser! ");
    console.log(num2);
    display.innerHTML ="Hey loser!" ;
    setInterval("choki.style.opacity^=1",500);
    setInterval("comGu.style.opacity^=1",500);

  } else if (num2 == "choki" ){
    console.log("aiko"  + " = You draw ");
    console.log(num2);
    display.innerHTML ="You draw" ;
    setInterval("choki.style.opacity^=1",500);
    setInterval("comChoki.style.opacity^=1",500);

  } else if (num2 == "pa"){
    console.log("kachi" + " = You win!");
    console.log(num2);
    display.innerHTML ="You win!" ;
    setInterval("choki.style.opacity^=1",500);
    setInterval("comPa.style.opacity^=1",500);

  } else {
    console.log("error");
    console.log(num2);
  }
});


//player1 pa
var btn3 = document.getElementById("pa");
btn3.addEventListener("click",function(){
  // console.log("gu");
  // console.log(btn1);
  var num1 = "pa";

  if (flag) {
    return false;
  }
  flag = true;

  if( num2 == "gu" ){
    console.log("kachi" + " = You win!");
    console.log(num2);
    display.innerHTML ="You win!" ;
    setInterval("pa.style.opacity^=1",500);
    setInterval("comGu.style.opacity^=1",500);

  } else if (num2 == "choki" ){
    console.log("make" + " = Hey loser! ");
    console.log(num2);
    display.innerHTML ="Hey loser" ;
    setInterval("pa.style.opacity^=1",500);
    setInterval("comChoki.style.opacity^=1",500);

  } else if (num2 == "pa"){
    console.log("aiko"  + " = You draw ");
    console.log(num2);
    display.innerHTML ="You draw" ;
    setInterval("pa.style.opacity^=1",500);
    setInterval("comPa.style.opacity^=1",500);

  } else {
    console.log("error");
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
