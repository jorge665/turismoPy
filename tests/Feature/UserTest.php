<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Guide;
use App\Models\BlogPost;
use App\Models\Review;
use App\Models\Comment;
use App\Models\Favorite;
use App\Models\InterestType;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_has_many_guides()
    {
        $user = User::factory()->create();
        $guide = Guide::factory()->create(['user_id' => $user->id]);

        $this->assertTrue($user->guides->contains($guide));
    }

    /** @test */
    public function user_has_many_blog_posts()
    {
        $user = User::factory()->create();
        $blogPost = BlogPost::factory()->create(['user_id' => $user->id]);

        $this->assertTrue($user->blogPosts->contains($blogPost));
    }

    /** @test */
    public function user_has_many_reviews()
    {
        $user = User::factory()->create();
        $review = Review::factory()->create(['user_id' => $user->id]);

        $this->assertTrue($user->reviews->contains($review));
    }

    /** @test */
    public function user_has_many_comments()
    {
        $user = User::factory()->create();
        $comment = Comment::factory()->create(['user_id' => $user->id]);

        $this->assertTrue($user->comments->contains($comment));
    }

    /** @test */
    public function user_has_many_favorites()
    {
        $user = User::factory()->create();
        $favorite = Favorite::factory()->create(['user_id' => $user->id]);

        $this->assertTrue($user->favorites->contains($favorite));
    }

    /** @test */
    public function user_belongs_to_many_interest_types()
    {
        $user = User::factory()->create();
        $interestType = InterestType::factory()->create();

        $user->interestTypes()->attach($interestType);

        $this->assertTrue($user->interestTypes->contains($interestType));
    }
}
