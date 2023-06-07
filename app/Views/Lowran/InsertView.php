<?= $this->extend('_Layouts/IndexView') ?>

<?= $this->section('content') ?>
<div class="page-heading">
          <div class="page-title">
            <div class="row">
              <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Lower RAN DataTable</h3>
                <p class="text-subtitle text-muted">
                It allows users to easily monitor and manage the physical components of the network, optimize performance, and troubleshoot issues.
                </p>
              </div>
              <div class="col-12 col-md-6 order-md-2 order-first">
                <nav
                  aria-label="breadcrumb"
                  class="breadcrumb-header float-start float-lg-end"
                >
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.html">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      DataTable jQuery
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
          <!-- Basic Tables start -->
          <section class="section">
            <div class="card">
              <div class="card-header">
                <div class="d-flex align-items-right justify-content-between ">
                  <div>
                    <h5 class="card-title">Engpar Database</h5>
                  </div>
                  <div>
                    <a href="#" class="btn icon icon-left btn-primary"
                        ><i class="bi bi-file-earmark-plus"
                        <i data-feather="edit"></i> Tambah</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive datatable-minimal">
                </div>
              </div>
            </div>
          </section>
          <!-- Basic Tables end -->
        </div>
<?= $this->endSection() ?>