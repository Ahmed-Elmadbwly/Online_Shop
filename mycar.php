<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Car</title>
    <style>
        main{
            width:50%;
            margin-top:20px;
        }
        table{
            box-shadow: 1px 1px 10px silver;
            width: 100%;
            margin-bottom:30px;
        }
        thead{
            background-color:#3498DB;
            color:white;
            text-align:center;
        }
        tbody{
            text-align:center;
        }
        .aa{
            text-decoration: none;
            color: tomato;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <center>
    <h5 style="margin-top:20px;">My Cay</h5> 
    </center>;
  <?php
    include 'DB.php';
    session_start();
    if($_SESSION['userid']  != null){
        $stmt = $pdo->prepare("SELECT * FROM `usprod` JOIN prod ON usprod.id_prod = prod.id  WHERE id_user=$_SESSION[userid]");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $total=0;
        $count=0;
        foreach($result as $row){
            $count++;
            $total+=(intval($row['price']) * $row['quan']);
                echo "
            <center>
                <main>
                    <table>
                        <thead>
                            <tr>
                                <th  scope='col'>Product name</th>
                                <th scope='col' >Product price </th>
                                <th scope='col' style='color: #3498DB;' >Prod </th>
                                <th scope='col' style='color: #3498DB;'>Prod</th>
                                <th scope='col' style='color: #3498DB;'>Prod</th>
                                <th scope='col'>Delet</th>
                            </tr>
                        </thead>

                            <tbody>
                                <tr>
                                    <td>$row[name]</td>
                                    <td>$row[price]</td>
                                    <td> <a href='minus.php?id=$row[id_operation]'><img src='img/minus-sign.png' style='   width: 13px;'></a></td>
                                    <td><input type='text' value='$row[quan]' style='width: 50px; text-align: center;'></td>
                                    <td> <a href='plus.php?id=$row[id_operation]'><img src='img/plus.png' style='   width: 13px;'></a></td>
                                    <td><a href='del_card.php?id=$row[id_operation]' class='btn btn-danger'>Delet</a></td>
                                </tr>
                        </tbody>
                    </table>
                    </main>  
                    </center>";
        }
    }?>
    
          <center>
            <div style='width: 40%;   box-shadow: 1px 1px 10px silver;  font-size: 21px;   color: #97e272; margin-bottom: 12px;'>
             <span>Total price to <?php echo $count;?> product is : <?php echo $total;?></span>
            </div>
          <a href="shop.php" class="aa">Back to Product</a>
         </center>;
   
</body>
</html>