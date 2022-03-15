<!DOCTYPE html>
<html>

<head>
    <title>IPL</title>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>

<body>
    <div class="wrapper" style="background-color:#ffa07a">
        <div class="menu">
            <a href="index.php"><img src="Images/IPLlogo.jpg" class="logo" /></a>
            <div class="search"><input type="text" placeholder="search team" id="searchbox"></div>
            <ul>
                <li><a href="newplayers.php">PlayersList</a></li>            
                <li><a href="addplayers.php">RegisterPlayers</a></li>
                <li><a href="team.php">Team</a></li>
                <li><a href="index.php">Home</a></li>
            </ul>
        </div><br>
        <h4 style="font-size: larger; margin-left: 20px;"><b>Team Details</b> </h4><br>
        <table class="table1" border="1" cellspacing="10" cellpadding="10" style="width: 100%; border-style:dashed;">
            <tr>
                <th rowspan="6" style="width: 400px;border: none;"><img src="Images/KPlogo.jpg" class="teamlogo"></th>
                <th colspan="2" class="teamtitle">Panjab Kings</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Player Count:</td>
                <td>15</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Captain:</td>
                <td>Mayank Agarwal</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Top Batsman:</td>
                <td>Mayank Agarwal,Chris Gayle,KL Rahul</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Top Bowler:</td>
                <td>Mohammed sami, Arshdeep singh</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">No of Championship:</td>
                <td>0</td>
            </tr>
        </table><br>
        <h4 style="margin-left: 20px; font-size: larger;"><b>Players Details</b></h4><br>
        <div class="cards">
            <!-- Flip start -->
             <!-- Mayank start -->
                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="Images/ma.jpg" alt="Avatar" style="width:100%;height:150%;">
                    </div>
                    <div class="flip-card-back" style="background-color: red">
                      <table border="1" class="table2" style="width: 100%;height: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>Mayank</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>PK</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Price:</td>
                            <td>12cr</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">PlayingStatus :</td>
                            <td>Playing</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Role:</td>
                            <td>Batsman</td>
                        </tr>
                    </table>
                    </div>
                  </div>
                </div>
                <!-- Mayank end -->
                <!-- Gayle start -->
                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="Images/gayle.jpg" alt="Avatar" style="width:100%;height:150%;">
                    </div>
                    <div class="flip-card-back" style="background-color: red">
                      <table border="1" class="table2" style="width: 100%; height: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>Gayle</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>PK</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Price:</td>
                            <td>10cr</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">PlayingStatus :</td>
                            <td>Playing</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Role:</td>
                            <td>Batsman</td>
                        </tr>
                    </table>
                    </div>
                  </div>
                </div>
                <!-- Gayle end -->
                <!-- Sami start -->
                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="Images/sami.jpg" alt="Avatar" style="width:100%;height:150%;">
                    </div>
                    <div class="flip-card-back" style="background-color: red">
                      <table border="1" class="table2" style="width: 100%;height: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>Sami</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>PK</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Price:</td>
                            <td>12cr</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">PlayingStatus :</td>
                            <td>Playing</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Role:</td>
                            <td>Bowler</td>
                        </tr>
                    </table>
                    </div>
                  </div>
                </div>
                <!-- Sami end -->
                <!-- Aeshdeep start -->
                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="Images/arshdeep.jpg" alt="Avatar" style="width:100%;height:150%;">
                    </div>
                    <div class="flip-card-back" style="background-color:red">
                      <table border="1" class="table2" style="width: 100%; height: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>Arshdeep</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>PK</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Price:</td>
                            <td>10cr</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">PlayingStatus :</td>
                            <td>Playing</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Role:</td>
                            <td>Bowler</td>
                        </tr>
                    </table>
                    </div>
                  </div>
                </div>
                <!-- Arshdeep end -->
                <!-- Flip start -->
        </div><br>
        <footer class="footer">
            &copy;2022 &#64;debasmita | All Rights Rerserved
        </footer>
    </div>
</body>

</html>