// let human = {
//   name:'Yamada',
//   height:170,
//   weight:60,
//   gender:'男',
//   age:30,
// };

// console.log(human.name);
// console.log(human['name']);

// Work
let scores = [10,15,20, 25];
for (let i = 0; i < scores.length ; i++){
  if (scores[i] % 2 === 0){
    console.log(scores[i]+'は偶数です。');
  } 
}

let car = {
  gass: 20.5,
  num: 1234,
}
console.log(car);
console.log('ガソリンは' + car.gass + 'です。');
console.log('ナンバーは' + car.num + 'です。');
