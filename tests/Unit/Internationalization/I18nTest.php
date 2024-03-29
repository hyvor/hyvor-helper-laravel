<?php

namespace Hyvor\Helper\Tests\Unit\Internationalization;

use Hyvor\Helper\Internationalization\I18n;
use RuntimeException;

beforeEach(function() {
    config(['hyvor-helper.i18n.folder' => __DIR__ . '/locales']);
});

it('i18n works', function() {
    $i18n = app(I18n::class);
    expect($i18n->getAvailableLocales())->toBe(['en-US', 'es', 'fr-FR']);
    expect($i18n->getLocaleStrings('en-US')['name'])->toBe('HYVOR');
});

it('throws on cant read', function() {
    $i18n = app(I18n::class);
    $i18n->getLocaleStrings('es');
})->throws(RuntimeException::class, 'Could not read the locale file of es');

it('when locale not found', function() {
    $i18n = app(I18n::class);
    $i18n->getLocaleStrings('pb');
})->throws(RuntimeException::class, 'Locale pb not found');
