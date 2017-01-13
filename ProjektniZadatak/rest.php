
<?php
function zag() {
    header("{$_SERVER['SERVER_PROTOCOL']} 200 OK");
    header('Content-Type: text/html');
    header('Access-Control-Allow-Origin: *');
}
function rest_get($request, $data) { }
function rest_post($request, $data) { }
function rest_delete($request) { }
function rest_put($request, $data) { }
function rest_error($request) { }

$method  = $_SERVER['REQUEST_METHOD'];
$request = $_SERVER['REQUEST_URI'];


switch($method) {
    case 'PUT':
        parse_str(file_get_contents('php://input'), $put_vars);
        zag(); $data = $put_vars; rest_put($request, $data);
         break;
    case 'POST':
        zag(); $data = $_POST; rest_post($request, $data);
         break;
    case 'GET':
        zag(); $data = $_GET; rest_get($request, $data);
        $ime = $_GET["danPredstave"];
        $brojPredstava = $_GET["brojPredstava"];
      
           //$dbh =  new PDO("mysql:dbname=spirala4;host=localhost;charset=utf8", "admin", "1234");
    $dbh = new PDO('mysql:host=' . getenv('MYSQL_SERVICE_HOST') . ';port=3306;dbname=spirala4', 'admin', '1234');
        $stmt = "SELECT p.* FROM predstava p WHERE p.dan='".$ime."' LIMIT $brojPredstava ";
        $sql = $dbh->prepare("SELECT p.* FROM predstava p WHERE p.dan= :ime LIMIT $brojPredstava ");
        $sql->bindParam(':ime', $ime);
        $sql->execute();
        ;
      $encode = array();
        while( $row=$sql->fetch(PDO::FETCH_ASSOC)) {
            $encode[] = $row;
        }   

         echo json_encode($encode);
    
        break;
    case 'DELETE':
        zag(); rest_delete($request); break;
    default:
        header("{$_SERVER['SERVER_PROTOCOL']} 404 Not Found");
        rest_error($request); break;
}
?>