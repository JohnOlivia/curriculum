{
  function func (num) {
    if (num > 20) {

      const error = new Error('エラーが発生しました。');
      // throw文を実行
      throw error;
    } else {
      console.log(num);
    }
  }
  func(30);

}

// {

//   const num = 100;
//   function tryFunc() {
//     try {
//       num = num + 1;
//       // console.log(num);
//     } catch (error) {
//       console.error(error);
//       return;
//     } finally {
//       //正常でもエラーでもじっこうしたいしょりを書く場所。なければ書かなくてもいい
//       console.log('ファイナリーのコンソールです');
//     }

//     //trycatchでエラーになっても後続の処理は実行される
//     //catch内でreturnがあったときは後続の処理は実行されない
//     console.log('関数のコンソールです')
//   }
//   tryFunc();
// }
