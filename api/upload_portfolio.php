<?php include_once "../base.php";

$id=$_GET['id'];
$editIntro=$_GET['intro'];

if (isset($id)) {
    if (isset($editIntro)) {
        $Portfolio->save(['intro' => $editIntro, 'id' => $id]);
    } else {
        $img = $Portfolio->find($id);
        $img['sh'] = ($img['sh'] + 1) % 2;
        $Portfolio->save(['sh' => $img['sh'], 'id' => $id]);
    }
}
if (!empty($_FILES['name']['tmp_name'])) {
    $filename = $_FILES['name']['name'];
    move_uploaded_file($_FILES['name']['tmp_name'], '../img/' . $filename);
    $Portfolio->save(['name' => $filename, 
                    'title' => $_POST['title'],
                    'titleEng' => $_POST['titleEng'],
                    'href'=> $_POST['href'],
                    'btn'=> $_POST['btn']]);
}

to("../back/index.php?do=portfolio");
