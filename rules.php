<?php

// Available placeholders: :uc:vendor, :uc:package, :lc:vendor, :lc:package
return [
    'src/MyPackageAutoWireServiceProvider.php' => 'src/:uc:packageAutoWireServiceProvider.php',
    'src/MyPackageEventServiceProvider.php' => 'src/:uc:packageEventServiceProvider.php',
    'src/MyPackageServiceProvider.php' => 'src/:uc:packageServiceProvider.php',
    'src/Application/Facades/MyPackageFacade.php' => 'src/Application/Facades/:uc:packageFacade.php',
    'src/Application/Services/MyPackageService.php' => 'src/Application/Services/:uc:packageService.php',
    'src/Domain/Config/mypackage.php' => 'src/Domain/Config/:lc:package.php',
    'src/Domain/Contracts/Services/MyPackageServiceContract.php' => 'src/Domain/Contracts/Services/:uc:packageServiceContract.php',
    'src/Infra/Database/Seeders/MyPackageDatabaseSeeder.php' => 'src/Infra/Database/Seeders/:uc:packageDatabaseSeeder.php',
    'tests/Unit/MyPackageServiceTest.php' => 'tests/Unit/:uc:packageServiceTest.php',
];
