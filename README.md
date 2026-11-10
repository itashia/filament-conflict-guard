<div align="center">
    <h1>Filament Conflict Guard</h1>
</div>

<p align="center">
    <a href="https://packagist.org/packages/itashia/filament-conflict-guard"><img src="https://img.shields.io/packagist/v/itashia/filament-conflict-guard.svg?style=flat-square" alt="Packagist"></a>
    <a href="https://packagist.org/packages/itashia/filament-conflict-guard"><img src="https://img.shields.io/packagist/php-v/itashia/filament-conflict-guard.svg?style=flat-square" alt="PHP from Packagist"></a>
    <a href="https://packagist.org/packages/itashia/filament-conflict-guard"><img src="https://badge.laravel.cloud/badge/itashia/filament-conflict-guard?style=flat" alt="Laravel versions"></a>
    <a href="https://github.com/itashia/filament-conflict-guard/actions"><img alt="GitHub Workflow Status (main)" src="https://img.shields.io/github/actions/workflow/status/itashia/filament-conflict-guard/tests.yml?branch=main&label=Tests&style=flat-square"></a>
    <a href="https://packagist.org/packages/itashia/filament-conflict-guard"><img src="https://img.shields.io/packagist/dt/itashia/filament-conflict-guard.svg?style=flat-square" alt="Total Downloads"></a>
</p>

Optimistic locking for Filament: detect and resolve concurrent edit conflicts instead of silently overwriting records.

## Installation

You can install the package via Composer:

```bash
composer require itashia/filament-conflict-guard
```

You may publish all of the package's resources at once:

```bash
php artisan vendor:publish --tag="filament-conflict-guard"
```

Or, you may publish each resource individually:

### Publishing the Configuration File

```bash
php artisan vendor:publish --tag="filament-conflict-guard-config"
```

### Publishing and Running the Migrations

```bash
php artisan vendor:publish --tag="filament-conflict-guard-migrations"
php artisan migrate
```

### Publishing the Views

```bash
php artisan vendor:publish --tag="filament-conflict-guard-views"
```

### Publishing the Translations

```bash
php artisan vendor:publish --tag="filament-conflict-guard-lang"
```

### Publishing the Public Assets

```bash
php artisan vendor:publish --tag="filament-conflict-guard-assets"
```

## Usage

<!-- Add a basic usage example here. -->

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Thank you for considering contributing to Filament Conflict Guard! Please review our [contributing guide](.github/CONTRIBUTING.md) to get started.

## Security Vulnerabilities

Please review [our security policy](.github/SECURITY.md) on how to report security vulnerabilities.

## Credits

- [Arshia Mohammadei](https://github.com/itashia)
- [All Contributors](../../contributors)

## License

Filament Conflict Guard is open-sourced software licensed under the [MIT license](LICENSE.md).
