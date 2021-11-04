
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="test1.css">
</head>

<body>

    <section class="body_info">
        <div class="header">
            <div class="input">
                <h3>Dog Selector</h3>
                <form class="title_send" method="post" action="">
                    <a>Number of Dogs shoose 1 to 4</a>
                    <input type="number" max="4" min="1" name="naumber" placeholder="naumber">
                    <button type="submit" name="form_validate" >Generator</button>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="all_card"><?php

                $host = "localhost";
                $dbusername = "root";
                $dbpassword = "";
                $dbname = "work";
                $con =  mysqli_connect ($host, $dbusername, $dbpassword, $dbname);





                if(isset($_POST['form_validate']))
                {
                    $bottom = $_POST['naumber'];
                } ;

                $var = $bottom;
                if($var == 1){
                    $randomElement = "SELECT * FROM `doge_page` ORDER by rand() limit 1";
                    $resu = $con-> query($randomElement);
                            
                    if ($resu-> num_rows > 0) 
                    {
                        while ($row = $resu-> fetch_assoc()) 
                        {
                            echo"    
                                <div class='card'>
                                    <img src='". $row["img"] ."'>
                                    <p>". $row["dis"] ."</p>
                                </div>
                            ";
                        }
                    }; 
                }
                else if($var == 2){
                    $randomElement = "SELECT * FROM `doge_page` ORDER by rand() limit 2";
                    $resu = $con-> query($randomElement);
                            
                    if ($resu-> num_rows > 0) 
                    {
                        while ($row = $resu-> fetch_assoc()) 
                        {
                            echo"    
                                <div class='card'>
                                    <img src='". $row["img"] ."'>
                                    <p>". $row["dis"] ."</p>
                                </div>
                            ";
                        }
                    }; 
                }
                else if($var == 3){
                    $randomElement = "SELECT * FROM `doge_page` ORDER by rand() limit 3";
                    $resu = $con-> query($randomElement);
                            
                    if ($resu-> num_rows > 0) 
                    {
                        while ($row = $resu-> fetch_assoc()) 
                        {
                            echo"    
                                <div class='card'>
                                    <img src='". $row["img"] ."'>
                                    <p>". $row["dis"] ."</p>
                                </div>
                            ";
                        }
                    }; 
                }
                else if($var == 4){
                    $randomElement = "SELECT * FROM `doge_page` ORDER by rand() limit 4";
                    $resu = $con-> query($randomElement);
                            
                    if ($resu-> num_rows > 0) 
                    {
                        while ($row = $resu-> fetch_assoc()) 
                        {
                            echo"    
                                <div class='card'>
                                    <img src='". $row["img"] ."'>
                                    <p>". $row["dis"] ."</p>
                                </div>
                            ";
                        }
                    };  
                }?>
            </div>
        </div>
    </section>

    </body>
</html>
