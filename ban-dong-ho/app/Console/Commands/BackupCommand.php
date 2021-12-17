<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

class BackupCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'backup data';

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
        function xuatSQL($table,&$sql){
            $insert ="";
            $values = "";
            $select = DB::select("select * from `$table`");
            foreach($select as $col){
                foreach($col as $name=>$v){
                    $insert .= "`$name`,";
                    $values .= $v==null?"null,":"'".str_replace("'","\\'",$v)."',";
                }
                $insert = substr($insert,0,strlen($insert)-1);
                $values= substr($values,0,strlen($values)-1);  
                $sql.="INSERT INTO `$table` ($insert) VALUES ($values);";  
                $insert ="";
                $values = "";
            }      
        }
        function Backup(){
            $backup = [];
            $sql = "";
            $databaseName = Config::get('database.connections.'.Config::get('database.default'));
            $database = $databaseName["database"];
            $tableName = DB::select("SELECT table_name FROM information_schema.tables WHERE table_schema = '$database';");
            foreach($tableName as $table){
                if($table->table_name != "migrations" && $table->table_name !="tinhthanhpho" && $table->table_name != "quanhuyen" && $table->table_name !="xaphuongthitran")
                    xuatSQL($table->table_name,$sql);
            }
            file_put_contents(storage_path("\\backup\\bakdata.sql"),$sql);
        }
        Backup();
        return 0;
    }
}
