<?php

use artsoft\db\TranslatedMessagesMigration;

class m160325_215840_i18n_ru_art_eav extends TranslatedMessagesMigration
{

    public function getLanguage()
    {
        return 'ru';
    }

    public function getCategory()
    {
        return 'art/eav';
    }

    public function getTranslations()
    {
        return [
            'An error occurred during creation of EavValue record.' => 'Произошла ошибка при создании записи.',
            'An error occurred during saving EAV attributes!' => 'Произошла ошибка при сохранении Атрибутов!',
            'Attribute Options' => 'Опции Атрибутов',
            'Attribute Types' => 'Типы Атрибутов',
            'Attribute' => 'Атрибут',
            'Attributes' => 'Атрибуты',
            'Available Attributes' => 'Доступные Атрибуты',
            'Custom Fields' => 'Пользовательские Поля',
            'EAV' => 'EAV',
            'Entity Models' => 'Модели',
            'Entity was not found.' => 'Запись не найдена.',
            'Entity' => 'Записи',
            'Model was not found.' => 'Модель не найдена.',
            'Model' => 'Модель',
            'Option' => 'Опция',
            'Raw' => 'Текст',
            'Selected Attributes' => 'Выбранные Атрибуты',
        ];
    }
}