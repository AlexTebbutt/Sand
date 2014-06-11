<?php

class ProjectnotesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('projectnotes')->truncate();
        
		\DB::table('projectnotes')->insert(array (
			0 => 
			array (
				'id' => 12,
				'project_id' => 8,
				'user_id' => 1,
				'note' => 'Dinner Set Time Line:<br><br>Design: 4 days<br>- User Account<br>- Recipe list<br>- Team Landing<br>- Team / blogger profile<br>- Search results listing<br><br>Front end Templates: 20 days<br>- Home<br>- Join<br>- Get Started<br>- Blog Landing<br>- Blog Individual<br>- Create Event<br>- Create Event Success<br>- Plan It<br>- Recipe Landing<br>- Recipe list<br>- Recipe Individual<br>- View Event<br>- User Account<br>- Team Landing<br>- Team / blogger profile<br><br>Backend: 20 days<br>- Build recipe plugin<br>- Integrate templates<br>- Populate content<br><br>General: 1 day<br>- Set up stage environment<br>- Install / configure CMS<br>- Set up live environment<br>- Install / configure CMS<br>- Migrate data / files',
				'created_at' => '2014-06-10 14:07:41',
				'updated_at' => '2014-06-10 14:07:41',
			),
			1 => 
			array (
				'id' => 13,
				'project_id' => 15,
				'user_id' => 1,
			'note' => 'Previous estimate (912: https://diginutltd.freeagent.com/estimates/579083) updated, client required the holding page to be an actual CMS home page, updated estimate accordingly.',
				'created_at' => '2014-06-10 14:08:07',
				'updated_at' => '2014-06-10 14:08:07',
			),
			2 => 
			array (
				'id' => 14,
				'project_id' => 27,
				'user_id' => 1,
			'note' => 'We have added the interim fixes to the current site (new contact page and links) and we are in the process of putting together <br>the front end work at the same time as looking at how we will go about building the multi-language content structure in the back end.',
				'created_at' => '2014-06-10 14:08:47',
				'updated_at' => '2014-06-10 14:08:47',
			),
			3 => 
			array (
				'id' => 15,
				'project_id' => 27,
				'user_id' => 1,
			'note' => 'List of work<br>-----------------------<br>Header updates<br>- The logo and header are to be shrunk, effectively always showing the ‘compact view’<br>- Remove region & language options (these will be integrated into the main page)<br>- Cosmetic changes to the header and addition of ‘Contact Us’ to the main menu<br><br>Home page<br>- Addition of region filter. Content will filter based on the option selected. Default to ‘Global’ or All<br>- Addition of language option<br>- Redesign of above the fold content to show 6 tiles<br>	> Hero tile<br>	> Contact tile (this will change depending on region selected)<br>	> 4 additional content tiles<br>- Tag to be displayed on tiles (only 1 even if there are more per content item)<br><br>Contact Page<br>- New page to be built which will include<br>	> Office address<br>	> Map<br>	> Enquiry form<br>	> email address<br>	> Social media links (these are global, not per region)<br>- Each region has it’s own contact page, uses the same template<br><br>Case study / Detail Page<br>- Remove bread crumb, add tags instead.<br><br>Mobile view:<br>- Cosmetic amends to header<br>- Amends to design to include changed region / language filter / option<br>- Tags are not displayed on the content tiles<br><br>Back end<br>- Ability to be able to chose which content items feature in the top content block. This would be the hero image and then four further content items. Ideally they would like to be able to order them with the 1st item being the hero image / block.<br>- Addition of Alt tags to all images<br>',
				'created_at' => '2014-06-10 14:08:59',
				'updated_at' => '2014-06-10 14:08:59',
			),
			4 => 
			array (
				'id' => 16,
				'project_id' => 30,
				'user_id' => 1,
				'note' => 'We have been sent the remaining 5 designs for build and work flowing.',
				'created_at' => '2014-06-10 14:09:50',
				'updated_at' => '2014-06-10 14:09:50',
			),
			5 => 
			array (
				'id' => 17,
				'project_id' => 45,
				'user_id' => 1,
			'note' => 'Main reasons we didn\'t win the work (full letter from Medway is also in the Tenders Dropbox folder):<br><br>"As such it will be useful for me to offer feedback in the respect of these two areas. In regards to Quality, the panel felt that you offered strong responses in a number of areas, however they felt there was lack of creative showcasing with regard to the wireframes and mock-ups for the Recreate sample site. We also felt that your timetable for creation of the site was too long to allow the site to deliver its outcomes before the project would come to an end. "',
				'created_at' => '2014-06-10 14:10:11',
				'updated_at' => '2014-06-10 14:10:11',
			),
			6 => 
			array (
				'id' => 18,
				'project_id' => 31,
				'user_id' => 1,
			'note' => 'We didn\'t win the project (as suspected) but we were highly commended and the panel were very impressed with our pitch document. Reason stated for not winning was lack of experience in building cultural applications (also as suspected). Good learning curve as the document structure clearly works well.',
				'created_at' => '2014-06-10 14:10:19',
				'updated_at' => '2014-06-10 14:10:19',
			),
			7 => 
			array (
				'id' => 19,
				'project_id' => 56,
				'user_id' => 1,
				'note' => 'Training was approx. 1h 20min with 1hr 30m travelling time.',
				'created_at' => '2014-06-10 14:12:12',
				'updated_at' => '2014-06-10 14:12:12',
			),
			8 => 
			array (
				'id' => 20,
				'project_id' => 61,
				'user_id' => 1,
				'note' => 'Decision is with the board and they\'ll respond soon with next steps. Looking to have it completed by end of August.',
				'created_at' => '2014-06-10 14:12:34',
				'updated_at' => '2014-06-10 14:12:34',
			),
			9 => 
			array (
				'id' => 21,
				'project_id' => 45,
				'user_id' => 1,
				'note' => 'Test note, this should display first.',
				'created_at' => '2014-06-11 12:00:00',
				'updated_at' => '2014-06-11 12:00:00',
			),
		));
	}

}
