function showForm()
{
    let numb = document.getElementById('select-form').value;
    if (numb === '1') {
        document.getElementById('login-form-2').style.display="none";
        document.getElementById('login-form-1').style.display="block";
    } else {
        document.getElementById('login-form-1').style.display="none";
        document.getElementById('login-form-2').style.display="block";

    }
}
