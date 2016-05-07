<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: Image Select
 * 
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class CSFramework_Option_image_select extends CSFramework_Options {

  public function __construct( $field, $value = '', $unique = '' ) {
    parent::__construct( $field, $value, $unique );
  }

  public function output() {  

    $input_type  = ( ! empty( $this->field['radio'] ) ) ? 'radio' : 'checkbox';
    $input_attr  = ( ! empty( $this->field['multi_select'] ) ) ? '[]' : '';

    echo $this->element_before();
    echo ( empty( $input_attr ) ) ? '<div class="cs-field-image-select">' : '';

    if( isset( $this->field['options'] ) ) {
      $options  = $this->field['options'];
      $count = 0;
      foreach ( $options as $key => $value ) {

        // Customly Added String Checker
        if($this->element_image_label()){

          $label = $key;
          $word = [];

          for($i=1;$i<strlen($label);$i++)
          {
            if($label[$i] >= 'A' && $label[$i] <= 'Z'){
              $word[] = $label[$i];
            }
          }

          for($i=0;$i<count($word);$i++)
          {
            $label = str_replace($word[$i]," $word[$i]",$label);
          }

          $count++;
          
          echo '<label><b>'.$count.". ".$label.'</b>';

        }else{

          echo "<label>";

        }
        
        echo '<input id = "d" type="'. $input_type .'" name="'. $this->element_name( $input_attr ) .'" value="'. $key .'"'. $this->element_class()  . $this->element_attributes( $key ) . $this->checked( $this->element_value(), $key ) .'/><img src="'. $value .'" alt="'. $key .'" />';

          echo '</label>';
      }
    } 

    echo ( empty( $input_attr ) ) ? '</div>' : '';
    echo $this->element_after();
    

  }

}
