<?= $this->extend('template/layoutadmin'); ?>

<?= $this->section('content'); ?>

<style>
    #map {
        height: 580px;
    }
</style>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Quick Example</h3>
                    </div>
                    <form>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="namaperusahaan">Email address</label>
                                <input type="text" class="form-control" name="namaperusahaan" id="namaperusahaan" placeholder="Enter email" value="<?= $profil->namaperusahaan ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">File input</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>

        <!-- /.card-footer -->
        <div id="map"></div>
    </div>
    <!-- /.card -->
</section>
<script>
    // var map = L.map('map').setView([51.505, -0.09], 13);
    var map = L.map('map');

    // Menambahkan kontrol lokasi
    L.control.locate({
        position: 'topleft',
        drawCircle: false,
        follow: true,
        setView: true
    }).addTo(map);

    navigator.geolocation.getCurrentPosition(function(location) {
        // Menetapkan tampilan peta ke lokasi saat ini
        map.setView([location.coords.latitude, location.coords.longitude], 13);
        console.log([location.coords.latitude, location.coords.longitude]);
        // Menambahkan marker pada koordinat tertentu
        var marker = L.marker([location.coords.latitude, location.coords.longitude]).addTo(map);

    });
    // var marker = L.marker([-6.2824919, 106.908737]).addTo(map);
    // var marker = L.marker([51.5, -0.09]).addTo(map);
    // L.control.locate().addTo(map);

    L.control.defaultExtent().addTo(map);

    L.Control.geocoder({
        position: 'topleft'
    }).addTo(map);



    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
</script>
<?= $this->endSection(); ?>