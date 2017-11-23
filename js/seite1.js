//holt alle Buttons aus dem dropdown menue, beim klick wird der buttontext zum ausgewählten jahr
var ddButtons = document.querySelectorAll('div.dropdown-menu button');
var dropdownMenu2 = document.getElementById("dropdownMenu2");
for (let i = 0; i < ddButtons.length; i++){
	ddButtons[i].id = i;
	ddButtons[i].onclick = function(){
		dropdownMenu2.innerHTML = ddButtons[i].innerHTML;
	}
}