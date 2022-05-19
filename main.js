// 円グラフ参考URL"https://ferret-plus.com/5884"

// console.log(nextarray);

// 多次元配列から重複データを消去
// let new_array = [...new Set(nextarray.map(JSON.stringify))].map(JSON.parse);

// console.log(new_array);

let count_array = [0, 0, 0, 0, 0, 0, 0];
// dataが保存されるたびに配列に入っていく
for (let i = 0; i < array.length; i++) {
  console.log(array[i]);
  count_array[0] += array[i].filter(element => element == '肉').length;
  count_array[1] += array[i].filter(element => element == '魚').length;
  count_array[2] += array[i].filter(element => element == 'パン').length;
  count_array[3] += array[i].filter(element => element == '麺類').length;
  count_array[4] += array[i].filter(element => element == 'ファーストフード').length;
  count_array[5] += array[i].filter(element => element == '-').length;
  count_array[6] += array[i].filter(element => element == 'その他').length;
  // const  = new_array[i][3];
}
console.log(count_array);

// 最も食べたものを判定
if (count_array[0] == Math.max(...count_array)) {
  $('#morefoods').text('肉')
  $('#comment').text('「もっと野菜をたべなさい‼︎」')
} else if (count_array[1] == Math.max(...count_array)) {
  $('#morefoods').text('魚')
  $('#comment').text('「あなたの骨は誰よりも強い‼︎自信をもって」')
} else if (count_array[2] == Math.max(...count_array)) {
  $('#morefoods').text('パン')
  $('#comment').text('「小麦の奴隷め」')
} else if (count_array[3] == Math.max(...count_array)) {
  $('#morefoods').text('麺類')
  $('#comment').text('「福岡に住んでる方の思考は、麺類＝ラーメンだお。異論は認めない」')
} else if (count_array[4] == Math.max(...count_array)) {
  $('#morefoods').text('ファーストフード')
  $('#comment').text('「怠惰で醜い生き物め」')
} else if (count_array[5] == Math.max(...count_array)) {
  $('#morefoods').text('-')
  $('#comment').text('「あなたの今の体の機能は20%も機能していないだろう、、、」')
} else if (count_array[6] == Math.max(...count_array)) {
  $('#morefoods').text('その他')
  $('#comment').text('「もっとメジャーなものを食べて生きようよ」')
};

// console.log(array);

// チャート設定
const ctx = document.querySelector('#mycanvas').getContext('2d')
const myChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["肉", "魚", "パン", "麺類", "ファーストフード","-","その他"],
    datasets: [{
      data: [
        count_array[0],
        count_array[1],
        count_array[2],
        count_array[3],
        count_array[4],
        count_array[5],
        count_array[6]
      ],
      backgroundColor: [
        '#cc3366', '#0066ff', '#ff9900', '#33cc99', '#9900cc', '', '#33ffcc',
      ]
    }]
  },
  options: {
    responsive: false,
  } 
});



// console.log(nextarray);

// const filteredAraay = array.filter(i => {
//   if (!this[i[1]]) {
//     return this[i[1]] = true;
//   }
// });



/* const result_array = array.replace('<tr><td>', '');
// arrayの文字列を綺麗に
while (result_array !== array) {
  array = array.replace('<tr><td>', '');
} */

// console.log(result_array);