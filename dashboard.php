<?php
    
    
    $host = getenv('IP');
    $username = getenv('C9_USER');
    $password = '';
    $dbname = 'hire';
    
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    $id=1;
    //$test1= "SELECT id FROM Users WHERE email= $_SESSION[email];";
    //$test2= $conn->query($test1);
    //$test3= $test2->fetchAll(PDO::FETCH_ASSOC);
    
    echo $_SESSION['email'];
    

    $sql= "SELECT company_name,job_title,category,date_applied FROM Jobs INNER JOIN Jobs_applied_for ON  Jobs.id= Jobs_applied_for.job_id WHERE Jobs_applied_for.user_id= $id;";
    $result= $conn->query($sql);
    
    $test= $result->fetchAll(PDO::FETCH_ASSOC);
     //echo'<ul>';
     echo '<h3>Jobs Applied For</h3>';
     echo '<table class=table.';
     echo '<tr>';
     echo '<th>Company</th>';
     echo '<th>Job Title</th>';
     echo '<th>Category</th>';
     echo '<th>Date Applied</th>';
     echo '<tr>'; 
     foreach($test as $row){
      echo '<tr>';
      echo '<th>'.$row['company_name'].'</th>';
      echo '<th>'.'<a href="jobdetails.html">'.$row['job_title'].'</a></th>';
      echo '<th>'.$row['category'].'</th>';
      echo '<th>'.$row['date_applied'].'</th>';
      echo '<tr>';
      
      
     // echo '<th>'.$row['company_name']."    ".$row['job_title'].$row['category'].$row['date_applied'].'</li>';
     }
     echo '</table>';
    
?>