"use strict";
//宣言
let array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16];
// console.log(array);
let randomNum;
let interval;

// const start = document.querySelector("#start");
// const stop = document.querySelector("#stop");
// const reset = document.querySelector("#reset");

//jQuery
$(function () {
  let coloredCount = 0;
  // $("#start").click(start_btn);
  $("#start").on("click", start_btn);
  $("#stop").on("click", stop_btn);
  $("#reset").on("click", reset_btn);

  //スタートボタンを押すと発生
  function start_btn() {
    interval = setInterval(roulette, 50);
    $(".stop").addClass("stay").remove("stop");
    //ボタンを押したり、押せなかったり
    $("#start").prop("disabled", true);
    $("#stop").prop("disabled", false);
  }
  //ルーレットの動き
  function roulette() {
    randomNum = Math.floor(Math.random() * array.length);
    $("td").removeClass("target");
    //randomNumだと0~15の値しか反応しないため＋１を追加する
    $("#td" + (randomNum + 1)).addClass("target");

  }
  //ストップボタンを押すと発生
  function stop_btn() {
    clearInterval(interval);
    $(".target").addClass("stop");
    // array.splice(randomNum, 1);

    $("#start, #reset").prop("disabled", false);
    $("#stop").prop("disabled", true);
    if (array.length === 0) {
      $("#start").prop("disabled", false);
    }
  }
  // //背景色を消す
  function reset_btn() {
    clearInterval(interval);
    $("td").removeClass();
    $("#start").prop("disabled", false);
    $("#reset, #stop").prop("disabled", true);

    array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16];
  }
});
