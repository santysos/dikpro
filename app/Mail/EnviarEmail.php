<?php

namespace Dikpro2\Mail;

use DB;
use Dikpro2\DescripcionProcesos;
use Dikpro2\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnviarEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $content;
    public $procesos;
    public $procesos1;
    public $listadoprocesos;
    public $usuarios;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($content)
    {
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $procesos = DB::table('tb_procesos as pro')
            ->join('users as emp', 'emp.id', '=', 'pro.asignado')
            ->join('users as usr', 'usr.id', '=', 'pro.asignador')
            ->join('tb_descripcion_procesos as dpro', 'dpro.id_tb_descripcion_procesos', '=', 'pro.id_tb_descripcion_procesos')
            ->join('tb_departamentos as dep', 'dep.id_tb_departamentos', '=', 'dpro.id_tb_departamentos')
            ->select('pro.id_tb_procesos', 'pro.id_tb_procesos', 'pro.tb_ordenes_id_tb_ordenes', 'pro.tb_fecha_hora', 'emp.name as asignado', 'dpro.descripcion_procesos', 'usr.name as asignador', 'dep.departamentos', 'dep.id_tb_departamentos')
            ->where('pro.tb_ordenes_id_tb_ordenes', '=', $id)
            ->orderby('pro.tb_fecha_hora', 'asc')
            ->get();

        $procesos1 = DB::table('tb_procesos as pro')
            ->join('users as emp', 'emp.id', '=', 'pro.asignado')
            ->join('users as usr', 'usr.id', '=', 'pro.asignador')
            ->join('tb_descripcion_procesos as dpro', 'dpro.id_tb_descripcion_procesos', '=', 'pro.id_tb_descripcion_procesos')
            ->select('pro.id_tb_procesos', 'pro.id_tb_procesos', 'pro.tb_ordenes_id_tb_ordenes', 'pro.tb_fecha_hora', 'emp.name as asignado', 'dpro.descripcion_procesos', 'usr.name as asignador', 'dpro.id_tb_descripcion_procesos')
            ->where('pro.tb_ordenes_id_tb_ordenes', '=', $id)
            ->where('pro.condicion', '=', '1')
            ->get();

        //dd($procesos1);

        $listadoprocesos = DescripcionProcesos::where('condicion', '=', '1')->get();

        $usuarios = User::get();

        return $this->view('ventas.ordenes.show');
    }
}
