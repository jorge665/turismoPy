<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Destination;
use App\Models\City;
use App\Models\DestinationTranslation;
use App\Models\DestinationMedia;
use App\Models\Activity;
use App\Models\PointOfInterest;
use App\Models\Event;
use App\Models\News;
use App\Models\TourismOffice;
use App\Models\SocialLink;
use App\Models\Review;
use App\Models\Favorite;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DestinationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function destination_belongs_to_city()
    {
        $city = City::factory()->create();
        $destination = Destination::factory()->create(['city_id' => $city->id]);

        $this->assertInstanceOf(City::class, $destination->city);
    }

    /** @test */
    public function destination_has_many_translations()
    {
        $destination = Destination::factory()->create();
        $translation = DestinationTranslation::factory()->create(['destination_id' => $destination->id]);

        $this->assertTrue($destination->translations->contains($translation));
    }

    /** @test */
    public function destination_has_many_media()
    {
        $destination = Destination::factory()->create();
        $media = DestinationMedia::factory()->create(['destination_id' => $destination->id]);

        $this->assertTrue($destination->media->contains($media));
    }

    /** @test */
    public function destination_has_many_activities()
    {
        $destination = Destination::factory()->create();
        $activity = Activity::factory()->create(['destination_id' => $destination->id]);

        $this->assertTrue($destination->activities->contains($activity));
    }

    /** @test */
    public function destination_has_many_points_of_interest()
    {
        $destination = Destination::factory()->create();
        $poi = PointOfInterest::factory()->create(['destination_id' => $destination->id]);

        $this->assertTrue($destination->pointsOfInterest->contains($poi));
    }

    /** @test */
    public function destination_has_many_reviews()
    {
        $destination = Destination::factory()->create();
        $review = Review::factory()->create([
            'reviewable_id' => $destination->id,
            'reviewable_type' => Destination::class,
        ]);

        $this->assertTrue($destination->reviews->contains($review));
    }
}
