<?= $this->extend('template/layoutusers'); ?>
<?= $this->section('isi'); ?>

<!-- loader -->
<div id="loader">
    <div class="spinner-border text-primary" role="status"></div>
</div>
<!-- * loader -->

<!-- App Header -->
<!-- 
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="javascript:;" class="headerButton goBack">
                <i class="fas fa-arrow-left fa-2x"></i>
            </a>
        </div>
        <div class="pageTitle">Camera</div>
        <div class="right"></div>
    </div>
</div> -->
<!-- * App Header -->

<!-- App Capsule -->
<div id="appCapsule">
    <div class="section full">
        <div class="section-title bg-primary text-light">
            <div class="left">
                <a href="javascript:;" class="headerButton goBack text-light ">
                    <i class="fas fa-arrow-left fa-2x"></i>
                </a>
            </div>
            <div class="pageTitle">Camera</div>
            <div class="right"></div>
        </div>
    </div>
    <!-- <div class="wide-block pt-2 pb-2">
            Great to start your projects from here.
        </div> -->


    <div class="col mt-2 " style="margin-bottom: 100px">
        <div class=" card">
            <div class="card-body">
                <br>
                <div class="alert alert-success">
                    <h1>Aplikasi Galeri</h1>
                    <h5>Belajar capture gambar dengan webcam, menyimpan data ke database, dan menampilkan hasilnya</h5>
                </div>
                <hr>
                <!-- form  -->
                <form id="form">
                    <div class="form-group">
                        <label>name</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>

                    <!-- kamera webcam akan ditampilkan di dalam id="my_camera" -->
                    <div id="my_camera">
                    </div>
                    <br>
                    <hr>
                    <button type="submit" class="tombol-simpan btn btn-primary">Register</button>
                </form>
            </div>
        </div>

        <div class="col-md-6">
            <div id="data">

            </div>
        </div>
    </div>
</div>


<script language="JavaScript">
    // menampilkan kamera dengan menentukan ukuran, format dan kualitas 
    Webcam.set({
        width: 320,
        height: 240,
        image_format: 'jpeg',
        jpeg_quality: 90
    });

    //menampilkan webcam di dalam file html dengan id my_camera
    Webcam.attach('#my_camera');
</script>

<script type="text/javascript">
    // saat dokumen selesai dibuat jalankan fungsi update
    $(document).ready(function() {
        update();
    });

    // jalankan aksi saat tombol register disubmit
    $(".tombol-simpan").click(function() {
        event.preventDefault();

        // membuat variabel image
        var image = '';

        //mengambil data uername dari form di atas dengan id name
        var name = $('#name').val();

        //mengambil data email dari form di atas dengan id email
        var email = $('#email').val();

        //memasukkan data gambar ke dalam variabel image
        Webcam.snap(function(data_uri) {
            image = data_uri;
        });

        //mengirimkan data ke file action.php dengan teknik ajax
        $.ajax({
            url: 'action.php',
            type: 'POST',
            data: {
                name: name,
                email: email,
                image: image
            },
            success: function() {
                alert('input data berhasil');
                // menjalankan fungsi update setelah kirim data selesai dilakukan 
                update()
            }
        })
    });


    //fungsi update untuk menampilkan data
    function update() {
        $.ajax({
            url: 'data.php',
            type: 'get',
            success: function(data) {
                $('#data').html(data);
            }
        });
    }
</script>
</div>
<!-- <div id="appCapsule">
    <div class="section bg-primary" id="user-section">
        <div id="user-detail">
            <div class="avatar">
                <img src="assets/img/sample/avatar/avatar1.jpg" alt="avatar" class="imaged w64 rounded" />
            </div>
            <div id="user-info">
                <h2 id="user-name">Admin Mobile</h2>
                <span id="user-role">Programmer</span>
            </div>
        </div>
    </div>

    <div class="section" id="menu-section">
        <div class="card">
            <div class="card-body text-center">
                <div class="list-menu">


                </div>
            </div>
        </div>
    </div>
    <div class="section mt-2" id="presence-section">
        <div class="todaypresence">
            <div class="row">
                <div class="col-6">
                    <div class="card bg-success">
                        <div class="card-body">
                            <div class="presencecontent">
                                <div class="iconpresence">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="presencedetail">
                                    <h4 class="presencetitle">Masuk</h4>
                                    <span>07:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card bg-danger">
                        <div class="card-body">
                            <div class="presencecontent">
                                <div class="iconpresence">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="presencedetail">
                                    <h4 class="presencetitle">Pulang</h4>
                                    <span>12:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rekappresence mt-1">
            <div class="col">
                <canvas id="myChart" style="min-height: 50; height: 100; max-height:  100%; max-width: 100%;"></canvas>
            </div>
        </div>

        <div class="rekappresence mt-1">

            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="presencecontent">
                                <div class="iconpresence primary">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="presencedetail">
                                    <h4 class="rekappresencetitle">Hadir</h4>
                                    <span class="rekappresencedetail">0 Hari</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="presencecontent">
                                <div class="iconpresence green">
                                    <i class="fas fa-info"></i>
                                </div>
                                <div class="presencedetail">
                                    <h4 class="rekappresencetitle">Izin</h4>
                                    <span class="rekappresencedetail">0 Hari</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="presencecontent">
                                <div class="iconpresence danger">
                                    <i class="fas fa-sad-tear"></i>
                                </div>
                                <div class="presencedetail">
                                    <h4 class="rekappresencetitle">Sakit</h4>
                                    <span class="rekappresencedetail">0 Hari</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="presencecontent">
                                <div class="iconpresence warning">
                                    <i class="fa fa-clock"></i>
                                </div>
                                <div class="presencedetail">
                                    <h4 class="rekappresencetitle">Terlambat</h4>
                                    <span class="rekappresencedetail">0 Hari</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="presencetab mt-2">
            <div class="tab-pane fade show active" id="pilled" role="tabpanel">
                <ul class="nav nav-tabs style1" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                            Bulan Ini
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile" role="tab">
                            Leaderboard
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-content mt-2" style="margin-bottom: 100px">
                <div class="tab-pane fade show active" id="home" role="tabpanel">
                    <ul class="listview image-listview">
                        <li>
                            <div class="item">
                                <div class="icon-box bg-primary">
                                    <i class="fas fa-image"></i>
                                </div>
                                <div class="in">
                                    <div>Photos</div>
                                    <span class="badge badge-danger">10</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <div class="icon-box bg-secondary">
                                    <i class="fas fa-photo-video"></i>
                                </div>
                                <div class="in">
                                    <div>Videos</div>
                                    <span class="text-muted">None</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <div class="icon-box bg-danger">
                                    <i class="fas fa-music"></i>
                                </div>
                                <div class="in">
                                    <div>Music</div>
                                </div>
                            </div>
                        </li>


                    </ul>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel">
                    <ul class="listview image-listview">
                        <li>
                            <div class="item">
                                <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="image" />
                                <div class="in">
                                    <div>Edward Lindgren</div>
                                    <span class="text-muted">Designer</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="image" />
                                <div class="in">
                                    <div>Emelda Scandroot</div>
                                    <span class="badge badge-primary">3</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="image" />
                                <div class="in">
                                    <div>Henry Bove</div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="image" />
                                <div class="in">
                                    <div>Henry Bove</div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="image" />
                                <div class="in">
                                    <div>Henry Bove</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> -->
<?= $this->endSection(); ?>