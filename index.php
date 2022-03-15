<!DOCTYPE html>
<html>
<head>
	<title>IPL</title>
	<link rel="stylesheet" type="text/css" href="css/style1.css">  
</head>
<body>
	<div class="wrapper">
        <div class="menu">
          <a href="index.php"><img src="Images/IPLlogo.jpg" class="logo" /></a>
              <div class="search"><input type="text" placeholder="search team" id="searchbox"></div>             
            <ul>
                <li><a href="newplayers.php">PlayersList</a></li>            
                <li><a href="addplayers.php">RegisterPlayers</a></li>
                <li><a href="team.php">Team</a></li>
                <li><a href="index.php">Home</a></li>             
            </ul>
        </div>
        <div class="banner">
			    <img src="Images/banner.jpg" class="imgbanner" style="width: 100%;">
	    	</div>
        <div class="cards">
          <div class="card" data-title="Chennai Super Kings csk">
              <a href="csk.php"><img class="dots" src="Images/CSKlogo.jpg" alt="CSK-Logo"></a>                
                <div class="card__info">
                  <h4>Chennai Super Kings</h4>
                </div>
              </div>
            <div class="card" data-title="Delhi Capitals dc">
                <a href="dc.php"><img class="dots" src="Images/DClogo.JPG" alt="DC"></a>             
                <div class="card__info">
                  <h4>Delhi Capitals</h4>
                </div>
              </div>
              <div class="card" data-title="Punjab Kings">
                <a href="pk.php"><img class="dots" src="Images/KPlogo.jpg" alt="Punjab-Kings"></a>                
                <div class="card__info">
                  <h4>Kings XI Punjab</h4>
                </div>
              </div>  
            <div class="card" id="team1" data-title="Kolkata">
              <a href="kkr.php"><img class="dots" src="Images/KKRlogo.jpg" alt="KKR-Logo"></a>
               <div class="card__info">
                <h4>Kolkata Knight Riders</h4>
              </div>
            </div>
              <div class="card" data-title="Mumbai Indians mi">
                <a href="mi.php"><img class="dots" src="Images/MIlogo.jpg" alt="MI-logo"></a>                
                <div class="card__info">
                  <h4>Mumbai Indians</h4>
                </div>
              </div>
              <div class="card" data-title="Rajasthan Royals rr">
                <a href="rr.php"><img class="dots" src="Images/RRlogo.jpg" alt="rajastan"></a>                
                <div class="card__info">
                  <h4>Rajasthan Royals</h4>
                </div>
              </div>
              <div class="card" data-title="Royal Challengers Bangalore rcb">
                <a href="rcb.php"><img class="dots" src="Images/RCB.jpg" alt="RCB-Logo"></a>                
                <div class="card__info">
                  <h4>Royal Challengers Bangalore</h4>
                </div>
              </div>
              <div class="card" data-title="Sunrisers Hyderabad srh">
                <a href="srh.php"><img class="dots" src="Images/Hydlogo.jpg" alt="SRH-team-logo"></a>                
                <div class="card__info">
                  <h4>Sunrisers Hyderabad</h4>
                </div>
            </div>
        </div><br>
        <footer class="footer" >
			&copy;2022 &#64;debasmita | All Rights Rerserved
		</footer>
    
	</div>
</body>
</html>