

  var firstNumber = document.getElementById('firstNumber');
  var secondNumber = document.getElementById('secondNumber');
  var btn = document.getElementsByClassName("btn");
  var box = document.getElementsByClassName("box");
  var resultform = document.getElementById('resultform');


function caluculate(operation){

  // firstNumber.value = addEventListener("click",function(){
    var num1 = firstNumber.value;

  // secondNumber.value = addEventListener("click",function(){
    var num2 = secondNumber.value;

var result = 0;

switch(operation){

  case 'add':
     operation = "+";
     result = Number(num1) + Number(num2);
     break;

   case 'sub':
     operation = "-";
     result = Number(num1) - Number(num2);
     break;

   case 'sum':
    operation = "*";
    result = Number(num1) * Number(num2);
     break;

   case 'div':
   operation = "/";
   result = Number(num1) / Number(num2);
     break;

 }

// resultform.value.document.getElementById("")

// console.log(result)

resultform.value = result;

};





























// <!-- Multiply 掛け算＊ -->
// <!-- Divide 余り/　 -->
// <!-- Add　足し算 -->
// <!-- Subtract引き算 -->

  // <!-- const name = document.getElementById('id name') -->

// let kake = document.getElementById('Multiply');
// kake.addEventListener('click',function(e){
//   e.preventDefault();
//   var box1 = document.getElementById('firstNumber').value;
//   var resultform = document.getElementById('resultform');
//   resultform.value = box1;
// });

// ↑ボックス１を結果に出力


// let kake = document.getElementById('Multiply');
// let amari = document.getElementById('Divide');
// let tashi = document.getElementById('Add');
// let hiki = document.getElementById('Subtract');
// let firstNumber = document.getElementById('firstNumber')
// let secondNumber = document.getElementById('secondNumber')
// let resultform = document.getElementById('resultform');
// let button = document.getElementByClassName('button');
//
//
//
//
// function button('click'){
//   var firstNumber  = document.getElementById( "firstNumber" ).value ;
//   var secondNumber  = document.getElementById( "secondNumber" ).value ;
//
//
//
// }
























  // let resultform = document.getElementById('resultform');


  // value = box1 + "*" + box2 + "=" + sum;



// var resultform = document.getElementById('resultform').value = box1 + "*" + box2 + "=" + mul;






























//
// function isNumber(formvalue){
//   var regex = new RegExp(/^[-+]?[0-9]+(\.[0-9]+)?$/);
//   return regex.test(val);
// }



// function NaN_check1(formvalue){
// //var wstr = str.value;
// //if(isNaN(wstr)){
// alert("数字以外入力不可");
// }

 // firstNumber.addEventListener("keyup", function(event){
 //  var firstNumberbox = event.keyup;
 //
 //  NaN_check1(firstNumberbox);
 // });

 // secondNumber.addEventListener("keyup", function(event){
 //  var secondNumberbox = event.keyup;
 //
 //
 //   NaN_check1(secondNumberbox);
 // });


//leaveOnlyNumber(event);});

//function leaveOnlyNumber(e){

  //alert("rio");
  // 数字以外の不要な文字を削除
//  var st = String.fromCharCode(e.which);
  //if ("0123456789".indexOf(st,0) < 0) { return false; }
//  return true;
//});


// tashi.addEventListener('click',function(e){
//   e.preventDefault();
//
//   let box1 = document.getElementById('firstNumber').value;
//   let box2 = document.getElementById('secondNumber').value;
//
// NaN_check1(box1);
//
//
//
//   let sum = parseFloat(box1,10) + parseFloat(box2,10);
//
//   var resultform = document.getElementById('resultform');
//
//   var reultvalue = box1 + "+" + box2 + "=" + sum;
//
//
//
//   resultform.value = reultvalue;
//
//
//
//
//   resultform.value = sum;
//
// });


// hiki.addEventListener('click',function(e){
//   e.preventDefault();
//
//   let box1 = document.getElementById('firstNumber').value;
//   let box2 = document.getElementById('secondNumber').value;
//
//   let sub = parseFloat(box1,10) - parseFloat(box2,10);
//
//   var resultform = document.getElementById('resultform').value = box1 + "-" + box2 + "=" + sub;
//
//
//
//   resultform.value = sub;
//
// });


// amari.addEventListener('click',function(e){
//   e.preventDefault();
//
//   let box1 = document.getElementById('firstNumber').value;
//   let box2 = document.getElementById('secondNumber').value;
//
//   let divide = parseFloat(box1,10) / parseFloat(box2,10);
//
//   var resultform = document.getElementById('resultform').value = box1 + "/" + box2 + "=" + divide;
//
//
//   resultform.value = divide;
//
// });
//
//
// kake.addEventListener('click',function(e){
//   e.preventDefault();
//
//   let box1 = document.getElementById('firstNumber').value;
//   let box2 = document.getElementById('secondNumber').value;
//
//   let mul = parseFloat(box1,10) * parseFloat(box2,10);
//
//   var resultform = document.getElementById('resultform').value = box1 + "*" + box2 + "=" + mul;
//
//
//   resultform.value = mul;
//
// });


//   let sum = box1 + box2;
//
//   var resultform = document.getElementById('resultform')
//   resultform.value = box1 + box2;
//
//   var resultform = document.getElementById('resultform');
//   resultform.value = sum;
// });
