<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Activity;
use App\Models\Destination;
use App\Models\PointOfInterest;
use App\Models\ActivityTranslation;
use App\Models\InterestType;
use App\Models\Review;
use App\Models\Favorite;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ActivityTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function activity_belongs_to_destination()
    {
        $destination = Destination::factory()->create();
        $activity = Activity::factory()->create(['destination_id' => $destination->id]);

        $this->assertInstanceOf(Destination::class, $activity->destination);
    }

    /** @test */
    public function activity_belongs_to_point_of_interest()
    {
        $poi = PointOfInterest::factory()->create();
        $activity = Activity::factory()->create(['point_of_interest_id' => $poi->id]);

        $this->assertInstanceOf(PointOfInterest::class, $activity->pointOfInterest);
    }

    /** @test */
    public function activity_has_many_translations()
    {
        $activity = Activity::factory()->create();
        $translation = ActivityTranslation::factory()->create(['activity_id' => $activity->id]);

        $this->assertTrue($activity->translations->contains($translation));
    }

    /** @test */
    public function activity_belongs_to_many_interest_types()
    {
        $activity = Activity::factory()->create();
        $interestType = InterestType::factory()->create();

        $activity->interestTypes()->attach($interestType);

        $this->assertTrue($activity->interestTypes->contains($interestType));
    }

    /** @test */
    public function activity_has_many_reviews()
    {
        $activity = Activity::factory()->create();
        $review = Review::factory()->create([
            'reviewable_id' => $activity->id,
            'reviewable_type' => Activity::class,
        ]);

        $this->assertTrue($activity->reviews->contains($review));
    }

    
}
