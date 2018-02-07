<?php
    //Processig the login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // print_r(hash_algos()); = print out list of existing algos
    //void = dont neet any agruments
    $algos = hash_algos();
    $count = count($algos);
    $id = rand(0, $count - 1);
    $algo = $algos[$id];

    // create list of seperator chars,
    // these are characters used in hashes
    // and can therefore be used without

    $seperators = ['a', 'b', 'c', 'd', 'e', 'f'];
    $seperatorId = rand(0, count($seperators) - 1);
    $seperator = $seperators[$seperatorId];

    echo "User name: $username<br>\n";
    echo "User name: $password<br>\n";

    $password = hash('sha256', $id . $seperator . hash($algo, $password));

    echo "Hashed:$password<br>\n";
 ?>
