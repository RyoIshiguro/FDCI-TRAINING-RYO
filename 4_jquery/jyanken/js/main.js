"use strict";

//player hund
var gu = document.getElementById('gu');
var choki = document.getElementById('choki');
var pa = document.getElementById('pa');

//computer hund
var comgu = document.getElementById('comGu');
var comchoki = document.getElementById('comChoki');
var compa = document.getElementById('compa');

// retry
var retry = document.getElementById('retry');

//insert sentence
var display = document.getElementById('display');


//配列　ジャンケン player
var arr = ["gu","choki","pa"];
//配列　ジャンケン Computer
var arr2 = ["comGu","comChoki","comPa"];

// ランダム正数 player
var num1 = arr[Math.floor(Math.random() * arr.length)];
// ランダム正数 computer
// var num2 = arr[Math.floor(Math.random() * arr.length)];
// ランダム正数 computer リファクタリング用
var num2 = arr2[Math.floor(Math.random() * arr.length)];

// flag reject
var flag = false;
// flag judge draw
var isDraw = false;





function setAnimation(player, computer) {

setInterval(player.concat(".style.opacity^=1"),500);
setInterval(computer.concat(".style.opacity^=1"),500);
}

function clear(){
  clearInterval();
  return
  // gu.style.opacity=1;
  // comGu.style.opacity=1;
  // setTimeout('countSecond()',2000);
}



//player1 gu
var btn1 = gu;
btn1.addEventListener("click",function(){
  // console.log("gu");
  // console.log(btn1);


  var num1 = "gu";

//ストップ　切り替えフラグ　他のものはクリックさせない
  if (flag && !isDraw) {
    clear(gu,comGu);
    // setTimeout('countSecond()',1000);
    return false;

  }
  flag = true;

// Hands patterns
  if( num2 == "comGu" ){
    console.log("aiko"  + " = You draw ");
    console.log(num2 + " = computer hund");
    display.innerHTML ="You draw select again" ;
    isDraw = true;
    // setInterval("gu.style.opacity^=0",500);
    // setInterval("comGu.style.opacity^=1",500);
    // setInterval("gu.style.opacity^=1",500);
    setAnimation("gu", "comGu");


  } else if (num2 == "comChoki" ){
    console.log("kachi" + " = You win!");
    console.log(num2 + " = computer hund");
      display.innerHTML ="You win!" ;
      isDraw = false;
      // setInterval("choki.style.opacity^=0",500);
      // setInterval("gu.style.opacity^=1",500);
      // setInterval("comChoki.style.opacity^=1",500);
      setAnimation("gu", "comChoki");


  } else if (num2 == "comPa"){
    console.log("make" + " = Hey loser! ");
    console.log(num2 + " = computer hund");
      display.innerHTML ="Hey loser" ;
      isDraw = false;
      // setInterval("pa.style.opacity^=0",500);
      // setInterval("gu.style.opacity^=1",500);
      // setInterval("comPa.style.opacity^=1",500);
      setAnimation("gu", "comPa");


  } else {
    console.log("error");
    console.log(num2);
  } clear(gu,comGu);
});



//player1 choki
var btn2 = choki;
btn2.addEventListener("click",function(){
  // console.log("gu");
  // console.log(btn1);
  var num1 = "choki";

  if (flag && !isDraw) {
    clear(num1,num2);
    return false;
  }
  flag = true;

  if( num2 == "comGu" ){
    console.log("make" + " = Hey loser! ");
    console.log(num2);
    display.innerHTML ="Hey loser!" ;
    isDraw = false;
    // setInterval("choki.style.opacity^=1",500);
    // setInterval("comGu.style.opacity^=1",500);
    setAnimation("choki", "comGu");


  } else if (num2 == "comChoki" ){
    console.log("aiko"  + " = You draw ");
    console.log(num2);
    display.innerHTML ="You draw select again" ;
    isDraw = true;
    // setInterval("choki.style.opacity^=1",500);
    // setInterval("comChoki.style.opacity^=1",500);
    setAnimation("choki", "comChoki");


  } else if (num2 == "comPa"){
    console.log("kachi" + " = You win!");
    console.log(num2);
    display.innerHTML ="You win!" ;
    isDraw = false;
    // setInterval("choki.style.opacity^=1",500);
    // setInterval("comPa.style.opacity^=1",500);
    setAnimation("choki", "comPa");


  } else {
    console.log("error");
    console.log(num2);
  }
});





//player1 pa
var btn3 = pa;
btn3.addEventListener("click",function(){
  // console.log("gu");
  // console.log(btn1);
  var num1 = "pa";

  if (flag && !isDraw) {
    clear(num1,num2);
    return false;
  }
  flag = true;

  if( num2 == "comGu" ){
    console.log("kachi" + " = You win!");
    console.log(num2);
    display.innerHTML ="You win!" ;
    isDraw = false;
    // setInterval("pa.style.opacity^=1",500);
    // setInterval("comGu.style.opacity^=1",500);
    setAnimation("pa", "comGu");


  } else if (num2 == "comChoki" ){
    console.log("make" + " = Hey loser! ");
    console.log(num2);
    display.innerHTML ="Hey loser" ;
    isDraw = false;
    // setInterval("pa.style.opacity^=1",500);
    // setInterval("comChoki.style.opacity^=1",500);
    setAnimation("pa", "comChoki");


  } else if (num2 == "comPa"){
    console.log("aiko"  + " = You draw ");
    console.log(num2);
    display.innerHTML ="You draw select again" ;
    isDraw = true;
    // setInterval("pa.style.opacity^=1",500);
    // setInterval("comPa.style.opacity^=1",500);
    setAnimation("pa", "comPa");


  } else {
    console.log("error");
    console.log(num2);
  }
});


var btn_retry = document.getElementById('retry');
btn_retry.addEventListener("click",function(){


  /*リロード*/
  location.reload();



});
