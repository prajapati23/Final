<?php
session_start();
require_once("model/model.php");
class Controller extends Model
{

    public $base_url = "http://localhost/krupa/Final/Public/";
    public function __construct()
    {
        ob_start();
        parent::__construct();
        // echo "called";
        // echo "inside const";
        // include_once("main.php");
        // include_once("../Views/main.php");
        // include_once("Views/main.php");
        // include_once("header.php");
        // include_once("footer.php");
        // echo "<pre>";
        // print_r($_SERVER);
        // echo "</pre>";
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/':
                case '/home':
                    include_once("Views/header.php");
                    include_once("Views/main.php");
                    include_once("Views/footer.php");
                    break;
                case '/about':
                    include_once("Views/header.php");
                    include_once("Views/about.php");
                    include_once("Views/footer.php");
                    break;
                case '/gallery':
                    include_once("Views/header.php");
                    include_once("Views/gallery.php");
                    include_once("Views/footer.php");
                    break;
                case '/drink':
                    include_once("Views/header.php");
                    include_once("Views/drink.php");
                    include_once("Views/footer.php");
                    break;
                case '/swimmingpool':
                    include_once("Views/header.php");
                    include_once("Views/swimmingpool.php");
                    include_once("Views/footer.php");
                    break;
                case '/resturent':
                    include_once("Views/header.php");
                    include_once("Views/resturent.php");
                    include_once("Views/footer.php");
                    break;
                case '/security':
                    include_once("Views/header.php");
                    include_once("Views/security.php");
                    include_once("Views/footer.php");
                    break;
                case '/staff':
                    include_once("Views/header.php");
                    include_once("Views/staff.php");
                    include_once("Views/footer.php");
                    break;
                case '/foodbeverage':
                    include_once("Views/header.php");
                    include_once("Views/foodbeverage.php");
                    include_once("Views/footer.php");
                    break;
                case '/services':
                    include_once("Views/header.php");
                    include_once("Views/services.php");
                    include_once("Views/footer.php");
                    break;
                case '/contact':
                    include_once("Views/header.php");
                    include_once("Views/contact.php");
                    include_once("Views/footer.php");
                    break;
                case '/booknow':
                    include_once("Views/header.php");
                    include_once("Views/booknow.php");
                    include_once("Views/footer.php");
                    break;
                case '/gujaratifood':
                    include_once("Views/header.php");
                    include_once("Views/gujaratifood.php");
                    include_once("Views/footer.php");
                    break;
                case '/southindianfood':
                    include_once("Views/header.php");
                    include_once("Views/southindianfood.php");
                    include_once("Views/footer.php");
                    break;
                case '/punjabifood':
                    include_once("Views/header.php");
                    include_once("Views/punjabifood.php");
                    include_once("Views/footer.php");
                    break;
                case '/kathiyawadifood':
                    include_once("Views/header.php");
                    include_once("Views/kathiyawadifood.php");
                    include_once("Views/footer.php");
                    break;
                case '/foodorder':
                    include_once("Views/header.php");
                    include_once("Views/foodorder.php");
                    include_once("Views/footer.php");
                    break;
                case '/singalroom':
                    include_once("Views/header.php");
                    include_once("Views/singalroom.php");
                    include_once("Views/footer.php");
                    break;
                case '/doubleroom':
                    include_once("Views/header.php");
                    include_once("Views/doubleroom.php");
                    include_once("Views/footer.php");
                    break;
                case '/familyroom':
                    include_once("Views/header.php");
                    include_once("Views/familyroom.php");
                    include_once("Views/footer.php");
                    break;
                case '/laxuryroom':
                    include_once("Views/header.php");
                    include_once("Views/laxuryroom.php");
                    include_once("Views/footer.php");
                    break;
                case '/s1desc':
                    include_once("Views/header.php");
                    include_once("Views/s1desc.php");
                    include_once("Views/footer.php");
                    break;
                case '/breakfast':
                    include_once("Views/header.php");
                    include_once("Views/breakfast.php");
                    include_once("Views/footer.php");
                    break;
                case '/login':
                    include_once("Views/header.php");
                    include_once("Views/login.php");
                    include_once("Views/footer.php");
                    if (isset($_REQUEST['btn-login'])) {
                        $LoginREs = $this->login($_POST['username'], $_POST['password']);
                        echo "<pre>";
                        print_r($LoginREs);

                        if ($LoginREs['Code'] == 1) {
                            // echo "inside if true auth";
                            $_SESSION['UserData'] = $LoginREs['Data'];
                            if ($LoginREs['Data']->role_id == 1) {
                                header("location:http://localhost/krupa/Final/allusers");
                            } else {
                                header("location:http://localhost/krupa/Final/");
                            }


                        } else {
                            // echo "inside else invalid user";
                        }

                    }
                    break;
                case '/forgetpass':
                    include_once("Views/header.php");
                    include_once("Views/forgetpass.php");
                    include_once("Views/footer.php");
                    break;
                case '/singup':
                    // include_once("Views/header.php");
                    include_once("Views/registration.php");
                    include_once("Views/footer.php");
                    if (isset($_REQUEST['btn-regist'])) {
                        // echo "<pre>";
                        // print_r($_REQUEST);
                        // echo "</pre>";
                        array_pop($_REQUEST);
                        // unset($_REQUEST["hobby"]);
                        // echo "<pre>";
                        // print_r($_REQUEST);
                        // echo "</pre>";
                        // $InsertData = array_merge($_REQUEST,array("hobby"=>$hob));
                        $InsertData = $_REQUEST;
                        // echo "<pre>";
                        // print_r($data);
                        // echo "</pre>";
                        // $this->insert("car",array("title" => "tesla"));
                        $res = $this->insert("users", $InsertData);
                        print_r($res);
                        if ($res["Code"] == 1) {
                            header("location:login");
                        }
                    }
                    break;
                case '/admindashboard':

                    include_once("Views/Admin/Header.php");
                    include_once("Views/Admin/adminlogin.php");
                    include_once("Views/Admin/Footer.php");
                    if (isset($_REQUEST['btn-login'])) {
                        $LoginREs = $this->login($_POST['username'], $_POST['password']);
                        echo "<pre>";
                        print_r($LoginREs);

                        if ($LoginREs['Code'] == 1) {
                            // echo "inside if true auth";
                            $_SESSION['UserData'] = $LoginREs['Data'];
                            if ($LoginREs['Data']->role_id == 1) {
                                header("location:http://localhost/krupa/Final/allusers");
                            } else {
                                header("Try Again");
                            }


                        } else {
                            // echo "inside else invalid user";
                        }

                    }

                    break;

                case '/allusers':
                    if (isset($_SESSION)) {
                        // $allUsers = $this->select("users");
                        // $allUsers = $this->selectjoin("users",array("city"=>"city.id=users.city"));
                        $allUsers = $this->select("users", array("role_id" => 0));
                        // echo "<pre>";
                        // print_r($allUsers);
                        // echo "</pre>";
                        // exit;
                        include_once("Views/Admin/Header.php");
                        include_once("Views/Admin/allusers.php");
                        include_once("Views/Admin/Footer.php");
                    } else {
                        header("location:admindashboard");
                    }
                    break;
                case '/addnewuser':
                    include_once("Views/Admin/Header.php");
                    include_once("Views/Admin/addnewuser.php");
                    include_once("Views/Admin/Footer.php");
                    break;
                case '/allcategories':
                    $allCategories = $this->select("category");
                    // print_r($allCategories);
                    include_once("Views/Admin/Header.php");
                    include_once("Views/Admin/allcategory.php");
                    include_once("Views/Admin/Footer.php");
                    break;
                case '/allgallery':
                    include_once("Views/Admin/Header.php");
                    include_once("Views/Admin/allgallery.php");
                    include_once("Views/Admin/Footer.php");
                    break;
                case '/addgallery':
                    include_once("Views/Admin/Header.php");
                    include_once("Views/Admin/addgallery.php");
                    include_once("Views/Admin/Footer.php");
                    break;
                case '/allservices':
                    include_once("Views/Admin/Header.php");
                    include_once("Views/Admin/allservices.php");
                    include_once("Views/Admin/Footer.php");
                    break;
                case '/addservices':
                    include_once("Views/Admin/Header.php");
                    include_once("Views/Admin/addservices.php");
                    include_once("Views/Admin/Footer.php");
                    break;
                case '/allorder':
                    include_once("Views/Admin/Header.php");
                    include_once("Views/Admin/allorder.php");
                    include_once("Views/Admin/Footer.php");
                    break;
                case '/allbooking':
                    include_once("Views/Admin/Header.php");
                    include_once("Views/Admin/allbooking.php");
                    include_once("Views/Admin/Footer.php");
                    break;
                case '/allfood':
                    include_once("Views/Admin/Header.php");
                    include_once("Views/Admin/allfood.php");
                    include_once("Views/Admin/Footer.php");
                    break;
                case '/addfood':
                    include_once("Views/Admin/Header.php");
                    include_once("Views/Admin/addfood.php");
                    include_once("Views/Admin/Footer.php");
                    break;
                case '/allpayment':
                    include_once("Views/Admin/Header.php");
                    include_once("Views/Admin/allpayment.php");
                    include_once("Views/Admin/Footer.php");
                    break;
                case '/allinvoice':
                    include_once("Views/Admin/Header.php");
                    include_once("Views/Admin/allinvoice.php");
                    include_once("Views/Admin/Footer.php");
                    break;
                case '/allfeedback':
                    include_once("Views/Admin/Header.php");
                    include_once("Views/Admin/allfeedback.php");
                    include_once("Views/Admin/Footer.php");
                    break;
                case '/edit':
                    $UserById = $this->select("users", array("id" => $_GET['userid']));
                    // $UserById = $this->select("users",array("city"=>"city.id=users.city"),array("id"=>$_GET['userid']));
                    $CitiesData = $this->select("city");
                    // echo "<pre>";
                    // print_r($UserById);
                    // echo "</pre>";
                    // exit;
                    include_once("Views/Admin/Header.php");
                    include_once("Views/Admin/edituser.php");
                    include_once("Views/Admin/Footer.php");
                    if (isset($_POST['btn-update'])) {
                        // $hob = implode(",", $_POST['hobby']);
                        array_pop($_POST);
                        unset($_POST['btn-update']);
                        // $data = array_merge($_POST, array('hobby' => $hob));
                        $data = $_POST;
                        $UpdateRes = $this->update("users", $data, array("id" => $_GET['userid']));
                        if ($UpdateRes['Code'] == 1) {
                            header("location:allusers");
                        }
                    }
                    break;
                case '/addcategory':
                    include_once("Views/Admin/Header.php");
                    include_once("Views/Admin/addcategory.php");
                    include_once("Views/Admin/Footer.php");
                    break;
                case '/deleteuser':
                    $UsersDeleteResponse = $this->delete("users", array("id" => $_GET['userid']));
                    echo "<pre>";
                    print_r($UsersDeleteResponse);
                    if ($UsersDeleteResponse['Code'] == 1) {
                        header("location:allusers");
                    } else {
                        echo "Error while deleting data try again after sometime";
                    }
                    break;
                case '/myprofile':
                    // include_once("Views/Admin/Header.php");
                    include_once("Views/Admin/myprofile.php");
                    // include_once("Views/Admin/Footer.php");
                    break;
                case '/feedback':
                    // include_once("Views/header.php");
                    include_once("Views/feedback.php");
                    // include_once("Views/footer.php");
                    break;
                case '/logout':
                    session_destroy();
                    header("location:admindashboard");
                    break;
                default:
            }
        } else {
            header("location:home");
        }
        ob_flush();
    }
}



$ControllerObject = new Controller;
?>