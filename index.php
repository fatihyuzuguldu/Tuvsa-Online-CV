<?php
require_once ("functions.php");
$UserUrl = $_GET['UserUrl'];

$checkuserquery = $conn->prepare("SELECT COUNT(*) AS userCount FROM users WHERE UserUrl=:UserUrl");
$checkuserquery->execute(['UserUrl' => $UserUrl]);
$checkuserrow = $checkuserquery->fetch();
if ($UserUrl == null){
    header("Location: https://tuvsa.com/fatihyuzuguldu");
}
if ($checkuserrow['userCount'] == null) {
    header("Location: https://tuvsa.com/fatihyuzuguldu");
    exit();
}

$query = $conn->prepare("SELECT * FROM users WHERE UserUrl=:UserUrl");
$query->execute(['UserUrl' => $UserUrl]);
$row = $query->fetch();

$UserId = $row["id"];

$workquery = $conn->prepare("SELECT * FROM workstatus WHERE UserId=:UserId");
$workquery->execute(['UserId' => $UserId]); // Burada parametreyi 'UserId' olarak tanımladık.
$workstatus = $workquery->fetch();
?>
<!DOCTYPE html>
<html lang="tr">
  <head>
    <!-- Title -->
    <title> <?= $row["UserFullName"] ." ". $row["UserSurname"]  ?> - Sarkay Yazılım</title>
    <!-- Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="<?= $row["UserFullName"] ." ". $row["UserSurname"]  ?> - Sarkay Yazılım Online CV Görüntüleme" />
    <meta name="author" content="Fatih Yüzügüldü" />
    <meta name="keywords" content="<?= $row["UserFullName"] ." ". $row["UserSurname"]  ?>,Sarkay,cv,online,fatih,yüzügüldü,<?= $row["UserFullName"] .",". $row["UserSurname"]  ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.ico" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/libs/owl.carousel/dist/assets/owl.carousel.min.css">
    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href="assets/css/style.min.css" />
      <style>
          .list-unstyled {
              flex-wrap: wrap; /* Yeni simgelerin yan yana sığması ve alt satıra geçmesi için */
              padding: 0;
          }

          .list-unstyled li a {
              display: flex;
              padding: 10px; /* Simgeler arasındaki boşluğu ayarlar */
          }
          @media (max-width: 767px) {
              .col-6.col-md-6 {
                  padding: 30px;
              }
          }
          .resim-kapsayici {
              width: 100%; /* Genişliği korur */
              height: 150px; /* İstediğiniz yeni yükseklik */
              overflow: hidden; /* Taşan kısmı gizler */
          }

          .resim-kapsayici img {
              width: 100%; /* Genişliği korur */
              height: auto; /* Yüksekliği otomatik ayarlar */
          }
      </style>
  </head>
  <body>
    <!-- Preloader -->
    <div class="preloader">
      <img src="assets/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <!-- Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="horizontal" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <!-- Header Start -->
      <header class="app-header">
      </header>
      <!-- Header End -->
      <!-- Main wrapper -->
      <div class="body-wrapper">
        <div class="container-fluid" style="padding-top: 15px!important;">
          <div class="card overflow-hidden">
            <div class="card-body p-0">
                <div class="resim-kapsayici">
                    <img src="assets/images/backgrounds/profilebg.jpg" alt="Arkaplan Resmi">
                </div>
              <div class="row align-items-center">
                <div class="col-lg-4 order-lg-1 order-2">
                  <div class="d-flex align-items-center justify-content-around m-4">
                      <ul class="list-unstyled d-flex align-items-center justify-content-center justify-content-lg-start my-3 gap-3">
                          <li class="position-relative">
                              <a class="d-flex align-items-center justify-content-center p-2 fs-4 rounded-circle" target="_blank" href="https://www.linkedin.com/in/fatihyuzuguldu">
                                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48">
                                      <path fill="#0078d4" d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5	V37z"></path><path d="M30,37V26.901c0-1.689-0.819-2.698-2.192-2.698c-0.815,0-1.414,0.459-1.779,1.364	c-0.017,0.064-0.041,0.325-0.031,1.114L26,37h-7V18h7v1.061C27.022,18.356,28.275,18,29.738,18c4.547,0,7.261,3.093,7.261,8.274	L37,37H30z M11,37V18h3.457C12.454,18,11,16.528,11,14.499C11,12.472,12.478,11,14.514,11c2.012,0,3.445,1.431,3.486,3.479	C18,16.523,16.521,18,14.485,18H18v19H11z" opacity=".05"></path><path d="M30.5,36.5v-9.599c0-1.973-1.031-3.198-2.692-3.198c-1.295,0-1.935,0.912-2.243,1.677	c-0.082,0.199-0.071,0.989-0.067,1.326L25.5,36.5h-6v-18h6v1.638c0.795-0.823,2.075-1.638,4.238-1.638	c4.233,0,6.761,2.906,6.761,7.774L36.5,36.5H30.5z M11.5,36.5v-18h6v18H11.5z M14.457,17.5c-1.713,0-2.957-1.262-2.957-3.001	c0-1.738,1.268-2.999,3.014-2.999c1.724,0,2.951,1.229,2.986,2.989c0,1.749-1.268,3.011-3.015,3.011H14.457z" opacity=".07"></path><path fill="#fff" d="M12,19h5v17h-5V19z M14.485,17h-0.028C12.965,17,12,15.888,12,14.499C12,13.08,12.995,12,14.514,12	c1.521,0,2.458,1.08,2.486,2.499C17,15.887,16.035,17,14.485,17z M36,36h-5v-9.099c0-2.198-1.225-3.698-3.192-3.698	c-1.501,0-2.313,1.012-2.707,1.99C24.957,25.543,25,26.511,25,27v9h-5V19h5v2.616C25.721,20.5,26.85,19,29.738,19	c3.578,0,6.261,2.25,6.261,7.274L36,36L36,36z"></path>
                                  </svg>
                              </a>
                          </li>
                          <li class="position-relative">
                              <a class="d-flex align-items-center justify-content-center p-2 fs-4 rounded-circle" target="_blank"  href="https://www.instagram.com/fth.yuzuguldu/">
                                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48">
                                      <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fd5"></stop><stop offset=".328" stop-color="#ff543f"></stop><stop offset=".348" stop-color="#fc5245"></stop><stop offset=".504" stop-color="#e64771"></stop><stop offset=".643" stop-color="#d53e91"></stop><stop offset=".761" stop-color="#cc39a4"></stop><stop offset=".841" stop-color="#c837ab"></stop></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path><radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#4168c9"></stop><stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path><path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"></path><circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle><path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"></path>
                                  </svg>
                              </a>
                          </li>
                          <li class="position-relative">
                              <a class="d-flex align-items-center justify-content-center p-2 fs-4 rounded-circle" target="_blank"  href="https://github.com/fatihyuzuguldu">
                                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48" viewBox="0 0 30 30">
                                      <path d="M15,3C8.373,3,3,8.373,3,15c0,5.623,3.872,10.328,9.092,11.63C12.036,26.468,12,26.28,12,26.047v-2.051 c-0.487,0-1.303,0-1.508,0c-0.821,0-1.551-0.353-1.905-1.009c-0.393-0.729-0.461-1.844-1.435-2.526 c-0.289-0.227-0.069-0.486,0.264-0.451c0.615,0.174,1.125,0.596,1.605,1.222c0.478,0.627,0.703,0.769,1.596,0.769 c0.433,0,1.081-0.025,1.691-0.121c0.328-0.833,0.895-1.6,1.588-1.962c-3.996-0.411-5.903-2.399-5.903-5.098 c0-1.162,0.495-2.286,1.336-3.233C9.053,10.647,8.706,8.73,9.435,8c1.798,0,2.885,1.166,3.146,1.481C13.477,9.174,14.461,9,15.495,9 c1.036,0,2.024,0.174,2.922,0.483C18.675,9.17,19.763,8,21.565,8c0.732,0.731,0.381,2.656,0.102,3.594 c0.836,0.945,1.328,2.066,1.328,3.226c0,2.697-1.904,4.684-5.894,5.097C18.199,20.49,19,22.1,19,23.313v2.734 c0,0.104-0.023,0.179-0.035,0.268C23.641,24.676,27,20.236,27,15C27,8.373,21.627,3,15,3z"></path>
                                  </svg>
                              </a>
                          </li>
                          <li class="position-relative">
                              <a class="d-flex align-items-center justify-content-center p-2 fs-4 rounded-circle" target="_blank" href="https://fatihyuzuguldu.com">
                                  <img width="48" height="48" src="assets/images/globe.png" />
                              </a>
                          </li>

                      </ul>
                  </div>
                </div>
                <div class="col-lg-4 mt-n3 order-lg-2 order-1">
                  <div class="mt-n5">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                      <div class="linear-gradient d-flex align-items-center justify-content-center rounded-circle" style="width: 110px; height: 110px;">
                        <div class="border border-4 border-white d-flex align-items-center justify-content-center rounded-circle overflow-hidden" style="width: 100px; height: 100px;">
                          <img src="images/<?= $row["UserPhotoUrl"] ?>" alt="" class="w-100 h-100">
                        </div>
                      </div>
                    </div>
                    <div class="text-center" >
                      <h2 class="mb-0 fw-semibold"><?= $row["UserFullName"] ." ". $row["UserSurname"]  ?></h2>
                      <h5 class="mb-0 "><?= $workstatus["WorkProfession"]  ?></h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 order-last">
                  <ul class="list-unstyled d-flex align-items-center justify-content-center justify-content-lg-start my-3 gap-3">
                    <li class="position-relative">
                        <button type="button" class="justify-content-center w-100 btn mb-1 btn-rounded btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#bs-example-modal-sm">
                            <i class="ti ti-qrcode fs-4 me-2"></i>
                            QR
                        </button>
                    </li>
                    <li class="position-relative">
                        <button type="button" class="justify-content-center w-100 btn mb-1 btn-rounded btn-success d-flex align-items-center">
                            <i class="ti ti-brand-whatsapp fs-4 me-2"></i>
                            Whatsapp
                        </button>
                    </li>
                    <li class="position-relative">
                        <form id="pdfolustur" method="POST">
                            <input class="form-control" value="<?= $UserId ?>" type="text" placeholder="userid" name="userid" style="display:none;" >
                            <a type="button" class="justify-content-center w-100 btn mb-1 btn-rounded btn-dark d-flex align-items-center" href="https://fatihyuzuguldu.com/CV.pdf" download>
                                <i class="ti ti-download fs-4 me-2"></i>
                                PDF
                            </a>
                        </form>

                    </li>
                  </ul>
                </div>
              </div>
                <div class="modal fade" id="bs-example-modal-sm" tabindex="-1" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header d-flex justify-content-center">
                                <img src="https://api.qrserver.com/v1/create-qr-code/?data=https://tuvsa.com/fatihyuzuguldu" style="display: block; margin: 0 auto; max-width: 100%; height: auto;" class="img-fluid"/>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <button type="button" class="btn btn-light-danger text-danger font-medium waves-effect" data-bs-dismiss="modal">Kapat</button>
                            </div>
                        </div>
                    </div>
                </div>
              <ul class="nav nav-pills user-profile-tab justify-content-start mt-2 bg-light-info rounded-2" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation" >
                      <button style="border-bottom:0;" class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-6" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">
                          <h4>#TUVSA Online CV projesi.</h4>
                      </button>
                  </li>
              </ul>
            </div>
          </div>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card shadow-none border">
                    <div class="card-body">
                      <h4 class="fw-semibold mb-3">Ön Bilgi</h4>
                        <br>
                      <p style="font-size: 16px;" ><?= $row["UserDescription"] ?></p>
                      <ul class="list-unstyled mb-0">
                        <li class="d-flex align-items-center gap-3 mb-2">
                          <?php
                            if ($workstatus["WorkStatus"] == "Çalışıyor")
                            {
                            echo"<i style='color:red' class='ti ti-circle-filled fs-6'></i>";
                            }
                            elseif ($workstatus["WorkStatus"] == "Çalışmıyor")
                            {
                              echo"<i style='color:orange;' class='ti ti-circle-filled fs-6'></i>";
                            }
                            elseif ($workstatus["WorkStatus"] == "İş Arayan")
                            {
                              echo"<i style='color:green' class='ti ti-circle-filled fs-6'></i>";
                            }
                            elseif ($workstatus["WorkStatus"] == "Staj Arayan")
                            {
                            echo"<i style='color:yellow' class='ti ti-circle-filled fs-6'></i>";
                            }
                            else
                            {
                              echo"<i style='color:blue' class='ti ti-circle-filled fs-6'></i>";
                            }
                            echo "<h6 class='fs-4 fw-semibold mb-0'> " . $workstatus["WorkStatus"] . " </h6>";
                           ?>
                        </li>
                        <li class="d-flex align-items-center gap-3 mb-2">
                          <i class="ti ti-mail text-dark fs-6"></i>
                          <h6 class="fs-4 fw-semibold mb-0"><?= $row["UserEmail"] ?></h6>
                        </li>
                        <li class="d-flex align-items-center gap-3 mb-2">
                          <i class="ti ti-device-desktop text-dark fs-6"></i>
                          <?php
                            if ($row["UserWeb"] == null)
                              {
                                echo"<h6 class='fs-4 fw-semibold mb-0'> ". $_SERVER["SERVER_NAME"]."/".$row["UserUrl"]."</h6>";
                              }
                              else {
                                echo"<h6 class='fs-4 fw-semibold mb-0'> ". $row["UserWeb"]." </h6>";
                              }
                          ?>

                        </li>
                        <li class="d-flex align-items-center gap-3 mb-2">
                          <i class="ti ti-map-pin text-dark fs-6"></i>
                          <h6 class="fs-4 fw-semibold mb-0"><?= $row["UserCountry"]. " , ". $row["UserCity"] . " , ". $row["UserDistrict"] ?></h6>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                  <div class="col-lg-12 mt-n1 order-lg-2 order-1">
                      <div class="card shadow-none border">
                          <div class="card-body">
                              <h4 class="fw-semibold mb-3"><i class="ti ti-briefcase fill-white me-0 me-md-1"></i> İş Deneyimleri</h4>
                              <br>
                              <div class="row">
                                  <?php
                                  $workequery = $conn->prepare("SELECT * FROM workexperiences WHERE UserId=:UserId");
                                  $workequery->execute(['UserId' => $UserId]);

                                  $workeList = $workequery->fetchAll(); // Tüm eğitim girişlerini alma

                                  foreach ($workeList as $workerow) {
                                      $startDate = new DateTime($workerow["JobStartDate"]);
                                      $endDate = new DateTime($workerow["JobEndDate"]);

                                      // Tarih farkını hesapla
                                      $interval = $startDate->diff($endDate);

                                      // Toplam ay sayısını hesapla
                                      $totalMonths = $interval->format('%y') * 12 + $interval->format('%m');
                                      ?>
                                      <div class="col-md-6 col-lg-6">
                                          <div class="card">
                                              <div class="card-body">
                                                  <?php echo "<h6 class='card-subtitle mb-2 text-muted d-flex justify-content-end align-items-end' style='font-size: 1.0rem;'>" . $totalMonths . " Ay</h6>"; ?>
                                                  <h1 class="card-title"><?= $workerow["JobCompany"] ?></h1>
                                                  <h6 class=""> &nbsp;<?= $workerow["JobPosition"] ?></h6>
                                                  &nbsp;
                                                  <?php
                                                  echo"<h6 class='card-subtitle mb-2 text-muted d-flex align-items-center'><i class='ti ti-circle me-1 fs-5'></i>". $workerow["JobMode"] ." </h6>";
                                                  if ($workerow["JobEndDate"] == null){
                                                      echo"<h6 class='card-subtitle mb-2 text-muted d-flex align-items-center'><i class='ti ti-calendar me-1 fs-5'></i>". $workerow["JobStartDate"] ." / " . $workerow["JobEndDate"] ."</h6>";                          }
                                                  else{
                                                      echo"<h6 style='color:green;' class='card-subtitle mb-2 text-muted d-flex align-items-center'><i class='ti ti-calendar me-1 fs-5'></i>". $workerow["JobStartDate"] ." / ". $workerow["JobEndDate"] ." </h6>";
                                                  }
                                                  ?>

                                                  <p  class="card-text pt-lg-6">
                                                      <?= $workerow["JobDescription"]  ?>
                                                  </p>
                                              </div>
                                          </div>
                                      </div>
                                  <?php }?>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-12 mt-n1 order-lg-2 order-1">
                      <div class="card shadow-none border">
                          <div class="card-body">
                              <h4 class="fw-semibold mb-3"><i class="ti ti-folder-star fill-white me-0 me-md-1"></i> Projeler</h4>
                              <br>
                              <div class="row">
                                  <?php
                                  $projectsquery = $conn->prepare("SELECT * FROM projects WHERE UserId=:UserId");
                                  $projectsquery->execute(['UserId' => $UserId]);

                                  $projectList = $projectsquery->fetchAll(); // Tüm eğitim girişlerini alma

                                  foreach ($projectList as $projectrow) {
                                      ?>
                                      <div class=" col-md-6 col-xl-6">
                                          <div class="card">
                                              <div class="card-body p-4 d-flex align-items-center gap-3">
                                                  <div>
                                                      <h4 class="fw-semibold mb-0"><?= $projectrow["ProjectName"] ?></h4>
                                                      <a class="fw-semibold mb-0"><?= $projectrow["ProjectLang"] ?></a>
                                                      <span style="padding: 10px 0px 0px 0px;" class="fs-2 d-flex align-items-center"><i class="ti ti-calendar text-dark fs-3 me-1"></i><?= $projectrow["ProjectDate"] ?></span>
                                                      <p style="padding: 10px 0px 0px 0px;"><?= $projectrow["ProjectDescription"]  ?></p>
                                                  </div>
                                              </div>
                                              <div class="d-flex justify-content-end" style="padding: 0px 20px 10px 0px;">
                                                  <a href="<?= $projectrow["ProjectUrl"] ?>" target="_blank" class="btn btn-outline-primary py-1 px-md-3">Projeye Git</a>
                                              </div>
                                          </div>
                                      </div>
                                  <?php }?>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-12 mt-n1 order-lg-2 order-1">
                      <div class="card shadow-none border">
                          <div class="card-body">
                              <h4 class="fw-semibold mb-3"><i class="ti ti-sparkles fill-white me-0 me-md-1"></i> Yetenekler</h4>
                              <br>
                              <div class="row">
                                  <?php
                                  $abilitiesquery = $conn->prepare("SELECT * FROM abilities WHERE UserId=:UserId  ORDER BY AbilitiesMonth DESC ");
                                  $abilitiesquery->execute(['UserId' => $UserId]);

                                  $abilitiesList = $abilitiesquery->fetchAll(); // Tüm eğitim girişlerini alma

                                  foreach ($abilitiesList as $abilitiesrow) {
                                      ?>
                                      <div class="col-md-6 col-lg-3 d-flex">
                                          <div class="card w-100 position-relative">
                                              <div class="p-9 w-80 d-flex">
                                                  <div class="row">
                                                      <div class="col-4 col-md-6 d-flex align-items-center" >
                                                          <img style="max-width:80px; width: 80px;" src="assets/icons/<?= $abilitiesrow["AbilitiesName"] ?>.svg" alt="<?= $abilitiesrow["AbilitiesName"] ?>" />
                                                      </div>
                                                      <div class="col-6 col-md-6" style="display: flex!important;
                                                            flex-wrap: wrap;
                                                            align-content: center;
                                                            justify-content: space-around;">
                                                          <a class="text-dark fs-4 link lh-sm"><?= $abilitiesrow["AbilitiesName"] ?></a>
                                                      </div>
                                                      <!-- Added the following div for the "3 ay" text -->
                                                  </div>
                                              </div>
                                              <div class="position-absolute top-0 end-0 p-3"><?= $abilitiesrow["AbilitiesMonth"] ?> Ay</div>
                                          </div>
                                      </div>



                                  <?php } ?>

                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-12 mt-n1 order-lg-2 order-1">
                      <div class="card shadow-none border">
                          <div class="card-body">
                              <h4 class="fw-semibold mb-3"><i class="ti ti-school fill-white me-0 me-md-1"></i> Eğitim Bilgileri</h4>
                              <br>
                              <div class="row">
                                  <?php
                                  $eduquery = $conn->prepare("SELECT * FROM education WHERE UserId=:UserId");
                                  $eduquery->execute(['UserId' => $UserId]);

                                  $educationList = $eduquery->fetchAll(); // Tüm eğitim girişlerini alma

                                  foreach ($educationList as $edurow) {
                                      ?>
                                      <div class="col-md-6 col-lg-6">
                                          <div class="card">
                                              <div class="card-body">
                                                  <h2 class="card-title"><?= $edurow["EduFaculty"] ?></h2>
                                                  <h5 style="font-size: 16px;"> &nbsp;<?= $edurow["EduSection"] ?></h5>
                                                  &nbsp;
                                                  <?php
                                                  echo"<h6 class='card-subtitle mb-2 text-muted d-flex align-items-center'><i class='ti ti-circle me-1 fs-5'></i>". $edurow["EduLevel"] ." </h6>";
                                                  if ($edurow["EduClass"] == "Mezun"){
                                                      echo"<h6 class='card-subtitle mb-2 text-muted d-flex align-items-center'><i class='ti ti-calendar me-1 fs-5'></i>". $edurow["EduStartingDate"] ." / " . $edurow["EduEndDate"] ."</h6>";                          }
                                                  else{
                                                      echo"<h6 class='card-subtitle mb-2 text-muted d-flex align-items-center'><i class='ti ti-calendar me-1 fs-5'></i>". $edurow["EduStartingDate"] ." / Devam Ediyor</h6>";
                                                  }
                                                  ?>

                                                  <p class="card-text pt-2">
                                                      <?= $edurow["EduDescription"]  ?>
                                                  </p>
                                              </div>
                                          </div>
                                      </div>
                                  <?php }?>
                              </div>
                          </div>
                      </div>
                  </div>
                 <!-- <div class="col-lg-12 mt-n1 order-lg-2 order-1">
                      <div class="card shadow-none border">
                          <div class="card-body">
                              <h4 class="fw-semibold mb-3"><i class="ti ti-certificate fill-white me-0 me-md-1"></i> Sertifikalar</h4>
                              <br>
                              <div class="row">
                                  <?php
                                  $certificatesquery = $conn->prepare("SELECT * FROM certificates WHERE UserId=:UserId");
                                  $certificatesquery->execute(['UserId' => $UserId]);

                                  $certificatesList = $certificatesquery->fetchAll(); // Tüm eğitim girişlerini alma

                                  foreach ($certificatesList as $certificatesrow) {
                                      ?>
                                      <div class=" col-md-12 col-xl-12">
                                          <div class="card">
                                              <div class="card-body p-4 d-flex align-items-center gap-3">
                                                  <div>
                                                      <h5 class="fw-semibold mb-0"><?= $certificatesrow["CertificatesName"] ?></h5>
                                                      <span style="padding: 10px 0px 0px 0px;" class="fs-2 d-flex align-items-center"><i class="ti ti-calendar text-dark fs-3 me-1"></i><?= $certificatesrow["CertificatesDate"] ?></span>
                                                  </div>
                                              </div>
                                              <div class="d-flex justify-content-end" style="padding: 0px 20px 10px 0px;">
                                                  <a href="<?= $certificatesrow["CertificatesUrl"] ?>" target="_blank" class="btn btn-outline-primary py-1 px-md-3">Sertifika Indir</a>
                                              </div>
                                          </div>
                                      </div>
                                  <?php }?>
                              </div>
                          </div>
                      </div>
                  </div> -->
                  <div class="col-lg-12 mt-n3 order-lg-2 order-1">
                      <div class="card shadow-none border">
                          <div class="card-body">
                              <h4 class="fw-semibold mb-3"><i class="ti ti-language fill-white me-0 me-md-1"></i>Yabancı Dil</h4>
                              <br>
                              <div class="row">
                                  <?php
                                  $languagequery = $conn->prepare("SELECT * FROM languages WHERE UserId=:UserId");
                                  $languagequery->execute(['UserId' => $UserId]);

                                  $languageList = $languagequery->fetchAll(); // Tüm eğitim girişlerini alma

                                  foreach ($languageList as $languagerow) {
                                      ?>
                                      <div class="col-md-12 col-xl-4">
                                          <div class="card">
                                              <div class="card-body p-3 d-flex align-items-center gap-3">
                                                      <div class="row">
                                                          <a class="text-dark fs-4 link lh-sm ti-box-padding">&nbsp; <?= $languagerow["LangForeign"] ?> </a>
                                                      </div>
                                              </div>
                                          </div>
                                      </div>
                                  <?php } ?>

                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-12 mt-n3 order-lg-2 order-1">
                      <div class="card shadow-none border">
                          <div class="card-body">
                              <h4 class="fw-semibold mb-3"><i class="ti ti-user-heart fill-white me-0 me-md-1"></i> Hobiler</h4>
                              <br>
                              <div class="row">
                                  <?php
                                  $hobbiesquery = $conn->prepare("SELECT * FROM hobbies WHERE UserId=:UserId");
                                  $hobbiesquery->execute(['UserId' => $UserId]);

                                  $hobbiesList = $hobbiesquery->fetchAll(); // Tüm eğitim girişlerini alma

                                  foreach ($hobbiesList as $hobbiesrow) {
                                      ?>
                                      <div class="col-md-12 col-xl-4">
                                          <div class="card">
                                              <div class="card-body p-3 d-flex align-items-center gap-3">
                                                      <div class="row">
                                                          <a class="text-dark fs-4 link lh-sm ti-box-padding">&nbsp; <?= $hobbiesrow["Hobbies"] ?> </a>
                                                      </div>
                                                  </div>
                                          </div>
                                      </div>
                                  <?php } ?>
                              </div>
                          </div>
                      </div>
                  </div>
                 <!-- <div class="col-lg-12 mt-n3 order-lg-2 order-1">
                      <div class="card shadow-none border">
                          <div class="card-body">
                              <h4 class="fw-semibold mb-3"><i class="ti ti-clubs fill-white me-0 me-md-1"></i>Kulüpler</h4>
                              <br>
                              <div class="row">
                                  <?php
                                  $clubquery = $conn->prepare("SELECT * FROM clubmembership WHERE UserId=:UserId");
                                  $clubquery->execute(['UserId' => $UserId]);

                                  $clubList = $clubquery->fetchAll(); // Tüm eğitim girişlerini alma

                                  foreach ($clubList as $clubrow) {
                                      ?>
                                      <div class="col-md-12 col-xl-4">
                                          <div class="card">
                                              <div class="card-body p-3 d-flex align-items-center gap-3">
                                                  <div class="row">
                                                      <a class="text-dark fs-4 link lh-sm ti-box-padding">&nbsp; <?= $clubrow["ClubName"] ?> </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  <?php } ?>
                              </div>
                          </div>
                      </div>
                  </div> -->
                  <!-- <div class="col-lg-12 mt-n3 order-lg-2 order-1">
                      <div class="card shadow-none border">
                          <div class="card-body">
                              <h4 class="fw-semibold mb-3"><i class="ti ti-heart fill-white me-0 me-md-1"></i>Sağlık Bilgileri</h4>
                              <?php
                                $healthquery = $conn->prepare("SELECT * FROM health WHERE UserId=:UserId");
                              $healthquery->execute(['UserId' => $UserId]);
                                $healthrow = $healthquery->fetch();
                                ?>
                              <br>
                              <div class="row">
                                  <div class="col-md-6 col-lg-6">
                                      <div class="card">
                                          <div class="card-body">
                              <ul class="list-unstyled mb-0">
                                  <li class="d-flex align-items-center gap-3 mb-4">
                                      <i class="ti ti-line-height text-dark fs-6"></i>Boy
                                      <h6 class="fs-4 fw-semibold mb-0"><?= $healthrow["Height"] ?></h6>
                                  </li>
                                  <li class="d-flex align-items-center gap-3 mb-4">
                                      <i class="ti ti-weight text-dark fs-6"></i> Kilo
                                      <h6 class="fs-4 fw-semibold mb-0"><?= $healthrow["Weight"] ?></h6>
                                  </li>

                                  <li class="d-flex align-items-center gap-3 mb-4">
                                      <i class="ti ti-plus-minus text-dark fs-6"></i>K/B Endeksi
                                      <h6 class="fs-4 fw-semibold mb-0"><?php
                                          $kbendeks = ($healthrow["Height"] / 100 )* ($healthrow["Height"] / 100);
                                          $kbendeks = $healthrow["Weight"] / $kbendeks;
                                          $kbendeks = number_format($kbendeks, 2, '.', '');
                                          echo $kbendeks;
                                          ?>
                                      </h6>
                                  </li>
                                  <li class="d-flex align-items-center gap-3 mb-4">
                                      <i class="ti ti-smoking text-dark fs-6"></i> Sigara
                                      <h6 class="fs-4 fw-semibold mb-0"><?= $healthrow["Smoking"] ?></h6>
                                  </li>
                              </ul>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6">
                                      <div class="card">
                                          <div class="card-body">
                                              <ul class="list-unstyled mb-0">
                                                  <li class="d-flex align-items-center gap-3 mb-4">
                                                      <i class="ti ti-physotherapist text-dark fs-6"></i>Bedensel Engel
                                                      <h6 class="fs-4 fw-semibold mb-0"><?= $healthrow["PhysicalDisability"] ?></h6>
                                                  </li>
                                                  <li class="d-flex align-items-center gap-3 mb-4">
                                                      <i class="ti ti-medical-cross text-dark fs-6"></i> Medikal Operasyon
                                                      <h6 class="fs-4 fw-semibold mb-0"><?= $healthrow["MedicalOperations"] ?></h6>
                                                  </li>
                                                  <li class="d-flex align-items-center gap-3 mb-4">
                                                      <i class="ti ti-eye text-dark fs-6"></i> Görme Problemleri
                                                      <h6 class="fs-4 fw-semibold mb-0"><?= $healthrow["VisualImpairment"] ?></h6>
                                                  </li>
                                                  <li class="d-flex align-items-center gap-3 mb-4">
                                                      <i class="ti ti-ear text-dark fs-6"></i> İşitme Problemleri
                                                      <h6 class="fs-4 fw-semibold mb-0"><?= $healthrow["HearingLoss"] ?></h6>
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>-->

              </div>
            </div>
          </div>
            <div class="container">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                    <a href="https://fatihyuzuguldu.com" class="col-md-4 d-flex align-items-center justify-content-start mb-3 mb-md-0 link-dark text-decoration-none">
                    </a>
                    <a href="https://fatihyuzuguldu.com" target="_blank" class="col-md-4 mb-0 text-end">© 2024 Fatih Yüzügüldü.</a>
                </footer>
            </div>

        </div>
      </div>
    <div class="dark-transparent sidebartoggler"></div>
    </div>
    <!-- Customizer -->
    <!-- Import Js Files -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- core files -->
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/app.horizontal.init.js"></script>
    <script src="assets/js/app-style-switcher.js"></script>
    <script src="assets/js/sidebarmenu.js"></script>
    
    <script src="assets/js/custom.js"></script>
    <!-- current page js files -->
    <script src="assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
    <script>
        function downloadPdf() {
            const userid = document.querySelector('input[name="userid"]').value;

            // Prepare the data to be sent to the server
            const data = {
                userid: userid.trim() || null
            };

            // Create a form element
            const form = document.createElement('form');
            form.method = 'post';
            form.action = 'inc/pdf.php';
            form.style.display = 'none';

            // Add each data as a hidden input to the form
            for (const key in data) {
                if (data.hasOwnProperty(key)) {
                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = key;
                    input.value = data[key];
                    form.appendChild(input);
                }
            }

            // Set the form target to '_blank' to open in a new tab
            form.target = '_blank';

            // Append the form to the body and submit it
            document.body.appendChild(form);
            form.submit();

            // Clean up: Remove the form from the body
            document.body.removeChild(form);
        }
    </script>

  </body>
</html>
