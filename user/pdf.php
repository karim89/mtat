<?php
require(__DIR__.'/../config.php');
require(__DIR__.'/dompdf/autoload.inc.php');
use Dompdf\Dompdf;
use Dompdf\Options;
// require_once 'html2pdf/html2pdf.class.php';

$link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$conn = new mysqli($CFG->dbhost, $CFG->dbuser, $CFG->dbpass, $CFG->dbname);

$info_data = '';
$sql_field = "SELECT * FROM  mdl_user_info_field where categoryid in (1, 2)  ";
$result_field = $conn->query($sql_field);
while($row_field = $result_field->fetch_assoc()) {
    $sql_data = "SELECT * FROM mdl_user_info_data where  mdl_user_info_data.data != '' and userid = ".$_GET['id']." and mdl_user_info_data.fieldid = ".$row_field['id']." order by id desc limit 1";
    $result_data = $conn->query($sql_data);
    while($row_data = $result_data->fetch_assoc()) {
        $data_fied = str_replace('<br>', '', $row_data['data']);
        $data_fied = str_replace('<p></p>', '', $data_fied);
        // $data_fied = str_replace('<p style="text-align:left;"></p>', '', $data_fied);
        if($row_data['fieldid'] != 23){
            $info_data = $info_data."<tr>
                                        <td width='50%' valign='top'><b>".$row_field['name']."</b></td>
                                        <td width='50%' valign='top'> : ".$data_fied."</td>
                                     </tr>
            ";
        }else{
            $info_data = $info_data."<tr >
                                        <td colspan='2' align='center'><b>".$row_field['name']."</b></td>
                                    </tr>
                                    <tr>
                                        <td colspan='2' align='center'>".$data_fied."</td>
                                     </tr>
            ";
        }
    }
}
$sql_field = "SELECT * FROM  mdl_user_info_field where categoryid in (3)  ";
$result_field = $conn->query($sql_field);
while($row_field = $result_field->fetch_assoc()) {
    $sql_data = "SELECT * FROM mdl_user_info_data where  mdl_user_info_data.data != '' and userid = ".$_GET['id']." and mdl_user_info_data.fieldid = ".$row_field['id']." order by id desc limit 1";
    $result_data = $conn->query($sql_data);
    while($row_data = $result_data->fetch_assoc()) {
        $data_fied = str_replace('<br>', '', $row_data['data']);
        $data_fied = str_replace('<p></p>', '', $data_fied);
        $data_fied = str_replace('<p style="text-align:left;"></p>', '', $data_fied);
        $info_data = $info_data."<tr>
                                    <td width='50%' valign='top'><b>".$row_field['name']."</b></td>
                                    <td width='50%' valign='top'> : ".$data_fied."</td>
                                 </tr>
        ";
    }
}
$sql = "SELECT * FROM mdl_user where id = ".$_GET['id'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) { 
        $country = $row['country'] == 'MY' ? 'Malaysia' : $row['country'];
        $content = "<html>
                        <style>
                            #content {  border-top:1px solid black;}
                        </style>
                        <body>
                            <table>
                                <tr>
                                    <td><img src='".$link."/theme/bcu/pix/2xlogo.png' ></td>
                                    <td><h1>Maktab Turus Angkatan Tentera </h1></td>
                                </tr>
                            <table>
                        <div id='content'>    
                            <table width='100%'>
                                <tr>
                                    <td width='50%'>
                                        <table width='100%'>
                                            <tr>
                                                <td width='50%'><b>ID</b></td>
                                                <td width='50%'> : ".$row['username']."</td>
                                            </tr>
                                            <tr>
                                                <td width='50%'><b>Name </b></td>
                                                <td width='50%'> : ".$row["firstname"]."  ".$row["lastname"]."</td>
                                            </tr>
                                            <tr>
                                                <td width='50%'><b>Institution </b></td>
                                                <td width='50%'> : ".$row['institution']."</td>
                                            </tr>
                                            <tr>
                                                <td width='50%'><b>Department </b></td>
                                                <td width='50%'> : ".$row['department']."</td>
                                            </tr>
                                            <tr>
                                                <td width='50%'><b>Address </b></td>
                                                <td width='50%'> : ".$row['address']."</td>
                                            </tr>
                                            <tr>
                                                <td width='50%'><b>City </b></td>
                                                <td width='50%'> : ".$row['city']."</td>
                                            </tr>
                                            <tr>
                                                <td width='50%'><b>Country </b></td>
                                                <td width='50%'> : ".$country."</td>
                                            </tr>
                                            <tr>
                                                <td width='50%'><b>Phone </b></td>
                                                <td width='50%'> : ".$row['phone1']."</td>
                                            </tr>
                                            <tr>
                                                <td width='50%'><b>Email </b></td>
                                                <td width='50%'> : ".$row['email']."</td>
                                            </tr>
                                            ".$info_data."
                                        </table>
                                    </td>
                                    <td valign='top' align='center'>
                                        <img src='".$link."/user/pix.php?file=".$_GET['id']."/f3.jpg' width='200'>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        </body>
                    </html>";

    }
}
$conn->close();
// echo $content;
$options = new Options();
$options->set('isRemoteEnabled', TRUE);
$dompdf = new Dompdf($options);
$contxt = stream_context_create([ 
    'ssl' => [ 
        'verify_peer' => FALSE, 
        'verify_peer_name' => FALSE,
        'allow_self_signed'=> TRUE
    ] 
]);
$dompdf->setHttpContext($contxt);
$dompdf->load_html($content);
$dompdf->render();

$dompdf->stream("user ".$_GET['id'].".pdf");
?>
