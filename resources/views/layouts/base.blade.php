<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  {{-- Google Fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  {{-- My CSS --}}
  <link rel="stylesheet" href="/css/style.css">

  {{-- Favicon --}}
  <link rel='icon' type='image/png' href='/favicon-surveyasia-32.png' />
  <link rel='shortcut icon' type='image/x-icon' href='/favicon-surveyasia-32.ico' />

  {{-- Font Awesome --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
  </script>

  {{-- Chart --}}
  <script src="https://unpkg.com/jquery"></script>
  <script src="https://unpkg.com/knockout@3.5.1/build/output/knockout-latest.js"></script>
  <script src="https://unpkg.com/survey-knockout@1.8.71/survey.ko.min.js"></script>
  <script src="https://cdn.rawgit.com/inexorabletash/polyfill/master/typedarray.js"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js"></script>
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
  <script src="https://unpkg.com/wordcloud@1.1.0/src/wordcloud2.js"></script>
  <link href="https://unpkg.com/survey-analytics@1.8.71/survey.analytics.min.css" rel="stylesheet" />
  <script src="https://unpkg.com/survey-analytics@1.8.71/survey.analytics.min.js"></script>

  <title>Surveyasia.id</title>
</head>

<body>

  @yield('content')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
  </script>
  <script src="/js/index.js"></script>
  <script src="/js/chart.js"></script>
</body>

</html>