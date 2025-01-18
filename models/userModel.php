<?php
require_once('db.php');

function login($id, $password)
{
    $con = getConnection();
    $sql = "select * from reg_info where id='{$id}' and password='{$password}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $users = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($users, $row);
        }
        $user = $users[0];
        print_r($user[0]);

        session_start();
        $_SESSION['user'] = ['id' => $user['id'], 'name' => $user['name'], 'password' => $user['password'],'gender' => $user['gender'],'email' => $user['email'],'dob' => $user['dob'], 'type' => $user['user_type']];

        $_SESSION['auth'] = "true";
        if ($user['type'] == 'admin') {
            header('location: ../views/user_home.php');
        } else {
            header('location: ../views/user_home.php');
        }
    } else {

        return false;
    }
}


function register($id, $name, $password,$email,$gender,$dob, $type)
{
    $con = getConnection() ;
    $sql = "select * from reg_info where id='{$id}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        print_r("User already exists");
    } else {
        $sql = "insert into reg_info (id,name,password,email,gender,dob,type) values ('{$id}','{$name}','{$password}','{$email}','{$gender}','{$dob}','{$type}')";
        $result = mysqli_query($con, $sql);


        if ($result) {
            header('location: ../views/login.php');
        } else {

            echo "Error!";
        }
    }
}




function getUser($id)
{
    session_start();
    if (isset($_SESSION['auth']) && $_SESSION['user']) {
        $id = $_SESSION['user']['id'];
    }
    $con = getConnection();
    $sql = "select * from reg_info where id='{$id}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $users = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($users, $row);
        }
        $user = $users[0];
        print_r($user[0]);

        session_start();
        $_SESSION['user'] = ['id' => $user['id'], 'name' => $user['name'], 'password' => $user['password'], 'type' => $user['user_type']];

        $_SESSION['auth'] = "true";
        if ($user['type'] == 'admin') {
            header('location: ../views/user_home.php');
        } else {
            header('location: ../views/user_home.php');
        }
    } else {

        return false;
    }
}


function getAllUser()
{
    $con = getConnection();
    $sql = "select * from reg_info";
    $result = mysqli_query($con, $sql);
    $users = [];
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($users, $row);
    }

    return $users;
}


function UpdateProfile($updateprofile)
{
  $con= getConnection();
  $sql= "UPDATE reg_info
  SET  name= '{$updateprofile['name']}', 
      email= '{$updateprofile['email']}', 
      password= '{$updateprofile['password']}' 
  WHERE id = '{$updateprofile['id']}'";

  
  $result= mysqli_query($con,$sql);

  return $result;
}







function getviewbook(){
    $con = getConnection();
    $sql = "select * from catagory";
    $result = mysqli_query($con, $sql);
    $users = [];

    while($row = mysqli_fetch_assoc($result)){
    //$users = $row;
       array_push($users, $row);
    }  
    return $users;
}
     

function AddBook($bookInfo){
    $con = getConnection();
    $sql = "insert into catagory values('','{$bookInfo['Book_Name']}','{$bookInfo['Author']}', '{$bookInfo['Catagory']}')";
    $status = mysqli_query($con, $sql);
    return $status;
}

function Update($updatebooks)
{
  $con= getConnection();
 $sql= "UPDATE catagory
  SET Book_Name = '{$updatebooks['Book_Name']}', 
      Author= '{$updatebooks['Author']}', 
      Catagory= '{$updatebooks['Catagory']}' 
  WHERE Book_ID = '{$updatebooks['Book_ID']}'";

  
  $result= mysqli_query($con,$sql);

  return $result;
}

function DeleteBooks($Book_ID){
    $con = getConnection();
    $sql = "DELETE FROM catagory WHERE Book_ID='$Book_ID';";
    $status = mysqli_query($con, $sql);
    return $status;
}

function event($Event_Name, $Event_Sponsers, $Event_Desc,$Event_sd,$Event_end,$Event_location)
{

    $con = getConnection() ;


    $sql = "select * from event_info where Event_Name='{$Event_Name}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        print_r("User already exists");
    } else {
        $sql = "insert into event_info (Event_Name,Event_Sponsers,Event_Desc,Event_sd,Event_end,Event_location) values ('{$Event_Name}','{$Event_Sponsers}','{$Event_Desc}','{$Event_sd}','{$Event_end}','{$Event_location}')";
        $result = mysqli_query($con, $sql);


        if ($result) {
            header('location: ../views/event_running.php');
        } else {

            echo "Error!";
        }
    }
}

function getEvent(){
       $con = getConnection();
       $sql = "select * from event_info";
       $result = mysqli_query($con, $sql);
       $users = [];

    while($row = mysqli_fetch_assoc($result)){
    //$users = $row;
       array_push($users, $row);
    }  
    return $users;
}



function AddJournal($bookInfo){
    $con = getConnection();
    $sql = "INSERT INTO journal VALUES ('','{$bookInfo['Tittle']}', '{$bookInfo['PlaceOfP']}', '{$bookInfo['Publisher']}', '{$bookInfo['Volume']}', '{$bookInfo['Issue']}', '{$bookInfo['Date']}')";
    $status = mysqli_query($con, $sql);
    return $status;
}

function getviewjournal(){
    $con = getConnection();
    $sql = "select * from journal";
    $result = mysqli_query($con, $sql);
    $users = [];

    while($row = mysqli_fetch_assoc($result)){
    //$users = $row;
       array_push($users, $row);
    }  
    return $users;
}

function DeleteJournal($Journal_ID){
    $con = getConnection();
    $sql = "DELETE FROM journal WHERE Journal_ID='$Journal_ID';";
    $status = mysqli_query($con, $sql);
    return $status;
}


function search($search){
    $con = getConnection();
    $sql = "SELECT * FROM catagory WHERE Book_Name LIKE '%$search%' or Book_ID LIKE '%$search%' or Author LIKE '%$search%' or Catagory LIKE '%$search%'";
    $status = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($status))
    {
        echo "<br>";
        echo "<tr>
        <td> {$row['Book_ID']} </td>
        <td> {$row['Book_Name']} </td> 
        <td> {$row['Author']} </td> 
        <td> {$row['Catagory']} </td> 
        </tr>               
        ";
    }
    return $status;
}



function searchjournal($searchjournal){
    $con = getConnection();
    $sql = "SELECT * FROM journal WHERE Journal_ID LIKE '%$searchjournal%' or Tittle LIKE '%$searchjournal%' or PlaceOfP LIKE '%$searchjournal%' or Publisher LIKE '%$searchjournal%' or Volume LIKE '%$searchjournal%' or Issue LIKE '%$searchjournal%'";
    $status = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($status))
    {
        echo "<br>";
        echo "<tr>
        <td> {$row['Journal_ID']} </td>
        <td> {$row['Tittle']} </td> 
        <td> {$row['PlaceOfP']} </td> 
        <td> {$row['Publisher']} </td> 
        <td> {$row['Volume']} </td> 
        <td> {$row['Issue']} </td>
        <td> {$row['Date']} </td>  
        </tr>               
        ";
    }
    return $status;
}



function searchUser($searchUser){
    $con = getConnection();
    $sql = "SELECT * FROM reg_info WHERE id LIKE '%$searchUser%' or name LIKE '%$searchUser%' or email LIKE '%$searchUser%' or gender LIKE '%$searchUser%' or dob LIKE '%$searchUser%' or type LIKE '%$searchUser%'";
    $status = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($status))
    {
        echo "<br>";
        echo "<tr>
        <td> {$row['id']} </td>
        <td> {$row['name']} </td> 
        <td> {$row['email']} </td> 
        <td> {$row['gender']} </td> 
        <td> {$row['dob']} </td> 
        <td> {$row['type']} </td> 
        </tr>               
        ";
    }
    return $status;
}
