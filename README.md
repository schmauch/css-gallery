# Pure CSS lightbox gallery

Create a lightbox gallery without javascript.

## Usage
Create an image gallery enclosing your image in an `a` tag:

```
<a class=".cssg-item" href="#img1" title="your caption">
   <img class="cssg" src="picture1.jpg" alt="your caption" />
   <div class="cssg-caption"><span> your caption</span></div>
</a>
```

For every image you need to add an anchor in front of all images:
```
<div id="img1" class="cssg-anchor"></div>
```

Link to the corresponding stylesheet by declaring the number of images:
```
<link rel="stylesheet" type="text/css" href="galerie.css.php?n=NUMBER_OF_IMAGES" />
```
