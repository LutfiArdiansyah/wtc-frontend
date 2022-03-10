<style type="text/css">
    .card {
        border: none !important;
        width: 70.25rem;
        border-radius: 1.875rem;
    }

    .title {
        width: 28.625rem;
        font-weight: 600;
        font-size: 4.688rem;
        line-height: 4.438rem;
        margin-top: 4.688rem;
        padding-bottom: 2rem;
    }

    .content p {
        white-space: pre-line;
        font-family: 'Fira Sans', sans-serif;
        width: 49.063rem;
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