window.onload = function() {

	var searchButton        = document.querySelector('#search-product-icon')
	var searchContent       = document.querySelector('#search-products-content')
	var closeSearchButton   = document.querySelectorAll('.search-post-type-content-form form button.cancel-search')
	var inputSearchProduct  = document.querySelectorAll('.search-post-type-content-form form .search-field')
	
	inputSearchProduct.forEach(function (item, idx) {
		item.addEventListener('keypress', function(e) {
	        if (e.keyCode == 13) {
	            e.preventDefault()
	            var postType = item.id.replace('input-search-', '')
	            var postTypeInputSubmit = document.getElementById('input-submit-search-' + postType)
	            postTypeInputSubmit.click()
	        }
	    })
    })
	
	searchButton.onclick = (e) => {
		e.preventDefault()
		if(searchContent.classList.contains('open')) {
			searchContent.classList.remove('open')	
			enableScroll()
		} else {
			searchContent.classList.add('open')
			disableScroll()
		}
	}
	
	closeSearchButton.forEach(function (item, idx) {
		item.onclick = (e) => {
			e.preventDefault()
			if(searchContent.classList.contains('open')) {
				searchContent.classList.remove('open')	
				enableScroll()
			}
		}
    })
    
    var hotlineButton        = document.querySelector('#open-hotline-icon')
	var hotlineContent       = document.querySelector('#hotline-dialog-content')
	var closeHotlineButton   = document.querySelector('#hotline-dialog-content #close-hotline-dialog-content button')

	hotlineButton.onclick = (e) => {
		e.preventDefault()
		if(hotlineContent.classList.contains('open')) {
			hotlineContent.classList.remove('open')	
			enableScroll()
		} else {
			hotlineContent.classList.add('open')
			disableScroll()
		}
	}
	
	closeHotlineButton.onclick = (e) => {
		e.preventDefault()
		if(hotlineContent.classList.contains('open')) {
			hotlineContent.classList.remove('open')	
			enableScroll()
		}
    }
	
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
}