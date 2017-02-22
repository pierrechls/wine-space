window.onload = function() {

	let searchButton        = document.querySelector('#search-product-icon')
	let searchContent       = document.querySelector('#search-products-content')
	let closeSearchButton   = document.querySelector('button#cancel-search')
	let inputSearchProduct  = document.querySelector('#input-search-product')
	let submitSearchProduct = document.querySelector('#input-submit-search-product')
	
	inputSearchProduct.addEventListener('keypress', function(e) {
        if (e.keyCode == 13) {
            e.preventDefault()
            submitSearchProduct.click()
        }
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
	
	closeSearchButton.onclick = (e) => {
		e.preventDefault()
		if(searchContent.classList.contains('open')) {
			searchContent.classList.remove('open')	
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