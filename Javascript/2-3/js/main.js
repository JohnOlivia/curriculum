let box = document.getElementById('box');
let btn = document.getElementById('btn');

btn.addEventListener('click',  function() {
  box.style.backgroundColor = 'red';
}, false);

btn.addEventListener = ('click', function() {
  alert('ボタンがクリックされました');
}, false); 
