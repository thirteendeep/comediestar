    <?php 

    if (!$element &&  $section) { 
        //include('core/navigation.php');
    } 

    if ($section) {
       include($_SERVER['DOCUMENT_ROOT'].'/application/layouts/'.$section."/".$content.".php");
   }
   else if ($element) {
        // include('pages/modules/'.$element.'/index.php');
   }
   else {
        // include('core/navigation.php');
   }
   ?>
