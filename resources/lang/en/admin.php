<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'event' => [
        'title' => 'Events',

        'actions' => [
            'index' => 'Events',
            'create' => 'New Event',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'date_time' => 'Date time',
            'title' => 'Title',
            'description' => 'Description',
            
        ],
    ],

    'teacher' => [
        'title' => 'Teachers',

        'actions' => [
            'index' => 'Teachers',
            'create' => 'New Teacher',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'patronymic' => 'Patronymic',
            'email' => 'Email',
            'phone_number' => 'Phone number',
            'degree' => 'Degree',
            
        ],
    ],

    'course' => [
        'title' => 'Courses',

        'actions' => [
            'index' => 'Courses',
            'create' => 'New Course',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'credits_amount' => 'Credits amount',
            'teacher_id' => 'Teacher',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];