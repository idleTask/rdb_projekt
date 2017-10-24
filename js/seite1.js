//holt alle Buttons aus dem dropdown menue, beim klick wird der buttontext im label gespeichert
var ddButtons = document.querySelectorAll('div.dropdown-menu button');
var label = document.getElementById("jahrLabel");
for (let i = 0; i < ddButtons.length; i++){
	ddButtons[i].id = i;
	ddButtons[i].onclick = function(){
		label.innerHTML = "Ausgewähltes Jahr: " + ddButtons[i].innerHTML;
	}
}