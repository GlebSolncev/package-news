<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for category in Новости package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  category module in Новости package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Category',
    'names'         => 'Categories',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Categories',
        'sub'   => 'Categories',
        'list'  => 'Список categories',
        'Редактировать'  => 'Редактировать category',
        'create'    => 'Создать category'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            'status'              => ['show' => 'show','hide' => 'hide'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Please enter id',
        'name'                       => 'Please enter name',
        'slug'                       => 'Please enter slug',
        'status'                     => 'Please select status',
        'user_type'                  => 'Please enter user type',
        'user_id'                    => 'Please enter user id',
        'upload_folder'              => 'Please enter upload folder',
        'created_at'                 => 'Please select created at',
        'updated_at'                 => 'Please select updated at',
        'deleted_at'                 => 'Please select deleted at',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'id'                         => 'Id',
        'name'                       => 'Name',
        'slug'                       => 'Slug',
        'status'                     => 'Status',
        'user_type'                  => 'User type',
        'user_id'                    => 'User id',
        'upload_folder'              => 'Upload folder',
        'created_at'                 => 'Created at',
        'updated_at'                 => 'Updated at',
        'deleted_at'                 => 'Deleted at',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'id'                         => ['name' => 'Id', 'data-column' => 1, 'checked'],
        'name'                       => ['name' => 'Name', 'data-column' => 2, 'checked'],
        'status'                     => ['name' => 'Status', 'data-column' => 3, 'checked'],
        'created_at'                 => ['name' => 'Created at', 'data-column' => 4, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Categories',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
