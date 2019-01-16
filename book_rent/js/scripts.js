function listAllBooks(){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	document.getElementById("table_div").innerHTML = this.responseText;
    }
  }
  xhttp.open("POST", "http://ubuntuserver/~henrik/book_rent/php_actions/list_all_books.php", true);
  xhttp.send();
}


function listAvailableBooks(){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	document.getElementById("table_div").innerHTML = this.responseText;
    }
  }
  xhttp.open("POST", "http://ubuntuserver/~henrik/book_rent/php_actions/list_available_books.php", true);
  xhttp.send();
}


function searchBook(){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    	document.getElementById("table_div").innerHTML = this.responseText;
    }
  }
  xhttp.open("POST", "http://ubuntuserver/~henrik/book_rent/php_actions/list_book_search.php", true);
  xhttp.send();
}


jQuery(document).ready(function($) {
	jQuery('.message a').click(function(){
		jQuery('form').animate({height: "toggle", opacity: "toggle"}, "slow");
	});
});