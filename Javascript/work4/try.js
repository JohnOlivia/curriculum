{
  console.log('A') ;
  const getText = (message, time) => {
    return new Promise( (resolve) => {
      setTimeout( () => {
        console.log(message);
        resolve ()
      }, time)
    })
  }
  async function executeText() {
    await getText('B', 3000)
    await getText('C', 5000)
  }
  executeText();
          // setTimeout(function (){
          //   console.log('B');
          // }, 3000);
        
        // console.log('C');
}

/*
コンソールでAを出してから

3秒後にBを出して

await 最後にC出したい(Bが終わるまではCは絶対に表示しない)
*/


// setTimeout(() => {
//   console.log('あなた:掃除が完了しました！');
// }, 10000)
// const cook = (message, time) => {
//   return new Promise((resolve) => {
//     setTimeout(() => {
//       console.log(message);
//       resolve()
//     }, time)
//   })
// }
// async function executeCooking() {
//   await cook('娘:肉を切り終えた', 4000)
//   await cook('父:肉を炒めた', 3000)
//   await cook('娘:肉に塩胡椒を振った', 1000)
//   await cook('父:肉をお皿に盛った', 2000)
// }
// executeCooking();
