<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
        private static $blog_posts = [
            [
                "title" => "Judul Post Pertama",
                "slug" => "judul-post-pertama",
                "author" => "Alfin Murod",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste neque molestiae voluptate autem qui eveniet illum quisquam
                earum a vero odit, quibusdam porro dolorem enim sit inventore unde rem natus magni ipsa numquam deserunt maiores
                ducimus! Id, harum explicabo? Reiciendis facilis eveniet vel placeat, error molestiae incidunt commodi dolor omnis
                labore, nemo optio asperiores, eos deserunt mollitia cupiditate ipsa saepe doloribus? Repellendus mollitia ducimus ipsum
                amet culpa, vitae similique, ad voluptatibus optio aspernatur, totam illum minus necessitatibus! Consequatur, modi vero?"
            ],
            [
                "title" => "Judul Post Kedua",
                "slug" => "judul-post-kedua",
                "author" => "Arsya Amalia Ristias",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab exercitationem, temporibus ducimus vitae velit molestiae
                rerum dolor asperiores sit dolore expedita autem. Esse quis aut beatae ex magnam necessitatibus ratione, error, officiis
                excepturi eos delectus distinctio molestias nostrum. Id error corrupti quaerat eius fuga. Reiciendis consectetur quaerat
                pariatur dolorem quibusdam nesciunt, totam optio vel ullam possimus. Similique aspernatur quisquam eos eaque inventore
                incidunt impedit quasi eum. Quasi provident incidunt voluptates sint, nihil consequatur dolorum dolore vel corrupti
                vitae esse accusamus molestiae. Necessitatibus praesentium odit repudiandae asperiores natus quibusdam. Eius illum vel
                et quaerat tempore asperiores dolore soluta, porro delectus natus?"
            ]
            ];

            public static function all(){
                return collect(self ::$blog_posts);
            }

            public static function find($slug){
                $posts = static::all();
                // $post = [];
        // foreach($posts as $p){
        //     if ($p["slug"] === $slug) {                
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
            }
}
