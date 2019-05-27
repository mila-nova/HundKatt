console.log("im linked!"); // This is just for testing and can be removed. Checked if my JS file is properly linked

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