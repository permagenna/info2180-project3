<?php
    session_start();
    
    $host = getenv('IP');
    $username = getenv('C9_USER');
    $password = '';
    $dbname = 'hire';
    
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    $emails = $conn->query('SELECT email FROM Users;');
    $results = $emails->fetch(PDO::FETCH_ASSOC);
    
    $try= $results['email'] ;
    
    $passwords = $conn->query('SELECT password FROM Users;');
    $result = $passwords->fetch(PDO::FETCH_ASSOC);
    
    $pass= $result['password'] ;
    $_SESSION['email']=$try;
    
    if (!empty($_POST['email'])  && !empty($_POST['password'])) {
				
        if ($_POST['email'] === $try && $_POST['password'] == $pass) {
            $_SESSION['valid'] = true;
            $_SESSION['username'] = $_POST['email'];
            echo 'You have entered valid use name and password';
            header("location: dashboard.html");
        }else {
            echo $msg = 'Wrong username or password';
            header("location: index.html");
        }
    }
    
?>