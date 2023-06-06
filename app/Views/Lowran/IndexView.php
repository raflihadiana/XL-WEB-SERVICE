<?= $this->extend('_Layouts/IndexView') ?>

<?= $this->section('content') ?>
<div class="page-heading">
          <div class="page-title">
            <div class="row">
              <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>DataTable jQuery</h3>
                <p class="text-subtitle text-muted">
                  Powerful interactive tables with datatables (jQuery required).
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
                <h5 class="card-title">Engpar Database</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive datatable-minimal">
                  <table class="table" id="dt">
                    <thead>
                      <tr>
                        <th>Tower ID NE</th>
                        <th>Site Name</th>
                        <th>Long</th>
                        <th>Lat</th>
                        <th>Priority</th>
                        <th>Tower ID FE</th>
                        <th>Site Name</th>
                        <th>Long</th>
                        <th>Lat</th>
                        <th>Priority</th>
                        <th>BA Desain</th>
                        <th>BA Design Status</th>
                        <th>PAG Link</th>
                        <th>Link Name</th>
                        <th>City Design</th>
                        <th>City Dominan</th>
                        <th>Status Design</th>
                        <th>Span Seq</th>
                        <th>Plan Ring</th>
                        <th>Type Design</th>
                        <th>FLP</th>
                        <th>Plan Distance (Km)</th>
                        <th>X-C</th>
                        <th>Status Design_xc</th>
                        <th>Syncron Own</th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
          </section>
          <!-- Basic Tables end -->
        </div>
<?= $this->endSection() ?>