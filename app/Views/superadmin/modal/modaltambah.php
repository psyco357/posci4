<!-- Modal ADD -->
<div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <?php echo form_open('super/addmenu'); ?>
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
                        <select name="level" class="form-control">
                            <option>--Pilih--</option>
                            <?php foreach ($level as $lev) : ?>
                                <option value="<?= $lev['kdlevel'] ?>"><?= $lev['level'] ?></option>
                            <?php endforeach ?>

                        </select>
                    </div>
                    <div class="form-group col-3">
                        <label>Aplikasi</label>
                        <select name="app" class="form-control">
                            <?php foreach ($app as $lev) : ?>
                                <option value="<?= $lev['kdapp'] ?>"><?= $lev['namaapp'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label>Nomer Urut Menu</label>
                        <input type="text" class="form-control" name="urut" id="urut" placeholder="Masukan Nomer urut ">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>

<!-- Modal edit -->
<?php foreach ($isi as $data) : ?>
    <div class="modal fade" id="editdata<?= $data['kdmenu'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <?php echo form_open($data['linkedit'] . '/' . $data['kdmenu']); ?>
                    <div class="form-group">
                        <label for="judul">Judul Menu</label>
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukan Judul Menu" value="<?= $data['title'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="submenu">Sub Menu</label>
                        <input type="text" class="form-control" name="submenu" id="submenu" placeholder="Masukan Sub Menu" value="<?= $data['submenu'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="link">URL</label>
                        <input type="text" class="form-control" name="link" id="link" placeholder="Masukan Link Action" value="<?= $data['link'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <input type="text" class="form-control" name="icon" id="icon" placeholder="Masukan icon" value="<?= $data['icon'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="warna">Warna Icon</label>
                        <input type="text" class="form-control" name="warna" id="warna" placeholder="Masukan Warna icon" value="<?= $data['warna'] ?>">
                    </div>
                    <div class="row">
                        <!-- select -->
                        <div class="form-group col-3">
                            <label>Pengguna</label>
                            <select name="level" class="form-control">
                                <option>--Pilih--</option>
                                <?php foreach ($level as $lev) : ?>
                                    <option value="<?= $lev['kdlevel'] ?>" <?= $lev['kdlevel'] == $data['level'] ? 'selected' : '' ?>><?= $lev['level'] ?></option>
                                <?php endforeach ?>

                            </select>
                        </div>
                        <div class="form-group col-3">
                            <label>Aplikasi</label>
                            <select name="app" class="form-control">
                                <option>--Pilih--</option>
                                <?php foreach ($app as $lev) : ?>
                                    <option value="<?= $lev['kdapp'] ?>" <?= $lev['kdapp'] == $data['app'] ? 'selected' : '' ?>><?= $lev['namaapp'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label>Nomer Urut Menu</label>
                            <input type="text" class="form-control" name="urut" id="urut" placeholder="Masukan Nomer urut" value="<?= $data['urut'] ?>">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
<?php endforeach ?>

<!-- Modal ditail -->
<?php foreach ($isi as $data) : ?>
    <div class="modal fade" id="ditail<?= $data['kdmenu'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <?php echo form_open($data['linkedit'] . $data['kdmenu']); ?>

                    <div class="form-group">
                        <label for="judul">Judul Menu</label>
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukan Judul Menu" value="<?= $data['title'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="submenu">Sub Menu</label>
                        <input type="text" class="form-control" name="submenu" id="submenu" placeholder="Masukan Sub Menu" value="<?= $data['submenu'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="link">URL</label>
                        <input type="text" class="form-control" name="link" id="link" placeholder="Masukan Link Action" value="<?= $data['link'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="icon">Icon</label>
                        <input type="text" class="form-control" name="icon" id="icon" placeholder="Masukan icon" value="<?= $data['icon'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="warna">Warna Icon</label>
                        <input type="text" class="form-control" name="warna" id="warna" placeholder="Masukan Warna icon" value="<?= $data['warna'] ?>" readonly>
                    </div>
                    <div class="row">
                        <!-- select -->
                        <div class="form-group col-3">
                            <label>Pengguna</label>
                            <select name="level" class="form-control" disabled>
                                <option>--Pilih--</option>
                                <?php foreach ($level as $lev) : ?>
                                    <option value="<?= $lev['kdlevel'] ?>" <?= $lev['kdlevel'] == $data['level'] ? 'selected' : '' ?>><?= $lev['level'] ?></option>
                                <?php endforeach ?>

                            </select>
                        </div>
                        <div class="form-group col-3">
                            <label>Aplikasi</label>
                            <select name="app" class="form-control" disabled>
                                <option>--Pilih--</option>
                                <?php foreach ($app as $lev) : ?>
                                    <option value="<?= $lev['kdapp'] ?>" <?= $lev['kdapp'] == $data['app'] ? 'selected' : '' ?>><?= $lev['namaapp'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label>Nomer Urut Menu</label>
                            <input type="text" class="form-control" name="urut" id="urut" placeholder="Masukan Nomer urut" value="<?= $data['urut'] ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
<?php endforeach ?>

<!-- Modal hapus -->
<?php foreach ($isi as $data) : ?>
    <div class="modal fade" id="hapus<?= $data['kdmenu'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <?php echo form_open($data['linkhapus'] . $data['kdmenu']); ?>
                    <div class="form-group">
                        Apakah anda yakin akan menghapus Menu "<label><?= $data['title'] ?></label>"?
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
<?php endforeach ?>