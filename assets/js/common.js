const apiURL = "http://localhost:3600/api/v1/";
const baseURL = "http://localhost/faculty/";

const notification = (type, title, message) => {
	return toastr[type](message, title);
};
