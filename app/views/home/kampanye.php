<section id="showcase">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
        <div class="carousel-item carousel-image-1 active">
            <div class="container">
            <div class="carousel-caption d-none d-sm-block text-right mb-5">
                <h1 class="display-3">DONATE ID</h1>
                <p class="lead">Mengakhiri kemiskinan di manapun dan dalam semua bentuk</p>
                <a href="#" class="btn btn-danger btn-lg">Donasi Sekarang</a>
            </div>
            </div>
        </div>

        <div class="carousel-item carousel-image-2">
            <div class="container">
            <div class="carousel-caption d-none d-sm-block mb-5">
                <h1 class="display-3">DONATE ID</h1>
                <p class="lead">DONATE ID telah bekerja untuk turut mengatasi kemiskinan dan ketidakadilan yang terjadi 
                di masyarakat di Indonesia sejak awal berdirinya pada tahun 2019 di Situbondo, Indonesia.</p>
                <a href="about.html" class="btn btn-primary btn-lg">Baca Selengkapnya</a>
            </div>
            </div>
        </div>

        <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
        <span class="carousel-control-prev-icon"></span>
        </a>

        <a href="#myCarousel" data-slide="next" class="carousel-control-next">
        <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</section>

<div class="bagian-konten p-t-20 p-b-20">
    <div class="title text-center">
        <h1>Kampanye</h1>
    </div>
    <div class="container">
        <div class="row">
        
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Mulai Kampanye Baru
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Buat Kampanye Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= BASEURL ?>/home/tambahKampanye" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nama Kampanye:</label>
                        <input type="text" name="nama_kampanye" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi Kampanye:</label>
                        <textarea name="deskripsi" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Target Kampanye:</label>
                        <input type="number" name="target" class="form-control">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
                </div>
                </form>
            </div>
        </div>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php foreach($data['kampanye'] as $kampanye): ?>
            <div class="col-md-12" style="margin-top: 10px;">
                <div class="card">
                    <div class="card-header">
                        <?= $kampanye['nama_kampanye']; ?>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                        <p><?= $kampanye['deskripsi']; ?></p>
                        <footer class="blockquote-footer">Started By: <?= $kampanye['username']; ?></footer>
                        </blockquote>

                        <?= $kampanye['tanggal_ditambahkan']; ?>

                        <hr>
                        <div class="form-group">
                            <label>Target:</label>
                            <br>IDR <?= $kampanye['target']; ?>
                        </div>

                        <div class="form-group">
                            <a href="<?= BASEURL; ?>/home/kampanyeDetail/<?= $kampanye['id_kampanye']; ?>">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>