<?php
use PHPUnit\Framework\TestCase;

class PriceTest extends TestCase
{
    /**
     * @dataProvider inputProvider
     */
    public function testSpecialoffer($item, $quantity,$result)
    {
        if($item=='A'){
				$specialprice =130;//3 for 130
				$specialpriceqty = 3;
				$unitPrice = 50;
				$remainder = $quantity  % $specialpriceqty;
				$quotient = intdiv($quantity, $specialpriceqty); 
				$sumamt = ($remainder * $unitPrice) + ($quotient * $specialprice) ;
		}if($item=='B'){
				$specialprice =45;//2 for 45
				$specialpriceqty = 2;
				$unitPrice = 30;
				$remainder = $quantity  % $specialpriceqty;
				$quotient = intdiv($quantity, $specialpriceqty); 
				$sumamt = ($remainder * $unitPrice) + ($quotient * $specialprice) ;
		}if($item=='C'){
			$unitPrice = 20;
			if($quantity <=2){
			 $specialpriceqty = 2;
			 $specialprice =38;//2 for 38
		   }else if($quantity <=3){
			 $specialpriceqty = 3;
			 $specialprice=50;
		   }else if($quantity ==4){
			 $specialpriceqty = 3;
			 $specialprice=50;
		   }else if($quantity >=5){
			 $specialpriceqty = 5;
			 $specialprice=88;
		   }
			 $remainder = $quantity  % $specialpriceqty;
			 $quotient = intdiv($quantity, $specialpriceqty); 
			 $sumamt = ($remainder * $unitPrice) + ($quotient * $specialprice) ;
	    }if($item=='D'){
				$specialprice =5;//if a is there for 5
				$specialpriceqty = 1;
				$unitPrice = 15;
				$remainder = $quantity  % $specialpriceqty;
				$quotient = intdiv($quantity, $specialpriceqty); 
				$sumamt = ($remainder * $unitPrice) + ($quotient * $specialprice) ;
		}if($item =='E'){
			$unitPrice = 5;
			$sumamt = ($quantity * $unitPrice) ;
		}
      
        $this->assertEquals($result, $sumamt);
    }
	

    public function inputProvider()
    {
        return [
            ['A', 4,180],
			['B', 3,75],
            ['C', 5,88],
            ['D', 1,5],
			['E',2,10]
			
        ];
    }
}
?>