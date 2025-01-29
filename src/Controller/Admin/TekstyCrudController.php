<?php

namespace App\Controller\Admin;

use App\Entity\Teksty;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TekstyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Teksty::class;
    }

    public function createEntity(string $entityFqcn)
    {
        $tekst = new Teksty();
        // $product->createdBy($this->getUser());

        return $tekst;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('tytul'),
            TextEditorField::new('tresc'),
        ];
    }
    
}
