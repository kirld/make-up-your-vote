$( document ).ready(function() {

        /*******ADD NEW USER FORM VALIDATION********/
        
	//declare patterns 
	var emailPattern = /[a-zA-Z0-9.\-_]{1,}@[a-zA-Z0-9.\-_]{1,}[.]{1}[a-zA-Z0-9.\-_]{1,}.{0,}/;
	//in input is invalid doNotSubmit will be equal to invalid, used to check if form should submit
	var doNotSubmit = "";

	//on Sumbit of form
	$("#signup-form").submit(function(event){
		//Check to see if inputs have to left blank
		if ( $.trim($("#email").val()) === "" || $.trim($("#password").val()) === "" ) {
	  		//do not submit form
	  		event.preventDefault();
	  		//return false for older browsers
	  		return false;
                }    
                
                //Check to see if inputs are invalid
                else if(doNotSubmit !== ""){
                        //do not submit form
                        event.preventDefault();
                        //return false for older browsers
                        return false;
                }
                else {
                        //if everything is good to go, send of form!
                        return true;
                }
	}); 
        
        //on Sumbit of form
	$("#signup-form-home").submit(function(event){
		//Check to see if inputs have to left blank
		if ( $.trim($("#emailHome").val()) === "" || $.trim($("#passwordHome").val()) === "" ) {
	  		//do not submit form
	  		event.preventDefault();
	  		//return false for older browsers
	  		return false;
                }    
                
                //Check to see if inputs are invalid
                else if(doNotSubmit !== ""){
                        //do not submit form
                        event.preventDefault();
                        //return false for older browsers
                        return false;
                }
                else {
                        //if everything is good to go, send of form!
                        return true;
                }
	}); 

	//INVALID INPUT
	function invalid(id, helper){
		//if invalid function is applied, valid class is hidden
		//and invalid error will show to user
		$(id).removeClass("validated");
		$(id).addClass("invalid");
		$(".invalid").css("display","inherit");
		$(id).html("&#10008;");
		$(helper).css("display","inherit");
		//doNotSubmit is equal to invalid,since input is incorrect
		doNotSubmit = "invalid";

	}

	//VALID INPUT
	function valid(id,helper){
		//if valid function is applied, invalid class is hidden
		//and valid msg  will show to user
		$(id).addClass("validated");
		$(id).removeClass("invalid");
		$(".validated").css("display","inherit");
		$(id).html("&#10004;");
		$(helper).css("display","none");
		//doNotSubmit is left as empty, since input is correct
		doNotSubmit = "";
	}
        
	//PATTERN TEST
	function testPattern(id,pattern){
		if(pattern.test($(id).val())){
			//if pattern matches, call valid function
			valid(id + "-validated", id + "Help");
		}
		else {
			//if pattern does not match, call invalid function
			invalid(id + "-validated", id + "Help");					
		}
	}


        
        //Test password
        function testPassword(id){
            
            var text = $(id).val();
	    var upper = /[A-Z]/;
	    var lower = /[a-z]/;
	    var number = /\d/;

	    var checkArray = [upper, lower, number];
            
            $passwordSafe = true;
            
            for(var i = 0; i < checkArray.length; i++) {
                if(!checkArray[i].test(text)) { $passwordSafe = false; }
	    }
            
            if(!text.length >= 6) { $passwordSafe = false; }
               
            if($passwordSafe === false){
                invalid(id + "-validated", id + "Help");
            }
            
            else {
                valid(id + "-validated", id + "Help");
            }
        }
        
        
        
	//VALIDATE EMAIL 
	$("#email")
		.keypress(function() { testPattern("#email", emailPattern); })
		.focusout(function() { testPattern("#email", emailPattern); });
	
        //VALIDATE PASSWORD 
        $("#password")
            .keypress(function(){ testPassword("#password"); })
            .focusout(function(){ testPassword("#password"); });
    
        //VALIDATE EMAIL 
        $("#emailHome")
                .keypress(function() { testPattern("#emailHome", emailPattern); })
                .focusout(function() { testPattern("#emailHome", emailPattern); });
	
        //VALIDATE PASSWORD 
        $("#passwordHome")
            .keypress(function(){ testPassword("#passwordHome"); })
            .focusout(function(){ testPassword("#passwordHome"); });
    
        
        /************************************************************
                        PARTIES PAGE BACK TO TOP
        ***************************************************************/
    
    
        // browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});
        
 });//close document ready function

