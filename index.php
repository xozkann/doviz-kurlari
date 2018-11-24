<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Güncel döviz kurları.">
    <meta name="author" content="Buğra Özkan">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Döviz Kurları</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/album/album.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">Döviz Kurları</h4>
              <p class="text-muted">Ücretsiz PHP <i>Döviz Kurları</i> sistemi.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Sosyal Medya</h4>
              <ul class="list-unstyled">
                <li><a href="https://instagram.com/xchazzers" class="text-white"><i class="fab fa-instagram"></i></a> <a href="https://facebook.com/CzDakota" class="text-white">xchazzers</a></li>
                <li><a href="https://facebook.com/CzDakota" class="text-white"><i class="fab fa-facebook"></i></a> <a href="https://facebook.com/CzDakota" class="text-white">CzDakota</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <i class="fas fa-hand-holding-usd"></i>
            <strong>Döviz Kurları</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Döviz Kurları</h1>
          <p class="lead text-muted">Ücretsiz PHP <i>Döviz Kurları</i> sistemi.</p>
          <p>
            <a href="https://bugraozkan.com.tr/blog" class="btn btn-primary my-2">Blog'a Gözat</a>
            <a href="https://bugraozkan.com.tr/iletisim" class="btn btn-secondary my-2">İletişime Geç</a>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
        <?php include 'doviz.php'; ?>
          <h2>TCMB Kurlar</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th></th>
                  <th></th>
                  <th>Birim</th>
                  <th>Alış</th>
                  <th>Satış</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td><?php echo $usd_isim; ?> / TRY</td>
                  <td><?php echo $usd_deger; ?></td>
                  <td><?php echo $usd_alis; ?></td>
                  <td><?php echo $usd_satis; ?></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><?php echo $aud_isim; ?> / TRY</td>
                  <td><?php echo $aud_deger; ?></td>
                  <td><?php echo $aud_alis; ?></td>
                  <td><?php echo $aud_satis; ?></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><?php echo $dkk_isim; ?> / TRY</td>
                  <td><?php echo $dkk_deger; ?></td>
                  <td><?php echo $dkk_alis; ?></td>
                  <td><?php echo $dkk_satis; ?></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td><?php echo $eur_isim; ?> / TRY</td>
                  <td><?php echo $eur_deger; ?></td>
                  <td><?php echo $eur_alis; ?></td>
                  <td><?php echo $eur_satis; ?></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td><?php echo $gbp_isim; ?> / TRY</td>
                  <td><?php echo $gbp_deger; ?></td>
                  <td><?php echo $gbp_alis; ?></td>
                  <td><?php echo $gbp_satis; ?></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td><?php echo $chf_isim; ?> / TRY</td>
                  <td><?php echo $chf_deger; ?></td>
                  <td><?php echo $chf_alis; ?></td>
                  <td><?php echo $chf_satis; ?></td>
                </tr>
                <tr>
                  <td>7</td>
                  <td><?php echo $sek_isim; ?> / TRY</td>
                  <td><?php echo $sek_deger; ?></td>
                  <td><?php echo $sek_alis; ?></td>
                  <td><?php echo $sek_satis; ?></td>
                </tr>
                <tr>
                  <td>8</td>
                  <td><?php echo $cad_isim; ?> / TRY</td>
                  <td><?php echo $cad_deger; ?></td>
                  <td><?php echo $cad_alis; ?></td>
                  <td><?php echo $cad_satis; ?></td>
                </tr>
                <tr>
                  <td>9</td>
                  <td><?php echo $kwd_isim; ?> / TRY</td>
                  <td><?php echo $kwd_deger; ?></td>
                  <td><?php echo $kwd_alis; ?></td>
                  <td><?php echo $kwd_satis; ?></td>
                </tr>
                <tr>
                  <td>10</td>
                  <td><?php echo $nok_isim; ?> / TRY</td>
                  <td><?php echo $nok_deger; ?></td>
                  <td><?php echo $nok_alis; ?></td>
                  <td><?php echo $nok_satis; ?></td>
                </tr>
                <tr>
                  <td>11</td>
                  <td><?php echo $sar_isim; ?> / TRY</td>
                  <td><?php echo $sar_deger; ?></td>
                  <td><?php echo $sar_alis; ?></td>
                  <td><?php echo $sar_satis; ?></td>
                </tr>
                <tr>
                  <td>12</td>
                  <td><?php echo $jpy_isim; ?> / TRY</td>
                  <td><?php echo $jpy_deger; ?></td>
                  <td><?php echo $jpy_alis; ?></td>
                  <td><?php echo $jpy_satis; ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#"><i class="fas fa-arrow-up"></i></a>
        </p>
        <p>Bu sistem <a href="https://bugraozkan.com.tr">Buğra Özkan</a> tarafından kodlanmıştır.</p>
        <p>Yönetim paneli bulunmamaktadır ve günlük döviz kurlarını çekmektedir.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/holder.min.js"></script>
  </body>
</html>
