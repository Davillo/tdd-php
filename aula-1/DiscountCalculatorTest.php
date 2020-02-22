<?php

class DiscountCalculatorTest
{
    public function ShouldApply_WhenValueIsAboveTheMinimumTest()
    {
        $discountCalculator = new DiscountCalculator();

        $totalValue = 130;
        $totalWithDiscount = $discountCalculator->apply($totalValue);

        $expectedValue = 110;
        $this->assertEquals($expectedValue, $totalWithDiscount, "O teste de desconto em caso de valor minimo maior, passou. \n");
    }

    public function ShouldNotApply_WhenValueIsABellowTheMinimumTest()
    {
        $discountCalculator = new DiscountCalculator();

        $totalValue = 90;
        $totalWithDiscount = $discountCalculator->apply($totalValue);

        $expectedValue = 90;
        $this->assertEquals($expectedValue, $totalWithDiscount, "O teste de desconto em caso de valor minimo menor, passou. \n");
    }

    function assertEquals($expectedValue, $actualValue, $message)
    {
        if ($expectedValue !== $actualValue) {
            $testFailedMessage = 'Expected :' . $expectedValue .' mas obteve: '.$actualValue;
            throw new Exception($testFailedMessage);
        }
        echo $message;
    }
}
