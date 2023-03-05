<?php

it('can test commands', function () {
    $this->artisan('unit-conversion')->assertExitCode(0);
});
