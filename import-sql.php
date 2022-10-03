<?php 
$conn = mysqli_connect("localhost", "root", "test", "blog_samples");
$query = "LOAD DATA INFILE 'input.csv' INTO TABLE tbl_student_master IGNORE 1 LINES";
if (!mysqli_query($conn, $query)) {
    printf("Errormessage: %s\n", mysqli_error($conn));
}
?>
