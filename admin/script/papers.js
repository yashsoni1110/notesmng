
let papers_s_form = document.getElementById('papers_s_form');


papers_s_form.addEventListener('submit', function(e) {
e.preventDefault();
add_papers();
});
function add_papers() {
let data = new FormData();
data.append('subject', papers_s_form.elements['papers_subject'].value);
data.append('course', papers_s_form.elements['papers_course'].value);
data.append('pdf', papers_s_form.elements['papers_pdf'].files[0]);
data.append('year', papers_s_form.elements['papers_year'].value);

data.append('add_papers', '');

let xhr = new XMLHttpRequest();
xhr.open("POST", "ajax/papers.php", true);

xhr.onload = function() {
    var myModal = document.getElementById('papers-s');
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
        alert('error', 'Paper upload failed!');
    }
    else if(this.responseTesxt ==1) {
        alert('success','New Paper added!');
        papers_s_form.reset();
        get_papers();
    }
    else{
        alert('error','pdf should be less than 35MB!!');
    }


}
xhr.send(data);

}

function get_papers() {
let xhr = new XMLHttpRequest();
xhr.open("POST", "ajax/papers.php", true);
xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');


xhr.onload = function() {
    document.getElementById('papers-data').innerHTML = this.responseText;

}
xhr.send('get_papers');


}





function rem_papers(val)
{
let xhr = new XMLHttpRequest();
xhr.open("POST", "ajax/papers.php", true);
xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');


xhr.onload = function() {
    if (this.responseText == 1) {
        alert('success', 'paper removed!');
        get_papers();

    }

    else {
        alert('error', 'Server Down!');
    }


}
xhr.send('rem_papers='+val);


}

window.onload = function() {
get_papers();



}
