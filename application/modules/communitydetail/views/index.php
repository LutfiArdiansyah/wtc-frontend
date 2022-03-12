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
    <h1 class="title-page fw-bold color-primary text-center"><?php echo $data[0]->title; ?></h1>
    <div class="card mx-auto">
        <div class="card-body">
            <h1 class="title text-center fw-bold mx-auto">Tentang</h1>
            <p class="description mx-auto text-center">
                <?php echo $data[0]->about; ?>
            </p>
        </div>
    </div>
    <div class="card mx-auto">
        <div class="card-body">
            <h1 class="title text-center fw-bold mx-auto">Kepemimpinan</h1>
            <p class="description mx-auto text-center">
                <?php echo $this->markdown->parse($data[0]->leadership); ?>
            </p>
        </div>
    </div>
    <div class="card mx-auto">
        <div class="card-body">
            <h1 class="title text-center fw-bold mx-auto">Sosial Media</h1>
            <a class="color-primary" href="<?php echo $data[0]->social_media_link; ?>">
                <u class="color-primary">
                    <p class="description mx-auto text-center color-primary">
                        <?php echo $data[0]->social_media_name; ?>
                    </p>
                </u>
            </a>
        </div>
    </div>
</div>