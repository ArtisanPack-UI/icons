<?php

use ArtisanPackUI\Icons\Registries\IconSetRegistration;

beforeEach(function () {
    removeAllFilters('ap.icons.register-icon-sets');
    removeAllFilters('ap.icons.registerIconSets');
});

afterEach(function () {
    removeAllFilters('ap.icons.register-icon-sets');
    removeAllFilters('ap.icons.registerIconSets');
});

test('listeners on the deprecated hook name fire when the new hook is applied', function () {
    $called = false;

    addFilter('ap.icons.register-icon-sets', function (IconSetRegistration $registry) use (&$called) {
        $called = true;

        return $registry;
    });

    $registry = new IconSetRegistration;
    applyFilters('ap.icons.registerIconSets', $registry);

    expect($called)->toBeTrue();
});
