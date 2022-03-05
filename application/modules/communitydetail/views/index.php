<style type="text/css">
    .container {
        width: 70.313rem !important;
    }

    .title-page {
        margin-top: 2.156rem;
        font-size: 4.688rem;
        line-height: 2.875rem;
        margin-bottom: 3.156rem;
    }

    .description {
        white-space: pre-line;
        font-family: 'Fira Sans', sans-serif;
        width: 62.016rem;
        font-style: normal;
        font-weight: normal;
        font-size: 1.125rem;
        line-height: 1.375rem;
    }

    .card {
        border: none;
        margin-top: 2.156rem;
        border-radius: 0.938rem;
    }

    .title {
        font-style: normal;
        font-weight: 600;
        font-size: 2.578rem;
        line-height: 2.875rem;
    }

    a {
        color: var(--bs-primary) !important;
    }
</style>
<div class="container">
    <h1 class="title-page fw-bold color-primary text-center"><?php echo $data['title']; ?></h1>
    <div class="card mx-auto">
        <div class="card-body">
            <h1 class="title text-center fw-bold mx-auto">Tentang</h1>
            <p class="description mx-auto text-center">
                <?php //echo $article->content; 
                ?>
                Dibentuk untuk memberi makan kota dengan memenuhi kebutuhan akan makanan sehat. Untuk itu HOB mengembangkan sistem pertanian yang terintegrasi, terdiri dari pertanian sayuran dan buah-buahan organik dan hidroponik dengan Green House, juga perternakan ikan nila.
            </p>
        </div>
    </div>
    <div class="card mx-auto">
        <div class="card-body">
            <h1 class="title text-center fw-bold mx-auto">Kepemimpinan</h1>
            <p class="description mx-auto text-center">
                Pdt. Ir. Bebas Pinem sebagai Ketua Pengurus
            </p>
        </div>
    </div>
    <div class="card mx-auto">
        <div class="card-body">
            <h1 class="title text-center fw-bold mx-auto">Sosial Media</h1>
            <a class="color-primary" href="#">
                <u class="color-primary">
                    <p class="description mx-auto text-center color-primary">
                        Facebook Group
                    </p>
                </u>
            </a>
        </div>
    </div>
</div>