const div = document.getElementById("form-wrapper");

function duplicateForm() {
	let forms = div.getElementsByClassName("specify-numbers-price");
	let firstForm = forms[0];
	let formClone = firstForm.cloneNode(true);
	div.appendChild(formClone);
}
