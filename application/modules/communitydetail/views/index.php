<style type="text/css">
    .container {
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
        font-style: normal;
        font-weight: normal;
        font-size: 1.125rem;
        line-height: 1.375rem;
    }

    .description p {
        white-space: pre-line;
        font-family: 'Fira Sans', sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 1.125rem;
        line-height: 1.375rem;
        margin: 0 auto;
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

    @media (min-width: 992px) {
        .container {
            width: 70.313rem !important;
        }

        .description p {
            width: 62.016rem;
        }

        .description {
            width: 62.016rem;
        }
    }
</style>
<div class="container">
    <h1 class="title-page fw-bold color-primary text-center"><?php echo $data->title; ?></h1>
    <div class="card mx-auto">
        <div class="card-body">
            <h1 class="title text-center fw-bold mx-auto"><?php echo $community->caption_about; ?></h1>
            <p class="description mx-auto text-center">
                <?php echo $data->about; ?>
            </p>
        </div>
    </div>
    <div class="card mx-auto">
        <div class="card-body">
            <h1 class="title text-center fw-bold mx-auto"><?php echo $community->caption_leadership; ?></h1>
            <div class="description mx-auto text-center">
                <?php echo $this->markdown->parse($data->leadership); ?>
            </div>
        </div>
    </div>
    <div class="card mx-auto">
        <div class="card-body">
            <h1 class="title text-center fw-bold mx-auto"><?php echo $community->caption_socmed; ?></h1>
            <a class="color-primary" href="<?php echo $data->social_media_link; ?>">
                <u class="color-primary">
                    <p class="description mx-auto text-center color-primary">
                        <?php echo $data->social_media_name; ?>
                    </p>
                </u>
            </a>
        </div>
    </div>
</div>