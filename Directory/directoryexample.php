<?php
    //Create doirectory

    // The directory path
    $dir = "testdir";
    // Check the existence of directory
    if(!file_exists($dir))
    {
        // Attempt to create directory
        if(mkdir($dir))
        {
            echo "Directory created successfully.";
        } else {
            echo "ERROR: Directory could not be created.";
        }
    } else{
        echo "ERROR: Directory already exists.";
    }
?>

<?php
    // Create backup file 

    // Source file path
    $file = "example.txt";
    // Destination file path
    $newfile = "backup/example.txt";
    // Check the existence of file
    if(file_exists($file)){
        // Attempt to copy file
        if(copy($file, $newfile)){
            echo "File copied successfully.";
        } else{
            echo "ERROR: File could not be copied.";
        }
    } else{
         echo "ERROR: File does not exist.";
    }

?>

<?php
    //List all file of directory

    // Define a function to output files in a directory
    function outputFiles($path){
        // Check directory exists or not
        if(file_exists($path) && is_dir($path)){
            // Scan the files in this directory
            $result = scandir($path);
            // Filter out the current (.) and parent (..) directories
            $files = array_diff($result, array('.', '..'));
            if(count($files) > 0){
            // Loop through retuned array
            foreach($files as $file){
                if(is_file("$path/$file")) {
                    // Display filename
                    echo $file . "<br>";
                } else if (is_dir("$path/$file")) {
                    // Recursively call the function if directories found
                    outputFiles("$path/$file");
                }
            }
            } else{
                echo "ERROR: No files found in the directory.";
            }
        } else {
            echo "ERROR: The directory does not exist.";
        }
    }
    // Call the function
    outputFiles("mydir");

?>

<?php
    /* 
    Search the directory and loop through
    returned array containing the matched files 
    */
    foreach(glob("documents/*.txt") as $file){
        echo basename($file) . " (size: " . filesize($file) . "bytes)" . "<br>";
    }
?>

