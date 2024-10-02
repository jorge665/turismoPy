<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Review;
use App\Models\User;
use App\Models\Destination;
use App\Models\Comment;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReviewTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function review_belongs_to_user()
    {
        $user = User::factory()->create();
        $review = Review::factory()->create(['user_id' => $user->id]);

        $this->assertInstanceOf(User::class, $review->user);
    }

    /** @test */
    public function review_belongs_to_reviewable()
    {
        $destination = Destination::factory()->create();
        $review = Review::factory()->create([
            'reviewable_id' => $destination->id,
            'reviewable_type' => Destination::class,
        ]);

        $this->assertInstanceOf(Destination::class, $review->reviewable);
    }

    /** @test */
    public function review_has_many_comments()
    {
        $review = Review::factory()->create();
        $comment = Comment::factory()->create([
            'commentable_id' => $review->id,
            'commentable_type' => Review::class,
        ]);

        $this->assertTrue($review->comments->contains($comment));
    }
}
