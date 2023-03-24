## composer.json explanation

```
{
    "name": "italomoralesf/text",
    "autoload": {
        "psr-4": {
            "Text\\": "src/"
        },
        "files": [
            "src/helpers.php"
        ]
    }
}
```

* When we type (or call the namespace) 'Text\\' it refers to the folder 'src/'
* In the folder 'src/', we use the files containing all the classes and their respective methods
* The file 'src/helpers.php' allows us to call methods in the classes typing just a function