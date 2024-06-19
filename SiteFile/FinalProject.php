<!DOCTYPE html>
<html>
        <head>
            <meta charset="UTF-8">
            <title>Ecole Normale Superieure</title>
            <link rel="icon" href="/ImagesFile/Logo.jpg">
            <link rel="stylesheet" href="FinalProject.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://kit.fontawesome.com/9cd2a4ba0d.js" crossorigin="anonymous"></script>
            
        </head>
        <body>


            <!-- Header Section -->
            <section class="HeaderSectionStyle">
                <header class="HeaderStyle">
                    <div class="TitleStyle">
                        <img class="LogoStyle" src="Final Project Logo.png" alt="">
                        <h3 class="HeadingStyle">Higher School Of Teachers</h3> 
                    </div>
                    <div class="">
                        <nav class="NavBarStyle"> 
                            <a href="#Home">Home</a>
                            <a href="#">Services</a>
                            <a href="\SiteFile-01\FinalProject.html?message=Your seesion has been expired !<br> Please Log Back in!">Log out</a>
                            <a href="#ContactUs">Contacts Us</a>
                        </nav>
                    </div>
                </header>
                <div class="headerVide"></div>
            </section>


            <!-- Home Section -->
            <section class="HomeStyle" id="Home">
                <div class="SiteIntroStyle">
                    <p class="BigTextStyle">Hey <?php session_start(); if (!empty($_SESSION["USERNAME"])) { echo $_SESSION["USERNAME"]; } else { echo "there"; } ?> !</p><br>
                    <p class="OtherTextStyle">Welcome to our website for The Higher School of Teachers in Kouba, Algeria!<br>
                    Explore our services, including departments, sections , groups , timetables , exams , degrees! <br>
                    designed with easy access to help you become a successful educator or researcher. <a href="#Departments" class="OtherTextStyleLink">Check it out!</a></p>
                </div>
                
                <div class="Departments" id="Departments">
                    <p class="DepartmensTitleStyle">Departments</p>
                    <div class="DepartmentsCardsStyle">
                        <div class="DepartmentCardStyle">
                            <img src="https://i.pinimg.com/564x/80/56/1e/80561e8c9748a629f2d75ac4446d45da.jpg">
                            <div class="info">
                                <h1>Math</h1>
                                <p>The Mathematics Department was the first department established at the Higher Teachers School.</p>
                                <button id="MathSection">Read More</button>
                            </div>
                        </div>
                        <div class="DepartmentCardStyle">
                            <img src="https://i.pinimg.com/474x/57/e8/aa/57e8aa81c8cd6a93b6f60842667eb2bb.jpg">
                            <div class="info">
                                <h1>Copmputer Science</h1>
                                <p>The Computer Science Department was latest department established at the Higher Teachers School.</p>
                                <button id="ComputerScienceSection">Read More</button>
                            </div>
                        </div>
                        <div class="DepartmentCardStyle">
                            <img src="https://i.pinimg.com/564x/7b/d4/e6/7bd4e6f8c6b3158ee6793dcd9202033b.jpg">
                            <div class="info">
                                <h1>Physics</h1>
                                <p>The Physics Department is the most diversified department at the Higher Teachers School.</p>
                                <button id="PhysicsSection">Read More</button>
                            </div>
                        </div>
                        <div class="DepartmentCardStyle">
                            <img src="https://tint.creativemarket.com/4gmXXMB59W7-U-Drzx3M50OHbDUxfSFx8akq61RjrO8/width:1160/height:772/gravity:nowe/rt:fill-down/el:1/preset:cm_watermark_retina/czM6Ly9maWxlcy5jcmVhdGl2ZW1hcmtldC5jb20vaW1hZ2VzL3NjcmVlbnNob3RzL3Byb2R1Y3RzLzEyMy8xMjM5LzEyMzk3MTgvYmlvbG9neV9kb29kbGUtY20tby5qcGc?1462425189">
                            <div class="info">
                                <h1>Natural Science</h1>
                                <p> The Natural Science Departments is the largest departments at the Higher Teachers School.</p>
                                <button id="NaturalSienceSection">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Math Section -->
            <section class="DepartmentsDetailesStyle" id="Math">
                <div class="DepartmentInfoStyle">
                    <p class="BigTextStyle">Departments &gt; Math </p><br>
                    <p class="DepartmentsIntroStyle">The Department of Mathematics The first department established in the school Supreme For professors. 
                        Opened a year 1975 with the aim of providing all Configurations Private With mathematics of gradation  Beyond gradation, which is
                        Currently interested in preparing Professors of mathematics For both stages high school And medium.
                        constribte Mathematics department as well In scientific activities The other for school. <a href="#" class="OtherTextStyleLink">Browse Services!</a></p>
                </div>
                <div style="display: flex; flex-wrap:nowrap">
                    <div class="YearsButtonsStyle">
                        <button class="YearButtonStyle" id="FirstYearButtonMath">
                            <span>First Year</span>
                        </button>
                        <button class="YearButtonStyle" id="SecondYearButtonMath">
                            <span>Second Year</span>
                        </button>
                        <button class="YearButtonStyle" id="ThirdYearButtonMath">
                            <span>Third Year</span>
                        </button>
                        <button class="YearButtonStyle" id="Fourth4YearButtonMath">
                            <span>Fourth Year 4+</span>
                        </button>
                        <button class="YearButtonStyle" id="Fourth5YearButtonMath">
                            <span>Fourth Year 5+</span>
                        </button>
                        <button class="YearButtonStyle" id="FifthYearButtonMath">
                            <span>Fifth Year</span>
                        </button>
                    </div>
                    <div class="ServicesDivStyle">
                        <div>
                            <img  class="ChoiceImg"  src="Choice.png" alt="" id="ChoiceImgMath">
                        </div>
                        <div class="">
                            <div class="ServicesCardStyle" id="FirstYearServicesMath">
                                <div class="CardStyle"><a href="#FirstYearMathTimeTable">TimeTable</a></div>
                                <div class="CardStyle"><a href="#FirstYearMathStudentInfo">Students Info</a></div>
                                <div class="CardStyle"><a href="#FirstYearMathSectionsLists">Sections List</a></div>
                                <div class="CardStyle"><a href="#FirstYearMathGroupsLists">Groups List</a></div>
                                <div class="CardStyle"><a href="#FirstYearMathExamsFiles">Exams Files</a></div>
                                <div class="CardStyle"><a href="#FirstYearMathDegrees">Students Degrees</a></div>
                                <img src="Choice2.png" class="Choise2ImgStyle">
                            </div>
                            <div class="ServicesCardStyle" id="SecondYearServicesMath">
                                <div class="CardStyle"><a href="#SecondYearMathTimeTable">TimeTable</a></div>
                                <div class="CardStyle"><a href="#SecondYearMathStudentInfo">Students Info</a></div>
                                <div class="CardStyle"><a href="#SecondYearMathSectionsLists">Sections List</a></div>
                                <div class="CardStyle"><a href="#SecondYearMathGroupsLists">Groups List</a></div>
                                <div class="CardStyle"><a href="#SecondYearMathExamsFiles">Exams Files</a></div>
                                <div class="CardStyle"><a href="#SecondYearMathDegrees">Students Degrees</a></div>
                                <img src="Choice2.png" class="Choise2ImgStyle">
                            </div>
                            <div class="ServicesCardStyle" id="ThirdYearServicesMath">
                                <div class="CardStyle"><a href="#ThirdYearMathTimeTable">TimeTable</a></div>
                                <div class="CardStyle"><a href="#ThirdYearMathStudentInfo">Students Info</a></div>
                                <div class="CardStyle"><a href="#ThirdYearMathSectionsLists">Sections List</a></div>
                                <div class="CardStyle"><a href="#ThirdYearMathGroupsLists">Groups List</a></div>
                                <div class="CardStyle"><a href="#ThirdYearMathExamsFiles">Exams Files</a></div>
                                <div class="CardStyle"><a href="#ThirdYearMathDegrees">Students Degrees</a></div>
                                <img src="Choice2.png" class="Choise2ImgStyle">
                            </div>
                            <div class="ServicesCardStyle" id="Fourth4YearServicesMath">
                                <div class="CardStyle"><a href="#Fourth4YearMathTimeTable">TimeTable</a></div>
                                <div class="CardStyle"><a href="#Fourth4YearMathStudentInfo">Students Info</a></div>
                                <div class="CardStyle"><a href="#Fourth4YearMathSectionsLists">Sections List</a></div>
                                <div class="CardStyle"><a href="#Fourth4YearMathGroupsLists">Groups List</a></div>
                                <div class="CardStyle"><a href="#Fourth4YearMathExamsFiles">Exams Files</a></div>
                                <div class="CardStyle"><a href="#Fourth4YearMathDegrees">Students Degrees</a></div>
                                <img src="Choice2.png" class="Choise2ImgStyle">
                            </div>
                            <div class="ServicesCardStyle" id="Fourth5YearServicesMath">
                                <div class="CardStyle"><a href="#Fourth5YearMathTimeTable">TimeTable</a></div>
                                <div class="CardStyle"><a href="#Fourth5YearMathStudentInfo">Students Info</a></div>
                                <div class="CardStyle"><a href="#Fourth5YearMathSectionsLists">Sections List</a></div>
                                <div class="CardStyle"><a href="#Fourth5YearMathGroupsLists">Groups List</a></div>
                                <div class="CardStyle"><a href="#Fourth5YearMathExamsFiles">Exams Files</a></div>
                                <div class="CardStyle"><a href="#Fourth5YearMathDegrees">Students Degrees</a></div>
                                <img src="Choice2.png" class="Choise2ImgStyle">
                            </div>
                            <div class="ServicesCardStyle" id="FifthYearServicesMath">
                                <div class="CardStyle"><a href="#FifthYearMathTimeTable">TimeTable</a></div>
                                <div class="CardStyle"><a href="#FifthYearMathStudentInfo">Students Info</a></div>
                                <div class="CardStyle"><a href="#FifthYearMathSectionsLists">Sections List</a></div>
                                <div class="CardStyle"><a href="#FifthYearMathGroupsLists">Groups List</a></div>
                                <div class="CardStyle"><a href="#FifthYearMathExamsFiles">Exams Files</a></div>
                                <div class="CardStyle"><a href="#FifthYearMathDegrees">Students Degrees</a></div>
                                <img src="Choice2.png" class="Choise2ImgStyle">
                            </div> 
                        </div>
                    </div>
                </div> 
                <div class="DatadivsStyle">
                    <div class="DataDivStyle" id="FirstYearMathData">
                        <div class="TablesDivsStyle" id="FirstYearMathTimeTable">
                            <table class="TablesStyle" >
                                <thead>
                                    <tr>
                                        <td colspan="12">
                                            <div class="TableHeaderStyle">
                                                <h2>First year Math Time table</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>Day</td>
                                        <td>Groupe</td>
                                        <td>08:30</td>
                                        <td>Room</td>
                                        <td>09:55</td>
                                        <td>Room</td>
                                        <td>11:20</td>
                                        <td>Room</td>
                                        <td>12:45</td>
                                        <td>Room</td>
                                        <td>14:10</td>
                                        <td>Room</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT W_Day, Groupe, Class01, RoomC01, Class02, RoomC02, Class03, RoomC03, Class04, RoomC04, Class05, RoomC05 FROM FirstYearMathTimeTable";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["W_Day"]."</td> <td>".$row["Groupe"]."</td> <td>".$row["Class01"]."</td> <td>".$row["RoomC01"]."</td> <td>".$row["Class02"]."</td> <td>".$row["RoomC02"]."</td> <td>".$row["Class03"]."</td> <td>".$row["RoomC03"]."</td> <td>".$row["Class04"]."</td> <td>".$row["RoomC04"]."</td> <td>".$row["Class05"]."</td> <td>".$row["RoomC05"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                                
                            </table>
                
                        </div>
                
                        <div class="TablesDivsStyle" id="FirstYearMathStudentInfo">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="6">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Math Promo list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality FROM FirstYearMathPromo";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["N"]."</td><td>".$row["id"]."</td><td>".$row["Fullname"]."</td><td>".$row["G_suite"]."</td><td>".$row["Levelyear"]."</td><td>".$row["Speciality"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                        <div class="TablesDivsStyle" id="FirstYearMathSectionsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Math Section A list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM FirstYearMathSectionA";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Math Section B list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM FirstYearMathSectionB";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="FirstYearMathGroupsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Math Groupe 01 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FirstYearMathGroupe01";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Math Groupe 02 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FirstYearMathGroupe02";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Math Groupe 03 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FirstYearMathGroupe03";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Math Groupe 04 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FirstYearMathGroupe04";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Math Groupe 05 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FirstYearMathGroupe05";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Math Groupe 06 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FirstYearMathGroupe06";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="FirstYearMathDegrees">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Math Degrees list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Degrees</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Degree FROM FirstYearMathDegrees";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Degree"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                    <div class="DataDivStyle" id="SecondYearMathData">
                        <div class="TablesDivsStyle" id="SecondYearMathTimeTable">
                            <table class="TablesStyle" >
                                <thead>
                                    <tr>
                                        <td colspan="12">
                                            <div class="TableHeaderStyle">
                                                <h2>Second year Math Time table</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>Day</td>
                                        <td>Groupe</td>
                                        <td>08:30</td>
                                        <td>Room</td>
                                        <td>09:55</td>
                                        <td>Room</td>
                                        <td>11:20</td>
                                        <td>Room</td>
                                        <td>12:45</td>
                                        <td>Room</td>
                                        <td>14:10</td>
                                        <td>Room</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT W_Day, Groupe, Class01, RoomC01, Class02, RoomC02, Class03, RoomC03, Class04, RoomC04, Class05, RoomC05 FROM FirstYearMathTimeTable";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["W_Day"]."</td> <td>".$row["Groupe"]."</td> <td>".$row["Class01"]."</td> <td>".$row["RoomC01"]."</td> <td>".$row["Class02"]."</td> <td>".$row["RoomC02"]."</td> <td>".$row["Class03"]."</td> <td>".$row["RoomC03"]."</td> <td>".$row["Class04"]."</td> <td>".$row["RoomC04"]."</td> <td>".$row["Class05"]."</td> <td>".$row["RoomC05"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                                
                            </table>
                
                        </div>
                
                        <div class="TablesDivsStyle" id="SecondYearMathStudentInfo">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="6">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Math Promo list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality FROM SecondYearMathPromo";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["N"]."</td><td>".$row["id"]."</td><td>".$row["Fullname"]."</td><td>".$row["G_suite"]."</td><td>".$row["Levelyear"]."</td><td>".$row["Speciality"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                        <div class="TablesDivsStyle" id="SecondYearMathSectionsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Math Section A list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM SecondYearMathSectionA";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Math Section B list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM SecondYearMathSectionB";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="SecondYearMathGroupsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Math Groupe 01 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM SecondYearMathGroupe01";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Math Groupe 02 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM SecondYearMathGroupe02";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Math Groupe 03 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM SecondYearMathGroupe03";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Math Groupe 04 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM SecondYearMathGroupe04";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Math Groupe 05 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM SecondYearMathGroupe05";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Math Groupe 06 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM SecondYearMathGroupe06";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="SecondYearMathDegrees">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Math Degrees list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Degrees</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Degree FROM SecondYearMathDegrees";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Degree"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                    <div class="DataDivStyle" id="ThirdYearMathData">
                        <div class="TablesDivsStyle" id="ThirdYearMathTimeTable">
                            <table class="TablesStyle" >
                                <thead>
                                    <tr>
                                        <td colspan="12">
                                            <div class="TableHeaderStyle">
                                                <h2>Third year Math Time table</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>Day</td>
                                        <td>Groupe</td>
                                        <td>08:30</td>
                                        <td>Room</td>
                                        <td>09:55</td>
                                        <td>Room</td>
                                        <td>11:20</td>
                                        <td>Room</td>
                                        <td>12:45</td>
                                        <td>Room</td>
                                        <td>14:10</td>
                                        <td>Room</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT W_Day, Groupe, Class01, RoomC01, Class02, RoomC02, Class03, RoomC03, Class04, RoomC04, Class05, RoomC05 FROM ThirdYearMathTimeTable";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["W_Day"]."</td> <td>".$row["Groupe"]."</td> <td>".$row["Class01"]."</td> <td>".$row["RoomC01"]."</td> <td>".$row["Class02"]."</td> <td>".$row["RoomC02"]."</td> <td>".$row["Class03"]."</td> <td>".$row["RoomC03"]."</td> <td>".$row["Class04"]."</td> <td>".$row["RoomC04"]."</td> <td>".$row["Class05"]."</td> <td>".$row["RoomC05"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                                
                            </table>
                
                        </div>
                
                        <div class="TablesDivsStyle" id="ThirdYearMathStudentInfo">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="6">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Math Promo list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality FROM ThirdYearMathPromo";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["N"]."</td><td>".$row["id"]."</td><td>".$row["Fullname"]."</td><td>".$row["G_suite"]."</td><td>".$row["Levelyear"]."</td><td>".$row["Speciality"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                        <div class="TablesDivsStyle" id="ThirdYearMathSectionsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Math Section A list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM ThirdYearMathSectionA";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Math Section B list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM ThirdYearMathSectionB";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="ThirdYearMathGroupsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Math Groupe 01 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM ThirdYearMathGroupe01";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Math Groupe 02 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM ThirdYearMathGroupe02";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Math Groupe 03 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM ThirdYearMathGroupe03";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Math Groupe 04 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM ThirdYearMathGroupe04";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Math Groupe 05 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM ThirdYearMathGroupe05";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Math Groupe 06 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM ThirdYearMathGroupe06";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="ThirdYearMathDegrees">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Math Degrees list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Degrees</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Degree FROM ThirdYearMathDegrees";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Degree"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                    <div class="DataDivStyle" id="Fourth4YearMathData">
                        <div class="TablesDivsStyle" id="Fourth4YearMathTimeTable">
                            <table class="TablesStyle" >
                                <thead>
                                    <tr>
                                        <td colspan="12">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Math Time table</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>Day</td>
                                        <td>Groupe</td>
                                        <td>08:30</td>
                                        <td>Room</td>
                                        <td>09:55</td>
                                        <td>Room</td>
                                        <td>11:20</td>
                                        <td>Room</td>
                                        <td>12:45</td>
                                        <td>Room</td>
                                        <td>14:10</td>
                                        <td>Room</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT W_Day, Groupe, Class01, RoomC01, Class02, RoomC02, Class03, RoomC03, Class04, RoomC04, Class05, RoomC05 FROM Fourth4YearMathTimeTable";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["W_Day"]."</td> <td>".$row["Groupe"]."</td> <td>".$row["Class01"]."</td> <td>".$row["RoomC01"]."</td> <td>".$row["Class02"]."</td> <td>".$row["RoomC02"]."</td> <td>".$row["Class03"]."</td> <td>".$row["RoomC03"]."</td> <td>".$row["Class04"]."</td> <td>".$row["RoomC04"]."</td> <td>".$row["Class05"]."</td> <td>".$row["RoomC05"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                                
                            </table>
                
                        </div>
                
                        <div class="TablesDivsStyle" id="Fourth4YearMathStudentInfo">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="6">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Math Promo list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality FROM Fourth4YearMathPromo";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["N"]."</td><td>".$row["id"]."</td><td>".$row["Fullname"]."</td><td>".$row["G_suite"]."</td><td>".$row["Levelyear"]."</td><td>".$row["Speciality"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                        <div class="TablesDivsStyle" id="Fourth4YearMathSectionsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Math Section A list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM Fourth4YearMathSectionA";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Math Section B list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM Fourth4YearMathSectionB";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="Fourth4YearMathGroupsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Math Groupe 01 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth4YearMathGroupe01";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Math Groupe 02 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth4YearMathGroupe02";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Math Groupe 03 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth4YearMathGroupe03";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Math Groupe 04 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth4YearMathGroupe04";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Math Groupe 05 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth4YearMathGroupe05";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Math Groupe 06 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth4YearMathGroupe06";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="Fourth4YearMathDegrees">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Math Degrees list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Degrees</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Degree FROM Fourth4YearMathDegrees";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Degree"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                    <div class="DataDivStyle" id="Fourth5YearMathData">
                        <div class="TablesDivsStyle" id="Fourth5YearMathTimeTable">
                            <table class="TablesStyle" >
                                <thead>
                                    <tr>
                                        <td colspan="12">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Math Time table</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>Day</td>
                                        <td>Groupe</td>
                                        <td>08:30</td>
                                        <td>Room</td>
                                        <td>09:55</td>
                                        <td>Room</td>
                                        <td>11:20</td>
                                        <td>Room</td>
                                        <td>12:45</td>
                                        <td>Room</td>
                                        <td>14:10</td>
                                        <td>Room</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT W_Day, Groupe, Class01, RoomC01, Class02, RoomC02, Class03, RoomC03, Class04, RoomC04, Class05, RoomC05 FROM Fourth5YearMathTimeTable";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["W_Day"]."</td> <td>".$row["Groupe"]."</td> <td>".$row["Class01"]."</td> <td>".$row["RoomC01"]."</td> <td>".$row["Class02"]."</td> <td>".$row["RoomC02"]."</td> <td>".$row["Class03"]."</td> <td>".$row["RoomC03"]."</td> <td>".$row["Class04"]."</td> <td>".$row["RoomC04"]."</td> <td>".$row["Class05"]."</td> <td>".$row["RoomC05"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                                
                            </table>
                
                        </div>
                
                        <div class="TablesDivsStyle" id="Fourth5YearMathStudentInfo">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="6">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Math Promo list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality FROM Fourth5YearMathPromo";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["N"]."</td><td>".$row["id"]."</td><td>".$row["Fullname"]."</td><td>".$row["G_suite"]."</td><td>".$row["Levelyear"]."</td><td>".$row["Speciality"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                        <div class="TablesDivsStyle" id="Fourth5YearMathSectionsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Math Section A list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM Fourth5YearMathSectionA";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Math Section B list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM Fourth5YearMathSectionB";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="Fourth5YearMathGroupsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Math Groupe 01 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth5YearMathGroupe01";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Math Groupe 02 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth5YearMathGroupe02";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Math Groupe 03 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth5YearMathGroupe03";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Math Groupe 04 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth5YearMathGroupe04";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Math Groupe 05 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth5YearMathGroupe05";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Math Groupe 06 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth5YearMathGroupe06";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="Fourth5YearMathDegrees">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Math Degrees list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Degrees</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Degree FROM Fourth5YearMathDegrees";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Degree"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                    <div class="DataDivStyle" id="FifthYearMathData">
                        <div class="TablesDivsStyle" id="FifthYearMathTimeTable">
                            <table class="TablesStyle" >
                                <thead>
                                    <tr>
                                        <td colspan="12">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth year Math Time table</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>Day</td>
                                        <td>Groupe</td>
                                        <td>08:30</td>
                                        <td>Room</td>
                                        <td>09:55</td>
                                        <td>Room</td>
                                        <td>11:20</td>
                                        <td>Room</td>
                                        <td>12:45</td>
                                        <td>Room</td>
                                        <td>14:10</td>
                                        <td>Room</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT W_Day, Groupe, Class01, RoomC01, Class02, RoomC02, Class03, RoomC03, Class04, RoomC04, Class05, RoomC05 FROM FifthYearMathTimeTable";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["W_Day"]."</td> <td>".$row["Groupe"]."</td> <td>".$row["Class01"]."</td> <td>".$row["RoomC01"]."</td> <td>".$row["Class02"]."</td> <td>".$row["RoomC02"]."</td> <td>".$row["Class03"]."</td> <td>".$row["RoomC03"]."</td> <td>".$row["Class04"]."</td> <td>".$row["RoomC04"]."</td> <td>".$row["Class05"]."</td> <td>".$row["RoomC05"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                                
                            </table>
                
                        </div>
                
                        <div class="TablesDivsStyle" id="FifthYearMathStudentInfo">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="6">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Math Promo list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality FROM FifthYearMathPromo";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["N"]."</td><td>".$row["id"]."</td><td>".$row["Fullname"]."</td><td>".$row["G_suite"]."</td><td>".$row["Levelyear"]."</td><td>".$row["Speciality"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>

                            </table>
                
                        </div>
                        <div class="TablesDivsStyle" id="FifthYearMathSectionsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Math Section A list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM FifthYearMathSectionA";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                                    
                                </tbody>
                            </table>
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Math Section B list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM FifthYearMathSectionB";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="FifthYearMathGroupsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Math Groupe 01 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FifthYearMathGroupe01";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Math Groupe 02 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FifthYearMathGroupe02";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Math Groupe 03 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FifthYearMathGroupe03";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Math Groupe 04 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FifthYearMathGroupe04";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Math Groupe 05 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FifthYearMathGroupe05";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Math Groupe 06 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FifthYearMathGroupe06";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="FifthYearMathDegrees">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Math Degrees list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Degrees</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "MathSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Degree FROM FifthYearMathDegrees";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Degree"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                </div>
            </section>


            <!-- Computer Science Section -->
            <section class="DepartmentsDetailesStyle" id="ComputerScience">
                <div class="DepartmentInfoStyle">
                    <p class="BigTextStyle">Departments &gt; Computer Science </p><br>
                    <p class="DepartmentsIntroStyle">The Department of Computer Science was established in 2009 and its mission is to train professors of computer science 
                        for high school and middle schools.Throughout their studies, students receive good training supervised by
                        qualified research professors who cover all fields. <a href="#" class="OtherTextStyleLink">Browse Services!</a>
                    </p>
                </div>
                <div style="display: flex; flex-wrap:nowrap">
                    <div class="YearsButtonsStyle">
                        <button class="YearButtonStyle" id="FirstYearButtonComputerScience">
                            <span>First Year</span>
                        </button>
                        <button class="YearButtonStyle" id="SecondYearButtonComputerScience">
                            <span>Second Year</span>
                        </button>
                        <button class="YearButtonStyle" id="ThirdYearButtonComputerScience">
                            <span>Third Year</span>
                        </button>
                        <button class="YearButtonStyle" id="Fourth4YearButtonComputerScience">
                            <span>Fourth Year 4+</span>
                        </button>
                        <button class="YearButtonStyle" id="Fourth5YearButtonComputerScience">
                            <span>Fourth Year 5+</span>
                        </button>
                        <button class="YearButtonStyle" id="FifthYearButtonComputerScience">
                            <span>Fifth Year</span>
                        </button>
                    </div>
                    <div class="ServicesDivStyle">
                        <div>
                            <img  class="ChoiceImg"  src="Choice.png" alt="" id="ChoiceImgComputerScience">
                        </div>
                        <div class="">

                            <div class="ServicesCardStyle" id="FirstYearServicesComputerScience">
                                <div class="CardStyle"><a href="#FirstYearComputerScienceTimeTable">TimeTable</a></div>
                                <div class="CardStyle"><a href="#FirstYearComputerScienceStudentInfo">Students Info</a></div>
                                <div class="CardStyle"><a href="#FirstYearComputerScienceSectionsLists">Sections List</a></div>
                                <div class="CardStyle"><a href="#FirstYearComputerScienceGroupsLists">Groups List</a></div>
                                <div class="CardStyle"><a href="#FirstYearComputerScienceExamsFiles">Exams Files</a></div>
                                <div class="CardStyle"><a href="#FirstYearComputerScienceDegrees">Students Degrees</a></div>
                                <img src="Choice2.png" class="Choise2ImgStyle">
                            </div>
                            <div class="ServicesCardStyle" id="SecondYearServicesComputerScience">
                                <div class="CardStyle"><a href="#SecondYearComputerScienceTimeTable">TimeTable</a></div>
                                <div class="CardStyle"><a href="#SecondYearComputerScienceStudentInfo">Students Info</a></div>
                                <div class="CardStyle"><a href="#SecondYearComputerScienceSectionsLists">Sections List</a></div>
                                <div class="CardStyle"><a href="#SecondYearComputerScienceGroupsLists">Groups List</a></div>
                                <div class="CardStyle"><a href="#SecondYearComputerScienceExamsFiles">Exams Files</a></div>
                                <div class="CardStyle"><a href="#SecondYearComputerScienceDegrees">Students Degrees</a></div>
                                <img src="Choice2.png" class="Choise2ImgStyle">
                            </div>
                            <div class="ServicesCardStyle" id="ThirdYearServicesComputerScience">
                                <div class="CardStyle"><a href="#ThirdYearComputerScienceTimeTable">TimeTable</a></div>
                                <div class="CardStyle"><a href="#ThirdYearComputerScienceStudentInfo">Students Info</a></div>
                                <div class="CardStyle"><a href="#ThirdYearComputerScienceSectionsLists">Sections List</a></div>
                                <div class="CardStyle"><a href="#ThirdYearComputerScienceGroupsLists">Groups List</a></div>
                                <div class="CardStyle"><a href="#ThirdYearComputerScienceExamsFiles">Exams Files</a></div>
                                <div class="CardStyle"><a href="#ThirdYearComputerScienceDegrees">Students Degrees</a></div>
                                <img src="Choice2.png" class="Choise2ImgStyle">
                            </div>
                            <div class="ServicesCardStyle" id="Fourth4YearServicesComputerScience">
                                <div class="CardStyle"><a href="#Fourth4YearComputerScienceTimeTable">TimeTable</a></div>
                                <div class="CardStyle"><a href="#Fourth4YearComputerScienceStudentInfo">Students Info</a></div>
                                <div class="CardStyle"><a href="#Fourth4YearComputerScienceSectionsLists">Sections List</a></div>
                                <div class="CardStyle"><a href="#Fourth4YearComputerScienceGroupsLists">Groups List</a></div>
                                <div class="CardStyle"><a href="#Fourth4YearComputerScienceExamsFiles">Exams Files</a></div>
                                <div class="CardStyle"><a href="#Fourth4YearComputerScienceDegrees">Students Degrees</a></div>
                                <img src="Choice2.png" class="Choise2ImgStyle">
                            </div>
                            <div class="ServicesCardStyle" id="Fourth5YearServicesComputerScience">
                                <div class="CardStyle"><a href="#Fourth5YearComputerScienceTimeTable">TimeTable</a></div>
                                <div class="CardStyle"><a href="#Fourth5YearComputerScienceStudentInfo">Students Info</a></div>
                                <div class="CardStyle"><a href="#Fourth5YearComputerScienceSectionsLists">Sections List</a></div>
                                <div class="CardStyle"><a href="#Fourth5YearComputerScienceGroupsLists">Groups List</a></div>
                                <div class="CardStyle"><a href="#Fourth5YearComputerScienceExamsFiles">Exams Files</a></div>
                                <div class="CardStyle"><a href="#Fourth5YearComputerScienceDegrees">Students Degrees</a></div>
                                <img src="Choice2.png" class="Choise2ImgStyle">
                            </div>
                            <div class="ServicesCardStyle" id="FifthYearServicesComputerScience">
                                <div class="CardStyle"><a href="#FifthYearComputerScienceTimeTable">TimeTable</a></div>
                                <div class="CardStyle"><a href="#FifthYearComputerScienceStudentInfo">Students Info</a></div>
                                <div class="CardStyle"><a href="#FifthYearComputerScienceSectionsLists">Sections List</a></div>
                                <div class="CardStyle"><a href="#FifthYearComputerScienceGroupsLists">Groups List</a></div>
                                <div class="CardStyle"><a href="#FifthYearComputerScienceExamsFiles">Exams Files</a></div>
                                <div class="CardStyle"><a href="#FifthYearComputerScienceDegrees">Students Degrees</a></div>
                                <img src="Choice2.png" class="Choise2ImgStyle">
                            </div> 
                        </div>
                    </div>  
                </div>
                <div class="DatadivsStyle">

                    <div class="DataDivStyle" id="FirstYearComputerScienceData">
                        <div class="TablesDivsStyle" id="FirstYearComputerScienceTimeTable">
                            <table class="TablesStyle" >
                                <thead>
                                    <tr>
                                        <td colspan="12">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Computer Science Time table</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>Day</td>
                                        <td>Groupe</td>
                                        <td>08:30</td>
                                        <td>Room</td>
                                        <td>09:55</td>
                                        <td>Room</td>
                                        <td>11:20</td>
                                        <td>Room</td>
                                        <td>12:45</td>
                                        <td>Room</td>
                                        <td>14:10</td>
                                        <td>Room</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT W_Day, Groupe, Class01, RoomC01, Class02, RoomC02, Class03, RoomC03, Class04, RoomC04, Class05, RoomC05 FROM FirstYearComputerScienceTimeTable";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["W_Day"]."</td> <td>".$row["Groupe"]."</td> <td>".$row["Class01"]."</td> <td>".$row["RoomC01"]."</td> <td>".$row["Class02"]."</td> <td>".$row["RoomC02"]."</td> <td>".$row["Class03"]."</td> <td>".$row["RoomC03"]."</td> <td>".$row["Class04"]."</td> <td>".$row["RoomC04"]."</td> <td>".$row["Class05"]."</td> <td>".$row["RoomC05"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                                
                            </table>
                
                        </div>
                
                        <div class="TablesDivsStyle" id="FirstYearComputerScienceStudentInfo">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="6">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Computer Science Promo list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality FROM FirstYearComputerSciencePromo";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["N"]."</td><td>".$row["id"]."</td><td>".$row["Fullname"]."</td><td>".$row["G_suite"]."</td><td>".$row["Levelyear"]."</td><td>".$row["Speciality"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                        <div class="TablesDivsStyle" id="FirstYearComputerScienceSectionsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Computer Science Section A list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM FirstYearComputerScienceSectionA";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Computer Science Section B list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM FirstYearComputerScienceSectionB";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="FirstYearComputerScienceGroupsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Computer Science Groupe 01 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FirstYearComputerScienceGroupe01";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Computer Science Groupe 02 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FirstYearComputerScienceGroupe02";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Computer Science Groupe 03 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FirstYearComputerScienceGroupe03";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Computer Science Groupe 04 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FirstYearComputerScienceGroupe04";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Computer Science Groupe 05 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FirstYearComputerScienceGroupe05";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Computer Science Groupe 06 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FirstYearComputerScienceGroupe06";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="FirstYearComputerScienceDegrees">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Computer Science Degrees list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Degrees</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Degree FROM FirstYearComputerScienceDegrees";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Degree"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                    <div class="DataDivStyle" id="SecondYearComputerScienceData">
                        <div class="TablesDivsStyle" id="SecondYearComputerScienceTimeTable">
                            <table class="TablesStyle" >
                                <thead>
                                    <tr>
                                        <td colspan="12">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Computer Science Time table</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>Day</td>
                                        <td>Groupe</td>
                                        <td>08:30</td>
                                        <td>Room</td>
                                        <td>09:55</td>
                                        <td>Room</td>
                                        <td>11:20</td>
                                        <td>Room</td>
                                        <td>12:45</td>
                                        <td>Room</td>
                                        <td>14:10</td>
                                        <td>Room</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT W_Day, Groupe, Class01, RoomC01, Class02, RoomC02, Class03, RoomC03, Class04, RoomC04, Class05, RoomC05 FROM SecondYearComputerScienceTimeTable";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["W_Day"]."</td> <td>".$row["Groupe"]."</td> <td>".$row["Class01"]."</td> <td>".$row["RoomC01"]."</td> <td>".$row["Class02"]."</td> <td>".$row["RoomC02"]."</td> <td>".$row["Class03"]."</td> <td>".$row["RoomC03"]."</td> <td>".$row["Class04"]."</td> <td>".$row["RoomC04"]."</td> <td>".$row["Class05"]."</td> <td>".$row["RoomC05"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                                
                            </table>
                
                        </div>
                
                        <div class="TablesDivsStyle" id="SecondYearComputerScienceStudentInfo">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="6">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Computer Science Promo list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality FROM SecondYearComputerSciencePromo";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["N"]."</td><td>".$row["id"]."</td><td>".$row["Fullname"]."</td><td>".$row["G_suite"]."</td><td>".$row["Levelyear"]."</td><td>".$row["Speciality"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                        <div class="TablesDivsStyle" id="SecondYearComputerScienceSectionsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Computer Science Section A list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM SecondYearComputerScienceSectionA";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Computer Science Section B list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM FirstYearComputerScienceSectionB";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="SecondYearComputerScienceGroupsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Computer Science Groupe 01 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM SecondYearComputerScienceGroupe01";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Computer Science Groupe 02 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM SecondYearComputerScienceGroupe02";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Computer Science Groupe 03 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM SecondYearComputerScienceGroupe03";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Computer Science Groupe 04 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM SecondYearComputerScienceGroupe04";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Computer Science Groupe 05 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM SecondYearComputerScienceGroupe05";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Computer Science Groupe 06 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM SecondYearComputerScienceGroupe06";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="SecondYearComputerScienceDegrees">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Computer Science Degrees list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Degrees</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Degree FROM SecondYearComputerScienceDegrees";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Degree"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                    <div class="DataDivStyle" id="ThirdYearComputerScienceData">
                        <div class="TablesDivsStyle" id="ThirdYearComputerScienceTimeTable">
                            <table class="TablesStyle" >
                                <thead>
                                    <tr>
                                        <td colspan="12">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Computer Science Time table</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>Day</td>
                                        <td>Groupe</td>
                                        <td>08:30</td>
                                        <td>Room</td>
                                        <td>09:55</td>
                                        <td>Room</td>
                                        <td>11:20</td>
                                        <td>Room</td>
                                        <td>12:45</td>
                                        <td>Room</td>
                                        <td>14:10</td>
                                        <td>Room</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT W_Day, Groupe, Class01, RoomC01, Class02, RoomC02, Class03, RoomC03, Class04, RoomC04, Class05, RoomC05 FROM ThirdYearComputerScienceTimeTable";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["W_Day"]."</td> <td>".$row["Groupe"]."</td> <td>".$row["Class01"]."</td> <td>".$row["RoomC01"]."</td> <td>".$row["Class02"]."</td> <td>".$row["RoomC02"]."</td> <td>".$row["Class03"]."</td> <td>".$row["RoomC03"]."</td> <td>".$row["Class04"]."</td> <td>".$row["RoomC04"]."</td> <td>".$row["Class05"]."</td> <td>".$row["RoomC05"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                
                        <div class="TablesDivsStyle" id="ThirdYearComputerScienceStudentInfo">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="6">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Computer Science Promo list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality FROM ThirdYearComputerSciencePromo";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["N"]."</td><td>".$row["id"]."</td><td>".$row["Fullname"]."</td><td>".$row["G_suite"]."</td><td>".$row["Levelyear"]."</td><td>".$row["Speciality"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                        <div class="TablesDivsStyle" id="ThirdYearComputerScienceSectionsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Computer Science Section A list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM ThirdYearComputerScienceSectionA";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Computer Science Section B list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM ThirdYearComputerScienceSectionB";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="ThirdYearComputerScienceGroupsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Computer Science Groupe 01 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM ThirdYearComputerScienceGroupe01";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Computer Science Groupe 02 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM ThirdYearComputerScienceGroupe02";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Computer Science Groupe 03 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM ThirdYearComputerScienceGroupe03";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Computer Science Groupe 04 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM ThirdYearComputerScienceGroupe04";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Computer Science Groupe 05 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM ThirdYearComputerScienceGroupe05";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Computer Science Groupe 06 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM ThirdYearComputerScienceGroupe06";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="ThirdYearComputerScienceDegrees">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Computer Science Degrees list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Degrees</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Degree FROM ThirdYearComputerScienceDegrees";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Degree"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                    <div class="DataDivStyle" id="Fourth4YearComputerScienceData">
                        <div class="TablesDivsStyle" id="Fourth4YearComputerScienceTimeTable">
                            <table class="TablesStyle" >
                                <thead>
                                    <tr>
                                        <td colspan="12">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Computer Science Time table</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>Day</td>
                                        <td>Groupe</td>
                                        <td>08:30</td>
                                        <td>Room</td>
                                        <td>09:55</td>
                                        <td>Room</td>
                                        <td>11:20</td>
                                        <td>Room</td>
                                        <td>12:45</td>
                                        <td>Room</td>
                                        <td>14:10</td>
                                        <td>Room</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT W_Day, Groupe, Class01, RoomC01, Class02, RoomC02, Class03, RoomC03, Class04, RoomC04, Class05, RoomC05 FROM Fourth4YearComputerScienceTimeTable";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["W_Day"]."</td> <td>".$row["Groupe"]."</td> <td>".$row["Class01"]."</td> <td>".$row["RoomC01"]."</td> <td>".$row["Class02"]."</td> <td>".$row["RoomC02"]."</td> <td>".$row["Class03"]."</td> <td>".$row["RoomC03"]."</td> <td>".$row["Class04"]."</td> <td>".$row["RoomC04"]."</td> <td>".$row["Class05"]."</td> <td>".$row["RoomC05"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                
                        <div class="TablesDivsStyle" id="Fourth4YearComputerScienceStudentInfo">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="6">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Computer Science Promo list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality FROM Fourth4YearComputerSciencePromo";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["N"]."</td><td>".$row["id"]."</td><td>".$row["Fullname"]."</td><td>".$row["G_suite"]."</td><td>".$row["Levelyear"]."</td><td>".$row["Speciality"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                        <div class="TablesDivsStyle" id="Fourth4YearComputerScienceSectionsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Computer Science Section A list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM Fourth4YearComputerScienceSectionA";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Computer Science Section B list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM Fourth4YearComputerScienceSectionB";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="Fourth4YearComputerScienceGroupsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Computer Science Groupe 01 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth4YearComputerScienceGroupe01";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Computer Science Groupe 02 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth4YearComputerScienceGroupe02";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Computer Science Groupe 03 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth4YearComputerScienceGroupe03";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Computer Science Groupe 04 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth4YearComputerScienceGroupe04";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Computer Science Groupe 05 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth4YearComputerScienceGroupe05";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Computer Science Groupe 06 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth4YearComputerScienceGroupe06";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="Fourth4YearComputerScienceDegrees">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Computer Science Degrees list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Degrees</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Degree FROM Fourth4YearComputerScienceDegrees";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Degree"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                    <div class="DataDivStyle" id="Fourth5YearComputerScienceData">
                        <div class="TablesDivsStyle" id="Fourth5YearComputerScienceTimeTable">
                            <table class="TablesStyle" >
                                <thead>
                                    <tr>
                                        <td colspan="12">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Computer Science Time table</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>Day</td>
                                        <td>Groupe</td>
                                        <td>08:30</td>
                                        <td>Room</td>
                                        <td>09:55</td>
                                        <td>Room</td>
                                        <td>11:20</td>
                                        <td>Room</td>
                                        <td>12:45</td>
                                        <td>Room</td>
                                        <td>14:10</td>
                                        <td>Room</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT W_Day, Groupe, Class01, RoomC01, Class02, RoomC02, Class03, RoomC03, Class04, RoomC04, Class05, RoomC05 FROM Fourth5YearComputerScienceTimeTable";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["W_Day"]."</td> <td>".$row["Groupe"]."</td> <td>".$row["Class01"]."</td> <td>".$row["RoomC01"]."</td> <td>".$row["Class02"]."</td> <td>".$row["RoomC02"]."</td> <td>".$row["Class03"]."</td> <td>".$row["RoomC03"]."</td> <td>".$row["Class04"]."</td> <td>".$row["RoomC04"]."</td> <td>".$row["Class05"]."</td> <td>".$row["RoomC05"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody> 
                            </table>
                
                        </div>
                
                        <div class="TablesDivsStyle" id="Fourth5YearComputerScienceStudentInfo">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="6">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Computer Science Promo list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality FROM Fourth5YearComputerSciencePromo";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["N"]."</td><td>".$row["id"]."</td><td>".$row["Fullname"]."</td><td>".$row["G_suite"]."</td><td>".$row["Levelyear"]."</td><td>".$row["Speciality"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                        <div class="TablesDivsStyle" id="Fourth5YearComputerScienceSectionsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Computer Science Section A list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM Fourth5YearComputerScienceSectionA";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Computer Science Section B list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM Fourth5YearComputerScienceSectionB";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="Fourth5YearComputerScienceGroupsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Computer Science Groupe 01 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth5YearComputerScienceGroupe01";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Computer Science Groupe 02 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth5YearComputerScienceGroupe02";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Computer Science Groupe 03 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth5YearComputerScienceGroupe03";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Computer Science Groupe 04 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth5YearComputerScienceGroupe04";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Computer Science Groupe 05 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth5YearComputerScienceGroupe05";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Computer Science Groupe 06 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth5YearComputerScienceGroupe06";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="Fourth5YearComputerScienceDegrees">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Computer Science Degrees list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Degrees</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Degree FROM Fourth5YearComputerScienceDegrees";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Degree"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                    <div class="DataDivStyle" id="FifthYearComputerScienceData">
                        <div class="TablesDivsStyle" id="FifthYearComputerScienceTimeTable">
                            <table class="TablesStyle" >
                                <thead>
                                    <tr>
                                        <td colspan="12">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Computer Science Time table</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>Day</td>
                                        <td>Groupe</td>
                                        <td>08:30</td>
                                        <td>Room</td>
                                        <td>09:55</td>
                                        <td>Room</td>
                                        <td>11:20</td>
                                        <td>Room</td>
                                        <td>12:45</td>
                                        <td>Room</td>
                                        <td>14:10</td>
                                        <td>Room</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT W_Day, Groupe, Class01, RoomC01, Class02, RoomC02, Class03, RoomC03, Class04, RoomC04, Class05, RoomC05 FROM FifthYearComputerScienceTimeTable";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["W_Day"]."</td> <td>".$row["Groupe"]."</td> <td>".$row["Class01"]."</td> <td>".$row["RoomC01"]."</td> <td>".$row["Class02"]."</td> <td>".$row["RoomC02"]."</td> <td>".$row["Class03"]."</td> <td>".$row["RoomC03"]."</td> <td>".$row["Class04"]."</td> <td>".$row["RoomC04"]."</td> <td>".$row["Class05"]."</td> <td>".$row["RoomC05"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                
                        <div class="TablesDivsStyle" id="FifthYearComputerScienceStudentInfo">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="6">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Computer Science Promo list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality FROM FifthYearComputerSciencePromo";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["N"]."</td><td>".$row["id"]."</td><td>".$row["Fullname"]."</td><td>".$row["G_suite"]."</td><td>".$row["Levelyear"]."</td><td>".$row["Speciality"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                        <div class="TablesDivsStyle" id="FifthYearComputerScienceSectionsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Computer Science Section A list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM FifthYearComputerScienceSectionA";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Computer Science Section B list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM FifthYearComputerScienceSectionB";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="FifthYearComputerScienceGroupsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Computer Science Groupe 01 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FifthYearComputerScienceGroupe01";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Computer Science Groupe 02 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FifthYearComputerScienceGroupe02";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Computer Science Groupe 03 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FifthYearComputerScienceGroupe03";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Computer Science Groupe 04 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FifthYearComputerScienceGroupe04";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Computer Science Groupe 05 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FifthYearComputerScienceGroupe05";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Computer Science Groupe 06 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FifthYearComputerScienceGroupe06";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="FifthYearComputerScienceDegrees">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Computer Science Degrees list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Degrees</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "ComputerScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Degree FROM FifthYearComputerScienceDegrees";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Degree"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                </div>
            </section>


            <!-- Physics Section -->
            <section class="DepartmentsDetailesStyle" id="Physics">
                <div class="DepartmentInfoStyle">
                    <p class="BigTextStyle">Departments &gt; Physics </p><br>
                    <p class="DepartmentsIntroStyle">Department of Physical is one of the academic pedagogical departments at the school, 
                        and it provides students with two courses of study: - A four-year plan in order to obtain the certificate of middle education professor. - Five-year milestone for obtaining a secondary education certificate. 
                        The first years are based on studying the foundations of physics, including mechanics, electricity, optics, and chemistry, such as the structure of matter and thermodynamics, in addition to mathematics. In this field, 
                        the student needs the topics of integration, differentiation, and algebra. The student also learns some computer programming skills that help him understand some natural phenomena and simulate some of them.
                        Physical and chemical experiments. <a href="#" class="OtherTextStyleLink">Browse Services!</a>
                    </p>
                </div>
                <div style="display: flex; flex-wrap:nowrap">
                    <div class="YearsButtonsStyle">
                        <button class="YearButtonStyle" id="FirstYearButtonPhysics">
                            <span>First Year</span>
                        </button>
                        <button class="YearButtonStyle" id="SecondYearButtonPhysics">
                            <span>Second Year</span>
                        </button>
                        <button class="YearButtonStyle" id="ThirdYearButtonPhysics">
                            <span>Third Year</span>
                        </button>
                        <button class="YearButtonStyle" id="Fourth4YearButtonPhysics">
                            <span>Fourth Year 4+</span>
                        </button>
                        <button class="YearButtonStyle" id="Fourth5YearButtonPhysics">
                            <span>Fourth Year 5+</span>
                        </button>
                        <button class="YearButtonStyle" id="FifthYearButtonPhysics">
                            <span>Fifth Year</span>
                        </button>
                    </div>
                    <div class="ServicesDivStyle">
                        <div>
                            <img  class="ChoiceImg"  src="Choice.png" alt="" id="ChoiceImgPhysics">
                        </div>
                        <div class="">

                            <div class="ServicesCardStyle" id="FirstYearServicesPhysics">
                                <div class="CardStyle"><a href="#FirstYearPhysicsTimeTable">TimeTable</a></div>
                                <div class="CardStyle"><a href="#FirstYearPhysicsStudentInfo">Students Info</a></div>
                                <div class="CardStyle"><a href="#FirstYearPhysicsSectionsLists">Sections List</a></div>
                                <div class="CardStyle"><a href="#FirstYearPhysicsGroupsLists">Groups List</a></div>
                                <div class="CardStyle"><a href="#FirstYearPhysicsExamsFiles">Exams Files</a></div>
                                <div class="CardStyle"><a href="#FirstYearPhysicsDegrees">Students Degrees</a></div>
                                <img src="Choice2.png" class="Choise2ImgStyle">
                            </div>
                            <div class="ServicesCardStyle" id="SecondYearServicesPhysics">
                                <div class="CardStyle"><a href="#SecondYearPhysicsTimeTable">TimeTable</a></div>
                                <div class="CardStyle"><a href="#SecondYearPhysicsStudentInfo">Students Info</a></div>
                                <div class="CardStyle"><a href="#SecondYearPhysicsSectionsLists">Sections List</a></div>
                                <div class="CardStyle"><a href="#SecondYearPhysicsGroupsLists">Groups List</a></div>
                                <div class="CardStyle"><a href="#SecondYearPhysicsExamsFiles">Exams Files</a></div>
                                <div class="CardStyle"><a href="#SecondYearPhysicsDegrees">Students Degrees</a></div>
                                <img src="Choice2.png" class="Choise2ImgStyle">
                            </div>
                            <div class="ServicesCardStyle" id="ThirdYearServicesPhysics">
                                <div class="CardStyle"><a href="#ThirdYearPhysicsTimeTable">TimeTable</a></div>
                                <div class="CardStyle"><a href="#ThirdYearPhysicsStudentInfo">Students Info</a></div>
                                <div class="CardStyle"><a href="#ThirdYearPhysicsSectionsLists">Sections List</a></div>
                                <div class="CardStyle"><a href="#ThirdYearPhysicsGroupsLists">Groups List</a></div>
                                <div class="CardStyle"><a href="#ThirdYearPhysicsExamsFiles">Exams Files</a></div>
                                <div class="CardStyle"><a href="#ThirdYearPhysicsDegrees">Students Degrees</a></div>
                                <img src="Choice2.png" class="Choise2ImgStyle">
                            </div>
                            <div class="ServicesCardStyle" id="Fourth4YearServicesPhysics">
                                <div class="CardStyle"><a href="#Fourth4YearPhysicsTimeTable">TimeTable</a></div>
                                <div class="CardStyle"><a href="#Fourth4YearPhysicsStudentInfo">Students Info</a></div>
                                <div class="CardStyle"><a href="#Fourth4YearPhysicsSectionsLists">Sections List</a></div>
                                <div class="CardStyle"><a href="#Fourth4YearPhysicsGroupsLists">Groups List</a></div>
                                <div class="CardStyle"><a href="#Fourth4YearPhysicsExamsFiles">Exams Files</a></div>
                                <div class="CardStyle"><a href="#Fourth4YearPhysicsDegrees">Students Degrees</a></div>
                                <img src="Choice2.png" class="Choise2ImgStyle">
                            </div>
                            <div class="ServicesCardStyle" id="Fourth5YearServicesPhysics">
                                <div class="CardStyle"><a href="#Fourth5YearPhysicsTimeTable">TimeTable</a></div>
                                <div class="CardStyle"><a href="#Fourth5YearPhysicsStudentInfo">Students Info</a></div>
                                <div class="CardStyle"><a href="#Fourth5YearPhysicsSectionsLists">Sections List</a></div>
                                <div class="CardStyle"><a href="#Fourth5YearPhysicsGroupsLists">Groups List</a></div>
                                <div class="CardStyle"><a href="#Fourth5YearPhysicsExamsFiles">Exams Files</a></div>
                                <div class="CardStyle"><a href="#Fourth5YearPhysicsDegrees">Students Degrees</a></div>
                                <img src="Choice2.png" class="Choise2ImgStyle">
                            </div>
                            <div class="ServicesCardStyle" id="FifthYearServicesPhysics">
                                <div class="CardStyle"><a href="#FifthYearPhysicsTimeTable">TimeTable</a></div>
                                <div class="CardStyle"><a href="#FifthYearPhysicsStudentInfo">Students Info</a></div>
                                <div class="CardStyle"><a href="#FifthYearPhysicsSectionsLists">Sections List</a></div>
                                <div class="CardStyle"><a href="#FifthYearPhysicsGroupsLists">Groups List</a></div>
                                <div class="CardStyle"><a href="#FifthYearPhysicsExamsFiles">Exams Files</a></div>
                                <div class="CardStyle"><a href="#FifthYearPhysicsDegrees">Students Degrees</a></div>
                                <img src="Choice2.png" class="Choise2ImgStyle">
                            </div> 
                        </div>
                    </div> 
                </div> 
                <div class="DatadivsStyle">
                    <div class="DataDivStyle" id="FirstYearPhysicsData">
                        <div class="TablesDivsStyle" id="FirstYearPhysicsTimeTable">
                            <table class="TablesStyle" >
                                <thead>
                                    <tr>
                                        <td colspan="12">
                                            <div class="TableHeaderStyle">
                                                <h2>First year Physics Time table</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>Day</td>
                                        <td>Groupe</td>
                                        <td>08:30</td>
                                        <td>Room</td>
                                        <td>09:55</td>
                                        <td>Room</td>
                                        <td>11:20</td>
                                        <td>Room</td>
                                        <td>12:45</td>
                                        <td>Room</td>
                                        <td>14:10</td>
                                        <td>Room</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT W_Day, Groupe, Class01, RoomC01, Class02, RoomC02, Class03, RoomC03, Class04, RoomC04, Class05, RoomC05 FROM FirstYearPhysicsTimeTable";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["W_Day"]."</td> <td>".$row["Groupe"]."</td> <td>".$row["Class01"]."</td> <td>".$row["RoomC01"]."</td> <td>".$row["Class02"]."</td> <td>".$row["RoomC02"]."</td> <td>".$row["Class03"]."</td> <td>".$row["RoomC03"]."</td> <td>".$row["Class04"]."</td> <td>".$row["RoomC04"]."</td> <td>".$row["Class05"]."</td> <td>".$row["RoomC05"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                
                        <div class="TablesDivsStyle" id="FirstYearPhysicsStudentInfo">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="6">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Physics Promo list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality FROM FirstYearPhysicsPromo";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["N"]."</td><td>".$row["id"]."</td><td>".$row["Fullname"]."</td><td>".$row["G_suite"]."</td><td>".$row["Levelyear"]."</td><td>".$row["Speciality"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                        <div class="TablesDivsStyle" id="FirstYearPhysicsSectionsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Physics Section A list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM FirstYearPhysicsSectionA";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Physics Section B list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM FirstYearPhysicsSectionB";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="FirstYearPhysicsGroupsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Physics Groupe 01 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FirstYearPhysicsGroupe01";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Physics Groupe 02 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FirstYearPhysicsGroupe02";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Physics Groupe 03 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FirstYearPhysicsGroupe03";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Physics Groupe 04 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FirstYearPhysicsGroupe04";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Physics Groupe 05 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FirstYearPhysicsGroupe05";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Physics Groupe 06 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FirstYearPhysicsGroupe06";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="FirstYearPhysicsDegrees">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Physics Degrees list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Degrees</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Degree FROM FirstYearPhysicsDegrees";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Degree"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                    <div class="DataDivStyle" id="SecondYearPhysicsData">
                        <div class="TablesDivsStyle" id="SecondYearPhysicsTimeTable">
                            <table class="TablesStyle" >
                                <thead>
                                    <tr>
                                        <td colspan="12">
                                            <div class="TableHeaderStyle">
                                                <h2>Second year Physics Time table</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>Day</td>
                                        <td>Groupe</td>
                                        <td>08:30</td>
                                        <td>Room</td>
                                        <td>09:55</td>
                                        <td>Room</td>
                                        <td>11:20</td>
                                        <td>Room</td>
                                        <td>12:45</td>
                                        <td>Room</td>
                                        <td>14:10</td>
                                        <td>Room</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT W_Day, Groupe, Class01, RoomC01, Class02, RoomC02, Class03, RoomC03, Class04, RoomC04, Class05, RoomC05 FROM SecondYearPhysicsTimeTable";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["W_Day"]."</td> <td>".$row["Groupe"]."</td> <td>".$row["Class01"]."</td> <td>".$row["RoomC01"]."</td> <td>".$row["Class02"]."</td> <td>".$row["RoomC02"]."</td> <td>".$row["Class03"]."</td> <td>".$row["RoomC03"]."</td> <td>".$row["Class04"]."</td> <td>".$row["RoomC04"]."</td> <td>".$row["Class05"]."</td> <td>".$row["RoomC05"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                
                        <div class="TablesDivsStyle" id="SecondYearPhysicsStudentInfo">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="6">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Physics Promo list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality FROM SecondYearPhysicsPromo";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["N"]."</td><td>".$row["id"]."</td><td>".$row["Fullname"]."</td><td>".$row["G_suite"]."</td><td>".$row["Levelyear"]."</td><td>".$row["Speciality"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                        <div class="TablesDivsStyle" id="SecondYearPhysicsSectionsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Physics Section A list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM SecondYearPhysicsSectionA";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Physics Section B list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM SecondYearPhysicsSectionB";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="SecondYearPhysicsGroupsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Physics Groupe 01 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM SecondYearPhysicsGroupe01";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Physics Groupe 02 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM SecondYearPhysicsGroupe02";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Physics Groupe 03 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM SecondYearPhysicsGroupe03";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Physics Groupe 04 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM SecondYearPhysicsGroupe04";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Physics Groupe 05 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM SecondYearPhysicsGroupe05";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Physics Groupe 06 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM SecondYearPhysicsGroupe06";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="SecondYearPhysicsDegrees">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Physics Degrees list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Degrees</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Degree FROM SecondYearPhysicsDegrees";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Degree"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                    <div class="DataDivStyle" id="ThirdYearPhysicsData">
                        <div class="TablesDivsStyle" id="ThirdYearPhysicsTimeTable">
                            <table class="TablesStyle" >
                                <thead>
                                    <tr>
                                        <td colspan="12">
                                            <div class="TableHeaderStyle">
                                                <h2>Third year Physics Time table</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>Day</td>
                                        <td>Groupe</td>
                                        <td>08:30</td>
                                        <td>Room</td>
                                        <td>09:55</td>
                                        <td>Room</td>
                                        <td>11:20</td>
                                        <td>Room</td>
                                        <td>12:45</td>
                                        <td>Room</td>
                                        <td>14:10</td>
                                        <td>Room</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT W_Day, Groupe, Class01, RoomC01, Class02, RoomC02, Class03, RoomC03, Class04, RoomC04, Class05, RoomC05 FROM ThirdYearPhysicsTimeTable";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["W_Day"]."</td> <td>".$row["Groupe"]."</td> <td>".$row["Class01"]."</td> <td>".$row["RoomC01"]."</td> <td>".$row["Class02"]."</td> <td>".$row["RoomC02"]."</td> <td>".$row["Class03"]."</td> <td>".$row["RoomC03"]."</td> <td>".$row["Class04"]."</td> <td>".$row["RoomC04"]."</td> <td>".$row["Class05"]."</td> <td>".$row["RoomC05"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                
                        <div class="TablesDivsStyle" id="ThirdYearPhysicsStudentInfo">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="6">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Physics Promo list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality FROM ThirdYearPhysicsPromo";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["N"]."</td><td>".$row["id"]."</td><td>".$row["Fullname"]."</td><td>".$row["G_suite"]."</td><td>".$row["Levelyear"]."</td><td>".$row["Speciality"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                        <div class="TablesDivsStyle" id="ThirdYearPhysicsSectionsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Physics Section A list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM ThirdYearPhysicsSectionA";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Physics Section B list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM ThirdYearPhysicsSectionB";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="ThirdYearPhysicsGroupsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Physics Groupe 01 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM ThirdYearPhysicsGroupe01";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Physics Groupe 02 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM ThirdYearPhysicsGroupe02";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Physics Groupe 03 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM ThirdYearPhysicsGroupe03";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Physics Groupe 04 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM ThirdYearPhysicsGroupe04";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Physics Groupe 05 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM ThirdYearPhysicsGroupe05";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Physics Groupe 06 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM ThirdYearPhysicsGroupe06";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="ThirdYearPhysicsDegrees">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Physics Degrees list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Degrees</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Degree FROM ThirdYearPhysicsDegrees";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Degree"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                    <div class="DataDivStyle" id="Fourth4YearPhysicsData">
                        <div class="TablesDivsStyle" id="Fourth4YearPhysicsTimeTable">
                            <table class="TablesStyle" >
                                <thead>
                                    <tr>
                                        <td colspan="12">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Physics Time table</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>Day</td>
                                        <td>Groupe</td>
                                        <td>08:30</td>
                                        <td>Room</td>
                                        <td>09:55</td>
                                        <td>Room</td>
                                        <td>11:20</td>
                                        <td>Room</td>
                                        <td>12:45</td>
                                        <td>Room</td>
                                        <td>14:10</td>
                                        <td>Room</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT W_Day, Groupe, Class01, RoomC01, Class02, RoomC02, Class03, RoomC03, Class04, RoomC04, Class05, RoomC05 FROM Fourth4YearPhysicsTimeTable";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["W_Day"]."</td> <td>".$row["Groupe"]."</td> <td>".$row["Class01"]."</td> <td>".$row["RoomC01"]."</td> <td>".$row["Class02"]."</td> <td>".$row["RoomC02"]."</td> <td>".$row["Class03"]."</td> <td>".$row["RoomC03"]."</td> <td>".$row["Class04"]."</td> <td>".$row["RoomC04"]."</td> <td>".$row["Class05"]."</td> <td>".$row["RoomC05"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                
                        <div class="TablesDivsStyle" id="Fourth4YearPhysicsStudentInfo">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="6">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Physics Promo list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality FROM Fourth4YearPhysicsPromo";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["N"]."</td><td>".$row["id"]."</td><td>".$row["Fullname"]."</td><td>".$row["G_suite"]."</td><td>".$row["Levelyear"]."</td><td>".$row["Speciality"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                        <div class="TablesDivsStyle" id="Fourth4YearPhysicsSectionsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Physics Section A list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM Fourth4YearPhysicsSectionA";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Physics Section B list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM Fourth4YearPhysicsSectionB";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="Fourth4YearPhysicsGroupsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Physics Groupe 01 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth4YearPhysicsGroupe01";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Physics Groupe 02 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth4YearPhysicsGroupe02";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Physics Groupe 03 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth4YearPhysicsGroupe03";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Physics Groupe 04 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth4YearPhysicsGroupe04";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Physics Groupe 05 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth4YearPhysicsGroupe05";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Physics Groupe 06 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth4YearPhysicsGroupe06";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="Fourth4YearPhysicsDegrees">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Physics Degrees list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Degrees</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Degree FROM Fourth4YearPhysicsDegrees";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Degree"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                    <div class="DataDivStyle" id="Fourth5YearPhysicsData">
                        <div class="TablesDivsStyle" id="Fourth5YearPhysicsTimeTable">
                            <table class="TablesStyle" >
                                <thead>
                                    <tr>
                                        <td colspan="12">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Physics Time table</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>Day</td>
                                        <td>Groupe</td>
                                        <td>08:30</td>
                                        <td>Room</td>
                                        <td>09:55</td>
                                        <td>Room</td>
                                        <td>11:20</td>
                                        <td>Room</td>
                                        <td>12:45</td>
                                        <td>Room</td>
                                        <td>14:10</td>
                                        <td>Room</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT W_Day, Groupe, Class01, RoomC01, Class02, RoomC02, Class03, RoomC03, Class04, RoomC04, Class05, RoomC05 FROM Fourth5YearPhysicsTimeTable";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["W_Day"]."</td> <td>".$row["Groupe"]."</td> <td>".$row["Class01"]."</td> <td>".$row["RoomC01"]."</td> <td>".$row["Class02"]."</td> <td>".$row["RoomC02"]."</td> <td>".$row["Class03"]."</td> <td>".$row["RoomC03"]."</td> <td>".$row["Class04"]."</td> <td>".$row["RoomC04"]."</td> <td>".$row["Class05"]."</td> <td>".$row["RoomC05"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                
                        <div class="TablesDivsStyle" id="Fourth5YearPhysicsStudentInfo">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="6">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Physics Promo list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality FROM Fourth5YearPhysicsPromo";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["N"]."</td><td>".$row["id"]."</td><td>".$row["Fullname"]."</td><td>".$row["G_suite"]."</td><td>".$row["Levelyear"]."</td><td>".$row["Speciality"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                        <div class="TablesDivsStyle" id="Fourth5YearPhysicsSectionsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Physics Section A list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM Fourth5YearPhysicsSectionA";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Physics Section B list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM Fourth5YearPhysicsSectionB";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="Fourth5YearPhysicsGroupsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Physics Groupe 01 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth5YearPhysicsGroupe01";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Physics Groupe 02 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth5YearPhysicsGroupe02";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Physics Groupe 03 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth5YearPhysicsGroupe03";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Physics Groupe 04 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth5YearPhysicsGroupe04";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Physics Groupe 05 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth4YearPhysicsGroupe05";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Physics Groupe 06 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth5YearPhysicsGroupe06";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="Fourth5YearPhysicsDegrees">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Physics Degrees list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Degrees</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Degree FROM Fourth5YearPhysicsDegrees";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Degree"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                    <div class="DataDivStyle" id="FifthYearPhysicsData">
                        <div class="TablesDivsStyle" id="FifthYearPhysicsTimeTable">
                            <table class="TablesStyle" >
                                <thead>
                                    <tr>
                                        <td colspan="12">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth year Physics Time table</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>Day</td>
                                        <td>Groupe</td>
                                        <td>08:30</td>
                                        <td>Room</td>
                                        <td>09:55</td>
                                        <td>Room</td>
                                        <td>11:20</td>
                                        <td>Room</td>
                                        <td>12:45</td>
                                        <td>Room</td>
                                        <td>14:10</td>
                                        <td>Room</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT W_Day, Groupe, Class01, RoomC01, Class02, RoomC02, Class03, RoomC03, Class04, RoomC04, Class05, RoomC05 FROM FifthYearPhysicsTimeTable";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["W_Day"]."</td> <td>".$row["Groupe"]."</td> <td>".$row["Class01"]."</td> <td>".$row["RoomC01"]."</td> <td>".$row["Class02"]."</td> <td>".$row["RoomC02"]."</td> <td>".$row["Class03"]."</td> <td>".$row["RoomC03"]."</td> <td>".$row["Class04"]."</td> <td>".$row["RoomC04"]."</td> <td>".$row["Class05"]."</td> <td>".$row["RoomC05"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                
                        <div class="TablesDivsStyle" id="FifthYearPhysicsStudentInfo">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="6">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Physics Promo list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality FROM FifthYearPhysicsPromo";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["N"]."</td><td>".$row["id"]."</td><td>".$row["Fullname"]."</td><td>".$row["G_suite"]."</td><td>".$row["Levelyear"]."</td><td>".$row["Speciality"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                        <div class="TablesDivsStyle" id="FifthYearPhysicsSectionsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Physics Section A list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM FifthYearPhysicsSectionA";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Physics Section B list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM FifthYearPhysicsSectionA";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="FifthYearPhysicsGroupsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Physics Groupe 01 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FifthYearPhysicsGroupe01";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Physics Groupe 02 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FifthYearPhysicsGroupe02";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Physics Groupe 03 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FifthYearPhysicsGroupe03";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Physics Groupe 04 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FifthYearPhysicsGroupe04";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Physics Groupe 05 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FifthYearPhysicsGroupe05";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Physics Groupe 06 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FifthYearPhysicsGroupe06";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="FifthYearPhysicsDegrees">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Physics Degrees list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Degrees</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "PhysicsSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Degree FROM FifthYearPhysicsDegrees";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Degree"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                    
                </div>
            </section>


            <!-- Natural Science Section -->
            <section class="DepartmentsDetailesStyle" id="NaturalScience">
                <div class="DepartmentInfoStyle">
                    <p class="BigTextStyle"> Departments &gt; Natural Science </p><br>
                    <p class="DepartmentsIntroStyle">The Department of Natural Sciences is considered one of the most important departments ,<br> as it employs the largest number of students and professors.
                        Students are trained during their academic course by a staff. Competent professors with various academic ranks. <a href="#" class="OtherTextStyleLink">Browse Services!</a>
                    </p>
                </div>
                <div style="display: flex; flex-wrap:nowrap">
                    <div class="YearsButtonsStyle">
                        <button class="YearButtonStyle" id="FirstYearButtonNaturalScience">
                            <span>First Year</span>
                        </button>
                        <button class="YearButtonStyle" id="SecondYearButtonNaturalScience">
                            <span>Second Year</span>
                        </button>
                        <button class="YearButtonStyle" id="ThirdYearButtonNaturalScience">
                            <span>Third Year</span>
                        </button>
                        <button class="YearButtonStyle" id="Fourth4YearButtonNaturalScience">
                            <span>Fourth Year 4+</span>
                        </button>
                        <button class="YearButtonStyle" id="Fourth5YearButtonNaturalScience">
                            <span>Fourth Year 5+</span>
                        </button>
                        <button class="YearButtonStyle" id="FifthYearButtonNaturalScience">
                            <span>Fifth Year</span>
                        </button>
                    </div>
                    <div class="ServicesDivStyle">
                        <div>
                            <img  class="ChoiceImg"  src="Choice.png" alt="" id="ChoiceImgNaturalScience">
                        </div>
                        <div class="">

                            <div class="ServicesCardStyle" id="FirstYearServicesNaturalScience">
                                <div class="CardStyle"><a href="#FirstYearNaturalScienceTimeTable">TimeTable</a></div>
                                <div class="CardStyle"><a href="#FirstYearNaturalScienceStudentInfo">Students Info</a></div>
                                <div class="CardStyle"><a href="#FirstYearNaturalScienceSectionsLists">Sections List</a></div>
                                <div class="CardStyle"><a href="#FirstYearNaturalScienceGroupsLists">Groups List</a></div>
                                <div class="CardStyle"><a href="#FirstYearNaturalScienceExamsFiles">Exams Files</a></div>
                                <div class="CardStyle"><a href="#FirstYearNaturalScienceDegrees">Students Degrees</a></div>
                                <img src="Choice2.png" class="Choise2ImgStyle">
                            </div>
                            <div class="ServicesCardStyle" id="SecondYearServicesNaturalScience">
                                <div class="CardStyle"><a href="#SecondYearNaturalScienceTimeTable">TimeTable</a></div>
                                <div class="CardStyle"><a href="#SecondYearNaturalScienceStudentInfo">Students Info</a></div>
                                <div class="CardStyle"><a href="#SecondYearNaturalScienceSectionsLists">Sections List</a></div>
                                <div class="CardStyle"><a href="#SecondYearNaturalScienceGroupsLists">Groups List</a></div>
                                <div class="CardStyle"><a href="#SecondYearNaturalScienceExamsFiles">Exams Files</a></div>
                                <div class="CardStyle"><a href="#SecondYearNaturalScienceDegrees">Students Degrees</a></div>
                                <img src="Choice2.png" class="Choise2ImgStyle">
                            </div>
                            <div class="ServicesCardStyle" id="ThirdYearServicesNaturalScience">
                                <div class="CardStyle"><a href="#ThirdYearNaturalScienceTimeTable">TimeTable</a></div>
                                <div class="CardStyle"><a href="#ThirdYearNaturalScienceStudentInfo">Students Info</a></div>
                                <div class="CardStyle"><a href="#ThirdYearNaturalScienceSectionsLists">Sections List</a></div>
                                <div class="CardStyle"><a href="#ThirdYearNaturalScienceGroupsLists">Groups List</a></div>
                                <div class="CardStyle"><a href="#ThirdYearNaturalScienceExamsFiles">Exams Files</a></div>
                                <div class="CardStyle"><a href="#ThirdYearNaturalScienceDegrees">Students Degrees</a></div>
                                <img src="Choice2.png" class="Choise2ImgStyle">
                            </div>
                            <div class="ServicesCardStyle" id="Fourth4YearServicesNaturalScience">
                                <div class="CardStyle"><a href="#Fourth4YearNaturalScienceTimeTable">TimeTable</a></div>
                                <div class="CardStyle"><a href="#Fourth4YearNaturalScienceStudentInfo">Students Info</a></div>
                                <div class="CardStyle"><a href="#Fourth4YearNaturalScienceSectionsLists">Sections List</a></div>
                                <div class="CardStyle"><a href="#Fourth4YearNaturalScienceGroupsLists">Groups List</a></div>
                                <div class="CardStyle"><a href="#Fourth4YearNaturalScienceExamsFiles">Exams Files</a></div>
                                <div class="CardStyle"><a href="#Fourth4YearNaturalScienceDegrees">Students Degrees</a></div>
                                <img src="Choice2.png" class="Choise2ImgStyle">
                            </div>
                            <div class="ServicesCardStyle" id="Fourth5YearServicesNaturalScience">
                                <div class="CardStyle"><a href="#Fourth5YearNaturalScienceTimeTable">TimeTable</a></div>
                                <div class="CardStyle"><a href="#Fourth5YearNaturalScienceStudentInfo">Students Info</a></div>
                                <div class="CardStyle"><a href="#Fourth5YearNaturalScienceSectionsLists">Sections List</a></div>
                                <div class="CardStyle"><a href="#Fourth5YearNaturalScienceGroupsLists">Groups List</a></div>
                                <div class="CardStyle"><a href="#Fourth5YearNaturalScienceExamsFiles">Exams Files</a></div>
                                <div class="CardStyle"><a href="#Fourth5YearNaturalScienceDegrees">Students Degrees</a></div>
                                <img src="Choice2.png" class="Choise2ImgStyle">
                            </div>
                            <div class="ServicesCardStyle" id="FifthYearServicesNaturalScience">
                                <div class="CardStyle"><a href="#FifthYearNaturalScienceTimeTable">TimeTable</a></div>
                                <div class="CardStyle"><a href="#FifthYearNaturalScienceStudentInfo">Students Info</a></div>
                                <div class="CardStyle"><a href="#FifthYearNaturalScienceSectionsLists">Sections List</a></div>
                                <div class="CardStyle"><a href="#FifthYearNaturalScienceGroupsLists">Groups List</a></div>
                                <div class="CardStyle"><a href="#FifthYearNaturalScienceExamsFiles">Exams Files</a></div>
                                <div class="CardStyle"><a href="#FifthYearNaturalScienceDegrees">Students Degrees</a></div>
                                <img src="Choice2.png" class="Choise2ImgStyle">
                            </div> 
                        </div>
                    </div>   
                </div>
                <div class="DatadivsStyle">
                    <div class="DataDivStyle" id="FirstYearNaturalScienceData">
                        <div class="TablesDivsStyle" id="FirstYearNaturalScienceTimeTable">
                            <table class="TablesStyle" >
                                <thead>
                                    <tr>
                                        <td colspan="12">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Natural Science Time table</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>Day</td>
                                        <td>Groupe</td>
                                        <td>08:30</td>
                                        <td>Room</td>
                                        <td>09:55</td>
                                        <td>Room</td>
                                        <td>11:20</td>
                                        <td>Room</td>
                                        <td>12:45</td>
                                        <td>Room</td>
                                        <td>14:10</td>
                                        <td>Room</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT W_Day, Groupe, Class01, RoomC01, Class02, RoomC02, Class03, RoomC03, Class04, RoomC04, Class05, RoomC05 FROM FirstYearNaturalScienceTimeTable";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["W_Day"]."</td> <td>".$row["Groupe"]."</td> <td>".$row["Class01"]."</td> <td>".$row["RoomC01"]."</td> <td>".$row["Class02"]."</td> <td>".$row["RoomC02"]."</td> <td>".$row["Class03"]."</td> <td>".$row["RoomC03"]."</td> <td>".$row["Class04"]."</td> <td>".$row["RoomC04"]."</td> <td>".$row["Class05"]."</td> <td>".$row["RoomC05"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                
                        <div class="TablesDivsStyle" id="FirstYearNaturalScienceStudentInfo">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="6">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Natural Science Promo list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality FROM FirstYearNaturalSciencePromo";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["N"]."</td><td>".$row["id"]."</td><td>".$row["Fullname"]."</td><td>".$row["G_suite"]."</td><td>".$row["Levelyear"]."</td><td>".$row["Speciality"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                        <div class="TablesDivsStyle" id="FirstYearNaturalScienceSectionsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Natural Science Section A list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM FirstYearNaturalScienceSectionA";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Natural Science Section B list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM FirstYearNaturalScienceSectionB";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="FirstYearNaturalScienceGroupsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Natural Science Groupe 01 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FirstYearNaturalScienceGroupe01";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Natural Science Groupe 02 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FirstYearNaturalScienceGroupe02";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Natural Science Groupe 03 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FirstYearNaturalScienceGroupe03";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Natural Science Groupe 04 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FirstYearNaturalScienceGroupe04";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Natural Science Groupe 05 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FirstYearNaturalScienceGroupe05";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Natural Science Groupe 06 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FirstYearNaturalScienceGroupe06";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="FirstYearNaturalScienceDegrees">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>First Year Natural Science Degrees list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Degrees</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Degree FROM FirstYearNaturalScienceDegrees";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Degree"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                    <div class="DataDivStyle" id="SecondYearNaturalScienceData">
                        <div class="TablesDivsStyle" id="SecondYearNaturalScienceTimeTable">
                            <table class="TablesStyle" >
                                <thead>
                                    <tr>
                                        <td colspan="12">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Natural Science Time table</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>Day</td>
                                        <td>Groupe</td>
                                        <td>08:30</td>
                                        <td>Room</td>
                                        <td>09:55</td>
                                        <td>Room</td>
                                        <td>11:20</td>
                                        <td>Room</td>
                                        <td>12:45</td>
                                        <td>Room</td>
                                        <td>14:10</td>
                                        <td>Room</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT W_Day, Groupe, Class01, RoomC01, Class02, RoomC02, Class03, RoomC03, Class04, RoomC04, Class05, RoomC05 FROM SecondYearNaturalScienceTimeTable";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["W_Day"]."</td> <td>".$row["Groupe"]."</td> <td>".$row["Class01"]."</td> <td>".$row["RoomC01"]."</td> <td>".$row["Class02"]."</td> <td>".$row["RoomC02"]."</td> <td>".$row["Class03"]."</td> <td>".$row["RoomC03"]."</td> <td>".$row["Class04"]."</td> <td>".$row["RoomC04"]."</td> <td>".$row["Class05"]."</td> <td>".$row["RoomC05"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                
                        <div class="TablesDivsStyle" id="SecondYearNaturalScienceStudentInfo">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="6">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Natural Science Promo list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality FROM SecondYearNaturalSciencePromo";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["N"]."</td><td>".$row["id"]."</td><td>".$row["Fullname"]."</td><td>".$row["G_suite"]."</td><td>".$row["Levelyear"]."</td><td>".$row["Speciality"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                        <div class="TablesDivsStyle" id="SecondYearNaturalScienceSectionsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Natural Science Section A list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM SecondYearNaturalScienceSectionA";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                                </tbody>
                            </table>
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Natural Science Section B list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM SecondYearNaturalScienceSectionB";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="SecondYearNaturalScienceGroupsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Natural Science Groupe 01 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM SecondYearNaturalScienceGroupe01";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Natural Science Groupe 02 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM SecondYearNaturalScienceGroupe02";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Natural Science Groupe 03 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM SecondYearNaturalScienceGroupe03";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Natural Science Groupe 04 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM SecondYearNaturalScienceGroupe04";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Natural Science Groupe 05 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM SecondYearNaturalScienceGroupe05";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Natural Science Groupe 06 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM SecondYearNaturalScienceGroupe06";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="SecondYearNaturalScienceDegrees">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Second Year Natural Science Degrees list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Degrees</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Degree FROM SecondYearNaturalScienceDegrees";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Degree"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                    <div class="DataDivStyle" id="ThirdYearNaturalScienceData">
                        <div class="TablesDivsStyle" id="ThirdYearNaturalScienceTimeTable">
                            <table class="TablesStyle" >
                                <thead>
                                    <tr>
                                        <td colspan="12">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Natural Science Time table</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>Day</td>
                                        <td>Groupe</td>
                                        <td>08:30</td>
                                        <td>Room</td>
                                        <td>09:55</td>
                                        <td>Room</td>
                                        <td>11:20</td>
                                        <td>Room</td>
                                        <td>12:45</td>
                                        <td>Room</td>
                                        <td>14:10</td>
                                        <td>Room</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT W_Day, Groupe, Class01, RoomC01, Class02, RoomC02, Class03, RoomC03, Class04, RoomC04, Class05, RoomC05 FROM ThirdYearNaturalScienceTimeTable";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["W_Day"]."</td> <td>".$row["Groupe"]."</td> <td>".$row["Class01"]."</td> <td>".$row["RoomC01"]."</td> <td>".$row["Class02"]."</td> <td>".$row["RoomC02"]."</td> <td>".$row["Class03"]."</td> <td>".$row["RoomC03"]."</td> <td>".$row["Class04"]."</td> <td>".$row["RoomC04"]."</td> <td>".$row["Class05"]."</td> <td>".$row["RoomC05"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                
                        <div class="TablesDivsStyle" id="ThirdYearNaturalScienceStudentInfo">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="6">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Natural Science Promo list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality FROM ThirdYearNaturalSciencePromo";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["N"]."</td><td>".$row["id"]."</td><td>".$row["Fullname"]."</td><td>".$row["G_suite"]."</td><td>".$row["Levelyear"]."</td><td>".$row["Speciality"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                        <div class="TablesDivsStyle" id="ThirdYearNaturalScienceSectionsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Natural Science Section A list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM ThirdYearNaturalScienceSectionA";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Natural Science Section B list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM ThirdYearNaturalScienceSectionB";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="ThirdYearNaturalScienceGroupsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Natural Science Groupe 01 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM ThirdYearNaturalScienceGroupe01";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Natural Science Groupe 02 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM ThirdYearNaturalScienceGroupe02";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Natural Science Groupe 03 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM ThirdYearNaturalScienceGroupe03";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Natural Science Groupe 04 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM ThirdYearNaturalScienceGroupe04";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Natural Science Groupe 05 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM ThirdYearNaturalScienceGroupe05";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Natural Science Groupe 06 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM ThirdYearNaturalScienceGroupe06";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="ThirdYearNaturalScienceDegrees">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Third Year Natural Science Degrees list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Degrees</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Degree FROM ThirdYearNaturalScienceDegrees";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Degree"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                    <div class="DataDivStyle" id="Fourth4YearNaturalScienceData">
                        <div class="TablesDivsStyle" id="Fourth4YearNaturalScienceTimeTable">
                            <table class="TablesStyle" >
                                <thead>
                                    <tr>
                                        <td colspan="12">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Natural Science Time table</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>Day</td>
                                        <td>Groupe</td>
                                        <td>08:30</td>
                                        <td>Room</td>
                                        <td>09:55</td>
                                        <td>Room</td>
                                        <td>11:20</td>
                                        <td>Room</td>
                                        <td>12:45</td>
                                        <td>Room</td>
                                        <td>14:10</td>
                                        <td>Room</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT W_Day, Groupe, Class01, RoomC01, Class02, RoomC02, Class03, RoomC03, Class04, RoomC04, Class05, RoomC05 FROM Fourth4YearNaturalScienceTimeTable";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["W_Day"]."</td> <td>".$row["Groupe"]."</td> <td>".$row["Class01"]."</td> <td>".$row["RoomC01"]."</td> <td>".$row["Class02"]."</td> <td>".$row["RoomC02"]."</td> <td>".$row["Class03"]."</td> <td>".$row["RoomC03"]."</td> <td>".$row["Class04"]."</td> <td>".$row["RoomC04"]."</td> <td>".$row["Class05"]."</td> <td>".$row["RoomC05"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>  
                            </table>
                        </div>
                
                        <div class="TablesDivsStyle" id="Fourth4YearNaturalScienceStudentInfo">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="6">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Natural Science Promo list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality FROM Fourth4YearNaturalSciencePromo";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["N"]."</td><td>".$row["id"]."</td><td>".$row["Fullname"]."</td><td>".$row["G_suite"]."</td><td>".$row["Levelyear"]."</td><td>".$row["Speciality"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                        <div class="TablesDivsStyle" id="Fourth4YearNaturalScienceSectionsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Natural Science Section A list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM Fourth4YearNaturalScienceSectionA";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Natural Science Section B list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM Fourth4YearNaturalScienceSectionB";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="Fourth4YearNaturalScienceGroupsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Natural Science Groupe 01 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth4YearNaturalScienceGroupe01";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Natural Science Groupe 02 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth4YearNaturalScienceGroupe02";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Natural Science Groupe 03 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth4YearNaturalScienceGroupe03";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Natural Science Groupe 04 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth4YearNaturalScienceGroupe04";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Natural Science Groupe 05 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth4YearNaturalScienceGroupe05";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Natural Science Groupe 06 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth4YearNaturalScienceGroupe06";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="Fourth4YearNaturalScienceDegrees">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 4+ Year Natural Science Degrees list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Degrees</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Degree FROM Fourth4YearNaturalScienceDegrees";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Degree"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                    <div class="DataDivStyle" id="Fourth5YearNaturalScienceData">
                        <div class="TablesDivsStyle" id="Fourth5YearNaturalScienceTimeTable">
                            <table class="TablesStyle" >
                                <thead>
                                    <tr>
                                        <td colspan="12">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Natural Science Time table</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>Day</td>
                                        <td>Groupe</td>
                                        <td>08:30</td>
                                        <td>Room</td>
                                        <td>09:55</td>
                                        <td>Room</td>
                                        <td>11:20</td>
                                        <td>Room</td>
                                        <td>12:45</td>
                                        <td>Room</td>
                                        <td>14:10</td>
                                        <td>Room</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT W_Day, Groupe, Class01, RoomC01, Class02, RoomC02, Class03, RoomC03, Class04, RoomC04, Class05, RoomC05 FROM Fourth5YearNaturalScienceTimeTable";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["W_Day"]."</td> <td>".$row["Groupe"]."</td> <td>".$row["Class01"]."</td> <td>".$row["RoomC01"]."</td> <td>".$row["Class02"]."</td> <td>".$row["RoomC02"]."</td> <td>".$row["Class03"]."</td> <td>".$row["RoomC03"]."</td> <td>".$row["Class04"]."</td> <td>".$row["RoomC04"]."</td> <td>".$row["Class05"]."</td> <td>".$row["RoomC05"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>   
                            </table>
                
                        </div>
                
                        <div class="TablesDivsStyle" id="Fourth5YearNaturalScienceStudentInfo">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="6">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Natural Science Promo list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality FROM Fourth5YearNaturalSciencePromo";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["N"]."</td><td>".$row["id"]."</td><td>".$row["Fullname"]."</td><td>".$row["G_suite"]."</td><td>".$row["Levelyear"]."</td><td>".$row["Speciality"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                        <div class="TablesDivsStyle" id="Fourth5YearNaturalScienceSectionsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Natural Science Section A list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM Fourth5YearNaturalScienceSectionA";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Natural Science Section B list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM Fourth5YearNaturalScienceSectionB";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="Fourth5YearNaturalScienceGroupsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Natural Science Groupe 01 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth5YearNaturalScienceGroupe01";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Natural Science Groupe 02 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth5YearNaturalScienceGroupe02";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Natural Science Groupe 03 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth5YearNaturalScienceGroupe03";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Natural Science Groupe 04 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth5YearNaturalScienceGroupe04";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Natural Science Groupe 05 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth5YearNaturalScienceGroupe05";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Natural Science Groupe 06 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM Fourth5YearNaturalScienceGroupe06";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="Fourth5YearNaturalScienceDegrees">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fourth 5+ Year Natural Science Degrees list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Degrees</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Degree FROM Fourth5YearNaturalScienceDegrees";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Degree"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                    <div class="DataDivStyle" id="FifthYearNaturalScienceData">
                        <div class="TablesDivsStyle" id="FifthYearNaturalScienceTimeTable">
                            <table class="TablesStyle" >
                                <thead>
                                    <tr>
                                        <td colspan="12">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Natural Science Time table</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>Day</td>
                                        <td>Groupe</td>
                                        <td>08:30</td>
                                        <td>Room</td>
                                        <td>09:55</td>
                                        <td>Room</td>
                                        <td>11:20</td>
                                        <td>Room</td>
                                        <td>12:45</td>
                                        <td>Room</td>
                                        <td>14:10</td>
                                        <td>Room</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT W_Day, Groupe, Class01, RoomC01, Class02, RoomC02, Class03, RoomC03, Class04, RoomC04, Class05, RoomC05 FROM FifthYearNaturalScienceTimeTable";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["W_Day"]."</td> <td>".$row["Groupe"]."</td> <td>".$row["Class01"]."</td> <td>".$row["RoomC01"]."</td> <td>".$row["Class02"]."</td> <td>".$row["RoomC02"]."</td> <td>".$row["Class03"]."</td> <td>".$row["RoomC03"]."</td> <td>".$row["Class04"]."</td> <td>".$row["RoomC04"]."</td> <td>".$row["Class05"]."</td> <td>".$row["RoomC05"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody> 
                                
                            </table>
                
                        </div>
                
                        <div class="TablesDivsStyle" id="FifthYearNaturalScienceStudentInfo">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="6">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Natural Science Promo list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");

                                        // Check connection
                                        if ($connection_key->connect_error) {
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality FROM FifthYearNaturalSciencePromo";
                                        $results = $connection_key->query($sql);

                                        if ($results) {
                                            if ($results->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $results->fetch_assoc()) {
                                                    echo "<tr><td>".$row["N"]."</td><td>".$row["id"]."</td><td>".$row["Fullname"]."</td><td>".$row["G_suite"]."</td><td>".$row["Levelyear"]."</td><td>".$row["Speciality"]."</td></tr>";
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                        } 
                                    ?>
                                </tbody>
                            </table>
                
                        </div>
                        <div class="TablesDivsStyle" id="FifthYearNaturalScienceSectionsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Natural Science Section A list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM FifthYearNaturalScienceSectionA";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Natural Science Section B list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Section</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost" , "root" , "" , "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N , id , Fullname , G_suite , Levelyear , Speciality , Section FROM FifthYearNaturalScienceSectionB";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Section"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="FifthYearNaturalScienceGroupsLists">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Natural Science Groupe 01 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FifthYearNaturalScienceGroupe01";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Natural Science Groupe 02 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FifthYearNaturalScienceGroupe02";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Natural Science Groupe 03 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FifthYearNaturalScienceGroupe03";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Natural Science Groupe 04 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FifthYearNaturalScienceGroupe04";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Natural Science Groupe 05 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FifthYearNaturalScienceGroupe05";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table> 
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="8">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Natural Science Groupe 06 list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Groupe</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Groupe FROM FifthYearNaturalScienceGroupe06";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Groupe"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo "0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="TablesDivsStyle" id="FifthYearNaturalScienceDegrees">
                            <table class="TablesStyle">
                                <thead>
                                    <tr>
                                        <td colspan="7">
                                            <div class="TableHeaderStyle">
                                                <h2>Fifth Year Natural Science Degrees list</h2>
                                                <input type="text" class="SearchBoxTableStyle" id="SearchBoxTable" placeholder="Search">
                                            </div>
                                        </td>  
                                    </tr>
                                    <tr>
                                        <td>#</td>
                                        <td>Id</td>
                                        <td>Full name</td>
                                        <td>G-suit</td>
                                        <td>Year</td>
                                        <td>Speciality</td>
                                        <td>Degrees</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $connection_key = mysqli_connect("localhost", "root", "", "NaturalScienceSectionDataBase");
                                        if ($connection_key->connect_error){
                                            die("Connection failed: " . $connection_key->connect_error);
                                        }

                                        $sql = "SELECT N, id, Fullname, G_suite, Levelyear, Speciality, Degree FROM FifthYearNaturalScienceDegrees";
                                        $results = $connection_key->query($sql);

                                        if ($results->num_rows > 0){
                                            while ($row = $results->fetch_assoc()){
                                                echo "<tr> <td>".$row["N"]."</td> <td>".$row["id"]."</td> <td>".$row["Fullname"]."</td> <td>".$row["G_suite"]."</td> <td>".$row["Levelyear"]."</td> <td>".$row["Speciality"]."</td> <td>".$row["Degree"]."</td> </tr>";
                                            }
                                        }
                                        else{
                                            echo"0 results";
                                        }
                                    ?>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                    
                </div>
            </section>


            <!--Contact us Section-->
            <section class="ContactUsStyle" id="ContactUs">
                    <div class="ContentStyle">
                        <h2 class="ContactUsIntroTitle">Want Talk!</h2>
                        <p class="ContactUsIntroContent">If there is anything you would like to say or suggest ,
                            or there is work you would like to share or work on it together, or anything , let me
                            know , please contact me.
                        </p>

                        <div class="ContactsStyle">
                            <div class="ContactInfoStyle">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="ContactTitleStyle">Address</div>
                                <div class="Info1Style">P3JF+HF4 , Kouba , Algeria</div>
                                <div class="Info2Style">Zaouiet Kounta , Adrar</div>
                            </div>
                            <div class="ContactInfoStyle">
                                <i class="fas fa-phone-alt"></i>
                                <div class="ContactTitleStyle">Phone</div>
                                <div class="Info1Style">+213 657 31 21 35</div>
                                <div class="Info2Style">+213 664 61 06 76</div>
                            </div>
                            <div class="ContactInfoStyle">
                                <i class="fas fa-envelope"></i>
                                <div class="ContactTitleStyle">Email</div>
                                <div class="Info1Style">lafkir.abdeldjalile35@g.ens-kouba.dz</div>
                                <div class="Info2Style">ahmedjalallafkir@gmail.com</div>
                            </div>
                        </div>

                        <form action="#">
                            <div class="InputsStyle">
                                <input type="text" placeholder=" Full name " name="Cname">
                            </div>
                            <div class="InputsStyle">
                                <input type="text" placeholder=" Example@g.ens-kouba.dz " name="CEmail">
                            </div>
                            <div class="message-box">
                                <textarea placeholder=" What's on your mind ? " name="Cmessage"></textarea>
                            </div>
                            <div class="SendButton">
                                <input type="button" name="CButton" value="Start Conversation" >
                            </div>
                        </form>

                        <?php
                            if(isset($_POST["CButton"])){
                                $Cname = $_POST["Cname"] ;
                                $CEmail = $_POST["CEmail"] ;
                                $Cmessage = $_POST["Cmessage"] ;            
                                
                                if(!empty($Cname) && !empty($CEmail) && !empty($Cmessage) ){        
                                    $Reciver = "jalil.lafkir01@gmail.com" ;
                                    $Subject = "Business Contact" ;
                                    $Messege = "{$Cname} says : {$Cmessage}" ;
                                    $Headers = "From: $CEmail ";
                                    if(mail($Reciver,$Subject,$Messege,$Headers)){
                                        echo"brrrrrrrrrrrrrrrr";
                                    }
                                }
                            }
                        ?>

                    </div>
            </section> 


            <!--Studen Card erea -->
            <div class="StudentCardsStyle" id="StudentCardsContainer">
                <div class="StudentCardStyle" id="StudentCard">
                    <div class="StudentCardStyleImg">
                        <img src="https://i.pinimg.com/564x/92/32/4d/92324d440218568571e5d464edea7979.jpg" alt="">
                    </div>
                    <div class="StudentCardStyleInfo">
                        <h3> Full name </h3>
                        <p><span>Id : </span> -------- </p>
                        <p><span>G-suite : </span> -------.Student@g.ens-kouba.dz </p>
                        <p><span>Level : </span> -------- </p>
                        <p><span>Speciality : </span> -------- </p>
                    </div>
                </div>
            </div>


            <!--Quick Nav Bar erea -->
            <div class="QuickNavDivStyle" id="QuickNav">
                <nav class="QuickNavStyle">
                    <a href="">Home</a>
                    <a href="">Math</a>
                    <a href="">Computer Science</a>
                    <a href="">Physics</a>
                    <a href="">Natural Science</a>
                </nav>
            </div>


            <!--Popup erea -->
            <div class="PopUpDivStyle">
                <p class="AdminMessegeStyle">Higher School Administration Say :</p>
                <p class="NotificationContentStyle"> Loren Ipsum dolor emit ipsum </p>
                <button class="CloseButtonStyle"> Close </button>
            </div>


            <!-- Footer Section -->
            <footer class="FooterStyle" id="Contacts">
                <div class="">
                    <nav class="FooterNavStyle"> 
                        <a href="mail to:lafkir.abdeldjalile35@g.ens-kouba.dz"><i class="fa-solid fa-envelope"></i></a>
                        <a href=""><i class="fa-brands fa-facebook"></i></a>
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-telegram"></i></a>
                    </nav>
                </div>
                <div class="FooterTitelStyle">
                    <p>&#169; 2024 All Rights Reserved</p>
                    <p>This Site Developed by <span> Abdeljalil Lafkir </span></p>
                </div>
            </footer>
            <div class="FooterVide"></div>


            <script src="FinalProject.js"></script>
        </body>
</html>