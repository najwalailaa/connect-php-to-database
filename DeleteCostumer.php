<?php 

  include ('conn.php'); 

  $status = '';
  $result = '';
  //melakukan pengecekan apakah ada form yang dipost
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['customerNumber'])) {
        //query SQL
        $customerNumber_upd = $_GET['customerNumber'];
        $query = "DELETE FROM customers WHERE customerNumber = '$customerNumber_upd'"; 

        //eksekusi query
        $result = mysqli_query(connection(),$query);

        if ($result) {
          $status = 'ok';
        }
        else{
          $status = 'err';
        }

        //redirect ke halaman lain
        header('Location: index1.php?status='.$status);
    }  
  }