<?php
namespace Tests\Feature;
use App\Gallery;
use Carbon\Carbon;
use Tests\TestCase;
use App\Picture;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;


class viewGalleryTest extends TestCase
{
    use DatabaseMigrations;
    public function test_user_can_view_gallery_info()
    {
        //Arrange
        $gallery = Gallery::create([
            'name' => 'A Gallery',
            'owner' => 'Joe Bloggs',
            'phone_number' => '041 123 4567',
            'email' => 'gallery@gallery.com',
            'street_address' => '101 Fakeville Street',
            'town' => 'Fakeville',
            'postcode' => 'G11 123'


        ]);
        //Act
        $response = $this->get('/galleries/'.$gallery->id);

        //Assert
        $response->assertStatus(200);
        $response->assertSeeText('A Gallery');

    }

}