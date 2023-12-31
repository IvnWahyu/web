<?php include "koneksi.php"?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Portofolio</title>
<!-- 
Moonlight Template 
https://templatemo.com/tm-512-moonlight
-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/light-box.css">
        <link rel="stylesheet" href="css/templatemo-main.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <div class="sequence">
  
      <div class="seq-preloader">
        <svg width="39" height="16" viewBox="0 0 39 16" xmlns="http://www.w3.org/2000/svg" class="seq-preload-indicator"><g fill="#F96D38"><path class="seq-preload-circle seq-preload-circle-1" d="M3.999 12.012c2.209 0 3.999-1.791 3.999-3.999s-1.79-3.999-3.999-3.999-3.999 1.791-3.999 3.999 1.79 3.999 3.999 3.999z"/><path class="seq-preload-circle seq-preload-circle-2" d="M15.996 13.468c3.018 0 5.465-2.447 5.465-5.466 0-3.018-2.447-5.465-5.465-5.465-3.019 0-5.466 2.447-5.466 5.465 0 3.019 2.447 5.466 5.466 5.466z"/><path class="seq-preload-circle seq-preload-circle-3" d="M31.322 15.334c4.049 0 7.332-3.282 7.332-7.332 0-4.049-3.282-7.332-7.332-7.332s-7.332 3.283-7.332 7.332c0 4.05 3.283 7.332 7.332 7.332z"/></g></svg>
      </div>
      
    </div>
    
  
        <nav>
          <div class="logo">
              <img src="img/logo.png" alt=""style="width: 140px; height: auto;">
          </div>
          <div class="mini-logo">
              <img src="img/mini_logo.png" alt="">
          </div>
          <ul>
            <li><a href="#1"><i class="fa fa-home"></i> <em>Home</em></a></li>
            <li><a href="#2"><i class="fa fa-user"></i> <em>About</em></a></li>
            <li><a href="#3"><i class="fa fa-pencil"></i> <em>Portfolio</em></a></li>
            <li><a href="#4"><i class="fa fa-image"></i> <em>Gallery</em></a></li>
            <li><a href="#5"><i class="fa fa-envelope"></i> <em>Contact</em></a></li>
          </ul>
        </nav>
        
        <div class="slides">
          <div class="slide" id="1">
            <div class="content first-content">
              <div class="container-fluid">
<?php
include "koneksi.php";

$sql = "SELECT * FROM home";

$hasil = mysqli_query($conn, $sql);

$jmlData = mysqli_num_rows($hasil);

if($jmlData>0){
    while($row = mysqli_fetch_assoc($hasil)){


?>
                  <div class="col-md-3">
                      <div class="author-image"><img src="img/author_image.png" alt="Author Image"></div>
                      <!-- <div class="author-image"><?= $row["gbr"]; ?></div> -->
                  </div>
                  <div class="col-md-9">
                      <!-- <h2>Ivan Wahyu Putratama</h2> -->
                      <h2><?= $row["nama"]; ?></h2>
                      <!-- <p>Selamat datang di Portofolio Saya! Saya Ivan Wahyu Putratama, seorang mahasiswa informatika di Universitas Pembangunan Jaya yang berada di semester 5. Saya adalah seorang penggemar teknologi yang bersemangat untuk belajar dan berkembang di dunia IT. Di sini, Anda akan menemukan sebagian dari proyek-proyek dan pengetahuan yang telah saya kembangkan selama studi saya. Terima kasih telah mengunjungi situs saya</p> -->
                      <p><?= $row["deskripsi"]; ?></p>
                      <!-- <div class="main-btn"><a href="#2">Read More</a></div>
                      <div class="fb-btn"><a rel="nofollow" href="https://fb.com/templatemo">Our FB Page</a></div> -->
                  </div>
<?php
    }
}
?>
              </div>
              <!-- <section>
                <div class="container-fluid" id="isiHome">

                </div>

              </section> -->
            </div>
            
            <!-- <script>
                function dataApiHome(){
                    axios.get('apihome.php?id=1')
                        .then(respon =>{
                            const dataHome = respon.dataHome
                            const isiHome = document.getElementById('isiHome');
                            const homeDiv = document.createElement('div');
                            homeDiv.className = 'col-md-9';
                            homeDiv.innerHTML=`<h2>${dataHome.nama}</h2>
                            <p>${dataHome.deskripsi}</p>
                            <div class="main-btn"><a href="#2">Read More</a></div>
                            <div class="fb-btn"><a rel="nofollow" href="https://fb.com/templatemo">Our FB Page</a></div>`;
                            isiHome.appendChild(homeDiv);

                        })
                        .catch(error =>{
                            console.error('Error:', error);
                        });
                }
                dataApiHome();
            </script> -->
          </div>
          <div class="slide" id="2">
            <div class="content second-content">
                <div class="container-fluid">
<?php
include "koneksi.php";

$sql = "SELECT * FROM about";

$hasil = mysqli_query($conn, $sql);

$jmlData = mysqli_num_rows($hasil);

if($jmlData>0){
    while($row = mysqli_fetch_assoc($hasil)){


?>
                    <div class="col-md-6">
                        <div class="left-content">
                            <!-- <h2>Tentang Saya</h2> -->
                            <h2><?= $row["saya"]; ?></h2> 
                            <!-- <p>Selamat datang di Portofolio Saya! Saya Ivan Wahyu Putratama, seorang mahasiswa informatika di Universitas Pembangunan Jaya yang berada di semester 5. Saya adalah pribadi yang bersemangat tentang dunia teknologi dan berkomitmen untuk terus belajar dan berkembang dalam bidang ini.</p> 
                            <p>Di samping perjalanan akademis saya, saya juga aktif terlibat dalam berbagai proyek dan eksplorasi di dunia IT. Semua pengalaman ini telah membantu saya mengembangkan keterampilan teknis yang kuat</p>
                            <p>Terima kasih atas kunjungan Anda, dan kami berharap dapat berkolaborasi dengan Anda dalam masa depan!</p> -->
                            <p><?= $row["deskripsiPanjang"]; ?></p>

                      </div>
                    </div>
<?php
    }
}
?>

                    <div class="col-md-6">
                        <div class="right-image">
                          <img src="img/about_image.jpg" alt="">
                      </div>
                    </div>
                </div>
            </div>
          </div>
<!-- PORTOFOLIO -->
          <div class="slide" id="3">
            <div class="content third-content">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="first-section">
                                <div class="container-fluid">
                                    <div class="row">
<?php
include "koneksi.php";

$sql = "SELECT * FROM portfolio WHERE id=1";

$hasil = mysqli_query($conn, $sql);

$jmlData = mysqli_num_rows($hasil);

if($jmlData>0){
    while($row = mysqli_fetch_assoc($hasil)){


?>
                                        <div class="col-md-6">
                                            <div class="left-content">
                                                <h2><?= $row["judul"]; ?></h2>
                                                <p><?= $row["deskripsiPendek"]; ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="right-image">
                                                <img src="img/first_service.jpg" alt="first service">
                                            </div>
                                        </div>
<?php
    }
}
?>
                                    </div>
                                </div>
                            </div>
                            <div class="second-section">
                                <div class="container-fluid">
                                    <div class="row">
<?php
include "koneksi.php";

$sql = "SELECT * FROM portfolio WHERE id=2";

$hasil = mysqli_query($conn, $sql);

$jmlData = mysqli_num_rows($hasil);

if($jmlData>0){
    while($row = mysqli_fetch_assoc($hasil)){


?>
                                        <div class="col-md-6">
                                            <div class="left-image">
                                                <img src="img/second_service.jpg" alt="second service">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="right-content">
                                                <h2><?= $row["judul"]; ?></h2>
                                                <p><?= $row["deskripsiPendek"]; ?></p>
                                            </div>
                                        </div>
<?php
    }
}
?>
                                    </div>
                                </div>
                            </div>
                            <div class="third-section">
                                <div class="container-fluid">
                                    <div class="row">
<?php
include "koneksi.php";

$sql = "SELECT * FROM portfolio WHERE id=3";

$hasil = mysqli_query($conn, $sql);

$jmlData = mysqli_num_rows($hasil);

if($jmlData>0){
    while($row = mysqli_fetch_assoc($hasil)){


?>
                                        <div class="col-md-6">
                                            <div class="left-content">
                                                <h2><?= $row["judul"]; ?></h2>
                                                <p><?= $row["deskripsiPendek"]; ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="right-image">
                                                <img src="img/third_service.jpg" alt="third service">
                                            </div>
                                        </div>
<?php
    }
}
?>
                                    </div>
                                </div>
                            </div>
                            <div class="second-section">
                                <div class="container-fluid">
                                    <div class="row">
<?php
include "koneksi.php";

$sql = "SELECT * FROM portfolio WHERE id=4";

$hasil = mysqli_query($conn, $sql);

$jmlData = mysqli_num_rows($hasil);

if($jmlData>0){
    while($row = mysqli_fetch_assoc($hasil)){


?>
                                        <div class="col-md-6">
                                            <div class="left-image">
                                                <img src="img/fourth_service.jpg" alt="fourth service">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="right-content">
                                                <h2><?= $row["judul"]; ?></h2>
                                                <p><?= $row["deskripsiPendek"]; ?></p>
                                            </div>
                                        </div>
<?php
    }
}
?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
<!-- Gallery -->
          <div class="slide" id="4">
            <div class="content fourth-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/first_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Number One</h2>
                                            <p>Quisque sit amet lacus in diam pretium faucibus. Cras vel justo lorem.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/first_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/second_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Number Two</h2>
                                            <p>Donec eget dictum tellus. Curabitur a interdum diam. Nulla vestibulum porttitor porta.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/second_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/third_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Number Three</h2>
                                            <p>Cras varius dolor et augue fringilla, eu commodo sapien iaculis.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/third_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/fourth_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Number Four</h2>
                                            <p>Vestibulum augue ex, finibus sit amet nisi id, maximus ultrices ipsum.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/fourth_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/fifth_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Fifth Item</h2>
                                            <p>Donec commodo, ex nec rutrum venenatis, nisi nisl malesuada magna.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/fifth_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="thumb">
                                    <a href="img/sixth_big_item.jpg" data-lightbox="image-1"><div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Sixth Item</h2>
                                            <p>Maecenas dapibus neque sed nisl consectetur, id semper nisi egestas.</p>
                                        </div>
                                    </div></a>
                                    <div class="image">
                                        <img src="img/sixth_item.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
          </div>
<!-- CONTACT -->
          <div class="slide" id="5">
            <div class="content fifth-content">
                <div class="container-fluid">
                    <!--<div class="col-md-6">
                        <div id="map">
     How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>-->
                    </div>
                    <div class="col-md-12">
                        <!-- <h2>Contact</h2> -->
                        <form id="contact" action="" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                                  </fieldset>
                                </div>
                                 <div class="col-md-12">
                                  <fieldset>
                                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Send Now</button>
                                  </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>

        <div class="footer">
          <div class="content">
              <p>Copyright &copy; 2020 Company Name . Template: <a rel="nofollow" href="https://templatemo.com/tm-512-moonlight">Moonlight</a></p>
          </div>
        </div>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/datepicker.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    // Sekarang Anda dapat melakukan apa yang Anda inginkan dengan data yang dikirimkan, misalnya, menyimpannya ke database atau mengirimnya melalui email.
    // Contoh: Simpan data ke database MySQL
    $koneksi = new mysqli('localhost', 'root', '', 'moonlight');
    $query = "INSERT INTO kontak (name, email, subject, message) VALUES (?, ?, ?, ?)";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param('ssss', $name, $email, $subject, $message);
    
    if ($stmt->execute()) {
        echo "Data telah berhasil disimpan.";
    } else {
        echo "Terjadi kesalahan saat menyimpan data.";
    }
    
    $stmt->close();
    $koneksi->close();
}
?>


    <script type="text/javascript">
    $(document).ready(function() {

        

        // navigation click actions 
        $('.scroll-link').on('click', function(event){
            event.preventDefault();
            var sectionID = $(this).attr("data-id");
            scrollToID('#' + sectionID, 750);
        });
        // scroll to top action
        $('.scroll-top').on('click', function(event) {
            event.preventDefault();
            $('html, body').animate({scrollTop:0}, 'slow');         
        });
        // mobile nav toggle
        $('#nav-toggle').on('click', function (event) {
            event.preventDefault();
            $('#main-nav').toggleClass("open");
        });
    });
    // scroll function
    function scrollToID(id, speed){
        var offSet = 0;
        var targetOffset = $(id).offset().top - offSet;
        var mainNav = $('#main-nav');
        $('html,body').animate({scrollTop:targetOffset}, speed);
        if (mainNav.hasClass("open")) {
            mainNav.css("height", "1px").removeClass("in").addClass("collapse");
            mainNav.removeClass("open");
        }
    }
    if (typeof console === "undefined") {
        console = {
            log: function() { }
        };
    }
    </script>
</body>
</html>