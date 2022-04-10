 <div class="main-content">
     <section class="section">
         <div class="row">
             <div class="col-12 col-sm-12 col-lg-12">
                 <div class="card ">
                     <div class="card-header">
                         <h4>Home</h4>

                     </div>
                     <div class="card-body">
                         <div class="col text-center">
                             <h4>Hai, <?= $this->session->userdata('username') ?></h4>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="row ">
             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                 <div class="card">
                     <div class="card-statistic-4">
                         <div class="align-items-center justify-content-between">
                             <div class="row ">
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                     <div class="card-content">
                                         <h5 class="font-15">Paasien</h5>
                                         <h2 class="mb-3 font-18"><?= count($pasien) ?></h2>
                                     </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                     <div class="banner-img">
                                         <img src="assets/img/banner/patient.png" height="150" alt="">

                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                 <div class="card">
                     <div class="card-statistic-4">
                         <div class="align-items-center justify-content-between">
                             <div class="row ">
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                     <div class="card-content">
                                         <h5 class="font-15">Pegawai</h5>
                                         <h2 class="mb-3 font-18"><?= count($pegawai) ?></h2>
                                     </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                     <div class="banner-img">
                                         <img src="assets/img/banner/med-staff2.png" height="150" alt="">
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                 <div class="card">
                     <div class="card-statistic-4">
                         <div class="align-items-center justify-content-between">
                             <div class="row ">
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                     <div class="card-content">
                                         <h5 class="font-15">Rekam Medis Aktif</h5>
                                         <h2 class="mb-3 font-18"><?= count($rm_aktif) ?></h2>

                                     </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                     <div class="banner-img">
                                         <img src="assets/img/banner/med-record2.png" height="150" alt="">
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                 <div class="card">
                     <div class="card-statistic-4">
                         <div class="align-items-center justify-content-between">
                             <div class="row ">
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                     <div class="card-content">
                                         <h5 class="font-15">Rekam Medis Non-Aktif</h5>
                                         <h2 class="mb-3 font-18"><?= count($rm_non) ?></h2>
                                     </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                     <div class="banner-img">
                                         <img src="assets/img/banner/mdcrcd.png" height="150" alt="">
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>



     </section>

 </div>