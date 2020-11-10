<?php

class theme_text_widget extends WP_Widget {

    public function __construct(){
        $args = array(
            'name' => 'Theme text html',
            'description' => 'Text under name widget'
        );
    
    parent::__construct('theme_text_widget', '', $args);
}


public function form ($instence){ ?>

<!-- сама верстка формы( то что будет видно в админке и куда будем вводить текст) -->
<p>
    <label for="<?php echo $this->get_field_id('theme_text_id'); ?>">
        text:
    </label>
    <input  name="<?php echo $this->get_field_name('theme_name_text'); ?>" id="<?php echo $this->get_field_id('theme_text_id'); ?>" value="<?php echo $instence['theme_name_text']; ?>" class="widefat">

</p>

 <?php
 
}

  public function widget ($args, $instence){
    echo $instence['theme_name_text']; 
  }
  
}?>