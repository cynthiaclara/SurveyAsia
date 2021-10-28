function rolesButton() {
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

$(function () {
    $(".breadcrumb-item").on("click", function (e) {
        $(".breadcrumb-item").removeClass(
            "link-default text-decoration-underline"
        );
        $(this).addClass("link-default text-decoration-underline");
    });
});

// Primary Question
function addQuestion() {
    var container = document.getElementById("question-container");
    var myQuestion = document.getElementById("survey-question");
    container.appendChild(myQuestion.cloneNode(true));
}

function removeQuestion() {
    var myQuestion = document.getElementById("survey-question");
    myQuestion.remove();
}

function addAnswer() {
    var div = document.getElementById("answer-div");
    var myAnswer = document.getElementById("survey-answer");
    div.appendChild(myAnswer.cloneNode(true));
}

function removeAnswer() {
    var myAnswer = document.getElementById("survey-answer");
    myAnswer.remove();
}
// End Primary Question

// Additional Question
function addAdditionalQuestion() {
    var container = document.getElementById("additional-question-container");
    var myQuestion = document.getElementById("survey-additional-question");
    container.appendChild(myQuestion.cloneNode(true));
}

function removeAdditionalQuestion() {
    var myQuestion = document.getElementById("survey-additional-question");
    myQuestion.remove();
}

function addAdditionalAnswer() {
    var div = document.getElementById("additional-answer-div");
    var myAnswer = document.getElementById("survey-additional-answer");
    div.appendChild(myAnswer.cloneNode(true));
}

function removeAdditionalAnswer() {
    var myAnswer = document.getElementById("survey-additional-answer");
    myAnswer.remove();
}
// End Additional Question

function valueSlider() {
    var slider = document.getElementById("totalRespondent");
    var output = document.getElementById("valueSlider");
    output.innerHTML = slider.value; // Display the default slider value

    // Update the current slider value (each time you drag the slider handle)
    slider.oninput = function () {
        output.innerHTML = this.value;
    };
}

// Modal Pricing
$(window).load(function () {
    $("#pricingModal").modal("show");
});

$(function () {
    $("#pricingModal").modal("show");
});
