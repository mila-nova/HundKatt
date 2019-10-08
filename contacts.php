<!DOCTYPE html>
<html lang="sv">

<head>
    <!-- Charset -->
    <meta charset="UTF-8">
    <!-- Primary Meta Tags -->
    <meta name="robots" content="noindex">
    <title>Skogås Hund & Katt: Kontakta oss</title>
    <meta name="title" content="Skogås Hund & Katt: Kontakta oss">
    <meta name="description" content="Hos Skogås Hund & Katt hittar du över 30 olika märken av djurfoder, ett stort sortiment leksaker och godis, tillbehör och skötsel för dina husdjur. 
        Du är välkommen att skicka ett meddelande till os om du har några frågor eller besöka oss I Skogås Centrum.">
    <!-- Open Graph / Facebook -->
    <meta property="og:title" content="Skogås Hund & Katt: Kontakta oss">
    <meta property="og:description" content="Hos Skogås Hund & Katt hittar du över 30 olika märken av djurfoder, ett stort sortiment leksaker och godis, tillbehör och skötsel för dina husdjur. 
        Du är välkommen att skicka ett meddelande till os om du har några frågor eller besöka oss I Skogås Centrum.">
    <!-- Twitter -->
    <meta property="twitter:title" content="Skogås Hund & Katt: Kontakta oss">
    <meta property="twitter:description" content="Hos Skogås Hund & Katt hittar du över 30 olika märken av djurfoder, ett stort sortiment leksaker och godis, tillbehör och skötsel för dina husdjur. 
        Du är välkommen att skicka ett meddelande till os om du har några frågor eller besöka oss I Skogås Centrum.">
 
<?php $page = 'contacts'; include("includes/header.php");?> 

        <main>
            <!-- MAIN CONTENT -->
            <div class="wrapper-main mt-0 border-top-0 bg-white">
                <!-- Breadcrumbs -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" class="text-info home-icon h5"><i
                                    class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item">Kontakter</li>
                    </ol>
                </nav>
                <!-- end Breadcrumbs -->
                <div class="container">
                    <article>
                        <h1>Kontakta Oss</h1>
                        <p>Du är välkommen att skicka ett meddelande till os om du har några frågor eller besöka oss I
                            Skogås Centrum.</p>
                    </article>

                    <div class="row">
                        <div class="form-container col-12 col-lg-6">
                            <!-- Form Container -->
                            <!--my form adjusted for aria devices according to bootstrap documentation for accessibility devices -->
                            <!-- my form passed tests for aria accessibility -->
                            <!-- NB!!! form fields added for learning purposes!!! -->
                            <form id="main-contact-form" class="contact-form mr-lg-4" method="post"
                                aria-label="Contact information" action="thanks.php">
                                <div class="form-group">
                                    <label class="form-control-label text-info h5" for="fname">Namn<span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="fname" class="form-control form-field-required"
                                        name="yourname" placeholder="Skriv in ditt namn" required="required"
                                        aria-required="true">
                                </div><!-- End form-group -->
                                <div class="form-group">
                                    <label class="form-control-label text-info h5" for="femail">Emejl<span
                                            class="text-danger">*</span></label>
                                    <input type="email" id="femail" class="form-control form-field-required"
                                        name="email" placeholder="Skriv in ditt email" required="required"
                                        aria-required="true">
                                </div><!-- End form-group -->
                                <div class="form-group">
                                    <!-- Personnummer and post code stay for learning purposes -->
                                    <label class="form-control-label text-info h5" for="fpnummer">Personnummer<span
                                            class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <!-- I am using function for getting input value -->
                                        <input type="text" id="fpnummer" oninput="pnummerValidate()"
                                            class="form-control form-field-required" name="personnummer" 
                                            placeholder="ÅÅÅÅMMDDXXXX" required="required" aria-required="true"
                                            pattern="^(((20)((0[0-9])|(1[0-1])))|(([1][^0-8])?\d{2}))((0[1-9])|1[0-2])((0[1-9])|(2[0-9])|(3[01]))[-]?\d{4}$">
                                        <div class="input-group-append">
                                            <button type="button" data-toggle="tooltip" data-trigger="hover"
                                                data-animation="true" class="input-group-text bg-info text-white"
                                                title="Skriv personnummer enligt ÅÅÅÅMMDDXXXX eller ÅÅÅÅMMDD-XXXX.">?</button>
                                            <!-- End input-group-text -->
                                        </div><!-- end input group append -->
                                    </div><!-- End input group -->
                                    <small class="form-text text-muted">Vi delar aldrig dina personuppgifter</small>
                                <small>NB: Personnummer presenteras endast för inlärningsändamål</small>
                                </div><!-- End form-group -->
                                <div class="form-group">
                                    <label class="form-control-label text-info h5" for="fpostnumber">Postnummer<span
                                            class="text-danger">*</span></label>
                                    <!-- Here instead im just using pattern attribute -->
                                    <div class="input-group">
                                        <input type="text" id="fpostnumber" class="form-control form-field-required"
                                            name="yourpostnumber" placeholder="123 45"
                                            pattern="^(\d\d\d \d\d|\d\d\d\d\d)$" required="required"
                                            aria-required="true">
                                        <div class="input-group-append">
                                            <button type="button" data-toggle="tooltip" data-trigger="hover"
                                                data-animation="true" class="input-group-text bg-info text-white"
                                                title="Skriv postnummer enligt 123 45 eller 12345">?</button>
                                            <!-- End input-group-text -->
                                        </div><!-- end input group append -->
                                    </div><!-- End input group -->
                                </div> <!-- End form-group -->
                                <div class="form-group">
                                    <label class="form-control-label text-info h5" for="fcity">Stad</label>
                                    <input type="text" id="fcity" class="form-control" name="yourcity"
                                        placeholder="Skriv in din stad">
                                </div> <!-- End form-group -->
                                <div class="form-group">
                                    <label class="form-control-label text-info h5" for="fmessage">Meddelande<span
                                            class="text-danger">*</span></label>
                                    <textarea id="fmessage" class="form-control form-field-required" name="yourmessage"
                                        placeholder="Skriv in ditt meddelande" required="required"
                                        aria-required="true"></textarea>
                                </div> <!-- End form-group -->
                                <!-- Goggle recaptcha can be added here -->
                                <div class="form-submit-container mb-4">
                                    <button type="submit" name="form-submit" class="btn btn-info" id="form-submit"
                                        value="submit">Skicka</button>
                                </div><!-- End form-submit-container -->
                            </form>
                        </div><!-- end of Form Container -->
                        <!-- info and map div -->
                        <div class="col-12 col-lg-6">
                            <!-- Adress -->
                            <address class="adress">
                                <h3 class="m-0">Besöksadress</h3>
                                <p class="m-0">Skogås Centrum <br>
                                    Skogåsplan 9<br>
                                    14240 Skogås</p>
                            </address>
                            <section>
                                <h3 class="m-0">Öppettider</h3>
                                <p class="m-0">Mån-fre 11:00–18:00<br> Lör 11:00–15:00</p>
                                <p class="mb-2">Söndagar och helgdagar stängt</p>
                            </section>
                            <!-- Phone and email -->
                            <div class="contacts-footer mb-2">
                                <span class="footer-phone d-block h5 m-0"><i
                                        class="fas fa-phone-square"></i>&nbsp;<a class="text-secondary" href="tel:+468-7718050">08-7718050</a></span>
                                <a class="footer-mail d-block text-secondary"
                                    href="mailto:&#105;&#110;&#102;&#111;&#064;&#115;&#107;&#111;&#103;&#097;&#115;&#104;&#117;&#110;&#100;&#107;&#097;&#116;&#116;&#046;&#115;&#101;">&#105;&#110;&#102;&#111;&#064;&#115;&#107;&#111;&#103;&#097;&#115;&#104;&#117;&#110;&#100;&#107;&#097;&#116;&#116;&#046;&#115;&#101;</a>
                            </div><!-- End of phone and email -->
                            <h3>Hitta till Oss:</h3>
                            <div class="pb-3">
                            <div class="map-responsive">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2041.8919022067482!2d18.151105416282963!3d59.217821927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465f7be26d8433eb%3A0x76d0dc8443109ab1!2sSkog%C3%A5s+Dogs+%26+Cats!5e0!3m2!1sen!2sse!4v1559119554579!5m2!1sen!2sse"
                                    width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div><!-- end map-responsive -->
                        </div> <!-- end padding -->
                        </div>
                        <!-- end of info and map -->
                    </div><!-- end of row -->
                </div><!-- End of container -->
            </div><!-- End wrapper-main -->

        </main><!-- MAIN CONTENT END -->

<?php include("includes/footer.php");?>        