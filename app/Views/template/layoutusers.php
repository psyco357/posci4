<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
  <meta name="theme-color" content="#000000" />
  <title>Mobilekit Mobile UI Kit</title>
  <meta name="description" content="Mobilekit HTML Mobile UI Kit" />
  <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
  <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32" />
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png" />
  <link rel="stylesheet" href="/assets/css/users/bootstrap/bootstrap.min.css" />
  <link rel="stylesheet" href="/assets/css/users/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="/assets/css/users/owl-carousel/owl.theme.default.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:400,500,700&display=swap" />
  <link rel="stylesheet" href="/assets/fontawesome-free/css/all.min.css" />
  <link rel="stylesheet" href="/assets/css/users/style.css" />
  <script src="/assets/js/camera/webcam.js"></script>
  <script src="/assets/js/camera/webcam.min.js"></script>
</head>

<body style="background-color: #e9ecef">

  <?= $this->renderSection('isi'); ?>

  <!-- App Bottom Menu -->
  <div class="appBottomMenu">
    <?php foreach ($bawah as $k) : ?>
      <a href="<?= $k['link'] ?>" class="item 	<?= uri_string() ==  $k['link']  || $k['link'] == 'camerauser' ? 'active' : '' ?>  ">
        <div class="col">
          <i class="<?= $k['icon'] ?> fa-3x 	<?= uri_string() ==  $k['link'] || $k['link'] == 'camerauser' ? '' : 'text-dark' ?>"></i>
          <strong><?= $k['titlemenu'] ?></strong>
        </div>
      </a>
    <?php endforeach; ?>

  </div>
  <!-- * App Bottom Menu -->

  <!-- ///////////// Js Files ////////////////////  -->
  <!-- Jquery -->
  <script src="/assets/js/jquery.min.js"></script>
  <!-- Bootstrap-->
  <script src="/assets/js/boostrap/popper.min.js"></script>
  <script src="/assets/js/boostrap/bootstrap.bundle.min.js"></script>
  <!-- Chart JS -->
  <script src="/assets/chart/dist/chart.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
  <!-- Owl Carousel -->
  <script src="/assets/js/owl-carousel/owl.carousel.min.js"></script>
  <!-- jQuery Circle Progress -->
  <script src="/assets/js/owl-carousel/circle-progress.min.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
  <!-- Base Js File -->
  <script src="/assets/js/owl-carousel/base.js"></script>

  <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          borderWidth: 1
        }]
      }
    });
  </script>
</body>

</html>