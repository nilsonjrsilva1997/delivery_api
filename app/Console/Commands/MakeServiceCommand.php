<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use File;

class MakeServiceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {service}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new service providader';

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
        // criando controller com comando
        $service = $this->argument('service');

        $campos = explode('-', $service);

        $service = $campos[0];

        // 'Bank' => App\Bank::class,
        // 'BankValidateService' => App\Http\Services\BankValidateService::class,

        // $this->info("File {$path} created.");
        $filename = 'config/app.php'; // the file to change
        $search = "aliases' => ["; // the content after which you want to insert new stuff
        $insert = "        '".$service."' => App\\".$service."::class,
        '".$service."ValidateService' => App\Http\Services\\".$service."ValidateService::class,"; // your new stuff

        $replace = $search. "\n". $insert;

        file_put_contents($filename, str_replace($search, $replace, file_get_contents($filename)));


        $path = $this->viewPathController(ucfirst($service));

        $this->createDir($path);

        if (File::exists($path))
        {
            $this->error("File {$path} already exists!");
            return;
        }

        File::put($path, 
'<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\\'.$service.';

class '.$service.'Controller extends BaseController
{
   
}
');

// criando model
//$service = $this->argument('service');

$path = $this->viewPathModel($service);

$this->createDir($path);

if (File::exists($path))
{
    $this->error("File {$path} already exists!");
    return;
}


$campos_string_model = '';

// pegando campos
for($i=0; $i < count($campos); $i++) {
    $campo = [];
    if($i != 0) {        
        $campo = (explode('_', $campos[$i]));
        $campos_string_model .= '"'.$campo[1].'"' . ', ';
    }
}

File::put($path, 
'<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class '.$service.' extends Model
{
    protected $table = "'.strtolower($service).'s";

    protected $fillable = ['.$campos_string_model.'];

    // relacionamentos
}

');


// coloca dados no api
// $service = $this->argument('service');

        $path = $this->viewPathRoutes($service);

        File::append($path,
'

Route::prefix("'.strtolower($service).'")->group(function () {
    Route::get("/", "'.$service.'Controller@index");
    Route::get("show/{id}", "'.$service.'Controller@show");
    Route::post("create", "'.$service.'Controller@create");
    Route::put("update/{id}", "'.$service.'Controller@update");
    Route::delete("destroy/{id}", "'.$service.'Controller@destroy");
});
', '//teste');


// criando model
// $service = $this->argument('service');

        $path = $this->viewPathMigrations($service);

        $this->createDir($path);

        if (File::exists($path))
        {
            $this->error("File {$path} already exists!");
            return;
        }

        $campos_string = '';
        // pegando campos
        for($i=0; $i < count($campos); $i++) {
            $campo = [];
            if($i != 0) {
                $campo = (explode('_', $campos[$i]));
                $campos_string .= '$table->'.$campo[0].'("'.$campo[1].'");' . '
            ';
            }
        }

        File::put($path, 
'<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create'.$service.'sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("'.strtolower($service).'s", function (Blueprint $table) {
            $table->id();
            '.$campos_string.'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("'.strtolower($service).'s");
    }
}


');

$path = $this->viewPath($service);

$this->createDir($path);

if (File::exists($path))
{
    $this->error("File {$path} already exists!");
    return;
}


$campos_rules = '';
$campos_rules2 = '';
    // pegando campos
    for($i=0; $i < count($campos); $i++) {
        $campo = [];

        if($i != 0) {
            $campo = (explode('_', $campos[$i]));

            if($campo[0] == 'float') {
                $campos_rules .= '"'.$campo[1].'" => "required|numeric",
    ';
            }

            if($campo[0] == 'string') {
                $campos_rules .= '"'.$campo[1].'" => "required|string|max:255",
    ';
            }

            if($campo[0] == 'integer') {
                $campos_rules .= '"'.$campo[1].'" => "required|integer",
    ';
            }      
        }

        if($i != 0) {
            $campo = (explode('_', $campos[$i]));

            if($campo[0] == 'float') {
                $campos_rules2 .= '"'.$campo[1].'" => "numeric",
    ';
            }

            if($campo[0] == 'string') {
                $campos_rules2 .= '"'.$campo[1].'" => "string|max:255",
    ';
            }

            if($campo[0] == 'integer') {
                $campos_rules2 .= '"'.$campo[1].'" => "integer",
    ';
            }      
        }


    }

File::put($path, 
'<?php

namespace App\Http\Services;

class ' .$service .'ValidateService
{
public function getValidateRulesCreate()
{
$validateAttributes = 
[
    '.$campos_rules.'
];

return $validateAttributes;
}

public function getValidateRulesUpdate()
{
$validateAttributes = 
[
    '.$campos_rules2.'
];

return $validateAttributes;
}
}

');




    }

     /**
     * Get the service full path.
     *
     * @param string $service
     *
     * @return string
     */
    public function viewPath($service)
    {
        $service = str_replace('.', '/', $service) . 'ValidateService.php';

        $path = "app/Http/Services/{$service}";

        return $path;
    }

    public function viewPathController($service)
    {
        $service = str_replace('.', '/', $service) . 'Controller.php';

        $path = "app/Http/Controllers/{$service}";

        return $path;
    }

    public function viewPathModel($service)
    {
        $service = str_replace('.', '/', $service);

        $path = "app/{$service}" . ".php";

        return $path;
    }


    public function viewPathRoutes($service)
    {
        $service = str_replace('.', '/', $service);

        $path = "routes/api.php";

        return $path;
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