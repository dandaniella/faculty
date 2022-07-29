$(function () {
	$("#login_id").on("submit", function (e) {
		e.preventDefault();

		if ($("#login_id").parsley().validate()) {
			if ($("#user_email").val() === "admin@pup") {
				localStorage.setItem("TOKEN", "121212");
				let session_data = "";
				session_data += "token=" + "121212";
				session_data += "&user_name=" + "Admin";
				session_data += "&user_email=" + $("#user_email").val();
				window.location.replace(baseURL + "Access/oAuth?" + session_data);
			} else if ($("#user_email").val() === "checker@pup") {
				localStorage.setItem("TOKEN", "121212");
				let session_data = "";
				session_data += "token=" + "121212";
				session_data += "&user_name=" + "Checker";
				session_data += "&user_email=" + $("#user_email").val();
				window.location.replace(baseURL + "Access/oAuth?" + session_data);
			} else if ($("#user_email").val() === "acad.head@pup") {
				localStorage.setItem("TOKEN", "121212");
				let session_data = "";
				session_data += "token=" + "121212";
				session_data += "&user_name=" + "Academic Head";
				session_data += "&user_email=" + $("#user_email").val();
				window.location.replace(baseURL + "Access/oAuth?" + session_data);
			} else if ($("#user_email").val() === "faculty@pup") {
				localStorage.setItem("TOKEN", "121212");
				let session_data = "";
				session_data += "token=" + "121212";
				session_data += "&user_name=" + "Faculty";
				session_data += "&user_email=" + $("#user_email").val();
				window.location.replace(baseURL + "Access/oAuth?" + session_data);
			}
		}
	});
});
