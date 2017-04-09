# Translatable String Exporter for Laravel >= 5.4
As we know, Laravel 5.4 has introduced a "new" way of string translation.
Now you can use `__('Translate me')` function and JSON files to translate strings.
Translatable String Exporter is aimed to collect all translatable strings of an application and create corresponding translation files in JSON format to simplify the process of translation.

Please note, the project is in its early development stage, so it can have issues.

## Installation

1) Add kkomelin/laravel-translatable-string-exporter to your project:

```bash
composer require kkomelin/laravel-translatable-string-exporter
```

2) Add the `ExporterServiceProvider` to the providers array in config/app.php:

```
KKomelin\TranslatableStringExporter\Providers\ExporterServiceProvider::class,
```

## Usage

```
php artisan translatable:export <lang>
```
Where `<lang>` is a language code, for example "es".

The command with the "es" parameter will create es.json file in the resources/lang folder of your project.

## Roadmap

- [x] Extract translatable strings and save them to a language file
- [ ] Preserve existing translations
- [ ] Automated tests

## License & Copyright

MIT, (c) 2017 Konstantin Komelin
