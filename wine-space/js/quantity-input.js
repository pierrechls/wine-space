var spins = document.getElementsByClassName('spin');
for (var i = 0, len = spins.length; i < len; i++) {
    
    (function () {
        var spin = spins[i];
	    var span = spin.getElementsByTagName('span');
	    var input = spin.getElementsByTagName('input')[0];
	    
	    input.addEventListener('change', function() {
	    	input.value = +input.value || 0;
	    })
	    
	    span[0].addEventListener('click', function() {
	    	input.value = Math.max(0, input.value - 1);
	    });
	    span[1].addEventListener('click', function() {
	    	input.value -= -1;
	    });
    }());
}