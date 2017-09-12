<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $page = Page::firstOrNew([
            'slug' => 'hello-world',
        ]);
        if (!$page->exists) {
            $page->fill([
                'author_id' => 1,
                'title'     => 'Hello World',
                'excerpt'   => 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.',
                'body'      => '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>
<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>',
                'image'            => 'pages/AAgCCnqHfLlRub9syUdw.jpg',
                'meta_description' => 'Yar Meta Description',
                'meta_keywords'    => 'Keyword1, Keyword2',
                'status'           => 'ACTIVE',
            ])->save();
        }

        $page2 = Page::firstOrNew([
            'slug' => 'features',
        ]);
        if (!$page2->exists) {
            $page2->fill([
                'author_id' => 1,
                'title'     => 'Features',
                'excerpt'   => 'Features',
                'body'      => '<p>&nbsp;</p>
<!-- features -->
<div class="banner-bottom-abt">
<div class="agileits_heading_section">
<h3 class="wthree_head">Features</h3>
<p class="agileinfo_para">Nam tempus lobortis sem non ornare in aliquet egestas, nisi mi vestibulum.</p>
</div>
<div class="w3_testimonials_grids">
<div class="col-md-6 w3_agile_classes_grid">
<div class="agile_classes_grid1">
<div class="col-xs-4 agile_classes_grid1_right">
<div class="agileits_w3layouts_classes_grid1_right"><span class="fa fa-adjust"><span class="hide">&nbsp;</span></span></div>
</div>
<div class="col-xs-8 agile_classes_grid1_left">
<h4>odio vitae</h4>
<p>Cras egestas, nibh consequat consequat ultricies.</p>
</div>
<div class="clearfix">&nbsp;</div>
</div>
<div class="agile_classes_grid1">
<div class="col-xs-4 agile_classes_grid1_right">
<div class="agileits_w3layouts_classes_grid1_right"><span class="fa fa-database"><span class="hide">&nbsp;</span></span></div>
</div>
<div class="col-xs-8 agile_classes_grid1_left">
<h4>lacinia nibh</h4>
<p>Cras egestas, nibh consequat consequat ultricies.</p>
</div>
<div class="clearfix">&nbsp;</div>
</div>
<div class="agile_classes_grid1">
<div class="col-xs-4 agile_classes_grid1_right">
<div class="agileits_w3layouts_classes_grid1_right"><span class="fa fa-bullhorn"><span class="hide">&nbsp;</span></span></div>
</div>
<div class="col-xs-8 agile_classes_grid1_left">
<h4>nulla eget</h4>
<p>Cras egestas, nibh consequat consequat ultricies.</p>
</div>
<div class="clearfix">&nbsp;</div>
</div>
<div class="agile_classes_grid1">
<div class="col-xs-4 agile_classes_grid1_right">
<div class="agileits_w3layouts_classes_grid1_right"><span class="fa fa-gift"><span class="hide">&nbsp;</span></span></div>
</div>
<div class="col-xs-8 agile_classes_grid1_left">
<h4>nibh auctor</h4>
<p>Cras egestas, nibh consequat consequat ultricies.</p>
</div>
<div class="clearfix">&nbsp;</div>
</div>
</div>
<div class="col-md-6 w3_agile_classes_grid">
<div class="agile_classes_grid1">
<div class="col-xs-4 agile_classes_grid1_right">
<div class="agileits_w3layouts_classes_grid1_right"><span class="fa fa-thumbs-up"><span class="hide">&nbsp;</span></span></div>
</div>
<div class="col-xs-8 agile_classes_grid1_left">
<h4>Cras massa</h4>
<p>Cras egestas, nibh consequat consequat ultricies.</p>
</div>
<div class="clearfix">&nbsp;</div>
</div>
<div class="agile_classes_grid1">
<div class="col-xs-4 agile_classes_grid1_right">
<div class="agileits_w3layouts_classes_grid1_right"><span class="fa fa-map-o"><span class="hide">&nbsp;</span></span></div>
</div>
<div class="col-xs-8 agile_classes_grid1_left">
<h4>nisl lectus</h4>
<p>Cras egestas, nibh consequat consequat ultricies.</p>
</div>
<div class="clearfix">&nbsp;</div>
</div>
<div class="agile_classes_grid1">
<div class="col-xs-4 agile_classes_grid1_right">
<div class="agileits_w3layouts_classes_grid1_right"><span class="fa fa-institution"><span class="hide">&nbsp;</span></span></div>
</div>
<div class="col-xs-8 agile_classes_grid1_left">
<h4>diam orciul</h4>
<p>Cras egestas, nibh consequat consequat ultricies.</p>
</div>
<div class="clearfix">&nbsp;</div>
</div>
<div class="agile_classes_grid1">
<div class="col-xs-4 agile_classes_grid1_right">
<div class="agileits_w3layouts_classes_grid1_right"><span class="fa fa-dollar"><span class="hide">&nbsp;</span></span></div>
</div>
<div class="col-xs-8 agile_classes_grid1_left">
<h4>quam finibus</h4>
<p>Cras egestas, nibh consequat consequat ultricies.</p>
</div>
<div class="clearfix">&nbsp;</div>
</div>
</div>
<div class="clearfix">&nbsp;</div>
</div>
<!-- featured-services -->
<div class="fea-tp">
<h3 class="wthree_head">Feature Services</h3>
<p class="agileinfo_para">Nam tempus lobortis sem non ornare in aliquet egestas, nisi mi vestibulum.</p>
<div class="w3ls_service_grids">
<div class="col-md-6 w3_agile_services_grid">
<div class="agile_services_grid">
<div class="hover06 column">
<div>
<figure><img class="img-responsive" src="http://technicalwebservices.loc/storage/pages/July2017/xAyPBQjqcUBEz3nEHdBF.jpg" alt=" " width="540" height="350" /></figure>
</div>
</div>
<div class="agile_services_grid_pos"><span class="fa fa-cubes"><span class="hide">&nbsp;</span></span></div>
</div>
<h4>tempus eu turpis</h4>
<p>Aliquam lacus turpis, lobortis quis dolor sed, dignissim rhoncus neque.</p>
</div>
<div class="col-md-6 w3_agile_services_grid">
<div class="agile_services_grid">
<div class="hover06 column">
<div>
<figure><img class="img-responsive" src="http://technicalwebservices.loc/storage/pages/July2017/W0NFiHhb78J7wlXoVWRz.jpg" alt=" " width="540" height="350" /></figure>
</div>
</div>
<div class="agile_services_grid_pos"><span class="fa fa-line-chart"><span class="hide">&nbsp;</span></span></div>
</div>
<h4>lobortis quis dolor</h4>
<p>Aliquam lacus turpis, lobortis quis dolor sed, dignissim rhoncus neque.</p>
</div>
<div class="col-md-6 w3_agile_services_grid">
<div class="agile_services_grid">
<div class="hover06 column">
<div>
<figure><img class="img-responsive" src="http://technicalwebservices.loc/storage/pages/July2017/4bdnEhjZPipLBphQPjOl.jpg" alt=" " width="540" height="350" /></figure>
</div>
</div>
<div class="agile_services_grid_pos"><span class="fa fa-cog"><span class="hide">&nbsp;</span></span></div>
</div>
<h4>dignissim rhoncus</h4>
<p>Aliquam lacus turpis, lobortis quis dolor sed, dignissim rhoncus neque.</p>
</div>
<div class="col-md-6 w3_agile_services_grid">
<div class="agile_services_grid">
<div class="hover06 column">
<div>
<figure><img class="img-responsive" src="http://technicalwebservices.loc/storage/pages/July2017/3UmImitT6iBwiC9r6rtA.jpg" alt=" " width="540" height="350" /></figure>
</div>
</div>
<div class="agile_services_grid_pos"><span class="fa fa-cubes"><span class="hide">&nbsp;</span></span></div>
</div>
<h4>dignissim rhoncus</h4>
<p>Aliquam lacus turpis, lobortis quis dolor sed, dignissim rhoncus neque.</p>
</div>
<div class="clearfix">&nbsp;</div>
</div>
</div>
<!-- //featured-services --></div>
<!-- features -->
<p>&nbsp;</p>',
                'image'            => '',
                'meta_description' => 'Yar Meta Description 2',
                'meta_keywords'    => 'Keyword1, Keyword2',
                'status'           => 'ACTIVE',
            ])->save();
        }
    }
}
