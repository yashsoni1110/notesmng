<?php
require('../inc/db_config.php');
require('../inc/essentials.php');
adminLogin();

if (isset($_POST['add_notes'])) {
    $frm_data = filteration($_POST);

    $img_r = uploadPDF($_FILES['pdf'], NOTES_FOLDER);

    if ($img_r == 'inv_pdf') {

        echo $img_r;
    } else if ($img_r == 'inv_size') {
        echo $img_r;
    } else if ($img_r == 'upd_failed') {
        echo $img_r;
    } else {
        $q = "INSERT INTO `notes`( `pdf`,`name`,`course`, `description`) VALUES (?,?,?,?)";
        $values = [$img_r, $frm_data['name'],$frm_data['course'], $frm_data['desc']];
        $res = insert($q, $values, 'ssss');
        echo $res;
    }
}

if (isset($_POST['get_notes'])) {
    $res = selectAll('notes');
    $i = 1;
    $path = NOTES_IMG_PATH;
    while ($row = mysqli_fetch_assoc($res)) {


        echo <<<data
        <tr class='align-middle'>
        <td>$i</td>
        <td  ><i class="bi bi-filetype-pdf "></i></td>
        <td>$row[name]</td>
        <td>$row[course]</td>
        <td>$row[description]</td>
        <td>
        <button type="button" onclick="rem_notes($row[id])" class=" btn btn-danger btn-sm shadow-none">
        <i class="bi bi-trash"></i> Delete
        </button>
        </td>
        </tr>
        data;
        $i++;
    }
}

if (isset($_POST['rem_notes'])) {
    $frm_data = filteration($_POST);
    $values = [$frm_data['rem_notes']];

 
        $pre_q = "SELECT * FROM `notes` WHERE `id`=?";
    $res = select($pre_q, $values, 'i');
    $img = mysqli_fetch_assoc($res);


    if (deleteImage($img['pdf'], NOTES_FOLDER)) {
        $q = "DELETE FROM `notes` WHERE `id`=?";
        $res = delete($q, $values, 'i');
        echo $res;
        } else {
            echo 0;
            
        }
       

  

    
}
