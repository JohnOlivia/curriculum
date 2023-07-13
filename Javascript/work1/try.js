
{
  let array = [0, 1, 2, 3, 4];
  try {
    //例外エラーが発生するかもしれない処理

    for (let i = 0; i <= 5; i++) {
      console.log(array2[i]);
    }
  } catch (error) {
    //例外エラーが起きた時に実行する処理
    console.log('エラーがでた');
  }
}
