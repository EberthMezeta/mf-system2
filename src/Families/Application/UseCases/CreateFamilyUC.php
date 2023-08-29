<?php

namespace Src\Families\Application\UseCases;

use Src\Families\Application\Contracts\FamilyCreateInterface;
use Src\Families\Domain\Repository\FamilyRepositoryInterface;

class CreateFamilyUC implements FamilyCreateInterface
{
    protected $repositoryFamily;

    public function __construct(FamilyRespositoryInterface $repositoryFamily)
    {
        $this->repositoryFamily = $repositoryFamily;
    }

    public function create(array $data)
    {
        return $this->repositoryFamily->create($data);
    }
}
