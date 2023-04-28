<?= $this->extend('template/superadmin/layoutsuper'); ?>

<?= $this->section('super'); ?>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah <?= $menu[0]['title'] ?></h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('/super') ?>">Home</a></li>
                    <li class="breadcrumb-item active">Tambah <?= $menu[0]['title'] ?></li>
                </ol>
            </div>
        </div>

    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Tambah</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <?php echo form_open('super/addmenu'); ?>
                    <!-- <form role="form"> -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="judul">Judul Menu</label>
                            <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukan Judul Menu">
                        </div>
                        <div class="form-group">
                            <label for="submenu">Sub Menu</label>
                            <input type="text" class="form-control" name="submenu" id="submenu" placeholder="Masukan Sub Menu">
                        </div>
                        <div class="form-group">
                            <label for="link">URL</label>
                            <input type="text" class="form-control" name="link" id="link" placeholder="Masukan Link Action">
                        </div>
                        <div class="form-group">
                            <label for="icon">Icon</label>
                            <input type="text" class="form-control" name="icon" id="icon" placeholder="Masukan icon">
                        </div>
                        <div class="form-group">
                            <label for="warna">Warna Icon</label>
                            <input type="text" class="form-control" name="warna" id="warna" placeholder="Masukan Warna icon">
                        </div>
                        <div class="row">
                            <!-- select -->
                            <div class="form-group col-3">
                                <label>Pengguna</label>
                                <select class="form-control">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label>Aplikasi</label>
                                <select class="form-control">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label>Nomer Urut Menu</label>
                                <input type="text" class="form-control" name="urut" id="urut" placeholder="Masukan Nomer urut ">
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!-- </form> -->
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>