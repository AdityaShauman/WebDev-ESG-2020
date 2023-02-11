<?php
    require "../connectdb.php";
    
    $username = $_GET["username"];
    function removing($username) {
        global $conn;
        mysqli_query($conn, "DELETE FROM user WHERE username='$username'");
        return mysqli_affected_rows($conn);
    }

    if ( removing($username) > 0 ) {
        echo "
            <script>
                alert('Data deleted');
                    document.location.href = 'manage_admin.php';
                </script>
            ";
    } else {
        echo "
            <script>
                    alert('Data not deleted');
                    document.location.href = 'manage_admin.php';
                </script>
            ";
    }
?>