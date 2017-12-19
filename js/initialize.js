// Global variables
"use strict";
var n = document.getElementById('navigation');
var gl = document.getElementById('grid-list');

// Escape
function onkeydown(evt) {
	evt = evt || window.event;
	var isEscape = false;
	if ("key" in evt) {
		isEscape = (evt.key == "Escape" || evt.key == "Esc");
	} else {
		isEscape = (evt.keyCode == 27);
	}
	if (isEscape) {
		alert("Escape");
	}
};


// Read on page load
document.addEventListener('DOMContentLoaded', function () {
	yaSimpleScrollbar.attach(n);
});

// Toggle navigation
function toggleNavigation() {
	if (n.style.transform != "translateX(0%)") {
		n.style.transform = "translateX(0%)";
		document.getElementById('navigation-trigger').style = "height:200%;width:200%;background-color:rgba(0, 0, 0, .75);";
	} else {
		n.removeAttribute("style");
		document.getElementById('navigation-trigger').removeAttribute("style");
	}
};

// Modals
function openModal(id) {
	document.getElementById(id).classList.add('open-modal');
	var mo = document.createElement('div');
	mo.setAttribute('id', 'modal-overlay');
	mo.setAttribute('onClick', 'closeModal("' + id + '")');
	document.body.appendChild(mo);
}
function closeModal(id) {
	document.getElementById(id).classList.remove('open-modal');
	document.body.removeChild(document.getElementById('modal-overlay'));
}


/* Change view */
function toggleGrid() {
	if (gl.className == 'list')
		gl.className = 'grid';
	else
		gl.className = 'list';
};

/* Copy to clipboard */
function copyToClipbpard(copyValue, isTag) {
	var copyText = document.createElement('input');
	copyText.style.position = 'fixed';
	if (isTag === true)
		copyText.value = "<img src=\"" + copyValue + "\" alt=\"\" />";
	else
		copyText.value = copyValue;

	document.body.appendChild(copyText);
	copyText.focus();
	copyText.select();

	document.execCommand('copy');
	document.body.removeChild(copyText);
}

/* Open image */
function openPopup(url) {
	popupWindow = window.open(
		url, 'popUpWindow', 'scrollbars=1,titlebar=1,menubar=1'
	);
}

/* Filter list */
function getElements(id) {
	if (typeof id == "object") {
		return [id];
	} else {
		return document.querySelectorAll(id);
	}
};
function filterHTML(id, sel, filter) {
	var a, b, c, i, ii, iii, hit;
	a = getElements(id);
	for (i = 0; i < a.length; i++) {
		b = getElements(sel);
		for (ii = 0; ii < b.length; ii++) {
			hit = 0;
			if (b[ii].innerHTML.toUpperCase().indexOf(filter.toUpperCase()) > -1) {
				hit = 1;
			}
			c = b[ii].getElementsByTagName("*");
			for (iii = 0; iii < c.length; iii++) {
				if (c[iii].innerHTML.toUpperCase().indexOf(filter.toUpperCase()) > -1) {
					hit = 1;
				}
			}
			if (hit == 1) {
				b[ii].style.display = "";
			} else {
				b[ii].style.display = "none";
			}
		}
	}
};

// Sort table
// Pass in column int to sort after
function sortTable(n) {
	var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
	table = document.getElementById("myTable2");
	switching = true;
	// Set the sorting direction to ascending:
	dir = "asc";
	/* Make a loop that will continue until
	no switching has been done: */
	while (switching) {
		// Start by saying: no switching is done:
		switching = false;
		rows = table.getElementsByTagName("TR");
		/* Loop through all table rows (except the
		first, which contains table headers): */
		for (i = 1; i < (rows.length - 1); i++) {
			// Start by saying there should be no switching:
			shouldSwitch = false;
			/* Get the two elements you want to compare,
			one from current row and one from the next: */
			x = rows[i].getElementsByTagName("TD")[n];
			y = rows[i + 1].getElementsByTagName("TD")[n];
			/* Check if the two rows should switch place,
			based on the direction, asc or desc: */
			if (dir == "asc") {
				if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
					// If so, mark as a switch and break the loop:
					shouldSwitch = true;
					break;
				}
			} else if (dir == "desc") {
				if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
					// If so, mark as a switch and break the loop:
					shouldSwitch = true;
					break;
				}
			}
		}
		if (shouldSwitch) {
			/* If a switch has been marked, make the switch
			and mark that a switch has been done: */
			rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
			switching = true;
			// Each time a switch is done, increase this count by 1:
			switchcount++;
		} else {
			/* If no switching has been done AND the direction is "asc",
			set the direction to "desc" and run the while loop again. */
			if (switchcount == 0 && dir == "asc") {
				dir = "desc";
				switching = true;
			}
		}
	}
}

/* Image zoom https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_modal_img */
function imageZoom() {
	// Get the modal
	var modal = document.getElementById('myModal');

	// Get the image and insert it inside the modal - use its "alt" text as a caption
	var img = document.getElementById('myImg');
	var modalImg = document.getElementById("img01");
	var captionText = document.getElementById("caption");
	img.onclick = function () {
		modal.style.display = "block";
		modalImg.src = this.src;
		captionText.innerHTML = this.alt;
	}

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function () {
		modal.style.display = "none";
	}
}
