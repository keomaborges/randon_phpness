<?php
	$parameterBag
            ->expects($this->any())
            ->method('has')
            ->will($this->returnCallback([$this, 'assertReturnHas']));

	public function assertReturnHas($arg)
    {
        $reserved = ['fields'];

        return !in_array($arg, $reserved);
    } 
