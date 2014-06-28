<?php
// app/database/seeds/CommentTableSeeder.php

	class CommentTableSeeder extends Seeder {
		public function run() {
			DB::table('comments')->delete();
			
			Comment::create(array(
				'author' => 'Bob Boberson',
				'text' => 'Look I\'m a test comment.'
			));

			Comment::create(array(                                  
                                'author' => 'Juantanamo Bay',
				'text' => 'Ah si, el comment.'           
                        ));

			Comment::create(array(                                  
                                'author' => 'Joaquin Phoenix',
				'text' => 'I <3 my compooper.'           
                        ));
		}
	}
