<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateController extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'controller:model {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $model = $this->argument('name');

        $content = "<?php\r\n\r\nnamespace App\\Http\\Controllers;\r\n\r\nuse App\\Models\\".$model.";\r\nuse Illuminate\\Http\\Request;\r\nuse App\\Http\\Controllers\\Controller;\r\nuse DataTables;\r\n\r\nclass ".$model."Controller extends Controller\r\n{\r\n    public function index()\r\n    {\r\n        return view('admin.".strtolower($model).".index');\r\n    }\r\n\r\n    public function store(Request ".'$request'.")\r\n    {\r\n        $".strtolower($model)." = ".$model."::create(".'$request->all()'.");\r\n        return response($".strtolower($model).");\r\n    }\r\n\r\n    public function show(".$model." $".strtolower($model).")\r\n    {\r\n        return response([\r\n            'data' => $".strtolower($model)."\r\n        ]);\r\n    }\r\n\r\n    public function update(Request ".'$request'.", ".$model." $".strtolower($model).")\r\n    {\r\n        $".strtolower($model)."->update(".'$request->all()'.");\r\n        return response([\r\n            'data' => $".strtolower($model)."\r\n        ]);\r\n    }\r\n\r\n    public function destroy(".$model." $".strtolower($model).")\r\n    {\r\n        $".strtolower($model)."->delete();\r\n        return response([\r\n            'data' => $".strtolower($model)."\r\n        ]);\r\n    }\r\n\r\n    public function datatable()\r\n    {\r\n        ".'$data'." = ".$model."::select('*');\r\n\r\n        return DataTables::of".'($dat'."a)\r\n            ->addIndexColumn()\r\n            ->addColumn('aksi', function ".'($dat'."a) {\r\n                return '\r\n                <div class=\"btn-group\">\r\n                    <button type=\"button\" onclick=\"editForm(`'. route('".strtolower($model).".update', ".'$data'.") .'`)\" class=\"btn btn-xs btn-info\"><i class=\"mdi mdi-pencil\"></i></button>\r\n                    <button type=\"button\" onclick=\"deleteData(`'. route('".strtolower($model).".destroy', ".'$data'.") .'`)\" class=\"btn btn-xs btn-danger\"><i class=\"mdi mdi-trash-can\"></i></button>\r\n                </div>\r\n                ';\r\n            })\r\n            ->rawColumns(['aksi'])\r\n            ->make(true);\r\n    }\r\n}";

        $fp = fopen(base_path('app')."/"."Http/Controllers/".$model."Controller.php","wb");
        fwrite($fp,$content);
        fclose($fp);
    }
}
