<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Domain\Services\UserServices;
use App\DTO\User\CreateUserDTO;
use App\Domain\Services\PushUserSessionServices;
use App\DTO\PushUserSession\CreatePushUserSessionDTO;
use App\DTO\PushUserSession\ShowPushUserSessionDTO;
use App\DTO\PushUserSession\UpdatePushUserSessionDTO;

class PushTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic feature test create.
     */
    public function test_create(): void
    {
        $serviceUser = new UserServices();
        $dataUser = $serviceUser->CreateAction(
            new CreateUserDTO(null, null, '+7 (999) 345-55-66', null)
        );

        $this->assertNotNull($dataUser);
        $this->assertEquals($dataUser->FirstName, null);
        $this->assertEquals($dataUser->Phone, '+7 (999) 345-55-66');
        $service = new PushUserSessionServices();

        $data = $service->CreateAction(
            new CreatePushUserSessionDTO(
                $dataUser->id,
                true
            )
        );

        $this->assertNotNull($data);
        $this->assertEquals($data->Value, true);
    }

    /**
     * A basic feature test show.
     */
    public function test_show(): void
    {
        $serviceUser = new UserServices();
        $dataUser = $serviceUser->CreateAction(
            new CreateUserDTO(null, null, '+7 (999) 345-55-66', null)
        );

        $this->assertNotNull($dataUser);
        $this->assertEquals($dataUser->FirstName, null);
        $this->assertEquals($dataUser->Phone, '+7 (999) 345-55-66');
        $service = new PushUserSessionServices();

        $dataCreate = $service->CreateAction(
            new CreatePushUserSessionDTO(
                $dataUser->id,
                true
            )
        );

        $this->assertNotNull($dataCreate);
        $this->assertEquals($dataCreate->Value, true);

        $data = $service->ShowAction(
            new ShowPushUserSessionDTO($dataUser->id)
        );

        $this->assertNotNull($data);
    }

    /**
     * A basic feature test update.
     */
    public function test_update(): void
    {
        $serviceUser = new UserServices();
        $dataUser = $serviceUser->CreateAction(
            new CreateUserDTO(null, null, '+7 (999) 345-55-66', null)
        );

        $this->assertNotNull($dataUser);
        $this->assertEquals($dataUser->FirstName, null);
        $this->assertEquals($dataUser->Phone, '+7 (999) 345-55-66');
        $service = new PushUserSessionServices();

        $dataCreate = $service->CreateAction(
            new CreatePushUserSessionDTO(
                $dataUser->id,
                true
            )
        );

        $this->assertNotNull($dataCreate);
        $this->assertEquals($dataCreate->Value, true);

        $data = $service->UpdateAction(
            new UpdatePushUserSessionDTO(
                $dataCreate->id,
                $dataUser->id,
                false
            )
        );

        $this->assertNotNull($data);
        $this->assertEquals($data->Value, false);
    }
}
