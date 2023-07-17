// {
//   try {
//     throw new ReferenceError("hallo", "some.js", 7);

//   } catch (e) {
//     console.log(e.name);
//   } finally {
//     console.log("エラーで表示されませんでした。");
//   }
// }
// {
//   try {
//     throw new SyntaxError("hallo", "some.js", 7);
//   } catch (e) {
//     console.log(e.name);
//   } finally {
//     console.log("エラーで表示されませんでした。");
//   }
// }
// {
//   try {
//     throw new TypeError("hallo", "some.js", 7);
//   } catch (e) {
//     console.log(e.name);
//   } finally {
//     console.log("エラーで表示されませんでした。");
//   }
// }

{
  try {
    throw new SyntaxError();
  } catch (e) {
    if (e instanceof ReferenceError) {
      console.log("ReferenceError: 指定した変数・関数は存在しません。");
    } else if (e instanceof SyntaxError) {
      console.log("SyntaxError: 構文間違いです。");
    } else if (e instanceof TypeError) {
      console.log("TypeError: タイプエラーです。");
    }
    
  } finally {
    console.log("エラーで表示されませんでした。");
  }
}

// <
// throw new SyntaxError();この部分でエラーのないようを投げる
// if文でオブジェクトがどのエラータイプなのかチェックする
// 投げたエラーとタイプが一致したらコンソールでエラー内容とエラー文を表示する
// finallyで絶対にコンソールで表示させたい文を書く
// ＞
