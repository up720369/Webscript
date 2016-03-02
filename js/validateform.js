/**
 * Created by JamesTaylor on 26/02/2016.
 */
function validateForm() {

    if (document.myForm.name.value == "") {
        alert("Please provide your name!");
        document.myForm.name.focus();
        return false;
    }
    if (document.myForm.Pass.value == "") {
        alert("Please provide your Password!");
        document.myForm.Pass.focus();
        return false;
    }
}