<?php
include 'header.php';
include'navigation.php'; 
include("partials/db-connection.php");
?>
<div class="row map-wrap">
        <div class="parties-container-title medium-12 large-12 columns">
             <h1>Your Result</h1>
        </div>
    </div>
<?php 
	// name the session
	$session_email = mysqli_real_escape_string($connection,$_SESSION['user']);
	// get the user id using $session_email from the database			
	$select = "SELECT * FROM user_table WHERE email = '$session_email'";
	$resultSelect = mysqli_query($connection, $select);
	$numOfRows = mysqli_num_rows($resultSelect);
	if($numOfRows>0){
		while($row = mysqli_fetch_assoc($resultSelect)) {
			$user_id = $row["id"];
		}
	} else {
		echo "There is no result";
	}
	// get the information to show for the user
	$voteSelect = "SELECT facttable.fact, info.leader_img, vote.agree, party.name FROM fact_table as facttable, parties_info_table as info, vote_table as vote, party_table as party WHERE vote.party_id = facttable.party_id AND vote.party_id = info.id AND vote.party_id = party.id AND vote.user_id = $user_id ORDER BY agree DESC";
	$resultVoteSelect = mysqli_query($connection, $voteSelect);
	$numOfRowsVote = mysqli_num_rows($resultVoteSelect);
	// get the result
	if($numOfRowsVote>0){
		while($row = mysqli_fetch_assoc($resultVoteSelect)) {
			
			$fact[] = $row["fact"];
			$leader_img[] = $row["leader_img"];
			$party_name[] = $row["name"];
			$agree[] = $row["agree"];
		}
	}
    // showing the random fact
    $randomVote = "SELECT facttable.fact, info.leader_img, party.name FROM fact_table as facttable, parties_info_table as info, party_table as party WHERE facttable.party_id = party.id AND facttable.party_id = info.id";
    $resultRandomVote = mysqli_query($connection, $randomVote);
    $numOfRowsRandom = mysqli_num_rows($resultRandomVote);
    if($numOfRowsRandom>0){
        while($random_row = mysqli_fetch_assoc($resultRandomVote)) {
            
            $random_fact[] = $random_row["fact"];
            $random_leader_img[] = $random_row["leader_img"];
            $random_party_name[] = $random_row["name"];
        }
    }

    $randomShow = rand(0, $numOfRowsRandom-1);
?>
<section class="random-fact row">
	<div class="medium-12 large-12 columns">
		<div class="parties-name-container">
            <?php if($numOfRowsVote>0){ //if vote was done ?>
                <h2><?php echo $party_name[0] ?></h2>
            <?php } else { // if the vote was never done before ?>
                <h2><?php echo $random_party_name[$randomShow] ?></h2>
            <?php } ?>
        </div>
		<div class="row">
			<div class="medium-5 large-6 columns">
                <?php if($numOfRowsVote>0){ //if vote was done ?>
				    <img src="./img/parties/<?php echo $leader_img[0]?>" alt="<?php echo $party_name[0] ?>">
                <?php } else { // if the vote was never done before ?>
                    <img src="./img/parties/<?php echo $random_leader_img[$randomShow]?>" alt="<?php echo $random_party_name[$randomShow] ?>">
                <?php } ?>
			</div>
			<div class="medium-7 large-6 columns">
				<h3>INTERESTING FACT</h3>
                <?php if($numOfRowsVote>0){ //if vote was done ?>
				    <p><?php echo $fact[0] ?></p>
                <?php } else { // if the vote was never done before ?>
                    <p><?php echo $random_fact[$randomShow] ?></p>
                <?php } ?>
			</div>
		</div>
	</div>	
</section>
<section class="vote-result row">
	<div class="medium-12 large-12 columns">
		<h3>VOTE RESULT</h3>
		<?php if($numOfRowsVote>0){ //if vote was done ?>
		<div id="container" style="width:100%; height:400px;"></div>
		<?php } else { // if the vote was never done before ?>
		<a class="save-button"href="compare.php">VOTE FOR PARTIES</a>
		<?php } ?>
	</div>	
</section>
<script>
	// putting data inside the js
	$(function () { 
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'VOTE RESULT'
        },
        xAxis: {
            categories: [<?php echo '"'.join($party_name, '","').'"'; ?>]
        },
        yAxis: {
            title: {
                text: 'Your Vote'
            }
        },
        series: [{
            name: <?php echo "'" . $session_email . "'"; ?>,
            data: [<?php echo join($agree, ','); ?>],
            pointWidth: 30
        }]
    });
});
// customize the bar chart
Highcharts.theme = {
    colors: ['#99cc33', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572', 
             '#FF9655', '#FFF263', '#6AF9C4'],
    chart: {
        backgroundColor: {
            linearGradient: [0, 0, 0, 0],
            stops: [
                [0, 'rgb(255, 255, 255)'],
                [1, 'rgb(240, 240, 255)']
            ]
        }
    },
    title: {
        style: {
            color: '#fff',
            font: 'bold 16px "Trebuchet MS", Verdana, sans-serif'
        }
    },
    subtitle: {
        style: {
            color: '#666666',
            font: 'bold 12px "Trebuchet MS", Verdana, sans-serif'
        }
    },
    legend: {
        itemStyle: {
            font: '9pt Trebuchet MS, Verdana, sans-serif',
            color: 'black'
        },
        itemHoverStyle:{
            color: 'gray'
        }   
    }
};

// Apply the theme
Highcharts.setOptions(Highcharts.theme);

</script>
<?php include("footer.php"); ?>