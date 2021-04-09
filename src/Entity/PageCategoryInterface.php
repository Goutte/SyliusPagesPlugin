<?php


namespace Aropixel\SyliusPagesPlugin\Entity;


interface PageCategoryInterface
{
    public function getTitle(): ?string;

    public function setTitle(string $title): self;
}
