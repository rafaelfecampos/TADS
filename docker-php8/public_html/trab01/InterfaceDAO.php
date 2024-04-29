<?php

interface InterfaceDAO {
    public static function criar($pro);
    public static function alterar($id, $pro);
    public static function buscar($id);
    public static function buscarTodos();
    public static function deletar($id);
}