<!-- 
#Include and require
    - with a wrong filename using include: error failed to open stream  
        - still opens the rest of the content of the page (not the include file)
    - with a wrong filename using require: error failed to open stream 
        - !doesn't open the page
    -     
 -->

<?php include 'inc/header.php'; ?>
<h1>Home</h1>
<?php include 'inc/footer.php'; ?>

