<?php
/**
 * @author Rufusy Idachi <idachirufus@gmail.com>
 * @date: 6/11/2023
 * @time: 10:56 PM
 */
interface GetsSomethingInterface
{
    /**
     * This interface defines one method.
     * It must be called "getSomething" and it must return a string
     */
    public function getSomething(): string;
}
class GetsSomethingClass implements GetsSomethingInterface
{
    public function getSomething(): string
    {
        return 'something';
    }
}
echo "\n" . (new GetsSomethingClass())->getSomething();