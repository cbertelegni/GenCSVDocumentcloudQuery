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

* Output

document_title|document_url|document_id|Description|Pages
---|---|---|---|---
"230170233 3462"|https://www.documentcloud.org/documents/2316031-230170233-3462.html|2316031-230170233-3462||1
"230170233 3461"|https://www.documentcloud.org/documents/2316030-230170233-3461.html|2316030-230170233-3461||1
"230170233 3460"|https://www.documentcloud.org/documents/2316028-230170233-3460.html|2316028-230170233-3460||1
"230170233 3459"|https://www.documentcloud.org/documents/2316026-230170233-3459.html|2316026-230170233-3459||1
"230170233 3458"|https://www.documentcloud.org/documents/2316025-230170233-3458.html|2316025-230170233-3458||1
"230170233 3457"|https://www.documentcloud.org/documents/2316024-230170233-3457.html|2316024-230170233-3457||1
"230170233 3456"|https://www.documentcloud.org/documents/2316022-230170233-3456.html|2316022-230170233-3456||1
"230170233 3455"|https://www.documentcloud.org/documents/2316021-230170233-3455.html|2316021-230170233-3455||1
"230170233 3454"|https://www.documentcloud.org/documents/2316020-230170233-3454.html|2316020-230170233-3454||1
"230170233 3453"|https://www.documentcloud.org/documents/2316018-230170233-3453.html|2316018-230170233-3453||1


