<?php
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
							<a class="sign-up.php float-right">Sign Up to Check Your Preference</a>
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