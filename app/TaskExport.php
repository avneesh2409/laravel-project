<?php
namespace App;
use App\Task;
use Maatwebsite\Excel\Concerns\FromCollection;

class TaskExport implements FromCollection
{
  public function collection()
  {
    return Task::all();
  }
}