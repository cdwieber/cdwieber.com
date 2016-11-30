<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ResumeViewTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testResumePageShows()
    {
        $this->visit('/resume')
            ->see('Christopher Wieber');
    }
}
