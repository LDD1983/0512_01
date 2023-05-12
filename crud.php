<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=student";
$pdo=new PDO($dsn,'root' ,'');


?>
<style>
    *{
        font-family: system-ui;
    }
    h1{
        /* text-align: center; */
        color:lightcoral;
        border-left: 700px solid #ccc;
        padding-left: 100px;
        opacity: 0.7;
        text-transform: uppercase;
       
    }
    table{
        border-collapse: collapse;
        border: 1px solid #ccc;
        margin: 10px 0 ;
        width: 80%;
        text-align: center;
    }
    tr,td{
        border: 1px solid #ccc;

    }
    tr:nth-child(1){
        color: lightcoral;
    }
    #btn{
        width: 40px;
        margin: 5px auto;
        display: inline-block;
        border: 1px solid #ccc;
        padding: 1px 12px;
        border-radius: 7px;
        text-decoration: none;
        box-shadow: 0 0 10px #ccc;
        color: #ccc;
        text-transform: uppercase;       
    }   
    #btn:hover{
      font-weight: 900;
    }

</style>

<h1>
   Student - List 
</h1>

<a id="btn" href="insert_form.php">Add</a>
<table>
    <tr>
        <td>Id</td>
        <td>uni_Id</td>
        <td>Seat_Num</td>
        <td>Name</td>
        <td>birD</td>
        <td>National_ID</td>
        <td>Addr</td>
        <td>Parent</td>
        <td>Tel</td>
        <td>Major</td>
        <td>Secondary</td>
        <td>edit</td>
        <td>Delete</td>
    </tr>
    <?php 
    $sql = "select * from students ";
    $row = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    foreach ($row as $row) {
        # code...
    
    ?>
    <tr>
        <td><?=$row['id']         ;?>    </td>
        <td><?=$row['uni_id']     ;?>    </td>
        <td><?=$row['seat_num']   ;?>    </td>
        <td><?=$row['name']       ;?>    </td>
        <td><?=$row['birthday']   ;?>    </td>
        <td><?=$row['national_id'];?>    </td>
        <td><?=$row['address']    ;?>    </td>
        <td><?=$row['parent']     ;?>    </td>
        <td><?=$row['telphone']   ;?>    </td>
        <td><?=$row['major']      ;?>    </td>  
        <td><?=$row['secondary']  ;?>    </td>
        <td>Edit</td>
        <td> <a href="del.php?id=<?=$row['id'];?>" onclick="confirm('真假')">Delete</a> </td>
    </tr>

    <?php
    }
    ?>
</table>