<?php

function getWilders()
{
    $bdd = mysqli_connect('localhost', 'root', 'root', 'trombino')
    or die('could not connect to database');
    $query = 'SELECT * FROM wilder';
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
    return $wilders;
}

var_dump(getWilders('PHP'));
?>