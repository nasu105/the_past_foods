// 参考URL"https://ferret-plus.com/5884"
// サンプルデータ
const ctx = document.querySelector('#mycanvas').getContext('2d')
const myChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["肉", "魚", "パン", "麺類", "ファーストフード","-","その他"],
    datasets: [{
      data: [60, 20, 15, 10, 5, 5, 5]
    }]
  },
  options: {
    responsive: false,
  } 
});

console.log(array);
const test_array = [1, 2, 3, 4];
console.log(test_array);
let daytime = araay[0];
console.log(daytime3);
/* const result_array = array.replace('<tr><td>', '');
// arrayの文字列を綺麗に
while (result_array !== array) {
  array = array.replace('<tr><td>', '');
} */

// console.log(result_array);