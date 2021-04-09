<?php


namespace Aropixel\SyliusPagesPlugin\Form\Type;

use Aropixel\SyliusPagesPlugin\Entity\Page;
use Sylius\Bundle\CoreBundle\Form\Type\ImageType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

final class PageImageType extends ImageType
{

    public function buildView(FormView $view, FormInterface $form, array $options): void
    {
        parent::buildView($view, $form, $options);

        $view->vars['page'] = $options['page'];
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        parent::configureOptions($resolver);

        $resolver->setDefined('page');
        $resolver->setAllowedTypes('page', Page::class);
    }

	public function getBlockPrefix(): string
	{
		return 'aropixel_page_image';
	}
}
