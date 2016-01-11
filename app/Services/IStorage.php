<?php  namespace App\Services;
interface IStorage {
    function setValue($id, $price);
    function getValue($id);
    function all();
    function find($where);
    function delete($id);
    function reset();
    function total();
}