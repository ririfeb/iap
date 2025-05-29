

    <div class="jumbotron" id="home">
      <div class="container">
        <div class="text-center">
          <img src="<?= base_url(); ?>assets/img/profile3.png" class="rounded-circle img-thumbnail">
          <h1 class="display-4">Riri Febriani</h1>
          <h3 class="lead">Student | Visual | Art</h3>
        </div>
      </div>
    </div>

    <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/11.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Lahir di Kp.Dalam 22 februari 2004.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/22.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Sekolah Dasar di SDN 22 V Koto Kp.Dalam dan Sekolah Menengah Pertama di MTsN 03 Padang Pariaman.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/33.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Sekolah Menengah Atas di MAN Kota pariaman dengan Jurusan MIPA dan Lulus di Tahun 2022.</p>
              </div>
            </div>
          </div>   
        </div>

        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/44.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Kuliah di Universitas Islam Negeri Imam Bonjol Padang pada angkatan 2022.</p>
              </div>
            </div>
          </div> 
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/5.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Fakultas Sains dan Teknologi dengan Program Studi Sistem Informasi.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>assets/img/thumbs/66.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Di waktu luang, saya senang memasak, menikmati alunan musik, dan tenggelam dalam cerita novel. Hitam adalah warna yang paling saya sukai.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Contact -->
    <section class="contact bg-light" id="contact">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Contact</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card bg-primary text-white mb-4 text-center">
              <div class="card-body">
                <h5 class="card-title">Contact Me</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            
            <ul class="list-group mb-4">
              <li class="list-group-item"><h3>Location</h3></li>
              <li class="list-group-item">My Home</li>
              <li class="list-group-item">Kp.Dalam Kenagarian</li>
              <li class="list-group-item">West Sumatera, Indonesia</li>
            </ul>
          </div>

          <div class="col-lg-6">
            
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-primary">Send Message</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>
