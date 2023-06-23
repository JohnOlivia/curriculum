// //関数を定義
// function japanese() {
//   console.log('おはよう');
//   console.log('こんにちは');
//   console.log('こんばんは');
//   console.log('日本語は時間帯によって挨拶が変わります');
//   console.log('ひらがな');
//   console.log('カタカナ');
//   console.log('漢字');
//   console.log('３種類も文字があります');
// }
// //関数を呼び出す
// japanese();
// japanese();


//①関数名を適切なものに変えてください
//②仮引数を適切なものに変えてください
function createJuice(fruits) {
  //③「〇〇を受け取りました。ジュースにして返します」と出力
  console.log(fruits + 'を受け取りました。ジュースにして返します');
  //④受け取った果物にジュースという文字列を結合して、呼び出し元に返す
  let createJuice = fruits +'ジュース';
  //let を使わないと他の関数でも動いてしまうためつけよう
  return createJuice;
}
//⑤関数の実行：「みかん」を渡して、結果を受け取れるように適当な変数（orangeJuice）を用意
let orangeJuice = createJuice('みかん');
//⑥返ってきた変数を利用して「〇〇が届きました」と出力する
console.log(orangeJuice + 'が届きました');