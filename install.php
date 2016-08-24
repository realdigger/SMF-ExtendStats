<?php
db_query("
	CREATE TABLE IF NOT EXISTS {$db_prefix}members_stats
	(
    `ID_MEMBER` int(10) unsigned NOT NULL,                 
    `posterName` tinytext,                                 
    `postsToday` int(10) unsigned NOT NULL default '0',    
    `postsWeek` int(10) unsigned NOT NULL default '0',     
    `postsMonth` int(10) unsigned NOT NULL default '0',    
    `postsYear` int(10) unsigned NOT NULL default '0',     
    `postsUpdated` int(10) unsigned NOT NULL default '0',  
     PRIMARY KEY  (`ID_MEMBER`)        
	)", __FILE__, __LINE__);
?>
   
