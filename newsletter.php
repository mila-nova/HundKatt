<!DOCTYPE html>
<html lang="sv">

<head>
    <!-- Charset -->
    <meta charset="UTF-8">    
    <!-- Primary Meta Tags -->
    <meta name="robots" content="noindex">
    <title>Skogås Hund & Katt: Nyhetsbrev</title>
    <meta name="title" content="Skogås Hund & Katt: Nyhetsbrev">
    <meta name="description" content="Hos Skogås Hund & Katt hittar du över 30 olika märken av djurfoder, ett stort sortiment leksaker och godis, tillbehör och skötsel för dina husdjur. 
        Du är välkommen att prenumerera på vårt nyhetsbrev.">
    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Skogås Hund & Katt: Nyhetsbrev">
    <meta property="og:description" content="Hos Skogås Hund & Katt hittar du över 30 olika märken av djurfoder, ett stort sortiment leksaker och godis, tillbehör och skötsel för dina husdjur. 
        Du är välkommen att prenumerera på vårt nyhetsbrev.">
    <!-- Twitter -->
    <meta property="twitter:title" content="Skogås Hund & Katt: Nyhetsbrev">
    <meta property="twitter:description" content="Hos Skogås Hund & Katt hittar du över 30 olika märken av djurfoder, ett stort sortiment leksaker och godis, tillbehör och skötsel för dina husdjur. 
        Du är välkommen att prenumerera på vårt nyhetsbrev.">

<?php $page = 'newsletter'; include("includes/header.php");?>

        <main>
            <!-- MAIN CONTENT -->
            <div class="wrapper-main mt-0 border-top-0 bg-white">
                <!-- Breadcrumbs -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" class="text-info home-icon h5"><i
                                    class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item">Nyhetsbrev</li>
                    </ol>
                </nav>
                <!-- end Breadcrumbs -->
                <div class="container">
                    <article>
                        <h1>Skogås Hund & Katt Nyhetsbrev</h1>
                        <p>Du är välkommen att prenumerera på vårt nyhetsbrev. Fyll i din epost adress i fältet nedan så
                            missar du inte någon av våra kampanjer och erbjudanden!</p>
                    </article>

                    <!-- subscribe input -->
                    <div class="form-container">
                        <form aria-label="Type your e-mail" method="post"
                            action="http://admin.getanewsletter.com/api/subscription/add/">
                            <div class="input-group mb-3">
                                <input id="id_email" name="email" type="email" class="form-control form-field-required"
                                    placeholder="Skriv in ditt email" required="required"
                                    aria-label="Recipient's e-mail" aria-required="true">
                                <!-- hidden inputs                                  -->
                                <input aria-hidden="true" type="hidden" name="newsletter" value="tsrgdB96uRoW"
                                    id="id_newsletter">
                                <input aria-hidden="true" type="hidden" name="api_key" value="4UeRNPAEI1qH"
                                    id="id_api_key">
                                <input aria-hidden="true" type="hidden" name="next_url" id="id_next_url">
                                <!-- end hidden inputs                 -->
                                <div class="input-group-append">
                                    <button type="submit" name="form-submit" class="btn btn-info" id="form-submit"
                                        value="submit">Skicka</button>
                                </div>
                            </div>
                    </div><!-- End newsletter div -->
                    <!-- End subscribe input -->

                    <section>
                        <h2 class="h5">Hos Skogås Hund & Katt hittar du:</h2>
                        <ul class="fa-ul">
                            <li><span class="fa-li"><i class="fas fa-paw"></i></span>över 30 olika märken av
                                djurfoder
                            </li>
                            <li><span class="fa-li"><i class="fas fa-paw"></i></span>ett stort sortiment leksaker
                                och
                                godis</li>
                            <li><span class="fa-li"><i class="fas fa-paw"></i></span>tillbehör och skötsel för din
                                husdjur</li>
                        </ul>
                    </section>
                </div><!-- End of container -->

        </main><!-- MAIN CONTENT END -->

<?php include("includes/banners.php");?> 

<?php include("includes/footer.php");?>        