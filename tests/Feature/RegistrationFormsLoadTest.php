<?php

namespace Tests\Feature;

use Tests\TestCase;

class RegistrationFormsLoadTest extends TestCase
{
    public function testDoesMentorRegistrationFormLoads()
    {
        $this->get('/mentors/create')->assertSee('Register');
    }

    public function testDoesStudentRegistrationFormLoads()
    {
        $this->get('/students/create')->assertSee('Register');
    }
}
