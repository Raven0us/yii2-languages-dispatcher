<?php  //[STAMP] 91f32a049cf7f03871df97bdda1e757c
namespace cetver\LanguagesDispatcher\tests\_generated;

// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile

use cetver\LanguagesDispatcher\tests\Helper\Functional;

trait FunctionalTesterActions
{
    /**
     * @return \Codeception\Scenario
     */
    abstract protected function getScenario();

    
    /**
     * [!] Method is generated. Documentation taken from corresponding module.
     *
     * Checks that array contains subset.
     *
     * @param array  $subset
     * @param array  $array
     * @param bool   $strict
     * @param string $message
     * @see \Codeception\Module::assertArraySubset()
     */
    public function assertArraySubset($subset, $array, $strict = null, $message = null) {
        return $this->getScenario()->runStep(new \Codeception\Step\Action('assertArraySubset', func_get_args()));
    }
}