<link rel="stylesheet" type="text/css" href="css/pages/mods.css"> 
<script type="text/javascript" src="js/pages/mods.js"></script>

<?php
//fetch the data. 
include('data/minecraftmods.php');
$mods =  get_minecraftmods();
?>

<div class="floating-menu">
    <ul>
        <li><a href='#top' ><span>Top</span></a></li> 
        <?php foreach ($mods as $mod): ?>
         
        <li><a href='#<?=$mod->title?>' ><span><?=$mod->title?></span></a></li>
        
        <?php endforeach; ?>
        <li><a href='#perm' ><span>Permissions</span></a></li> 
    </ul>
</div>

<br/>
<a name="top"></a> 

<section class="panel">   
    <h2>Minecraft Mods</h2>
    <h2>Currently I have some fun mods in Minecraft Forge that I am using in my single player world</h2>
    <p>
        All mods require Minecraft Forge 10.12.1.1060 for Minecraft 1.7.2.  <a href="http://files.minecraftforge.net/">Get Forge here.</a>
    </p>

    <p>I still have one older mod for versions 1.4 and 1.5 that I have not updated.  
        For now, I will just <a target="_blank" href="http://www.minecraftforum.net/topic/1562770-">Link to it here</a>.
    </p>
    
 
</section>

<br/>

<div class="clear"></div>





<?php foreach ($mods as $mod): ?>
 
<a name="<?=$mod->title?>"></a> 
    <div  class="mod_ctr" >
        <div class="mod_logo" > 
            <section>
                
            <p class="mod_name"> <?=$mod->title; ?></p>  
              
            <p class="mod_link">
                <a href="<?=$mod->download?>">Download Latest (<?=$mod->version; ?>)</a>
            </p>
            
            </section> 

            <div class="clear"></div>

            <div class="mod_content" >
                <section>

               <?=$mod->text; ?>

                <?php if($mod->imguralbum ): ?>

                <iframe class="imgur-album" width="100%" height="550" frameborder="0" src="http://imgur.com/a/<?=$mod->imguralbum; ?>/embed"></iframe>
                
                <?php endif;?>
                
                <?php if($mod->youtube ): //currently no mods have both video AND imgur?>

                <iframe width="560" height="315" src="//www.youtube.com/embed/<?=$mod->youtube?>" frameborder="0" allowfullscreen></iframe>
        
                <?php endif;?>
                </section> 
            </div>
            
            
        </div>
 
    </div>

<div class="clear"></div>

<?php endforeach; ?>


 

 

<a name="perm"></a> 
<section class="panel">
    <h3>Permissions</h3>

    <p>
    This mod (plugin, a patch to Minecraft source, henceforth "Mod" or "The Mod"), by the terms of 
    <a href="http://www.minecraft.net/copyright.jsp">http://www.minecraft.net/copyright.jsp</a> is sole property of the Mod author 
    (Sam Bassett aka Lothrazar, henceforth "Owner" or "The Owner"). By default it may only be distributed on minecraftforums.net.  
    It may only be mirrored or reposted with advance written permission of the Owner. Electronic Mail is fine if you wait for a response.  
    URL shorteners or other attempts to make money off The Owner's Mod are strictly forbidden without advance written permission.

    However, you are free to include this mod as-is in a ModPack as long as you credit the Owner.
    </p>

 </section>