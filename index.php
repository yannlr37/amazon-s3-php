<?php

require_once 'vendor/autoload.php';

use Aws\S3\S3Client;

// Instantiate an Amazon S3 client.
$s3 = new S3Client([
    'version' => 'latest',
    'region'  => 'eu-west-3'
]);

try {
    $s3->putObject([
        'Bucket' => 'yann.test.bucket',
        'Key'    => 'cameleon.jpg',
        'Body'   => fopen('assets/img/cameleon.jpg', 'r'),
        'ACL'    => 'public-read',
    ]);
} catch (Aws\S3\Exception\S3Exception $e) {
    echo "There was an error uploading the file.\n";
}