
var VoteApp = angular.module('VoteApp', ['ngAnimate']);
// set the assignment due data object to use

// data for each parties
comparePartyData = [
{
    "id": 1,
    "shortName":"Liberal",
	"partyName":"Liberal Party Of Canada",
    "logo":"./img/parties/liberal-logo.jpg",
    "counter": [],
    "category": [
            {cd: "001", name: "Health", content: "Would invest in providing improved home care for seniors, work with the provinces to lower prescription drugs costs, and create a more flexible and accessible Employment Insurance Compassionate Care Benefit."},
            {cd: "002", name: "Taxes", content: "Would cancel corporate tax cuts and restore tax rate to 2010 level of 18 per cent, cap stock-option deductions and favours innovation and productivity tax credit."},
            {cd: "003", name: "Jobs/Economy", content: "Would support the Conservative plan for loan guarantees to the Newfoundland government for a hydroelectric transmission line and pledge flexible funding programs to help farmers."},
            {cd: "004", name: "Democracy", content: "Wants more open and available data for more accountable government, and would establish a Canada Service Corps to encourage volunteerism and community building."},
            {cd: "005", name: "Education", content: "If elected, a Liberal government would introduce a universal Early Childhood Education and Care (ECEC) program to support Canadian families in honouring the rights of children to achieve their full potential."},
            {cd: "006", name: "Seniors", content: "Offer $700 million to boost the Guaranteed Income Supplement, expand the Canada Pension Plan, and promise a voluntary, tax-deductible savings plan."},
            {cd: "007", name: "Environment", content: "Promises to improve the protection of Canada's marine areas, land, and wildlife. They would adjust national park admission fees to encourage families and new Canadians to visit them."},
            {cd: "008", name: "Crime", content: "Plans to strengthen the firearms registry by eliminating registration fees and simplifying the registration process, improve oversight of the RCMP and wants to establish a Community Heroes Fund."},
            {cd: "009", name: "GovtSpending", content: "Would replace the current first-past-the-post electoral system while exploring mandatory and online voting. They would work to restructure the Senate and empower the Information Commissioner to make government data more open."},
            {cd: "010", name: "Immigration", content: "Would institute a plan to ensure that the Temporary Foreign Worker Program is used only to fill jobs when qualified Canadians cannot be found. They would also promise to bring 25,000 Syrian refugees to Canada as soon as possible."},
            {cd: "011", name: "Consumers", content: "Pledges a comprehensive review of the national food safety system, Spend more money for improved food inspection, and would protect rural postal services."},
            {cd: "012", name: "ForeignPolicy", content: "Would work to strengthen ties with Canada's North American counterparts. They would also end the current bombing campaign in Iraq and Syria."},
            {cd: "013", name: "ArtsAndCulture", content: "Pledge stable funding for CBC/Radio-Canada, guarantee stable funding for the 'Own the Podium' program for Olympic athletes, and would invest $180 million over two years in the Canada Council for the Arts."},
            {cd: "014", name: "Families", content: "$500 million a year to the provinces to create more childcare spaces. Would increase to $1 billion a year in four years, $1 billion in family care employment insurance benefit."}
    ]

},
{
    "id": 2,
    "shortName":"Conservative",
	"partyName":"Conservative Party of Canada",
    "logo":"./img/parties/conservative-logo.jpg",
    "counter": [],
    "category": [
            {cd: "001", name: "Health", content: "Would increase annual health funding to the provinces to grow in line with nominal GDP, beginning in 2017-18."},
            {cd: "002", name: "Taxes", content: "Plan on doubling the child fitness tax credit to $1000 immediately, and pledge to create an adult fitness tax credit worth $500 once the federal budget is balanced."},
            {cd: "003", name: "Jobs/Economy", content: "Would aim to create 1.3 million new jobs by 2020, reduce the small business tax rate from 11% to 9% by 2019, and provide approximately $670 million in federal tax relief to Canadian seniors over the age of 70 between 2015 and 2020."},
            {cd: "004", name: "Democracy", content: "Would reform the Senate including term limits and elections, and expand the House of Commons."},
            {cd: "005", name: "Education", content: "If re-elected, a Conservative government would increase the number of computers in schools to have more Canadians engage in the digital economy. The Conservatives will work with business and industry associations in order to better align with postsecondary institutions."},
            {cd: "006", name: "Seniors", content: "Would extend a retraining program for older workers, increase the Guaranteed Income Supplement, and change sentencing laws to take into account age and vulnerability for crimes against seniors."},
            {cd: "007", name: "Environment", content: "Would reduce Canada's emissions to 30% below 2005 levels by 2030. In 2014, the Conservative government contributed $300 million to the UN Green Climate Fund to help developing countries fight climate change."},
            {cd: "008", name: "Crime", content: "Would clamp down on drug use in prisons, scrap the long-gun registr, revive human smuggling legislation, and pledge to make it easier to deport foreign criminals."},
            {cd: "009", name: "GovtSpending", content: "Would eliminate the deficit by 2014-2015., and create permanent, consistent funding for municipal infrastructure using gas tax revenues"},
            {cd: "010", name: "Immigration", content: "Would accept 10,000 refugees from Iraq and Syria over the next four years and would commit $300 million over five years to expand the use of biometric screening at Canadian borders."},
            {cd: "011", name: "Consumers", content: "Would oppose a 'Netflix' tax on digital streaming services and spend $200 million on expanding Canada's high-speed broadband Internet network across rural and remote areas."},
            {cd: "012", name: "ForeignPolicy", content: "would provide the Department of National Defence with an additional $11.8 billon over the next ten years, and ban travel to 'places that are ground zero for terrorist activity'. They would also spend $500,000 to collect data on foreign real estate buyers."},
            {cd: "013", name: "ArtsAndCulture", content: "Support the Canada Periodical Fund, support the Royal Conservatory of Music, and would fund a variety of historical anniversaries happening in the next few years."},
            {cd: "014", name: "Families", content: "Support doubling the child fitness tax credit to $1000 immediately, support creating an adult fitness tax credit worth $500 once the federal budget is balanced."}
    ]
},
{
    "id": 3,
    "shortName":"Democratic",
    "partyName":"New Democratic Party",
    "logo":"./img/parties/democratic-logo.jpg",
    "counter": [],
    "category": [
            {cd: "001", name: "Health", content: "Commit to six per cent escalator for health care funding, Pledges $165 million to hire more doctors and nurses, repatriate Canadian health care workers practising abroad and fix credentials for foreign doctors."},
            {cd: "002", name: "Taxes", content: "Would reduce tax rates for small business and provide $4,500 in tax credits per new hire. Would raise corporate taxes to 19.5 per cent to pay for this program."},
            {cd: "003", name: "Jobs/Economy", content: "Would raise the federal minimum wage, create an innovation tax credit worth $40 million, and work on a plan to create more than 40,000 youth jobs, paid internships, and co-op placements"},
            {cd: "004", name: "Democracy", content: "Penalize MP's that miss votes in the House, support official bilingualism, would Reinstate the Court Challenges Program"},
            {cd: "005", name: "Education", content: "Would create integrated, community based child-centred early learning and education centres, pledge more money to the provinces to lower tuition fees."},
            {cd: "006", name: "Seniors", content: "Pledge to support $700 million increase to the Guaranteed Income Supplement, would work with the provinces to double the Canada and Quebec pension plans."},
            {cd: "007", name: "Environment", content: "Would invest in retrofitting homes to make them more energy efficient, and eliminate subsidies to the fossil fuel industry. The NDP also plans to strengthen laws to protect Canada's lakes and rivers."},
            {cd: "008", name: "Crime", content: "Promise tougher penalties for elder abuse, would hire 2,500 police officers, and pledge support to women's shelters"},
            {cd: "009", name: "GovtSpending", content: "Would replace the current election system with a mixed-member proportional system."},
            {cd: "010", name: "Immigration", content: "Plans to make family reunification central to immigration policy and would immediately bring 10,000 Syrian refugees to Canada."},
            {cd: "011", name: "Consumers", content: "Create a consumer ombudsman and boost funding to Competition Bureau, and would put a cap on credit-card interest rates and regulation of transactions fees."},
            {cd: "012", name: "ForeignPolicy", content: "Would end the current bombing campaign and pull out all military personnel from Iraq and Syria while boosting humanitarian aid to help refugees affected by ISIS."},
            {cd: "013", name: "ArtsAndCulture", content: "Would tighten foreign ownership rules to protect cultural industries, and pledge their support to cultural industries such as the CBC and Canada Council and museums."},
            {cd: "014", name: "Families", content: "Would expand Compassionate Care benefits, and wants inter-generational Home Retrofit program to help renovate homes when caring for aged relatives."}
    ]
},
{
    "id": 4,
    "shortName":"Bloc",
    "partyName":"Bloc Québécois",
    "logo":"./img/parties/quebecois-logo.jpg",
    "counter": [],
    "category": [
            {cd: "001", name: "Health", content: "The Bloc Québécois would demand that Ottawa reinstate indexed healthcare transfers and Improve measures for caregivers."},
            {cd: "002", name: "Taxes", content: "Pledge tax incentives for home energy retrofits, would eliminate tax havens, and institute a surtax of very high incomes and executive bonuses."},
            {cd: "003", name: "Jobs/Economy", content: "Pledges support for older workers, want changes to EI for seasonal workers like fisherman, Would reform EI, and support pay equity for women."},
            {cd: "004", name: "Democracy", content: "Pledge reform to Access to Information laws, would abolish the Senate, and treat Quebec City as a national capital."},
            {cd: "005", name: "Education", content: "No official stance has been taken on this topic."},
            {cd: "006", name: "Seniors", content: "Would increase allowance to widows and widowers, pledge improvements to the Guaranteed Income Supplement, including automatic registration of all eligible seniors."},
            {cd: "007", name: "Environment", content: "Will run a carbon-neutral campaign by buying carbon offsets, would promote development of electric cars and support tax incentives for home energy retrofits."},
            {cd: "008", name: "Crime", content: "Would give Quebec its own criminal code, and promises free permanent firearms registration, import controls that are on the books but not enforced, and the end of the amnesty."},
            {cd: "009", name: "GovtSpending", content: "Supports reforming the financing of political parties, so that corporate donation limits would be lowered and contributions by the government would be raised."},
            {cd: "010", name: "Immigration", content: "Would continue to defend Quebec's jurisdiction over settlement and integration of newcomers in the province."},
            {cd: "011", name: "Consumers", content: "Would extend Quebec consumer protection laws for banks to the rest of Canada, and increase minimum monthly payments on credit cards to five per cent per month."},
            {cd: "012", name: "ForeignPolicy", content: "Would increase foreign aid spending to 0.7 per cent of GDP, and opposes any aggressive unilateral action and is against conflicts that are preventable."},
            {cd: "013", name: "ArtsAndCulture", content: "Would make Radio-Canada better represent Quebec, allow artists to spread out their income over a five-year period and abolish the GST on books."},
            {cd: "014", name: "Families", content: "Improve measures for caregivers."}
    ]
},
{
    "id": 5,
    "shortName":"Green",
    "partyName":"Green Party of Canada",
    "logo":"./img/parties/green-logo.jpg",
    "counter": [],
    "category": [
            {cd: "001", name: "Health", content: "Create a Canadian Disabilities Act and basic income program for the disabled, and create a national food plan that focuses on local grown, health choices."},
            {cd: "002", name: "Taxes", content: "Want income splitting for common law, same sex families and single mothers with adult children, and legalize and tax marijuana."},
            {cd: "003", name: "Jobs/Economy", content: "Youth employment plan, Want high speed rail corridors between Windsor, Ont. and Quebec and Edmonton to Calgary."},
            {cd: "004", name: "Democracy", content: "Green Party MPs would bring respect and civility to Parliament: no heckling or schoolyard bully behaviour, and of course no attack ads in or out of an election."},
            {cd: "005", name: "Education", content: "Would work to eliminate student debt nationally by moving to institute a grant system instead of the current loan system."},
            {cd: "006", name: "Seniors", content: "Would establish a national pharmacare program to ensure Canadians have access to affordable medicine and further expand investment in health care to ensure that it remains universal."},
            {cd: "007", name: "Environment", content: "Would immediately focus on leading world climate negotiations and developing 'concrete plans' to reduce Canada's carbon emissions."},
            {cd: "008", name: "Crime", content: "Would legalize and tax marijuana."},
            {cd: "009", name: "GovtSpending", content: "Would immediately work to reform the electoral system to establish a form of proportional representation. A Green government would also slash the budget of the Prime Minister's Office by 50%."},
            {cd: "010", name: "Immigration", content: "Would eliminate the Temporary Foreign Workers Program and remove barriers to family reunification."},
            {cd: "011", name: "Consumers", content: "Would create a national food plan that focuses on local grown, healthy choices."},
            {cd: "012", name: "ForeignPolicy", content: "Would refocus Afghanistan mission to poverty alleviation, pledge to reduce military spending to 2005 levels."},
            {cd: "013", name: "ArtsAndCulture", content: "Would guarantee $450 million in stable funding for the CBC / Radio Canada. $100M in 2011-2012, $150M in 2012-2013, $200M in 2013-2014."},
            {cd: "014", name: "Families", content: "Would create a Canadian Disabilities Act and basic income program for the disabled, and invest an early childhood education."}
    ]
},
{
    "id": 6,
    "shortName":"Libertarian",
    "partyName":"Libertarian Party of Canada",
    "logo":"./img/parties/libertarian-logo.png",
    "counter": [],
    "category": [
            {cd: "001", name: "Health", content: "Ensure that the federal government should leave the entirety of health care decisions to provincial andterritorial governments."},
            {cd: "002", name: "Taxes", content: "Reduce federal income taxes to a maximum rate of 15% and increase the personal income tax exemption amount to $17,300 from $11,500."},
            {cd: "003", name: "Jobs/Economy", content: "Would eliminate all tax credits and reduce federal income taxes to a maximum rate of 15%. They would increase the personal income tax exemption amount."},
            {cd: "004", name: "Democracy", content: "No official stance has been taken on this topic."},
            {cd: "005", name: "Education", content: "Would eliminate all tax credits, and replace them with 4 additional exemptions, valued at $4,000 each (Child, Senior, Disability, Student). The first $21,300 of students' income is tax-free federally."},
            {cd: "006", name: "Seniors", content: "Would repeal the Canada Health Act in order to ensure that healthcare is exclusively a provincial responsibility"},
            {cd: "007", name: "Environment", content: "Enforce property rights so individuals have full ownership over their land and the natural resources above and below it."},
            {cd: "008", name: "Crime", content: "Would repeal Section 91 and 92 of the Criminal Code to make responsible gun possession legal."},
            {cd: "009", name: "GovtSpending", content: "Would create an independent oversight board to ensure that privacy rights are not violated, and to ensure that government is as transparent as possible."},
            {cd: "010", name: "Immigration", content: "Significantly decrease the bureaucratic burden for refugees and asylum seekers, Eliminate the point system for immigration and replace it with a background check for violent or fraudulent criminal activity"},
            {cd: "011", name: "Consumers", content: "Would end the Candian Radio-Television Commission (CRTC) in order to give Canadians more choices between phone and cable TV plans, as well as Internet providers."},
            {cd: "012", name: "ForeignPolicy", content: "Immediately withdraw Canadian armed forces from international conflicts. Reallocate military resources for the purpose of national defence, and Arctic sovereignty."},
            {cd: "013", name: "ArtsAndCulture", content: "No official stance has been taken on this topic."},
            {cd: "014", name: "Families", content: "They would allow private alternatives for care and insurance."}
    ]
}
]




VoteApp.controller('mainController', function($scope, $http) {
    //// generate category array
    compareCategory=[]; // create an array
    $.each(comparePartyData[0].category, function( index, content ) {
        compareCategory.push(content.name); // generate the category name from the data
    });


    //// set data into scope
    $scope.comparePartyData = comparePartyData; 
    $scope.compareCategory = compareCategory;


    //// for checking the devices
    $(window).on('load resize', function(){
        var w = $(window).width();
        var x = 480;
        if (w <= x) { // for mobile
            // for switching the element between devices
            $("#comparePartySelectbox").css("display","block");
            $("#comparePartyCheckbox").css("display","none");
            isMobile = true;
        } else { // for desktop, 
            // for switching the element between devices
            $("#comparePartySelectbox").css("display","none");
            $("#comparePartyCheckbox").css("display","block");
            isMobile = false;
        }
    });
    

    //// for counting votes
    $scope.countVote = function(selectedPartyObject, selectedCategory) { // the button was clicked
        if ($.inArray(selectedCategory,  selectedPartyObject.counter) === -1) { // if the agreed category was not in the counter array
            selectedPartyObject.counter.push(selectedCategory); // add the category
            //$scope.countNumber = selectedPartyObject.counter.length;
            $("#btn_"+selectedPartyObject.shortName+"_"+selectedCategory).addClass("voteAdded");
        } else { // if it was in the array
            selectedPartyObject.counter.splice(selectedPartyObject.counter.indexOf(selectedCategory), 1); // delete the category
            //$scope.countNumber = selectedPartyObject.counter.length;
            $("#btn_"+selectedPartyObject.shortName+"_"+selectedCategory).removeClass("voteAdded");
        }
    };


    //// for filtering category select
    $scope.categoryIncludes = []; // create an array to store checked data
    // for creating the array
    $scope.includeCategory = function(categoryName) {
        if ($.inArray(categoryName, $scope.categoryIncludes) === -1) { // if it is not in array
            $scope.categoryIncludes.push(categoryName);
        } else {
            $scope.categoryIncludes.splice($scope.categoryIncludes.indexOf(categoryName), 1);
        }
    };
    // for filter. checks whats inside the array
    $scope.categoryFilter = function(categoryContent) {
        var targetCate = categoryContent.name;
        return $.inArray(targetCate, $scope.categoryIncludes) !== -1;
    };


    //// for filtering party
    $scope.partyIncludes = [];
    // for creating the array
    $scope.includeParty = function(partyName) {
        if(isMobile == true){ // if it was from mobile selectbox
            if (typeof this.party === 'undefined' || this.party === '' || this.party === null) return; // if the party was not selected return
            var targetParty = this.party.shortName;
            $scope.partyIncludes = [targetParty];
        } else { // if it was from desktop/tablet checkbox
            if ($.inArray(partyName, $scope.partyIncludes) === -1) { 
                $scope.partyIncludes.push(partyName); // addes a party object inside the array
            } else {
                $scope.partyIncludes.splice($scope.partyIncludes.indexOf(partyName), 1); // deletes a party object
            }
        }
    };
    // checks inside the array
    $scope.partyFilter = function(partyContent) {
       var targetParty = partyContent.shortName;
        return $.inArray(targetParty, $scope.partyIncludes) !== -1;
    };




    $scope.countData = {};
    $scope.msgs = [];

    $scope.saveData = function() {


         $http({
                method: 'post',
                data: $scope.comparePartyData,
                url: 'data-insert.php',
            }).then(function(res){
                console.log(res);
                window.location="profile.php";
                

            }, function(res){
                console.log('error');
            });


    }

});

