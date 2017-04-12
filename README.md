GenCSVDocumentcloudQuery
========================

Generate a CSV file from a Documentcloud query.


## Usage

```
$ git clone git@github.com:cbertelegni/GenCSVDocumentcloudQuery.git
```

```
$ cd ./GenCSVDocumentcloudQuery/php/
```

* Open main_sample.php
* Edit $query, for example, get all documents from a project:

```php
$query = "projectid:7607-poder-legislativo"
$dc = new GenCSVDocumentcloud($query);
$dc->main();
```

* Run code

```
$ cd php
$ php main_sample.php
```


