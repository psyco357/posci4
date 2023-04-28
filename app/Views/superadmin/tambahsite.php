<?= $this->extend('template/superadmin/layoutsuper'); ?>

<?= $this->section('super'); ?>

<section class="content-header" style="padding:1px">
    <div class="container-fluid">

        <!-- cek apakah session success ter-set -->
        <?php if (session()->getFlashdata('success')) : ?>
            <!-- tampilkan alert -->
            <div class="alert alert-success" role="alert"><i class="fas fa-check"></i>
                <?php echo session()->getFlashdata('success'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('error')) : ?>
            <!-- tampilkan alert -->
            <div class="alert alert-danger" role="alert"><i class="fas fa-exclamation-triangle"></i>
                <?php echo session()->getFlashdata('error'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('errors')) : ?>
            <div class="alert alert-danger" role="alert">
                <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                    <i class="fas fa-exclamation-triangle"></i> <?= esc($error) ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button><br>
                <?php endforeach ?>
            </div>
        <?php endif ?>
        <div class="row">
            <div class="col-sm-6">
                <h3>Data <?= $menu[0]['title'] ?></h3>
            </div>
            <div class="col-sm-6 py-2">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('/super') ?>">Home</a></li>
                    <li class="breadcrumb-item active">Data <?= $menu[0]['title'] ?></li>
                </ol>
            </div>
        </div>

    </div><!-- /.container-fluid -->
</section>
<div class="card">
    <div class="card-header">
        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahdata"><i class="fas fa-plus"></i> Tambah <?= $menu[0]['title'] ?></button>
    </div>
    <?= $this->include('superadmin/modal/modaltambah') ?>
    <!-- /.card-header -->

    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead class="text-center">
                <tr>
                    <th>Nomer</th>
                    <th>Judul</th>
                    <th>Link Method</th>
                    <th>Icon</th>
                    <th>Nomer Urut</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                <?php $no = 1;
                foreach ($isi as $data) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['title'] ?></td>
                        <td><?= $data['link'] ?></td>
                        <td><?= $data['icon'] ?></td>
                        <td> <?= $data['urut'] ?></td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editdata<?= $data['kdmenu'] ?>" type="submit"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?= $data['kdmenu'] ?>" type="submit"><i class="fas fa-trash-restore"></i></button>
                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ditail<?= $data['kdmenu'] ?>" type="submit"><i class="fas fa-info"></i></button>
                        </td>
                    </tr>

                <?php endforeach ?>
            </tbody>


        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
<?= $this->endSection() ?>