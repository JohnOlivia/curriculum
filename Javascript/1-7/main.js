//「山田」オブジェクト作成
// let yamada = { 
//   name: 'yamada',
//   height: 170,
//   weight: 60,
//   gender: "男",
//   age: 30,
// }
// //「鈴木」オブジェクト作成
// let suzuki = {
//   name: 'suzuki',
//   height: 180,
//   weight: 70,
//   gender: "男",
//   age: 35,
// }

// // Humanクラスを作成
// class Human {

//   constructor(name, age) {
//     this.name = name;
//     this.age = age;
//   }
// }
// // Humanクラスをインスタンス化して、yamadaを作成
// let yamada = new Human ('yamada' , 25);
// console.log(yamada.age)

// work 
class Taiyaki { 
  constructor(taste) {
    this.taste = taste;
  }
  inside () {
    console.log(`中身は${this.taste}です。`);
  }
}
let Taiyaki1 = new Taiyaki ('あんこ');
let Taiyaki2 = new Taiyaki ('クリーム');
let Taiyaki3 = new Taiyaki ('チーズ');


Taiyaki1.inside();
Taiyaki2.inside();
Taiyaki3.inside();

