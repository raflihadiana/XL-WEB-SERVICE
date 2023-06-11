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
                      LowRAN
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
                    <div class="btn-group mb-1">
                      
                          <div class="dropdown icon-right">
                            <button
                              class="btn btn-primary dropdown-toggle me-1"
                              type="button"
                              id="dropdownMenuButtonIconRight"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                            >
                              Action <i class="bi bi-error-circle ms-2"></i>
                            </button>
                            <div
                              class="dropdown-menu"
                              aria-labelledby="dropdownMenuButtonIconRight"
                            >
                              <a
                                class="dropdown-item justify-content-between"
                                href="#"
                                >Upload
                                <i class="bi bi-cloud-upload"></i
                              ></a>
                              <a
                                class="dropdown-item justify-content-between"
                                href="<?=site_url('lowran/export')?>"
                                >Export XLS <i class="bi bi-filetype-xls"></i
                              ></a>
                              <a
                                class="dropdown-item justify-content-between"
                                href="#"
                                >Export CSV <i class="bi bi-filetype-csv"></i
                              ></a>
                              <a
                                class="dropdown-item justify-content-between"
                                href="#"
                                >Export PDF <i class="bi bi-filetype-pdf"></i
                              ></a>
                              <a
                                class="dropdown-item justify-content-between"
                                href="#"
                                >Export All <i class="bi bi-files"></i
                              ></a>
                              <a
                                class="dropdown-item justify-content-between"
                                href="#"
                                >Download Sample <i class="bi bi-cloud-download"></i
                              ></a>
                            </div>
                          </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive-xl datatable-minimal">
                  <table class="table" id="dt">
                    <thead>
                      <tr>
                        <th class="text-center">Tower ID NE</th>
                        <th class="text-nowrap">Site Name</th>
                        <th class="text-center">Long</th>
                        <th class="text-center">Lat</th>
                        <th class="text-nowrap">Priority</th>
                        <th class="text-center">Tower ID FE</th>
                        <th class="text-nowrap">Site Name</th>
                        <th class="text-center">Long</th>
                        <th class="text-center">Lat</th>
                        <th class="text-nowrap">Priority</th>
                        <th class="text-nowrap">BA Desain</th>
                        <th class="text-nowrap">BA Design Status</th>
                        <th class="text-nowrap">PAG Link</th>
                        <th class="text-center">Link Name</th>
                        <th class="text-center">City Design</th>
                        <th class="text-center">City Dominan</th>
                        <th class="text-nowrap">Status Design</th>
                        <th class="text-center">Span Seq</th>
                        <th class="text-nowrap">Plan Ring</th>
                        <th class="text-nowrap">Type Design</th>
                        <th class="text-nowrap">FLP</th>
                        <th class="text-nowrap">Plan Distance (Km)</th>
                        <th class="text-nowrap">X-C</th>
                        <th class="text-nowrap">Status Design_xc</th>
                        <th class="text-nowrap">Syncron Own</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($lowran as $row) : ?>
                        <tr>
                          <td class="text-nowrap"><?= $row->tower_id_ne ?></td>
                          <td class="text-nowrap"><?= $row->site_name ?></td>
                          <td class="text-nowrap"><?= $row->long ?></td>
                          <td class="text-nowrap"><?= $row->lat ?></td>
                          <td class="text-nowrap"><?= $row->priority ?></td>
                          <td class="text-nowrap"><?= $row->tower_id_fe ?></td>
                          <td class="text-nowrap"><?= $row->site_name_nd ?></td>
                          <td class="text-nowrap"><?= $row->long_nd ?></td>
                          <td class="text-nowrap"><?= $row->lat_nd ?></td>
                          <td class="text-nowrap"><?= $row->priority_nd ?></td>
                          <td class="text-nowrap"><?= $row->ba_desain ?></td>
                          <td class="text-nowrap"><?= $row->ba_design_status ?></td>
                          <td class="text-nowrap"><?= $row->pag_link ?></td>
                          <td class="text-nowrap"><?= $row->link_name ?></td>
                          <td class="text-nowrap"><?= $row->city_design ?></td>
                          <td class="text-nowrap"><?= $row->city_dominan ?></td>
                          <td class="text-nowrap"><?= $row->status_design ?></td>
                          <td class="text-nowrap"><?= $row->span_seq ?></td>
                          <td class="text-nowrap"><?= $row->plan_ring ?></td>
                          <td class="text-nowrap"><?= $row->type_design ?></td>
                          <td class="text-nowrap"><?= $row->flp ?></td>
                          <td class="text-nowrap"><?= $row->plan_distance_km ?></td>
                          <td class="text-nowrap"><?= $row->x_c ?></td>
                          <td class="text-nowrap"><?= $row->status_design_xc ?></td>
                          <td class="text-nowrap"><?= $row->syncron_own ?></td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
          <!-- Basic Tables end -->
        </div>
<?= $this->endSection() ?>