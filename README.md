# SIUP
Simple Image Upload with Preview, a tiny utility used to show preview before image upload. Unlike others, it uses upload tag.

## Features
* Simple & easy to use
* Uses file tag
* No dependency
## Quick Usage
Include SIUP CSS and JS after downloading the repository. To initiate using:

```
<!-- in html -->
<form action="" method="POST" enctype="multipart/form-data">

    <!-- specify a unique id and siup class -->
    <div class="siup" id="img-1">
    </div>

    <input type="submit" value="submit" />
</form>


<script>

/* initiate it by passing unique id (specified in html) */ 
const img1 = new SIUP('img-1');

</script>
```

## About
 As it's, Simple Image Upload with Preview. There is no need to handle upload on client side with any api just handle it on server. For demonstration see [examples](examples/). <br />
 Currently, it does not support multiple attribute.
 

## Global methods
It must run before any initiation to apply on tags.
```
<script>

/* To set accept formats */
SIUP.setAcceptFormats('.jpg,.png');

/* To add class on file tag */
SIUP.setInputClass('class-1 class-2');

/* To add class preview div */
SIUP.setPreviewClass('class-1 class-2');

/* To populate upload
 (in case of update where uploaded image is displayed) */
 const img1 = new SIUP('img-1'); // initiate first
 img1.populate(src); // populate it by passing src as image source

</script>

```

## License
This utility follows [MIT](LICENSE.md) license