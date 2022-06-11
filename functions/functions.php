<?php
    include("database.php");
    $db = $conn;
    $tableName = "lifestealsmp";
    $staffTable = "staff";
    $rank = "owner";
    $columns = ['id', 'uuid', 'username', 'points'];
    $fetchData = fetch_data($db, $tableName, $columns);
    $fetchDataAll = fetch_data_all($db, $tableName, $columns);

    function fetch_data($db, $tableName, $columns){
        if(empty($db)){
            $msg= "Database connection error";
        } elseif (empty($columns) || !is_array($columns)) {
            $msg="columns Name must be defined in an indexed array";
        } elseif(empty($tableName)){
            $msg= "Table Name is empty";
        } else{
            $query = "SELECT * FROM $tableName"." ORDER BY points DESC LIMIT 5";
            $result = $db->query($query);
            if($result== true){ 
                if ($result->num_rows > 0) {
                    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
                    $msg= $row;
                } else {
                    $msg= "No Data Found"; 
                }
            } else{
                $msg= mysqli_error($db);
            }
        }
        return $msg;
    }

    function fetch_data_all($db, $tableName, $columns){
        if(empty($db)){
            $msg= "Database connection error";
        } elseif (empty($columns) || !is_array($columns)) {
            $msg="columns Name must be defined in an indexed array";
        } elseif(empty($tableName)){
            $msg= "Table Name is empty";
        } else{
            $query = "SELECT * FROM $tableName"." ORDER BY points DESC LIMIT 10";
            $result = $db->query($query);
            if($result== true){ 
                if ($result->num_rows > 0) {
                    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
                    $msg= $row;
                } else {
                    $msg= "No Data Found"; 
                }
            } else{
                $msg= mysqli_error($db);
            }
        }
        return $msg;
    }
?>