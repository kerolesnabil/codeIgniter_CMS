<?php



echo get_ol($pages);



function get_ol($array,$child=FALSE){

    $str='';

    if(count($array)){

        //shortcut if
        $str.= ($child==FALSE) ? '<ol class="sortable">':'<ol>';

        foreach ($array as $item){

            $str.='<li id="list_'.$item['id'].'">';
            $str.='<div>'.$item['title'].'</div>';

            //DO we have any children?
            if (isset($item['children'])&& count($item['children'])){
                $str.=get_ol($item['children'],true);
            }

            $str.='</li>' .PHP_EOL ;
        }
        $str.='</ol>' .PHP_EOL ;
    }

    return $str;
}