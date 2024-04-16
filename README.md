
## 🌐 Socials:
[![LinkedIn](https://img.shields.io/badge/LinkedIn-%230077B5.svg?logo=linkedin&logoColor=white)](https://linkedin.com/in/alfredleo) 
# 📊 GitHub Stats:
![](https://github-readme-stats.vercel.app/api?username=alfredleo&theme=vue&hide_border=false&include_all_commits=false&count_private=false)<br/>
![](https://github-readme-streak-stats.herokuapp.com/?user=alfredleo&theme=vue&hide_border=false)<br/>
![](https://github-readme-stats.vercel.app/api/top-langs/?username=alfredleo&theme=vue&hide_border=false&include_all_commits=false&count_private=false&layout=compact)

### 🔝 Top Contributed Repo
![](https://github-contributor-stats.vercel.app/api?username=alfredleo&limit=5&theme=dark&combine_all_yearly_contributions=true)

### 😂 Random Dev Meme
<img src='https://randommeme-five.vercel.app/' style="height: 400px;"/>

---
[![](https://visitcount.itsvg.in/api?id=alfredleo&icon=0&color=0)](https://visitcount.itsvg.in)



# PHP_debug
PHP debug function that works anywhere. Ex: Ajax calls.

Define that function globaly and use anywhere in the code. Ex: `dumppp($arrayToCheck);`

`tail -f /src/log/php-error.log` to get currrent debug info.


```php
<?php

/**
 * Dumps any variable to the log specified in error_log.
 * Var_export can not handle reference cycles/recursive arrays.
 * @param $variable mixed
 * @param bool $use_print_r Use print_r or var_export
 */
function dumppp($variable, $use_print_r = true)
{
    // Set php log file if not set or override it
    ini_set('error_log', '/src/log/php-error.log');
    // check if any errors out there and print it
    $lastError = error_get_last();
    if (!function_exists('dumpVariable')) {
        function dumpVariable($variable, $use_print_r)
        {
            error_log($use_print_r ? var_export($variable, true) : print_r($variable, true), 0);
        }
    }
    if (!is_null($lastError)) {
        dumpVariable($lastError, $use_print_r);
    }
    // dump variable
    dumpVariable($variable, $use_print_r);
}

```

Some thoughts on implementation:

[what-are-php-nested-functions-for](https://stackoverflow.com/questions/415969/what-are-php-nested-functions-for)

[difference-between-var-dump-var-export-print-r](https://stackoverflow.com/questions/5039431/difference-between-var-dump-var-export-print-r)
