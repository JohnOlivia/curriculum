//問１
let numbers = [2, 5, 12, 13, 15, 18, 22];
//ここに答えを実装してください。↓↓↓
function isEven() {
    //繰り返すためにfor文を使ッタ
    for(let i = 0; i < numbers.length; i++) {
        //偶数か調べる際にif文を使った
        let num = numbers[i];
        if (numbers[i] % 2 === 0) {
            console.log(num + 'は偶数です');
        } 
    }
}

//関数を呼び出した
isEven();



// 問２
//Carクラスを設定
class Car {
    //コンストラクタ
    constructor(gas,number) {
        this.gas = gas;
        this.number = number;
    }
    //関数
    getNumGas () {
        console.log(`ガソリンは${this.gas}です。ナンバーは${this.number}です`);
    }

}
let info = new Car('Regular', 1417);
info.getNumGas();
