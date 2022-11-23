<?php

class Agua{
    public static function getEstado(float $temperatura):string{
    if(is_float($temperatura) || is_int($temperatura)){
        if ($temperatura<=0) return 'Solido';
        if(0<$temperatura && $temperatura<100)return 'Liquido';
        if(100<=$temperatura)return 'Gaseoso';
    }else{
        return null;
    }

    }
}