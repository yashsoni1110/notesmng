let course_s_form = document.getElementById('course_s_form');

course_s_form.addEventListener('submit', function (e) {
    e.preventDefault();
    add_course();
});

function add_course() {
    let data = new FormData();
    data.append('course_name', course_s_form.elements['course_name'].value);
    data.append('course_full_name', course_s_form.elements['course_full_name'].value);
    data.append('add_course', '');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/courses.php", true);

    xhr.onload = function () {
        var myModal = document.getElementById('course-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if (this.responseText.trim() == '1') {
            alert('success', 'New course added!');
            course_s_form.reset();
            get_courses();
        } else {
            alert('error', 'Server Down!');
        }
    }
    xhr.send(data);
}

function get_courses() {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/courses.php", true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        document.getElementById('course-data').innerHTML = this.responseText;
    }
    xhr.send('get_courses');
}

function rem_course(val) {
    if (confirm("Are you sure you want to delete this course?")) {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "ajax/courses.php", true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        xhr.onload = function () {
            if (this.responseText.trim() == '1') {
                alert('success', 'Course removed!');
                get_courses();
            } else {
                alert('error', 'Server Down!');
            }
        }
        xhr.send('rem_course=' + val);
    }
}

window.onload = function () {
    get_courses();
}
