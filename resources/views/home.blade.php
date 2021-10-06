@extends('layouts.footer')
@extends('layouts.base')
@extends('layouts.navbar')

@section('content')
{{-- Landing Page --}}
<section class="landing-page" id="landing-page">
    <div class="row flex-md-row-reverse h-75">
        <div class="col-md-6 hero"></div>
        <div class="col-md-6 text-white align-self-center title-landing-page">
            <h1 class="fw-bold">Work on Big Ideas, Simply with Surveyasia</h1>
            <p class="fw-light mt-3">from the small stuff to the big picture, Surveyasia organizes your survey with
                clear terms and messages, why it matters, and how to get it done.
            </p>
            <a class="btn btn-light text-info mt-5" href="/sign-up" role="button">Try for FREE</a>
        </div>
    </div>
</section>
{{-- Ending Landing Page --}}

{{-- Intro --}}
<section class="intro py-5" id="intro">
    <div class="container">
        <h3 class="fw-bold text-center">Go beyond collecting feedbacks!</h3>
        <h4 class="fw-bold text-center">Explore other Surveyasia products that can help <br> drive change in your
            organization</h4>
        <div class="row pt-5">
            <div class="col-md-6">
                <h6 class="fw-bold">Our Advantages</h6>
                <ul>
                    <li>Make surveys easier with different types of question dan answer templates.</li>
                    <li>Get respondents easily and realiby.</li>
                    <li>Customize the chart report accordingly.</li>
                    <li>The need to download reports in various price formats.</li>
                    <li>Affordable and according to needs.</li>
                </ul>
                <a class="btn btn-orange text-light mt-5" href="/sign-up" role="button">Make the survey</a>
            </div>
            <div class="col-md-6 text-end">
                <img src="/assets/img/prof_sales.png" alt="Sales" class="img-fluid" width="320">
            </div>
        </div>
    </div>
</section>
{{-- End Intro --}}

{{-- Services --}}
<section class="services py-5" id="services">
    <div class="container">
        <h3 class="fw-bold">Our Services</h3>
        <hr>
        <div class="row flex-md-row-reverse py-5">
            <div class="col-md-6">
                <img src="assets/img/service_1.png" alt="Service 1" class="img-fluid">
            </div>
            <div class="col-md-6 align-self-center">
                <h3 class="fw-bold">Popular Templates</h3>
                <p class="mt-4">There are many variations of popular templates that will help you to be hustle free.
                    Impress from the get-go with an interface that looks beautiful on any device. Customize your survey
                    to be as unique as your brand. Or get started right away with hundreds of free templates in our
                    gallery. </p>
                <a class="btn btn-orange text-white rounded-pill px-5" href="#" role="button">Start</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="assets/img/service_2.png" alt="Service 2" class="img-fluid">
            </div>
            <div class="col-md-6 align-self-center">
                <h3 class="fw-bold">Easy to customize</h3>
                <p class="mt-4">SurveyAsia responds to previous answers to show only the most relevant questions. A
                    better experience for respondents = better data for you, presented in clear reports and metrics.
                </p>
                <a class="btn btn-orange text-white rounded-pill px-5" href="#" role="button">Start</a>
            </div>
        </div>
        <div class="row flex-md-row-reverse">
            <div class="col-md-6">
                <img src="assets/img/service_3.png" alt="Service 3" class="img-fluid">
            </div>
            <div class="col-md-6 align-self-center">
                <h3 class="fw-bold">Real-Time Monitoring</h3>
                <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam nesciunt quos
                    exercitationem, animi
                    dolores autem vel nihil dicta recusandae minima excepturi quasi earum facilis expedita veniam sunt
                    atque porro odio!</p>
                <a class="btn btn-orange text-white rounded-pill px-5" href="#" role="button">Start</a>
            </div>
        </div>
    </div>
</section>
{{-- End Services --}}

{{-- Intro 2 --}}
<section class="intro-2 py-5" id="intro-2">
    <div class="container">
        <h4 class="fw-bold text-center">Help us for our Innovation & <br> Get the Rewards</h4>
        <div class="row pt-3">
            <div class="col-md-4 text-center">
                <img src="/assets/img/intro_1.png" alt="Intro 1" class="img-fluid">
                <h6 class="fw-bold">Your answer can help</h6>
                <p>Your voice can help change the future</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="/assets/img/intro_2.png" alt="Intro 2" class="img-fluid">
                <h6 class="fw-bold">Use your free time wisely</h6>
                <p>Spend 5 - 10 minutes with us, and it won't be sorely if you do useful and fun activities</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="/assets/img/intro_3.png" alt="Intro 3" class="img-fluid">
                <h6 class="fw-bold">Many prizes await</h6>
                <p>Collect prizes from every survey you take, as many as you want!</p>
            </div>
        </div>
    </div>
</section>
{{-- End Intro 2 --}}

{{-- Survey Promo --}}
<section class="survey-promo py-5" id="survey-promo">
    <div class="container">
        <h4 class="fw-bold text-center">Get rewards by just filling out a survey <br> 5 - 10 minutes, anywhere.</h4>
        <div class="row pt-3 flex-md-row-reverse justify-content-center">
            <div class="col-md-5">
                <img src="/assets/img/survey_promo_1.png" alt="Survey Promo 1" class="img-fluid">
            </div>
            <div class="col-md-5 text-center align-self-center">
                <h3 class="fw-bold">Registration</h3>
                <p>Register and fill in some short questions <br> about you</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <img src="/assets/img/survey_promo_2.png" alt="Survey Promo 2" class="img-fluid">
            </div>
            <div class="col-md-5 text-center align-self-center">
                <h3 class="fw-bold">Answer the surveys</h3>
                <p>Answer some surveys and <br> get point</p>
            </div>
        </div>
        <div class="row flex-md-row-reverse justify-content-center">
            <div class="col-md-5">
                <img src="/assets/img/survey_promo_3.png" alt="Survey Promo 3" class="img-fluid">
            </div>
            <div class="col-md-5 text-center align-self-center">
                <h3 class="fw-bold">Get the rewards</h3>
                <p>Redeem your points for <br> get a gift</p>
            </div>
        </div>
    </div>
</section>
{{-- End Survey Promo --}}

{{-- Register Soon --}}
<section class="register-soon py-5" id="register-soon">
    <div class="container">
        <div class="text-center">
            <p class="text-white fs-3">Register now, there are interesting offers</p>
            <a class="btn btn-outline-light mt-3" href="/sign-up" role="button">Register Now!</a>
        </div>
    </div>
</section>
{{-- End Register Soon --}}
@endsection