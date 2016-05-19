<?php
  // Start the session
  session_start();

  //Delete all session variables if user logs out
  if(isset($_POST['logOut']) OR !isset($_SESSION['user'])) {
    session_unset(); 
    session_destroy();
  }
?>
<?php include 'header.php' ?>

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

			.voteAdded {
				background-color: green;
			}

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
			
			@media screen and (min-width: 40em) {


			    .parties-secondary-title {
					border-bottom: 0;
				}
			 
			}

			@media screen and (min-width: 64em) {

				
			}

			
	    </style>
	
<div ng-app="VoteApp">
	<div ng-controller="mainController">
		<div class="row">
			<div class="parties-container-title medium-12 large-12 columns">
	             <h1>COMPARE</h1>
	        </div>

			<div class="parties-secondary-title medium-12 large-12 columns">
				<h4>SELECT PARTIES TO COMPARE</h4>
			</div>
			<!-- for mobile -->
			<select id="comparePartySelectbox" ng-model="party" ng-options="p.partyName for p in comparePartyData" ng-change="includeParty()">
				<option value="">Select a Party</option>
			</select>
			<!-- for desktop, tablet -->
			<div id="comparePartyCheckbox" class="row">
				<div class="medium-6 large-6 columns" ng-repeat="_content in comparePartyData">
					<label for="{{ _content.shortName }}"><span class="checkbox-bg"><input type="checkbox" id="{{ _content.shortName }}" ng-click="includeParty(_content.shortName)"></span>{{ _content.partyName }}<label>
				</div>
			</div>
			
			<div class="parties-secondary-title medium-12 large-12 columns">
				<h4>CATEGORIES</h4>
			</div>
			<div class="row">
				<div class="small-6 medium-6 large-6 columns" ng-repeat="(categoryId,categoryName) in compareCategory">
					<label for="{{categoryId}}"><span class="checkbox-bg"><input type="checkbox" id="{{categoryId}}" ng-click="includeCategory(categoryName)"></span>{{categoryName}}</label>
				</div>
			</div>
			
		</div>

		<div class="row">
			<h3>VOTES</h3>
			<form>
				<?php if(isset($_SESSION['user'])){ ?>
					<button ng-click='saveData();'>Send All Result</button>
				<?php } else { ?>
					<a class="sign-up.php">Sign Up to Check Your Preference</a>
				<?php }; ?>
				<div class="row">
					<div class="columns medium-3 large-2" ng-repeat="_content in comparePartyData | filter : partyFilter">
						<div class="compare_head">
							<h4 class="party_name">{{ _content.partyName }}</h4>
							<img src="{{ _content.logo }}">
							<?php if(isset($_SESSION['user'])){ ?>
								<div class="count_vote">You agree with:<span type="text" readonly class="total" name="{{ _content.shortName }}_total">{{ _content.counter.length }}</span></div>
							<?php }; ?>
						</div>
						<div class="compare_content" ng-repeat="(_key, _category) in _content.category | filter : categoryFilter">
							{{_category.name}}<br>{{_category.content}}<br>
							<?php if(isset($_SESSION['user'])){ ?>
								<button id="btn_{{_content.shortName}}_{{_category.cd}}" ng-click="countVote(_content, _category.cd)">Agree</button><br><br>
							<?php }; ?>
						</div>
					</div>
				</div>
			</form>
		</div>

	</div>

</div>

</body>
</html> 