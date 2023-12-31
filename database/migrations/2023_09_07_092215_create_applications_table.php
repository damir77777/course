<?php 
 
use App\Models\Course; 
use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint; 
use Illuminate\Support\Facades\Schema; 
 
return new class extends Migration 
{ 
    /** 
     * Run the migrations. 
     */ 
    public function up(): void 
    { 
        Schema::create('applications', function (Blueprint $table) { 
            $table->id(); 
            $table->string("email", 70); 
            $table->string("name", 50); 
            $table->foreignIdFor(Course::class); //course_id 
            $table->foreign("course_id")->references("id")->on("courses"); 
            $table->boolean("is_confirm")->default(0); 
            $table->timestamp('created_at')->useCurrent(); 
            $table->timestamp('updated_at')->useCurrent(); 
        }); 
    } 
 
    /** 
     * Reverse the migrations. 
     */ 
    public function down(): void 
    { 
        Schema::dropIfExists('applications'); 
    } 
};