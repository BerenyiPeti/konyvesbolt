<?php

use App\Models\Book;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('author',32);
            $table->longText('title',150);
            $table->integer('pieces')->default(50);
            $table->timestamps();
        });

        Book::create(['author'=>'Bohumil Hrabal','title'=>'Gyengéd barbárok']);
        Book::create(['author'=>'J.R.R. Tolkien','title'=>'Hobbit', 'pieces'=>10]);
        Book::create(['author'=>'Kaczur Sándor','title'=>'Programozás Java nyelven', 'pieces'=>100]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
