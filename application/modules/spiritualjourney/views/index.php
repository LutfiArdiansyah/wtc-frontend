<style type="text/css">
    .title {
        font-size: 4.688rem;
    }

    div .active div.title-parallax {
        height: 4rem;
        background-color: var(--bs-primary);
        position: absolute;
        top: 0;
        z-index: 99;
    }

    div .active p.title-parallax {
        color: white !important;
        font-family: 'Fira Sans', sans-serif;
        font-style: normal;
        font-weight: 400;
        font-size: 21px;
        line-height: 46px;
        align-items: center;
    }

    div .active .title-content {
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

    div .active .div-description-content {
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
        /* margin-top: 46.5px; */
        font-family: 'Fira Sans', sans-serif;
        font-style: normal;
        font-weight: 400;
        font-size: 24px;
        line-height: 34px;
        /* or 140% */
        text-align: center;
        white-space: pre-line;
    }

    #carousel {}

    #carousel img {}

    div .container {}

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
        color: var(--bs-primary);
        border-bottom: 1px solid;
        display: inline-block;
        margin-bottom: 15px;
    }


    #carousel {
        width: calc(100vw - 15px);
        height: 100vh;
    }

    #carousel img {
        width: calc(100vw - 15px);
        height: 100vh;
    }

    div .active div.title-parallax {
        width: 99.1vw;
    }

    @media (min-width: 992px) {
        .line {
            width: 1160px;
        }

        .description {
            width: 1067px;
        }

        div .container {
            max-width: 69.141rem !important;
        }
    }

    .show-container {
        border: 1px solid black;
    }
</style>
<h1 class="fw-bold text-center color-primary title"><?php echo $spiritual_journey->title; ?></h1>
<p class="description text-center mx-auto">
    <?php echo $spiritual_journey->description; ?>
</p>
<br />
<br />



<div id="carousel" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true">
    <div class="carousel-inner">
        <?php
        $index = 0;
        foreach ($datas as $key => $value) { ?>
            <?php
            if ($index === 0) { ?>
                <div class="carousel-item active">
                    <img src="<?php echo STRAPI_URL . $value->banner->url; ?>" class="d-block w-100" alt="...">
                    <div class="title-parallax pt-2" style="">
                        <div class="container">
                            <p class="title-parallax"><?php echo $spiritual_journey->title; ?> / <?php echo $value->title; ?></p>
                            <p class="title-content"><?php echo $value->title; ?></p>
                            <div class="div-description-content row">
                                <div class="col-5">
                                    <p class="description-content"><?php echo $value->description_1; ?></p>
                                </div>
                                <div class="col-5">
                                    <p class="description-content"><?php echo $value->description_2; ?></p>
                                </div>
                            </div>
                            <div class="footer-hr">
                                <p class="badge-number mx-auto"><?php echo $index + 1; ?></p>
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="carousel-item">
                    <img src="<?php echo STRAPI_URL . $value->banner->url; ?>" class="d-block w-100" alt="...">
                    <div class="title-parallax pt-2" style="">
                        <div class="container">
                            <p class="title-parallax"><?php echo $spiritual_journey->title; ?> / <?php echo $value->title; ?></p>
                            <p class="title-content"><?php echo $value->title; ?></p>
                            <div class="div-description-content row">
                                <div class="col-5">
                                    <p class="description-content"><?php echo $value->description_1; ?></p>
                                </div>
                                <div class="col-5">
                                    <p class="description-content"><?php echo $value->description_2; ?></p>
                                </div>
                            </div>
                            <div class="footer-hr">
                                <p class="badge-number mx-auto"><?php echo $index + 1; ?></p>
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php
            $index++;
        } ?>
    </div>
</div>

<script>
    $(document).ready(function() {
        var isScrolled = false

        $("#carousel").bind('mousewheel', function(event) {
            if (!isScrolled) {
                if (event.originalEvent.wheelDelta >= 0) {
                    $(this).carousel('prev');
                } else {
                    $(this).carousel('next');
                }
                isScrolled = true

                setTimeout(() => {
                    if (isScrolled) {
                        isScrolled = false
                    }
                }, 2000)
            }

            return false;
        });
    });
</script>