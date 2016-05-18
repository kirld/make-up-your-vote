<?php include("partials/db-connection.php") ?>

<?php
   //if no connection to database is made, error will display
   if( !$connection ) {
        die( "Connection Failed:" . mysqli_connect_error() );
    }
    else{

        $query = "SELECT * FROM parties_info_table WHERE party = '" . $_GET['party'] ."'";
   
        
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
<?php include 'header.php' ?>

<div class="row">
<!--    SIDE BAR-->

    <div class="parties-sidebar hide-for-small-only medium-4 columns">
        <h3>Parties</h3>
        <ul>
            <li><a href="parties.php?party=liberal">Liberal Party of Canada</a></li>
            <li><a href="parties.php?party=conservative">Conservative Party of Canada</a></li>
            <li><a href="parties.php?party=democratic">New Democratic Party</a></li>
            <li><a href="parties.php?party=quebecois">Bloc Quebecois</a></li>
            <li><a href="parties.php?party=green">Green Party of Canada</a></li>
            <li><a href="parties.php?party=libertarian">Libertarian Party of Canada</a></li>
        </ul>
    </div>

    <div class="small-12 medium-8 columns">
        <div class="row">
            <h1><?php if(isset($partyName)){ echo $partyName; } ?></h1>
            <h2>Leader</h2>

            <div class="row">
                <div class="small-12 medium-5 columns">
                    <img src="img/<?php echo $leaderImg ?>"/>
                </div>
                <div class="small-12 medium-7 columns">
                    <p><b><?php if(isset($leader)){ echo $leader; } ?></b><br><?php echo $leaderContent ?></p>
                </div>
            </div>
        </div>

        <div class="row">
            <h2>History</h2>
            <div class="row">
                <div class="small-12 medium-5 columns">
                    <img src="img/<?php echo $historyImg ?>"/>
                </div>
                <div class="small-12 medium-7 columns">
                    <p><?php  echo $historyContent ?></p>
                </div>
            </div>
        <div>   

        <div class="row">  
            <h2>Position</h2>
            <div class="row">
                <div class="small-12 medium-5 columns">    
                    <img src="img/<?php echo $positionImg ?>"/>
                </div>
                <div class="small-12 medium-7 columns">
                    <p><?php  echo $positionContent ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <script src="bower_components/jquery/dist/jquery.js"></script>
<script src="bower_components/what-input/what-input.js"></script>
<script src="bower_components/foundation-sites/dist/foundation.js"></script>
<script src="js/app.js"></script>
<script src="js/main.js"></script>
</body>
</html>	



