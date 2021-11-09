<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    private const COMMENTS = [
        [
            'post_id' => 1,
            'user_id' => -1,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
            do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elit ullamcorper
            dignissim cras tincidunt lobortis feugiat vivamus at. Elit at imperdiet dui
            accumsan sit amet. Feugiat nibh sed pulvinar proin gravida. Ipsum consequat
            nisl vel pretium lectus quam id leo. Maecenas ultricies mi eget mauris pharetra
            et ultrices neque. Elementum integer enim neque volutpat ac tincidunt. Quam
            id leo in vitae turpis massa. Massa tempor nec feugiat nisl pretium fusce
            id velit. Hendrerit gravida rutrum quisque non tellus orci ac auctor augue.
            Nec feugiat in fermentum posuere urna nec tincidunt. Massa enim nec dui nunc
            mattis enim ut tellus. Elementum tempus egestas sed sed risus. Nisl condimentum
            id venenatis a condimentum vitae. Mi eget mauris pharetra et ultrices neque ornare
            aenean euismod.'
        ],
        [
            'post_id' => 1,
            'user_id' => -1,
            'content' => 'Elementum integer enim neque volutpat ac tincidunt.'
        ],
        [
            'post_id' => 1,
            'user_id' => -1,
            'content' => 'Massa enim nec dui nunc mattis enim ut tellus. Elementum tempus egestas sed sed risus.'
        ],
        [
            'post_id' => 2,
            'user_id' => -1,
            'content' => 'Mi eget mauris pharetra et ultrices neque ornare aenean euismod.'
        ],
        [
            'post_id' => 3,
            'user_id' => -1,
            'content' => 'Feugiat nibh sed pulvinar proin gravida.'
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::COMMENTS as $comment) {
            $modelComment = new Comment();

            $modelComment->post_id = $comment['post_id'];
            $modelComment->user_id = $comment['user_id'];
            $modelComment->content = $comment['content'];

            $modelComment->save();
        }
    }
}
