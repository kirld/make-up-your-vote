
var VoteApp = angular.module('VoteApp', ['ngAnimate']);
// set the assignment due data object to use

compareCategory = ["Health", "Taxes", "Jobs/Economy", "Democracy", "Education", "Seniors", "Environment", "Crime", "GovtSpending", "Immigration", "Consumers", "ForeignPolicy", "ArtsAndCulture","Families"]

comparePartyData = [
{
    "shortName":"Liberal",
	"partyName":"Liberal Party Of Canada",
    "logo":"/img/logo/liberal.jpg",
    "counter": 0,
    "category": [{ "Health":"Would invest in providing improved home care for seniors, work with the provinces to lower prescription drugs costs, and create a more flexible and accessible Employment Insurance Compassionate Care Benefit.", 
    				"Taxes":"Would cancel corporate tax cuts and restore tax rate to 2010 level of 18 per cent, cap stock-option deductions and favours innovation and productivity tax credit.", 
    			 	"JobsEconomy":"Would support the Conservative plan for loan guarantees to the Newfoundland government for a hydroelectric transmission line and pledge flexible funding programs to help farmers.", 
    				"Democracy":"Wants more open and available data for more accountable government, and would establish a Canada Service Corps to encourage volunteerism and community building.",
    				"Education":"If elected, a Liberal government would introduce a universal Early Childhood Education and Care (ECEC) program to support Canadian families in honouring the rights of children to achieve their full potential.",
    				"Seniors":"Offer $700 million to boost the Guaranteed Income Supplement, expand the Canada Pension Plan, and promise a voluntary, tax-deductible savings plan.",
    				"Environment":"Promises to improve the protection of Canada's marine areas, land, and wildlife. They would adjust national park admission fees to encourage families and new Canadians to visit them.",
    				"Crime":"Plans to strengthen the firearms registry by eliminating registration fees and simplifying the registration process, improve oversight of the RCMP and wants to establish a Community Heroes Fund.",
    				"GovtSpending":"Would replace the current first-past-the-post electoral system while exploring mandatory and online voting. They would work to restructure the Senate and empower the Information Commissioner to make government data more open.",
    				"Immigration":"Would institute a plan to ensure that the Temporary Foreign Worker Program is used only to fill jobs when qualified Canadians cannot be found. They would also promise to bring 25,000 Syrian refugees to Canada as soon as possible.",
    				"Consumers":"Pledges a comprehensive review of the national food safety system, Spend more money for improved food inspection, and would protect rural postal services.",
    				"ForeignPolicy":"Would work to strengthen ties with Canada's North American counterparts. They would also end the current bombing campaign in Iraq and Syria.",
    				"ArtsAndCulture":"Pledge stable funding for CBC/Radio-Canada, guarantee stable funding for the 'Own the Podium' program for Olympic athletes, and would invest $180 million over two years in the Canada Council for the Arts.",
    				"Families":"$500 million a year to the provinces to create more childcare spaces. Would increase to $1 billion a year in four years, $1 billion in family care employment insurance benefit."
    			}],
},
{
    "shortName":"Conservative",
	"partyName":"Conservative Party of Canada",
    "logo":"/img/logo/conservative.jpg",
    "counter": 0,
    "category":[{ "Health":"Would increase annual health funding to the provinces to grow in line with nominal GDP, beginning in 2017-18.", 
    				"Taxes":"Plan on doubling the child fitness tax credit to $1000 immediately, and pledge to create an adult fitness tax credit worth $500 once the federal budget is balanced.", 
    			 	"JobsEconomy":"Would aim to create 1.3 million new jobs by 2020, reduce the small business tax rate from 11% to 9% by 2019, and provide approximately $670 million in federal tax relief to Canadian seniors over the age of 70 between 2015 and 2020.", 
    				"Democracy":"Would reform the Senate including term limits and elections, and expand the House of Commons.",
    				"Education":"If re-elected, a Conservative government would increase the number of computers in schools to have more Canadians engage in the digital economy. The Conservatives will work with business and industry associations in order to better align with postsecondary institutions.",
    				"Seniors":"Would extend a retraining program for older workers, increase the Guaranteed Income Supplement, and change sentencing laws to take into account age and vulnerability for crimes against seniors.",
    				"Environment":"Would reduce Canada's emissions to 30% below 2005 levels by 2030. In 2014, the Conservative government contributed $300 million to the UN Green Climate Fund to help developing countries fight climate change.",
    				"Crime":"Would clamp down on drug use in prisons, scrap the long-gun registr, revive human smuggling legislation, and pledge to make it easier to deport foreign criminals. ",
    				"GovtSpending":"Would eliminate the deficit by 2014-2015., and create permanent, consistent funding for municipal infrastructure using gas tax revenues",
    				"Immigration":"Would accept 10,000 refugees from Iraq and Syria over the next four years and would commit $300 million over five years to expand the use of biometric screening at Canadian borders.",
    				"Consumers":"Would oppose a 'Netflix' tax on digital streaming services and spend $200 million on expanding Canada's high-speed broadband Internet network across rural and remote areas.",
    				"ForeignPolicy":"would provide the Department of National Defence with an additional $11.8 billon over the next ten years, and ban travel to 'places that are ground zero for terrorist activity'. They would also spend $500,000 to collect data on foreign real estate buyers.",
    				"ArtsAndCulture":"Support the Canada Periodical Fund, support the Royal Conservatory of Music, and would fund a variety of historical anniversaries happening in the next few years.",
    				"Families":"Support doubling the child fitness tax credit to $1000 immediately, support creating an adult fitness tax credit worth $500 once the federal budget is balanced."
    			}],
},
{
    "shortName":"Democratic",
    "partyName":"New Democratic Party",
    "logo":"/img/logo/democratic.jpg",
    "counter": 0,
    "category":[{ "Health":"Commit to six per cent escalator for health care funding, Pledges $165 million to hire more doctors and nurses, repatriate Canadian health care workers practising abroad and fix credentials for foreign doctors.", 
                    "Taxes":"Would reduce tax rates for small business and provide $4,500 in tax credits per new hire. Would raise corporate taxes to 19.5 per cent to pay for this program.", 
                    "JobsEconomy":"Would raise the federal minimum wage, create an innovation tax credit worth $40 million, and work on a plan to create more than 40,000 youth jobs, paid internships, and co-op placements", 
                    "Democracy":"Penalize MP's that miss votes in the House, support official bilingualism, would Reinstate the Court Challenges Program",
                    "Education":"Would create integrated, community based child-centred early learning and education centres, pledge more money to the provinces to lower tuition fees.",
                    "Seniors":"Pledge to support $700 million increase to the Guaranteed Income Supplement, would work with the provinces to double the Canada and Quebec pension plans.",
                    "Environment":"Would invest in retrofitting homes to make them more energy efficient, and eliminate subsidies to the fossil fuel industry. The NDP also plans to strengthen laws to protect Canada's lakes and rivers.",
                    "Crime":"Promise tougher penalties for elder abuse, would hire 2,500 police officers, and pledge support to women's shelters",
                    "GovtSpending":"Would replace the current election system with a mixed-member proportional system.",
                    "Immigration":"Plans to make family reunification central to immigration policy and would immediately bring 10,000 Syrian refugees to Canada.",
                    "Consumers":"Create a consumer ombudsman and boost funding to Competition Bureau, and would put a cap on credit-card interest rates and regulation of transactions fees.",
                    "ForeignPolicy":"Would end the current bombing campaign and pull out all military personnel from Iraq and Syria while boosting humanitarian aid to help refugees affected by ISIS.",
                    "ArtsAndCulture":"Would tighten foreign ownership rules to protect cultural industries, and pledge their support to cultural industries such as the CBC and Canada Council and museums.",
                    "Families":"Would expand Compassionate Care benefits, and wants inter-generational Home Retrofit program to help renovate homes when caring for aged relatives."
                }],
}
]



VoteApp.controller('mainController', function($scope) {
    $scope.comparePartyData = comparePartyData; // set the json data into scope
    $scope.compareCategory = compareCategory;

    var x = 0; // variable for counter
    $scope.countVote = function(partyNum) { // the button was clicked
        x++; // add 1
        partyNum.counter++; //apply to the party

    };

    // $scope.includeCategory = function(index) {
    //     //var i = $.inArray($scope.comparePartyData.category[0][index], $scope.includeCategory);
    //     console.log($scope.comparePartyData.category.index);
    //     debugger
    //     if (i > -1) {
    //         $scope.categoryIncludes.splice(i, 1);
    //     } else {
    //         $scope.categoryIncludes.push(category);
    //     }
    // };

    // $scope.categoryFilter = function(fruit) {
    //     if ($scope.categoryIncludes.length > 0) {
    //         if ($.inArray(fruit.colour, $scope.categoryIncludes) < 0)
    //             return;
    //     }
            
    //         return fruit;
        
    // };


});