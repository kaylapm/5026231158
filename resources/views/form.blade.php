<html>
  <head>
    <title>Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </head>
  <body>
    <div>
      <section class="container mt-5">
        <h2 class="text-center">Contact</h2>
        <form
          action="https://arumaya-residence.com/"
          method="get"
          id="frmdaftar"
          onsubmit="return validasi()"
        >
          <div class="row">
            <div class="form-group col-md-6">
              <label for="nrp">First Name:</label>
              <input
                type="text"
                class="form-control"
                id="namaDepan"
                placeholder="Masukkan First Name"
              />
            </div>
            <div class="form-group col-md-6">
              <label for="nrp">Last Name:</label>
              <input
                type="text"
                class="form-control"
                id="namaBelakang"
                placeholder="Masukkan Last Name"
              />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="nrp">Email:</label>
              <input
                type="text"
                class="form-control"
                id="email"
                placeholder="eg.firstlast@gmail.com"
              />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="type">Type Arumaya</label>
              <select class="form-control" id="type">
                <option selected>Choose</option>
                <option>Garden Villa</option>
                <option>Arumaya Residence</option>
                <option>Lake View</option>
                <option>Single Tower</option>
                <option>KABI House</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="type">Jenis Transaksi</label>
              <select class="form-control" id="jenis">
                <option selected>Choose</option>
                <option>Beli Unit</option>
                <option>Sewa Unit</option>
              </select>
            </div>
          </div>
          <div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="checkbox"
              />
              <label class="form-check-label" for="defaultCheck1">
                Setujui syarat dan ketentuan yang berlaku
              </label>
            </div>
          </div>
          <div class="form-group col-md-12 d-flex justify-content-center">
            <button type="submit" class="btn bg-primary w-10">
              Send Message
            </button>
          </div>
        </form>
      </section>
    </div>
    <script>
      function validasi() {
        var namaDepan = document.getElementById("namaDepan").value;
        var namaBelakang = document.getElementById("namaBelakang").value;
        var email = document.getElementById("email").value;
        var type = document.getElementById("type").value;
        var jenis = document.getElementById("jenis").value;
        var checkbox = document.getElementById("checkbox").checked;

        if (namaDepan.length == 0) {
          // alert("Nama harus diisi");
          swal("Pesan!", "Nama Depan harus diisi!", "error");
          document.getElementById("namaDepan").focus();
          return false; //defaultnya return true
        }

        if (namaBelakang.length == 0) {
          // alert("Nama harus diisi");
          swal("Pesan!", "Nama Belakang harus diisi!", "error");
          document.getElementById("namaBelakang").focus();
          return false; //defaultnya return true
        }

        if (!email.includes("@gmail.com")) {
          swal("Pesan!", "Email tidak valid!", "error");
          document.getElementById("email").focus();
          return false;
        }
        if (type == "Choose") {
          // alert("Nama harus diisi");
          swal("Pesan!", "Harus pilih type rumah!", "error");
          document.getElementById("type").focus();
          return false; //defaultnya return true
        }
        if (jenis == "Choose") {
          // alert("Nama harus diisi");
          swal("Pesan!", "Jenis transaksi harus dipilih!", "error");
          document.getElementById("jenis").focus();
          return false; //defaultnya return true
        }
        if (!checkbox) {
          // alert("Nama harus diisi");
          swal("Pesan!", "Harus setujui prasyarat!", "error");
          document.getElementById("checkbox").focus();
          return false; //defaultnya return true
        }

      }
    </script>
  </body>
</html>