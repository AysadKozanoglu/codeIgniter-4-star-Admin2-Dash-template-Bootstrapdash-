<?php if ( ! file_exists(dirname(__DIR__, 1)."/Views/".\Config\App::DEFAULTTPL.'/'.$view.'.php')) exit('No direct script access allowed'); ?>                                                                                  
  
<?php echo view(\Config\App::DEFAULTTPL.'/parts/header'); ?>
<?php echo $parsedContentView; ?>
<?php echo view(\Config\App::DEFAULTTPL.'/parts/footer'); ?>                                                                                  