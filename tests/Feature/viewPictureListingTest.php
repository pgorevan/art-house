<?php
namespace Tests\Feature;
use Carbon\Carbon;
use Tests\TestCase;
use App\Picture;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;


class viewPictureListingTest extends TestCase
{
    use DatabaseMigrations;
    public function test_user_can_view_picture_listing()
    {
        //Arrange
        $picture = Picture::create([
            'title' => 'Winter Crown',
            'url' => 'http://www.jennifer-anderson.co.uk/uploads/1/3/1/9/13191095/7623689_orig.jpg',
            'width' => '100',
            'height' => '100',
            'date_created' => Carbon::parse('January 16th 2018')
        ]);
        //Act
        $response = $this->get('/pictures/'.$picture->id);

        //Assert
        $response->assertStatus(200);
        $response->assertSeeText('Winter Crown');
        $response->assertSeeText('Dimensions 100 by 100');

    }

}