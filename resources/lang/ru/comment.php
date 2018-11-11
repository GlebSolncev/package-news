<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for comment in Новости package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  comment module in Новости package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Комментарий',
    'names'         => 'Комментарии',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Комментарии',
        'sub'   => 'Комментарии',
        'list'  => 'Список комментариев',
        'Редактировать'  => 'Редактировать комментарий',
        'create'    => 'Создать комментарий'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            'published'           => ['да','нет'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Введите id',
        'comment'                    => 'Введите comment',
        'author'                     => 'Введите author',
        'email'                      => 'Введите email',
        'mobile'                     => 'Введите mobile',
        'slug'                       => 'Введите slug',
        'published'                  => 'Выбрать published',
        'user_id'                    => 'Введите user id',
        'user_type'                  => 'Введите user type',
        'Новости_id'                    => 'Введите Новости id',
        'created_at'                 => 'Выбрать created at',
        'updated_at'                 => 'Выбрать updated at',
        'deleted_at'                 => 'Выбрать deleted at',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'id'                         => 'Номер',
        'comment'                    => 'Комментарий',
        'author'                     => 'Автор',
        'email'                      => 'Почта',
        'mobile'                     => 'Телефон',
        'slug'                       => 'Slug',
        'published'                  => 'Отображение',
        'user_id'                    => 'Номер пользователя',
        'user_type'                  => 'Тип пользователя',
        'Новости_id'                    => 'Новости id',
        'created_at'                 => 'Дата создания',
        'updated_at'                 => 'Дата редактирования',
        'deleted_at'                 => 'Дата удаления',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'id'                         => ['name' => 'Id', 'data-column' => 1, 'checked'],
        'author'                     => ['name' => 'Author', 'data-column' => 2, 'checked'],
        'email'                      => ['name' => 'Email', 'data-column' => 3, 'checked'],
        'mobile'                     => ['name' => 'Mobile', 'data-column' => 4, 'checked'],
        'published'                  => ['name' => 'Published', 'data-column' => 5, 'checked'],
        'Новости_id'                    => ['name' => 'Новости id', 'data-column' => 6, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Comments',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
