$('document').ready(function(){
	$('form').submit(function(){
		console.log('hello');
		//load up any gif you want, this will be shown while user is waiting for response
		$('div#display').html('<img class="img-responsive" alt="loading" src="/assets/images/ajax-loader.gif" />');
		//using $(this).attr('action') = we can simply direct the ajax call to a controller and make a call from our server
		//using $(this).serialize() = will alter the form data passed to be URL appropriate when the call is made
		$.post($(this).attr('action'), $(this).serialize(), function(res){ 
			console.log('hey');
			console.log(res);
			$('div#display').html(res);
		});
		return false;
	});
});