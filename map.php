<?php include 'header.php' ?>
    <!-- Navigation Starts Here -->
<?php include 'navigation.php';?>

	<div class="map-wrap">
		<div class="row">
			<div class="large-12 small-6 columns">
				<h3>MAP</h3>
			</div>
			<!-- Mobile menu included -->
			<?php include 'mob_slide_menu.php';?>
			<!-- End of Mobile menu -->
			<!-- Map image -->
			<div class="large-12 columns hide-for-small-only">
				<div class="img-wrap">
					<img id="img_ID" src="img/map/map-canada-bw.jpg" border="0" orgWidth="727" orgHeight="639" usemap="#map" alt="image map"/>
				</div>
			</div>
		</div>		
			<!-- End of Map image -->	
		<div class="row result-info">
			<div class="resultBox"> <!-- Displaying MPS results-->
    			
    		</div>
        	
        </div>		

    		<map name="map" id="map_ID">

			    <area id="Saskatchewan" alt="Saskatchewan"
			    data-description="Saskatchewan is a nice place so I hear!" 
			    shape="poly" 
			    coords="209,351,170,511,252,525,265,361" 
			    style="outline:none;" 
			    target="_self" 
			    onMouseOver="showProvince('saskatchewan')" 
			    onClick="clickonProvince('saskatchewan')" 
			    onMouseOut="showProvince('map-canada-bw')" />

			    <area id="Quebec" 
			    alt="Quebec" 
			    title="Quebec" 
			    shape="poly" 
			    coords="476,535,460,477,464,459,448,429,465,407,465,389,456,375,446,369,443,365,445,348,437,330,433,311,441,309,458,302,494,313,508,339,531,331,529,306,553,338,573,377,549,380,546,387,546,396,562,416,592,423,595,412,646,382,650,390,643,400,638,418,630,440,608,473,594,481,583,486,580,499,574,530,566,543,539,554,538,544,518,552,504,547,488,546" 
			    style="outline:none;" 
			    target="_self" 
			    onMouseOver="showProvince('quebec')" 
			    onClick="clickonProvince('quebec')" 
			    onMouseOut="showProvince('map-canada-bw')" />

	    		<area id="NorthwestTerritories" 
	    		alt="Northwest Territories" 
	    		shape="poly" 
	    		coords="266,359,274,295,229,282,222,267,212,264,183,214,188,195,208,194,241,206,250,163,261,121,271,73,222,97,206,122,184,147,113,160,99,183,108,188,102,201,105,209,98,217,95,266,100,293,113,301,113,315,179,341" 
	    		style="outline:none;" 
	    		target="_self" 
	    		onMouseOver="showProvince('northwesternTerritories')" 
	    		onClick="clickonProvince('northTeritories')" 
	    		onMouseOut="showProvince('map-canada-bw')"/>

	    		<area id="BC" 
	    		alt="BC" 
	    		data-description="British Columbia, also commonly referred to by its initials BC, is a province located on the west coast of Canada." 
			    shape="poly" 
			    coords="123,367,139,328,22,254,18,271,33,283,36,303,36,336,30,360,7,362,0,373,0,388,15,425,26,456,34,469,53,471,68,478,115,495,130,501,132,486,132,472,116,442,108,417,106,404,107,390" 
			    style="outline:none;" 
			    target="_self" 
			    onMouseOver="showProvince('britishColumbia')" 
			    onClick="clickonProvince('bc')" 
			    onMouseOut="showProvince('map-canada-bw')"/>

			    <area id="Manitoba" 
			    alt="Manitoba" 
			    data-description="Manitoba is a province located at the longitudinal centre of Canada. It is one of the three prairie provinces and is the fifth-most populous province in Canada" 
			    shape="poly" 
			    coords="317,530,253,526,268,359,319,363,321,380,332,380,340,404,347,401,363,409,317,471" 
			    style="outline:none;" 
			    target="_self" 
			    data-maphilight='Manitoba Province' 
			    onMouseOver="showProvince('manitoba')" 
			    onClick="clickonProvince('manitoba')" 
			    onMouseOut="showProvince('map-canada-bw')"/>
			
				<area id="Alberta" 
				alt="Alberta"
			    data-description="Alberta is a western province of Canada. With an estimated population of 4,196,457 as of July 1, 2015, it is Canada's fourth-most populous province and the most populous of Canada's three prairie provinces."
			    shape="poly" 
			    coords="208,349,137,328,104,411,110,427,116,441,128,453,122,456,128,469,133,484,129,498,138,502,151,504,163,510,171,507" 
			    style="outline:none;" 
			    target="_self"  
			    onMouseOver="showProvince('alberta')" 
			    onClick="clickonProvince('al')" 
			    onMouseOut="showProvince('map-canada-bw')"/>

			    <area id="pei" 
			    alt="pei"
	            data-description="Prince Edward Teritories"
	            shape="poly" 
	            coords="629,480,636,488,646,487,647,480,646,470,646,463,634,470" 
	            style="outline:none;" 
	            target="_self"  
	            onMouseOver="showProvince('pei')"    
	            onClick="clickonProvince('pei')" 
	            onMouseOut="showProvince('map-canada-bw')" />

			    <area id="Yukon" 
			    alt="Yukon"  
			    data-description="Yukon is the westernmost and smallest of Canada's three federal territories. Whitehorse is the territorial capital and Yukon's only city."
			    shape="poly" 
			    coords="102,136,13,238,28,258,66,285,113,312,113,301,103,295,100,291,98,275,93,267,100,251,102,238,102,230,98,224,107,213,105,205,103,195,108,192,103,188,95,181,106,169,111,159" 
			    style="outline:none;" 
			    target="_self" 
			    data-maphilight='yukon' 
			    onMouseOver="showProvince('yukon')" 
			    onClick="clickonProvince('yukon')" 
			    onMouseOut="showProvince('map-canada-bw')"/>

			    <area id="newFoundLand" 
			    alt="newFoundLand" 
			    data-description="Newfoundland and Labrador province" 
			    shape="poly" 
			    coords="658,396,661,415,662,426,659,434,666,444,673,439,688,433,696,424,703,418,700,432,708,431,712,417,722,422,723,415,723,409,714,408,709,407,705,410,706,403,701,401,698,400,696,395,689,401,681,405,674,402,671,398,661,388,661,380,655,375,650,365,640,358,632,358,628,355,621,358,618,373,612,377,611,370,615,361,618,352,609,351,597,354,592,352,585,350,574,348,573,340,566,332,555,326,547,322,534,312,527,306,545,328,556,343,565,358,572,372,562,380,552,381,549,384,549,399,559,405,562,418,575,420,590,419,597,404,616,394,634,380,649,382,655,390" 
			    style="outline:none;" 
			    target="_self" 
			    data-maphilight="newFoundLand" 
			    onMouseOver="showProvince('newFoundLand')" 
			    onClick="clickonProvince('nfld')" 
			    onMouseOut="showProvince('map-canada-bw')"/>

	            <area id="newbrunswick" 
	            alt="" 
	            data-description="" 
	            shape="poly" 
	            coords="614,477,605,478,595,482,585,490,592,500,599,514,611,521,622,515,628,504,632,495,624,491,617,485" 
	            style="outline:none;" 
	            target="_self" 
	            data-maphilight="newbrunswick" 
	            onMouseOver="showProvince('newbrunswick')" 
	            onClick="clickonProvince('newbrunswick')" 
	            onMouseOut="showProvince('map-canada-bw')"/>

			    <area id="Nunavut" 
			    alt="Nunavut" 
			    title="Nunavut"  
			    shape="poly" 
			    coords="321,362,266,358,274,296,228,280,223,267,213,264,182,214,189,197,210,198,244,204,264,105,287,70,352,5,376,0,387,18,379,145,411,166,455,186,465,203,478,204,507,211,508,238,517,282,515,294,475,290,450,279,434,284,428,326,393,325,364,302,338,317" 
			    style="outline:none;" 
			    target="_self" 
			    onClick="clickonProvince('nunavut')" 
			    onMouseOver="showProvince('nunavut')" 
			    onMouseOut="showProvince('map-canada-bw')" />

			    <area id="Ontario" 
			    alt="Ontario" 
			    title="Ontario" 
			    shape="poly" 
			    coords="366,407,316,470,317,517,328,525,324,535,340,531,354,537,365,538,373,538,357,551,349,564,373,560,390,551,396,561,396,573,395,601,402,634,423,626,418,579,432,569,443,587,443,601,449,622,460,629,484,618,503,597,523,583,533,570,536,551,531,546,510,552,491,549,479,542,459,474,451,477,438,466,433,459,431,446,428,429,424,422,409,425,388,423,379,418" style="outline:none;" target="_self"  
			    onMouseOver="showProvince('ontario')"
			    onClick="clickonProvince('ontario')" 
			    onMouseOut="showProvince('map-canada-bw')"/>

			    <area id="NovaScotia" 
			    alt="NovaScotia" 
			    title="NovaScotia" 
			    shape="poly" 
			    coords="633,506.000010172526,640,503.000010172526,632,514.000010172526,630,524.000010172526,629,530.000010172526,638,532.000010172526,645,520.000010172526,652,510.000010172526,660,500.000010172526,666,489.000010172526,670,480.000010172526,672,472.000010172526,666,471.000010172526,662,464.000010172526,657,476.000010172526,654,488.000010172526,642,495.000010172526,637,496.000010172526" 
			    style="outline:none;" target="_self" 
			    onMouseOver="showProvince('novascotia')" 
			    onClick="clickonProvince('novascotia')" 
			    onMouseOut="showProvince('map-canada-bw')" />
			</map>
		
	</div>


<?php include 'footer.php';?>

