<?php

$bdd = mysqli_connect('localhost', 'root', 'root', 'trombino')
or die('could not connect to database');

try {
    $dbh = new PDO('mysql:host=localhost;dbname=trombino', 'root', 'root');
    foreach($dbh->query('SELECT * from wilder') as $row) {
        $wild = $row;
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
$query = 'SELECT * FROM wilder ORDER BY firstname ASC';
$response = $bdd->query($query);
$wilders = array();
while ($data = mysqli_fetch_array($response))
{
    $wildersId = $data['id'];
    $wildersFirstname = $data['firstname'];
    $wildersLastname = $data['lastname'];
    $wildersBirthday = $data['birthday'];
    $wildersEmail = $data['email'];
    $wildersCursus = $data['cursus'];
    $wildersGithub = $data['github'];
    $wildersPresentation = $data['presentation'];


    $wilders[] = [
        'id' => [$wildersId],
        'firstname' =>[$wildersFirstname],
        'lastname' =>[$wildersLastname],
        'birthday' =>[$wildersBirthday],
        'email' =>[$wildersEmail],
        'cursus' =>[$wildersCursus],
        'github' =>[$wildersGithub],
        'presentation' =>[$wildersPresentation],
    ];
}

?>


