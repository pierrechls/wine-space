var url = localStorage.getItem('website');

$("div.main-container.nobg.container-video").append("<video controls preload='auto' autoplay='true' loop><source src='" + url + "/wp-content/themes/wine-grower/videos/wine-grower.mp4' type='video/mp4' /><source src='" + url + "/wp-content/themes/wine-grower/videos/wine-grower.webm' type='video/webm' /><source src='" + url + "/wp-content/themes/wine-grower/videos/wine-grower.ogv' type='video/ogg' /></video>");


function MM_validateForm() { //v4.0
	  if (document.getElementById){
		var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
		for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
		  if (val) { nm=val.name; if ((val=val.value)!="") {
			if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
			  if (p<1 || p==(val.length-1)) errors+='- '+nm+' doit contenir un e-mail.\n';
			} else if (test!='R') { num = parseFloat(val);
			  if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
			  if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
				min=test.substring(8,p); max=test.substring(p+1);
				if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
		  } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' est obligatoire.\n'; }
		} if (errors) alert('Merci de corriger la ou les erreurs suivantes : \n'+errors);
		document.MM_returnValue = (errors == '');
	} }

function calcul()
{
	nb_ligne = this.document.getElementById('nb_ligne').value;
	total = 0;
	total_equivalence = 0;
	fdp = 0;
	for (i=1; i<=nb_ligne; i++)
	{
		var str = this.document.getElementById('qte_'+i).value;
		var reg= /^[0-9]*$/;
		if(!reg.test(str)){
			this.document.getElementById('qte_'+i).value = 0;
		}
		else{
			if(str > 1000){
				this.document.getElementById('qte_'+i).value = 0;
			}
		}
		total_ligne = this.document.getElementById('qte_'+i).value * this.document.getElementById('prix_'+i).value;
		this.document.getElementById('total_'+i).value = eval(total_ligne).toFixed(2);
		this.document.getElementById('total_aff_'+i).value = eval(total_ligne).toFixed(2)+' €';
		total = total + total_ligne;
		total_equivalence = total_equivalence + this.document.getElementById('qte_'+i).value * this.document.getElementById('equivalence_'+i).value;
	}

	this.document.getElementById('total').value = eval(total).toFixed(2);
	this.document.getElementById('total_aff').value = eval(total).toFixed(2)+' €';


	if(this.document.getElementById('total').value >= 0 && this.document.getElementById('total').value < 360)
	{
		this.document.getElementById('total_fdp').value = '17.50';
		this.document.getElementById('total_fdp_aff').value = '17.50'+' €';
		fdp = 17.50;
	}
	/*if(total_equivalence>=4 && total_equivalence<=6)
	{
		this.document.getElementById('total_fdp').value = '17.70';
		this.document.getElementById('total_fdp_aff').value = '17.70'+' €';
		fdp = 17.70;
	}
	if(total_equivalence>=7 && total_equivalence<=12)
	{
		this.document.getElementById('total_fdp').value = '22.00';
		this.document.getElementById('total_fdp_aff').value = '22.00'+' €';
		fdp = 22.00;
	}
	if(total_equivalence>=13 && total_equivalence<=18)
	{
		this.document.getElementById('total_fdp').value = '39.70';
		this.document.getElementById('total_fdp_aff').value = '39.70'+' €';
		fdp = 35.40;
	}
	if(total_equivalence>=19 && total_equivalence<=29)
	{
		this.document.getElementById('total_fdp').value = '44.00';
		this.document.getElementById('total_fdp_aff').value = '44.00'+' €';
		fdp = 44.00;
	}
	if(total_equivalence>=30 && total_equivalence<=71)
	{
		this.document.getElementById('total_fdp').value = eval(total_equivalence*1.75).toFixed(2);
		this.document.getElementById('total_fdp_aff').value = eval(total_equivalence*1.75).toFixed(2)+' €';
		fdp = total_equivalence*1.75;
	}
	if(total_equivalence>=72 && total_equivalence<=113)
	{
		this.document.getElementById('total_fdp').value = eval(total_equivalence*1.55).toFixed(2);
		this.document.getElementById('total_fdp_aff').value = eval(total_equivalence*1.55).toFixed(2)+' €';
		fdp = total_equivalence*1.55;
	}
	if(total_equivalence>=114 && total_equivalence<=155)
	{
		this.document.getElementById('total_fdp').value = eval(total_equivalence*1.45).toFixed(2);
		this.document.getElementById('total_fdp_aff').value = eval(total_equivalence*1.45).toFixed(2)+' €';
		fdp = total_equivalence*1.45;
	}
	if(total_equivalence>=156 && total_equivalence<=197)
	{
		this.document.getElementById('total_fdp').value = eval(total_equivalence*1.25).toFixed(2);
		this.document.getElementById('total_fdp_aff').value = eval(total_equivalence*1.25).toFixed(2)+' €';
		fdp = total_equivalence*1.25;
	}
	if(total_equivalence>=198)
	{
		this.document.getElementById('total_fdp').value = '0.0';
		this.document.getElementById('total_fdp_aff').value = '0.00'+' €';
		fdp = 0;
	}*/
	else{
		this.document.getElementById('total_fdp').value = '0';
		this.document.getElementById('total_fdp_aff').value = 'Livraison gratuite';
		fdp = 0;
	}

	this.document.getElementById('total_total').value = eval(total+fdp).toFixed(2);
	this.document.getElementById('total_total_aff').value = eval(total+fdp).toFixed(2)+' €';
}

/*
$(function() {
	$(document).ready(function () {
	  var top = $('#nav-container').offset().top - parseFloat($('.header-container').css('marginTop').replace(/auto/, 0));
	  $(window).scroll(function (event) {
		// what the y position of the scroll is
		var y = $(this).scrollTop();

		// whether that's below the form
		if (y >= top) {
		  // if so, ad the fixed class
		  $('#nav-container').addClass('fixed');
		} else {
		  // otherwise remove it
		  $('#nav-container').removeClass('fixed');
		}
	  });
	});
});
*/

$(function() {
	$('a[href*=#]').click(function() {
	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
		&& location.hostname == this.hostname) {
			var $target = $(this.hash);
			var $targetOffset2 = $('#cuvees').offset().top;
			$target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
			/*if ($target.length) {*/
				if($target.selector=='#presentation')
				{
					var targetOffset = 0;
				}
				if($target.selector=='#cuvees')
				{
					var targetOffset = $target.offset().top - 100;
				}
				if($target.selector=='#tarifs')
				{
					var targetOffset = $target.offset().top - 100;
				}
				if($target.selector=='#actualites')
				{
					var targetOffset = $target.offset().top - 100;
				}
				if($target.selector=='#contact')
				{
					var targetOffset = $target.offset().top - 100;
				}
				if($target.selector=='#carousel-1-0-slide0' || $target.selector=='#carousel-1-0-slide1' || $target.selector=='#carousel-1-0-slide2'
				|| $target.selector=='#carousel-1-0-slide3' || $target.selector=='#carousel-1-0-slide4' || $target.selector=='#carousel-1-0-slide5'
				|| $target.selector=='#carousel-1-0-slide6')
				{
					var targetOffset = $targetOffset2 - 170;
				}
				if($target.selector=='#top')
				{
					var targetOffset = 0;
				}
				$('html,body').animate({scrollTop: targetOffset}, 1000);
				return false;
			/*}*/
		}
	});
});

function launchAjax(table){
	var taille = table.length;
	for(var i=0; i < taille; i++){
			$.ajax({
	                cache     : false,
	                async	  : false,
	                url       : "index.php",
	                type      : "POST",
	                data      :{
	                    id : table[i].product_id,
	                    quant : table[i].quantity
	                },
	                success(data){
	                    return 1;
	                },
	                error(data){
		                return 0;
	                }
	        });
	}
}


function allocate_table(product_id, quantity){
    this.product_id = product_id;
    this.quantity = quantity;
}

function send_form_cuv(){
	var nb_ligne = this.document.getElementById('nb_ligne').value;
	var table = new Array(nb_ligne);
	var cpt=0;

	var f = document.getElementById("form_bon_commande" );
	if(f) {
	   var champs = f.getElementsByTagName("tr");
	   for(var i=0, n=champs.length; i<n; i++) {
	   		if(champs[i].getAttribute("class") === "cuv_num"){
		   		var product_id = champs[i].getAttribute("value");
		   		//alert(product_id);

		   		var input_quantity = champs[i].getElementsByTagName("input");
		   		for(var j=0, t=input_quantity.length; j<t; j++) {
		   			if(input_quantity[j].getAttribute("class") === "quantity"){
		   				var quantity = input_quantity[j].value;
		   			}
		   		}

		   		if(parseInt(quantity)==quantity && quantity!=0 && quantity!="null"){
			   		table[cpt] = new allocate_table(product_id, quantity);
			   		cpt++;
		   		}
	   		}
	   }
	   launchAjax(table);
	}
}
  var form = $('#formSendMail'); // contact form
  var submit = $('#submitformSendMail');  // submit button
  var alert = $('#alertformSendMail'); // alert div for show alert message

  // form submit event
  form.on('submit', function(e) {
    e.preventDefault(); // prevent default form submit

    $.ajax({
      url: 'index.php', // form action url
      type: 'POST', // form submit method get/post
      dataType: 'html', // request type html/json/xml
      data: form.serialize(), // serialize form data
      beforeSend: function() {
      },
      success: function(data) {
        alert.html("Mail envoyé.");
        form.trigger('reset'); // reset form
      },
      error: function(e) {
        alert.html("Mail non envoyé.");
      }
    });
  });

$("#code_promo_desktop").css("display", "block");
$("#code_promo_mobile").css("display", "none");

var keys = {37: 1, 38: 1, 39: 1, 40: 1};

function preventDefault(e) {
  e = e || window.event;
  if (e.preventDefault)
      e.preventDefault();
  e.returnValue = false;
}

function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
        preventDefault(e);
        return false;
    }
}

function disableScroll() {
  if (window.addEventListener) // older FF
      window.addEventListener('DOMMouseScroll', preventDefault, false);
  window.onwheel = preventDefault; // modern standard
  window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
  window.ontouchmove  = preventDefault; // mobile
  document.onkeydown  = preventDefaultForScrollKeys;
}

function enableScroll() {
    if (window.removeEventListener)
        window.removeEventListener('DOMMouseScroll', preventDefault, false);
    window.onmousewheel = document.onmousewheel = null;
    window.onwheel = null;
    window.ontouchmove = null;
    document.onkeydown = null;
}
