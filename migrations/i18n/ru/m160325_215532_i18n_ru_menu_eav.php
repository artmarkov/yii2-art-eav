<?php

use yii\db\Migration;

class m160325_215532_i18n_ru_menu_eav extends Migration
{

    public function up()
    {
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'eav', 'label' => 'Пользовательские Поля', 'language' => 'ru']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'eav-eav', 'label' => 'Поля', 'language' => 'ru']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'eav-attribute', 'label' => 'Атрибуты', 'language' => 'ru']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'eav-option', 'label' => 'Опции', 'language' => 'ru']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'eav-model', 'label' => 'Модели', 'language' => 'ru']);
        $this->insert('{{%menu_link_lang}}', ['link_id' => 'eav-type', 'label' => 'Типы Данных', 'language' => 'ru']);
    }

}