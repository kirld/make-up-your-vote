<?php
  // Start the session
  session_start();

  //Delete all session variables if user logs out
  if(isset($_POST['logOut']) OR !isset($_SESSION['user'])) {
    session_unset(); 
    session_destroy();
  }
 
include 'header.php';
include'navigation.php'; 
?>

		<!-- load angularJS -->
	    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular.min.js"></script>
	    <!--load angular route  -->
	    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
	    <!--load angular animate  -->
	    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.js"></script>
	    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
	    <!-- modules and controllers-->
	    <script src="js/vote.js"></script>

	    <style>
			.compare_head, .compare_content {
			  	transition: all linear 1.5s;
			}

			.ng-hide { font-size:0; }
			.ng-enter, 
			.ng-leave { 
				  -webkit-transition: 400ms cubic-bezier(0.250, 0.250, 0.750, 0.750) all;
				  -moz-transition: 400ms cubic-bezier(0.250, 0.250, 0.750, 0.750) all;
				  -ms-transition: 400ms cubic-bezier(0.250, 0.250, 0.750, 0.750) all;
				  -o-transition: 400ms cubic-bezier(0.250, 0.250, 0.750, 0.750) all;
				  transition: 400ms cubic-bezier(0.250, 0.250, 0.750, 0.750) all;
				  position: relative;
				  display: block;
			} 
			 
			.ng-enter.ng-enter-active, 
			.ng-leave {
				  opacity: 1;
				  top: 0;
				  height: 30px;
			}
			 
			.ng-leave.ng-leave-active,
			.ng-enter {
				  opacity: 0;
				  top: -50px;
				  height: 0px;
			}

			.compare_content {
				padding: 10px;
				height: 40%;
			}

			#comparePartySelectbox {
				background-color: #ebebeb;
				border: 0;
				background-image: url('./img/util/poly.png');
				background-size: 18px;
				padding-left: 25px;
				font-family: 'Oswald';
				text-transform: uppercase;
			}

			.parties-secondary-title {
				border-bottom: 4px solid #d7d7d7;
				margin-bottom: 25px;
			}

			.parties-secondary-title h4 {
				font-family: 'Oswald';
				text-transform: uppercase;
			}

			#comparePartyCheckbox {
				margin-bottom: 40px;
			}

			input[type="checkbox"] {
				
				-webkit-transform: scale(1.5);
			   	transform: scale(1.5);
			   	margin-right: 1.2em;
			}
			input[type=checkbox]:after {
			    content: "\2714";
			    color: #fff;
			    background-color: #d7d7d7;
			    display: inline-block;
			    width: 19px;
			    height: 19px;
			    visibility: visible;
			    padding-left: 4px;
			}

			input[type=checkbox]:checked:after {
			    content: "\2714";
			    background-color: #99cc33;
			    color: #000;
			}

			.checkbox-container {
				background-color: #ebebeb;
				padding: 20px;
			}
			
			.checkbox-container label {
				margin-bottom: 10px;
				font-family: 'Oswald';
				text-transform: uppercase;
				cursor: pointer;
			}

			.count_vote {
				margin-top: 10px;
			}

			.total {
				color: #ff0066;
				display: inline-block;
			    font-weight: bold;
			    font-size: 19px;
			}

			.category_title {
				color: #ff0066;
				font-family: 'Oswald';
				text-transform: uppercase;
				border-bottom: 1px solid #d7d7d7;
				padding: 10px 10px 10px 0;
				margin-bottom: 10px;
			}

			.party_name {
				background-color: #3399cc;
				color: #fff;
				padding: 20px;
				font-family: 'Oswald';
				text-transform: uppercase;
				font-size: 18px;
			}

			.save-button {
			    background-color: #9c3;
			    color: #fff;
			    border: none;
			    display: inline-block;
			    padding: 0.73rem;
			}

			.button-agree {
				background-color: #d7d7d7;
				color: #fff;
				font-family: 'Oswald';
				text-transform: uppercase;
				padding: 10px 20px;
			}

			.button-agree.voteAdded {
				background-color: #9c3;
			}
			.category_text {
				height: 250px;
			}

			.compare-party {
				margin: 40px auto 100px;
			}



			@media screen and (min-width: 40em) {
				.category_text {
					height: 500px;
				}

			    .parties-secondary-title {
					border-bottom: 0;
				}

				.selected-parties {
					border-right: 1px solid #d7d7d7;
				}

				.selected-parties:last-child {
					border-right: none;
				}
				
				.selected-parties-container {
					max-height: 600px;
					overflow-y: auto;

				}
				.party_name {
					height: 90px;
				}

				.party_logo {
					height: 200px;
					display: flex;
				    justify-content: center;
				    align-items: center;
				}
				.compare-party {
					overflow: hidden;
					overflow-x: auto;
				}
				.selected-parties-container.row {
					width: 150rem;
					max-width: 150rem;
				}
				.compare-party::-webkit-scrollbar,
				.selected-parties-container::-webkit-scrollbar {
				    width: 15px;
				}
				.compare-party::-webkit-scrollbar-track,
				.selected-parties-container::-webkit-scrollbar-track {
				    background-color: #d7d7d7;  
				}
				.compare-party::-webkit-scrollbar-thumb,
				.selected-parties-container::-webkit-scrollbar-thumb {
				    background-color: #9c3; 
				}
			 
			}

			@media screen and (min-width: 64em) {
				
				.party_name {
					height: 90px;
				}

				.party_logo {
					height: 88px;
					display: flex;
				    justify-content: center;
				    align-items: center;
				}

				.compare-party {
					max-width: 75em;
				}
				.selected-parties-container.row {
					width: 100%;
				}
			}

			
	    </style>
	
<div ng-app="VoteApp">
	<div ng-controller="mainController">
		<div class="row">
			<div class="parties-container-title medium-12 large-12 columns">
	             <h1>COMPARE</h1>
	        </div>
	   	    
	   	    <div class="row">
				<div class="parties-secondary-title medium-12 large-12 columns">
					<h4>SELECT PARTIES TO COMPARE</h4>
				</div>
			</div>

			<div class="row">
			<!-- for mobile -->
				<select id="comparePartySelectbox" ng-model="party" ng-options="p.partyName for p in comparePartyData" ng-change="includeParty()">
					<option value="">Select a Party</option>
				</select>
			</div>
			<!-- for desktop, tablet -->
		
			<div id="comparePartyCheckbox" class="checkbox-container row">
				<div class="small-6 medium-6 large-6 columns" ng-repeat="_content in comparePartyData">
					<label for="{{ _content.shortName }}"><span class="checkbox-bg"><input type="checkbox" id="{{ _content.shortName }}" ng-click="includeParty(_content.shortName)"></span>{{ _content.partyName }}</label>
				</div>
			</div>

			<div class="row">
				<div class="parties-secondary-title medium-12 large-12 columns">
					<h4>CATEGORIES</h4>
				</div>
			</div>
			
			<div class="checkbox-container row">
				<div class="small-6 medium-4 large-4 columns" ng-repeat="(categoryId,categoryName) in compareCategory">
					<label for="{{categoryId}}"><span class="checkbox-bg"><input type="checkbox" id="{{categoryId}}" ng-click="includeCategory(categoryName)"></span>{{categoryName}}</label>
				</div>
			</div>
		</div>

		<div class="row compare-party">
			<form>
				<div class="row">
					<div class="parties-secondary-title medium-12 large-12 columns">
						<h4 class="float-left">VOTES</h4>
						<?php if(isset($_SESSION['user'])){ ?>
							<button class="save-button float-right" ng-click='saveData();'>Send All Result</button>
						<?php } else { ?>
							<a class="sign-up.php">Sign Up to Check Your Preference</a>
						<?php }; ?>
					</div>
				</div>
				<div class="row selected-parties-container">
					<div class="selected-parties columns medium-2 large-2 float-left" ng-repeat="_content in comparePartyData | filter : partyFilter">
						<div class="compare_head">
							<h4 class="party_name">{{ _content.partyName }}</h4>
							<div class="party_logo"><img src="{{ _content.logo }}"></div>
							<?php if(isset($_SESSION['user'])){ ?>
								<p class="count_vote">You agree with:<span class="total float-right" name="{{ _content.shortName }}_total">{{ _content.counter.length }}</span></p>
							<?php }; ?>
						</div>
						<div class="compare_content" ng-repeat="(_key, _category) in _content.category | filter : categoryFilter">
							<h5 class="category_title">{{_category.name}}</h5>
							<div class="category_text">
								<p>{{_category.content}}</p><br>
								<?php if(isset($_SESSION['user'])){ ?>
									<button class="button-agree" id="btn_{{_content.shortName}}_{{_category.cd}}" ng-click="countVote(_content, _category.cd)">Agree</button><br><br>
								<?php }; ?>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>

	</div>

</div>

<!-- Start of Footer -->
<?php include 'footer.php';?>