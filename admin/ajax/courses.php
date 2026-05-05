<?php
require('../inc/db_config.php');
require('../inc/essentials.php');
adminLogin();

if (isset($_POST['add_course'])) {
    $frm_data = filteration($_POST);
    $q = "INSERT INTO `courses` (`name`, `full_name`) VALUES (?,?)";
    $values = [$frm_data['course_name'], $frm_data['course_full_name']];
    $res = insert($q, $values, 'ss');
    echo $res;
}

if (isset($_POST['get_courses'])) {
    $res = selectAll('courses');
    $i = 1;
    while ($row = mysqli_fetch_assoc($res)) {
        echo <<<data
        <tr class='align-middle'>
            <td>$i</td>
            <td>$row[name]</td>
            <td>$row[full_name]</td>
            <td>
                <button type="button" onclick="rem_course($row[id])" class="btn btn-danger btn-sm shadow-none">
                    <i class="bi bi-trash"></i> Delete
                </button>
            </td>
        </tr>
        data;
        $i++;
    }
}

if (isset($_POST['rem_course'])) {
    $frm_data = filteration($_POST);
    
    // 1. Get the course name first
    $res1 = select("SELECT `name` FROM `courses` WHERE `id`=?", [$frm_data['rem_course']], 'i');
    $course_data = mysqli_fetch_assoc($res1);
    $course_name = $course_data['name'];

    // 2. Delete all notes and papers associated with this course name
    delete("DELETE FROM `notes` WHERE `course`=?", [$course_name], 's');
    delete("DELETE FROM `papers` WHERE `course`=?", [$course_name], 's');

    // 3. Finally delete the course itself
    $values = [$frm_data['rem_course']];
    $q = "DELETE FROM `courses` WHERE `id`=?";
    $res = delete($q, $values, 'i');
    echo $res;
}
?>
