<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('institute')->insert([
            'name' => 'university of freiberg',
            'photo_url' => 'https://upload.wikimedia.org/wikipedia/commons/3/38/Glueck.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('institute')->insert([
            'name' => 'university of oxford',
            'photo_url' => 'https://www.youthopportunitieshub.com/wp-content/uploads/2021/06/University-of-Oxford-Acceptance-Rate.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('institute')->insert([
            'name' => 'university of cambridge',
            'photo_url' => 'https://scholaridea.com/wp-content/uploads/2020/06/University-of-Cambridge.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('institute')->insert([
            'name' => 'california institute of technology',
            'photo_url' => 'https://thumbs.dreamstime.com/z/campus-caltech-california-institute-technology-pasadena-ca-home-to-many-famous-scientists-university-73111305.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('institute')->insert([
            'name' => 'harvard university',
            'photo_url' => 'https://www.thepinnaclelist.com/wp-content/uploads/2020/05/Why-Harvard-University-Attracts-The-Best-in-the-World.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('institute')->insert([
            'name' => 'stanford university',
            'photo_url' => 'https://i1.wp.com/afribary.com/opportunities/wp-content/uploads/2021/07/Stanford-University-USA.jpg?fit=900%2C600&ssl=1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('institute')->insert([
            'name' => 'massachusetts institute of technology',
            'photo_url' => 'https://admissionscholarships.com/wp-content/uploads/2018/11/Massachusetts-Institute-of-Technology-MIT-Admission-Scholarships-1.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('institute')->insert([
            'name' => 'university of washington',
            'photo_url' => 'https://s3-us-west-2.amazonaws.com/uw-s3-cdn/wp-content/uploads/sites/6/2020/07/16150934/20200515_May-Campus-1112-Edit-Edit_web.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('institute')->insert([
            'name' => 'johns hopkins university',
            'photo_url' => 'https://media-cldnry.s-nbcnews.com/image/upload/newscms/2020_50/3434663/201209-johns-hopkins-university-2004-ac-1148p.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('institute')->insert([
            'name' => 'princeton university',
            'photo_url' => 'https://xscholarship.com/wp-content/uploads/2020/04/International-Student-Internship-Program-ISIP-at-Princeton-University-1024x597-1.png',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('institute')->insert([
            'name' => 'yale university',
            'photo_url' => 'https://i0.wp.com/ischoolconnect.com/blog/wp-content/uploads/2020/12/2Dec_Blog_Image.png?fit=600%2C400&ssl=1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('institute')->insert([
            'name' => 'university of pennsylvania',
            'photo_url' => 'https://scholarship-positions.com/wp-content/uploads/2016/07/University-of-Pennsylvania.png',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('institute')->insert([
            'name' => 'university of chicago',
            'photo_url' => 'https://api.wbez.org/v2/images/ec305c37-be82-4810-9e5f-25d9337936c3.jpg?mode=FILL&width=1200&height=630',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('institute')->insert([
            'name' => 'university of michigan',
            'photo_url' => 'https://lv7ms1pq6dm2sea8j1mrajzw-wpengine.netdna-ssl.com/wp-content/uploads/2020/06/Michigan-1024x718.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('institute')->insert([
            'name' => 'university of toronto',
            'photo_url' => 'https://www.freestudy.com/wp-content/uploads/2019/08/University-of-Toronto-1280x720.png',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('institute')->insert([
            'name' => 'university college london',
            'photo_url' => 'https://worldscholarshipforum.com/wp-content/uploads/2020/10/University-College-London-Denys-Holland-Scholarship.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

    }
}
