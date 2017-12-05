

<?php
public function fetch() {

$user = $this->model('User');

$province = $_REQUEST['get_province'];

$cities = $user->get_cities($province);



foreach ($cities as $city) {

echo '<option value="'. $city['city'] .'">'.$city['city'].'</option>';

}

exit;

    }



In the model:

public function get_cities ($province) {

$db = db_connect();

        $statement = $db->prepare("SELECT city FROM cities

                                WHERE province=:province

ORDER BY city");

        $statement->bindValue(':province', $province);

        $statement->execute();

        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

return $rows;

}

?>