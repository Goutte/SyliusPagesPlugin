<?php


namespace Aropixel\SyliusPagesPlugin\Form\Type;

use Aropixel\SyliusPagesPlugin\Entity\PageCategory;
use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\CKEditorBundle\Form\Type\CKEditorType;

class PageType extends AbstractResourceType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre'
            ])

            ->add('slug', TextType::class, [
                'label' => 'Slug'
            ])

            ->add('images', CollectionType::class, [
                'entry_type' => PageImageType::class,
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
                'label' => 'Images',
                'required' => false,
                'entry_options' => ['page' => $options['data']],
            ])

            ->add('category', EntityType::class, [
                'label' => "Catégorie",
                'class' => PageCategory::class,
                'choice_label' => 'title'
            ])

            ->add('content', CKEditorType::class, [
                'label' => 'Contenu'
            ])

            ->add('enabled', CheckboxType::class, [
                'label' => 'Activée ?',
            ])

        ;

    }

    public function getBlockPrefix() {
        return 'aropixel_page';
    }

}
