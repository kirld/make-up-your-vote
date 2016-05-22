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
					<img id="img_ID" src="img/map/map-canada-bw.jpg" 
					border="0" 
					usemap="#map" alt="image map"/>
				</div>
			</div>
		</div>	

			<!--orgWidth="527" 
					orgHeight="439"	-->
			<!-- End of Map image -->	
		<div class="row result-info">
			<div class="resultBox"> <!-- Displaying MPS results-->
    			
    		</div>
        	
        </div>		

		<map name="map" id="map_ID">
		    <area id="Saskatchewan" alt="Saskatchewan"
		    data-description="Saskatchewan is a nice place so I hear!" 
		    shape="poly" 
		    coords="177,279,145,409,212,420,221,287" 
		    style="outline:none;" 
		    target="_self" 
		    onMouseOver="showProvince('saskatchewan')" 
		    onClick="clickonProvince('saskatchewan')" 
		    onMouseOut="showProvince('map-canada-bw')" />

		    <area id="Quebec" 
		    alt="Quebec" 
		    title="Quebec" 
		    shape="poly" 
		    coords="369,341,379,381,391,432,412,441,435,436,445,443,463,435,466,422,468,401,473,390,484,385,492,379,500,369,500,363,481,373,474,362,490,350,517,338,521,323,531,309,524,309,506,319,489,329,483,337,462,337,452,333,445,324,446,308,455,300,465,301,469,297,465,289,455,284,452,271,448,264,441,257,437,254,431,247,422,247,399,247,373,245,355,245,351,253,360,285,372,299,381,310,381,321" 
		    style="outline:none;" 
		    target="_self" 
		    onMouseOver="showProvince('quebec')" 
		    onClick="clickonProvince('quebec')" 
		    onMouseOut="showProvince('map-canada-bw')" />

    		<area id="NorthwestTerritories" 
    		alt="Northwest Territories" 
    		shape="poly" 
    		coords="96,129,85,144,93,158,94,175,91,186,85,205,85,222,98,242,108,254,132,268,221,286,226,238,192,225,180,218,167,194,157,176,157,160,157,154,177,150,194,154,205,144,209,130,214,105,217,89,224,73,211,69,186,68,181,93,165,107,159,121,130,126,111,130" 
    		style="outline:none;" 
    		target="_self" 
    		onMouseOver="showProvince('northwesternTerritories')" 
    		onClick="clickonProvince('northTeritories')" 
    		onMouseOut="showProvince('map-canada-bw')"/>

    		<area id="BC" 
    		alt="BC" 
    		data-description="British Columbia, also commonly referred to by its initials BC, is a province located on the west coast of Canada." 
		    shape="poly" 
		    coords="115,261,27,203,19,217,7,290,23,336,30,371,57,382,112,400,113,380,105,361,95,351,91,335,87,320,100,305,112,284" 
		    style="outline:none;" 
		    target="_self" 
		    onMouseOver="showProvince('britishColumbia')" 
		    onClick="clickonProvince('bc')" 
		    onMouseOut="showProvince('map-canada-bw')"/>

		    <area id="Manitoba" 
		    alt="Manitoba" 
		    data-description="Manitoba is a province located at the longitudinal centre of Canada. It is one of the three prairie provinces and is the fifth-most populous province in Canada" 
		    shape="poly" 
		    coords="222,288,221,311,219,330,212,421,260,424,261,378,302,329,289,322,269,298,262,290" 
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
		    coords="120,264,173,278,143,407,113,398,112,384,103,360,99,348,95,341,92,336,95,319" 
		    style="outline:none;" 
		    target="_self"  
		    onMouseOver="showProvince('alberta')" 
		    onClick="clickonProvince('al')" 
		    onMouseOut="showProvince('map-canada-bw')"/>

		    <area id="pei" 
		    alt="pei"
            data-description="Prince Edward Teritories"
            shape="poly" 
            coords="511,369,510,380,518,393,527,388,527,374,525,366" 
            style="outline:none;" 
            target="_self"  
            onMouseOver="showProvince('pei')"    
            onClick="clickonProvince('pei')" 
            onMouseOut="showProvince('map-canada-bw')" />

		    <area id="Yukon" 
		    alt="Yukon"  
		    data-description="Yukon is the westernmost and smallest of Canada's three federal territories. Whitehorse is the territorial capital and Yukon's only city."
		    shape="poly" 
		    coords="88,113,16,193,26,205,52,220,98,251,99,240,90,235,87,223,85,207,87,191,85,182,89,172,94,169,93,157,89,149,93,133,96,127" 
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
		    coords="434,246,447,265,461,283,471,302,469,311,456,306,450,315,456,325,467,333,480,337,479,327,495,324,523,308,535,313,541,336,542,354,559,348,582,340,589,327,562,311,553,318,539,306,532,291,520,284,503,284,472,278" 
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
            coords="476,396,489,408,495,418,506,413,513,398,508,389,497,383,486,386" 
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
		    coords="264,288,223,289,227,238,191,223,179,210,156,172,158,156,176,158,203,161,211,131,221,102,226,88,235,54,258,31,288,11,313,4,320,14,310,56,312,86,314,109,321,121,342,132,369,148,415,172,420,210,421,235,335,248,316,261" 
		    style="outline:none;" 
		    target="_self" 
		    onClick="clickonProvince('nunavut')" 
		    onMouseOver="showProvince('nunavut')" 
		    onMouseOut="showProvince('map-canada-bw')" />

		    <area id="Ontario" 
		    alt="Ontario" 
		    title="Ontario" 
		    shape="poly" 
		    coords="301,328,347,341,359,376,377,387,395,434,416,445,432,445,426,456,424,472,402,490,386,498,368,489,340,458,320,448,292,438,269,429,262,418,262,388,262,372" style="outline:none;" target="_self"  
		    onMouseOver="showProvince('ontario')"
		    onClick="clickonProvince('ontario')" 
		    onMouseOut="showProvince('map-canada-bw')"/>

		    <area id="NovaScotia" 
		    alt="NovaScotia" 
		    title="NovaScotia" 
		    shape="poly" 
		    coords="517,411,511,426,524,425,528,407,537,397,548,383,542,374,521,398" 
		    style="outline:none;" target="_self" 
		    onMouseOver="showProvince('novascotia')" 
		    onClick="clickonProvince('novascotia')" 
		    onMouseOut="showProvince('map-canada-bw')" />
		</map>
		
	</div>


<?php include 'footer.php';?>

