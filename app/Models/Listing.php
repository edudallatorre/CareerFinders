<?php
    namespace App\Models;

    class Listing {
        
        public static function all() {
            return [
                [
                    'id' => 1,
                    'title' => 'Listing One',
                    'discription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis mollis neque, vitae fermentum nibh. 
                    Donec eleifend nunc eu purus suscipit, sed volutpat mauris ultrices. Maecenas vel diam in tellus vulputate facilisis maximus ut 
                    tellus. Ut et ligula ut augue dapibus venenatis in vel lectus. Pellentesque tempus augue vitae ante varius, vitae condimentum ipsum
                    luctus. Proin convallis lacinia mauris eget luctus. Vivamus scelerisque condimentum tincidunt. Mauris tristique tincidunt nisi nec commodo.
                    Proin id velit vel erat vestibulum semper.'
                ],
                [
                    'id' => 2,
                    'title' => 'Listing Two',
                    'discription' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis mollis neque, vitae fermentum nibh. 
                    Donec eleifend nunc eu purus suscipit, sed volutpat mauris ultrices. Maecenas vel diam in tellus vulputate facilisis maximus ut 
                    tellus. Ut et ligula ut augue dapibus venenatis in vel lectus. Pellentesque tempus augue vitae ante varius, vitae condimentum ipsum
                    luctus. Proin convallis lacinia mauris eget luctus. Vivamus scelerisque condimentum tincidunt. Mauris tristique tincidunt nisi nec commodo.
                    Proin id velit vel erat vestibulum semper.'
                ]
            ];
        }

        public static function find($id) {

            $listings = self::all();

            foreach($listings as $listing) {
                if($listing['id'] == $id) {
                    return $listing;
                }
            }
        }
    }