<style>
      .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
      }

      .title-card-lg {
            text-align: center;
            font-weight: 700;
            font-size: 19px;
      }

      .card-desc-sm {
            text-align: justify;
            font-weight: 500;
            font-size: 13px;
            letter-spacing: 0.5px;
      }

      .card-text-sm {
            text-align: center !important;
            font-weight: 700;
            font-size: 11px;
      }

      .btn-outline-primary {
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 1px;
      }

      .bg-dark {
            color: white;
      }

      .filterDiv {
            /* float: left; */
            width: 30%;
            border: 1px solid lightgray;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            display: none;
      }

      .show {
            display: block;
      }

      /* Style the buttons */
      .btn-pr {
            border: 1px solid #4f3682;
            outline: none;
            border-radius: 10px;
            padding: 12px 16px;
            background-color: white;
            cursor: pointer;
      }

      .btn-pr:hover {
            background-color: #7350bb;
            color: white;
            border: 1px solid #7350bb;
      }

      .btn-pr.active {
            background-color: #4f3682;
            color: white;
      }

      .bdr-1 {
            border-radius: 10px;
      }

      .flex {
            display: flex;
            gap: 50px;
      }

      @media (max-width: 992px) {
            .flex {
                  display: block;
            }

            .filterDiv {
                  /* float: left; */
                  width: 100%
            }
      }
</style>
<div class="spacer" style="margin-top:65px"></div>
<div class="spacer" style="margin-top:100px"></div>
<section class="one">
      <div class="container col-10">
            <div class="spacer" style="margin-top: 100px;"></div>
            <h4 class="title"> Portofolio dan Projek </h4>
            <div class="spacer" style="margin-top: 5vw;"></div>
            <div id="myBtnContainer">
                  <button class="btn-pr active" onclick="filterSelection('all')"> Show All</button>
                  <button class="btn-pr" onclick="filterSelection('management')"> Management</button>
                  <button class="btn-pr" onclick="filterSelection('technology')"> Technology</button>
            </div>
            <div class="spacer" style="margin-top: 2vw;"></div>

            <div class="flex">
                  <div class="filterDiv technology card-project">
                        <div class="spacer" style="margin-top: 2vw;"></div>
                        <h6 class="title-card-lg">Aplikasi Big Data Inflasi Bank Indonesia DIY</h6>
                        <div class="spacer" style="margin-top: 1vw;"></div>
                        <img class="center bdr-1" style="width:100%" src="<?= base_url('assets/img/bigdata-bi-400x300.jpg') ?>" alt="">
                        <div class="spacer" style="margin-top: 1vw;"></div>

                        <p class="card-desc-sm">Aplikasi pengelolaan data & monitoring inflasi di Daerah Istimewa Yogyakarta yang dikembangkan Bank Indonesia guna meningkatkan mutu pelayanan.</p>
                        <p class="card-text-sm">Technology</p>

                  </div>
                  <div class="filterDiv management card-project">
                        <div class="spacer" style="margin-top: 2vw;"></div>
                        <h6 class="title-card-lg">Bimtek Pemasaran Digital Marketing</h6>
                        <div class="spacer" style="margin-top: 1vw;"></div>
                        <img class="center bdr-1" style="width:100%;height:200px" src="<?= base_url('assets/img/design_grafis_1.png') ?>" alt="">
                        <div class="spacer" style="margin-top: 1vw;"></div>

                        <p class="card-desc-sm">Kegiatan digital marketing menjadi hal yang tidak boleh terlupakan, apalagi bagi UMKM untuk memasarkan produk atau jasanya</p>
                        <p class="card-text-sm">Management</p>

                  </div>
                  <div class="filterDiv technology card-project">
                        <div class="spacer" style="margin-top: 2vw;"></div>
                        <h6 class="title-card-lg">E-Office Universitas Islam Indonesia</h6>
                        <div class="spacer" style="margin-top: 1vw;"></div>
                        <img class="center bdr-1" style="width:100%" src="<?= base_url('assets/img/e-office-uii-400x300.jpg') ?>" alt="">
                        <div class="spacer" style="margin-top: 1vw;"></div>

                        <p class="card-desc-sm">Jasa informasi berbasis telepon, pencarian informasi atas dasar balas
                              jasa atau kontrak dan jasa kliping berita, dan lain-lain.</p>
                        <p class="card-text-sm">Technology</p>

                  </div>
            </div>




      </div>
</section>

<script>
      filterSelection("all")

      function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("filterDiv");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
                  w3RemoveClass(x[i], "show");
                  if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
      }

      function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                  if (arr1.indexOf(arr2[i]) == -1) {
                        element.className += " " + arr2[i];
                  }
            }
      }

      function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                  while (arr1.indexOf(arr2[i]) > -1) {
                        arr1.splice(arr1.indexOf(arr2[i]), 1);
                  }
            }
            element.className = arr1.join(" ");
      }

      // Add active class to the current button (highlight it)
      var btnContainer = document.getElementById("myBtnContainer");
      var btns = btnContainer.getElementsByClassName("btn-pr");
      for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                  var current = document.getElementsByClassName("active");
                  current[0].className = current[0].className.replace(" active", "");
                  this.className += " active";
            });
      }
</script>