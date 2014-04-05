<!DO<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head> 
        <?php include 'views/layout/head.php'; ?>
           
    </head>
    <body>
        <?php
        $page = filter_input(INPUT_GET,'page',FILTER_SANITIZE_SPECIAL_CHARS);//$_GET['page'];
        if(!isset($page)){ $page='home';}
         
        //define menu items, keyed by the page id which identified the php file inside /views/pages/
          $titles = array();
          $titles['home'] = 'About';
          $titles['creating'] = 'Creating';
          $titles['minecraft'] = 'Modding';
          $titles['playing'] = 'Playing';
          $titles['collecting'] = 'Collecting';
 
         ?>

        <div id="header"> 
             <?php include 'views/layout/menu.php'; ?>
        </div>
        <div id="body">
      
            <table id="layout"><tr><td id="main">
               
                 <?php
             
                if(isset($titles[$page])) 
                {
                  include('views/pages/'.$page.".php");
                }
                else
                { 
                    include("404.php"); 
                }

                ?>      
        
            </td><td id="right">
           
                
                
                
                
            </td></tr></table>


           
             <?php include 'views/layout/icons.php'; ?>

        </div> 
        <div id="footer"> 
             <?php include 'views/layout/viewcounter.php'; ?> 
        </div> 
    </body>	
</html>