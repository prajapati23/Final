<?php  
mysqli_report(MYSQLI_REPORT_STRICT);

date_default_timezone_set('Asia/Kolkata');
// error_reporting(0);

class Model{
    public $connection = "";
    public function __construct() {
        // echo "inside const";
        // $this->connection = new mysqli("hostname","username","password","databasename")
        try {
            // $this->connection = new mysqli("localhost1","root","","masterdatabase");
            $this->connection = new mysqli("localhost","root","","krupa"); 
        } catch (\Exception $th) {
            // throw $th;
            // echo "<pre>";
            // print_r($th->getMessage());
            // echo "</pre>";
            if (!file_exists("log")) {
                mkdir("log");   
            }
            $ErrorMsg = PHP_EOL."Error Msg >>>". $th->getMessage().PHP_EOL;
            $ErrorMsg .= "Error dateTime >>>". date("d-m-Y H:i:s A").PHP_EOL;
            $fileName = date('d_m_y')."Error_log.txt";
            file_put_contents("log/".$fileName,$ErrorMsg,FILE_APPEND);
            echo "<h1>".$th->getMessage()."</h1>";
            exit;
        }
        // echo "<pre>";
        // print_r($this->connection);
        // echo "</pre>";
    }
    function login($uname,$pass){
        $SQL= "SELECT * FROM users WHERE password='$pass' AND (username= '$uname' OR mobile= '$uname' OR email= '$uname')";
        $SQLEx= $this->connection->query($SQL) ;
        // echo "<pre>";
        // print_r($SQLEx);
        if ($SQLEx->num_rows > 0) {
            // $row = $SQLEx->fetch_assoc(); //return assoc array with key val ['username']
            // $row = $SQLEx->fetch_all(); // multi array with numeric $row[0]
            // $row = $SQLEx->fetch_array(); // both numeric and associative $row[0] $row['username']
            // $row = $SQLEx->fetch_column();
            // $row = $SQLEx->fetch_field();
            // $row = $SQLEx->fetch_fields();
            // $row = $SQLEx->fetch_row(); // single array with numeric $row[0]
            $row = $SQLEx->fetch_object(); //return object access by $row->username
            // echo "<pre>";
            // print_r($row);
            // exit;
            $Res['Code'] =1 ;
            $Res['Data'] =$row ;
            $Res['Msg'] ="Success" ;
        } else {
            $Res['Code'] =0 ;
            $Res['Data'] =0 ;
            $Res['Msg'] ="Try Again" ;
        }
        return $Res;
    }
    function select($tbl,$whr=""){
        $SQL= "SELECT * FROM $tbl";
        if ($whr != "") {
            $SQL .= " WHERE ";
            foreach ($whr as $key => $value) {
                $SQL .= " $key = '$value'";

            }
            $SQL = rtrim($SQL,"AND");
        }
        // echo $SQL;
        // exit;
        $SQLEx= $this->connection->query($SQL) ;
        if ($SQLEx->num_rows > 0) {
            while ($row = $SQLEx->fetch_object()) {
                $Data[]=$row;
            }
            $Res['Code'] =1 ;
            $Res['Data'] =$Data ;
            $Res['Msg'] ="Success" ;
        } else {
            $Res['Code'] =0 ;
            $Res['Data'] =0 ;
            $Res['Msg'] ="Try Again" ;
        }
        return $Res;

    }
    // function selectjoin($tbl,$join, $clm = "*",$whr=""){
    //     $SQL= "SELECT $clm FROM $tbl ";

    //     foreach ($join as $jkey => $jvalue) {
    //         $SQL .= " JOIN $jkey ON $jvalue";

    //     }
    //     if ($whr != "") {
    //         $SQL .= " WHERE ";
            
    //         $SQL = rtrim($SQL,"AND");
    //     }
    //     // echo $SQL;
    //     // exit;
    //     $SQLEx= $this->connection->query($SQL) ;
    //     // echo "<pre>";
    //     // print_r($SQLEx);
    //     // exit;
    //     if ($SQLEx->num_rows > 0) {
    //         while ($row = $SQLEx->fetch_object()) {
    //             $Data[]=$row;
    //         }
    //         $Res['Code'] =1 ;
    //         $Res['Data'] =$Data ;
    //         $Res['Msg'] ="Success" ;
    //     } else {
    //         $Res['Code'] =0 ;
    //         $Res['Data'] =0 ;
    //         $Res['Msg'] ="Try Again" ;
    //     }
    //     return $Res;

    // }
    function insert($tbl,$data){
        // echo "<pre>";
        // print_r($data);
        // $clms = array_keys($data);
        // print_r($clms);
        // print_r($data);
        $clms = implode(",",array_keys($data));
        $vals = implode("','",$data);
        // print_r($clms);
        echo $SQL= "INSERT INTO $tbl($clms) VALUES('$vals')";
        // print_r($this->connection);
        $SQLEx= $this->connection->query($SQL) ;
        if ($SQLEx > 0) {
            $Res['Code'] =1 ;
            $Res['Data'] =1 ;
            $Res['Msg'] ="Success" ;
        } else {
            $Res['Code'] =0 ;
            $Res['Data'] =0 ;
            $Res['Msg'] ="Try Again" ;
        }
        return $Res;

    }
    function update($tbl,$data,$whr)
    { 
        $SQL="UPDATE $tbl SET";
        foreach ($data as $dkey => $dvalue) {
            $SQL .= " $dkey = '$dvalue' ,";
        }
        $SQL = rtrim($SQL, ",");
        $SQL .= " WHERE ";
        foreach ($whr as $key => $value) {
            $SQL .= " $key = '$value' AND";
        }
        $SQL = rtrim($SQL, "AND");
        // echo $SQL;
        // exit;
        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx > 0) {
            $Res['Code'] =1 ;
            $Res['Data'] =1 ;
            $Res['Msg'] ="Success" ;
        } else {
            $Res['Code'] =0 ;
            $Res['Data'] =0 ;
            $Res['Msg'] ="Try again" ;
        }
        return $Res;
    }
    function delete($tbl, $whr = "")
    {
        $SQL = "DELETE FROM $tbl";
        if ($whr != "") {
            $SQL .= " WHERE ";
            foreach ($whr as $key => $value) {
                $SQL .= " $key = '$value' AND";
            }
            $SQL = rtrim($SQL, "AND");
        }   
        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx > 0) {
            $Res['Code'] = 1;
            $Res['Data'] = 1;
            $Res['Msg'] = "Success";
        } else {
            $Res['Code'] = 0;
            $Res['Data'] = 0;
            $Res['Msg'] = "Try again";
        }
        return $Res;
    }
}
// $modelOb = new Model;
// echo "<br>";
// $modelOb->insert("users",array("username"=>"test","password"=>"123","gender"=>"Male"));
// echo "<br>";
// $modelOb->insert("cities",array("title"=>"abd"));
// echo "<br>";
// $modelOb->insert("products",array("title"=>"p1","price"=>456));


?>
