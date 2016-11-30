<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ResumeViewTest extends TestCase
{
    /**
     * A test to ensure the Resume page displays correctly
     *
     * @return void
     */
    public function testResumePageShows()
    {
        $this->visit('/resume')
            ->see('Christopher');
    }
}
