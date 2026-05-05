<?php
require('../inc/db_config.php');
require('../inc/essentials.php');
adminLogin();

if (isset($_POST['add_branch'])) {
    $frm_data = filteration($_POST);
    $q = "INSERT INTO `branches` (`name`) VALUES (?)";
    $values = [$frm_data['branch_name']];
    $res = insert($q, $values, 's');
    echo $res;
}

if (isset($_POST['get_branches'])) {
    $res = selectAll('branches');
    $i = 1;
    while ($row = mysqli_fetch_assoc($res)) {
        echo <<<data
        <tr class='align-middle'>
            <td>$i</td>
            <td>$row[name]</td>
            <td>
                <button type="button" onclick="rem_branch($row[id])" class="btn btn-danger btn-sm shadow-none">
                    <i class="bi bi-trash"></i> Delete
                </button>
            </td>
        </tr>
        data;
        $i++;
    }
}

if (isset($_POST['rem_branch'])) {
    $frm_data = filteration($_POST);
    $values = [$frm_data['rem_branch']];
    $q = "DELETE FROM `branches` WHERE `id`=?";
    $res = delete($q, $values, 'i');
    echo $res;
}
?>
