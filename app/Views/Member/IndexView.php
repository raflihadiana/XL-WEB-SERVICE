
<?= $this->extend('_Layouts/IndexView') ?>

<?= $this->section('content') ?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3><?= $title ?></h3>
                <p class="text-subtitle text-muted">For user to check they list</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="/<?= $url ?>"><?= $title ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $page ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <h4><?= $page ?></h4>
                    </div>
                    <div>
                        <a href="<?= site_url($url) ?>/form" class="btn btn-primary"><i class="bi bi-plus"></i> Tambah</a>
                    </div>
                </div>

            </div>
            <div class="card-body">
                <table class="table table-striped" id="example">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Level</th>
                            <th>Signed</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th width="80px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($getData as $row) : ?>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <?php
                                            if (is_object($row) && property_exists($row, 'member_foto')) {
                                                ?>
                                                <img src="<?= uploaded($row->member_foto, 'member') ?>" alt="" width="60px">
                                                <?php
                                            } else {
                                                echo "Error: Invalid row or missing 'member_foto' property.";
                                            }
                                            ?>
                                        <div class="ms-2">
                                            <h6 class="mb-0">
                                                <?php
                                                    if (is_object($row) && property_exists($row, 'member_nama')) {
                                                        echo $row->member_nama;
                                                    } else {
                                                        echo "Invalid row or missing 'member_nama' property";
                                                    }
                                                ?>
                                            </h6>
                                            <?php
                                                if (is_object($row) && property_exists($row, 'member_username')) {
                                                    echo '<span class="text-muted">' . $row->member_username . '</span>';
                                                } else {
                                                    // Handle the case when $row is not an object or does not have the 'member_username' property
                                                    echo '<span class="text-muted">Invalid row or missing member_username property</span>';
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </td>
                                <td><?= isset($row->member_level) ? $row->member_level : 'N/A' ?></td>
                                <td><?= isset($row->signed_at) ? $row->signed_at : 'N/A' ?></td>
                                <td><?= isset($row->member_status) ? statusMember($row->member_status) : 'N/A' ?></td>
                                <td><?= isset($row->created_at) ? $row->created_at : 'N/A' ?></td>
                                <td>
                                    <div class="btn-group mb-1">
                                        <div class="dropdown">
                                            <button class="btn btn-success dropdown-toggle me-1" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Aksi
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="<?= isset($row->id) ? site_url($url . '/form/' . $row->id) : '#' ?>">Ubah</a>
                                                <a class="dropdown-item" href="javascript:;" <?= isset($row->id) ? 'data-href="' . site_url($url . '/delete/' . $row->id) . '"' : '' ?> onclick="deleteData(this)">Hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>


<?= $this->endSection() ?>

<?= $this->section('style') ?>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script>
    let table1 = document.querySelector('#dt');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>
<?= $this->endSection() ?>