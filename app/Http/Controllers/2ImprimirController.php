<?php

namespace Dikpro2\Http\Controllers;

use DB;
use Fpdf;

class ImprimirController extends Controller
{
    public function reportec($id)
    {
        //Obtengo los datos

        $orden = DB::table('tb_ordenes as ord')
            ->join('tb_cliente as cli', 'ord.id_tb_cliente', '=', 'cli.id_tb_cliente')
            ->join('users as us', 'us.id', '=', 'ord.agente')
            ->select('ord.id_tb_ordenes', 'ord.Fecha_de_Inicio', 'ord.Fecha_de_Entrega', 'ord.Revision_de_Diseno', 'ord.Total_Venta', 'ord.IVA', 'ord.Abono', 'ord.Observaciones', 'cli.id_tb_cliente', 'cli.Cliente_Nombre_Comercial', 'cli.Contacto_Razon_Social', 'cli.Cedula_Ruc', 'cli.Email', 'us.name', 'cli.Telefono')
            ->where('ord.id_tb_ordenes', '=', $id)
            ->first();

        $detalles = DB::table('tb_detalle_orden as do')
            ->join('tb_descripcion_servicios as ds', 'ds.id_tb_descripcion_servicios', '=', 'do.id_tb_descripcion_servicios')
            ->join('tb_servicios as ser', 'ser.id_tb_Servicios', '=', 'ds.id_tb_Servicios')
            ->select('ds.Productos', 'ser.Servicio', 'do.cantidad', 'do.Valor_Unitario', 'do.Descripcion')
            ->where('do.id_tb_ordenes', '=', $id)
            ->orderby('do.id_do', 'desc')
            ->get();

        //Fpdf = new Fpdf();
        Fpdf::AddPage('P', 'A4');

        Fpdf::SetFont('Arial', 'B', 14);
        Fpdf::SetXY(195, 9);
        Fpdf::Cell(0, 0, utf8_decode($orden->id_tb_ordenes));

        //****Datos COMPRADOR

        Fpdf::SetFont('Arial', 'B', 8);
        Fpdf::SetXY(23, 14);
        Fpdf::Cell(0, 0, utf8_decode($orden->Cliente_Nombre_Comercial));
        Fpdf::SetXY(23, 19);
        Fpdf::Cell(0, 0, utf8_decode($orden->Contacto_Razon_Social));
        Fpdf::SetXY(23, 24);
        Fpdf::Cell(0, 0, utf8_decode($orden->Cedula_Ruc));

        //***Seccion CENTRAL
        Fpdf::SetXY(119, 14);
        Fpdf::Cell(0, 0, utf8_decode($orden->Email));
        Fpdf::SetXY(119, 19);
        Fpdf::Cell(0, 0, utf8_decode($orden->Telefono));
        Fpdf::SetXY(119, 24);
        Fpdf::Cell(0, 0, utf8_decode($orden->id_tb_cliente));

        //**********Seccion Izquierda
        Fpdf::SetXY(186, 15);
        Fpdf::Cell(0, 0, utf8_decode($orden->name));

        $total = 0;

        //****Mostramos los detalles
        $y = 33;

        foreach ($detalles as $det) {
            Fpdf::SetFont('Arial', 'B', 8);

            Fpdf::SetXY(3, $y);
            Fpdf::MultiCell(10, 3, $det->cantidad);

            Fpdf::SetXY(14, $y);
            Fpdf::MultiCell(25, 3, utf8_decode($det->Servicio));

            Fpdf::SetXY(39, $y);
            Fpdf::MultiCell(25, 3, utf8_decode($det->Productos));

            Fpdf::SetXY(66, $y);
            Fpdf::MultiCell(111, 3, utf8_decode($det->Descripcion));

            Fpdf::SetFont('Arial', 'B', 8);
            Fpdf::SetXY(180, $y);
            Fpdf::MultiCell(25, 3, number_format($det->Valor_Unitario, 2, '.', ','));

            Fpdf::SetXY(198, $y);
            Fpdf::MultiCell(25, 3, number_format(($det->Valor_Unitario * $det->cantidad), 2, '.', ','));

            $total = $total + (($det->Valor_Unitario) * $det->cantidad);
            $y     = $y + 9;
        }

        //Fpdf::SetFont('Arial', 'B', 14);

        //OBSERVACIONES
        Fpdf::SetXY(25, 112);
        Fpdf::MultiCell(150, 3, utf8_decode($orden->Observaciones));

        setlocale(LC_TIME, "es_ES");

        //FECHAS DE LA ORDEN
        Fpdf::SetFont('Arial', 'B', 9);
        Fpdf::SetXY(2, 135);
        Fpdf::Cell(0, 0, strftime("%A, %e de %b de %G - %R", strtotime($orden->Fecha_de_Inicio)));
        if ($orden->Revision_de_Diseno != null) {
            Fpdf::SetXY(55, 135);
            Fpdf::Cell(0, 0, strftime("%A, %e de %b de %G - %R", strtotime($orden->Revision_de_Diseno)));
        }
        Fpdf::SetXY(108, 135);
        Fpdf::Cell(0, 0, strftime("%A, %e de %b de %G - %R", strtotime($orden->Fecha_de_Entrega)));

        //ABONO y SALDO
        Fpdf::SetFont('Arial', 'B', 8);
        Fpdf::SetXY(193, 130);
        Fpdf::MultiCell(20, 0, "$" . number_format($orden->Abono, 2, '.', ','));
        Fpdf::SetFont('Arial', 'B', 9);
        Fpdf::SetXY(193, 136);
        Fpdf::MultiCell(20, 0, "$" . number_format((($orden->Total_Venta + ($orden->Total_Venta * 0.12)) - $orden->Abono), 2, '.', ','));

        //------------------TOTALES
        Fpdf::SetFont('Arial', 'B', 8);
        Fpdf::SetXY(198, 110);
        Fpdf::MultiCell(20, 0, "" . number_format($orden->Total_Venta, 2, '.', ','));
        Fpdf::SetXY(198, 116);
        Fpdf::MultiCell(20, 0, "" . number_format(($orden->Total_Venta * 0.12), 2, '.', ','));
        Fpdf::SetXY(198, 121);
        Fpdf::MultiCell(20, 0, "" . number_format($orden->Total_Venta + ($orden->Total_Venta * 0.12), 2, '.', ','));

        Fpdf::Output();
        exit;
    }}
