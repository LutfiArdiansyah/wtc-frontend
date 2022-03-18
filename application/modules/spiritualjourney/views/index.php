<style type="text/css">
    .title {
        font-size: 6.25rem;
    }

    div.title-parallax {
        width: 99.1vw;
        height: 5.375rem;
        background-color: var(--bs-primary);
        position: absolute;
        top: 0;
        z-index: 99;
    }

    p.title-parallax {
        color: white !important;
        font-family: 'Fira Sans', sans-serif;
        font-style: normal;
        font-weight: 400;
        font-size: 21px;
        line-height: 46px;
        align-items: center;
    }

    .title-content {
        position: absolute;
        top: 0;
        z-index: 99;
        padding-top: 35vh;
        font-style: normal;
        font-weight: 600;
        font-size: 75px;
        line-height: 46px;
        color: white;
        align-items: center;
    }

    .div-description-content {
        position: absolute;
        top: 0;
        z-index: 99;
        padding-top: 50vh;
    }

    .description-content {
        color: white;
        font-family: 'Fira Sans', sans-serif;
        font-style: normal;
        font-weight: 400;
        font-size: 21px;
        line-height: 31px;
    }

    .footer-hr {
        position: absolute;
        top: 0;
        z-index: 99;
        padding-top: 80vh;
    }

    .description {
        margin-top: 46.5px;
        font-family: 'Fira Sans', sans-serif;
        font-style: normal;
        font-weight: 400;
        font-size: 24px;
        line-height: 34px;
        /* or 140% */
        width: 1067px;
        text-align: center;
        white-space: pre-line;
    }

    #carousel {
        width: calc(100vw - 15px);
        height: 100vh;
    }

    #carousel img {
        width: calc(100vw - 15px);
        height: 100vh;
    }

    div .container {
        max-width: 69.141rem !important;
    }

    .badge-number {
        width: 86px;
        height: 86px;
        background-color: var(--bs-primary);
        color: white;
        border-radius: 50%;
        text-align: center;
        padding-top: 8px;
        font-weight: 700;
        font-size: 48px;
        display: inline-block;
    }

    .line {
        width: 1162px;
        color: var(--bs-primary);
        border-bottom: 1px solid;
        display: inline-block;
        margin-bottom: 15px;
    }
</style>
<h1 class="fw-bold text-center color-primary title">Spiritual Journey</h1>
<p class="description text-center mx-auto">
    <?php echo $description; ?>
</p>
<br />
<br />
<div id="carousel" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="http://wtc.a-aziz.tech:1337/uploads/7_01d87a7a9b.png" class="d-block w-100" alt="...">
            <div class="title-parallax pt-4" style="">
                <div class="container">
                    <p class="title-parallax">Spiritual Journey / Lahir Baru -></p>
                    <p class="title-content">Lahir Baru</p>
                    <div class="div-description-content row">
                        <div class="col-5">
                            <p class="description-content">Tanpa Kelahiran Baru seseorang tidak akan beroleh selamat. Keselamatan di dalam Kristus harus melewati proses Lahir Baru: Mengaku dosa, Meminta Pengampunan Dosa, Mengaku, Percaya Yesus, dan Menerima Yesus sebagai Juruselamat pribadi.</p>
                        </div>
                        <div class="col-5">
                            <p class="description-content">Kelahiran baru tidak bisa ditunda, sebab itu pastikan Anda sudah lahir baru. Anda percaya sudah diselamatkan dan memiliki hidup kekal di dalam Yesus. Anda sudah hidup sebagai manusia yang baru, yaitu dengan roh dan hati yang baru, menjadi pribadi yang taat Firman-Nya.</p>
                        </div>
                    </div>
                    <div class="footer-hr">
                        <p class="badge-number mx-auto">1</p>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="carousel-item active">
            <img src="http://wtc.a-aziz.tech:1337/uploads/5_34fa626da1.png" class="d-block w-100" alt="...">
            <div class="title-parallax pt-4" style="">
                <div class="container">
                    <p class="title-parallax">Spiritual Journey / Baptis -></p>
                    <p class="title-content">Baptis</p>
                    <div class="div-description-content row">
                        <div class="col-5">
                            <p class="description-content">Tanpa Kelahiran Baru seseorang tidak akan beroleh selamat. Keselamatan di dalam Kristus harus melewati proses Lahir Baru: Mengaku dosa, Meminta Pengampunan Dosa, Mengaku, Percaya Yesus, dan Menerima Yesus sebagai Juruselamat pribadi.</p>
                        </div>
                        <div class="col-5">
                            <p class="description-content">Kelahiran baru tidak bisa ditunda, sebab itu pastikan Anda sudah lahir baru. Anda percaya sudah diselamatkan dan memiliki hidup kekal di dalam Yesus. Anda sudah hidup sebagai manusia yang baru, yaitu dengan roh dan hati yang baru, menjadi pribadi yang taat Firman-Nya.</p>
                        </div>
                    </div>
                    <div class="footer-hr">
                        <p class="badge-number mx-auto">2</p>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="carousel-item">
            <img src="http://wtc.a-aziz.tech:1337/uploads/5_34fa626da1.png" class="d-block w-100" alt="...">
        </div> -->
    </div>
</div>