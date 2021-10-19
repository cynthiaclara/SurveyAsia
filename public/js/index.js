function RolesButton() {
    const researcher = document.getElementById("researcher");
    if (researcher.checked) {
        window.location.href = "/researcher/dashboard";
    } else if (respondent.checked) {
        window.location.href = "/upload-ktp";
    }
}
