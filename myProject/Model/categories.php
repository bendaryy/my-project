<?php

require_once("connection.php");

function insert_category($name, $description) {
    //1) Connect to database
    //	localhost, username, password, database
    $connection = connect();

    //2) Prepare Query [INSERT/UPDATE/DELETE/SELECT]
    $query = "INSERT INTO categories (name, description)
              VALUES ('$name','$description')";

    //3) Execute Query
    $result = mysqli_query($connection, $query);

    //4) Fetch Result
    $result_array = array();
    if ($result) {
        $result_array['success'] = true;
        // 4.1) Success
        //      - [INSERT/UPDATE/DELETE]n rows affected
        $result_array['number_of_records'] = mysqli_affected_rows($connection);
        //      - [INSERT]inserted id
        $result_array['id'] = mysqli_insert_id($connection);
        //	- [SELECT] n total
        //	- [SELECT] resultset
    } else {
        $result_array['success'] = false;
        // 4.2) Error
        //	- Error Number
        $result_array['error_number'] = mysqli_errno($connection);
        //	- Error Message
        $result_array['error_message'] = mysqli_error($connection);
    }

    //5) Close connection
    mysqli_close($connection);
    return $result_array;
}

function update_category($id, $name, $description) {
    //1) Connect to database
    //	localhost, username, password, database
    $connection = connect();

    //2) Prepare Query [INSERT/UPDATE/DELETE/SELECT]
    $query = "UPDATE categories 
                SET name = '$name', 
                description = '$description'
                WHERE id = $id";

    //3) Execute Query
    $result = mysqli_query($connection, $query);

    //4) Fetch Result
    $result_array = array();
    if ($result) {
        $result_array['success'] = true;
        // 4.1) Success
        //      - [INSERT/UPDATE/DELETE]n rows affected
        $result_array['number_of_records'] = mysqli_affected_rows($connection);
        //      - [INSERT]inserted id
        //	- [SELECT] n total
        //	- [SELECT] resultset
    } else {
        $result_array['success'] = false;
        // 4.2) Error
        //	- Error Number
        $result_array['error_number'] = mysqli_errno($connection);
        //	- Error Message
        $result_array['error_message'] = mysqli_error($connection);
    }

    //5) Close connection
    mysqli_close($connection);
    return $result_array;
}

function delete_category($id) {
    //1) Connect to database
    //	localhost, username, password, database
    $connection = connect();

    //2) Prepare Query [INSERT/UPDATE/DELETE/SELECT]
    $query = "DELETE FROM categories WHERE id = $id";

    //3) Execute Query
    $result = mysqli_query($connection, $query);

    //4) Fetch Result
    $result_array = array();
    if ($result) {
        $result_array['success'] = true;
        // 4.1) Success
        //      - [INSERT/UPDATE/DELETE]n rows affected
        $result_array['number_of_records'] = mysqli_affected_rows($connection);
        //      - [INSERT]inserted id
        //	- [SELECT] n total
        //	- [SELECT] resultset
    } else {
        $result_array['success'] = false;
        // 4.2) Error
        //	- Error Number
        $result_array['error_number'] = mysqli_errno($connection);
        //	- Error Message
        $result_array['error_message'] = mysqli_error($connection);
    }

    //5) Close connection
    mysqli_close($connection);
    return $result_array;
}

function select_category($id) {
    //1) Connect to database
    //	localhost, username, password, database
    $connection = connect();

    //2) Prepare Query [INSERT/UPDATE/DELETE/SELECT]
    $query = "SELECT * FROM categories WHERE id = $id;";

    //3) Execute Query
    $result = mysqli_query($connection, $query);

    //4) Fetch Result
    $result_array = array();
    if ($result) {
        $result_array['success'] = true;
        // 4.1) Success
        //      - [INSERT/UPDATE/DELETE]n rows affected
        //      - [INSERT]inserted id
        //	- [SELECT] n total
        $result_array['total'] = mysqli_num_rows($result);
        //	- [SELECT] resultset

        $record = mysqli_fetch_array($result);
        $result_array['record'] = $record;
    } else {
        $result_array['success'] = false;
        // 4.2) Error
        //	- Error Number
        $result_array['error_number'] = mysqli_errno($connection);
        //	- Error Message
        $result_array['error_message'] = mysqli_error($connection);
    }

    //5) Close connection
    mysqli_close($connection);
    return $result_array;
}

function select_all_categories() {
    //1) Connect to database
    //	localhost, username, password, database
    $connection = connect();

    //2) Prepare Query [INSERT/UPDATE/DELETE/SELECT]
    $query = "SELECT * FROM categories;";

    //3) Execute Query
    $result = mysqli_query($connection, $query);

    //4) Fetch Result
    $result_array = array();
    if ($result) {
        $result_array['success'] = true;
        // 4.1) Success
        //      - [INSERT/UPDATE/DELETE]n rows affected
        //      - [INSERT]inserted id
        //	- [SELECT] n total
        $result_array['total'] = mysqli_num_rows($result);
        //	- [SELECT] resultset
        $records = array();
        while ($record = mysqli_fetch_array($result)) {
            $records[] = $record;
        }
        $result_array['records'] = $records;
    } else {
        $result_array['success'] = false;
        // 4.2) Error
        //	- Error Number
        $result_array['error_number'] = mysqli_errno($connection);
        //	- Error Message
        $result_array['error_message'] = mysqli_error($connection);
    }

    //5) Close connection
    mysqli_close($connection);
    return $result_array;
}

?>