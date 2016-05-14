
var VoteApp = angular.module('VoteApp', ['ngAnimate']);
// set the assignment due data object to use

// data for each parties
comparePartyData = [
{
    "shortName":"Liberal",
	"partyName":"Liberal Party Of Canada",
    "logo":"/img/logo/liberal.jpg",
    "counter": 0,
    "category": [
            {name: "Health", content: "Would invest in providing improved home care for seniors, work with the provinces to lower prescription drugs costs, and create a more flexible and accessible Employment Insurance Compassionate Care Benefit."},
            {name: "Taxes", content: "Would cancel corporate tax cuts and restore tax rate to 2010 level of 18 per cent, cap stock-option deductions and favours innovation and productivity tax credit."},
            {name: "Jobs/Economy", content: "Would support the Conservative plan for loan guarantees to the Newfoundland government for a hydroelectric transmission line and pledge flexible funding programs to help farmers."},
            {name: "Democracy", content: "Wants more open and available data for more accountable government, and would establish a Canada Service Corps to encourage volunteerism and community building."},
            {name: "Education", content: "If elected, a Liberal government would introduce a universal Early Childhood Education and Care (ECEC) program to support Canadian families in honouring the rights of children to achieve their full potential."},
            {name: "Seniors", content: "Offer $700 million to boost the Guaranteed Income Supplement, expand the Canada Pension Plan, and promise a voluntary, tax-deductible savings plan."},
            {name: "Environment", content: "Promises to improve the protection of Canada's marine areas, land, and wildlife. They would adjust national park admission fees to encourage families and new Canadians to visit them."},
            {name: "Crime", content: "Plans to strengthen the firearms registry by eliminating registration fees and simplifying the registration process, improve oversight of the RCMP and wants to establish a Community Heroes Fund."},
            {name: "GovtSpending", content: "Would replace the current first-past-the-post electoral system while exploring mandatory and online voting. They would work to restructure the Senate and empower the Information Commissioner to make government data more open."},
            {name: "Immigration", content: "Would institute a plan to ensure that the Temporary Foreign Worker Program is used only to fill jobs when qualified Canadians cannot be found. They would also promise to bring 25,000 Syrian refugees to Canada as soon as possible."},
            {name: "Consumers", content: "Pledges a comprehensive review of the national food safety system, Spend more money for improved food inspection, and would protect rural postal services."},
            {name: "ForeignPolicy", content: "Would work to strengthen ties with Canada's North American counterparts. They would also end the current bombing campaign in Iraq and Syria."},
            {name: "ArtsAndCulture", content: "Pledge stable funding for CBC/Radio-Canada, guarantee stable funding for the 'Own the Podium' program for Olympic athletes, and would invest $180 million over two years in the Canada Council for the Arts."},
            {name: "Families", content: "$500 million a year to the provinces to create more childcare spaces. Would increase to $1 billion a year in four years, $1 billion in family care employment insurance benefit."}
    ]

},
{
    "shortName":"Conservative",
	"partyName":"Conservative Party of Canada",
    "logo":"/img/logo/conservative.jpg",
    "counter": 0,
    "category": [
            {name: "Health", content: "Would increase annual health funding to the provinces to grow in line with nominal GDP, beginning in 2017-18."},
            {name: "Taxes", content: "Plan on doubling the child fitness tax credit to $1000 immediately, and pledge to create an adult fitness tax credit worth $500 once the federal budget is balanced."},
            {name: "Jobs/Economy", content: "Would aim to create 1.3 million new jobs by 2020, reduce the small business tax rate from 11% to 9% by 2019, and provide approximately $670 million in federal tax relief to Canadian seniors over the age of 70 between 2015 and 2020."},
            {name: "Democracy", content: "Would reform the Senate including term limits and elections, and expand the House of Commons."},
            {name: "Education", content: "If re-elected, a Conservative government would increase the number of computers in schools to have more Canadians engage in the digital economy. The Conservatives will work with business and industry associations in order to better align with postsecondary institutions."},
            {name: "Seniors", content: "Would extend a retraining program for older workers, increase the Guaranteed Income Supplement, and change sentencing laws to take into account age and vulnerability for crimes against seniors."},
            {name: "Environment", content: "Would reduce Canada's emissions to 30% below 2005 levels by 2030. In 2014, the Conservative government contributed $300 million to the UN Green Climate Fund to help developing countries fight climate change."},
            {name: "Crime", content: "Would clamp down on drug use in prisons, scrap the long-gun registr, revive human smuggling legislation, and pledge to make it easier to deport foreign criminals."},
            {name: "GovtSpending", content: "Would eliminate the deficit by 2014-2015., and create permanent, consistent funding for municipal infrastructure using gas tax revenues"},
            {name: "Immigration", content: "Would accept 10,000 refugees from Iraq and Syria over the next four years and would commit $300 million over five years to expand the use of biometric screening at Canadian borders."},
            {name: "Consumers", content: "Would oppose a 'Netflix' tax on digital streaming services and spend $200 million on expanding Canada's high-speed broadband Internet network across rural and remote areas."},
            {name: "ForeignPolicy", content: "would provide the Department of National Defence with an additional $11.8 billon over the next ten years, and ban travel to 'places that are ground zero for terrorist activity'. They would also spend $500,000 to collect data on foreign real estate buyers."},
            {name: "ArtsAndCulture", content: "Support the Canada Periodical Fund, support the Royal Conservatory of Music, and would fund a variety of historical anniversaries happening in the next few years."},
            {name: "Families", content: "Support doubling the child fitness tax credit to $1000 immediately, support creating an adult fitness tax credit worth $500 once the federal budget is balanced."}
    ]
},
{
    "shortName":"Democratic",
    "partyName":"New Democratic Party",
    "logo":"/img/logo/democratic.jpg",
    "counter": 0,
    "category": [
            {name: "Health", content: "Commit to six per cent escalator for health care funding, Pledges $165 million to hire more doctors and nurses, repatriate Canadian health care workers practising abroad and fix credentials for foreign doctors."},
            {name: "Taxes", content: "Would reduce tax rates for small business and provide $4,500 in tax credits per new hire. Would raise corporate taxes to 19.5 per cent to pay for this program."},
            {name: "Jobs/Economy", content: "Would raise the federal minimum wage, create an innovation tax credit worth $40 million, and work on a plan to create more than 40,000 youth jobs, paid internships, and co-op placements"},
            {name: "Democracy", content: "Penalize MP's that miss votes in the House, support official bilingualism, would Reinstate the Court Challenges Program"},
            {name: "Education", content: "Would create integrated, community based child-centred early learning and education centres, pledge more money to the provinces to lower tuition fees."},
            {name: "Seniors", content: "Pledge to support $700 million increase to the Guaranteed Income Supplement, would work with the provinces to double the Canada and Quebec pension plans."},
            {name: "Environment", content: "Would invest in retrofitting homes to make them more energy efficient, and eliminate subsidies to the fossil fuel industry. The NDP also plans to strengthen laws to protect Canada's lakes and rivers."},
            {name: "Crime", content: "Promise tougher penalties for elder abuse, would hire 2,500 police officers, and pledge support to women's shelters"},
            {name: "GovtSpending", content: "Would replace the current election system with a mixed-member proportional system."},
            {name: "Immigration", content: "Plans to make family reunification central to immigration policy and would immediately bring 10,000 Syrian refugees to Canada."},
            {name: "Consumers", content: "Create a consumer ombudsman and boost funding to Competition Bureau, and would put a cap on credit-card interest rates and regulation of transactions fees."},
            {name: "ForeignPolicy", content: "Would end the current bombing campaign and pull out all military personnel from Iraq and Syria while boosting humanitarian aid to help refugees affected by ISIS."},
            {name: "ArtsAndCulture", content: "Would tighten foreign ownership rules to protect cultural industries, and pledge their support to cultural industries such as the CBC and Canada Council and museums."},
            {name: "Families", content: "Would expand Compassionate Care benefits, and wants inter-generational Home Retrofit program to help renovate homes when caring for aged relatives."}
    ]
}
]




VoteApp.controller('mainController', function($scope) {

    compareCategory=[]; // create an array
    $.each(comparePartyData[0].category, function( index, content ) {
        compareCategory.push(content.name); // generate the category name from the data
    });

    $scope.comparePartyData = comparePartyData; // set the json data into scope
    $scope.compareCategory = compareCategory;

    var x = 0; // variable for counter
    $scope.countVote = function(partyNum) { // the button was clicked
        x++; // add 1
        partyNum.counter++; //apply to the party

    };


    $scope.categoryIncludes = []; // create an array to store checked data

    $scope.includeCategory = function(categoryName) {

        if ($.inArray(categoryName, $scope.categoryIncludes) === -1) { // if it
            $scope.categoryIncludes.push(categoryName);
        } else {
            $scope.categoryIncludes.splice($scope.categoryIncludes.indexOf(categoryName), 1);
        }

        
    };
    
    $scope.categoryFilter = function(categoryContent) {
        var targetCate = categoryContent.name;
        return $.inArray(targetCate, $scope.categoryIncludes) !== -1;
    };

   


});

