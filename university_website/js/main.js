// menu 아이콘 클릭시 일어나는 이벤트 (javascript for toggle menu)

let navlinks = document.getElementById("navlinks");

function showMenu() {
  navlinks.style.right = "0";
}

function hideMenu() {
  navlinks.style.right = "-200px";
}