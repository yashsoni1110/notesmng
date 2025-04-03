
let notes_s_form = document.getElementById('notes_s_form');


notes_s_form.addEventListener('submit', function(e) {
e.preventDefault();
add_notes();
});
function add_notes() {
let data = new FormData();
data.append('name', notes_s_form.elements['notes_name'].value);
data.append('course', notes_s_form.elements['notes_course'].value);
data.append('pdf', notes_s_form.elements['notes_pdf'].files[0]);
data.append('desc', notes_s_form.elements['notes_desc'].value);

data.append('add_notes', '');

let xhr = new XMLHttpRequest();
xhr.open("POST", "ajax/notes.php", true);

xhr.onload = function() {
    var myModal = document.getElementById('notes-s');
    var modal = bootstrap.Modal.getInstance(myModal);
    modal.hide();


    if (this.responseText == 'inv_pdf') {
        alert('error', 'Only pdf are allowed!');
        
    }
        else if(this.responseText == 'inv_size'){
        alert('error', 'pdf should be less than 35MB!');
    }
    // else if(this.responseText == ){
    //     alert('error', 'pdf should be less than 35MB!');
    // }
    else if(this.responseText == 'upd_failed'){
        alert('error', 'Notes upload failed!');
    }
    else if(this.responseText == 1){
        alert('success','New Notes added!');
        notes_s_form.reset();
        get_notes();
    }
else{
    alert('error','pdf should be less than 35MB!!');
}

}
xhr.send(data);

}

function get_notes() {
let xhr = new XMLHttpRequest();
xhr.open("POST", "ajax/notes.php", true);
xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');


xhr.onload = function() {
    document.getElementById('notes-data').innerHTML = this.responseText;

}
xhr.send('get_notes');


}





function rem_notes(val)
{
let xhr = new XMLHttpRequest();
xhr.open("POST", "ajax/notes.php", true);
xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');


xhr.onload = function() {
    if (this.responseText == 1) {
        alert('success', 'Notes removed!');
        get_notes();

    }

    else {
        alert('error', 'Server Down!');
    }


}
xhr.send('rem_notes='+val);


}

window.onload = function() {
get_notes();



}
