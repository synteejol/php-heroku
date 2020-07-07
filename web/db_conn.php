    <?php
    /*METHOD GET AND GET WITH GET ID*/
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Credentials: true");
    header("Access-Control-Max-Age: 1000");
    header("Access-Control-Allow-Headers: X-Requested-With, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding");
    header("Access-Control-Allow-Methods: PUT,PATCH, POST, GET, OPTIONS, DELETE");

    $servername = getenv('DB_HOST');
    $username   = "root";
    $password   = getenv('ALEPH_DB_ROOT_PASSWORD');
    $dbname     = getenv('ALEPH_DATABASE');
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
      //echo "Connected successfully";
    $sql = "SELECT * FROM sezioni";
//     $sql2 = "SELECT * FROM video";

    $result = mysqli_query($conn,$sql);
    $myArray = array();
    if ($result->num_rows > 0) {
    // output data of each row
        while($row = $result->fetch_assoc()) {
            $myArray[] = $row;
        }
        $length = count($myArray);
        for ($x = 0; $x < $length; $x++) {
          $myArray[$x]['immagine'] = 'data:image/jpg;base64,'.base64_encode($myArray[$x]['immagine']);

        }
//         print json_encode(base64_encode($myArray[3]['immagine']));
         print json_encode($myArray);
//           print json_encode($myArray);
    }
    else
    {
        echo "0 results";
    }


//     try {
//         $dbh = new PDO ("mysql:host=$servername;port=3306;charset=utf8; dbname=$dbname", $username,$password);
//         $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         echo 'ok';
//     } catch (PDOException $e) {
//         echo 'Errore connessione al database !' . $e->getMessage();
//         die();
//     }
//     /*END CONN DB*/
//
//     $json = trim(file_get_contents('php://input'));
//     $input = json_decode($json, true);
//
//
// if (isset ($_GET['id'])) {
//     $id = $_GET['id'];
//
//     try {
//         $sql = 'SELECT *FROM sezioni WHERE id = :id';
//         $stmt = $dbh->prepare($sql);
//         $id = $id;
//         $stmt->execute(['id' => $id]);
//         $rows = $stmt->fetch();
//         echo json_encode($rows);
//     } catch (PDOException $e) {
//         echo 'Errore select tabella !' . $e->getMessage();
//         die();
//     }
// } else {
//     try {
//         $sql = 'SELECT *FROM sezioni';
//         $stmt = $dbh->prepare($sql);
//         $stmt->execute();
//         $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//         echo json_encode($rows);
//     } catch (PDOException $e) {
//         echo 'Errore select tabella !' . $e->getMessage();
//         die();
//     }
//
// }


    ?>
