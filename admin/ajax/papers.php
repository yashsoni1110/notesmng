<?php
require('../inc/db_config.php');
require('../inc/essentials.php');
adminLogin();

if (isset($_POST['add_papers'])) {
    $frm_data = filteration($_POST);

    $img_r = uploadPDF($_FILES['pdf'], PAPERS_FOLDER);

    if ($img_r == 'inv_pdf') {

        echo $img_r;
    } else if ($img_r == 'inv_size') {
        echo $img_r;
    } else if ($img_r == 'upd_failed') {
        echo $img_r;
    } else {
        $q = "INSERT INTO `papers`( `pdf`,`subject`,`course`, `year`) VALUES (?,?,?,?)";
        $values = [$img_r, $frm_data['subject'],$frm_data['course'], $frm_data['year']];
        $res = insert($q, $values, 'ssss');
        echo $res;
    }
}

if (isset($_POST['get_papers'])) {
   
    $res = selectAll('papers');
    

    $i = 1;
    $path = PAPERS_IMG_PATH;
    while ($row = mysqli_fetch_assoc($res)) {


        echo <<<data
        <tr class='align-middle'>
        <td>$i</td>
        <td  ><i class="bi bi-filetype-pdf "></i></td>
        <td>$row[subject]</td>
        <td>$row[course]</td>
        <td>$row[year]</td>
        <td>
        <button type="button" onclick="rem_papers($row[id])" class=" btn btn-danger btn-sm shadow-none">
        <i class="bi bi-trash"></i> Delete
        </button>
        </td>
        </tr>
        data;
        $i++;
    }
}

if (isset($_POST['rem_papers'])) {
    $frm_data = filteration($_POST);
    $values = [$frm_data['rem_papers']];

 
        $pre_q = "SELECT * FROM `papers` WHERE `id`=?";
    $res = select($pre_q, $values, 'i');
    $img = mysqli_fetch_assoc($res);


    if (deleteImage($img['pdf'], PAPERS_FOLDER)) {
        $q = "DELETE FROM `papers` WHERE `id`=?";
        $res = delete($q, $values, 'i');
        echo $res;
        } else {
            echo 0;
            
        }
       

  

    
}
