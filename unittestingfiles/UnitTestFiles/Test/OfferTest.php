<?php
use PHPUnit\Framework\TestCase;

class OfferTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    
	public function testwithinvalidOfferamt($item, $quantity,$result)
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
	    }
       
        $this->assertEquals($result, $sumamt);
    }

    public function additionProvider()
    {
        return [
            ['A', 4,200],
			['B', 3,90],
            ['C', 1,20]
			
        ];
    }
}
?>