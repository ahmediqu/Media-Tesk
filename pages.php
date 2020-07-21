 <?php
 
    include('view/partials/header.php');
        $page = isset($_GET['page']) ? $_GET['page'] : null;
        
        // switch ($page) {
        //     case 'posts':
        //         include_once('pages.php');

        //         break;
        switch ($page) {
            case 'posts':
                include_once('view/post/post.php');
                break;
            case 'media':
                include_once('view/post/media.php');
                break;
            case 'id':
            
                include_once('view/post/filter.php');
                break;
            
            default:
                echo "Page not found";
                break;
        }

        if($_GET['id']){
             include_once('view/post/filter.php');
        }

    include('view/partials/footer.php');

?>