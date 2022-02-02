<?php
class Princesse extends Personnage {
    private bool $save;
    public function __construct($save = false)
    {
        parent::__construct();
        $this->setSave($save);
    }


    /**
     * @return mixed
     */
    public function getSave()
    {
        return $this->save;
    }

    /**
     * @param mixed $save
     */
    public function setSave($save): void
    {
        $this->save = $save;
    }
}