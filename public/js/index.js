function RolesButton() {
    const researcher = document.getElementById("researcher");
    if (researcher.checked) {
        window.location.href = "/survey";
    } else if (respondent.checked) {
        window.location.href = "/upload-ktp";
    }
}
