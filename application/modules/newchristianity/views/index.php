<style type="text/css">
    .card {
        border: none !important;
        border-radius: 1.875rem;
    }

    .title {
        font-weight: 600;
        font-size: 4.688rem;
        line-height: 4.438rem;
        margin-top: 4.688rem;
        padding-bottom: 2rem;
    }

    .content p {
        white-space: pre-line;
        font-family: 'Fira Sans', sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 1.5rem;
        line-height: 2.125rem;
        text-align: center;
        margin: 0 auto;
        padding-bottom: 2rem;
    }

    .content {
        margin-top: 3rem;
        margin-bottom: 4.688rem;
    }

    @media (min-width: 992px) {
        .content p {
            width: 49.063rem;
        }

        .card {
            width: 70.25rem;
        }

        .title {
            width: 28.625rem;
        }
    }
</style>
<div class="container">
    <div class="card mx-auto">
        <div class="card-body">
            <h1 class="title text-center color-primary fw-bold mx-auto">
                <?php echo $datas->title; ?>
            </h1>
            <div class="content mx-auto text-center">
                <?php echo $this->markdown->parse($datas->description); ?>
            </div>
        </div>
    </div>
</div>