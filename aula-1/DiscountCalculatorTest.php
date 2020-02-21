<?php

class DiscountCalculatorTest
{
    function shouldApply_WhenValueIsAboveTheMinimum()
    {
        $discountCalculator = new DiscountCalculator();
        $totalValue = 130;
        $expectedValue = 110; //valor que precisa ser retornado  ($variavel - 20)
        $totalWithDiscount = $discountCalculator->apply($totalValue);
        $this->assertEquals($expectedValue, $totalWithDiscount);
    }

    function SholdNotApply_WhenValueIsUnderTheMinimum(){
        $discountCalculator = new DiscountCalculator();
        $totalValue = 80;
        $expectedValue = 80; //valor que precisa ser retornado  ($variavel sem alterações), o desconto é apenas para acima de 100
        $totalWithDiscount = $discountCalculator->apply($totalValue);
        $this->assertEquals($expectedValue, $totalWithDiscount);
    }

    function assertEquals($expectedValue, $actualValue)
    {
        if ($expectedValue !== $actualValue) {
            $message = 'Expected :' . $expectedValue;
            throw new Exception($message);
        }
        echo 'Test PAssed!';
    }
}
