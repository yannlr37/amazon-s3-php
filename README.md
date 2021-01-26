# AMAZON S3 PHP SDK

## Installation

```
composer require aws/aws-sdk-php
```

## Configuration

Mettre dans les variables d'environnement les clé d'API :
```
export AWS_ACCESS_KEY_ID=my-public-key
export AWS_SECRET_ACCESS_KEY=my-private-key
```

## Lancer le script :

```
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
        'Key'    => 'cameleon',
        'Body'   => fopen('assets/img/cameleon.jpg', 'r'),
        'ACL'    => 'public-read',
    ]);
} catch (Aws\S3\Exception\S3Exception $e) {
    echo "There was an error uploading the file.\n";
}
```

## Documentation

[Documentation AMAZON](https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/getting-started_basic-usage.html)