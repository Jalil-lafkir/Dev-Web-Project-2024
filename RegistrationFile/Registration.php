<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Registration.css">
    <title>RegistrationPHP</title>
</head>
<body>

    <?php
        if(isset($_POST["SButton"])) {
            $Sname = $_POST["Sname"];
            $SGsuite = $_POST["SGsuite"];
            $Spassword = $_POST["Spassword"];

            $ErrorMessage = '';
            $ErrorsCount = 0 ;
            $connection_key = mysqli_connect("localhost", "root", "", "USERSdatabase");

            if ($connection_key->connect_error) {
                die("Connection failed: " . $connection_key->connect_error);
            }

            if(empty($Sname) || empty($SGsuite) || empty($Spassword)) {
                $message = " All Field Are Required ! <br>";
                $ErrorMessage = $ErrorMessage.$message;
                $ErrorsCount++;
            }

            if(!filter_var($SGsuite, FILTER_VALIDATE_EMAIL) || substr($SGsuite, -strlen("@g.ens-kouba.dz")) !== "@g.ens-kouba.dz") {
                $message = " Invalid G-suite ! <br>";
                $ErrorMessage = $ErrorMessage.$message;
                $ErrorsCount++;
            } else {
                $sql = "SELECT * FROM USERSINFO WHERE USERGSUITE = '$SGsuite'";
                $result = $connection_key->query($sql);
                if($result->num_rows > 0) {
                    $message = " G-suite Has Been Taken ! <br>";
                    $ErrorMessage = $ErrorMessage.$message;
                    $ErrorsCount++;
                }
            }
            
            if(strlen($Spassword) < 4) {
                $message = " Short Password ! <br>";
                $ErrorMessage = $ErrorMessage.$message;
                $ErrorsCount++;
            }
            if($ErrorsCount > 0) {
                mysqli_close($connection_key);
                header("Location: http://127.0.0.1:5500/RegistrationFile-01/Registration.html?message=$ErrorMessage");
            }
            if($ErrorsCount == 0) {
                $sql = "INSERT INTO USERSINFO (USERNAME, USERGSUITE, USERPASSWORD) VALUES ('$Sname', '$SGsuite', '$Spassword')";
                if(mysqli_query($connection_key, $sql)) {
                    
                    session_start();
                    $_SESSION["USERNAME"] = $Sname ;
                    
                    $message = " Your Sign Up Has Been Successful ! ";
                    header("Location: http://localhost:3000/SiteFile-01/FinalProject.php?message=$message");
                } else {
                    
                    mysqli_close($connection_key);
                    $message = " Registration Failed ! ";
                    header("Location: http://127.0.0.1:5500/RegistrationFile-01/Registration.html?message=$message");
                }
            }
        }

        if(isset($_POST["LButton"])) {

            $LGsuite = $_POST["LGsuite"];
            $Lpassword = $_POST["Lpassword"];
            
            $ErrorsCount = 0 ;
            $connection_key = mysqli_connect("localhost", "root", "", "USERSdatabase");
            if ($connection_key->connect_error) {
                die("Connection failed: " . $connection_key->connect_error);
            }
            
            $sql = "SELECT * FROM USERSINFO WHERE USERGSUITE = '$LGsuite'";
            $result = $connection_key->query($sql);
            if($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $storedPassword = $row['USERPASSWORD'];
                if($Lpassword == $storedPassword) 
                {
                    session_start();
                    $sql = "SELECT USERNAME FROM USERSINFO WHERE USERGSUITE = '$LGsuite'";
                    $result = $connection_key->query($sql);
                    $row = $result->fetch_assoc();
                    $_SESSION["USERNAME"] =  $row['USERNAME'] ;
                    
                    $message = " Your Log in Has Been Successful ! ";
                    header("Location: http://localhost:3000/SiteFile-01/FinalProject.php?message=$message");
                } else
                    {
                        $message = " Wrong Password ! ";
                        header("Location: http://localhost:3000/RegistrationFile-01/Registration.html?message=$message");
                    }
            } else
                {
                    $message = " Unregistred Or Invalid G-suite ! ";
                    header("Location: http://localhost:3000/RegistrationFile-01/Registration.html?message=$message");
                }
        }
    
    ?>
</body>
</html>