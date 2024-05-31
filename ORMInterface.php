<?php

interface ORMInterface
{
    public function create($object);
    public function update($object);
    public function delete($id);
    public function read($id);
    public function find($criteria);
    
}
