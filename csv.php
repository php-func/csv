<?php

function arrayToCSV($inputArray)
{
    $csvFieldRow = array();
    foreach ($inputArray as $CSBRow) {
        $csvFieldRow[] = str_putcsv($CSBRow);
    }
    $csvData = implode("\n", $csvFieldRow);
    return $csvData;
}

function str_putcsv($input, $delimiter = ',', $enclosure = '"')
{
    // Open a memory "file" for read/write
    $fp = fopen('php://temp', 'r+');
    // Write the array to the target file using fputcsv()
    fputcsv($fp, $input, $delimiter, $enclosure);
    // Rewind the file
    rewind($fp);
    // File Read
    $data = fread($fp, 1048576);
    fclose($fp);
    // Ad line break and return the data
    return rtrim($data, "\n");
}

$inputArray = array(
    array("First Name", "Last Name", "Identification Number"),
    array("Kim","Thomas","8001"),
    array("Jeffery","Robert","8021"),
    array("Helan","Albert","8705")
);
print "<PRE>";
print $CSVData = arrayToCSV($inputArray);
?>
