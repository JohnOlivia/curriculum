"use strict";
//宣言
{
  let randomNum;
  let interval;

  //jQuery
  $(function () {
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
      // // 変数randomNumにランダムでarreyの値を入れる。
      // randomNum = Math.floor(Math.random() * array.length) + 1;
      // $("td").removeClass("target");
      // //randomNumだと0~15の値しか反応しないため＋１を追加する
      // $("#td" + randomNum).addClass("target");

      // .stayクラスを持つtd要素を除外して処理をスキップ
      let removeTd = $("td:not(.stay)");

      // availableTdからランダムなtdを選択して処理を実行
      randomNum = Math.floor(Math.random() * removeTd.length);
      let randomTd = removeTd.eq(randomNum);

      $("td").removeClass("target");
      randomTd.addClass("target");
    }

    //ストップボタンを押すと発生
    function stop_btn() {
      clearInterval(interval);

      $(".target").addClass("stop");
      $("#start, #reset").prop("disabled", false);
      $("#stop").prop("disabled", true);

      //すべてのtd要素に色がついたらスタートボタンとストップボタンを押せない仕様にした
      if ($("td.stay").length === $("td").length) {
        $("#stop, #start").prop("disabled", true);
      }
    }

    // //背景色を消す
    function reset_btn() {
      clearInterval(interval);
      $("td").removeClass();
      $("#start").prop("disabled", false);
      $("#reset, #stop").prop("disabled", true);
    }
  });
}
