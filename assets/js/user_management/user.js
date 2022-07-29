$(function () {
	$("#profile_pic").change(function () {
		readURL(this);
	});

	let html = document.getElementById("add_educ").innerHTML;
	$("#cards").innerHTML = html;

	//Initialize Select2 Elements
	$(".select2").select2({
		// theme: "bootstrap4",
		dropdownParent: $("#exampleModalScrollable"),
	});

	$("#form_addUser_id").on("submit", function (e) {
		e.preventDefault();

		if ($("#form_addUser_id;").parsley().validate()) {
			//no validate
			// $.ajax({
			// 	url: apiURL + "login",
			// 	type: "POST",
			// 	data: {
			// 		user_email: $("#user_email").val(),
			// 		user_password: $("#user_password").val(),
			// 	},
			// 	dataType: "json",
			// 	success: function (data) {
			// 		console.log(data);
			// 		localStorage.setItem("TOKEN", data.token);
			// 		// save session data in php
			// 		let session_data = "";
			// 		session_data += "token=" + data.token;
			// 		session_data += "&user_name=" + data.data.user_name;
			// 		session_data += "&user_email=" + data.data.user_email;
			// 		session_data += "&user_type=" + data.data.user_type;
			// 		window.location.replace(baseURL + "Access/oAuth?" + session_data);
			// 	},
			// 	error: function ({ responseJSON }) {
			// 		console.log(responseJSON);
			// 		notification("error", " ", responseJSON.message.join());
			// 	},
			// });
			alert("hello");
		}
	});
});

function readURL(input) {
	var url = input.value;
	var ext = url.substring(url.lastIndexOf(".") + 1).toLowerCase();
	if (
		input.files &&
		input.files[0] &&
		(ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")
	) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$("#photo_path_placeholder").attr("src", e.target.result);
		};
		reader.readAsDataURL(input.files[0]);
	} else {
		//$("#img").attr("src", "/assets/no_preview.png");
	}
}

// const div = document.getElementById("form-wrapper");

// function duplicateForm() {
// 	let forms = div.getElementsByClassName("specify-numbers-price");
// 	let firstForm = forms[0];
// 	let formClone = firstForm.cloneNode(true);
// 	div.appendChild(formClone);
// }
