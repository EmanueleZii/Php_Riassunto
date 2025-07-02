<?php

    //$handle = fopen("data.txt", "r");

    $file = "data.txt";
    // Check the existence of file
    if(file_exists($file)){
        // Open the file for reading
        $handle = fopen($file, "r") or die("ERROR: Cannot open the
        file.");
        // Read fixed number of bytes from the file
        $content = fread($handle, "20");

        // Reading the entire file
        $content2 = fread($handle, filesize($file));
        
        // Reading the entire file into an array
        $arr = file($file) or die("ERROR: Cannot open the file.");
        foreach($arr as $line){
            echo $line;
        }
        // Reading the entire file into a string
        $content = file_get_contents($file) or die("ERROR: Cannot open
the file.");
        // Closing the file handle
        fclose($handle);
    } else{
        echo "ERROR: File does not exist.";
    }


    $file = "note.txt";
    // String of data to be written
    $data = "The quick brown fox jumps over the lazy dog.";
    // Open the file for writing
    $handle = fopen($file, "w") or die("ERROR: Cannot open the
    file.");
    // Write data to the file
    fwrite($handle, $data) or die ("ERROR: Cannot write the file.");

    // Write data to the file
    file_put_contents($file, $data) or die("ERROR: Cannot write the
    file.");
    echo "Data written to the file successfully.";


    $file = "file.txt";
    // Check the existence of file
    if(file_exists($file)){
        // Attempt to rename the file
        if(rename($file, "newfile.txt")){
                echo "File renamed successfully.";
        } else {
            echo "ERROR: File cannot be renamed.";
        }
    } else{
     echo "ERROR: File does not exist.";
    }

    if(file_exists($file)){
        // Attempt to delete the file
        if(unlink($file)){
            echo "File removed successfully.";
        } else{
            echo "ERROR: File cannot be removed.";
        }
    } else {
        echo "ERROR: File does not exist.";
    }
?>