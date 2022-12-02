// function hamDropdown() {
//   var element = document.getElementById("money");
//   element.classList.toggle("hien");
// }
function drop_menu() {
  var element = document.getElementById("login");
  element.classList.toggle("hien-login");
}

function drop_info_user () {
  var element = document.getElementById("noi_dung_info");
  element.classList.toggle("hien_noi_dung_info");
}

const money = document.getElementById('money'); // nút nhấn
const content_money = document.getElementById('content_money'); // phần tử hiển thị
// const body = document.getElementsByTagName('body')[0];
money.addEventListener('click', function(e) {
  content_money.classList.toggle('hien');
});

// window.addEventListener('click', (e)=>{
//   if (content_money.contains(e.target) == false) {
//     content_money.classList.remove('hien');
//   }
// });

// money.addEventListener('click', function() {
//   content_money.classList.remove('hien');
// })