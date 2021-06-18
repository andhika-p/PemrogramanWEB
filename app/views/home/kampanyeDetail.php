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
            <div class="col-md-12" style="margin-top: 10px;">
                <div class="card">
                    <div class="card-header">
                        <?= $data['kampanye']['nama_kampanye']; ?> <?= $data['kampanye']['id_kampanye']; ?>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                        <p><?= $data['kampanye']['deskripsi']; ?></p>
                        <footer class="blockquote-footer">Started By: <?= $data['kampanye']['username']; ?></footer>
                        </blockquote>

                        <?= $data['kampanye']['tanggal_ditambahkan']; ?>

                        <hr>
                        <div class="form-group">
                            <label>Target:</label>
                            <br>IDR <?= $data['kampanye']['target']; ?>
                        </div>

                        <div class="form-group">
                            <label>Terkumpul:</label>
                            <?php if ($data['kampanye']['donasiTerkumpul'] != NULL) { ?>
                            <br>IDR <?= $data['kampanye']['donasiTerkumpul']; ?>
                            <?php } else { ?>
                            <br>0
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-12">
                <form action="<?= BASEURL ?>/home/donasiKampanye" method="POST">
                    <input type="hidden" name="id_kampanye" class="form-control" value="<?= $data['kampanye']['id_kampanye'];?>">

                    <div class="form-group">
                        Donasi Sekarang
                        <input type="number" name="donasi" class="form-control" placeholder="Jumlah Uang">
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Donasi Sekarang" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>