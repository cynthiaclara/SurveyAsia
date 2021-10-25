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
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chart.piecelabel.js/0.15.0/Chart.PieceLabel.min.js"
    integrity="sha512-pLEKa6g1uR205lfWRPuxwUa/aw1Yge1jOCvYr5WCL68gh3FoLi0eqMsIEtCvIXgZY0LwiRoMgiTfrpX7pK1HFA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-doughnutlabel/2.0.3/chartjs-plugin-doughnutlabel.min.js"
    integrity="sha512-bUT48RorCgRb7/kCkXnpNFwDr/xKF0o1vIFI9Y5NGYZ4uZCZBZTI4p6SygRqLkxxRsDSG4BEc7HNq8FOxeGEbA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0/chartjs-plugin-datalabels.min.js"
    integrity="sha512-R/QOHLpV1Ggq22vfDAWYOaMd5RopHrJNMxi8/lJu8Oihwi4Ho4BRFeiMiCefn9rasajKjnx9/fTQ/xkWnkDACg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.8/angular.js"></script>
  <script src="https://cdn.jsdelivr.net/angular.chartjs/latest/angular-chart.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    window.jQuery || document.write(decodeURIComponent('%3Cscript src="js/jquery.min.js"%3E%3C/script%3E'))
  </script>
  <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/21.1.6/css/dx.common.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn3.devexpress.com/jslib/21.1.6/css/dx.light.css" />
  <script src="https://cdn3.devexpress.com/jslib/21.1.6/js/dx.all.js"></script>
  <link rel="stylesheet" type="text/css" href="styles.css" />
  <script src="index.js"></script>
  <script src="data.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-tag-cloud.min.js"></script>

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