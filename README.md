CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.
- Refer to the README in the `tests` directory for information specific to basic application tests.

KTGenerator
------------

edit `[namespace]/config/main.php` add

```
'modules' => [
      'kt-generator' => [
            'class' => 'app\modules\KTGenerator\KTGenerator',
      ],
],
```

copy `module/KTGenerator` to your project

edit `module/KTGenerator/KTGenerator.php` 

edit `module/KTGenerator/controllers/DefaultController.php` 

edit `module/KTGenerator/controllers/CrudController.php` 

edit `module/KTGenerator/controllers/ModelController.php` 

edit `module/KTGenerator/models/CrudGenerator.php` 

edit `module/KTGenerator/models/ModelGenerator.php` 

### change app to your namespace
