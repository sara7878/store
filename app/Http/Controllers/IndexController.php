<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{        
        public $categories=['phones','watches','sports','other'];
        public $products_phones=['1'=>['id'=>1,'name'=>'iphone11','price'=>12000,'img'=>'storage/phones.jpg'],
                          '2'=>['id'=>2,'name'=>'iphone12','price'=>15000,'img'=>'storage/phones.jpg'],
                          '3'=>['id'=>3,'name'=>'iphone13','price'=>20000,'img'=>'storage/phones.jpg'],
                          '4'=>['id'=>4,'name'=>'samsung','price'=>12000,'img'=>'storage/phones.jpg'],
                          '5'=>['id'=>5,'name'=>'nokia','price'=>12000,'img'=>'storage/phones.jpg'],
                          '6'=>['id'=>6,'name'=>'nokia','price'=>13000,'img'=>'storage/phones.jpg'],
                          '7'=>['id'=>7,'name'=>'samsung','price'=>14000,'img'=>'storage/phones.jpg'],
                          '8'=>['id'=>8,'name'=>'nokia','price'=>2000,'img'=>'storage/phones.jpg'],
                          '9'=>['id'=>9,'name'=>'iphone11','price'=>12000,'img'=>'storage/phones.jpg'],
                          '10'=>['id'=>10,'name'=>'samsung','price'=>10000,'img'=>'storage/phones.jpg'],
                          '11'=>['id'=>11,'name'=>'nokia','price'=>12000,'img'=>'storage/phones.jpg'],
                          '12'=>['id'=>12,'name'=>'iphone11','price'=>12000,'img'=>'storage/phones.jpg']
                        ];
                        public $products_watches=['1'=>['id'=>1,'name'=>'model 1','price'=>4000,'img'=>'storage/watches.jpeg'],
                        '2'=>['id'=>2,'name'=>'model 2','price'=>5000,'img'=>'storage/watches.jpeg'],
                        '3'=>['id'=>3,'name'=>'model 3','price'=>6000,'img'=>'storage/watches.jpeg'],
                        '4'=>['id'=>4,'name'=>'model 4','price'=>7000,'img'=>'storage/watches.jpeg'],
                        '5'=>['id'=>5,'name'=>'model 5','price'=>8000,'img'=>'storage/watches.jpeg'],
                        '6'=>['id'=>6,'name'=>'model 6','price'=>2000,'img'=>'storage/watches.jpeg'],
                        '7'=>['id'=>7,'name'=>'model 7','price'=>1000,'img'=>'storage/watches.jpeg'],
                        '8'=>['id'=>8,'name'=>'model 8','price'=>9000,'img'=>'storage/watches.jpeg'],
                        '9'=>['id'=>9,'name'=>'model 9','price'=>12000,'img'=>'storage/watches.jpeg'],
                        '10'=>['id'=>10,'name'=>'model 10','price'=>10000,'img'=>'storage/watches.jpeg'],
                        '11'=>['id'=>11,'name'=>'model 11','price'=>12000,'img'=>'storage/watches.jpeg'],
                        '12'=>['id'=>12,'name'=>'model 12','price'=>12000,'img'=>'storage/watches.jpeg']
                      ];
                      public $products_sports=['1'=>['id'=>1,'name'=>'t-shirt','price'=>300,'img'=>'storage/sports.jpg'],
                      '2'=>['id'=>2,'name'=>'skirt','price'=>200,'img'=>'storage/sports.jpg'],
                      '3'=>['id'=>3,'name'=>'short','price'=>1000,'img'=>'storage/sports.jpg'],
                      '4'=>['id'=>4,'name'=>'t-shirt','price'=>800,'img'=>'storage/sports.jpg'],
                      '5'=>['id'=>5,'name'=>'snikers','price'=>900,'img'=>'storage/sports.jpg'],
                      '6'=>['id'=>6,'name'=>'t-shirt','price'=>13000,'img'=>'storage/sports.jpg'],
                      '7'=>['id'=>7,'name'=>'t-shirt','price'=>14000,'img'=>'storage/sports.jpg'],
                      '8'=>['id'=>8,'name'=>'t-shirt','price'=>3000,'img'=>'storage/sports.jpg'],
                      '9'=>['id'=>9,'name'=>'t-shirt','price'=>2000,'img'=>'storage/sports.jpg'],
                      '10'=>['id'=>10,'name'=>'t-shirt','price'=>10000,'img'=>'storage/sports.jpg'],
                      '11'=>['id'=>11,'name'=>'t-shirt','price'=>12000,'img'=>'storage/sports.jpg'],
                      '12'=>['id'=>12,'name'=>'t-shirt','price'=>12000,'img'=>'storage/sports.jpg']
                    ];

                    public $products_others=['1'=>['id'=>1,'name'=>'tv','price'=>300,'img'=>'storage/other.jpg'],
                    '2'=>['id'=>2,'name'=>'tablet','price'=>200,'img'=>'storage/other.jpg'],
                    '3'=>['id'=>3,'name'=>'kitchen','price'=>1000,'img'=>'storage/other.jpg'],
                    '4'=>['id'=>4,'name'=>'ring','price'=>800,'img'=>'storage/other.jpg'],
                    '5'=>['id'=>5,'name'=>'product 5','price'=>900,'img'=>'storage/other.jpg'],
                    '6'=>['id'=>6,'name'=>'product 6','price'=>13000,'img'=>'storage/other.jpg'],
                    '7'=>['id'=>7,'name'=>'product 7','price'=>14000,'img'=>'storage/other.jpg'],
                    '8'=>['id'=>8,'name'=>'product 8','price'=>3000,'img'=>'storage/other.jpg'],
                    '9'=>['id'=>9,'name'=>'product 9','price'=>2000,'img'=>'storage/other.jpg'],
                    '10'=>['id'=>10,'name'=>'product 10','price'=>10000,'img'=>'storage/other.jpg'],
                    '11'=>['id'=>11,'name'=>'shirt','price'=>12000,'img'=>'storage/other.jpg'],
                    '12'=>['id'=>12,'name'=>'coach','price'=>12000,'img'=>'storage/other.jpg']
                  ];
    //
    function Categories(){

         return view('categories', ['category' => $this->categories,'phones'=>$this->products_phones,'watches'=>$this->products_watches,'sports'=>$this->products_sports,'other'=>$this->products_others]);
    }

    // function prosuctdetails(){

    //     // return view('categories', []);
    // }


        function prosuctdetails($cat,$id){


          if($cat=='phones'){
            return view('productDetails', ['productdetails' => $this->products_phones[$id]]);
          }
          if($cat=='watches'){
            return view('productDetails', ['productdetails' => $this->products_watches[$id]]);
          }
          if($cat=='sports'){
            return view('productDetails', ['productdetails' => $this->products_sports[$id]]);
          }
          if($cat=='other'){
            return view('productDetails', ['productdetails' => $this->products_others[$id]]);
          }
        }
}
