function showForm()
{
    let numb = document.getElementById('select-form').value;
    if (numb === '1') {
        document.getElementById('profile-form-2').style.display="none";
        document.getElementById('profile-form-1').style.display="table";
    } else {
        document.getElementById('profile-form-1').style.display="none";
        document.getElementById('profile-form-2').style.display="table";

    }
}
