(function () {
    "use strict";
	let border = '5px solid red';
	let textForm = document.querySelector('#message');
 	let posChar = document.querySelector('.bbcode-status');
	let submitButton = document.querySelector('[name="post"]');
	let div = document.createElement('div');
	div.innerHTML = lCharUse +'<output class="count">0</output>' + lFrom +charsLimit;
	posChar.append(div);
	let countForm = document.querySelector('.count');
    textForm.oninput = function () {
			
		countForm.textContent = textForm.value.length;
		 if (textForm.value.length > charsLimit) {
            textForm.style.border = border;
			 div.classList.add('errorchar');
			 submitButton.style.border = border;
            submitButton.disabled = true;
        } else {
           textForm.style.border = null;
		   div.classList.remove('errorchar');
		  submitButton.style.border = null;
            submitButton.disabled = false;
        }
    };
})();

 