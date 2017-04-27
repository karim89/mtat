<?php
 // INCLUDE THE htmlToPDF.php FILE
require('../htmlToPdf.php');
ob_start();
require(__DIR__.'/../../config.php');
$conn = new mysqli($CFG->dbhost, $CFG->dbuser, $CFG->dbpass, $CFG->dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM mdl_user where id = ".$_GET['id'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>
        
        <html>
<head>
<title>Contoh Export to PDF</title>

</head>
<body>
<?php echo"<h2>".$row["username"]." : ".$row["email"]." / ".$row["firstname"]."  ".$row["lastname"]."</h2>"; ?>
</body>
</html>
    <?php
    }
} else {
    echo "0 results";
}
$conn->close(); 
?>





<?php
// Output-Buffer in variable:
$html=ob_get_contents();
ob_end_clean();
$pdf=new HTML2FPDF('L');;
$pdf->AddPage();
$pdf->WriteHTML($html);
if (preg_match("/MSIE/i", $_SERVER["HTTP_USER_AGENT"])){
    header("Content-type: application/PDF");
} else {
    header("Content-type: application/PDF");
    header("Content-Type: application/pdf");
}
// $pdf->Output("sample.pdf","I");
$pdf->Output("sample.pdf","D");


// PUT YOUR HTML IN A VARIABLE



?>