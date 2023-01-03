<!-- ################## Main Nav ################## -->
<nav class="navgrid">
    <a class = "<?php
    if ($pathParts['filename'] == "index"){
        print 'activePage';
    }
    ?>" href="index.php">Home</a>

    <a class = "<?php
    if ($pathParts['filename'] == "detail"){
        print 'activePage';
    }
    ?>" href="detail.php">Facts</a>

    <a class = "<?php
    if ($pathParts['filename'] == "form"){
        print 'activePage';
    }
    ?>" href="form.php">Favorite&nbsp;Fish</a>

    <a class = "<?php
    if ($pathParts['filename'] == "array"){
        print 'activePage';
    }
    ?>" href="array.php">Massive&nbsp;Fish</a>
</nav>