<!--Page Title-->
<section class="page-title text-center" style="background-image:url(<?= base_url(); ?>assets/img/images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Team</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="welcome">home &nbsp;/</a>
                </li>
                <li>Team</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<section class="team-section section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
          <h3>DATA
            <span>TEAM</span>
          </h3>
          <p>Ayo Segera Daftarkan Team Kalian Sekarang Jugaa..</p>
        </div>
        <!-- Nav tabs -->
        <div class="tabs">
          <ul class="nav nav-tabs justify-content-center" id="teamTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="doctor-tab" data-toggle="tab" href="#doctor" role="tab" aria-controls="doctor" aria-selected="true">Futsal</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="event-planning-tab" data-toggle="tab" href="#event-planning" role="tab" aria-controls="event-planning" aria-selected="false">Badminton</a>
            </li>
          </ul>
        </div>
        <div class="tab-content" id="teamTab">
          <!--Start single tab content-->
          <div class="team-members tab-pane fade show active" id="doctor">
            <div class="row">
              <div class="col-lg justify-content-center">
                <!-- <div class="team-person text-center"> -->
                
                
                <?= $this->session->flashdata('pesan'); ?>
                <div class="card shadow-sm border-bottom-info">
                    <div class="card-header bg-white py-3">
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <h4 class="h5 align-middle m-0 font-weight-bold text-info">
                                    Data Registrasi Futsal
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Event</th>
                                    <th>Nama Team</th>
                                    <th>Jumlah Peserta</th>
                                    <th>Asal Sekolah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($registrasi) :
                                    $no = 1;
                                    foreach ($registrasi as $r) :
                                        ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $r['nama_event']; ?></td>
                                            <td><?= $r['nama_team']; ?></td>
                                            <td><?= $r['peserta']; ?></td>
                                            <td><?= $r['sekolah']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <tr>
                                        <td colspan="6" class="text-center">
                                            Data Kosong
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>


                <!-- </div> -->
              </div>
            </div>
          </div>
          <!--End single tab content-->
          <!--Start single tab content-->
          <div class="team-members tab-pane fade" id="event-planning">
            <div class="row">
              <div class="col-lg justify-content-center">
                
              <?= $this->session->flashdata('pesan'); ?>
              <div class="card shadow-sm border-bottom-info">
                  <div class="card-header bg-white py-3">
                      <div class="row">
                          <div class="col d-flex justify-content-center">
                              <h4 class="h5 align-middle m-0 font-weight-bold text-info">
                                  Data Registrasi Badminton
                              </h4>
                          </div>
                      </div>
                  </div>
                  <div class="table-responsive">
                      <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
                          <thead>
                              <tr>
                                  <th>No.</th>
                                  <th>Event</th>
                                  <th>Nama Team</th>
                                  <th>Jumlah Peserta</th>
                                  <th>Asal Sekolah</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php
                              if ($registrasi_badminton) :
                                  $no = 1;
                                  foreach ($registrasi_badminton as $r) :
                                      ?>
                                      <tr>
                                          <td><?= $no++; ?></td>
                                          <td><?= $r['nama_event']; ?></td>
                                          <td><?= $r['nama_team']; ?></td>
                                          <td><?= $r['peserta']; ?></td>
                                          <td><?= $r['sekolah']; ?></td>
                                      </tr>
                                  <?php endforeach; ?>
                              <?php else : ?>
                                  <tr>
                                      <td colspan="6" class="text-center">
                                          Data Kosong
                                      </td>
                                  </tr>
                              <?php endif; ?>
                          </tbody>
                      </table>
                  </div>
              </div>

            </div>
          </div>
          <!--End single tab content-->
        </div>
      </div>
    </div>
  </div>
</section>