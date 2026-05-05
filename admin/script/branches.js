let branch_s_form = document.getElementById('branch_s_form');

branch_s_form.addEventListener('submit', function (e) {
    e.preventDefault();
    add_branch();
});

function add_branch() {
    let data = new FormData();
    data.append('branch_name', branch_s_form.elements['branch_name'].value);
    data.append('add_branch', '');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/branches.php", true);

    xhr.onload = function () {
        var myModal = document.getElementById('branch-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if (this.responseText.trim() == '1') {
            alert('success', 'New branch added!');
            branch_s_form.reset();
            get_branches();
        } else {
            alert('error', 'Server Down!');
        }
    }
    xhr.send(data);
}

function get_branches() {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/branches.php", true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        document.getElementById('branch-data').innerHTML = this.responseText;
    }
    xhr.send('get_branches');
}

function rem_branch(val) {
    if (confirm("Are you sure you want to delete this branch?")) {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/branches.php", true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        xhr.onload = function () {
            if (this.responseText.trim() == '1') {
                alert('success', 'Branch removed!');
                get_branches();
            } else {
                alert('error', 'Server Down!');
            }
        }
        xhr.send('rem_branch=' + val);
    }
}

window.onload = function () {
    get_branches();
}
