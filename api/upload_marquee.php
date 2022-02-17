<?php include_once "../base.php";

$id=$_GET['id'];
$editIntro=$_GET['intro'];

if (isset($id)) {
    if (isset($editIntro)) {
        $Marquee->save(['intro' => $editIntro, 'id' => $id]);
    } else {
        $img = $Marquee->find($id);
        $img['sh'] = ($img['sh'] + 1) % 2;
        $Marquee->save(['sh' => $img['sh'], 'id' => $id]);
    }
}
if (!empty($_FILES['name']['tmp_name'])) {
    $intro = $_POST['intro'];
    $filename = $_FILES['name']['name'];
    move_uploaded_file($_FILES['name']['tmp_name'], '../img/' . $filename);
    $Marquee->save(['name' => $filename, 'intro' => $intro]);
}

to("../back/index.php?do=marquee");
