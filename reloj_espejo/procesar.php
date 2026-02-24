<?php
if(isset($_POST['enviar'])){
    $h = $_POST['hora'];
    $m = $_POST['minutos'];
    
    $min_espejo = $h * 60 + $m;
    $min_real = 720 - $min_espejo;
    
    if($min_real < 0){
        $min_real = $min_real + 720;
    }
    
    $h_real = floor($min_real / 60);
    $m_real = $min_real % 60;
    
    if($h_real == 0){
        $h_real = 12;
    }
    if($h_real > 12){
        $h_real = $h_real - 12;
    }
    
    if($h_real < 10){
        $h_real = "0" . $h_real;
    }
    if($m_real < 10){
        $m_real = "0" . $m_real;
    }
    
    $resultado = $h_real . ":" . $m_real;
    
    header("Location: index.php?resultado=" . $resultado);
} else {
    header("Location: index.php");
}
?>