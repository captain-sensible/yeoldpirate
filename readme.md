This plugin uses basic concepts seen in Hello Dolly & is my first plugin. 
It can be useful if your new to wordpress plugins & need 
some simple code to study.

The core is an array of 
```
key=>value

```

Put simply the_content is a handle to the content of published text etc in wordpress,
the function called replace is linked to this handle via this line below

``` 

add_filter( 'the_content', 'replace' );

```

All the function does is go through the text of posts & replace words found in the array on the left (key) with word on the right (value)
