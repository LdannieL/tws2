<?php

use App\Comment;
use App\CommentSpam;
use App\CommentVote;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'comment' 	=> 'Ut ex metus, ornare ac ultricies sit amet, auctor a elit. Praesent sit amet scelerisque massa. Duis porta risus id urna finibus aliquet.',
            'votes'	 	=> -2,
            'spam'      => 0,
            'reply_id' 	=> 0,
            'post_id'   => '6',
            'users_id'  => 3,
        ]);

        Comment::create([
            'comment' 	=> 'Ut ex metus, ornare ac ultricies sit amet, auctor a elit. Praesent sit amet scelerisque massa. Duis porta risus id urna finibus aliquet.',
            'votes'	 	=> -1,
            'spam'      => 0,
            'reply_id' 	=> 0,
            'post_id'   => '6',
            'users_id'  => 2,
        ]);

        Comment::create([
            'comment' 	=> 'Ut ex metus, ornare ac ultricies sit amet, auctor a elit. Praesent sit amet scelerisque massa. Duis porta risus id urna finibus aliquet.',
            'votes'	 	=> -3,
            'spam'      => 0,
            'reply_id' 	=> 0,
            'post_id'   => '6',
            'users_id'  => 4,
        ]);

        Comment::create([
            'comment' 	=> 'Ut ex metus, ornare ac ultricies sit amet, auctor a elit. Praesent sit amet scelerisque massa. Duis porta risus id urna finibus aliquet.',
            'votes'	 	=> 0,
            'spam'      => 0,
            'reply_id' 	=> 0,
            'post_id'   => '6',
            'users_id'  => 5,
        ]);

        Comment::create([
            'comment' 	=> 'Test',
            'votes'	 	=> 0,
            'spam'      => 0,
            'reply_id' 	=> 0,
            'post_id'   => '6',
            'users_id'  => 3,
        ]);

        Comment::create([
            'comment' 	=> '123',
            'votes'	 	=> 1,
            'spam'      => 0,
            'reply_id' 	=> 2,
            'post_id'   => '0',
            'users_id'  => 3,
        ]);

        Comment::create([
            'comment' 	=> 'Hello there',
            'votes'	 	=> 0,
            'spam'      => 0,
            'reply_id' 	=> 3,
            'post_id'   => '0',
            'users_id'  => 4,
        ]);

        Comment::create([
            'comment' 	=> 'And this...',
            'votes'	 	=> 0,
            'spam'      => 0,
            'reply_id' 	=> 3,
            'post_id'   => '0',
            'users_id'  => 4,
        ]);

        Comment::create([
            'comment' 	=> '1234567',
            'votes'	 	=> -1,
            'spam'      => 1,
            'reply_id' 	=> 3,
            'post_id'   => '0',
            'users_id'  => 4,
        ]);

        CommentSpam::create([
        	'comment_id'=> 9,
        	'user_id'  => 4,
        ]);

        Comment::create([
            'comment' 	=> 'XYZZZZZZZZZZZZZ',
            'votes'	 	=> -1,
            'spam'      => 0,
            'reply_id' 	=> 2,
            'post_id'   => '0',
            'users_id'  => 3,
        ]);

        Comment::create([
            'comment' 	=> 'This is a reply.',
            'votes'	 	=> -1,
            'spam'      => 0,
            'reply_id' 	=> 4,
            'post_id'   => '0',
            'users_id'  => 4,
        ]);

        Comment::create([
            'comment' 	=> 'bla',
            'votes'	 	=> 0,
            'spam'      => 0,
            'reply_id' 	=> 3,
            'post_id'   => '0',
            'users_id'  => 4,
        ]);

        CommentVote::create([
        	'comment_id'=> 6,
			'user_id' 	=> 3,
			'vote' 		=> 'up',
        ]);

        CommentVote::create([
        	'comment_id'=> 6,
			'user_id' 	=> 3,
			'vote' 		=> 'up',
        ]);

        CommentVote::create([
        	'comment_id'=> 2,
			'user_id' 	=> 3,
			'vote' 		=> 'down',
        ]);

        CommentVote::create([
        	'comment_id'=> 6,
			'user_id' 	=> 3,
			'vote' 		=> 'up',
        ]);

        CommentVote::create([
        	'comment_id'=> 6,
			'user_id' 	=> 4,
			'vote' 		=> 'up',
        ]);

        CommentVote::create([
        	'comment_id'=> 2,
			'user_id' 	=> 4,
			'vote' 		=> 'down',
        ]);

        CommentVote::create([
        	'comment_id'=> 1,
			'user_id' 	=> 4,
			'vote' 		=> 'up',
        ]);

        CommentVote::create([
        	'comment_id'=> 1,
			'user_id' 	=> 4,
			'vote' 		=> 'up',
        ]);

        CommentVote::create([
        	'comment_id'=> 1,
			'user_id' 	=> 4,
			'vote' 		=> 'up',
        ]);

        CommentVote::create([
        	'comment_id'=> 1,
			'user_id' 	=> 4,
			'vote' 		=> 'up',
        ]);   

        CommentVote::create([
        	'comment_id'=> 1,
			'user_id' 	=> 4,
			'vote' 		=> 'up',
        ]); 

        CommentVote::create([
        	'comment_id'=> 1,
			'user_id' 	=> 4,
			'vote' 		=> 'down',
        ]);

        CommentVote::create([
        	'comment_id'=> 1,
			'user_id' 	=> 4,
			'vote' 		=> 'down',
        ]);

        CommentVote::create([
        	'comment_id'=> 1,
			'user_id' 	=> 4,
			'vote' 		=> 'down',
        ]);

        CommentVote::create([
        	'comment_id'=> 1,
			'user_id' 	=> 4,
			'vote' 		=> 'down',
        ]);

        CommentVote::create([
        	'comment_id'=> 1,
			'user_id' 	=> 4,
			'vote' 		=> 'down',
        ]);

        CommentVote::create([
        	'comment_id'=> 1,
			'user_id' 	=> 4,
			'vote' 		=> 'down',
        ]);

        CommentVote::create([
        	'comment_id'=> 1,
			'user_id' 	=> 4,
			'vote' 		=> 'down',
        ]);

        CommentVote::create([
        	'comment_id'=> 3,
			'user_id' 	=> 3,
			'vote' 		=> 'up',
        ]); 

        CommentVote::create([
        	'comment_id'=> 10,
			'user_id' 	=> 3,
			'vote' 		=> 'up',
        ]); 

        CommentVote::create([
        	'comment_id'=> 10,
			'user_id' 	=> 3,
			'vote' 		=> 'up',
        ]); 

        CommentVote::create([
        	'comment_id'=> 10,
			'user_id' 	=> 3,
			'vote' 		=> 'up',
        ]); 

        CommentVote::create([
        	'comment_id'=> 10,
			'user_id' 	=> 3,
			'vote' 		=> 'up',
        ]); 

        CommentVote::create([
        	'comment_id'=> 10,
			'user_id' 	=> 3,
			'vote' 		=> 'up',
        ]); 

        CommentVote::create([
        	'comment_id'=> 9,
			'user_id' 	=> 3,
			'vote' 		=> 'up',
        ]); 

        CommentVote::create([
        	'comment_id'=> 3,
			'user_id' 	=> 4,
			'vote' 		=> 'up',
        ]); 

        CommentVote::create([
        	'comment_id'=> 3,
			'user_id' 	=> 4,
			'vote' 		=> 'down',
        ]);

        CommentVote::create([
        	'comment_id'=> 11,
			'user_id' 	=> 1,
			'vote' 		=> 'up',
        ]); 
    }
}
