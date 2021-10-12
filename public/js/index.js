function RolesButton() {
    const researcher = document.getElementById("researcher");
    if (researcher.checked) {
        window.location.href = "/register";
    } else if (respondent.checked) {
        window.location.href = "/upload-ktp";
    } else {
        window.location.href = "/pilih";
    }
}
