<?php
namespace Diagro\Chart\Options;

final class Transitions
{


    public Animation $animation;

    /**
     * @var Animations[] HashMap<animation:string, Animations>
     */
    public array $animations = [];


    public function __construct()
    {
        $this->animation = new Animation();
    }


}