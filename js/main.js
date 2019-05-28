// tooltip toggle
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

// simple function to validate personnummer with regular expression
function pnummerValidate() {
    // First i target input for validating
    let x = document.querySelector("#fpnummer");
    // Then i target the input value
    let pnummer = x.value;
    // Then i create regular expression variable
    let pnummerRegex = /^(((20)((0[0-9])|(1[0-1])))|(([1][^0-8])?\d{2}))((0[1-9])|1[0-2])((0[1-9])|(2[0-9])|(3[01]))[-]?\d{4}$/;
    // I get the result of comparing input against my regular expression. I get a boolean value
    let validationResult = pnummerRegex.test(pnummer);

    // if validation result is true = it corresponds with my regex
    if (validationResult == true) {
        // I remove class with error
        x.classList.remove('is-invalid');
        // I add class which indicates success
        x.classList.add('is-valid');
        console.log('yes!!!'); // This is just for testing and can be removed
    }
    // If class with error doesn't exist already
    else if (!x.classList.contains('is-invalid')) {
        // I add class which indicated error
        x.classList.add('is-invalid');
        console.log('rip'); // This is just for testing and can be removed
    }

}

// Back to top paw Jquery
// do not run on small screens
if ($(window).width() > 576) { 
    
    $(document).ready(function(){
        $(window).scroll(function () {
               if ($(this).scrollTop() > 50) {
                   $('#back-to-top').fadeIn();
               } else {
                   $('#back-to-top').fadeOut();
               }
           });
           // scroll body to 0px on click
           $('#back-to-top').click(function () {
               $('#back-to-top').tooltip('hide');
               $('body,html').animate({
                   scrollTop: 0
               }, 800);
               return false;
           });
           
           $('#back-to-top').tooltip('show');
    
    });
    
}

// dynamic copyright year
$(function () {
    $("#footer").load("footer.html", function () {
        $(function () {
            thisyear = new Date().getFullYear();
            $('.currentyear').text(thisyear);
           });
    });
});



