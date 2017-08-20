<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => 'public',

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => 's3',

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "s3", "rackspace"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_KEY'),
            'secret' => env('AWS_SECRET'),
            'region' => env('AWS_REGION'),
            'bucket' => env('AWS_BUCKET'),
        ],
        'qiniu1' => [
            'driver'  => 'qiniu1',
            'domains' => [
                'default'   => 'ouqn3vrmw.bkt.clouddn.com', //你的七牛域名
                'https'     => '',         //你的HTTPS域名
                'custom'    => '',                //你的自定义域名
            ],
            'access_key'=> 'ck9JDFIY4Ezi5rHOZWCvvZXR0z5SqUnqOiiTWBCm',  //AccessKey
            'secret_key'=> 'YV5oClB3mu0nSxIk12XsX6Qa7Ry47SfnzfGmIQKF',  //SecretKey
            'bucket'    => 'kuainiao',  //Bucket名字
            'notify_url'=> '',  //持久化处理回调地址
            'private'    => 'public'  //空间访问控制 public 或 private
        ],
        'qiniu' => [
            'driver'     => 'qiniu',
            'access_key' => env('ck9JDFIY4Ezi5rHOZWCvvZXR0z5SqUnqOiiTWBCm', 'ck9JDFIY4Ezi5rHOZWCvvZXR0z5SqUnqOiiTWBCm'),
            'secret_key' => env('YV5oClB3mu0nSxIk12XsX6Qa7Ry47SfnzfGmIQKF', 'YV5oClB3mu0nSxIk12XsX6Qa7Ry47SfnzfGmIQKF'),
            'bucket'     => env('QINIU_BUCKET', 'kuainiao'),
            'domain'     => env('QINIU_DOMAIN', 'ouqn3vrmw.bkt.clouddn.com'), // or host: https://xxxx.clouddn.com
        ],
    ],

];
