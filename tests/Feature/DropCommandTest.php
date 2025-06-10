<?php

use DarrinDeal\DeadDrop\Commands\Drop;

it('can run the command successfully', function () {
    $this
        ->artisan(Drop::class, ['drop' => 'Test'])
        ->assertSuccessful();
});