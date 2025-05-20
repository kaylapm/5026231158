<!DOCTYPE html>
<html>
  <head>
    <title>Frontend 5026231158</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Karla:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <style>
      body {
        background-image: url("gambar/backgroundfe.jpg");
        background-size: cover;
        background-position: center;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px 15px;
        font-family: "Karla", sans-serif;
      }

      .containers {
        max-width: 600px;
        width: 100%;
      }

      .containers-title{
       color: rgb(23, 54, 210);
       margin-bottom: 0px;
       font-weight: 500;
       font-size: 16px;
       line-height: 24px
      }

      .list {
        transition: 0.3s;
        border-radius: 30px;
        rgb(23, 54, 210);
      }

      .list:hover,
      .shop-box:hover,
      .icon:hover {
        transform: scale(1.02);
      }

      @media(max-width:768px){
        .singkat{overflow: hidden; white-space: nowrap;text-overflow: ellipsis; display: block; width: 100%;}
      }
    </style>
  </head>
  <body>
    <div class="containers text-center">
      <img src="gambar/kayla.jpg" alt="AC Milan Logo" width="100" class="mb-3 mt-3" />
      <div class="d-flex flex-row justify-content-center">
        <h4 style="size: 20px; font-weight: 700px; color: white;line-height: 30px;">
          Kayla Putri Maharani
        </h4>
      </div>
      <div class="d-flex flex-row justify-content-center">
        <h4 style="size: 20px; font-weight: 700px; color: white;line-height: 30px;">
          5026231158 | Pemograman Web C
        </h4>
        <div class="flex w-auto h-auto">
        </div>
      </div>
      <div class="d-flex flex-row justify-content-center">
        <a class="icon m-2" href="https://github.com/kaylapm/PBWC5026231158/tree/main/FEC5026231158" target="_blank">
          <img src="gambar/githublogo.png" style="height: 32px;" alt />
        </a>
      </div>

      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="links" role="tabpanel" aria-labelledby="links-tab">
          <!--Tugas pertama-->
          <a href="/pertama" class="w-100" style="text-decoration: none" target="_blank">
            <div class="bg-white list w-100 d-flex flex-row p-3 align-items-center justify-content-between" style="gap: 16px; margin-bottom: 20px; height: 70px;">
              <img src="pakadi.jpg" alt="gambar" style="width: 46px; height:46px" class="rounded-circle" />
              <h5 class="m-0 text-center containers-title">
                Tugas Pertama (Pak Adi, Its Online) | Di kelas
              </h5>
              <div class="actions" style="rgb(23, 54, 210)">⋮</div>
            </div>
          </a>

          <!--Tugas CSS-->
          <a href="/counter" class="w-100"style="text-decoration: none" target="_blank">
            <div class="bg-white list w-100 d-flex flex-row p-3 align-items-center justify-content-between" style="gap: 16px; height: 70px;">
              <img src="gambar/counter.png" alt="gambar" style="width: 46px; height:46px" class="rounded-circle" />
              <h5 class="m-0 text-center containers-title">
                Tugas Counter CSS
              </h5>
              <div class="actions" style="rgb(23, 54, 210)">⋮</div>
            </div>
          </a>

          <!--Tugas CSS-->
          <a href="/animation" class="w-100" style="text-decoration: none" target="_blank">
            <div class="bg-white list w-100 d-flex flex-row p-3 align-items-center justify-content-between" style="gap: 16px; margin-top: 20px; height: 70px;">
              <img src="gambar/animation.png" alt="gambar" style="width: 46px; height:46px" class="rounded-circle" />
              <h5 class="m-0 text-center containers-title">
                Tugas Animation CSS
              </h5>
              <div class="actions" style="rgb(23, 54, 210)">⋮</div>
            </div>
          </a>

        <!--Tugas Layouting-->
          <a href="/latihan" class="w-100" style="text-decoration: none" target="_blank">
            <div class="bg-white list w-100 d-flex flex-row p-3 align-items-center justify-content-between" style="gap: 16px; margin-top: 20px; height: 70px;">
            <img src="gambar/framedua.png" alt="gambar" style="width: 46px; height:46px" class="rounded-circle" />
              <h5 class="m-0 text-center containers-title">
                Tugas Layouting ITS TV
              </h5>
              <div class="actions" style="rgb(23, 54, 210)">⋮</div>
            </div>
          </a>

          <!--Tugas Linktree-->
          <a href="/linktree" class="w-100" style="text-decoration: none" target="_blank">
            <div class="bg-white list w-100 d-flex flex-row p-3 align-items-center justify-content-between" style="gap: 16px; margin-top: 20px; height: 70px;">
              <img src="gambar/acmilanlogo.jpg" alt="gambar" style="width: 46px" class="rounded-circle" />
              <h5 class="m-0 text-center containers-title">
                Tugas Linktree AC Milan
              </h5>
              <div class="actions" style="rgb(23, 54, 210)">⋮</div>
            </div>
          </a>

        <!--Danantara-->
          <a href="/danantara" class="w-100" style="text-decoration: none" target="_blank">
            <div class="bg-white list w-100 d-flex flex-row p-3 align-items-center justify-content-between" style="gap: 16px; margin-top: 20px; height: 70px;">
            <img src="assets/img/president-prabowo.png" alt="gambar" style="width: 46px; height:46px" class="rounded-circle" />
              <h5 class="m-0 text-center containers-title">
                Danantara | Di kelas
              </h5>
              <div class="actions" style="rgb(23, 54, 210)">⋮</div>
            </div>
          </a>

          <!--ETS-->
          <a href="/ets" class="w-100" style="text-decoration: none" target="_blank">
            <div class="bg-white list w-100 d-flex flex-row p-3 align-items-center justify-content-between" style="gap: 16px; margin-top: 20px; height: 70px;">
            <img src="gambar/arumayalogo.png" alt="gambar" style="width: 46px; height:46px" class="rounded-circle" />
              <h5 class="m-0 text-center containers-title">
                ETS
              </h5>
              <div class="actions" style="rgb(23, 54, 210)">⋮</div>
            </div>
          </a>

        <!--Template Bootstrap-->
          <a href="/bootstrap1" class="w-100" style="text-decoration: none" target="_blank">
            <div class="bg-white list w-100 d-flex flex-row p-3 align-items-center justify-content-between" style="gap: 16px; margin-top: 20px; height: 70px;">
            <img src="gambar/bootstraplogo.png" alt="gambar" style="width: 46px; height:46px" class="rounded-circle" />
              <h5 class="m-0 text-center containers-title">
                Bootstrap 1 (Template Bootstrap) | Di kelas
              </h5>
              <div class="actions" style="rgb(23, 54, 210)">⋮</div>
            </div>
          </a>

        <!--Container-->
          <a href="/bootstrap2" class="w-100" style="text-decoration: none" target="_blank">
            <div class="bg-white list w-100 d-flex flex-row p-3 align-items-center justify-content-between" style="gap: 16px; margin-top: 20px; height: 70px;">
            <img src="gambar/bootstraplogo.png" alt="gambar" style="width: 46px; height:46px" class="rounded-circle" />
              <h5 class="m-0 text-center containers-title">
                Bootstrap 2 (Container) | Di kelas
              </h5>
              <div class="actions" style="rgb(23, 54, 210)">⋮</div>
            </div>
          </a>

        <!--Form penjumlahan-->
          <a href="/js1" class="w-100" style="text-decoration: none" target="_blank">
            <div class="bg-white list w-100 d-flex flex-row p-3 align-items-center justify-content-between" style="gap: 16px; margin-top: 20px; height: 70px;">
            <img src="gambar/jslogo.png" alt="gambar" style="width: 46px; height:46px" class="rounded-circle" />
              <h5 class="m-0 text-center containers-title">
                Javascript 1 (Form Bilangan) | Di kelas
              </h5>
              <div class="actions" style="rgb(23, 54, 210)">⋮</div>
            </div>
          </a>

        <!--Form Nama, NRP-->
          <a href="/js2" class="w-100" style="text-decoration: none" target="_blank">
            <div class="bg-white list w-100 d-flex flex-row p-3 align-items-center justify-content-between" style="gap: 16px; margin-top: 20px; height: 70px;">
            <img src="gambar/jslogo.png" alt="gambar" style="width: 46px; height:46px" class="rounded-circle" />
              <h5 class="m-0 text-center containers-title">
                Javascript 2 (Form Nama, NRP) | Di kelas
              </h5>
              <div class="actions" style="rgb(23, 54, 210)">⋮</div>
            </div>
          </a>

        <!--link ke Sembilan-->
          <a href="/form" class="w-100" style="text-decoration: none" target="_blank">
            <div class="bg-white list w-100 d-flex flex-row p-3 align-items-center justify-content-between" style="gap: 16px; margin-top: 20px; height: 70px;">
            <img src="gambar/form.png" alt="gambar" style="width: 46px; height:46px" class="rounded-circle" />
              <h5 class="m-0 text-center containers-title">
                Content 5 (Form ETS) | Tugas persiapan ETS
              </h5>
              <div class="actions" style="rgb(23, 54, 210)">⋮</div>
            </div>
          </a>
        </div>
      </div>
  </body>
</html>
