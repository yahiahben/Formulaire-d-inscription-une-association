<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // define variables
  $data = array(
    "lastname" => $_POST["lastname"],
    "firstname" => $_POST["firstname"],
    "birthday" => $_POST["birthday"],
    "gender" => $_POST["gender"],
    "email" => $_POST["email"],
    "phonenumber" => $_POST["phonenumber"],
    "gradelevel" => $_POST["gradelevel"],
    "website" => $_POST["website"] ? $_POST["website"] : "",
    "choices" => implode(', ',$_POST["choices"]),
  );

  $sql = "INSERT INTO phptest (lastname,firstname,birthday,gender,email,phonenumber, gradelevel, website, choices) VALUES (:lastname, :firstname, :birthday, :gender, :email, :phonenumber, :gradelevel, :website, :choices)";
  $stmt = $conn->prepare($sql);
  $stmt->execute($data);

  $indexed = $client->index([
    'index' => 'testinternship',
    'type' => '_doc',
    'body' => $data
  ]);
  $_SESSION['_flashdata']['success'] ="<span><i class='fa fa-check'></i> <strong>Success!</strong> The form has been successfully completed </span>";
}
