<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $post = $this->findPost('magento-2-favorites-extension');
        if (!$post->exists) {
            $post->fill([
                'author_id' => 1,
                'category_id'  => 6,
                'title'     => 'Magento 2 Favorites Extension',
                'seo_title' => 'Magento2 Favorites Extension',
                'excerpt'   => 'This is the excerpt for the Lorem Ipsum Post',
                'body'      => '<p>\"Add to favorites\" option next to each product both on PLP and PDP.&nbsp; A user can favor product even if not signed in. A list of favored products is available through account dashboard. A simple one click re-order.&nbsp; An admin grid of favored products on Customers. Also Exporting Favorites enabled.</p>',
                'image'            => 'posts/June2017/eObDq8cKi2WZOT3BzoBw.png',
                'slug'             => 'magento-2-favorites-extension',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLISHED',
                'featured'         => 0,
                'video'            => null,
                'gallery_img_1'    => null,
                'gallery_img_2'    => null,
                'gallery_img_3'    => null,
                'display_gallery_as_slider' => 0,
                'parent_id'        => null,
                'series_intro'     => 0,
                'has_complex_body' => 0,
            ])->save();
        }

        $post = $this->findPost('my-sample-post');
        if (!$post->exists) {
            $post->fill([
                'author_id' => 1,
                'category_id'  => 1,
                'title'     => 'My Sample Post',
                'seo_title' => null,
                'excerpt'   => 'This is the excerpt for the sample Post.',
                'body'      => '<p>This is the body for the sample post, which includes the body.</p>\r\n<h2>We can use all kinds of format!</h2>\r\n<p>And include a bunch of other stuff.</p>',
                'image'            => null,
                'slug'             => 'my-sample-post',
                'meta_description' => 'this will be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLISHED',
                'featured'         => 0,
                'video'            => null,
                'gallery_img_1'    => 'posts/July2017/9OLZOU44A3HqzvoS3F4Q.png',
                'gallery_img_2'    => 'posts/July2017/aS7a0EgUimlt1nPGz0Ki.jpg',
                'gallery_img_3'    => 'posts/July2017/FaFpHUyZq5qi4FrrXtse.jpg',
                'display_gallery_as_slider' => 0,
                'parent_id'        => null,
                'series_intro'     => 0,
                'has_complex_body' => 0,
            ])->save();
        }

        $post = $this->findPost('latest-post');
        if (!$post->exists) {
            $post->fill([
                'author_id' => 1,
                'category_id'  => 2,
                'title'     => 'Latest Post',
                'seo_title' => null,
                'excerpt'   => 'This is the excerpt for the latest post',
                'body'      => '<p>This is the body for the latest post.</p>
<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>
<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>
<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>',
                'image'            => 'posts/9txUSY6wb7LTBSbDPrD9.jpg',
                'slug'             => 'latest-post',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLISHED',
                'featured'         => 0,
                'video'            => 'posts/July2017/ycTYpQQPwpJg1NmBRC4A.mp4',
                'gallery_img_1'    => null,
                'gallery_img_2'    => null,
                'gallery_img_3'    => null,
                'display_gallery_as_slider' => 0,
                'parent_id'        => null,
                'series_intro'     => 0,
                'has_complex_body' => 0,
            ])->save();
        }

        $post = $this->findPost('yarr-post');
        if (!$post->exists) {
            $post->fill([
                'author_id' => 1,
                'category_id'  => 3,
                'title'     => 'Yarr Post',
                'seo_title' => null,
                'excerpt'   => 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.',
                'body'      => '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>
<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>
<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>',
                'image'            => 'posts/yuk1fBwmKKZdY2qR1ZKM.jpg',
                'slug'             => 'yarr-post',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLISHED',
                'featured'         => 1,
                'video'            => null,
                'gallery_img_1'    => 'posts/July2017/9OLZOU44A3HqzvoS3F4Q.png',
                'gallery_img_2'    => 'posts/July2017/aS7a0EgUimlt1nPGz0Ki.jpg',
                'gallery_img_3'    => 'posts/July2017/FaFpHUyZq5qi4FrrXtse.jpg',
                'display_gallery_as_slider' => 1,
                'parent_id'        => null,
                'series_intro'     => 0,
                'has_complex_body' => 0,
            ])->save();
        }

        $post = $this->findPost('who-is-still-afraid-of-magento-2');
        if (!$post->exists) {
            $post->fill([
                'author_id' => 1,
                'category_id'  => 3,
                'title'     => 'Who\'s still afraid of Magento 2?',
                'seo_title' => 'Who\'s still afraid of Magento 2?',
                'excerpt'   => 'Learning Magento 2 through Test Driven development of Favorites extension.',
                'body'      => '<p>Magento 1 was released back in 2009, but PHP had really evolved in last couple of years. So, with Magento 2 we have a chance to engage more actively in following trends and best practices of modern PHP. This will be introduction to Magento 2 through real world example - Building Favorites extension with TDD. This will be fast, lightweight extension. We will add \"Add to favorites\" option next to each product both on PLP and PDP. A user can favor product even if not signed in. A list of favored products is available through each user\'s account dashboard. In backend, we\'ll have an admin grid of favored products on Customers. Also, we\'ll add Exporting Favorites functionality.</p>\r\n<div class=\"single-left2\">\r\n<div class=\"col-md-6 single-left2-left\">\r\n<ul>\r\n<li><span class=\"fa fa-check\">&nbsp;</span><a href=\"singlepage.html\">A user can favour product even if not sign in.</a></li>\r\n<li><span class=\"fa fa-check\">&nbsp;</span><a href=\"singlepage.html\">A user can see the list of all favoureted products in his/her dashboard.</a></li>\r\n<li><span class=\"fa fa-check\">&nbsp;</span><a href=\"singlepage.html\">Accusantium doloremque laudantium</a></li>\r\n<li><span class=\"fa fa-check\">&nbsp;</span><a href=\"singlepage.html\">Vel illum qui dolorem eum fugiat quo</a></li>\r\n<li><span class=\"fa fa-check\">&nbsp;</span><a href=\"singlepage.html\">Quis autem vel eum iure reprehenderit</a></li>\r\n<li><span class=\"fa fa-check\">&nbsp;</span><a href=\"singlepage.html\">Neque porro quisquam est, qui dolorem</a></li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-6 single-left2-left\">\r\n<ul>\r\n<li><span class=\"fa fa-check\">&nbsp;</span><a href=\"singlepage.html\">A user can add to cart from his/her list of favourated products.</a></li>\r\n<li><span class=\"fa fa-check\">&nbsp;</span><a href=\"singlepage.html\">Fast, lightweight.</a></li>\r\n<li><span class=\"fa fa-check\">&nbsp;</span><a href=\"singlepage.html\">Accusantium doloremque laudantium</a></li>\r\n<li><span class=\"fa fa-check\">&nbsp;</span><a href=\"singlepage.html\">Vel illum qui dolorem eum fugiat quo</a></li>\r\n<li><span class=\"fa fa-check\">&nbsp;</span><a href=\"singlepage.html\">Quis autem vel eum iure reprehenderit</a></li>\r\n<li><span class=\"fa fa-check\">&nbsp;</span><a href=\"singlepage.html\">Neque porro quisquam est, qui dolorem</a></li>\r\n</ul>\r\n</div>\r\n<div class=\"clearfix\">&nbsp;</div>\r\n</div>\r\n<div class=\"admin\">\r\n<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself.</p>\r\n<a href=\"#\"><em>John Frank</em></a></div>',
                'image'            => 'posts/June2017/my_favs.gif',
                'slug'             => 'who-is-still-afraid-of-magento-2',
                'meta_description' => 'Practical Guide to M2 development.',
                'meta_keywords'    => 'magento2, magento, php, tdd',
                'status'           => 'PUBLISHED',
                'featured'         => 1,
                'video'            => null,
                'gallery_img_1'    => null,
                'gallery_img_2'    => null,
                'gallery_img_3'    => null,
                'display_gallery_as_slider' => 0,
                'parent_id'        => null,
                'series_intro'     => 1,
                'has_complex_body' => 1,
            ])->save();
        }

        $post = $this->findPost('my-sample-post-2');
        if (!$post->exists) {
            $post->fill([
                'author_id' => 1,
                'category_id'  => 3,
                'title'     => 'My Sample Post 2',
                'seo_title' => 'My Sample Post 2',
                'excerpt'   => 'This is the excerpt for the sample Post.',
                'body'      => '<p>This is the body for the sample post, which includes the body.</p>\r\n<h2>We can use all kinds of format!</h2>\r\n<p>And include a bunch of other stuff.</p>',
                'image'            => 'posts/7uelXHi85YOfZKsoS6Tq.jpg',
                'slug'             => 'my-sample-post-2',
                'meta_description' => 'this will be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLISHED',
                'featured'         => 0,
                'video'            => null,
                'gallery_img_1'    => 'posts/July2017/9OLZOU44A3HqzvoS3F4Q.png',
                'gallery_img_2'    => 'posts/July2017/aS7a0EgUimlt1nPGz0Ki.jpg',
                'gallery_img_3'    => 'posts/July2017/FaFpHUyZq5qi4FrrXtse.jpg',
                'display_gallery_as_slider' => 0,
                'parent_id'        => 4,
                'series_intro'     => 0,
                'has_complex_body' => 0,
            ])->save();
        }

        $post = $this->findPost('yarr-post');
        if (!$post->exists) {
            $post->fill([
                'author_id' => 1,
                'category_id'  => 3,
                'title'     => 'Latest Post 2',
                'seo_title' => null,
                'excerpt'   => 'This is the excerpt for the latest post 2',
                'body'      => '<p>This is the body for the latest post 2</p>',
                'image'            => 'posts/yuk1fBwmKKZdY2qR1ZKM.jpg',
                'slug'             => 'yarr-post',
                'meta_description' => 'this be a meta descript',
                'meta_keywords'    => 'keyword1, keyword2, keyword3',
                'status'           => 'PUBLISHED',
                'featured'         => 1,
                'video'            => 'posts/July2017/ycTYpQQPwpJg1NmBRC4A.mp4',
                'gallery_img_1'    => null,
                'gallery_img_2'    => null,
                'gallery_img_3'    => null,
                'display_gallery_as_slider' => 0,
                'parent_id'        => 4,
                'series_intro'     => 0,
                'has_complex_body' => 0,
            ])->save();
        }
    }

    /**
     * [post description].
     *
     * @param [type] $slug [description]
     *
     * @return [type] [description]
     */
    protected function findPost($slug)
    {
        return Post::firstOrNew(['slug' => $slug]);
    }
}







