# Laravel Package For Unzip the files in one line 

### Instaling

``` bash
composer require sourovahmad/unzipper
```
Done It will Install All dependecies for you 


### How it works 

```php
    SourovahmadUnzipper::unzip(pass the zip file);
```

using the just call the <b>  SourovahmadUnzipper::unzip(); </b> at the parameter pass the zip file and you are done.


### Locate The files 

``` bash
    public -> zip -> unzipped (with unique number)
```

###  Get the  data 

```php
    SourovahmadUnzipper::unzip('the folder unique number');
```

your folder unique number is located in  public -> zip -> unzipped -> which folder data you want to get




## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
