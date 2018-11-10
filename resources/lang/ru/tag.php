<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for tag in Новости package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  tag module in Новости package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Тег',
    'names'         => 'Теги',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Меню',
        'sub'   => 'Подменю',
        'list'  => 'Список',
        'Редактировать'  => 'Редактировать',
        'create'    => 'Создать'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            'published'           => ['yes' => 'да','no' => 'нет'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Введите id',
        'name'                       => 'Введите name',
        'frequency'                  => 'Введите frequency',
        'slug'                       => 'Введите slug',
        'published'                  => 'Выберите published',
        'created_at'                 => 'Выберите created at',
        'updated_at'                 => 'Выберите updated at',
        'deleted_at'                 => 'Выберите deleted at',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'id'                         => 'Номер',
        'name'                       => 'Наименование',
        'frequency'                  => 'Frequency',
        'slug'                       => 'Slug',
        'published'                  => 'Статус',
        'created_at'                 => 'Дата создания',
        'updated_at'                 => 'Дата обновления',
        'deleted_at'                 => 'Дата удаления',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'id'                         => ['name' => 'Номер', 'data-column' => 1, 'checked'],
        'name'                       => ['name' => 'Наименование', 'data-column' => 2, 'checked'],
        'frequency'                  => ['name' => 'Frequency', 'data-column' => 3, 'checked'],
        'published'                  => ['name' => 'Статус', 'data-column' => 4, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Теги',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Нажмите на строку для редактирования',
    ],
];
