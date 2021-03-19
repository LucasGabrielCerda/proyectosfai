<?php
function main(){
    /** Creacion de los arreglos de vinos y sus respectivas variedades de dulzura
     * cada variedad de dulzura contiene su cantidad, su precio por unidad, y el año de produccion*/
$vinos=array(
"malbec"=>array(
    "dulce"=>array("cantidadBotellas"=>120,"precioUnidad"=>12,"anioProduccion"=>1990),
    "semi-dulce"=>array("cantidadBotellas"=>60,"precioUnidad"=>12,"anioProduccion"=>1980),
    "seco"=>array("cantidadBotellas"=>180,"precioUnidad"=>27,"anioProduccion"=>1950)
 ),
"cabernet"=>array(
    "dulce"=>array("cantidadBotellas"=>500,"precioUnidad"=>25,"anioProduccion"=>1993),
    "semi-dulce"=>array("cantidadBotellas"=>250,"precioUnidad"=>10,"anioProduccion"=>2000),
    "seco"=>array("cantidadBotellas"=>100,"precioUnidad"=>15,"anioProduccion"=>1995)
),
"sauvignon"=>array(
    "dulce"=>array("cantidadBotellas"=>200,"precioUnidad"=>40,"anioProduccion"=>1890),
    "semi-dulce"=>array("cantidadBotellas"=>160,"precioUnidad"=>20,"anioProduccion"=>1980),
    "seco"=>array("cantidadBotellas"=>320,"precioUnidad"=>12,"anioProduccion"=>1990)
),
"merlot"=>array(
    "dulce"=>array("cantidadBotellas"=>48,"precioUnidad"=>12,"anioProduccion"=>1990),
    "semi-dulce"=>array("cantidadBotellas"=>64,"precioUnidad"=>16,"anioProduccion"=>1998),
    "seco"=>array("cantidadBotellas"=>72,"precioUnidad"=>8,"anioProduccion"=>2010)
)
);
preciosPromedios($vinos);
}

function preciosPromedios($arrayVinos){
    //Primer loop foreach recorre las variedades de uvas
    foreach ($arrayVinos as $variedadUva=>$variedadVino){
        /*Se inicializa el total de botellas y el costo total de toda la bodega en 0
         * ya que el costo promedio es por variedad de vino, o sea, por la variedad de la uva*/
        $totalBotellas=0;
        $totalPrecio=0;
        /*loop foreach de cada variedad de dulzura, cuenta la cantidad de botellas de cada una y la suma al total
         * luego multiplica la cantidad de botellas por su precio unitario y lo suma para luego hacer el calculo del promedio*/
        foreach($arrayVinos[$variedadUva] as $variedadVino=>$datos){
            //
            $totalBotellas=$totalBotellas+$datos["cantidadBotellas"];
            $totalPrecio=$totalPrecio+($datos["cantidadBotellas"]*$datos["precioUnidad"]);
        }
        //Se presenta la variedad de uva de vino y luego su precio promedio, valor total dividido por cantidad de botellas
        echo "Variedad: ",$variedadUva,"\n";
        echo "  Botellas totales: ",$totalBotellas,"\n","  Precio promedio: ",$totalPrecio/$totalBotellas,"\n";
    }
}
main();
