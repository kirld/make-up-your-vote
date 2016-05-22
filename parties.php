<?php include 'header.php' ?>
<?php include 'navigation.php';?>
<?php include("partials/db-connection.php") ?>

<?php
   //if no connection to database is made, error will display
   if( !$connection ) {
        die( "Connection Failed:" . mysqli_connect_error() );
    }
    else{

        $query = "SELECT * FROM parties_info_table WHERE id = '" . $_GET['id'] ."'";
   
        
        // LIST 
        $queryResult = mysqli_query($connection, $query);
        //amount of rows in table
        $numberOfRows = mysqli_num_rows($queryResult);
        //if  not empty
        if ($numberOfRows > 0) {
      
            while ($row = mysqli_fetch_assoc($queryResult)) {
                
                $partyName = $row['party_name'];
                
                $leader = $row['leader'];
                $leaderContent = $row['leader_content'];
                $leaderImg = $row['leader_img'];
                
                $historyContent = $row['history_content'];
                $historyImg = $row['history_img'];
                
                $positionContent = $row['position_content'];
                $positionImg = $row['position_image'];
            }
      
        } 
        else {
            echo "<p>No Articles Available yet</p>";
        }
    }
    
    
?>
<div class="parties-page map-wrap">
    <div class="row">
            <div class="large-12 small-6 columns">
                    <h3>PARTIES</h3>
            </div> 

            <div class="small-6 columns show-for-small-only">
                 <a class="mobile-tab" href="#">
                         <i class="fa fa-bars fa-2x"></i>
                 </a>	
             </div>
    </div>
    <div class="row">
        <div class="small-12 columns show-only-for-small no-padding">
                <div class="mobile-menu">
                        <ul>
                            <li><a href="parties.php?id=1">LIBERAL PARTY OF CANADA</a></li>
                            <li><a href="parties.php?id=3">CONSERVATIVE PARTY OF CANADA</a></li>
                            <li><a href="parties.php?id=2">NEW DEMOCRATIC PARTY</a></li>
                            <li><a href="parties.php?id=5">BLOC QUEBECOIS</a></li>
                            <li><a href="parties.php?id=4">GREEN PARTY OF CANADA</a></li>
                            <li><a href="parties.php?id=6">LIBERTARIAN PARTY OF CANADA</a></li>
                        </ul>
                </div>
        </div>
    </div>
</div>

<div class="parties-info-container row">
    <!--    SIDE BAR-->
    <div class="parties-sidebar hide-for-small-only medium-3 columns">
        <ul>
            <li><a href="parties.php?id=1">Liberal Party of Canada</a></li>
            <li><a href="parties.php?id=3">Conservative Party of Canada</a></li>
            <li><a href="parties.php?id=2">New Democratic Party</a></li>
            <li><a href="parties.php?id=5">Bloc Quebecois</a></li>
            <li><a href="parties.php?id=4">Green Party of Canada</a></li>
            <li><a href="parties.php?id=6">Libertarian Party of Canada</a></li>
        </ul>
    </div>

    <!--     PARTIES INFO-->
    <div class="parties-page-info-container small-12 medium-9 columns cd-container">
     
        <!--   PARTIES NAME-->
        <div class="row">
            <div class="parties-name-container small-12 columns">
                <h1><?php if(isset($partyName)){ echo $partyName; } ?></h1>
            </div>
        </div>

        <!--  LEADER -->
        <div class="info">
            <div class="row">
                <div class="small-12 columns">
                    <h2>Leader</h2>
                    <div class="progress">
                        <div id="leader"></div>
                    </div>
                </div>
            </div>
      
            <div class="row">           
                <div class="parties-img-container small-12 medium-5 columns">
                    <img src="img/parties/<?php echo $leaderImg ?>" alt="<?php echo $leader?> of <?php echo $partyName ?>"/>
                </div>
                <div class="small-12 medium-7 columns">
                    <p><b><?php if(isset($leader)){ echo $leader; } ?></b><br><?php echo $leaderContent ?></p>
                </div>
            </div>
        </div>
        
        <!--  HISTORY -->
        <div class="info">
            <div class="row">
                <div class="small-12 columns">
                    <h2>History</h2>
                    <div class="progress">
                        <div id="history"></div>
                    </div>
                </div>
            </div>
      
            <div class="row">
                <div class="parties-img-container small-12 medium-5 columns">
                    <img src="img/parties/<?php echo $historyImg ?>" alt="History of <?php echo $partyName ?>"/>
                </div>
                <div class="small-12 medium-7 columns">
                    <p><?php  echo $historyContent ?></p>
                </div>
            </div> 
        </div>

        <!--  POSITION  -->
        <div class="info">
            <div class="row">
                <div class="small-12 columns">
                    <h2>Position</h2>
                    <div class="progress">
                        <div id="position"></div>
                    </div>
                </div>
            </div>

            <div class="row">  
                <div class="parties-img-container small-12 medium-5 columns">    
                    <img src="img/parties/<?php echo $positionImg ?>" alt="Position of <?php echo $partyName ?>"/>
                </div>
                <div class="small-12 medium-7 columns">
                    <p><?php  echo $positionContent ?></p>
                </div>
            </div>
        </div> 
        
        <!--  VOTE AND RETURN BACK TO TOP  -->
        <div class="back-to-top-container row">
            <div class="small-12 medium-6 large-4 columns">
                <a href="compare.php" class="main-btn">Vote for this Party</a>
            </div>
            <div class="hide-for-small-only medium-6 columns">
                <a href="#0" class="cd-top"></a>
            </div>
        </div>
    </div>
</div>
<!-- Start of Footer -->
<?php include 'footer.php';?>