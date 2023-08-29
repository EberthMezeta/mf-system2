<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Src\Families\Application\Contracts\FamilyCreateInterface;
use Src\Families\Application\UseCases\CreateFamilyUC;

uses(RefreshDatabase::class);


it('creates a family', function () {
    // Configurar tus datos de prueba
    $data = ['name' => 'Test Family'];

    // Crear una instancia del caso de uso usando el contenedor de Laravel
    $useCase = app(FamilyCreateInterface::class);

    // Ejecutar el caso de uso
    $result = $useCase->create($data);

    // Realizar aserciones para verificar que la creación fue exitosa
    expect($result)->toBeTrue();

    // También puedes realizar otras aserciones según tus necesidades
});
