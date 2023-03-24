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

## autoload explanation
```
{
    "autoload": {
        "files": [
            "src/file1.php",
            "src/file2.php"
        ],
        "classmap": [
            "database/seeds",
            "database/factories"
        ],
        "psr-0": {
            "Text\\": "src/"
        },
        "psr-4": {
            "Text\\": "src/"
        }
    }
}
```

* "files" is for automatically load the files that are defined as values of this key. In general, these files contain help functions.
* "classmap" is for automatically load folders containing all classes
* Although "psr-0" and "psr-4" look the same to the naked eye, "psr-0" is older than "psr-4", with "psr-0" if our base file contains other subfolders, we have to consider all these paths, whereas "psr-4" already understands the whole folder tree
* Use "psr-4" instead "psr-0"