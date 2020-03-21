<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

class Product
{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}

$products[]  = new Product('Horlicks', 300);
$products[]  = new Product('Complain', 200);
$products[]  = new Product('Onion', 180);
$products[]  = new Product('Rice', 60);
$products[]  = new Product('Meat', 460);
$products[]  = new Product('Fish', 360);
$products[]  = new Product('Lentil', 60);
$products[]  = new Product('Salt', 20);
$products[]  = new Product('Lemon', 10);
$products[]  = new Product('Cocacola', 60);
$products[]  = new Product('sevenup', 60);


class SuperShop
{
    private $membership_discount = 5/100;
    public $all_products;
    public $prices =0;
    public $return_money =0;

    public function __construct($all_products)
    {
        $this->all_products = $all_products;
    }

    public function calculate()
    {
        $testcase = readline('How many items are there? ');
        $purchased_products = [];
        $discounted_amount = 0;
        for ($i =0; $i<$testcase; $i++) {
            $purchased_products[] = readline();
        }
        foreach ($this->all_products as $key => $value) {
            $product_prices[$this->all_products{$key}->name] = $this->all_products{$key}->price;
        }
        foreach ($purchased_products as $value) {
            if ($product_prices[$value]) {
                $this->prices += $product_prices[$value];
            }
        }
        $membership = readline('Do you have any membership? ');
        $given_money = readline('Enter the given money: ');
        if ($membership === 'Yes') {
            $this->prices = $this->price - ($this->price *$this->membership_discount);
        }
        if ($this->prices < $given_money) {
            $this->return_money = $given_money - $this->prices;
        }
    }
}
$shop = new SuperShop($products);
$shop->calculate();
