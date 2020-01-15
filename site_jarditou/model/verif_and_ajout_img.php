<?php
$mimeAutorise = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff");

$id = $co_db->lastInsertId();

if ($_FILES["img"]['error'])
{
    /*echo $id;*/
    /*echo $_FILES['img']['tmp_name'];*/

    copy("../public/jarditou_photos/error.png", "../public/jarditou_photos/$id.png");

    $insertFormatImage = $co_db->prepare("UPDATE produits SET pro_photo=\"png\" where pro_id=:id");
    /*$insertFormatImage->bindValue(":form","png");*/
    $insertFormatImage->bindValue(":id",$id);

    $insertFormatImage->execute();

    echo getcwd();
}

else
{
    /*echo $id;*/

    $constPreDef = finfo_open(FILEINFO_MIME_TYPE);
    $mimeType = finfo_file($constPreDef, $_FILES['img']['tmp_name']);
        
    /*echo $_FILES['img']['tmp_name'];*/

    finfo_close($constPreDef);
    if(in_array($mimeType, $mimeAutorise))
    {
        $extension = substr(strrchr($_FILES["img"]["name"], "."), 1);
        move_uploaded_file($_FILES["img"]["tmp_name"], "../public/jarditou_photos/$id.$extension"); 

        $insertFormatImage = $co_db->prepare("UPDATE produits SET pro_photo=:extension where pro_id=:id");
        $insertFormatImage->bindValue(":extension",$extension);
        $insertFormatImage->bindValue(":id",$id);
        $insertFormatImage->execute();

        /*echo getcwd();*/
    }
    else
    {
        echo "Type non autorisée <br> Essayer avec ce type de fichier : gif, jpeg, png, tiff";
    }
}
?>