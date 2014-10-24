<?php

Route::get('/', function(){
	return View::make('index');
});


Route::get('/users', function(){
	return View::make('users');
});

Route::post('/users', function(){
	$num_users = Input::get('num_users');
	$faker = Faker\Factory::create();
	$users = '';
	for($i=0; $i < $num_users; $i++){

		$users .= '<b>'.$faker->name.'</b><br>';
		
		if(Input::get('include_email')) $users .= '<i><b>Email:</b></i> '.$faker->email.'<br>';
		if(Input::get('include_pass')){

			for($j = 0; $j < 5; $j++) $word_positions[$j] = rand(1, 35000);
			sort($word_positions);
			$in_file[$j] = fopen('wordlist.txt', 'r');
			$num_words_read = 0;
			$num_words_found = 0;

			while($num_words_found < 5){
				//Extracting the words from wordlist.txt
				$word = substr(fgets($in_file[$j]), 0, -1);

				$num_words_read++;

				if($num_words_read == $word_positions[$num_words_found]){
					$found_words[$num_words_found] = $word;
				
					$num_words_found++;
				}
			}
			
			shuffle($found_words);
			
			$users .= '<i><b>Password:</b></i> ';
			for($j = 0; $j < 5; $j++) $users .= $found_words[$j].' ';
			
			$users .= '<br>';
		}

		if(Input::get('include_loc')) $users .= '<i><b>Location:</b></i> '.$faker->city.', '.$faker->stateAbbr.'<br>';
		if(Input::get('include_dob')) $users .= '<i><b>Date of birth:</b></i> '.$faker->date($format = 'm/d/Y', $max = '-10 years').'<br>';

		$users .= '<br>';
	}
	
	return View::make('users') -> with('users', $users)
	                           -> with('num_users', $num_users);
});



Route::get('/lorem', function(){
	return View::make('lorem');
});

Route::post('/lorem', function(){
	$generator = new Badcow\LoremIpsum\Generator();
	
	$paragraphs = $generator->getParagraphs(Input::get('num_paragraphs'));
	
	$lorem = implode('<p>', $paragraphs);
	
	
	return View::make('lorem') -> with('lorem', $lorem)
	                           -> with('num_paragraphs', Input::get('num_paragraphs'));
});


?>