<?php

// Available placeholders: :uc:vendor, :uc:package, :lc:vendor, :lc:package
return [
    'src/MyPackageServiceProvider.php' => 'src/:uc:packageServiceProvider.php',
    'src/MyPackageEventServiceProvider.php' => 'src/:uc:packageEventServiceProvider.php',
    'src/MyPackageAutoWireServiceProvider.php' => 'src/:uc:packageAutoWireServiceProvider.php',
    'src/Application/Services/MyPackageService.php' => 'src/Application/Services/:uc:packageService.php',
    'src/Application/Facades/MyPackageFacades.php' => 'src/Application/Facades/:uc:packageFacades.php',
    'src/Infra/Database/Seeders/MyPackageDatabaseSeeder.php' => 'src/Infra/Database/Seeders/:uc:packageDatabaseSeeder.php',
    'src/Domain/Config/mypackage.php' => 'src/Domain/Config/:lc:package.php',
];
