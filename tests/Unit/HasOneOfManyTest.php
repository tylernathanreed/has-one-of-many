<?php

namespace Tests\Unit;

use App\Models\Country;
use App\Models\State;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HasOneOfManyTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_has_one_of_many()
    {
        $country = Country::factory()
            ->has(State::factory()->count(50))
            ->create();

        $this->assertNotNull($country->largestState);
    }
}
