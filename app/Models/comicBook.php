<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class comicBook extends Model
{
    use Sortable;
    use HasFactory;
    protected $fillable = ['title', 'volume', 'issue_number', 'publication_month', 'publication_year', 
                            'condition', 'last_name_writer', 'first_name_writer', 'last_name_artist', 'first_name_artist'];
    protected $table="comicBooks";
    public $sortable= ['title', 'volume', 'issue_number', 'last_name_writer', 'last_name_artist', 'condition', 'publication_month', 'publication_year'];
}
