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

          <!-- Minimal jQuery Datatable start -->
          <section class="section">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Minimal jQuery Datatable</h5>
              </div>
              <div class="btn-group mb-1">
                <div class="dropdown">
                  <button
                    class="btn btn-primary dropdown-toggle me-1"
                    type="button"
                    id="dropdownMenuButtonIcon"
                    data-bs-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="bi bi-error-circle me-50"></i> Import Excel
                  </button>
                  <div
                    class="dropdown-menu"
                    aria-labelledby="dropdownMenuButtonIcon"
                  >
                    <a class="dropdown-item" href="#"
                      ><i class="bi bi-file-earmark-spreadsheet me-50"></i> Download Sample </a
                    >
                    <a class="dropdown-item" href="#"
                      ><i class="bi bi-cloud-upload-fill me-50"></i> Upload File</a
                    >
                  </div>
                </div>
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
                    <tbody>
                      <?php if ($dataLowran){
                        $no = 1;
                        foreach($dataLowran as $key => $value){ ?>
                            <tr>
                              <td><?=$no++?></td>
                              <td><?= $key['tower_id_ne'] ?></td>
                              <td><?= $key['site_name'] ?></td>
                              <td><?= $key['long'] ?></td>
                              <td><?= $key['lat'] ?></td>
                              <td><?= $key['priority'] ?></td>
                              <td><?= $key['tower_id_fe'] ?></td>
                              <td><?= $key['site_name'] ?></td>
                              <td><?= $key['long'] ?></td>
                              <td><?= $key['lat'] ?></td>
                              <td><?= $key['priority'] ?></td>
                              <td><?= $key['ba_desain'] ?></td>
                              <td><?= $key['ba_design_status'] ?></td>
                              <td><?= $key['pag_link'] ?></td>
                              <td><?= $key['link_name'] ?></td>
                              <td><?= $key['city_design'] ?></td>
                              <td><?= $key['city_dominan'] ?></td>
                              <td><?= $key['status_design'] ?></td>
                              <td><?= $key['span_seq'] ?></td>
                              <td><?= $key['plan_ring'] ?></td>
                              <td><?= $key['type_design'] ?></td>
                              <td><?= $key['flp'] ?></td>
                              <td><?= $key['plan_distance_km'] ?></td>
                              <td><?= $key['x_c'] ?></td>
                              <td><?= $key['status_design_xc'] ?></td>
                              <td><?= $key['syncron_own'] ?></td>
                            </tr>
                        <?php 
                        }  
                      }else{ ?>

                      <tr> 
                        <td colspan="26"> Tidak ada data </td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
          <!-- Minimal jQuery Datatable end -->
</div>

<script>
    let table1 = document.querySelector('#dt');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>