<?php
/**
* Template Name: abc
*/
?>

<?php get_header();?>
<?php
        $serverName = 'KK\SQLEXPRESS';
        $connectionOptions = [
            'Database' => 'test',
            'Uid' => 'sa',
            'PWD' => 'a',
        ];
        // Establishes the connection
        $conn = sqlsrv_connect($serverName, $connectionOptions);

       



        $tsql = 'SELECT  studname, roll, convert(varchar(11),dob ) as dob FROM dbo.student;';
        $getResults = sqlsrv_query($conn, $tsql);
        echo('' . PHP_EOL);
        if ($getResults === false) {
            format_errors(sqlsrv_errors());
            die();
        }
        while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
            echo( $row['studname'] . ' ' . $row['roll'] .' ' . $row['dob'] . PHP_EOL);
        }
        sqlsrv_free_stmt($getResults);

        function format_errors($errors)
        {
            /* Display errors. */
            echo 'Error information: ';

            foreach ($errors as $error) {
                echo 'SQLSTATE: ' . $error['SQLSTATE'] . '';
                echo 'Code: ' . $error['code'] . '';
                echo 'Message: ' . $error['message'] . '';
            }
        }


?>

<?php get_footer(); ?>






