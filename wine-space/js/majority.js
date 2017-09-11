function get_actual_date(){
	var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!

    var yyyy = today.getFullYear();
    if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 
    var today = dd+'/'+mm+'/'+yyyy;
    return today;
}

function set_action(form, action) {
    form.action = action;
}

function verification_majority(age){
		// Détection
	if(typeof localStorage!='undefined') {
	  var newdate = get_actual_date();
	  localStorage.setItem('datesave', newdate);
	  localStorage.setItem('majority', age);

	  var legal_age = localStorage.getItem('majority');
	}
}

function redirect_age(form){
		// Détection
	if(typeof localStorage!='undefined') {
		var legal_age = localStorage.getItem('majority');
		if(legal_age == 1){
			//Il a 18ans
			if(localStorage.getItem('urlBeforeMajority')){
				var action = localStorage.getItem('urlBeforeMajority');
				set_action(form, action);
				localStorage.removeItem('urlBeforeMajority');
			} else {
				var action = "<?php echo get_site_url(); ?>";
				set_action(form, action);
			}
		}

		else if(legal_age == 2){
			//Il n'a pas 18ans
		  	window.location.href = "<?php echo get_site_url(); ?>/sorry-majority/";
		}
	}
	}

if(typeof localStorage!='undefined') {
  var legal_age = parseInt(localStorage.getItem('majority'));
  var date_save = localStorage.getItem('datesave');
  var date_today = get_actual_date();
  
  var majorityContainer = document.querySelector('#majority-container');
  
  if(legal_age!=1 && legal_age!=2) {
  	localStorage.setItem('urlBeforeMajority', window.location.href );
  	majorityContainer.className += ' form';
  	majorityContainer.style.display = 'block';
  }
  else if(legal_age==1){
  	if(date_save === date_today){
  	
  	}
  	else{
  		localStorage.setItem('urlBeforeMajority', window.location.href );
  		majorityContainer.className += ' form';
  		majorityContainer.style.display = 'block';
  	}
  }
  else if(legal_age==2){
	 majorityContainer.className += ' sorry';
	 majorityContainer.style.display = 'block';
  }
}