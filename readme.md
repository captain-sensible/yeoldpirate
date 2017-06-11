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

All the function does is go through the text of posts & replace words 
found in the array on the left (key) with word on the right (value)

So text in a post :
the weather had changed -yes it was raining ;I only had  stagnant 
bottle of milk in the fridge .So I went out to  call a cab & shouted
 " hey take me to Tesco". As I came out with my goods ,I passed a  beggers so thre coins into his pot  
 
 Will be changed to :
 
 Ye olde weather had changed -aye it was raining ;I only had addle
bottle of milk in Ye olde fridge .So I went out to hail a cab & shouted
” ahoy take me to Tesco”. As I came out with my booty ,I passed a Abraham Men so thre coins into his pot 

useless I ghrant you unless your a coder or its the 19th September "International Pirate day" & you use Wordpress


To use download to your wp-content/plugin folder. Log in and on dashboard click on "plugins" ypou should see reference to plugin.
To use just click activate.Then go to your blog posts you should see some words changed.Will incrtease  Pirate
Lingo in Array


