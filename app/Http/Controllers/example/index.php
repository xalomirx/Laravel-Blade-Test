<?php

namespace App\Http\Controllers\example;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class index extends Controller
{
    //

    //show index.php.blade
    public function ShowIndex() {

        $DataArray = array(

            'PageTitle'=> 'Asplomb',
            'UserName' => 'Александр',
            'UserInventoryData' => ['FavoriteCount' => '3', 'TradeCount' => '22560'],
            'MainNavMenuItem' => ['Каталог', 'Акции', 'Оплата и доставка', 'Новости', 'Технологии и производство', 'Контакты'],
            'ModalFeedback' => true
        );

        return view('example.index',$DataArray);
    }
}
