<?php

class Profile {

    public function __construct() {

    }

    public function get_profile () {
        $db = db_connect();
        $statement = $db->prepare("SELECT * FROM personaldetails
                                WHERE user = :username;");
        $statement->bindValue(':username', $_SESSION['name']);

        $statement->execute();
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    public function create ($username, $birthdate, $phonenumber, $firstname, $lastname, $email, $province, $city, $note) {
        $db = db_connect();
        $statement = $db->prepare("INSERT INTO personaldetails (user, birthdate, phonenumber, firstname, lastname, email, province, city, note)"
            . " VALUES (:username, :birthdate, :phonenumber, :firstname, :lastname, :email, :province, :city, :note); ");

        $statement->bindValue(':username', $username);
        $statement->bindValue(':birthdate', $birthdate);
        $statement->bindValue(':phonenumber', $phonenumber);
        $statement->bindValue(':firstname', $firstname);
        $statement->bindValue(':lastname', $lastname);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':province', $province);
        $statement->bindValue(':city', $city);
        $statement->bindValue(':note', $note);
        $statement->execute();

    }

    public function update ($username, $birthdate, $phonenumber, $firstname, $lastname, $email, $province, $city, $note) {
        $db = db_connect();
        $statement = $db->prepare("UPDATE personaldetails SET username = :username, birthdate = :birthdate, "
            . " phonenumber = :phonenumber, firstname = :firstname, lastname = :lastname, email = :email, province = :province, city = :city, note = :note  "
            . " WHERE id = :id; ");

        $statement->bindValue(':username', $username);
        $statement->bindValue(':birthdate', $birthdate);
        $statement->bindValue(':phonenumber', $phonenumber);
        $statement->bindValue(':firstname', $firstname);
        $statement->bindValue(':lastname', $lastname);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':province', $province);
        $statement->bindValue(':city', $city);
        $statement->bindValue(':note', $note);
        $statement->execute();

    }

}
