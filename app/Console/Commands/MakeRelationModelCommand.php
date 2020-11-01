<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use File;

class MakeRelationModelCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:relation {service}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new relation in models';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        // Model1-belongsTo-ratauranteId-Model2-hasMany
        $service = $this->argument('service');

        $campos = explode('-', $service);

        $filename = "App/" . $campos[0] . '.php'; // the file to change
        $search = "// relacionamentos"; // the content after which you want to insert new stuff
        $insert = "
        
    public function ".strtolower($campos[3])."()
    {
        return "."$"."this"."->belongsTo(App\\".$campos[3]."::class, '".$campos[2]."', 'id');
    }"; // your new stuff

        $replace = $search. "\n". $insert;

        file_put_contents($filename, str_replace($search, $replace, file_get_contents($filename)));


        // usuario
        $filename = "App/" . $campos[3] . '.php'; // the file to change
        $search = "// relacionamentos"; // the content after which you want to insert new stuff
        $insert = "
        
    public function ".strtolower($campos[0])."()
    {
        return "."$"."this"."->belongsTo(App\\".$campos[0]."::class);
    }"; // your new stuff

        $replace = $search. "\n". $insert;

        file_put_contents($filename, str_replace($search, $replace, file_get_contents($filename)));
    }


    public function viewPathMigrations($service)
    {
        $service = str_replace('.', '/', $service);

        $agora = date('Y_m_d');      
        $path = "database/migrations/" . $agora . "_".date('H'). date('m') . date('s') . "_create_" . strtolower($service) . "s_table.php";

        return $path;
    }

    /**
     * Create service directory if not exists.
     *
     * @param $path
     */
    public function createDir($path)
    {
        $dir = dirname($path);

        if (!file_exists($dir))
        {
            mkdir($dir, 0777, true);
        }
    }
}