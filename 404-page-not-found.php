<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <!-- Primary Meta Tags -->
    <meta name="robots" content="noindex">
    <title>Skogås Hund & Katt: Oppps!</title>

    <?php include("includes/header.php");?>

        <main>
            <!-- MAIN CONTENT -->
            <div class="wrapper-main mt-0 border-top-0 bg-white">
                <!-- Breadcrumbs -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" class="text-info home-icon h5"><i
                                    class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item">Error code: 404</li>
                    </ol>
                </nav>
                <!-- end Breadcrumbs -->
                <div class="container">
                    <div class="row">
                        <!-- Error message -->
                        <div class="col-12 col-md-5">
                            <article>
                                <h1>Meooow!</h1>
                                <p>Det verkar att vi inte kan hitta sida du söker.</p>
                                <p>Kanske är du här för att:</p>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-paw"></i></span>sidan har flyttats</li>
                                    <li><span class="fa-li"><i class="fas fa-paw"></i></span>sidan finns inte längre
                                    </li>
                                    <li><span class="fa-li"><i class="fas fa-paw"></i></span>katter stal sidan</li>
                                </ul>
                                <p>Vill du kanske återvända till hemsidan och försöka igen?</p>
                                <a class="btn btn-info mb-3" href="index.php" role="button">Tillbaka hem</a>
                            </article>
                        </div>
                        <!-- Error image -->
                        <div class="p-1 pr-lg-5 col-12 col-md-7">
                            <picture>
                                <source srcset="img/404.svg" type="image/svg+xml" />
                                <img class="d-block w-100" srcset="img/404@2x.png 1200w, img/404.png 600w"
                                    src="img/404.png" alt="Illustration of cats trying to fix broken website"
                                    sizes="(max-width: 600px) 100vw, 600px" />
                            </picture>
                        </div><!-- End error image -->

                    </div><!-- End of row -->
                </div><!-- End of error container -->

            </div><!-- End wrapper-main -->
        </main><!-- MAIN CONTENT END -->

    <?php include("includes/footer.php");?>         