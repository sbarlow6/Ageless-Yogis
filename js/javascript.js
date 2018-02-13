counter2 = 0;
counter1 = 0;
counter0 = 0;
function dropdown(num) {
	if (num == 0) {
		if (counter0 == 0) {
			var elem = document.getElementById("dropdown0");
			elem.style.height = "auto";
			elem.style.height = "initial";
			counter0 = 1;
		} else if (counter0 == 1) {
			var elem = document.getElementById("dropdown0");
			elem.style.height = "0px";
			counter0 = 0;
		}
		

	}else if (num == 1) {
		if (counter1 == 0) {
			var elem = document.getElementById("dropdown1");
			elem.style.height = "auto";
			elem.style.height = "initial";
			counter1 = 1;
		} else if (counter1 == 1) {
			var elem = document.getElementById("dropdown1");
			elem.style.height = "0px";
			counter1 = 0;
		}
		

	}else if (num == 2) {
		if (counter2 == 0) {
			var elem = document.getElementById("dropdown2");
			elem.style.height = "auto";
			elem.style.height = "initial";
			counter2 = 1;
		} else if (counter2 == 1) {
			var elem = document.getElementById("dropdown2");
			elem.style.height = "0px";
			counter2 = 0;
		}
		

	}
	
}