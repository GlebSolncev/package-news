<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for Новости in Новости package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  Новости module in Новости package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Новости',
    'names'         => 'Новости',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Новости',
        'sub'   => 'Новости',
        'list'  => 'Список Новости',
        'Редактировать'  => 'Редактировать Новости',
        'create'    => 'Создать Новость'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            'published'           => ['Yes' => 'Да','No' => 'Нет'],
            'status'              => ['show' => 'Показать','hide' => 'Скрыть'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Введите id',
        'category_id'                => 'Введите category id',
        'title'                      => 'Введите title',
        'description'                => 'Введите description',
        'images'                     => 'Введите images',
        'tags'                       => 'Введите tags',
        'slug'                       => 'Введите slug',
        'published'                  => 'Выберите published',
        'status'                     => 'Выберите status',
        'user_type'                  => 'Введите user type',
        'user_id'                    => 'Введите user id',
        'upload_folder'              => 'Введите upload folder',
        'deleted_at'                 => 'Выберите deleted at',
        'created_at'                 => 'Выберите created at',
        'updated_at'                 => 'Выберите updated at',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'id'                         => 'Номер',
        'category_id'                => 'Номер категории',
        'title'                      => 'Наименование',
        'description'                => 'Описание',
        'images'                     => 'Изображение',
        'tags'                       => 'Теги',
        'slug'                       => 'Slug',
        'published'                  => 'Отображение',
        'status'                     => 'Статус',
        'user_type'                  => 'Тип пользователя',
        'user_id'                    => 'Номер пользователя',
        'upload_folder'              => 'Загруженные директории',
        'deleted_at'                 => 'Дата удаления',
        'created_at'                 => 'Дата создания',
        'updated_at'                 => 'Дата редактирование',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'id'                         => ['name' => 'Номер', 'data-column' => 1, 'checked'],
        'category_id'                => ['name' => 'Номер категории', 'data-column' => 2, 'checked'],
        'title'                      => ['name' => 'Наименование', 'data-column' => 3, 'checked'],
        'published'                  => ['name' => 'Отображение', 'data-column' => 4, 'checked'],
        'status'                     => ['name' => 'Статус', 'data-column' => 5, 'checked'],
        'user_type'                  => ['name' => 'Тип пользователя', 'data-column' => 6, 'checked'],
        'created_at'                 => ['name' => 'Дата создания', 'data-column' => 7, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Новости',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Нажмите на строку для редактирования',
    ],
];
