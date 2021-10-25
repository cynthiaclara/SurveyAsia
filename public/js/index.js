function RolesButton() {
    const researcher = document.getElementById("researcher");
    if (researcher.checked) {
        window.location.href = "/register";
    } else if (respondent.checked) {
        window.location.href = "/validate";
    }
}

function addressChecked() {
    if ($(".address-id-card").is(":checked")) $(".current-address").hide();
    else $(".current-address").show();
}

$(function () {
    $(".nav-link").on("click", function (e) {
        $(".nav-link").removeClass("active");
        $(this).addClass("active");
    });
});

$(function () {
    $(".link-pricing").on("click", function (e) {
        $(".link-pricing").removeClass("link-orange text-decoration-underline");
        $(this).addClass("link-orange text-decoration-underline");
    });
});

$(function () {
    $(".link-question").on("click", function (e) {
        $(".link-question").removeClass(
            "link-default text-decoration-underline"
        );
        $(this).addClass("link-default text-decoration-underline");
    });
});

// $(function () {
//     $(".breadcrumb-item").on("click", function (e) {
//         $(".breadcrumb-item").removeClass(
//             "link-dark text-decoration-underline"
//         );
//         $(this).addClass("link-dark text-decoration-underline");
//     });
// });
