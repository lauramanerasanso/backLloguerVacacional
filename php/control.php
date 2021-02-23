$.ajax({
url: "https://api.mallorcarustic.me/usuari/sessio",
method: "POST",
xhrFields: {
withCredentials: true
},
data: {
session_id: localStorage.getItem('sessio')
},
async: false,
success: function (response) {
if (response != "OK") {
location.href = "https://admin.mallorcarustic.me";
}
}
});
