<?php

function UploadFile($folderName, $fileName, $tempName)
{
    $directory = basePath($folderName, true);

    if (!is_dir($directory)) {
        mkdir($directory, 0755, true);
    }

    $fileFullPath = $directory . $fileName;

    move_uploaded_file($tempName, $fileFullPath);
}
