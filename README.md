# example-xhprof-73

Описание
```
[foo==>bar] => Array
(
    [ct] => 2        # number of calls to bar() from foo()
    [wt] => 37       # time in bar() when called from foo()
    [cpu] => 0       # cpu time in bar() when called from foo()
    [mu] => 2208     # change in PHP memory usage in bar() when called from foo()
    [pmu] => 0       # change in PHP peak memory usage in bar() when called from foo()
)
```