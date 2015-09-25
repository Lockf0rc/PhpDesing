<?php
  /* @file: product interface for getters.
   *
   *
   *
   */
   abstract class IProduct
   {
      protected _item;
      protected _description;
      protected _unitCost;
      public abstract function get_item();
      public abstract function get_description();
      public abstract function get_unitCost();
      
   }

?>
