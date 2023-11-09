    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateLikesTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */

        public function up()
        {
            Schema::create('likes', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id');
                $table->unsignedBigInteger('social_post_id');
                
                $table->unique(['user_id', 'social_post_id']);
        
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->foreign('social_post_id')->references('id')->on('social_posts')->onDelete('cascade');

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
            Schema::dropIfExists('likes');
        }
    }
