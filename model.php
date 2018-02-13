<?php
// Get your database connection
require_once 'support/database.php';

function verifyLogin()  {
    global $db;
    
    $sql = 'SELECT * FROM User 
            WHERE userId = 1';
    $statement = $db->prepare($sql);
    $statement->execute();
    $user = $statement->fetch();
    $statement->closeCursor();
    return $user;
    
       
}


function getrates() {
    global $db;
// Use a prepared statement to write the data to the visitors.registration table
  $practiceQuery = 'SELECT * FROM rates
  					WHERE serviceID > 0;';
    
    $statement = $db->prepare($practiceQuery);
    $statement->execute();
    $regResult = $statement->fetchAll();
    $statement->closeCursor();
    return $regResult;

}
function getrates2() {
    global $db;
// Use a prepared statement to write the data to the visitors.registration table
  $practiceQuery = 'SELECT * FROM rates';
    
    $statement = $db->prepare($practiceQuery);
    $statement->execute();
    $regResult = $statement->fetchAll();
    $statement->closeCursor();
    return $regResult;

}
function getastrologyrate() {
    global $db;
// Use a prepared statement to write the data to the visitors.registration table
  $practiceQuery = 'SELECT * FROM rates
  					WHERE serviceID = 0;';
    
    $statement = $db->prepare($practiceQuery);
    $statement->execute();
    $regResult = $statement->fetchAll();
    $statement->closeCursor();
    return $regResult;

}



function getworkshops() {
    global $db;
// Use a prepared statement to write the data to the visitors.registration table
  $practiceQuery = 'SELECT * FROM workshops;';
    
    $statement = $db->prepare($practiceQuery);
    $statement->execute();
    $regResult = $statement->fetchAll();
    $statement->closeCursor();
    return $regResult;

}

function getworkshop($ident) {
    global $db;
// Use a prepared statement to write the data to the visitors.registration table
  $practiceQuery = 'SELECT * FROM workshops
                    WHERE workshopID = ' . $ident . ';';
    $statement = $db->prepare($practiceQuery);
    $statement->execute();
    $regResult = $statement->fetch();
    $statement->closeCursor();
    return $regResult;

}
function edit_workshop($workshopID, $workshopName, $workshopImage, $workshopLink) {
    global $db;
    $query = 'UPDATE workshops
                 SET 
                 workshopName = :workshopName,
                 workshopImage = :image,
                 workshopLink = :link
              WHERE
                 workshopId = :workshopid';
    $statement = $db->prepare($query);
    $statement->bindValue(':workshopid', $workshopID);
    $statement->bindValue(':workshopName', $workshopName);
    $statement->bindValue(':image', $workshopImage);
    $statement->bindValue(':link', $workshopLink);
    $statement->execute();
    $statement->closeCursor();
}
function add_workshop($workshopName, $workshopImage, $workshopLink) {
    global $db;
    $query = 'INSERT INTO workshops
                 (workshopName, workshopImage, workshopLink)
              VALUES
                 (:workshopName, :image, :link)';
    $statement = $db->prepare($query);
    $statement->bindValue(':workshopName', $workshopName);
    $statement->bindValue(':image', $workshopImage);
    $statement->bindValue(':link', $workshopLink);
    $statement->execute();
    $statement->closeCursor();
}
function delete_workshop($workshopID) {
    global $db;
    $query = 'DELETE FROM workshops
              WHERE
                 workshopID = :workshopID';
    $statement = $db->prepare($query);
    
    $statement->bindValue(':workshopID', $workshopID);
    
    $statement->execute();
    $statement->closeCursor();
}
function edit_rate($serviceID, $serviceName) {
    global $db;
    $query = 'UPDATE rates
                 SET 
                 serviceName = :serviceName
              WHERE
                 serviceID = :serviceID';

    $statement = $db->prepare($query);

    $statement->bindValue(':serviceID', $serviceID);
    $statement->bindValue(':serviceName', $serviceName);

    $statement->execute();
    $statement->closeCursor();
}
function delete_rate($serviceID) {
    global $db;
    $query = 'DELETE FROM rates
              WHERE
                 serviceID = :serviceID';
    $statement = $db->prepare($query);
    
    $statement->bindValue(':serviceID', $serviceID);
    
    $statement->execute();
    $statement->closeCursor();
}
function add_service($serviceName) {
    global $db;
    $query = 'INSERT INTO rates
                 (serviceName)
              VALUES
                 (:serviceName)';
    $statement = $db->prepare($query);
    $statement->bindValue(':serviceName', $serviceName);
    $statement->execute();
    $statement->closeCursor();
}
function changepw($newPassword1) {
    global $db;
    $query = 'UPDATE User
                 SET 
                 password = :newPassword1                
            ';
    $statement = $db->prepare($query);
    $statement->bindValue(':newPassword1', $newPassword1);
    $statement->execute();
    $statement->closeCursor();
}

?>